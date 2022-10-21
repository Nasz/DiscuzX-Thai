<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_exif.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(

	'unknown' => 'ไม่รู้จัก',
	'resolutionunit' => array('', '', 'นิ้ว', 'เซนติเมตร'),
	'exposureprogram' => array('ไม่ได้กำหนด', 'โหมด M', 'โหมด P', 'โหมด AV', 'โหมด S', 'โหมด Macro', 'โหมดกีฬา', 'โหมดบุคคล', 'โหมดวิวทิวทัศน์'),
	'meteringmode' => array(
		'0'		=>	'ไม่รู้จัก',
		'1'		=>	'เฉลี่ยทั้งภาพ',
		'2'		=>	'เฉลี่ยหนักกลางภาพ',
		'3'		=>	'แบบเฉพาะจุด',
		'4'		=>	'แบบโซน',
		'5'		=>	'ประเมิน',
		'6'		=>	'ตามวัตถุ',
		'255'	=>	'อื่น ๆ'
		),
	'lightsource' => array(
		'0'		=>	'ไม่รู้จัก',
		'1'		=>	'แสงแดด',
		'2'		=>	'แสงไฟฟลูออเรสเซนต์',
		'3'		=>	'แสงหลอดทังสเตน',
		'10'	=>	'แสงแฟลช',
		'17'	=>	'ไฟมาตรฐาน A',
		'18'	=>	'ไฟมาตรฐาน B',
		'19'	=>	'ไฟมาตรฐาน C',
		'20'	=>	'D55',
		'21'	=>	'D65',
		'22'	=>	'D75',
		'255'	=>	'อื่น ๆ'
		),
	'img_info' => array ('ข้อมูลไฟล์' => 'ไม่มีข้อมูล EXIF ของรูป'),

	'FileName' => 'ชื่อไฟล์',
	'FileType' => 'รูปแบบไฟล์',
	'MimeType' => 'ชนิดMIME',
	'FileSize' => 'ขนาดไฟล์',
	'FileDateTime' => 'เวลา',
	'ImageDescription' => 'คำอธิบาย',
	'auto'     => 'อัตโนมัติ',
	'Make'     => 'ผู้ผลิต',
	'Model'    => 'โมเดล',
	'Orientation' => 'ตำแหน่งทิศทาง',
	'XResolution' => 'ความละเอียดแนวนอน',
	'YResolution' => 'ความละเอียดแนวตั้ง',
	'Software'    => 'ซอฟต์แวร์',
	'DateTime'    => 'เวลาที่ปรับเปลี่ยน',
	'Artist'      => 'ศิลปิน',
	'YCbCrPositioning' => 'การควบคุมตำแหน่งYCbCr',
	'Copyright'   => 'ลิขสิทธิ์',
	'Photographer'=> 'ช่างภาพ',
	'Editor'      => 'นักแต่งภาพ',
	'ExifVersion' => 'Exif รุ่น',
	'FlashPixVersion' => 'FlashPix รุ่น',
	'DateTimeOriginal' => 'วันเวลาต้นฉบับ',
	'DateTimeDigitized'=> 'เวลาดิจิทัล',
	'Height'  => 'ความสูง',
	'Width'   => 'ความกว้าง',
	'ApertureValue' => 'ค่าแสง',
	'ShutterSpeedValue' => 'ความเร็วชัตเตอร์',
	'ApertureFNumber'   => 'ค่ารูรับแสง',
	'MaxApertureValue'  => 'ค่าแสงสูงสุด',
	'ExposureTime'      => 'เวลาในการเปิดรับแสง',
	'FNumber'           => 'F-Number',
	'MeteringMode'      => 'โหมดวัดแสง',
	'LightSource'       => 'ที่มาของแสง',
	'Flash'             => 'แฟลช',
	'ExposureMode'		=> 'โหมดการเปิดรับแสง',
	'manual'            => 'กำหนดเอง',
	'WhiteBalance'      => 'สมดุลแสดงสีขาว',
	'ExposureProgram'   => 'โปรแกรมการเปิดรับแสง',
	'ExposureBiasValue' => 'ค่าชดเชยการเปิดรับแสง',
	'ISOSpeedRatings'   => 'ค่าความไวแสงตาม ISO',
	'ComponentsConfiguration' => 'การกำหนดค่าองค์ประกอบ',
	'CompressedBitsPerPixel'  => 'อัตราส่วนการบีบอัดภาพ',
	'FocusDistance'     => 'ระยะโฟกัส',
	'FocalLength'       => 'ความยาวโฟกัส',
	'FocalLengthIn35mmFilm' => 'ระยะโฟกัส 35 มม.',
	'UserCommentEncoding' => 'รหัสบันทึกย่อของผู้ใช้',
	'UserComment'		=> 'ความคิดเห็นของผู้ใช้',
	'ColorSpace'		=> 'พื้นที่สี',
	'ExifImageLength'   => 'ความกว้างของภาพ',
	'ExifImageWidth'    => 'ความสูงของภาพ',
	'FileSource'        => 'ไฟล์ต้นฉบับ',
	'SceneType'			=> 'ประเภทฉาก',
	'ThumbFileType'     => 'รูปแบบไฟล์ของภาพขนาดเล็ก',
	'ThumbMimeType'     => 'ชนิดMIMEของภาพขนาดเล็ก'
);

?>