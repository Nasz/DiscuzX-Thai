<?php

if (!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once DISCUZ_ROOT . './source/plugin/witframe_api/core.php';

$conf = Lib\Site::Discuz_GetConf($_G['setting']['siteuniqueid']);

if (!$conf) {
	cpmsg('ไม่สามารถเข้าถึง WitFrame! โปรดตรวจสอบเครือข่าย');
}

$ret = Lib\Site::Discuz_LoginWit($_G['setting']['siteuniqueid']);

if (!$ret) {
	cpmsg('ไม่สามารถเข้าถึง WitFrame! โปรดตรวจสอบเครือข่าย');
}

?>
<div class="infobox">
	<h4 class="infotitle2"><a href="<?php echo $ret['url']; ?>" target="_blank">คลิกที่นี่เพื่อเยี่ยมชม WitFrame!</a></h4>
</div>