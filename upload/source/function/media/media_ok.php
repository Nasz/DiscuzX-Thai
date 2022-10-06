<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$checkurl = array('ok.ru/video/');

function media_ok($url) {
	if(preg_match("/^https?:\/\/(|m.|www.)ok.ru\/video\/([^\/&]+)&?/i", $url, $matches)) {
        $flv = 'flv';
		$iframe = 'https://ok.ru/videoembed/'.$matches[2];
		$imgurl = '';
	}
	return array($flv, $iframe, $url, $imgurl);
}