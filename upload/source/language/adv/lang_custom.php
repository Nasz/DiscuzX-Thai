<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_custom.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'custom_name' => 'โฆษณาที่กำหนดเอง',
	'custom_desc' => 'ด้วยการเพิ่มโค้ดโฆษณาลงในไฟล์เทมเพลตและ HTML คุณสามารถเพิ่มโฆษณาลงในหน้าใดก็ได้ของเว็บไซต์ ใช้กับเว็บมาสเตอร์รู้ html ขั้นพื้นฐาน<br /><br />
		<a href="javascript:;" onclick="prompt(\'กรุณาคัดลอก(CTRL+C)เนื้อหาต่อไปนี้ แล้ววางในเทมเพลต ในตำแหน่งที่ต้องการแสดงโฆษณา\', \'<!--{ad/custom_'.$_GET['customid']. '}-->\')" />ตัวเรียก js ภายใน</a>&nbsp;
		<a href="javascript:;" onclick="prompt(\'กรุณาคัดลอก(CTRL+C)เนื้อหาต่อไปนี้ แล้ววางในไฟล์ HTML ในตำแหน่งที่ต้องการแสดงโฆษณา\', \'&lt;script type=\\\'text/javascript\\\' src=\\\''.$_G['siteurl'].'api.php?mod=ad&adid=custom_'.$_GET['customid'].'\\\'&gt;&lt;/script&gt;\')" />ตัวเรียก js ภายนอก</a>',
	'custom_id_notfound' => 'ไม่มีโฆษณาที่กำหนดเอง',
	'custom_codelink' => 'ตัวเรียก js ภายใน',
	'custom_text' => 'โฆษณาที่กำหนดเอง',
);

?>