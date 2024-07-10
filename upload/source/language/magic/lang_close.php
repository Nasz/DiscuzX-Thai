<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_close.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'close_name' => 'การ์ดเงียบ',
	'close_desc' => 'คุณสามารถปิดกระทู้ห้ามการตอบกลับ',
	'close_expiration' => 'ระยะเวลาปิดใช้งาน',
	'close_expiration_comment' => 'สามารถตั้งค่ากระทู้ได้นานเท่าใดและ 24 ชั่วโมงโดยค่าเริ่มต้น',
	'close_forum' => 'อนุญาตให้ส่วนของรายการนี้',
	'close_info' => 'ปิดกระทู้ที่ระบุ {expiration} ชั่วโมงโปรดป้อน ID ของกระทู้',
	'close_info_nonexistence' => 'โปรดระบุหัวข้อที่จะปิด',
	'close_succeed' => 'ชุดรูปแบบการดำเนินการของคุณถูกปิด',
	'close_info_noperm' => 'ขออภัยชุดรูปแบบไม่ได้อยู่อนุญาตให้การบำรุง',
	'close_info_user_noperm' => 'ขออภัยคุณไม่สามารถใช้เสานี้กับบุคคลนี้ได้',

	'close_notification' => 'กระทู้ของคุณ {subject} ผ้าห่ม {actor} ใช้แล้ว{magicname}，<a href="forum.php?mod=viewthread&tid={tid}">ไปดู！</a>',
);

?>