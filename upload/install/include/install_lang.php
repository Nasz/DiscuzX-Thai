<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 36287 2016-12-12 03:59:05Z nemohou $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', 'ภาษาไทย');
$lang = array(
	'SC_UTF8' => 'รุ่น UTF8 ภาษาจีนตัวย่อ',
	'TC_UTF8' => 'รุ่น UTF8 ภาษาจีนตัวเต็ม',
	'TH_UTF8' => 'รุ่น UTF8 ภาษาไทย',

	'title_install' => 'คู่มือการติดตั้ง '.SOFT_NAME,
	'agreement_yes' => 'ยอมรับ',
	'agreement_no' => 'ไม่ยอมรับ',
	'notset' => 'ไม่กำหนด',
	'enable' => 'enable',
	'disable' => 'disable',

	'message_title' => 'แจ้งข้อมูล',
	'error_message' => 'เกิดผิดพลาด',
	'message_return' => 'ย้อนกลับ',
	'return' => 'ย้อนกลับ',
	'install_wizard' => 'คู่มือการติดตั้ง',
	'config_nonexistence' => 'ไม่มีไฟล์กำหนดค่า',
	'nodir' => 'ไดเรกทอรีไม่มีอยู่จริง',
	'redirect' => 'เบราว์เซอร์จะเปลี่ยนหน้าโดยอัตโนมัติ<br>หากเบราว์เซอร์ของคุณไม่เปลี่ยนหน้าโดยอัตโนมัติโปรดคลิกที่นี่',
	'auto_redirect' => 'เบราว์เซอร์จะเปลี่ยนหน้าโดยอัตโนมัติ',
	'database_errno_1064' => 'SQL เกิดข้อผิดพลาดทางไวยากรณ์',

	'dbpriv_createtable' => 'ขาดสิทธิ์ในการ CREATE TABLE ไม่สามารถติดตั้งต่อได้',
	'dbpriv_insert' => 'ขาดสิทธิ์ในการ INSERT ไม่สามารถติดตั้งต่อได้',
	'dbpriv_select' => 'ขาดสิทธิ์ในการ SELECT ไม่สามารถติดตั้งต่อได้',
	'dbpriv_update' => 'ขาดสิทธิ์ในการ UPDATE ไม่สามารถติดตั้งต่อได้',
	'dbpriv_delete' => 'ขาดสิทธิ์ในการ DELETE ไม่สามารถติดตั้งต่อได้',
	'dbpriv_droptable' => 'ขาดสิทธิ์ในการ DROP TABLE ไม่สามารถติดตั้งต่อได้',

	'db_not_null' => 'ฐานข้อมูล UCenter มีข้อมูลอยู่ก่อนแล้ว, การดำเนินติดตั้งต่อจะล้างข้อมูลเดิมทั้งหมด',
	'db_drop_table_confirm' => 'การไปต่อจะล้างข้อมูลเดิมทั้งหมด คุณแน่ใจหรือไม่ว่าต้องการดำเนินการ?',

	'writeable' => 'เขียนทับได้',
	'unwriteable' => 'เขียนทับไม่ได้',
	'old_step' => 'ก่อนหน้า',
	'new_step' => 'ขั้นตอนต่อไป',

	'database_errno_2003' => 'ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้ โปรดตรวจสอบว่าฐานข้อมูลได้เริ่มต้นแล้วหรือไม่ และที่อยู่เซิร์ฟเวอร์ฐานข้อมูลนั้นถูกต้อง',
	'database_errno_1044' => 'ไม่สามารถสร้างฐานข้อมูลใหม่ได้ โปรดตรวจสอบว่าได้กรอกข้อมูลของฐานข้อมูลอย่างถูกต้องแล้วหรือไม่',
	'database_errno_1045' => 'ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้ โปรดตรวจสอบว่าชื่อผู้ใช้ฐานข้อมูลหรือรหัสผ่านนั้นถูกต้องแล้วหรือไม่',
	'database_connect_error' => 'เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล',
	'run_sql_error' => 'Discuz! Database Error',

	'step_title_1' => 'ตรวจสอบสภาพแวดล้อม',
	'step_title_2' => 'เลือกรูปแบบการติดตั้ง',
	'step_title_3' => 'กำหนดค่าฐานข้อมูล',
	'step_title_4' => 'ติดตั้ง',
	'step_env_check_title' => 'เริ่มการติดตั้ง',
	'step_env_check_desc' => 'การตรวจสอบสภาพแวดล้อม สิทธิ์การใช้งานไฟล์และไดเรกทอรี',
	'step_db_init_title' => 'ติดตั้งฐานข้อมูล',
	'step_db_init_desc' => 'กำหนดค่าในการติดตั้งฐานข้อมูล',

	'step1_file' => 'ไฟล์ไดเรกทอรี',
	'step1_need_status' => 'สถานะที่จำเป็น',
	'step1_status' => 'สถานะปัจจุบัน',
	'not_continue' => 'โปรดแก้ไขตามแนะนำสีแดงด้านบนแล้วลองใหม่อีกครั้ง',

	'tips_dbinfo' => 'กรอกข้อมูลของฐานข้อมูล',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'กรอกข้อมูลผู้ดูแลระบบ',
	'step_ext_info_title' => 'การติดตั้งแล้ว',
	'step_ext_info_comment' => 'คลิกเพื่อเข้าสู่ระบบ',

	'ext_info_succ' => 'ติดตั้งแล้ว',
	'install_submit' => 'ตกลง',
	'install_locked' => 'การติดตั้งถูกล็อค หากคุณมั่นใจว่าต้องติดตั้งใหม่อีกครั้งโปรดลบไฟล์ต่อไปนี้บนเซิร์ฟเวอร์ออกก่อน<br /> ' . str_replace(ROOT_PATH, '', $lockfile),
	'error_stuck_msg' => 'การติดตั้งไม่มีความคืบหน้าเป็นเวลานาน เป็นไปได้ว่าคำขอที่เกี่ยวข้องผิดพลาด หรือหมดอายุ หรืออาจเกิดจากข้อผิดพลาดที่ร้ายแรงกับเครือข่ายเซิร์ฟเวอร์',
	'error_quit_msg' => 'คุณต้องแก้ปัญหาข้างต้นก่อนจึงจะสามารถดำเนินการติดตั้งขั้นตอนต่อไปได้',
	'error_reinstall_msg' => 'ฐานข้อมูล InnoDB ของคุณอาจมีประสิทธิภาพต่ำ โปรดเพิ่มการหมดเวลาของ PHP รีเฟรชหน้าเว็บแล้วลองติดตั้งใหม่',

	'step_app_reg_title' => 'เลือกรูปแบบการติดตั้ง',
	'step_app_reg_desc' => 'เลือกรูปแบบการติดตั้งและการตั้งค่าเซิร์ฟเวอร์ UCenter',
	'tips_ucenter' => 'กรุณากรอกข้อมูล UCenter Server ที่เกี่ยวข้อง',
	'tips_ucenter_comment' => 'UCenter เป็นโปรแกรมบริการหลักของผลิตภัณฑ์ Comsenz การติดตั้งและใช้งาน Discuz! Board จำเป็นต้องใช้โปรแกรมนี้ หากคุณติดตั้ง UCenter ไว้แล้วกรุณากรอกข้อมูลต่อไปนี้ให้ครบถ้วน หากยังไม่ได้ติดตั้ง กรุณาไปที่ <a href="https://www.discuz.vip/" target="blank">ศูนย์ผลิตภัณฑ์ Comsenz</a> ดาวน์โหลดและติดตั้ง ก่อนที่จะดำเนินการขั้นถัดไป',

	'advice_mysqli_connect' => 'โปรดตรวจสอบ mysqli ว่ามีการโหลดโมดูลอย่างถูกต้องหรือไม่',
	'advice_xml_parser_create' => 'ต้องการ PHP ที่สนับสนุนฟังก์ชั่น XML กรุณาติดต่อผู้ให้บริการโฮสติ้งเพื่อเปิดใช้งาน',
	'advice_json_encode' => 'ต้องการ PHP ที่สนับสนุนฟังก์ชั่น JSON กรุณาติดต่อผู้ให้บริการโฮสติ้งเพื่อเปิดใช้งาน',
	'advice_dns_get_record' => 'ฟังก์ชันนี้ต้องใช้ PHP เพื่อรองรับการสืบค้น DNS และ PHP จะมาพร้อมกับฟังก์ชันนี้ตามค่าเริ่มต้น ปัญหานี้เกิดขึ้นได้ง่ายจากการรวบรวมและการติดตั้งที่ไม่ถูกต้องหรือส่วนประกอบที่ขาดหายไป โปรดติดต่อผู้ให้บริการเพื่อยืนยันว่าฟังก์ชันนี้เปิดใช้งานอยู่',
	'advice_fsockopen' => 'ต้องการการกำหนดค่าใน php.ini ให้ allow_url_fopen เปิดใช้งาน กรุณาติดต่อผู้ให้บริการโฮสติ้งเพื่อเปิด',
	'advice_pfsockopen' => 'ต้องการการกำหนดค่าใน php.ini ให้ allow_url_fopen เปิดใช้งาน กรุณาติดต่อผู้ให้บริการโฮสติ้งเพื่อเปิด',
	'advice_stream_socket_client' => 'ต้องการการกำหนดค่าใน php.ini ให้ stream_socket_client เปิดใช้งาน กรุณาติดต่อผู้ให้บริการโฮสติ้งเพื่อเปิด',
	'advice_curl_init' => 'ต้องการการกำหนดค่าใน php.ini ให้ curl_init เปิดใช้งาน กรุณาติดต่อผู้ให้บริการโฮสติ้งเพื่อเปิด',

	'ucurl' => 'URL ของ UCenter',
	'ucpw' => 'รหัสผ่านผู้ก่อตั้ง UCenter',
	'ucip' => 'ที่อยู่ IP ของ UCenter',
	'ucenter_ucip_invalid' => 'เกิดข้อผิดพลาด รูปแบบของที่อยู่ IP ไม่ถูกต้อง โปรดกรอกให้ถูกต้อง',
	'ucip_comment' => 'ใช้ในบางกรณี ส่วนใหญ่คุณไม่จำเป็นต้องกรอกข้อมูลก็ได้',

	'tips_siteinfo' => 'กรุณากรอกข้อมูลเว็บไซต์',
	'sitename' => 'ชื่อไซต์',
	'siteurl' => 'URL เว็บไซต์',

	'forceinstall' => 'การบังคับติดตั้ง',
	'dbinfo_forceinstall_invalid' => 'ฐานข้อมูลปัจจุบันมีตารางข้อมูลและคำนำหน้าแบบเดียวกันอยู่ คุณสามารถแก้ไข "คำนำหน้าตารางข้อมูล" เพื่อหลีกเลี่ยงการลบข้อมูลเก่า หรือ เลือกการติดตั้งแบบบังคับติดตั้ง การติดตั้งแบบบังคับจะลบข้อมูลเก่าและไม่สามารถกู้คืนได้อีก',
	'dbinfo_myisam2innodb_invalid' => 'หาก InnoDB มีประสิทธิภาพต่ำและการติดตั้งหมดเวลาและล้มเหลว คุณสามารถลองใช้วิธีนี้เพื่อบังคับการติดตั้ง',

	'click_to_back' => 'คลิกเพื่อกลับไปยังหน้าที่ดูล่าสุด',
	'adminemail' => 'Email ของผู้ดูแลระบบ',
	'adminemail_comment' => 'ใช้เพื่อส่งรายงานข้อผิดพลาดของโปรแกรม',
	'dbhost_comment' => 'โดยทั่วไปเป็น 127.0.0.1 หรือ localhost',
	'dbname_comment' => 'สำหรับการติดตั้งฐานข้อมูล Discuz!',
	'dbuser_comment' => 'ชื่อผู้ใช้ฐานข้อมูลของคุณ',
	'dbpw_comment' => 'รหัสผ่านฐานข้อมูลของคุณ',
	'tablepre_comment' => 'เมื่อต้องใช้หลายเว็บบอร์ดในฐานข้อมูลเดียวกันโปรดแก้ไขคำนำหน้านี้',
	'forceinstall_check_label' => 'ฉันต้องการลบข้อมูลและบังคับการติดตั้ง !!!',
	'myisam2innodb_check_label' => 'ติดตั้งเป็น MyISAM แล้วแปลงเป็น InnoDB',
	'initdbresult_succ' => 'การติดตั้งฐานข้อมูลเสร็จสมบูรณ์',
	'initdbdataresult_succ' => 'การเริ่มต้นข้อมูลฐานข้อมูลเสร็จสมบูรณ์',
	'initdbinnodbresult_succ' => 'การแปลงตารางข้อมูล InnoDB เสร็จสมบูรณ์',
	'initsys' => 'กำลังเริ่มต้นระบบ',

	'uc_url_empty' => 'คุณไม่ได้กรอกที่อยู่ URL ของ UCenter โปรดกลับไปกรอก',
	'uc_url_invalid' => 'รูปแบบที่อยู่ URL ผิด',
	'uc_url_unreachable' => 'คุณอาจกรอกที่อยู่ URL ของ UCenter ผิดพลาดโปรดตรวจสอบ',
	'uc_ip_invalid' => 'ที่อยู่ IP ผิด ไม่สามารถแยกวิเคราะห์ชื่อโดเมนของเว็บไซต์นี้ได้ โปรดตรวจสอบข้อมูลที่กรอก',
	'uc_admin_invalid' => 'UCenter การตรวจสอบรหัสผ่านของผู้ก่อตั้งไม่ได้รับการอนุมัติ, เหตุผลที่เป็นไปได้:<br />1. UCenter รหัสผ่านของผู้ก่อตั้งไม่ถูกต้อง<br />2. รหัสผ่านอินพุตหลายข้อผิดพลาดนำไปสู่ผู้ใช้ของผู้ก่อตั้งและ IP ที่อยู่ถูกล็อค<br />3. UCenter หลังเวที “ ผ่าน URL เพิ่มฟังก์ชั่นแอปพลิเคชัน ” ยังไม่ได้เปิด',
	'uc_data_invalid' => 'การสื่อสารล้มเหลวโปรดตรวจสอบ URL ของ UCenter ว่าถูกต้องหรือไม่',
	'uc_dbcharset_incorrect' => 'UCenter อักขระฐานข้อมูลไม่สอดคล้องกับชุดอักขระแอปพลิเคชันปัจจุบัน',
	'uc_api_add_app_error' => 'ต่อ UCenter เพิ่มข้อผิดพลาดของแอปพลิเคชัน',
	'uc_dns_error' => 'UCenter ข้อผิดพลาดในการวิเคราะห์ DNS โปรดกลับไปกรอกที่อยู่ IP ของ UCenter',

	'ucenter_ucurl_invalid' => 'ที่อยู่ URL ของ UCenter ว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'ucenter_ucpw_invalid' => 'รหัสผ่านของผู้ก่อตั้ง UCenter ว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'siteinfo_siteurl_invalid' => 'URL ของไซต์ว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'siteinfo_sitename_invalid' => 'ชื่อไซต์ว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'dbinfo_dbhost_invalid' => 'เซิร์ฟเวอร์ฐานข้อมูลว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'dbinfo_dbname_invalid' => 'ชื่อฐานข้อมูลว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'dbinfo_dbuser_invalid' => 'ชื่อผู้ใช้ฐานข้อมูลว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'dbinfo_dbpw_invalid' => 'รหัสผ่านฐานข้อมูลว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'dbinfo_adminemail_invalid' => 'กล่องจดหมายของระบบว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'dbinfo_tablepre_invalid' => 'คำนำหน้าตารางข้อมูลว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'admininfo_username_invalid' => 'ชื่อผู้ใช้ของผู้ดูแลระบบว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'admininfo_email_invalid' => 'อีเมลของผู้ดูแลระบบว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'admininfo_password_invalid' => 'รหัสผ่านของผู้ดูแลระบบว่างเปล่าโปรดกรอกข้อมูล',
	'admininfo_password2_invalid' => 'รหัสผ่านทั้งสองอันไม่เหมือนกันโปรดตรวจสอบ',

	'install_dzstandalone' => '<div class="selradio"><input type="radio" id="install_ucenter_standalone" name="install_ucenter" value="standalone" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /><label for="install_ucenter_standalone">ติดตั้ง Discuz! X ใหม่ (การติดตั้งโหมดอิสระ)</label></div>',
	'install_dzfull' => '<div class="selradio"><input type="radio" id="install_ucenter_yes"' . (getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '') . ' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /><label for="install_ucenter_yes">ติดตั้ง Discuz! X ใหม่ พร้อมด้วย UCenter Server</label></div>',
	'install_dzonly' => '<div class="selradio"><input type="radio" id="install_ucenter_no"' . (getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '') . ' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /><label for="install_ucenter_no">ติดตั้งเฉพาะ Discuz! X เท่านั้น (มี UCenter Server อยู่ก่อนแล้ว)</label></div>',

	'username' => 'บัญชีผู้ดูแลระบบ',
	'email' => 'Email ของผู้ดูแลระบบ',
	'password' => 'รหัสผ่านผู้ดูแลระบบ',
	'password_comment' => 'รหัสผ่านของผู้ดูแลระบบไม่สามารถว่างได้',
	'password2' => 'ทวนรหัสผ่านซ้ำอีกครั้ง',

	'admininfo_invalid' => 'ข้อมูลของผู้ดูแลระบบไม่สมบูรณ์ โปรดตรวจสอบบัญชีผู้ดูและระบบรหัสผ่านกล่องจดหมาย',
	'dbname_invalid' => 'ชื่อฐานข้อมูลว่างเปล่าโปรดกรอกชื่อฐานข้อมูล',
	'tablepre_invalid' => 'คำนำหน้าตารางข้อมูลว่างเปล่าหรือรูปแบบผิดโปรดตรวจสอบ',
	'admin_username_invalid' => 'ชื่อผู้ใช้ที่ผิดกฎหมายความยาวชื่อผู้ใช้ไม่ควรเกินกว่า 15 ตัวละครภาษาอังกฤษและไม่สามารถมีอักขระพิเศษโดยทั่วไปภาษาจีนตัวอักษรหรือตัวเลข',
	'admin_password_invalid' => 'รหัสผ่านทั้งสองอันไม่เหมือนกันโปรดกลับมาอีกครั้ง',
	'admin_email_invalid' => 'ที่อยู่ Email ไม่ถูกต้อง ที่อยู่อีเมลนี้ถูกใช้แล้วหรือรูปแบบไม่ถูกต้อง โปรดแทนที่ด้วยที่อยู่อื่น',
	'admin_invalid' => 'ข้อมูลผู้ดูแลข้อมูลของคุณไม่ได้กรอกไว้อย่างสมบูรณ์โปรดกรอกข้อมูลในแต่ละโครงการอย่างรอบคอบ',
	'admin_exist_password_error' => 'ผู้ใช้มีอยู่แล้วหากคุณต้องการตั้งค่าผู้ใช้นี้เป็นผู้ดูแลระบบเว็บบอร์ดโปรดป้อนรหัสผ่านของผู้ใช้อย่างถูกต้องหรือเปลี่ยนชื่อของชื่อผู้ดูแลเว็บบอร์ด',

	'tagtemplates_subject' => 'ชื่อ',
	'tagtemplates_uid' => 'ID ผู้ใช้',
	'tagtemplates_username' => 'โพสต์โดย',
	'tagtemplates_dateline' => 'วันที่',
	'tagtemplates_url' => 'ที่อยู่เทมเพลต',

	'uc_version_incorrect' => 'เซิร์ฟเวอร์ UCenter ของคุณเป็นรุ่นที่ต่ำเกินไปโปรดอัพเกรด เซิร์ฟเวอร์ UCenter เป็นรุ่นล่าสุด ดาวน์โหลดได้ที่: https://discuz.chat',
	'config_unwriteable' => 'ตัวช่วยการติดตั้งไม่สามารถเขียนไฟล์ได้ ได้โปรดกำหนดค่าแอตทริบิวต์การเขียนไฟล์ config.inc.php ของโปรแกรมให้เขียนได้ -สถานะที่สามารถใช้งานได้(777)',

	'install_in_processed' => 'กำลังติดตั้ง...',
	'install_succeed' => 'ติดตั้งเสร็จแล้ว คลิกหากระบบไม่เปลี่ยนหน้าอัตโนมัติ',

	'init_credits_karma' => 'ศักดิ์ศรี',
	'init_credits_money' => 'คอยน์',

	'init_postno0' => 'เจ้าบ้าน',
	'init_postno1' => 'โซฟา',
	'init_postno2' => 'เก้าอี้',
	'init_postno3' => 'ยืน',

	'init_support' => 'สนับสนุน',
	'init_opposition' => 'คัดค้าน',

	'init_group_0' => 'สมาชิก',
	'init_group_1' => 'ผู้ดูแลระบบ',
	'init_group_2' => 'ผู้ดูแลเว็บบอร์ด',
	'init_group_3' => 'ผู้ดำเนินรายการ',
	'init_group_4' => 'ถูกห้ามพูด',
	'init_group_5' => 'ถูกห้ามอ่าน',
	'init_group_6' => 'ถูกห้ามจาก IP',
	'init_group_7' => 'นักท่องเที่ยว',
	'init_group_8' => 'กำลังรอการตรวจสอบการเป็นสมาชิก',
	'init_group_9' => 'เร่ร่อน',
	'init_group_10' => 'มือใหม่',
	'init_group_11' => 'สมาชิกลงทะเบียน',
	'init_group_12' => 'สมาชิกระดับกลาง',
	'init_group_13' => 'สมาชิกอาวุโส',
	'init_group_14' => 'สมาชิกทองคำ',
	'init_group_15' => 'ผู้ทรงคุณวุฒิ',

	'init_rank_1' => 'น้องใหม่',
	'init_rank_2' => 'อนุบาล ก.ไก่',
	'init_rank_3' => 'นักเขียนฝึกหัด',
	'init_rank_4' => 'นักเขียนอิสระ',
	'init_rank_5' => 'นักเขียนพิเศษ',

	'init_cron_1' => 'งานล้างจำนวนโพสต์รายวัน',
	'init_cron_2' => 'งานล้างเวลาออนไลน์ของเดือนนี้',
	'init_cron_3' => 'งานล้างข้อมูลประจำวัน',
	'init_cron_4' => 'สถิติและการอวยพรวันเกิดทางอีเมล',
	'init_cron_5' => 'การแจ้งเตือนเมื่อมีการตอบกลับเธรด',
	'init_cron_6' => 'งานล้างกระดานข่าวรายวัน',
	'init_cron_7' => 'งานล้างข้อมูลกิจกรรมที่จำกัดเวลา',
	'init_cron_8' => 'งานล้างข้อมูลโปรโมทเว็บ',
	'init_cron_9' => 'งานล้างเธรดรายเดือน',
	'init_cron_10' => 'สมาชิคที่อัปเดต X-Space รายวัน',
	'init_cron_11' => 'การอัปเดตเธรดต่อสัปดาห์',

	'init_bbcode_1' => 'ทำให้เนื้อหาผลัดม้วนเปลี่ยนในแนวนอน เอฟเฟกต์นี้คล้ายกัน marquee ของ HTML ข้อสังเกตุ: เอฟเฟกต์นี้จะมีเฉพาะในเบราว์เซอร์ Internet Explorer เท่านั้นที่แสดงผลอย่างถูกต้อง',
	'init_bbcode_2' => 'ฝังแอนิเมชั่น Flash',
	'init_bbcode_3' => 'แสดงสถานะออนไลน์ของ QQ คลิกไอคอนนี้เพื่อแชทกับเขาหรือเธอ',
	'init_bbcode_4' => 'ตัวยก',
	'init_bbcode_5' => 'ตัวห้อย',
	'init_bbcode_6' => 'ฝังเสียง Windows media',
	'init_bbcode_7' => 'ฝังเสียงหรือวีดีโอ Windows media',

	'init_qihoo_searchboxtxt' => 'ป้อนคีย์เวิร์ด,ค้นหาอย่างรวดเร็วของเว็บบอร์ดนี้',
	'init_threadsticky' => 'ระดับโลก,หมวดหมู่,รุ่นนี้',

	'init_default_style' => 'เทมเพลตเริ่มต้น',
	'init_default_forum' => 'บอร์ดเริ่มต้น',
	'init_default_template' => 'ชุดเทมเพลตเริ่มต้น',
	'init_default_template_copyright' => 'บริษัท เทนเซ็นต์คลาวด์คอมพิวติ้ง (ปักกิ่ง) จำกัด',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => 'โฆษณา/SPAM\r\nเนื้อหาหลอกลวง\r\nเนื้อหาที่ผิดกฎหมาย\r\nข้อความผิดคำถาม\r\n โพสต์ซ้ำ\r\n\r\ฉันเห็นด้วยกับมันมาก\r\บทความบูติก\r\n เนื้อหาต้นฉบับ',
	'init_userreasons' => 'เจ๋ง!\r\nทุกอย่างไม่มีอะไรเลย\r\nให้มันชอบ!\r\nเลียนแบบ\r\nความสงบ',
	'init_link' => 'เว็บบอร์ดอย่างเป็นทางการของ Discuz!',
	'init_link_note' => 'รุ่นล่าสุดของ Discuz! ข่าวผลิตภัณฑ์ การดาวน์โหลดซอฟต์แวร์ และ การแลกเปลี่ยนทางเทคนิค',

	'init_promotion_task' => 'งานโปรโมตเว็บไซต์',
	'init_gift_task' => 'งานซองของขวัญสีแดง',
	'init_avatar_task' => 'งานรูปภาพประจำตัว',

	'copyright' => 'สงวนลิขสิทธิ์ &copy; 2001-'.date('Y'). ' เทนเซ็นต์คลาวด์',

	'license' => '
<div class="license"><h1>ข้อตกลงการใช้งานรุ่นภาษาไทยสำหรับผู้ใช้งานชาวไทย</h1>
<p>สงวนลิขสิทธิ์ &copy; 2001-' . date('Y') . '，บริษัท เทนเซ็นต์คลาวด์คอมพิวติ้ง (ปักกิ่ง) จำกัด (เดิมชื่อ บริษัท ปักกิ่งคังเซิงซินฉวงวิทยาศาสตร์และเทคโนโลยี จำกัด) ผู้เป็นเจ้าของ (ต่อไปนี้เรียกว่า "<strong>เทนเซ็นต์คลาวด์</strong>") </p>

<p>สงวนลิขสิทธิ์ &copy; 2008-' . date('Y') . '，เว็บไซต์ดิสคัซไซนช์ (เดิมคือเว็บนอร์ทไซนช์) รุ่นภาษาไทยที่คุณกำลังจะติดตั้ง</p>

<p>ขอบคุณสำหรับการเลือกผลิตภัณฑ์ของเทนเซ็นต์คลาวด์ เราหวังว่าความพยายามของเราจะช่วยให้คุณมีโซลูชันเว็บไซต์ที่มีประสิทธิภาพ รวดเร็ว และ ทรงพลัง เว็บไซต์ชุมชน และพื้นที่การสนทนาอย่างเป็นทางการคือ https://www.dismall.com เว็บไซต์ศูนย์รวมส่วนเสริม และแอปพลิเคชั่นอย่างเป็นทางการคือ https://addon.dismall.com เว็บไซต์โอเพ่นซอร์สคือ https://code.dismall.com เว็บไซต์ของผู้แปลไทย https://discuzxync.com</p>

<p>ผลิตภัณฑ์เทนเซ็นต์คลาวด์ Discuz! X มีเว็บไซต์ศูนย์รวมส่วนเสริมและแอปพลิเคชั่นอย่างเป็นทางการดำเนินการโดย บริษัท เหอเฟย์เน็ตเวิร์คเทคโนโลยี จำกัด โครงการโอเพ่นซอร์สดูแลและดำเนินการโดย บริษัท เหอเฟย์เน็ตเวิร์คเทคโนโลยี จำกัด โอเพ่นซอร์สโค้ดของ Discuz! X ได้รับการดูแลร่วมกันโดย คณะกรรมการบริหารโครงการโอเพ่นซอร์สและชุมชนนักพัฒนา นอกจากบริการข้างต้นแล้วบริการทั้งหมดจัดหามาให้โดยเทนเซ็นต์คลาวด์</p>

<p>ประกาศถึงผู้ใช้งาน：ข้อตกลงนี้เป็นข้อตกลงที่มีผลผูกพันทางกฎหมายระหว่าง "คุณ" กับ "เทนเซ็นต์คลาวด์" เกี่ยวกับการใช้ผลิตภัณฑ์ซอฟต์แวร์ และ บริการต่าง ๆ ที่จัดหาโดยบริษัทเทนเซ็นต์คลาวด์ ไม่ว่าคุณจะเป็น บุคคล หรือ องค์กร ไม่ว่าแสดงหาผลกำไรหรือไม่ การใช้งาน (รวมถึงการเรียนรู้และการวิจัย) คุณต้องอ่านรายละเอียดข้อตกลงนี้อย่างระมัดระวังและรอบคอบ รวมถึงข้อยกเว้นหรือการปฏิเสทความรับผิดชอบของเทนเซ็นต์คลาวด์ และ ข้อจำกัดเกี่ยวกับสิทธิ์ของคุณ โปรดตรวจสอบและยอมรับข้อตกลงของบริการนี้ หากคุณไม่เห็นด้วยกับเนื้อหาในข้อตกลงหรือเงื่อนไขการให้บริการนี้ และ/หรือ การที่เทนเซ็นต์คลาวด์สามารถเปลี่ยนแปลงข้อตกลงเมื่อไดก็ได้ คุณไม่ควรใช้หรือเยี่ยมชมผลิตภัณฑ์หรือบริการที่ให้บริการโดยเทนเซ็นต์คลาวด์ การลงทะเบียน เข้าสู่ระบบ ดาวน์โหลด การใช้บริการผลิตภัณฑ์ ไม่ว่าพฤติกรรมได ๆ ที่เกี่ยวข้องกับเทนเซ็นต์คลาวด์ จะถือว่าเป็นการยอมรับโดยสมบูรณ์ตามข้อตกลงและเงื่อนไขการบริการในหน้านี้ รวมไปถึงการยอมรับในสิทธิ์ของเทนเซ็นต์คลาวด์ที่สามารถแก้ไขข้อตกลงและเงื่อนไขการบริการนี้ได้ตลอดเวลา</p>
<p>เมื่อมีการเปลี่ยนแปลงข้อกำหนดและเงื่อนไขการให้บริการ เทนเซ็นต์คลาวด์จะประกาศเนื้อหาการแก้ไขบนเว็บไซต์ ข้อกำหนดและเงื่อนไขการให้บริการเดิมจะถูกแทนที่ทันทีเมื่อประกาศถูกโพสต์เผยแพร่บนเว็บไซต์อย่างเป็นทางการของเทนเซ็นต์คลาวด์ คุณสามารถเยื่ยมชมเว็บบอร์ดอย่างเป็นทางการของเทนเซ็นต์คลาวด์ เพื่อตรวจสอบข้อกำหนดและเงื่อนไขการให้บริการฉบับล่าสุดได้ตลอดเวลา หากคุณเลือกยอมรับข้อกำหนดเหล่านี้ นั่นหมายความว่าคุณตกลงที่จะผูกพันตามเงื่อนไขของข้อตกลง หากคุณไม่เห็นด้วยกับข้อกำหนดในการให้บริการเหล่านี้ คุณไม่มีสิทธิ์ที่จะใช้บริการเทนเซ็นต์คลาวด์ หากคุณฝ่าฝืนบทบัญญัติของข้อตกลงนี้ เทนเซ็นต์คลาวด์มีสิทธิ์ที่จะระงับหรือยกเลิกการใช้ผลิตภัณฑ์เทนเซ็นต์คลาวด์ได้ตลอดเวลา และ ขอสงวนสิทธิ์ในการรับผิดชอบทางกฎหมายที่เกี่ยวข้อง</p>
<p>หลังจากทำความเข้าใจ เห็นด้วย และ ปฏิบัติตามเงื่อนไขทั้งหมดของข้อตกลงนี้แล้ว ก่อนที่คุณจะเริ่มใช้ผลิตภัณฑ์เทนเซ็นต์คลาวด์ คุณสามารถทำข้อตกลงเป็นลายลักษณ์อักษรได้โดยตรงกับเทนเซ็นต์คลาวด์ เพื่อเสริม หรือ แทนที่ทั้งหมด หรือ ส่วนใดส่วนหนึ่งของข้อตกลงนี้</p>

<p>เทนเซ็นต์คลาวด์เป็นเจ้าของสิทธิ์ทรัพย์สินทางปัญญาทั้งหมดของซอฟต์แวร์นี้ คุณสามารถใช้ซอฟต์แวร์นี้ได้ภายใต้ข้อตกลงตามใบอนุญาตนี้เท่านั้น ห้ามจำหน่าย เทนเซ็นต์คลาวด์อนุญาตให้คุณทำซ้ำ ดาวน์โหลด ติดตั้ง ใช้งาน หรือ รับประโยชน์จากการทำงานของซอฟต์แวร์ หรือ สิทธิ์ในทรัพย์สินทางปัญญาในลักษณะอื่น ๆ เมื่อคุณยังปฏิบัติตามข้อกำหนดและเงื่อนไขการให้บริการนี้เท่านั้น</p>

<h3>I. สิทธิ์ในการอนุญาตข้อตกลง</h3>
<ol>
   <li>คุณสามารถใช้ซอฟต์แวร์นี้กับการใช้งานที่ไม่ใช่เชิงพาณิชย์หรือการใช้งานเชิงพาณิชย์บนพื้นฐานของการปฏิบัติตามข้อตกลงใบอนุญาตนี้อย่างเต็มที่ (จำกัด เฉพาะการอนุญาตของข้อตกลงนี้) โดยไม่ต้องจ่ายค่าธรรมเนียมใบอนุญาตลิขสิทธิ์ซอฟต์แวร์</li>
   <li>คุณสามารถแก้ไขซอร์สโค้ดของผลิตภัณฑ์เทนเซ็นต์คลาวด์ (ถ้ามี) หรือสไตล์อินเทอร์เฟซตามเงื่อนไข และ ข้อจำกัด ที่ระบุไว้ในข้อตกลงเพื่อตอบสนองความต้องการของเว็บไซต์ของคุณ</li>
   <li>คุณมีความเป็นเจ้า ข้อมูลการเป็นสมาชิก บทความ และ ข้อมูลที่เกี่ยวข้องทั้งหมดในเว็บไซต์ที่สร้างขึ้นโดยอิสระผ่านซอฟต์แวร์นี้ และมีหน้าที่รับผิดชอบในการตรวจสอบเนื้อหาเหล่านั้นเพื่อให้แน่ใจว่ามันถูกต้องตามกฎหมายและไม่ไปละเมิดสิทธิ์ของใคร หากเกิดการสูญเสียต่อผู้ใช้ซอฟต์แวร์และบริการคลาวด์ของเทนเซ็นต์คลาวด์ขึ้น คุณต้องรับผิดชอบและควรจ่ายค่าตอบแทนเองทั้งหมด</li>
   <li>หากคุณต้องการใช้ซอฟต์แวร์หรือบริการเทนเซ็นต์คลาวด์ เพื่อวัตถุประสงค์ทางการค้าคุณต้องปฏิบัติตามกฎหมายที่เกี่ยวข้องของสาธารณรัฐประชาชนจีนหากคุณต้องการให้การสนับสนุนด้านเทคนิคหรือการสนับสนุนทางเทคนิคโปรดให้บริการสนับสนุนด้านเทคนิคแก่ศูนย์แอปพลิเคชันอย่างเป็นทางการ (https://www.discuz.vip/)</li>
   <li>คุณสามารถดาวน์โหลดแอปพลิเคชันที่เหมาะสมสำหรับเว็บไซต์ของคุณได้โดยตรงจากแอปเซนเตอร์ที่จัดทำโดยเทนเซ็นต์คลาวด์ แต่คุณควรจ่ายค่าธรรมเนียมที่สอดคล้องกันให้กับผู้พัฒนา/เจ้าของแอปพลิเคชัน</li>
</ol>

<h3>II. เงื่อนไขและข้อจำกัด ที่ระบุไว้ในข้อตกลง</h3>
<ol>
   <li>ห้ามขาย ให้เช่า จำนอง หรือ เก็บค่าการบอกรับเป็นสมาชิก กับซอฟต์แวร์นี้ หรือ ใบอนุญาตเชิงพาณิชย์ที่เกี่ยวข้อง</li>
   <li>ห้ามดัดแปลงเนื้อหาส่วนท้ายของหน้า ไม่ว่าจะทั้งหมดหรือบางส่วน ไม่ว่าจะมากหรือน้อย ไม่ว่าจะมีจุดประสงค์เพื่อความสวยงามหรือไม่ก็ตาม โดยไม่ได้รับการอนุญาตเป็นลายลักษณ์อักษรจากเทนเซ็นต์คลาวด์ ชื่อของผลิตภัณฑ์และเว็บไซต์บริษัทย่อยของเทนเซ็นต์คลาวด์ที่ระบุบนส่วนท้ายของหน้า（https://www.discuz.vip/） และลิงก์ของศูนย์แอปพลิเคชันอย่างเป็นทางการของขั้นตอน（https://addon.dismall.com）จะต้องถูกเก็บรักษาไว้ ไม่สามารถลบออกหรือแก้ไขได้</li>
   <li>ห้ามดัดแปลงหรือแก้ไขทั้งหมดหรือส่วนไดส่วนหนึ่งของผลิตภัณฑ์เพื่อให้ได้มาซึ่งรุ่นดัดแปลงหรือแจกจ่ายร่วมกันกับซอฟต์แวร์บุคคลที่สาม</li>
   <li>แอปพลิเคชันที่คุณดาวน์โหลดจากแอปเซนเตอร์ที่ไม่ได้รับอนุญาตเป็นลายลักษณ์อักษรจากนักพัฒนาแอปพลิเคชัน อาจทำให้เกิด วิศวกรรมย้อนกลับ การเจาะระบบ การถอดรหัส การคัดลอก การแก้ไข การเชื่อมโยง การพิมพ์ซ้ำ การรวบรวม การตีพิมพ์ การเผยแพร่ การพัฒนาผลิตภัณฑ์อนุพันธ์ที่เกี่ยวข้อง การจัดการงาน การขุดเหรียญคริปโต และ/หรือ อื่น ๆ ที่สร้างความเสียหายต่อคุณหรือเซิร์ฟเวอร์ของคุณได้</li>
   <li>หากคุณไม่ปฏิบัติตามเงื่อนไขในข้อตกลงนี้ การอนุญาตของคุณจะถูกยกเลิก สิทธิ์ที่เคยได้รับอนุญาตจะถูกเรียกคืน ในขณะเดี่ยวกันคุณก็ต้องรับผิดชอบตามกฎหมายที่เกี่ยวข้องด้วย</li>
</ol>

<h3>III. การรับประกันและการยกเว้น</h3>
<ol>
   <li>โดยนัยแล้วซอฟต์แวร์และเอกสารประกอบนี้มีให้บริการโดยปราศจากการรับประกันหรือการชดเชย</li>
   <li>คุณใช้ซอฟต์แวร์นี้ด้วยความสมัครใจ และเข้าใจความเสี่ยงของการใช้ซอฟต์แวร์นี้ ก่อนการซื้อบริการด้านเทคนิคของผลิตภัณฑ์ เราไม่อาจสัญญาได้ว่าจะรับการสนับสนุนด้านเทคนิค การรับประกันการใช้งาน และ ไม่อาจรับผิดชอบต่อปัญหาที่เกิดจากการใช้ซอฟต์แวร์นี้ได้</li>
   <li>เทนเซ็นต์คลาวด์จะไม่รับผิดชอบต่อบทความหรือข้อมูลในเว็บบอร์ดหรือเว็บไซต์ที่สร้างโดยซอฟต์แวร์นี้</li>
   <li>เทนเซ็นต์คลาวด์ไม่สามารถตรวจสอบแอปพลิเคชันที่อัปโหลดจากบุคคลที่สามมายังแอปเซนเตอร์ได้อย่างครอบคลุม ดังนั้นจึงไม่รับประกันความถูกต้องตามกฎหมายของแอปพลิเคชัน ความปลอดภัย ความสมบูรณ์ ความจริงหรือคุณภาพ ฯลฯ เมื่อคุณดาวน์โหลดแอปพลิเคชันจากแอปเซนเตอร์ แสดงว่าคุณตกลงที่จะใช้วิจารณญาณของคุณเองและรับความเสี่ยงทั้งหมดไว้เองโดยไม่พึ่งพาเทนเซ็นต์คลาวด์ อย่างไรก็ตามไม่ว่าในกรณีใด เทนเซ็นต์คลาวด์มีสิทธิ์หยุดให้บริการศูนย์แอปพลิเคชันและดำเนินการตามกฎหมายที่เกี่ยวข้อง รวมถึงแต่ไม่จำกัด การเพิกถอนแอปพลิเคชันที่เกี่ยวข้อง ระงับบริการทั้งหมดหรือบางส่วน การเก็บบันทึกที่เกี่ยวข้อง และ การรายงานไปยังหน่วยงานที่เกี่ยวข้อง เทนเซ็นต์คลาวด์จะไม่รับผิดชอบทั้งทางตรงและทางอ้อม ต่อความสูญเสียที่อาจเกิดขึ้นระหว่างกับคุณกับบุคคลที่สาม</li>
   <li>เทนเซ็นต์คลาวด์ ไม่รับประกันความทันเวลาความปลอดภัยและความถูกต้องของซอฟต์แวร์และบริการที่จัดทำโดยเทนเซ็นต์คลาวด์ เนื่องจากปัจจัยเหตุสุดวิสัยปัจจัยที่เทนเซ็นต์คลาวด์ ไม่สามารถควบคุมได้ และทำให้เกิดความสูญเสียคุณตกลงที่จะยอมแพ้สิทธิ์ทั้งหมดของความรับผิดชอบของ เทนเซ็นต์คลาวด์</li>
   <li>บริษัทเทนเซ็นต์คลาวด์ ขอให้คุณทราบโดยเฉพาะว่าเพื่อให้แน่ใจว่าการพัฒนาธุรกิจและการปรับตัวของ บริษัทเทนเซ็นต์คลาวด์ มีสิทธิ์ที่จะแก้ไขเนื้อหาบริการระงับหรือยุติการใช้งานชิ้นส่วนหรือการใช้งานซอฟต์แวร์และบริการทั้งหมดได้ตลอดเวลาหรือไม่แจ้งล่วงหน้า การแก้ไขจะมีการประกาศในหน้าเกี่ยวข้องของเว็บไซต์ บริษัทเทนเซ็นต์คลาวด์ และเมื่อมีการประกาศเป็นการแจ้งให้ทราบล่วงหน้าหาก บริษัทเทนเซ็นต์คลาวด์ ใช้สิทธิ์ในการแก้ไขหรือหยุดยุติการใช้ส่วนหรือการใช้ซอฟต์แวร์ทั้งหมดและบริการทั้งหมดมันจะทำให้เกิดการสูญเสียและเทนเซ็นต์คลาวด์ไม่จำเป็นต้องรับผิดชอบต่อคุณหรือบุคคลที่สามใด ๆ</li>
</ol>

<p>ข้อตกลงในใบการอนุญาตการใช้งานผลิตภัณฑ์ของเทนเซ็นต์คลาวด์ รายละเอียดของใบอนุญาตเชิงพาณิชย์ และ บริการด้านเทคนิคทั้งหมด ถูกจัดทำขึ้นเพื่อใช้กับเทนเซ็นต์คลาวด์เท่านั้น เทนเซ็นต์คลาวด์มีสิทธิ์ในการแก้ไขข้อตกลงในใบอนุญาตและรายการราคาค่าบริการโดยไม่ต้องแจ้งให้ทราบล่วงหน้า การแก้ไขข้อตกลงหรือรายการราคาใหม่จะมีผลบังคับใช้กับผู้ใช้ที่ได้รับใบอนุญาตทันทีนับตั้งแต่วันที่มีการเปลี่ยนแปลง</p>

<p>ทันทีที่คุณเริ่มติดตั้งผลิตภัณฑ์ของเทนเซ็นต์คลาวด์ จะถือว่าเข้าใจและยอมรับเงื่อนไขตามข้อตกลงนี้ ขณะที่คุณเพลิดเพลินกับสิทธิ์ภายใต้ข้อตกลงและข้อจำกัดที่เกี่ยวข้องที่ได้รับจากข้อตกลงข้างต้น พฤติกรรมได ๆ ที่ไม่ได้รับอนุญาตและอยู่นอกเหนือขอบเขตข้อตกลงนี้ จะเป็นการละเมิดโดยตรงต่อใบอนุญาตและถือเป็นการยกเลิกข้อตกลง เรามีสิทธิ์ที่จะบอกเลิกการอนุญาตเมื่อไดก็ได้เพื่อหยุดความเสียหายและสงวนสิทธิ์ในความรับผิดชอบต่อการดำเนินการที่เกี่ยวข้อง</p>

<p>การตีความความถูกต้อง และ การระงับข้อพิพาทตามข้อตกลงในใบอนุญาตนี้ จะใช้ร่วมกับกฎหมายของสาธารณรัฐประชาชนจีน</p>

<p>ในกรณีที่มีการละเมิดหรือเกิดข้อพิพาทใด ๆ ขึ้นระหว่างคุณกับเทนเซ็นต์คลาวด์ ควรเริ่มจากการเจรจาตกลงกันด้วยความเป็นมิตรก่อน หากการเจรจาล้มเหลว คุณสามารส่งมอบข้อพิพาทต่อไปยัง ศาลประชาชนแห่งเขตไห่เตี้ย กรุงปักกิ่ง ซึ่งเป็นที่ตั้งของเทนเซ็นต์คลาวด์ เทนเซ็นต์คลาวด์มีสิทธิ์ที่จะตีความและแก้ไขเนื้อหาของข้อกำหนดข้างต้นโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p>

<p>（จบ）</p>

<p align="right">ดีสคัซ!</p>

</div>',

	'php8_tips' => 'สวัสดี，ผลิตภัณฑ์นี้ยังไม่ได้รับการสนับสนุนให้ติดตั้งร่วมกับ PHP 9, กรุณาลองดาวน์เกรดลงเป็น PHP 8.1 อย่างน้อย (แนะนำ PHP 7.3)',
	'no_utf8_tips' => 'สวัสดี รุ่นที่กำลังจะติดตั้งเป็นรุ่นการเข้ารหัสที่แปลได้เช่น GBK / BIG-5 รุ่นดังกล่าวไม่ได้เป็นรุ่นหลัก หากคุณวางแผนที่จะสร้างเว็บไซต์ใหม่【สำคัญ】ขอแนะนำให้คุณใช้รุ่น UTF-8 รุ่นอย่างทางการล่าสุดในการติดตั้ง',
	'no_latest_tips' => 'สวัสดี รุ่นที่กำลังจะติดตั้งมีอายุมากแล้ว อาจมีข้อบกพร่อง และ อันตรายที่ซ่อนอยู่หากไม่มีสถานการณ์พิเศษ ขอแนะนำให้คุณเปลี่ยนไปใช้การติดตั้งรุ่นอย่างทางการล่าสุด',
	'unstable_tips' => 'สวัสดี รุ่นที่กำลังจะติดตั้งเป็นรุ่นไม่เป็นทางการ และ อาจมี Bug หรือข้อบกพร่องที่ไม่รู้จักหากคุณวางแผนที่จะสร้างพื้นที่ให้บริการอย่างเป็นทางการ หรือ ซื้อปลั๊กอิน เราขอแนะนำให้คุณใช้รุ่น UTF-8 รุ่นอย่างทางการล่าสุดในการติดตั้ง',
	'next_tips' => '\r\nคลิก【ตกลง】เพื่อข้ามไปยังหน้าดาวน์โหลดรุ่น UTF-8 รุ่นอย่างทางการล่าสุด คลิก【ยกเลิก】เพื่อดำเนินการติดตั้งต่อ (ไม่แนะนำ)',

	'uc_installed' => 'คุณเคยติดตั้ง UCenter แล้ว，หากคุณต้องการติดตั้งใหม่ให้ลบไฟล์ data/install.lock ออกก่อน',
	'i_agree' => 'ฉันได้อ่านอย่างระมัดระวัง และ เห็นด้วยกับเนื้อหาทั้งหมดข้างต้น',
	'supportted' => 'สนับสนุน',
	'unsupportted' => 'ไม่รองรับ',
	'max_size' => 'สนับสนุน/ขนาดใหญ่ที่สุด',
	'project' => 'โครงการ',
	'ucenter_required' => 'ค่าที่จำเป็นต่อ Discuz!',
	'ucenter_best' => 'ค่าที่ Discuz! แนะนำ',
	'curr_server' => 'เซิร์ฟเวอร์ปัจจุบัน',
	'env_check' => 'การตรวจสอบสิ่งแวดล้อม',
	'os' => 'ระบบปฏิบัติการ',
	'php' => 'PHP รุ่น',
	'attachmentupload' => 'ขนาดไฟล์อัปโหลด',
	'unlimit' => 'ไม่จำกัด',
	'version' => 'รุ่น',
	'gdversion' => 'คลังชุดคำสั่ง GD',
	'allow' => 'อนุญาต',
	'unix' => 'จำพวก UNIX',
	'diskspace' => 'พื้นที่ดิสก์',
	'opcache' => 'OPcache',
	'curl' => 'คลังชุดคำสั่ง cURL',
	'priv_check' => 'การตรวจสอบสิทธิ์ไฟล์ไดเรกทอรี',
	'func_depend' => 'การพึ่งพาฟังก์ชั่น',
	'func_name' => 'ชื่อฟังก์ชั่น',
	'check_result' => 'ผลการทดสอบ',
	'suggestion' => 'คำแนะนำ',
	'advice_mysqli' => 'โปรดตรวจสอบ mysqli ว่ามีการโหลดโมดูลอย่างถูกต้องหรือไม่',
	'advice_fopen' => 'ฟังก์ชั่นนี้ต้องการ php.ini ที่เปิดใช้งาน allow_url_fopen กรุณาติดต่อผู้ให้บริการเพื่อให้แน่ใจว่าคุณลักษณะนี้จะถูกเปิดใช้งาน',
	'advice_xml' => 'ฟังก์ชั่นนี้ต้องการ PHP ที่สนับสนุน XML กรุณาติดต่อผู้ให้บริการเพื่อให้แน่ใจว่าคุณลักษณะนี้จะถูกเปิดใช้งาน',
	'none' => 'ไม่มีคำแนะนำ',
	'undefine_func' => 'ฟังก์ชั่นที่ไม่มี',
	'mysqli_unsupport' => 'โปรดตรวจสอบ mysqli ว่ามีการโหลดโมดูลอย่างถูกต้องหรือไม่',

	'dbhost' => 'ที่อยู่เซิร์ฟเวอร์ฐานข้อมูล',
	'dbuser' => 'ชื่อผู้ใช้ฐานข้อมูล',
	'dbpw' => 'รหัสผ่านฐานข้อมูล',
	'dbname' => 'ชื่อฐานข้อมูลที่จัดเก็บ',
	'tablepre' => 'คำนำหน้าตารางข้อมูล',

	'ucfounderpw' => 'รหัสผ่านผู้ก่อตั้ง',
	'ucfounderpw2' => 'ทวนรหัสผ่านซ้ำอีกครั้ง',

	'clear_dir' => 'ล้างไดเรกทอรี',
	'innodb' => 'การแปลงตารางข้อมูล InnoDB',
	'select_db' => 'เลือกฐานข้อมูล',
	'create_table' => 'สร้างตารางข้อมูล',
	'succeed' => 'สำเร็จ',
	'failed' => 'ล้มเหลว',

	'init_table_data' => 'เติมข้อมูลในตารางข้อมูล',
	'install_data' => 'ติดตั้งข้อมูล',
	'install_test_data' => 'การติดตั้งข้อมูลเพิ่มเติม',

	'method_undefined' => 'ไม่ได้ระบุเมท็อด',
	'database_nonexistence' => 'ฐานข้อมูลสำหรับดำเนินการไม่มีอยู่จริง',
	'skip_current' => 'ข้ามขั้นตอนนี้',
	'topic' => 'หัวข้อพิเศษ',
	'install_finish' => 'การติดตั้งไซต์เสร็จสมบูรณ์ขอบคุณสำหรับการสนับสนุนของคุณ!',
	'install_finish_next' => 'ขั้นต่อไปคุณสามารถ:',
	'finish_btn_admin' => 'เข้าสู่ระบบหลังบ้าน',
	'finish_btn_cloudaddon' => 'ติดตั้งส่วนเสริม',
	'finish_btn_direct' => 'ตรงไปยังเว็บไซต์',

);

$msglang = array(
	'config_nonexistence' => 'ไฟล์ config.inc.php ไม่มีอยู่ การติดตั้งไม่สามารถดำเนินต่อได้ กรุณาอัปโหลดไฟล์ผ่าน FTP แล้วลองใหม่อีกครั้ง',
);

?>