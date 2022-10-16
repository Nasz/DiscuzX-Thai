<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_polllist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'polllist_name' => '投票列表',
	'polllist_desc' => '投票列表调用',
	'polllist_uids' => 'UIDผู้ใช้',
	'polllist_uids_comment' => 'กรอก IDผู้ใช้(uid) สามารถกรอกได้หลายคนโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'polllist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'polllist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'polllist_titlelength' => 'ความยาวชื่อเรื่อง',
	'polllist_summarylength' => '简介长度',
	'polllist_orderby' => 'เรียงตาม',
	'polllist_orderby_comment' => 'ตั้งค่าวิธีการเรียงลำดับจากฟิลด์ของโพล',
	'polllist_orderby_dateline' => 'เผยแพร่ล่าสุดมาก่อน',
	'polllist_orderby_hot' => '按热度倒序',
	'polllist_orderby_lastvote' => '按最后投票时间倒序',
	'polllist_orderby_viewnum' => 'เรียงตามจำนวนวิว',
	'polllist_orderby_replynum' => '按回复数倒序',
	'polllist_orderby_votenum' => '按投票数倒序',
	'polllist_credit' => '悬赏投票',
	'polllist_credit_nolimit' => '不限定',
	'polllist_credit_yes' => '只取悬赏投票',
	'polllist_expirefilter' => '过期投票',
	'polllist_expirefilter_off' => '不屏蔽',
	'polllist_expirefilter_on' => 'ห้ามโพสต์',

);

?>