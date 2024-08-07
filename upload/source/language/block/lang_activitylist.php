<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_activitylist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'activitylist_fids' => 'เลือกบอร์ด',
	'activitylist_fids_comment' => 'ตั้งค่าส่วนที่อนุญาตให้เข้าร่วมในการโทรโพสต์ใหม่คุณสามารถกด CTRL เพื่อเลือกหลายอัน เลือกทั้งหมดหรือไม่เลือกเลยคือไม่จำกัด',
	'activitylist_uids' => 'UIDผู้เริ่ม',
	'activitylist_uids_comment' => 'กรอก IDผู้เริ่มกิจกรรม(uid) สามารถกรอกได้หลายคนโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'activitylist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'activitylist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'activitylist_items' => 'แสดงหมายเลขข้อมูล',
	'activitylist_items_comment' => 'ตั้งค่าจำนวนรายการชุดรูปแบบที่แสดงในแต่ละครั้งโปรดตั้งค่าให้มากกว่า 0 จำนวนเต็ม',
	'activitylist_titlelength' => 'ความยาวชื่อสูงสุด',
	'activitylist_titlelength_comment' => 'เมื่อความยาวชื่อเกินกว่าการตั้งค่านี้ไม่ว่าชื่อจะลดลงเป็นจำนวนไบต์โดยอัตโนมัติในการตั้งค่านี้หรือไม่ เพื่อไม่ให้ลดลงโดยอัตโนมัติ',
	'activitylist_fnamelength' => 'จำนวนสูงสุดของชื่อมีชื่อของส่วน',
	'activitylist_fnamelength_comment' => 'ตั้งค่าว่าความยาวของชื่อเรื่อง จะรวมเข้ากับความยาวของชื่อบอร์ดหรือไม่',
	'activitylist_summarylength' => 'หัวข้อหมายเลขข้อความสั้น ๆ',
	'activitylist_summarylength_comment' => 'ตั้งค่าจำนวนข้อความของหัวข้อของกระทู้ 0 เพื่อใช้ค่าเริ่มต้น 255',
	'activitylist_tids' => 'เลือกกระทู้',
	'activitylist_tids_comment' => 'กรอก IDกระทู้(tid) สามารถกรอกได้หลายกระทู้โดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'activitylist_keyword' => 'คีย์เวิร์ดชื่อ',
	'activitylist_keyword_comment' => 'กำหนดคีย์เวิร์ดสำหรับการเลือกจากชื่อ ข้อสังเกต: ปล่อยว่างหากไม่ต้องการกรอง； คีย์เวิร์ดสามารถใส่ * เพื่อค้นหาชื่อที่มีบางส่วนคล้ายกัน； การจับจับคู่หลายคีย์เวิร์ดเพื่อตีวงแคบ สามารถใช้การเคาะสเปซ หรือใช้ AND เชื่อมก็ได้ เช่น win32 AND unix；จับคู่หลายคีย์เวิร์ดเพื่อขยายวงการค้นหา สามารถใช้ | หรือ OR เชื่อมก็ได้ เช่น win32 OR unix',
	'activitylist_typeids' => 'เลือกหมวดกระทู้',
	'activitylist_typeids_comment' => 'เลือกกรองจากชนิดของกระทู้ หมายเหตุ: เลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'activitylist_typeids_all' => 'หมวดหมู่กระทู้ทั้งหมด',
	'activitylist_sortids' => 'หมวดหมู่กระทู้',
	'activitylist_sortids_comment' => 'เลือกกรองเฉพาะหมวดหมู่ หมายเหตุ: เลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'activitylist_sortids_all' => 'หมวดหมู่กระทู้ทั้งหมด',
	'activitylist_digest' => 'กรองบทคัดย่อ',
	'activitylist_digest_comment' => 'เลือกกรองเฉพาะหมวดหมู่ หมายเหตุ: เลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'activitylist_digest_0' => 'กระทู้ทั่วไป',
	'activitylist_digest_1' => 'บทคัดย่อ I',
	'activitylist_digest_2' => 'บทคัดย่อ II',
	'activitylist_digest_3' => 'บทคัดย่อ III',
	'activitylist_stick' => 'การกรองกระทู้ปักหมุด',
	'activitylist_stick_comment' => 'เลือกกรองเฉพาะหมวดหมู่ หมายเหตุ: เลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'activitylist_stick_0' => 'กระทู้ทั่วไป',
	'activitylist_stick_1' => 'ปักหมุดไว้ I',
	'activitylist_stick_2' => 'ปักหมุดไว้ II',
	'activitylist_stick_3' => 'ปักหมุดไว้ III',
	'activitylist_special' => 'ตัวกรองกระทู้พิเศษ',
	'activitylist_special_comment' => 'เลือกกรองเฉพาะหมวดหมู่ หมายเหตุ: เลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'activitylist_special_1' => 'กระทู้โพล',
	'activitylist_special_2' => 'กระทู้สินค้า',
	'activitylist_special_3' => 'กระทู้ของรางวัล',
	'activitylist_special_4' => 'กระทู้กิจกรรม',
	'activitylist_special_5' => 'กระทู้ดีเบต',
	'activitylist_special_0' => 'กระทู้ทั่วไป',
	'activitylist_special_reward' => 'กรองกระทู้ของรางวัล',
	'activitylist_special_reward_comment' => 'ตั้งค่ากรองเฉพาะกระทู้แจกรางวัล',
	'activitylist_special_reward_0' => 'ทั้งหมด',
	'activitylist_special_reward_1' => 'ซึ่งได้แก้ไขแล้ว',
	'activitylist_special_reward_2' => 'ยังไม่ได้รับการแก้ไข',
	'activitylist_recommend' => 'กรองกระทู้แนะนำ',
	'activitylist_recommend_comment' => 'ตั้งค่าว่าจะแสดงเฉพาะกระทู้แนะนำ',
	'activitylist_orderby' => 'เรียงกระทู้ตาม',
	'activitylist_orderby_comment' => 'ตั้งค่าวิธีการเรียงลำดับจากฟิลด์ของกิจกรรม',
	'activitylist_orderby_lastpost' => 'ตอบกลับล่าสุดขึ้นมาก่อน',
	'activitylist_orderby_dateline' => 'เผยแพร่ล่าสุดมาก่อน',
	'activitylist_orderby_replies' => 'ตอบล่าสุดมาก่อน',
	'activitylist_orderby_views' => 'ผู้ชมมากสุดมาก่อน',
	'activitylist_orderby_heats' => 'ป็อบมากสุดมาก่อน',
	'activitylist_orderby_recommends' => 'ห้วข้อแนะนำล่าสุดมาก่อน',
	'activitylist_orderby_hourviews' => 'จำนวนวิวในช่วงเวลาที่กำหนดเยอะสุดมาก่อน',
	'activitylist_orderby_todayviews' => 'จำนวนวิวในรอบวันเยอะสุดมาก่อน',
	'activitylist_orderby_weekviews' => 'จำนวนวิวในรอบสัปดาห์เยอะสุดมาก่อน',
	'activitylist_orderby_monthviews' => 'จำนวนวิวเดือนปัจจุบันเยอะสุดมาก่อน',
	'activitylist_orderby_hours' => 'ระยะเวลา(ชั่วโมง)',
	'activitylist_orderby_hours_comment' => 'ค่าเวลาของจำนวนมุมมองของจำนวนครั้งภายในเวลาที่กำหนด',
	'activitylist_orderby_todayhots' => 'เรียงลำดับในจำนวนที่ขายสะสมในวันนั้น',
	'activitylist_orderby_weekhots' => 'การเรียงลำดับผลผลิตทั้งหมดในสัปดาห์นี้',
	'activitylist_orderby_monthhots' => 'เรียงลำดับในจำนวนยอดขายต่อเดือนสะสมในเดือนนี้',
	'activitylist_price_add' => ' เพิ่ม ',
	'activitylist_place' => 'สถานที่จัดกิจกรรม',
	'activitylist_class' => 'ประเภทของกิจกรรม',
	'activitylist_class_all' => 'ทุกประเภท',
	'activitylist_gender' => 'ข้อกำหนดทางเพศ',
	'activitylist_gender_0' => 'ไม่จำกัด',
	'activitylist_gender_1' => 'ชาย',
	'activitylist_gender_2' => 'หญิง',
	'activitylist_orderby_weekstart' => 'จัดเรียงเวลาเริ่มต้นภายในหนึ่งสัปดาห์',
	'activitylist_orderby_monthstart' => 'การเรียงลำดับเวลาเริ่มต้นของกิจกรรมภายในหนึ่งเดือนของเดือนมกราคม',
	'activitylist_orderby_weekexp' => 'เรียงลำดับกำหนดเวลาสำหรับการลงทะเบียนภายในหนึ่งสัปดาห์',
	'activitylist_orderby_monthexp' => 'เรียงลำดับกำหนดเวลาสำหรับการลงทะเบียนภายในหนึ่งเดือน',
	'activitylist_orderby_weekhot' => 'เรียงลำดับจำนวนผู้เข้าร่วมภายในหนึ่งสัปดาห์',
	'activitylist_orderby_monthhot' => 'เรียงลำดับจำนวนผู้เข้าร่วมภายในหนึ่งเดือน',
	'activitylist_orderby_alltimehot' => 'จัดเรียงตามจำนวนผู้เข้าร่วมในกิจกรรมที่ไม่ผ่านการคัดเลือกทั้งหมด',
	'activitylist_highlight' => 'ไฮไลท์',
);

?>