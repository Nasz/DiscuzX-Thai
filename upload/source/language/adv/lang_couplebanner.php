<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_couplebanner.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'couplebanner_name' => 'ภาพรวม โฆษณาขนาบข้าง',
	'couplebanner_desc' => 'วิธีการแสดงผล: โฆษณาจะปรากฏขึ้นทั้งสองข้างของหน้าเพจที่ด้านบนของหน้าในรูปแบบ ภาพสี่เหลี่ยม หรือ Flash โดยทั่วไปความกว้างของเพจเมื่อรวมกับโฆษณาทั้งคู่แล้วไม่ควรเกิน 90% ของหน้าจอ หากมากว่านั้นมันอาจส่งผลกระทบต่อการท่องเว็บของผู้เข้าชมที่เบราว์เซอร์ของพวกเข้าน้อยกว่า 800 พิกเซล เพราะโฆษณานี้จะถูกขอบจอบัง โฆษณาปรากฏขึ้นโดยอัตโนมัติ เมื่อมีหลายคู่ระบบจะถูกเลือกแบบสุ่ม<br />การวิเคราะห์มูลค่า: เหมาะกับการแสดงผลบนหน้าจอที่มีความละเอียดสูง(1024x768 หรือสูงกว่า)ที่ทั้งสองด้านของหน้าจอจะมีพื้นที่ว่างของหน้าเว็บเท่านั้น แบบนั้นจึงจะไม่ทำให้ผู้เข้าชมรำคาญตาและสามารถเน้นเนื้อหาโปรโมชั่นได้เป็นอย่างดี อย่างไรก็ตามเนื่องจากข้อจำกัดเรื่องความกว้างหน้าจอและความกว้างของตารางหลักทำให้ไม่สามารถแสดงโฆษณานี่้รับประกันการแสดงผลได้อย่างเต็ม 100%',
	'couplebanner_index' => 'หน้าแรก',
	'couplebanner_fids' => 'เว็บบอร์ดเป้าหมาย',
	'couplebanner_fids_comment' => 'กำหนดเว็บบอร์ดที่จะเห็นโฆษณานี้',
	'couplebanner_groups' => 'คลับเป้าหมาย',
	'couplebanner_groups_comment' => 'การตั้งค่าสำหรับแสดงโฆษณาในคลับซึ่งมีผลบังคับใช้เมื่อ scope ของโฆษณามี "คลับ"',
	'couplebanner_position' => 'ตำแหน่งคู่',
	'couplebanner_position_comment' => 'ตั้งค่าตำแหน่งของคู่โฆษณา',
	'couplebanner_position_left' => 'ซ้าย',
	'couplebanner_position_right' => 'ขวา',
	'couplebanner_coupleadid' => 'จับคู่โฆษณา',
	'couplebanner_coupleadid_comment' => 'ตั้งค่าการจับคู่ระหว่างโฆษณาตัวปัจจุบันกับโฆษณาอีกชิ้น',
	'couplebanner_category' => 'แสดงหน้าหมวด',
	'couplebanner_category_comment' => 'ตั้งค่าแสดงโฆษณาคู่ในหน้าหมวด มีผลเฉพาะหน่วยโฆษณาที่ถูกกำหนดให้แสดงหน้าหมวด',
	'couplebanner_disableclose' => 'ปิดลิงค์ของโฆษณา',
	'couplebanner_disableclose_comment' => 'หากโค๊ดโฆษณาคุณมีลิงค์ในตัวอยู่แล้ว คุณสามารถปิดลิงค์ที่ระบบตั้งไว้ล่วงหน้าได้',
	'couplebanner_show' => 'แสดง',
	'couplebanner_hidden' => 'ซ่อน',
);

?>