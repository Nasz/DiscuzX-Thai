<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_checkonline.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'checkonline_name' => 'การ์ดเรดาร์',
	'checkonline_desc' => 'ตรวจสอบว่าผู้ใช้ออนไลน์หรือไม่',
	'checkonline_targetuser' => 'คุณต้องการดูว่าใครออนไลน์',
	'checkonline_info_nonexistence' => 'กรุณากรอกชื่อผู้ใช้',
	'checkonline_hidden_message' => '{username} การลักลอบในปัจจุบันเวลากิจกรรมสุดท้ายคือ {time}',
	'checkonline_online_message' => '{username} ออนไลน์ปัจจุบันเวลากิจกรรมสุดท้ายคือ {time}',
	'checkonline_offline_message' => '{username} ปัจจุบันออฟไลน์ ',
	'checkonline_info_noperm' => 'ขออภัยคุณไม่มีสิทธิ์ที่จะดู IP ของบุคคลนี้',

	'checkonline_notification' => 'มีคนใช้{magicname}ตรวจสอบว่าคุณออนไลน์หรือไม่',
);

?>