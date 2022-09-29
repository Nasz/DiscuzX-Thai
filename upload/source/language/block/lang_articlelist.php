<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_articlelist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'articlelist_aids' => 'ระบุบทความ',
	'articlelist_aids_comment' => 'กรอกID (aid) ของบทความและใช้เครื่องหมายจุลภาค (,) เพื่อแยกระหว่างหลายบทความ',
	'articlelist_uids' => 'UIDผู้เขียน',
	'articlelist_uids_comment' => 'กรอก IDของผู้เขียน(uid) สามารถกรอกได้หลายคนโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'articlelist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'articlelist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'articlelist_tag' => 'แท็ค',
	'articlelist_tag_comment' => 'ระบุแท็คที่ใช้รวบรวม',
	'articlelist_titlelength' => 'ความยาวชื่อ',
	'articlelist_titlelength_comment' => 'ตั้งค่าความยาวสูงสุดของชื่อเรื่อง',
	'articlelist_summarylength' => 'ความยาวโปรไฟล์',
	'articlelist_summarylength_comment' => 'ตั้งค่าความยาวสูงสุดของโปรไฟล์',
	'articlelist_starttime' => 'เวลาปล่อย - เริ่ม',
	'articlelist_starttime_comment' => 'บทความเผยแพร่หลังจากเวลาที่กำหนด',
	'articlelist_endtime' => 'เลิกวางจำหน่าย - สิ้นสุด',
	'articlelist_endtime_comment' => 'บทความเผยแพร่จนถึงเวลาที่กำหนด',
	'articlelist_catid' => 'คอลัมน์บทความ',
	'articlelist_catid_comment' => 'เลือกคอลัมน์ของบทความ',
	'articlelist_picrequired' => 'กรองบทความที่ไม่มีปก',
	'articlelist_picrequired_comment' => 'เลือกว่าจะกรองบทความที่ไม่มีภาพปกหรือไม่',
	'articlelist_orderby' => 'เรียงตาม',
	'articlelist_orderby_comment' => 'ตั้งค่าวิธีการเรียงลำดับจากฟิลด์ของบทความ',
	'articlelist_orderby_dateline' => 'เผยแพร่ล่าสุดมาก่อน',
	'articlelist_orderby_viewnum' => 'เรียงตามจำนวนวิว',
	'articlelist_orderby_commentnum' => 'เรียงตามจำนวนเม้นท์',
	'articlelist_orderby_click' => 'กลับลำดับตามจำนวน{clickname}',
	'articlelist_publishdateline' => 'เวลาเผยแพร่บทความ',
	'articlelist_publishdateline_nolimit' => 'ไม่จำกัด',
	'articlelist_publishdateline_hour' => 'ภายใน 1 ชั่วโมง',
	'articlelist_publishdateline_day' => 'ภายใน 24 ชั่วโมง',
	'articlelist_publishdateline_week' => 'ภายใน 7 วัน',
	'articlelist_publishdateline_month' => 'ภายใน 1 เดือน',
	'articlelist_keyword' => 'คีย์เวิร์ดชื่อ',
	'articlelist_keyword_comment' => 'กำหนดคีย์เวิร์ดสำหรับการเลือกจากชื่อ ข้อสังเกต: ปล่อยว่างหากไม่ต้องการกรอง； คีย์เวิร์ดสามารถใส่ * เพื่อค้นหาชื่อที่มีบางส่วนคล้ายกัน； การจับจับคู่หลายคีย์เวิร์ดเพื่อตีวงแคบ สามารถใช้การเคาะสเปซ หรือใช้ AND เชื่อมก็ได้ เช่น win32 AND unix；จับคู่หลายคีย์เวิร์ดเพื่อขยายวงการค้นหา สามารถใช้ | หรือ OR เชื่อมก็ได้ เช่น win32 OR unix',
);

?>