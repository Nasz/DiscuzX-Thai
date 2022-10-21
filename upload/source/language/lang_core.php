<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_core.php 28082 2012-02-22 06:58:29Z monkey $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'nextpage' => 'หน้าต่อไป',
	'prevpage' => 'หน้าก่อน',
	'pageunit' => 'จำนวนหน้า',
	'total' => 'ทั้งหมด',
	'10k' => 'หมื่น',
	'pagejumptip' => 'ป้อนหมายเลขหน้าแล้วกด Enter เพื่อเปลี่ยนหน้าอย่างรวดเร็ว',
	'date' => array(
		'before' => 'ก่อน',
		'day' => 'วัน',
		'yday' => 'เมื่อวาน',
		'byday' => 'วานซืน',
		'hour' => 'ชั่วโมง',
		'half' => 'ครึ่ง',
		'min' => 'นาที',
		'sec' => 'วินาที',
		'now' => 'ไม่กี่วินาที',
	),
	'yes' => 'เยส',
	'no' => 'โน',
	'weeks' => array(
		1 => 'วันจันทร์',
		2 => 'วันอังคาร',
		3 => 'วันพุธ',
		4 => 'วันพฤหัสบดี',
		5 => 'วันศุกร์',
		6 => 'วันเสาร์',
		7 => 'วันอาทิตย์',
	),
	'dot' => '、',
	'archive' => 'ไฟล์',
	'portal' => 'พอร์ทัล',
	'end' => 'จบ',

	'seccode_image_tips' => 'ป้อนอักขระในภาพด้านล่าง<br />',
	'seccode_image_ani_tips' => 'โปรดป้อนอักขระในภาพเคลื่อนไหวด้านล่าง<br />',
	'seccode_sound_tips' => 'ป้อนอักขระที่คุณได้ยิน<br />',
	'secqaa_tips' => 'ป้อนคำตอบสำหรับคำถามต่อไปนี้<br />',

	'fullblankspace' => '　',

	'title_grouptype' => 'คลับ',
	'title_of' => 'ของ',
	'title_board_message' => 'แจ้งข้อมูล',
	'title_view_all' => 'ดูทั้งหมด',
	'title_activity' => 'กิจกรรม',
	'title_friend_activity' => 'ความเคลื่อนของเพื่อน',
	'title_my_activity' => 'ความเคลื่อนไหวของฉัน',
	'title_newest_activity' => 'ความเคลื่อนไหวล่าสุด',
	'title_top_activity' => 'กิจกรรมยอดนิยม',
	'title_album' => 'อัลบั้ม',
	'title_friend_album' => 'อัลบั้มของเพื่อน',
	'title_my_album' => 'อัลบั้มของฉัน',
	'title_newest_update_album' => 'อัลบั้มอัปเดตล่าสุด',
	'title_hot_pic_recommend' => 'รูปภาพยอดนิยม',
	'title_blog' => 'ไดอารี่',
	'title_friend_blog' => 'ไดอารี่ของเพื่อน',
	'title_my_blog' => 'ไดอารี่ของฉัน',
	'title_post_new_blog' => 'โพสต์ไดอารี่ใหม่',
	'title_newest_blog' => 'ไดอารี่ที่ถูกโพสต์ล่าสุด',
	'title_recommend_blog' => 'โพสต์ที่แนะนำ',
	'title_debate' => 'ดีเบต',
	'title_friend_debate' => 'ดีเบตของเพื่อน',
	'title_my_debate' => 'ดีเบตของฉัน',
	'title_create_new_debate' => 'สร้างการดีเบต',
	'title_my_create_debate' => 'ดีเบตที่ฉันสร้าง',
	'title_my_join_debate' => 'ดีเบตที่ฉันเข้าร่วม',
	'title_newest_debate' => 'ดีเบตล่าสุด',
	'title_top_debate' => 'ดีเบตยอดนิยม',
	'title_doing' => 'สมุดโน๊ต',
	'title_newest_doing' => 'สมุดโน๊ต',
	'title_me_friend_doing' => 'เพื่อนได้เขียนโน๊ต',
	'title_doing_view_me' => 'โน๊ตของฉัน',
	'title_thread_favorite' => 'เธรดโปรด',
	'title_forum_favorite' => 'บอร์ดโปรด',
	'title_group_favorite' => '{group}เก็บรวบรวม',
	'title_blog_favorite' => 'คอลเลกชันบันทึก',
	'title_album_favorite' => 'คอลเลกชันอัลบั้ม',
	'title_article_favorite' => 'การรวบรวมบทความ',
	'title_all_favorite' => 'คอลเลกชันทั้งหมด',
	'title_friend_list' => 'รายชื่อเพื่อน',
	'title_all_poll' => 'เพียงแค่ดูการโหวต',
	'title_we_poll' => 'การลงคะแนนเริ่มต้นโดยเพื่อน',
	'title_me_poll' => 'การโหวตของฉัน',
	'title_hot_poll' => 'การลงคะแนนเสียงยอดนิยม',
	'title_dateline_poll' => 'การลงคะแนนล่าสุด',
	'title_all_reward' => 'เพียงแค่ดูรางวัล',
	'title_we_reward' => 'รางวัลที่ริเริ่มโดยเพื่อน',
	'title_me_reward' => 'รางวัลของฉัน',
	'title_hot_reward' => 'รางวัลยอดนิยม',
	'title_dateline_reward' => 'รางวัลล่าสุด',
	'title_share_all' => 'ทั้งหมด',
	'title_share_link' => 'ลิงก์',
	'title_share_video' => 'วีดีโอ',
	'title_share_music' => 'เพลง',
	'title_share_flash' => 'Flash',
	'title_share_poll' => 'โพล',
	'title_share_pic' => 'ภาพ',
	'title_share_album' => 'อัลบั้ม',
	'title_share_blog' => 'ไดอารี',
	'title_share_space' => 'ผู้ใช้',
	'title_share_thread' => 'โพสต์',
	'title_share_article' => 'บทความ',
	'title_share_tag' => 'TAG',
	'title_share' => 'แบ่งปัน',
	'title_thread' => 'โพสต์',
	'title_all_thread' => 'เพียงแค่ดูโพสต์',
	'title_we_thread' => 'โพสต์ของเพื่อน',
	'title_me_thread' => 'โพสต์ของฉัน',
	'title_hot_thread' => 'โพสต์ยอดนิยมของฉัน',
	'title_dateline_thread' => 'โพสต์ล่าสุด',
	'title_trade' => 'สินค้า',
	'title_all_trade' => 'ดูแค่โพสต์สินค้า',
	'title_we_trade' => 'สินค้าที่ขายโดยเพื่อน',
	'title_me_trade' => 'สินค้าของฉัน',
	'title_hot_trade' => 'สินค้ายอดนิยม',
	'title_dateline_trade' => 'สินค้าใหม่',
	'title_tradelog_trade' => 'บันทึกธุรกรรม',
	'title_eccredit_trade' => 'คะแนนเครดิต',
	'title_credit' => 'เครดิต',
	'title_friend_add' => 'เพิ่มเพื่อน',
	'title_people_might_know' => 'คนที่คุณอาจรู้จัก',
	'title_friend_request' => 'ขอเป็นเพื่อน',
	'title_search_friend' => 'หาเพื่อน',
	'title_invite_friend' => 'เชิญเพื่อน',
	'title_password_security' => 'รหัสผ่าน/ความปลอดภัย',
	'title_flash_upload' => 'อัพโหลดแบทช์',
	'title_cam_upload' => 'สติกเกอร์หัวใหญ่',
	'title_normal_upload' => 'อัปโหลดปกติ',
	'title_newthread_post' => 'เธรดใหม่',
	'title_reply_post' => 'มีส่วนร่วม/ชุดคำตอบ',
	'title_edit_post' => 'แก้ไขโพสต์',
	'title_newtrade_post' => 'สำนักพิมพ์สินค้า',
	'title_magics_shop' => 'ร้านขายเครื่องมือ',
	'title_magics_hot' => 'อุปกรณ์ประกอบฉากที่ขายดี',
	'title_magics_user' => 'เครื่องมือของฉัน',
	'title_magics_log' => 'ข้อต่อ',
	'title_medals_list' => 'เหรียญตรา',
	'title_setup' => 'ตั้งค่า',
	'title_memcp_blog' => 'เขียนไดอารี่',
	'title_memcp_upload' => 'อัปโหลด',
	'title_memcp_share' => 'เพิ่มแบ่งปัน',
	'title_memcp_sendmail' => 'จดหมายแจ้งเตือน',
	'title_memcp_privacy' => 'ความเป็นส่วนตัว',
	'title_memcp_avatar' => 'เปลี่ยนรูปโปรไฟล์',
	'title_memcp_profile' => 'โปรไฟล์',
	'title_memcp_credit' => 'เครดิต',
	'title_memcp_payment' => 'ออร์เดอร์',
	'title_memcp_friend' => 'เพื่อน',
	'title_memcp_usergroup' => 'กลุ่มผู้ใช้',
	'title_memcp_album' => 'แก้ไขอัลบั้ม',
	'title_memcp_poke' => 'สะกิด',
	'title_memcp_comment' => 'ความเห็น',
	'title_memcp_eccredit' => '信用评价',
	'title_memcp_promotion' => 'ร่วมโปรโมตเว็บ',
	'title_task' => 'ภารกิจ',
	'title_login' => 'เข้าสู่ระบบ',
	'title_getpasswd' => 'ดึงรหัสผ่าน',
	'title_ranklist_picture' => 'อันดับภาพ',
	'title_ranklist_member' => 'การจัดอันดับผู้ใช้',
	'title_ranklist_thread' => 'อันดับเธรด',
	'title_ranklist_blog' => 'อันดับไดอารี่',
	'title_ranklist_poll' => 'อันดับโพล',
	'title_ranklist_activity' => 'อันดับกิจกรรม',
	'title_ranklist_forum' => 'ส่วน',
	'title_ranklist_group' => 'การจัดอันดับกลุ่ม',
	'title_ranklist_app' => 'การจัดอันดับแอปพลิเคชัน',
	'title_ranklist_index' => 'การจัดอันดับทั้งหมด',
	'title_ranklist_rankname' => 'ชาร์ตอันดับ',
	'title_search' => 'ค้นหา',
	'title_topic_management' => 'สร้างหัวข้อ',
	'title_portal_management' => 'การจัดการพอร์ทัล',
	'title_portalblock_management' => 'การจัดการโมดูล',
	'title_block_management' => 'การจัดการโมดูล',
	'title_blockdata_management' => 'กดรีวิว',
	'title_index_management' => 'คอลัมน์ช่อง',
	'title_article_management' => 'โพสต์บทความ',
	'title_category_management' => 'บทความการจัดการ',

	'title_stats' => 'สถิติเว็บไซต์',
	'title_stats_basic' => 'สถิติทั่วไป',
	'title_stats_forumstat' => 'สถิติเว็บบอร์ด',
	'title_stats_team' => 'ทีมบริหาร',
	'title_stats_modworks' => 'สถิติการจัดการ',
	'title_stats_memberlist' => 'รายชื่อสมาชิก',
	'title_stats_trend' => 'แนวโน้มสถิติ',

	'title_memcp_pm' => 'ส่งข้อความ',
	'title_memcp_domain' => 'โดเมนของฉัน',

	'title_collection' => 'คลัง',
	'title_collection_create' => 'สร้างอัลบั้ม',
	'title_collection_edit' => 'แก้ไขอัลบั้ม',
	'title_collection_comment_list' => 'รายการแสดงความคิดเห็น',
	'title_collection_followers_list' => 'สมัครรับรายชื่อผู้ใช้',

	'faq' => 'ช่วยเหลือ',
	'search' => 'ค้นหา',
	'page' => 'เริ่ม{page}หน้า',

	'close' => 'ปิด',
);

?>