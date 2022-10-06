<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_sortlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'sortlist_fids' => 'เลือกบอร์ด',
	'sortlist_fids_comment' => '设置允许参与新帖调用的版块，กด CTRL เพื่อเลือกหลายอัน，全选或全不选均为不做限制',
	'sortlist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'sortlist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'sortlist_showitems' => '显示数据条数',
	'sortlist_showitems_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'sortlist_titlelength' => '标题最大字节数',
	'sortlist_titlelength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'sortlist_fnamelength' => '标题最大字节数包含版块名称',
	'sortlist_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'sortlist_summarylength' => '主题简短内容文字数',
	'sortlist_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'sortlist_tids' => 'เลือกกระทู้',
	'sortlist_tids_comment' => 'กรอก IDกระทู้(tid) สามารถกรอกได้หลายกระทู้โดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'sortlist_keyword' => 'คีย์เวิร์ดชื่อ',
	'sortlist_keyword_comment' => 'กำหนดคีย์เวิร์ดสำหรับการเลือกจากชื่อ ข้อสังเกต: ปล่อยว่างหากไม่ต้องการกรอง； คีย์เวิร์ดสามารถใส่ * เพื่อค้นหาชื่อที่มีบางส่วนคล้ายกัน； การจับจับคู่หลายคีย์เวิร์ดเพื่อตีวงแคบ สามารถใช้การเคาะสเปซ หรือใช้ AND เชื่อมก็ได้ เช่น win32 AND unix；จับคู่หลายคีย์เวิร์ดเพื่อขยายวงการค้นหา สามารถใช้ | หรือ OR เชื่อมก็ได้ เช่น win32 OR unix',
	'sortlist_typeids' => 'เลือกชนิดกระทู้',
	'sortlist_typeids_comment' => 'เลือกกรองจากชนิดของกระทู้ หมายเหตุ: เลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'sortlist_typeids_all' => '全部的主题分类',
	'sortlist_sortids' => '分类信息',
	'sortlist_sortids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'sortlist_sortids_all' => '全部的分类信息',
	'sortlist_digest' => 'กรองกระทู้สำคัญ',
	'sortlist_digest_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'sortlist_digest_0' => 'กระทู้ทั่วไป',
	'sortlist_digest_1' => 'สำคัญ I',
	'sortlist_digest_2' => 'สำคัญ II',
	'sortlist_digest_3' => 'สำคัญ III',
	'sortlist_stick' => 'กรองกระทู้ปักหมุด',
	'sortlist_stick_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'sortlist_stick_0' => 'กระทู้ทั่วไป',
	'sortlist_stick_1' => 'ปักหมุด I',
	'sortlist_stick_2' => 'ปักหมุด II',
	'sortlist_stick_3' => 'ปักหมุด III',
	'sortlist_special' => 'กรองกระทู้พิเศษ',
	'sortlist_special_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'sortlist_special_1' => 'กระทู้โพล',
	'sortlist_special_2' => 'กระทู้ขายของ',
	'sortlist_special_3' => 'กระทู้ว่าจ้าง',
	'sortlist_special_4' => 'กระทู้กิจกรรม',
	'sortlist_special_5' => 'กระทู้ดีเบต',
	'sortlist_special_0' => 'กระทู้ทั่วไป',
	'sortlist_special_reward' => 'กรองกระทู้รางวัล',
	'sortlist_special_reward_comment' => 'ตั้งค่ากรองเฉพาะกระทู้แจกรางวัล',
	'sortlist_special_reward_0' => 'ทั้งหมด',
	'sortlist_special_reward_1' => 'จบแล้ว',
	'sortlist_special_reward_2' => 'ยังไม่จบ',
	'sortlist_recommend' => 'กรองกระทู้แนะนำ',
	'sortlist_recommend_comment' => 'ตั้งค่าว่าจะแสดงเฉพาะกระทู้แนะนำ',
	'sortlist_orderby' => 'เรียงตาม',
	'sortlist_orderby_comment' => 'ตั้งค่าวิธีการเรียงลำดับจากฟิลด์ของบอร์ด',
	'sortlist_orderby_lastpost' => 'ให้ตอบล่าสุดให้มาก่อน',
	'sortlist_orderby_dateline' => 'เผยแพร่ล่าสุดมาก่อน',
	'sortlist_orderby_replies' => 'ตอบล่าสุดมาก่อน',
	'sortlist_orderby_views' => 'ผู้ชมมากสุดมาก่อน',
	'sortlist_orderby_heats' => 'ป็อบมากสุดมาก่อน',
	'sortlist_orderby_recommends' => 'ห้วข้อแนะนำล่าสุดมาก่อน',
	'sortlist_lastpost' => '主题发布时间',
	'sortlist_lastpost_nolimit' => '不限制',
	'sortlist_lastpost_hour' => '一小时内',
	'sortlist_lastpost_day' => '一天内',
	'sortlist_lastpost_week' => '一周内',
	'sortlist_lastpost_month' => '一月内',
	'sortlist_orderby_hours_comment' => '指定时间内浏览次数倒序排序的时间值',
);

?>