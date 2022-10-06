<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$checkurl = array('youtube.com/watch?','youtu.be/','youtube.com/embed/');

function media_youtube($url) {
	if(preg_match("/^https?:\/\/(|m.|www.)youtube.com\/watch\?v=([^\/&]+)&?/i", $url, $matches)) {
		$flv = 'flv';
		$iframe = 'https://www.youtube.com/embed/'.$matches[2];
		$imgurl = 'https://i3.ytimg.com/vi/'.$matches[2].'/maxresdefault.jpg';
	}else if(preg_match("/^https?:\/\/youtu.be\/([^\/&]+)&?/i", $url, $matches)) {
		$flv = 'flv';
		$iframe = 'https://www.youtube.com/embed/'.$matches[1];
		$imgurl = 'https://i3.ytimg.com/vi/'.$matches[1].'/maxresdefault.jpg';
	}else if(preg_match("/^https?:\/\/(|m.|www.)youtube.com\/embed\/([^\/&]+)&?/i", $url, $matches)){
		$flv = 'flv';
		$iframe = 'https://www.youtube.com/embed/'.$matches[2];
		$imgurl = 'https://i3.ytimg.com/vi/'.$matches[2].'/maxresdefault.jpg';
	}
	return array($flv, $iframe, $url, $imgurl);
}