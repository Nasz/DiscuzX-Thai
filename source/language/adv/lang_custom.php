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
	'custom_desc' => 'ด้วยการเพิ่มรหัสโฆษณาลงในไฟล์เทมเพลตและ HTML คุณสามารถเพิ่มโฆษณาลงในหน้าใดก็ได้ของเว็บไซต์ใช้ได้กับการรู้ html ง่ายๆเว็บมาสเตอร์ความรู้<br /><br />
		<a href="javascript:;" onclick="prompt(\'กรุณาคัดลอก(CTRL+C)เนื้อหาต่อไปนี้ถูกเพิ่มลงในเทมเพลตเพิ่มตำแหน่งโฆษณานี้\', \'<!--{ad/custom_'.$_GET['customid'].'}-->\')" />การโทรภายใน</a>&nbsp;
		<a href="javascript:;" onclick="prompt(\'กรุณาคัดลอก(CTRL+C)มีการเพิ่มเนื้อหาต่อไปนี้ลงใน HTML ในไฟล์เพิ่มตำแหน่งโฆษณานี้\', \'&lt;script type=\\\'text/javascript\\\' src=\\\''.$_G['siteurl'].'api.php?mod=ad&adid=custom_'.$_GET['customid'].'\\\'&gt;&lt;/script&gt;\')" />การโทรภายนอก</a>',
	'custom_id_notfound' => 'ไม่มีโฆษณาที่กำหนดเอง',
	'custom_codelink' => 'การโทรภายใน',
	'custom_text' => 'โฆษณาที่กำหนดเอง',
);

?>