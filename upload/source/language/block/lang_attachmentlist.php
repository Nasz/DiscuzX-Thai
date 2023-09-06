<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_attachmentlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'attachmentlist_name' => 'รายการไฟล์แนบ',
	'attachmentlist_desc' => 'เรียกรายการไฟล์แนบ',
	'attachmentlist_fids' => 'เลือกบอร์ด',
	'attachmentlist_fids_comment' => 'กำหนดบอร์ดที่อนุญาตให้เรียกภาพมาแสดง สามารถกด CTRL เพื่อเลือกหลายบอร์ดได้ การเลือกทั้งหมดหรือไม่เลือกเท่ากับว่าไม่มีข้อจำกัด',
	'attachmentlist_tids' => 'เลือกเธรด',
	'attachmentlist_tids_comment' => 'กรอก เธรดID(tid) สามารถกรอกได้หลายเธรดโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'attachmentlist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'attachmentlist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'attachmentlist_items' => 'จำนวนไอเทมที่แสดง',
	'attachmentlist_items_comment' => 'ตั้งค่าจำนวนไอเทมที่แสดงในหนึ่งกระทู้ โปรดตั้งค่าเป็นจำนวนเต็มที่มากกว่า 0',
	'attachmentlist_titlelength' => 'ความยาวชื่อเรื่อง',
	'attachmentlist_titlelength_comment' => 'กำหนดความยาวสูงสุดเมื่อแสดงชื่อไฟล์แนบ/ชื่อโพสต์',
	'attachmentlist_summarylength' => 'ความยาวเนื้อหา',
	'attachmentlist_summarylength_comment' => 'ตั้งค่าความยาวสูงสุดของคำอธิบายไฟล์แนบ/การแสดงเนื้อหาโพสต์',
	'attachmentlist_maxwidth' => 'ความกว้างสูงสุดของภาพ (พิกเซล)',
	'attachmentlist_maxwidth_comment' => 'ตั้งค่าว่าจะย่อหรือขยายขนาดของรูปภาพโดยอัตโนมัติตามความกว้างที่ตั้งไว้หรือไม่ 0 หมายถึงไม่มีการปรับขนาดอัตโนมัติ',
	'attachmentlist_maxheight' => 'ความสูงภาพสูงสุด (พิกเซล)',
	'attachmentlist_maxheight_comment' => 'ตั้งค่าว่าจะย่อหรือขยายขนาดของรูปภาพโดยอัตโนมัติตามความสูงของการตั้งค่านี้หรือไม่ 0 หมายถึงไม่มีการปรับขนาดอัตโนมัติ',
	'attachmentlist_threadmethod' => 'เรียกไฟล์ตามโหมดเธรด',
	'attachmentlist_threadmethod_comment' => 'การเลือก "ใช่" จะเรียกไฟล์แนบตามโหมดของเธรด และแต่ละเธรดจะแสดงไฟล์แนบ 1 รายการ การเลือก "ไม่ใช่" จะเรียกตามวิธีการแนบ',
	'attachmentlist_digest' => 'กรองบทคัดย่อ',
	'attachmentlist_digest_comment' => 'เลือกกรองเฉพาะเธรด หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'attachmentlist_digest_0' => 'เธรดทั่วไป',
	'attachmentlist_digest_1' => 'บทคัดย่อ I',
	'attachmentlist_digest_2' => 'บทคัดย่อ II',
	'attachmentlist_digest_3' => 'บทคัดย่อ III',
	'attachmentlist_special' => 'กรองเธรดพิเศษ',
	'attachmentlist_special_comment' => 'เลือกกรองเฉพาะเธรด หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'attachmentlist_special_1' => 'เธรดโพล',
	'attachmentlist_special_2' => 'เธรดขายของ',
	'attachmentlist_special_3' => 'เธรดว่าจ้าง',
	'attachmentlist_special_4' => 'เธรดกิจกรรม',
	'attachmentlist_special_5' => 'เธรดดีเบต',
	'attachmentlist_special_0' => 'เธรดทั่วไป',
	'attachmentlist_special_reward' => 'กรองเธรดรางวัล',
	'attachmentlist_special_reward_comment' => 'ตั้งค่ากรองเฉพาะเธรดแจกรางวัล',
	'attachmentlist_special_reward_0' => 'ทั้งหมด',
	'attachmentlist_special_reward_1' => 'จบแล้ว',
	'attachmentlist_special_reward_2' => 'ยังไม่จบ',
	'attachmentlist_dateline' => 'เวลาอัปโหลด',
	'attachmentlist_dateline_nolimit' => 'ไม่จำกัด',
	'attachmentlist_dateline_hour' => '1 ชั่วโมงก่อน',
	'attachmentlist_dateline_day' => '24 ชั่วโมงก่อน',
	'attachmentlist_dateline_week' => '1 สัปดาห์ก่อน',
	'attachmentlist_dateline_month' => 'เมื่อเดือนก่อน',
	'attachmentlist_highlight' => 'ไฮไลท์',

);

?>