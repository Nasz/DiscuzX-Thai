<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$checkurl = array('my.tv.sohu.com/u/', 'v.blog.sohu.com/u/','tv.sohu.com/v/');

function media_sohu($url, $width, $height) {
	if(preg_match("/^http:\/\/my.tv.sohu.com\/u\/[^\/]+\/(\d+)/i", $url, $matches)) {
		$flv = 'http://v.blog.sohu.com/fo/v4/'.$matches[1];
		if(!$width && !$height) {
			$api = 'http://v.blog.sohu.com/videinfo.jhtml?m=view&id='.$matches[1].'&outType=3';
			$str = dfsockopen($api);
			if(!empty($str) && preg_match("/\"cutCoverURL\":\"(.+?)\"/i", $str, $image)) {
				$imgurl = str_replace(array('\u003a', '\u002e'), array(':', '.'), $image[1]);
			}
		}
	}else if(preg_match("/^http:\/\/v.blog.sohu.com\/u\/[^\/]+\/(\d+)/i", $url, $matches)) {
		$flv = 'http://v.blog.sohu.com/fo/v4/'.$matches[1];
		if(!$width && !$height) {
			$api = 'http://v.blog.sohu.com/videinfo.jhtml?m=view&id='.$matches[1].'&outType=3';
			$str = dfsockopen($api);
			if(!empty($str) && preg_match("/\"cutCoverURL\":\"(.+?)\"/i", $str, $image)) {
				$imgurl = str_replace(array('\u003a', '\u002e'), array(':', '.'), $image[1]);
			}
		}
	}else if(preg_match("/^https:\/\/tv.sohu.com\/v\/([^\/]+)(.html|)/i", $url, $matches)) {
		$flv = 'flv';
		$str = base64_decode($matches[1]);
		preg_match("/^us\/(.+?)\/([^\/]+)(.shtml)/i", $str, $vid);
		$iframe = 'https://tv.sohu.com/s/sohuplayer/iplay.html?bid='.$vid[2]. '&autoplay=false&disablePlaylist=true';
		if(!$width && !$height) {
			$api = $url;
			$str = dfsockopen($api);
			$tags = get_meta_tags($str);
			if(!empty($str) && $tags['og:image']) {
				$imgurl = $tags['og:image'];
			}
		}
	}
	return array($flv, $iframe, $url, $imgurl);
}