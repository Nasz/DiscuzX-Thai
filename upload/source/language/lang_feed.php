<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_feed.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(

	'feed_blog_password' => '{actor} เขียนไดอารี่ใหม่แบบล็อครหัส {subject}',
	'feed_blog_title' => '{actor} เขียนไดอารี่ใหม่',
	'feed_blog_body' => '<b>{subject}</b><br />{summary}',
	'feed_album_title' => '{actor} สร้างอัลบั้มใหม่',
	'feed_album_body' => '<b>{album}</b><br />มีรูปภาพ {picnum} รูป',
	'feed_pic_title' => '{actor} อัปโหลดรูปภาพใหม่',
	'feed_pic_body' => '{title}',



	'feed_poll' => '{actor} สร้างโพลใหม่',

	'feed_comment_space' => '{actor} คอมเมนต์บนสเปซของ {touser}',
	'feed_comment_image' => '{actor} คอมเมนต์บนรูปของ {touser}',
	'feed_comment_blog' => '{actor} คอมเมนต์ถึง {touser} บนไดอารี่ {blog}',
	'feed_comment_poll' => '{actor} คอมเมนต์ถึง {touser} บนโพลล์ {poll}',
	'feed_comment_event' => '{actor} คอมเมนต์ถึง {touser} บนกิจกรรม {event}',
	'feed_comment_share' => '{actor} คอมเมนต์ถึง {touser} บนการแบ่งปัน {share}',

	'feed_showcredit' => '{actor} ช่วยประมูลอันดับให้ {fusername} ด้วยเครดิต {credit} เพื่อให้มีรายชื่อติดอันดับใน<a href="misc.php?mod=ranklist&type=member" target="_blank">ลีดเดอร์บอร์ด</a>',
	'feed_showcredit_self' => '{actor} เพิ่มเครดิตการประมูล {credit} เพื่อให้มีรายชื่อติดอันดับใน<a href="misc.php?mod=ranklist&type=member" target="_blank">ลีดเดอร์บอร์ด</a>',
	'feed_doing_title' => '{actor}：{message}',
	'feed_friend_title' => '{actor} ได้กลายเป็นเพื่อนกับ {touser}',



	'feed_click_blog' => '{actor} ได้ “{click}” ให้ {touser} บนไดอารี่ {subject}',
	'feed_click_thread' => '{actor} ได้ “{click}” ให้ {touser} บนโพสต์ {subject}',
	'feed_click_pic' => '{actor} ได้ “{click}” บนรูปของ {touser} ',
	'feed_click_article' => '{actor} ได้ “{click}” ให้ {touser} บนบทความ {subject}',


	'feed_task' => '{actor} ทำ {task} เสร็จสิ้นแล้ว',
	'feed_task_credit' => '{actor} ทำ {task} เสร็จสิ้นแล้ว ได้รับคะแนน {credit}',

	'feed_profile_update_base' => '{actor} อัปเดตข้อมูลทั่วไป',
	'feed_profile_update_contact' => '{actor} อัปเดตข้อมูลการติดต่อ',
	'feed_profile_update_edu' => '{actor} อัปเดตข้อมูลการศึกษา',
	'feed_profile_update_work' => '{actor} อัปเดตข้อมูลการทำงาน',
	'feed_profile_update_info' => '{actor} อัปเดตข้อมูลส่วนตัว',
	'feed_profile_update_bbs' => '{actor} อัปเดตข้อมูลเว็บบอร์ด',
	'feed_profile_update_verify' => '{actor} อัปเดตข้อมูลการยืนยันตัวตน',

	'feed_add_attachsize' => '{actor} ใช้คะแนน {credit} เพื่อแลกพื้นที่ไฟล์แนบ {size} คุณเองก็สามารถเพิ่มพื้นที่อัปโหลดไฟล์ได้(<a href="home.php?mod=spacecp&ac=credit&op=addsize">ฉันเอาด้วย</a>)',

	'feed_invite' => '{actor} ได้ส่งบัตรเชิญ {username} และได้กลายเป็นเพื่อนกันแล้ว',

	'magicuse_thunder_announce_title' => '<strong>{username} ได้ทำการ “สายฟ้าออกไป”</strong>',
	'magicuse_thunder_announce_body' => 'สวัสดีทุกคน，ตอนนี้ฉันกำลังออนไลน์อยู่<br /><a href="home.php?mod=space&uid={uid}" target="_blank">ยินดีต้อนรับเข้าสู่สเปซของฉัน</a>',


	'feed_thread_title' =>			'{actor} เพิ่มหัวข้อใหม่',
	'feed_thread_message' =>		'<b>{subject}</b><br />{message}',

	'feed_reply_title' =>			'{actor} ตอบกลับหัวข้อ {subject} ของ {author}',
	'feed_reply_title_anonymous' =>		'{actor} ได้ตอบกลับหัวข้อ {subject}',
	'feed_reply_message' =>			'',

	'feed_thread_poll_title' =>		'{actor} เพิ่มโพลล์ใหม่',
	'feed_thread_poll_message' =>		'<b>{subject}</b><br />{message}',

	'feed_thread_votepoll_title' =>		'{actor} ร่วมโหวตใน {subject}',
	'feed_thread_votepoll_message' =>	'',

	'feed_thread_goods_title' =>		'{actor} ได้เปิดขายของ',
	'feed_thread_goods_message_1' =>	'<b>{itemname}</b><br />ราคา {itemprice} บาท ทางเลือกเพิ่มเติม {itemcredit}{creditunit}',
	'feed_thread_goods_message_2' =>	'<b>{itemname}</b><br />ราคา {itemprice} บาท',
	'feed_thread_goods_message_3' =>	'<b>{itemname}</b><br />ราคา {itemcredit}{creditunit}',

	'feed_thread_reward_title' =>		'{actor} เพิ่มงานว่าจ้างใหม่',
	'feed_thread_reward_message' =>		'<b>{subject}</b><br />มอบเงินรางวัล {rewardprice}{extcredits}',

	'feed_reply_reward_title' =>		'{actor} ได้ตอบกลับหัวข้อการว่าจ้าง {subject}',
	'feed_reply_reward_message' =>		'',

	'feed_thread_activity_title' =>		'{actor} เพิ่มกิจกรรมใหม่',
	'feed_thread_activity_message' =>	'<b>{subject}</b><br />เริ่มกิจกรรม：{starttimefrom}<br />สถานที่：{activityplace}<br />{message}',

	'feed_reply_activity_title' =>		'{actor} ลงทะเบียนเข้าร่วมกิจกรรม {subject}',
	'feed_reply_activity_message' =>	'',

	'feed_thread_debate_title' =>		'{actor} เพิ่มการดีเบตใหม่',
	'feed_thread_debate_message' =>		'<b>{subject}</b><br />ฝ่ายสนับสนุน：{affirmpoint}<br />ฝ่ายคัดค้าน：{negapoint}<br />{message}',

	'feed_thread_debatevote_title_1' =>	'{actor} เข้าร่วมฝ่ายสนับสนุนในการดีเบต {subject}',
	'feed_thread_debatevote_title_2' =>	'{actor} เข้าร่วมฝ่ายคัดค้านในการดีเบต {subject}',
	'feed_thread_debatevote_title_3' =>	'{actor} เข้าร่วมอย่างเป็นกลางในการดีเบต {subject}',
	'feed_thread_debatevote_message_1' =>	'',
	'feed_thread_debatevote_message_2' =>	'',
	'feed_thread_debatevote_message_3' =>	'',

);

?>