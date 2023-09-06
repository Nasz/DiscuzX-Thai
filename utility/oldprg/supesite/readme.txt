===============================
ข้อควรระวังในการแปลง SS7 เป็น Discuz! X1 
===============================

คำถาม：ทำไมหลังจากแปลงแล้วถึงไม่เห็นไฟล์แนบที่เคยมี?
วิธีแก้ไข： ขั้นตอนมีดังนี้：
1. ค้นหาไอคอนในซอร์สโค้ตดั้งเดิมของ SS7 images/base/attachment.gif，ใส่มันลงไปในไดเร็กทอรี่ static/image/filetype/ ของ Disucuz！ X1；
2. ค้นหาไฟล์ source/module/portal/portal_view.php แล้วเพิ่มโค้ตต่อไปนี้ในบรรทัดใหม่หลังโค้ต “$content['content'] = blog_bbcode($content['content']);”：

$ss_url = 'http://your_ss_site_url/'; // เปลี่ยนที่อยู่นี้เป็นที่อยู่เว็บไซต์ SS ของคุณ！！！
$findarr = array(
	$ss_url.'batch.download.php?aid=', // ที่อยู่ดาวน์โหลดไฟล์แนบ
	$ss_url.'attachments/',  // แค็ตตาล็อกรูปภาพที่แนบมา
	$ss_url.'images/base/attachment.gif'  // ไอคอนดาวน์โหลดไฟล์แนบ
);
$replacearr = array(
	'porta.php?mod=attachment&id=',
	$_G['setting']['attachurl'].'/portal/',
	STATICURL.'image/filetype/attachment.gif'
);
$content['content'] = str_replace($findarr, $replacearr, $content['content']);


