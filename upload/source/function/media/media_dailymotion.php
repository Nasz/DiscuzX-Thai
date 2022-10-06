<?php

if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}

$checkurl = array('dailymotion.com', 'dai.ly');

function media_dailymotion($url) {
    if (preg_match("/^https?:\/\/dai.ly\/([^\/&]+)&?/i", $url, $matches)) {
        $flv = 'flv';
        $iframe = 'https://www.dailymotion.com/embed/video/'. $matches[1] .'?autoplay=0';
        $imgurl = '';
    }else if(preg_match("/^https?:\/\/(|m.|www.)facebook.com\/watch(.+?)?v=([^\/&]+)&?/i", $url, $matches)){
        $flv = 'flv';
        $iframe = 'https://www.facebook.com/watch/?v='. $matches[3];
        $iframe = 'https://www.facebook.com/plugins/video.php?height=314&href=' . $iframe . '&show_text=false&width=560&t=0';
        $imgurl = '';
    }else if (preg_match("/^https?:\/\/(|m.|www.)facebook.com\/(.+?)\/videos\/([^\/&]+)&?/i", $url, $matches)) {
        $flv = 'flv';
        $iframe = 'https://www.facebook.com/watch/?v=' . $matches[3];
        $iframe = 'https://www.facebook.com/plugins/video.php?height=314&href=' . $iframe . '&show_text=false&width=560&t=0';
        $imgurl = '';
    }
    return array($flv, $iframe, $url, $imgurl);
}