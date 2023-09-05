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

$process = load_process('main');
if(empty($process)) {
	showmessage("โปรดเลือกโปรแกรมแปลงก่อน", "index.php?action=select&source=$source");
}

$prg = getgpc('prg');

$prg_dir['tables'] = DISCUZ_ROOT.'./source/'.$source.'/table/';
$prg_dir['start'] = DISCUZ_ROOT.'./source/'.$source.'/';
$prg_dir['steps'] = DISCUZ_ROOT.'./source/'.$source.'/';

$prg_done = 0;
$prg_next = '';
$prg_total = $prg_total = count($process['tables']) + count($process['start']) + count($process['steps']);

foreach (array('start', 'tables', 'steps') as $program) {
	if(!empty($process[$program]) && !$process[$program.'_is_end']) {
		foreach ($process[$program] as $k => $v) {
			if($v) {
				$prg_done ++;
			} elseif ($prg_next == '') {
				$prg_next = $k;
			}
		}
		if($prg_next) {
			if(empty($prg) || !file_exists($prg_dir[$program].$prg)) {
				$prg = $prg_next;
			}
			$prg_done ++;

			list($rday, $rhour, $rmin, $rsec) = remaintime(time() - $process['timestart']);
			$stime = gmdate('Y-m-d H:i:s', $process['timestart'] + 3600* 8);
			$timetodo = "เริ่มอัปเกรดเวลา：<strong>$stime</strong> ดำเนินการไปแล้ว <strong>$rday</strong>วัน <strong>$rhour</strong>ชั่วโมง <strong>$rmin</strong>นาที <strong>$rsec</strong>วินาที";
			$timetodo .= "<br><br>โปรแกรมแปลงกำลังดำเนินการอยู่ในขณะนี้ ( $prg_done / $prg_total ) <strong>$prg</strong> จะมีรีไดเรคเกิดขึ้นหลายครั้งในระหว่างกระบวนการโปรดอย่าปิดเบราว์เซอร์ของคุณ";
			$timetodo .= "<br><br>หากโปรแกรมถูกขัดจังหวะหรือคุณต้องการรีสตาร์ทโปรแกรม ให้คลิก (<a href=\"index.php?a=convert&source=$source&prg=$prg\">เริ่มต้นใหม่</a>)";

			showtips($timetodo);
			if(file_exists($prg_dir[$program].$prg)) {
				define('PROGRAM_TYPE', $program);
				require $prg_dir[$program].$prg;
				save_process_main($prg);
				showmessage("โปรแกรมคอนเวิร์ท $prg เสร็จเรียบร้อยแล้ว ข้ามไปยังโปรแกรมถัดไป", "index.php?a=convert&source=$source", null, 500);
			} else {
				showmessage('การแปลงข้อมูลหยุดชะงัก! ไม่สามารถเรียกหาโปรแกรมคอนเวิร์ท '.$prg);
			}
		} else {
			$process[$program.'_is_end'] = 1;
			save_process('main', $process);
		}
	} else {
		$prg_done = $prg_done + count($process[$program]);
	}
}

showmessage('เสร็จสิ้นกระบวนการแปลง', "index.php?action=finish&source=$source");

function save_process_main($prg = '') {
	global $process;
	if(defined('PROGRAM_TYPE')) {
		$prg = empty($prg) ? $GLOBALS['prg'] : $prg;
		$process[PROGRAM_TYPE][$prg] = 1;
	}
	save_process('main', $process);
}
?>