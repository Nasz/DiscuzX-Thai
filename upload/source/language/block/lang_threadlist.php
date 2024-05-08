<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'threadlist_fids' => 'เลือกบอร์ด',
	'threadlist_fids_comment' => '设置允许参与新帖调用的版块，กด CTRL เพื่อเลือกหลายอัน，全选或全不选均为不做限制',
	'threadlist_uids' => 'UIDผู้สร้าง',
	'threadlist_uids_comment' => 'กรอก IDผู้สร้าง(uid) สามารถกรอกได้หลายคนโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'threadlist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'threadlist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'threadlist_items' => '显示数据条数',
	'threadlist_items_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'threadlist_titlelength' => '标题最大字节数',
	'threadlist_titlelength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'threadlist_fnamelength' => '标题最大字节数包含版块名称',
	'threadlist_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'threadlist_summarylength' => '主题简短内容文字数',
	'threadlist_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'threadlist_tids' => 'เลือกเธรด',
	'threadlist_tids_comment' => 'กรอก IDเธรด(tid) สามารถกรอกได้หลายเธรดโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'threadlist_keyword' => 'คีย์เวิร์ดชื่อ',
	'threadlist_keyword_comment' => 'กำหนดคีย์เวิร์ดสำหรับการเลือกจากชื่อ ข้อสังเกต: ปล่อยว่างหากไม่ต้องการกรอง； คีย์เวิร์ดสามารถใส่ * เพื่อค้นหาชื่อที่มีบางส่วนคล้ายกัน； การจับจับคู่หลายคีย์เวิร์ดเพื่อตีวงแคบ สามารถใช้การเคาะสเปซ หรือใช้ AND เชื่อมก็ได้ เช่น win32 AND unix；จับคู่หลายคีย์เวิร์ดเพื่อขยายวงการค้นหา สามารถใช้ | หรือ OR เชื่อมก็ได้ เช่น win32 OR unix',
	'threadlist_tagkeyword' => 'TAG标签',
	'threadlist_tagkeyword_comment' => 'TAG标签คีย์เวิร์ด。注意: 留空为不进行任何过滤； คีย์เวิร์ด中可使用通配符 *； 匹配多个คีย์เวิร์ด其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'threadlist_typeids' => 'กรอกชนิดเธรด',
	'threadlist_typeids_comment' => 'กรอก IDประเภท สามารถกรอกได้หลายประเภทโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'threadlist_typeids_all' => '全部的主题分类',
	'threadlist_sortids' => '分类信息',
	'threadlist_sortids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_sortids_all' => '全部的分类信息',
	'threadlist_reply' => '无回复主题过滤',
	'threadlist_digest' => 'กรองบทคัดย่อ',
	'threadlist_digest_comment' => 'เลือกกรองเฉพาะเธรด หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'threadlist_digest_0' => 'เธรดทั่วไป',
	'threadlist_digest_1' => 'บทคัดย่อ I',
	'threadlist_digest_2' => 'บทคัดย่อ II',
	'threadlist_digest_3' => 'บทคัดย่อ III',
	'threadlist_stick' => 'กรองเธรดปักหมุด',
	'threadlist_stick_comment' => 'เลือกกรองเฉพาะเธรด หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'threadlist_stick_0' => 'เธรดทั่วไป',
	'threadlist_stick_1' => 'ปักหมุด I',
	'threadlist_stick_2' => 'ปักหมุด II',
	'threadlist_stick_3' => 'ปักหมุด III',
	'threadlist_special' => 'กรองเธรดพิเศษ',
	'threadlist_special_comment' => 'เลือกกรองเฉพาะเธรด หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'threadlist_special_1' => 'เธรดโพล',
	'threadlist_special_2' => 'เธรดขายของ',
	'threadlist_special_3' => 'เธรดว่าจ้าง',
	'threadlist_special_4' => 'เธรดกิจกรรม',
	'threadlist_special_5' => 'เธรดดีเบต',
	'threadlist_special_0' => 'เธรดทั่วไป',
	'threadlist_special_reward' => 'กรองเธรดรางวัล',
	'threadlist_special_reward_comment' => 'ตั้งค่ากรองเฉพาะเธรดแจกรางวัล',
	'threadlist_special_reward_0' => 'ทั้งหมด',
	'threadlist_special_reward_1' => 'จบแล้ว',
	'threadlist_special_reward_2' => 'ยังไม่จบ',
	'threadlist_recommend' => 'กรองเธรดแนะนำ',
	'threadlist_viewmod' => '文章模式查看',
	'threadlist_recommend_comment' => 'ตั้งค่าว่าจะแสดงเฉพาะเธรดแนะนำ',
	'threadlist_picrequired' => '必须含图片附件',
	'threadlist_picrequired_comment' => '设置是否只显示含有图片附件的主题',
	'threadlist_orderby' => 'เรียงตาม',
	'threadlist_orderby_comment' => 'ตั้งค่าวิธีการเรียงลำดับจากฟิลด์ของเธรด',
	'threadlist_orderby_lastpost' => 'ให้ตอบล่าสุดให้มาก่อน',
	'threadlist_orderby_dateline' => 'เผยแพร่ล่าสุดมาก่อน',
	'threadlist_orderby_replies' => 'ตอบล่าสุดมาก่อน',
	'threadlist_orderby_views' => 'ผู้ชมมากสุดมาก่อน',
	'threadlist_orderby_heats' => 'ป็อบมากสุดมาก่อน',
	'threadlist_orderby_recommends' => 'ห้วข้อแนะนำล่าสุดมาก่อน',
	'threadlist_orderby_hourviews' => 'จำนวนวิวในช่วงเวลาที่กำหนดเยอะสุดมาก่อน',
	'threadlist_orderby_todayviews' => 'จำนวนวิวในรอบวันเยอะสุดมาก่อน',
	'threadlist_orderby_weekviews' => 'จำนวนวิวในรอบสัปดาห์เยอะสุดมาก่อน',
	'threadlist_orderby_monthviews' => 'จำนวนวิวเดือนปัจจุบันเยอะสุดมาก่อน',
	'threadlist_orderby_hours' => 'ระยะเวลา(ชั่วโมง)',
	'threadlist_orderby_hours_comment' => 'ค่าเวลาของจำนวนมุมมองของจำนวนครั้งภายในเวลาที่กำหนด',
	'threadlist_orderby_todayhots' => '按当天累计售出数倒序排序',
	'threadlist_orderby_weekhots' => '按本周累计售出数倒序排序',
	'threadlist_orderby_monthhots' => '按当月累计售出数倒序排序',
	'threadlist_lastpost' => '最后更新时间',
	'threadlist_postdateline' => '主题发布时间',
	'threadlist_postdateline_nolimit' => '不限制',
	'threadlist_postdateline_hour' => '1小时内',
	'threadlist_postdateline_day' => '24小时内',
	'threadlist_postdateline_week' => '7天内',
	'threadlist_postdateline_month' => '1个月内',
	'threadlist_lastpost_nolimit' => '不限制',
	'threadlist_lastpost_hour' => '1小时内',
	'threadlist_lastpost_day' => '24小时内',
	'threadlist_lastpost_week' => '7天内',
	'threadlist_lastpost_month' => '1个月内',
	'threadlist_price_add' => ' 附加 ',
	'threadlist_place' => '活动地点',
	'threadlist_class' => '活动类型',
	'threadlist_gender' => '性别要求',
	'threadlist_gender_0' => 'ไม่จำกัด',
	'threadlist_gender_1' => 'ชาย',
	'threadlist_gender_2' => 'หญิง',
	'threadlist_orderby_weekstart' => '按一周内活动开始时间排序',
	'threadlist_orderby_monthstart' => '按一月内活动开始时间排序',
	'threadlist_orderby_weekexp' => '按一周内报名截止时间排序',
	'threadlist_orderby_monthexp' => '按一月内报名截止时间排序',
	'threadlist_highlight' => '获得高亮值',
);

?>