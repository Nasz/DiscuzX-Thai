<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'admincp_title' => 'ศูนย์ควบคุม <span>Discuz!</span>',
	'login_title' => 'ศูนย์จัดการเข้าสู่ระบบ',
	'login_username' => 'ชื่อผู้ใช้',
	'login_password' => 'รหัสผ่าน',

	'submit' => 'ล็อกอิน',
	'forcesecques' => 'ต้องการรายการ',
	'security_question' => 'คำถามเพื่อความปลอดภัย',
	'security_answer' => 'ตอบกลับ',
	'security_question_0' => 'ไม่มีคำถามความปลอดภัย',
	'security_question_1' => 'แม่ชื่อ',
	'security_question_2' => 'ชื่อของคุณปู่',
	'security_question_3' => 'เมืองเกิดของพ่อ',
	'security_question_4' => 'ชื่อครูคนแรกของคุณ',
	'security_question_5' => 'รุ่นคอมพิวเตอร์ส่วนบุคคลของคุณ',
	'security_question_6' => 'ชื่อร้านอาหารที่คุณชื่นชอบ',
	'security_question_7' => 'ตัวเลขสี่หลักสุดท้ายของใบขับขี่',

	'login_tips' => '<a href="http://cloud.tencent.com" target="_blank">เทนเซนคลาวด์</a> Discuz! โอ้วเย่ แพลตฟอร์มระดับมืออาชีพสำหรับสร้างชุมชน เพื่อให้เว็บไซต์ของคุณมุ่งไปสูความเป็นเลิศระดับสากล',
	'login_nosecques' => 'คุณยังไม่ได้ลงชื่อเข้าใช้ด้วยความปลอดภัยโปรดไปที่ศูนย์บริหารจัดการหลังจากตั้งคำถามความปลอดภัยในศูนย์ส่วนตัวของคุณคุณสามารถ <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">คลิกที่นี่</a> ป้อนการตั้งค่าคำถามความปลอดภัย',
	'copyright' => 'ลิขสิทธิ์ &copy; 2001-'.date('Y').' เทนเซ็นต์คลาวด์',

	'login_cp_guest' => '<h1>คุณยังไม่ได้ลงชื่อเข้าใช้เว็บไซต์</h1><a href="member.php?mod=logging&action=login" class="btn">เข้าสู่ระบบ</a><p>เมื่อเว็บมาสเตอร์จำเป็นต้องมีการเข้าสู่ระบบให้แก้ไข config/config_global.php คุณสามารถปิดคุณสมบัตินี้ได้</p>',
	'login_cplock' => 'แผงการจัดการของคุณถูกล็อค!<br>กรุณา<b> {ltime} </b>หลังจากวินาทีให้ไปที่ศูนย์บริหารจัดการ',
	'login_user_lock' => 'เนื่องจากข้อผิดพลาดมากเกินไปในรหัสผ่านเข้าสู่ระบบของคุณคำขอเข้าสู่ระบบนี้ถูกปฏิเสธโปรด 15 ลองอีกครั้งหลังจากไม่กี่นาที',
	'login_cp_noaccess' => '<b>ศูนย์กลางการควบคุม(หรือการดำเนินการนี้)ยังไม่เปิดให้คุณ</b><br><br>การดำเนินการของคุณได้รับการบันทึกแล้วโปรดอย่าลองอย่างผิดกฎหมาย',
	'noaccess' => 'หน่วยงานจัดการพื้นหลัง(หรือการดำเนินการนี้)ยังไม่เปิดให้คุณโปรดติดต่อผู้ดูแลไซต์',


);

?>