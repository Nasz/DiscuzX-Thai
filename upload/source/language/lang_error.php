<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_error.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'System Message' => 'ข้อมูลเว็บไซต์',

	'config_notfound' => 'ไฟล์กำหนดค่า "config_global.php" ไม่พบหรือไม่สามารถเข้าถึงได้ โปรดยืนยันว่าคุณได้ติดตั้งโปรแกรมอย่างถูกต้อง',
	'template_notfound' => 'ไม่พบไฟล์เทมเพลตหรือไม่สามารถเข้าถึงได้',
	'directory_notfound' => 'ไม่พบหรือไม่สามารถเข้าถึงไดเรกทอรี',
	'request_tainting' => 'คำขอการเข้าถึงปัจจุบันของคุณมีอักขระที่ผิดกฎหมายและถูกปฏิเสธโดยระบบ',
	'db_help_link' => 'คลิกที่นี่เพื่อขอความช่วยเหลือ',
	'db_error_message' => 'ข้อความผิดพลาด',
	'db_error_sql' => '<b>SQL</b>: $sql<br />',
	'db_error_backtrace' => '<b>Backtrace</b>: $backtrace<br />',
	'db_error_no' => 'รหัสข้อผิดพลาด',
	'db_notfound_config' => 'ไฟล์กำหนดค่า "config_global.php" ไม่หรือไม่พบ',
	'db_notconnect' => 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ฐานข้อมูล',
	'db_security_error' => 'ภัยคุกคามความปลอดภัยประโยคการสอบสวน',
	'db_query_sql' => 'ตรวจสอบวลี',
	'db_query_error' => 'ข้อผิดพลาดประโยคสอบถาม',
	'db_config_db_not_found' => 'การกำหนดค่าฐานข้อมูลไม่ถูกต้องโปรดตรวจสอบอย่างระมัดระวัง config_global.php เอกสาร',
	'system_init_ok' => 'ระบบเว็บไซต์เริ่มต้นได้โปรด<a href="index.php">คลิกที่นี่</a>เข้า',
	'backtrace' => 'เรียกใช้ข้อมูล',
	'error_end_message' => 'ขออภัยในความไม่สะดวกต่อการเข้าชมเว็บไซต์ของคุณ นี่คือรายละเอียดบันทึกข้อผิดพลาดของเว็บไซต์ <a href="http://{host}">{host}</a>',
	'suggestion_user' => 'หากคุณเป็นผู้ใช้ เราขอแนะนำให้คุณลองรีเฟรชเพจ ปิดหน้าต่างเบราว์เซอร์ทั้งหมด แล้วลองดำเนินการอีกครั้ง หากไม่สามารถแก้ไขได้ ขอแนะนำให้คุณจับภาพหน้าจอของหน้านี้ให้ครบถ้วนแล้วบันทึก จากนั้นรายงานปัญหานี้ให้ผู้ดูแลเว็บไซต์ทราบ',
	'suggestion_plugin' => 'หากคุณเป็นเว็บมาสเตอร์ขอแนะนำให้คุณลอง <a href="admin.php?action=plugins&frames=yes" class="guess" target="_blank">{guess}</a> เพื่อเช็คปลั๊กอินหรือ <a href="admin.php?action=tools&operation=updatecache&frames=yes" class="guess" target="_blank">รีเฟรชแคช</a> หากปัญหายังไม่ได้รับการแก้ไขขอแนะนำให้คุณติดต่อยังเจ้าของปลั๊กอินปลั๊กเพื่อขอความช่วยเหลือ',
	'suggestion' => 'หากคุณเป็นเว็บมาสเตอร์ขอแนะนำให้คุณลอง <a href="admin.php?action=tools&operation=updatecache&frames=yes" target="_blank">รีเฟรชแคช</a> ผู้ใช้ชาวจีนสามารถขอความช่วยเหลือผ่าน <a href="https://www.discuz.net/" target="_blank">เว็บไซต์อย่างเป็นทางการของ Discuz!</a> หากคุณแน่ใจว่านี่เป็น Bug คุณสามารถเข้าไป <a href="https://gitee.com/discuz/DiscuzX/issues" target="_blank">แจ้งปัญหา</a> ให้เราทราบได้',

	'file_upload_error_-101' => 'การอัปโหลดล้มเหลว!ไฟล์อัปโหลดไม่มีอยู่หรือผิดกฎโปรดรับคืน',
	'file_upload_error_-102' => 'การอัปโหลดล้มเหลว!ไฟล์นี้ไม่ใช่รูปภาพโปรดรับคืน',
	'file_upload_error_-103' => 'การอัปโหลดล้มเหลว!ไม่สามารถเขียนหรืออ่านไฟล์ได้โปรดรับคืน',
	'file_upload_error_-104' => 'การอัปโหลดล้มเหลว!ไม่สามารถจำแนกรูปแบบไฟล์รูปภาพได้โปรดรับคืน',
);

?>