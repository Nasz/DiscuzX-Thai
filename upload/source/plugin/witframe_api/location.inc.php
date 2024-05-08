<?php

if (!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once DISCUZ_ROOT . './source/plugin/witframe_api/core.php';

$conf = Lib\Site::Discuz_GetConf($_G['setting']['siteuniqueid']);

if (!$conf) {
	cpmsg('???????????????? WitFrame! ????????????????????');
}

$ret = Lib\Site::Discuz_LoginWit($_G['setting']['siteuniqueid']);

if (!$ret) {
	cpmsg('???????????????? WitFrame! ????????????????????');
}

?>
<div class="infobox">
	<h4 class="infotitle2"><a href="<?php echo $ret['url']; ?>" target="_blank">??????????????????????? WitFrame!</a></h4>
</div>