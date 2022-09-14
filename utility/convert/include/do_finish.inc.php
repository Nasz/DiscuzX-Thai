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
$timetodo .= "<br><br>เริ่มต้นอัพเกรดเมื่อ: <strong>$stime</strong><br>สิ้นสุดการอัพเกรดเมื่อ: <strong>$etime</strong>";
$timetodo .= "<br>ใช้เวลาดำเนินการทั้งสิ้น: <strong>$rday</strong>วัน <strong>$rhour</strong>ชั่วโมง <strong>$rmin</strong>นาที <strong>$rsec</strong>วินาที";
$timetodo .= "<br><br>โดยปกติ，คุณอาจต้องอัพเกรดต่อไปตามพรอมต่อไปนี้，เพื่อให้โปรแกรมใหม่ของคุณทำงานตามปกติ";

showtips($timetodo);

show_table_header();
show_table_row(array('คำอธิบายสุดท้าย(readme)'), 'title');
show_table_row(array($txt));
show_table_footer();

?>