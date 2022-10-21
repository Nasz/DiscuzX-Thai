<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupattachment.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupattachment_name' => '论坛附件列表',
	'groupattachment_desc' => '论坛附件列表调用',
	'groupattachment_fids' => 'เลือกบอร์ด',
	'groupattachment_fids_comment' => '指定群组，多个ID之间请用半角逗号“,”隔开。',
	'groupattachment_tids' => 'เลือกเธรด',
	'groupattachment_tids_comment' => 'กรอก IDเธรด(tid) สามารถกรอกได้หลายเธรดโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'groupattachment_gtids' => '群组分类',
	'groupattachment_gtids_comment' => '设置群组所在分类，กด CTRL เพื่อเลือกหลายอัน，全选或全不选均为不做限制',
	'groupattachment_startrow' => 'แถวข้อมูลเริ่มต้น',
	'groupattachment_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'groupattachment_items' => '显示数据条数',
	'groupattachment_items_comment' => '设置一次显示的图片主题条目数，请设置为大于 0 的整数',
	'groupattachment_titlelength' => 'ความยาวชื่อเรื่อง',
	'groupattachment_titlelength_comment' => '设置当附件名称/帖子标题显示的最大长度',
	'groupattachment_summarylength' => '内容长度',
	'groupattachment_summarylength_comment' => '设置附件介绍/帖子内容显示的最大长度',
	'groupattachment_maxwidth' => '图片最大宽度(像素)',
	'groupattachment_maxwidth_comment' => '设置是否自动缩小或放大图片的尺寸到本设定的宽度，0 为不自动缩放',
	'groupattachment_maxheight' => '图片最大高度(像素)',
	'groupattachment_maxheight_comment' => '设置是否自动缩小或放大图片的尺寸到本设定的高度，0 为不自动缩放',
	'groupattachment_threadmethod' => '主题方式调用',
	'groupattachment_threadmethod_comment' => '选择“是”将按照主题方式调用附件，一个主题显示一个附件；选择“否”将按照附件方式调用',
	'groupattachment_digest' => 'กรองบทคัดย่อ',
	'groupattachment_digest_comment' => 'เลือกกรองเฉพาะเธรด หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'groupattachment_digest_0' => 'เธรดทั่วไป',
	'groupattachment_digest_1' => 'บทคัดย่อ I',
	'groupattachment_digest_2' => 'บทคัดย่อ II',
	'groupattachment_digest_3' => 'บทคัดย่อ III',
	'groupattachment_special' => 'กรองเธรดพิเศษ',
	'groupattachment_special_comment' => 'เลือกกรองเฉพาะเธรด หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'groupattachment_special_1' => 'เธรดโพล',
	'groupattachment_special_2' => 'เธรดขายของ',
	'groupattachment_special_3' => 'เธรดว่าจ้าง',
	'groupattachment_special_4' => 'เธรดกิจกรรม',
	'groupattachment_special_5' => 'เธรดดีเบต',
	'groupattachment_special_0' => 'เธรดทั่วไป',
	'groupattachment_special_reward' => 'กรองเธรดรางวัล',
	'groupattachment_special_reward_comment' => 'ตั้งค่ากรองเฉพาะเธรดแจกรางวัล',
	'groupattachment_special_reward_0' => 'ทั้งหมด',
	'groupattachment_special_reward_1' => 'จบแล้ว',
	'groupattachment_special_reward_2' => 'ยังไม่จบ',
	'groupattachment_dateline' => 'เวลาอัปโหลด',
	'groupattachment_dateline_nolimit' => 'ไม่จำกัด',
	'groupattachment_dateline_hour' => '1 ชั่วโมงก่อน',
	'groupattachment_dateline_day' => '24 ชั่วโมงก่อน',
	'groupattachment_dateline_week' => '1 สัปดาห์ก่อน',
	'groupattachment_dateline_month' => 'เมื่อเดือนก่อน',
	'groupattachment_gviewperm' => 'การอนุญาตดูกลุ่ม',
	'groupattachment_gviewperm_nolimit' => 'ไม่จำกัด',
	'groupattachment_gviewperm_only_member' => 'สมาชิกเท่านั้น',
	'groupattachment_gviewperm_all_member' => 'เจ้าของ',
	'groupattachment_highlight' => 'ไฮไลท์',
);

?>