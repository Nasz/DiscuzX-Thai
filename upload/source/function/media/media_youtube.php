<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$checkurl = array('youtube.com/watch?');

function media_youtube($url, $width, $height) {
	if(preg_match("/^https?:\/\/(|m.|www.)youtube.com\/watch\?v=([^\/&]+)&?/i", $url, $matches)) {
		$flv = 'https://www.youtube.com/v/'.$matches[2].'&fs=1';
		$iframe = 'https://www.youtube.com/embed/'.$matches[2];
		$imgurl = 'https://i3.ytimg.com/vi/'.$matches[2].'/maxresdefault.jpg';
	}
	return array($flv, $iframe, $url, $imgurl);
}