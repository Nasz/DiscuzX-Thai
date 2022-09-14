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
	'error_end_message' => '<a href="http://{host}">{host}</a> บันทึกรายละเอียดของข้อมูลข้อผิดพลาดนี้, ความไม่สะดวกในการเข้าถึงคุณขออภัย',
	'suggestion_plugin' => 'หากคุณเป็นเว็บมาสเตอร์ฉันขอแนะนำให้คุณลองปิดที่ศูนย์บริหารจัดการ <a href="admin.php?action=plugins&frames=yes" class="guess" target="_blank">{guess}</a> เสียบเข้าไป <a href="admin.php?action=tools&operation=updatecache&frames=yes" class="guess" target="_blank">รีเฟรชแคช</a> แก่นแท้หากปัญหาได้รับการแก้ไขหลังจากปลั๊กในขอแนะนำให้คุณติดต่อปลั๊กอินปลั๊กเพื่อขอความช่วยเหลือ',
	'suggestion' => 'หากคุณเป็นเว็บมาสเตอร์ขอแนะนำให้คุณลองไปที่ศูนย์บริหารจัดการ <a href="admin.php?action=tools&operation=updatecache&frames=yes" target="_blank">รีเฟรชแคช</a> คุณยังสามารถผ่าน <a href="https://www.discuz.net/" target="_blank">Discuz! เป็นทางการ</a> ขอความช่วยเหลือหากคุณแน่ใจว่านี่เป็น Bug คุณสามารถเป็นได้โดยตรง <a href="https://gitee.com/discuz/DiscuzX/issues" target="_blank">ส่ง Issue</a> ให้เรา',

	'file_upload_error_-101' => 'การอัพโหลดล้มเหลว!ไฟล์อัปโหลดไม่มีอยู่หรือผิดกฎหมายโปรดส่งคืน',
	'file_upload_error_-102' => 'การอัพโหลดล้มเหลว!สำหรับไฟล์ประเภทที่ไม่ใช่รูปภาพโปรดส่งคืน',
	'file_upload_error_-103' => 'การอัพโหลดล้มเหลว!ไม่สามารถเขียนไฟล์หรือไม่สามารถเขียนได้โปรดส่งคืน',
	'file_upload_error_-104' => 'การอัพโหลดล้มเหลว!ไม่สามารถจดจำรูปแบบไฟล์รูปภาพได้โปรดส่งคืน',
);

?>