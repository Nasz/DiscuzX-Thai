<?php



$config = loadconfig();
$db_source = new db_mysql($config['source']);
$db_source->connect();

$db_target = new db_mysql($config['target']);
$db_target->connect();

$db_uc = new db_mysql($config['ucenter']);
if($setting['config']['ucenter']) {
	$db_uc->connect();
}

$prgdir = DISCUZ_ROOT.'./source/'.$source.'/table/';

$process = array(
'timestart' => time(),
'start' => array(),
'tables' => array(),
'steps' => array(),
);

if(submitcheck('submit')) {
	$prgs = getgpc('prgs');
	if(is_array($prgs)) {
		foreach ($prgs as $prg) {
			if(substr($prg, 0, 6) == 's_prg_') {
				$prg = substr($prg, 6);
				$process['steps'][$prg] = 0;
			}elseif(substr($prg, 0, 6) == 'c_prg_') {
				$prg = substr($prg, 6);
				$process['start'][$prg] = 0;
			} else {
				$process['tables'][$prg] = 0;
			}
		}
		save_process('main', $process);
		showmessage("คุณได้เลือก （".count($prgs)."） โปรแกรมแปลง ", "index.php?a=convert&s=$source");
	}
}

showtips("<li>โดยปกติ คุณจะต้องทำการแปลงตารางข้อมูลทั้งหมดด้านล่าง เว้นแต่ว่าการดำเนินการของคุณ เกิดการหยุดชะงักที่ไม่คาดคิดหรือมีความต้องการพิเศษระหว่างการดำเนินการ ให้คุณเลือกตัวเลือกที่จำเป็น</li>");
show_form_header();
show_table_header();
show_table_row(array('<span style="float: left">การกำหนดค่ากระบวนการแปลง</span><label style="float: right"><input type="checkbox" class="checkbox" onclick="checkAll(\'prefix\', this.form, \'prgs\')" id="chkall" name="chkall" checked> เลือกทั้งหมด</label>'), 'title');

if($setting['start']) {
	show_table_row(array('โปรแกรมแปลงที่รันก่อนหน้านี้'), 'bg1');
	echo "<tr class=bg2><td colspan=2>\n<ul id=\"ulist\">";
	foreach ($setting['start'] as $key => $value) {
		echo "<li><label><input type=\"checkbox\" class=\"checkbox\" name=\"prgs[]\" value=\"c_prg_$key.php\" checked>&nbsp;$key($value)</label></li>";
	}
	echo "</ul>\n</td></tr>";
}


$tablelist = array();
$cdir = dir($prgdir);
while(($entry = $cdir->read()) !== false) {
	if(($entry != '.' && $entry != '..') && is_file($prgdir.$entry)) {
		if(preg_match("/uc_/", $entry)) {
			$table_source = str_replace('.php', '', $db_source->tablepre.$entry);
			$source_exist = $db_source->result_first("SHOW TABLES LIKE '".substr($table_source, strpos($table_source, '.') + 1)."'");
			if(empty($source_exist)) {
				continue;
			}
		}
		$tablelist[] = $entry;
	}
}
$cdir->close();

if($tablelist) {
	sort($tablelist);
	show_table_row(array('<span style="float: left">โปรแกรมแปลงตารางข้อมูล</span>'), 'bg1');
	echo "<tr class=bg2><td colspan=2>\n<ul id=\"ulist\">";
	foreach ($tablelist as $entry) {
		echo "<li><label><input type=\"checkbox\" class=\"checkbox\" name=\"prgs[]\" value=\"$entry\" checked>&nbsp;".basename($entry, '.php')."</label></li>";
	}
	echo "</ul>\n</td></tr>";
}

if($setting['steps']) {
	show_table_row(array('โปรแกรมแปลงเสริมอื่น ๆ'), 'bg1');
	echo "<tr class=bg2><td colspan=2>\n<ul id=\"ulist\">";
	foreach ($setting['steps'] as $key => $value) {
		echo "<li><label><input type=\"checkbox\" class=\"checkbox\" name=\"prgs[]\" value=\"s_prg_$key.php\" checked>&nbsp;$key($value)</label></li>";
	}
	echo "</ul>\n</td></tr>";
}
show_table_footer();
show_form_footer('submit', 'เริ่มการแปลง');
showfooter();

exit();