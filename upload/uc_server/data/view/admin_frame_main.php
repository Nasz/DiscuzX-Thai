<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<?php if($iframe) { ?>
<script type="text/javascript">
	var uc_menu_data = new Array();
	o = document.getElementById('header_menu_menu');
	elems = o.getElementsByTagName('A');
	for(i = 0; i<elems.length; i++) {
		uc_menu_data.push(elems[i].innerHTML);
		uc_menu_data.push(elems[i].href);
	}
	try {
		parent.uc_left_menu(uc_menu_data);
		parent.uc_modify_sid('<?php echo $sid;?>');
	} catch(e) {}
</script>
<?php } ?>
<div class="container">
	<h3>UCenter สถิติ</h3>
	<ul class="memlist fixwidth">
		<li><em><?php if($user['isfounder'] || $user['allowadminapp']) { ?><a href="<?php echo UC_ADMINSCRIPT;?>?m=app&a=ls">แอปพลิเคชันทั้งหมด</a><?php } else { ?>แอปพลิเคชันทั้งหมด<?php } ?>:</em><?php echo $apps;?></li>
		<li><em><?php if($user['isfounder'] || $user['allowadminuser']) { ?><a href="<?php echo UC_ADMINSCRIPT;?>?m=user&a=ls">จำนวนผู้ใช้ทั้งหมด</a><?php } else { ?>จำนวนผู้ใช้ทั้งหมด<?php } ?>:</em><?php echo $members;?></li>
		<li><em><?php if($user['isfounder'] || $user['allowadminpm']) { ?><a href="<?php echo UC_ADMINSCRIPT;?>?m=pm&a=ls">หมายเลขข้อความสั้น ๆ</a><?php } else { ?>หมายเลขข้อความสั้น ๆ<?php } ?>:</em><?php echo $pms;?></li>
		<li><em>หมายเลขบันทึกเพื่อน:</em><?php echo $friends;?></li>
	</ul>
	
	<h3>通知状态</h3>
	<ul class="memlist fixwidth">
		<li><em><?php if($user['isfounder'] || $user['allowadminnote']) { ?><a href="<?php echo UC_ADMINSCRIPT;?>?m=note&a=ls">หมายเลขการแจ้งเตือน</a><?php } else { ?>หมายเลขการแจ้งเตือน<?php } ?>:</em><?php echo $notes;?></li>
		<?php if($errornotes) { ?>
			<li><em><?php if($user['isfounder'] || $user['allowadminnote']) { ?><a href="<?php echo UC_ADMINSCRIPT;?>?m=note&a=ls">通知失败的应用</a><?php } else { ?>通知失败的应用<?php } ?>:</em>		
			<?php foreach((array)$errornotes as $appid => $error) {?>
				<?php echo $applist[$appid]['name'];?>&nbsp;
			<?php }?>
		<?php } ?>
	</ul>

	<h3>การตรวจสอบสภาพแวดล้อมที่ใช้งาน</h3>
	<ul class="memlist fixwidth">
		<?php if($envstatus['status']) { ?>
		<li class="green"><em>检测结果:</em>您当前系统环境适合当前版本的 UCenter <?php echo $envstatus['version'];?> 。</li>
		<?php } else { ?>
		<li class="red"><em>检测结果:</em>
			<?php if($envstatus['now_ver']) { ?>
				您当前系统环境内的 <?php echo $envstatus['req'];?> 版本 (<?php echo $envstatus['now_ver'];?>) 过低，程序无法按预期正常运行。我们强烈建议您升级到 <?php echo $envstatus['sug_ver'];?> 版本，程序正常运行最低要求为 <?php echo $envstatus['req_ver'];?> 版本。
			<?php } else { ?>
				您当前系统环境内未安装或开启 <?php echo $envstatus['req'];?> 模块，程序无法按预期正常运行。我们强烈建议您安装或开启此模块，以满足程序正常运行的最低要求。
			<?php } ?>
		</li>
		<?php } ?>
	</ul>
	<h3>ทรัพยากร</h3>
	<ul class="memlist fixwidth">
		<li><em>UCenter เวอร์ชันโปรแกรม:</em>UCenter <?php echo UC_SERVER_VERSION;?> Release <?php echo UC_SERVER_RELEASE;?> <a href="http://www.discuz.net/forum-151-1.html" target="_blank">查看最新版本</a> 
		<li><em>ระบบปฏิบัติการและ PHP:</em><?php echo $serverinfo;?></li>
		<li><em>ซอฟต์แวร์เซิร์ฟเวอร์:</em><?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
		<li><em>MySQL รุ่น:</em><?php echo $dbversion;?></li>
		<li><em>ขนาดไฟล์ที่อนุญาตอัปโหลด:</em><?php echo $fileupload;?></li>
		<li><em>ขนาดฐานข้อมูลปัจจุบัน:</em><?php echo $dbsize;?></li>
		<li><em>ชื่อ CPU:</em><?php echo $servername;?></li>
		<li><em>allow_url_fopen:</em><?php echo $allow_url_fopen;?></li>
	</ul>
	<h3>UCenter ทีมพัฒนา</h3>
	<ul class="memlist fixwidth">
		<li>
			<em>สงวนลิขสิทธิ์:</em>
			<em class="memcont">&#x817e;&#x8baf;&#x4e91;&#x8ba1;&#x7b97;&#xff08;&#x5317;&#x4eac;&#xff09;&#x6709;&#x9650;&#x8d23;&#x4efb;&#x516c;&#x53f8;</em>
		</li>
		<li>
			<em>การวางแผนทั่วไปและผู้จัดการโครงการ:</em>
			<em class="memcont"><a href="http://www.discuz.net/home.php?mod=space&uid=1" target="_blank">&#x6234;&#x5FD7;&#x5EB7; (Kevin 'Crossday' Day)</a></em>
		</li>
		<li>
			<em>ทีมพัฒนา:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=80629" target="_blank">Ning 'Monkey' Hou</a>,				
				<a href="http://www.discuz.net/home.php?mod=space&uid=875919" target="_blank">Jie 'tom115701' Zhang</a>
			</em>
		</li>
		<li>
			<em>ทีมรักษาความปลอดภัย:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=492114" target="_blank">Liang 'Metthew' Xu</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=285706" target="_blank">Wei (Sniffer) Yu</a>
			</em>
		</li>
		<li>
			<em>ทีมอินเทอร์เฟซและประสบการณ์ผู้ใช้:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=294092" target="_blank">Fangming 'Lushnis' Li</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=717854" target="_blank">Ruitao 'Pony.M' Ma</a>
			</em>
		</li>
		<li>
			<em>ขอบคุณผู้สนับสนุน:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=122246" target="_blank">Heyond</a>
			</em>
		</li>
		<li>
			<em>เว็บไซต์ของ บริษัท:</em>
			<em class="memcont"><a href="http://www.comsenz.com" target="_blank">http://www.Comsenz.com</a></em>
		</li>
		<li>
			<em>เว็บไซต์ทางการผลิตภัณฑ์:</em>
			<em class="memcont"><a href="http://www.discuz.com" target="_blank">http://www.Discuz.com</a></em>
		</li>
		<li>
			<em>ฟอรั่มอย่างเป็นทางการ:</em>
			<em class="memcont"><a href="http://www.discuz.net" target="_blank">http://www.Discuz.net</a></em>
		</li>
	</ul>
</div>

<?php echo $ucinfo;?>

<?php include $this->gettpl('footer');?>