<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_houselist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'categorylist_fids' => 'เลือกบอร์ด',
	'categorylist_fids_comment' => '设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'categorylist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'categorylist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'categorylist_showitems' => '显示数据条数',
	'categorylist_showitems_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'categorylist_titlelength' => '标题最大字节数',
	'categorylist_titlelength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'categorylist_fnamelength' => '标题最大字节数包含版块名称',
	'categorylist_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'categorylist_summarylength' => '主题简短内容文字数',
	'categorylist_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'categorylist_tids' => 'เลือกกระทู้',
	'categorylist_tids_comment' => 'กรอก IDกระทู้(tid) สามารถกรอกได้หลายกระทู้โดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'categorylist_keyword' => 'คีย์เวิร์ดชื่อ',
	'categorylist_keyword_comment' => 'กำหนดคีย์เวิร์ดสำหรับการเลือกจากชื่อ ข้อสังเกต: ปล่อยว่างหากไม่ต้องการกรอง； คีย์เวิร์ดสามารถใส่ * เพื่อค้นหาชื่อที่มีบางส่วนคล้ายกัน； การจับจับคู่หลายคีย์เวิร์ดเพื่อตีวงแคบ สามารถใช้การเคาะสเปซ หรือใช้ AND เชื่อมก็ได้ เช่น win32 AND unix；จับคู่หลายคีย์เวิร์ดเพื่อขยายวงการค้นหา สามารถใช้ | หรือ OR เชื่อมก็ได้ เช่น win32 OR unix',
	'categorylist_sortids' => '分类信息',
	'categorylist_sortids_comment' => '设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'categorylist_styleids' => '分类模板',
	'categorylist_styleids_comment' => '在后台对应的分类信息里面设置模板',
	'categorylist_styleids_style1' => 'สไตล์ 1',
	'categorylist_styleids_style2' => 'สไตล์ 2',
	'categorylist_styleids_style3' => 'สไตล์ 3',
	'categorylist_styleids_style4' => 'สไตล์ 4',
	'categorylist_styleids_style5' => 'สไตล์ 5',
	'categorylist_typeids_all' => '全部的主题分类',
	'categorylist_categoryids' => '分类信息',
	'categorylist_categoryids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'categorylist_categoryids_all' => '全部的分类信息',
	'categorylist_digest' => 'กรองกระทู้สำคัญ',
	'categorylist_digest_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'categorylist_digest_0' => 'กระทู้ทั่วไป',
	'categorylist_digest_1' => 'สำคัญ I',
	'categorylist_digest_2' => 'สำคัญ II',
	'categorylist_digest_3' => 'สำคัญ III',
	'categorylist_stick' => 'กรองกระทู้ปักหมุด',
	'categorylist_stick_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'categorylist_stick_0' => 'กระทู้ทั่วไป',
	'categorylist_stick_1' => 'ปักหมุด I',
	'categorylist_stick_2' => 'ปักหมุด II',
	'categorylist_stick_3' => 'ปักหมุด III',
	'categorylist_special' => 'กรองกระทู้พิเศษ',
	'categorylist_special_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'categorylist_special_1' => 'กระทู้โพล',
	'categorylist_special_2' => 'กระทู้ขายของ',
	'categorylist_special_3' => 'กระทู้ว่าจ้าง',
	'categorylist_special_4' => 'กระทู้กิจกรรม',
	'categorylist_special_5' => 'กระทู้ดีเบต',
	'categorylist_special_0' => 'กระทู้ทั่วไป',
	'categorylist_special_reward' => 'กรองกระทู้รางวัล',
	'categorylist_special_reward_comment' => 'ตั้งค่ากรองเฉพาะกระทู้แจกรางวัล',
	'categorylist_special_reward_0' => 'ทั้งหมด',
	'categorylist_special_reward_1' => 'จบแล้ว',
	'categorylist_special_reward_2' => 'ยังไม่จบ',
	'categorylist_recommend' => 'กรองกระทู้แนะนำ',
	'categorylist_recommend_comment' => 'ตั้งค่าว่าจะแสดงเฉพาะกระทู้แนะนำ',
	'categorylist_orderby' => 'เรียงตาม',
	'categorylist_orderby_comment' => 'ตั้งค่าวิธีการเรียงลำดับจากฟิลด์ของหมวด',
	'categorylist_orderby_lastpost' => 'ให้ตอบล่าสุดให้มาก่อน',
	'categorylist_orderby_dateline' => 'เผยแพร่ล่าสุดมาก่อน',
	'categorylist_orderby_replies' => 'ตอบล่าสุดมาก่อน',
	'categorylist_orderby_views' => 'ผู้ชมมากสุดมาก่อน',
	'categorylist_orderby_heats' => 'ป็อบมากสุดมาก่อน',
	'categorylist_orderby_recommends' => 'ห้วข้อแนะนำล่าสุดมาก่อน',
	'categorylist_orderby_hourviews' => 'จำนวนวิวในช่วงเวลาที่กำหนดเยอะสุดมาก่อน',
	'categorylist_orderby_todayviews' => 'จำนวนวิวในรอบวันเยอะสุดมาก่อน',
	'categorylist_orderby_weekviews' => 'จำนวนวิวในรอบสัปดาห์เยอะสุดมาก่อน',
	'categorylist_orderby_monthviews' => 'จำนวนวิวเดือนปัจจุบันเยอะสุดมาก่อน',
	'categorylist_orderby_hours' => 'ระยะเวลา(ชั่วโมง)',
	'categorylist_orderby_hours_comment' => 'ค่าเวลาของจำนวนมุมมองของจำนวนครั้งภายในเวลาที่กำหนด',
);

?>