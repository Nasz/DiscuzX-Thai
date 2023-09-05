<?php

$config = loadconfig();
$db_target = new db_mysql($config['target']);
$db_target->connect();

$readme = DISCUZ_ROOT.'./source/'.$source.'/readme.txt';
if(file_exists($readme)) {
	$txt = file_get_contents($readme);
} else {
	$txt = lang('finish');
}

$txt = nl2br(htmlspecialchars($txt));
$txt = str_replace('  ', '&nbsp;&nbsp;', $txt);
$txt = str_replace("\t", '&nbsp;&nbsp;&nbsp;&nbsp;', $txt);

$process = load_process('main');
list($rday, $rhour, $rmin, $rsec) = remaintime(time() - $process['timestart']);
$stime = gmdate('Y-m-d H:i:s', $process['timestart'] + 3600* 8);
$etime = gmdate('Y-m-d H:i:s',time() + 3600* 8);
$timetodo = "การแปลงข้อมูลของคุณเสร็จสิ้นแล้ว!";
$timetodo .= "<br><br>เริ่มต้นอัปเกรดเมื่อ: <strong>$stime</strong><br>สิ้นสุดการอัปเกรดเมื่อ: <strong>$etime</strong>";
$timetodo .= "<br>กระบวนการทั้งสิ้นกินเวลา: <strong>$rday</strong>วัน <strong>$rhour</strong>ชั่วโมง <strong>$rmin</strong>นาที <strong>$rsec</strong>วินาที";
$timetodo .= "<br><br>หลังจากอัปเกรดแล้ว เพื่อให้โปรแกรมทำงานได้อย่างถูกต้อง โปรดทำตามคำแนะนำด้านล่าง";

showtips($timetodo);

show_table_header();
show_table_row(array('คำอธิบายสุดท้าย(readme)'), 'title');
show_table_row(array($txt));
show_table_footer();

?>