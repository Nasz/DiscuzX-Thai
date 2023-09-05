<?php

$datadir = DISCUZ_ROOT.'./source/';

showtips('<li><strong>ก่อนเริ่มการแปลง โปรดตรวจสอบให้แน่ใจว่าไดเร็กทอรี่ data นั้นสามารถเขียนข้อมูลได้ มิฉะนั้นการตั้งค่าจะไม่ถูกบันทึก</strong></li><li><strong>ถ้าใช้ Discuz! ร่วมกับ UChome จำเป๋นต้องอัปเกรด Discuz! ก่อน</strong></li><li>โปรดเลือกโปรแกรมแปลงให้ถูกต้อง มิฉะนั้นการแปลงอาจไม่ประสบความสำเร็จ</li><li>โปรแกรมแปลงนี้จะไม่ทำลายข้อมูลต้นฉบับ ดังนั้นเมื่อแปลงข้อมูลเสร็จจะพบว่าขนาดพื้นที่ฐานข้อมูลมีขนาดเพิ่มขึ้นเป็นสองเท่า</li>');

if(is_dir($datadir)) {

	$cdir = dir($datadir);
	show_table_header();
	show_table_row(array(
			'เวอร์ชั่นดั้งเดิม',
			'เวอร์ชั่นเป้าหมาย',
			array('width="50%"', 'แนะนำ'),
			array('width="5%"', 'อธิบาย'),
			array('width="5%"', 'ติดตั้ง'),
			array('width="5%"', ''),
		), 'header title');
	while(($entry = $cdir->read()) !== false) {
		if(($entry != '.' && $entry != '..') && is_dir($datadir.$entry)) {
			$settingfile = $datadir.$entry.'/setting.ini';
			$readmefile = $datadir.$entry.'/readme.txt';

			$readme = file_exists($readmefile) ? '<a target="_blank" href="source/'.$entry.'/readme.txt">ตรวจสอบ</a>' : '';

			if(file_exists($settingfile) && $setting = loadsetting($entry)) {
				$trclass = $trclass == 'bg1' ? 'bg2' : 'bg1';
				show_table_row(
					array(
						$setting['program']['source'],
						$setting['program']['target'],
						$setting['program']['introduction'],
						array('align="center"', $readme),
						array('align="center"', '<a href="index.php?a=setting&source='.rawurlencode($entry).'">เปลี่ยนแปลง</a>'),
						array('align="center"', '<a href="index.php?a=config&source='.rawurlencode($entry).'">เริ่มต้น</a>'),
					), $trclass
				);
			}
		}
	}
	$cdir->close();
	show_table_footer();
} else {
	showmessage('config_child_error');
}