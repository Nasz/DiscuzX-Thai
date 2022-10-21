<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_sns_seoinfo {
	function isSpider(){
		$agent=$_SERVER['HTTP_USER_AGENT'];
		$baidu=stristr($agent,"Baiduspider");
		$google=stristr($agent,"Googlebot");
		$soso=stristr($agent,"Sosospider");
		$youdao=stristr($agent,"YoudaoBot");
		$bing=stristr($agent,"bingbot");
		$sogou=stristr($agent,"Sogou web spider");
		$yahoo=stristr($agent,"Yahoo! Slurp");
		$Alexa=stristr($agent,"Alexa");
		$so=stristr($agent,"360Spider");
		if($baidu||$google||$soso||$youdao||$bing||$sogou||$yahoo||$Alexa||$so){
			return true;
		}else{
			return false;
		}
	}
}

class plugin_sns_seoinfo_forum extends plugin_sns_seoinfo{
	function viewthread_posttop_output(){
		global $_G,$navtitle,$metatitle,$metakeywords,$metathumbnail,$metadescription;
		
		//$vars = $_G['cache']['plugin']['sns_seoinfo'];
		//$style=intval($vars['style']);
		//if($style==1&&!$this->isSpider()) return '';
		//elseif($style==2&&$this->isSpider()) return '';
		//$r=$this->isSpider();
		$log=DB::fetch_first("select * from ".DB::table('sns_seoinfo')." where tid='$_G[tid]'");
		if($log){
			if($log['title']) $navtitle=$metatitle=$log['title'];
			if($log['keywords']) $metakeywords=$log['keywords'];
			if($log['thumbnail']) $metathumbnail=$log['thumbnail'];
			if($log['description']) $metadescription=$log['description'];
		}
	}
	
	function post_attribute_extra(){
		global $_G;
		if($_GET['action']=='edit'){
			$pid=intval($_GET['pid']);
			$first=DB::result_first("select first from ".DB::table('forum_post')." where pid=".intval($pid));
			if(!$first) return '';
		}
		$vars = $_G['cache']['plugin']['sns_seoinfo'];
		$groups=unserialize($vars['groups']);
		if(!in_array($_G['groupid'],$groups)) return '';
		$open=intval($vars['open']);
		if($open) return '<label id="extra_seoinfo_b" onclick="showExtra(\'extra_seoinfo\')" class="pn z"><span id="extra_seoinfo_chk">'.lang('plugin/sns_seoinfo','action').'</span></label>';
		else return '<label id="extra_seoinfo_b" onclick="showExtra(\'extra_seoinfo\')" class=""><span id="extra_seoinfo_chk">'.lang('plugin/sns_seoinfo','action').'</span></label>';
	}
	
	function post_attribute_extra_body(){
		global $_G;
		if($_GET['action']=='edit'){
			$pid=intval($_GET['pid']);
			$first=DB::result_first("select first from ".DB::table('forum_post')." where pid=".intval($pid));
			if(!$first) return '';
		}		
		$log=DB::fetch_first("select * from ".DB::table('sns_seoinfo')." where tid='$_G[tid]'");
		if(!$log){
			$log=array(
				'title'=>'',
				'keywords'=>'',
				'thumbnail'=>'',
				'description'=>''
			);
		}
		$vars = $_G['cache']['plugin']['sns_seoinfo'];
		$groups=unserialize($vars['groups']);
		if(!in_array($_G['groupid'],$groups)) return '';
		//$open=intval($vars['open']);		
		include template('sns_seoinfo:post');
		return $return;
	}
	
	function post_middle(){//<X3.0
		loadcache('plugin');
		global $_G;
		require_once DISCUZ_ROOT.'./source/discuz_version.php';
		if(strtolower(substr(DISCUZ_VERSION,0,2))=='x2'){
			if($_GET['action']=='edit'){
				$pid=intval($_GET['pid']);
				$first=DB::result_first("select first from ".DB::table('forum_post')." where pid=".intval($pid));
				if(!$first) return '';
			}		
			$log=DB::fetch_first("select * from ".DB::table('sns_seoinfo')." where tid='$_G[tid]'");
			if(!$log){
				$log=array(
					'title'=>'',
					'keywords' => '',
					'thumbnail'=>'',
					'description'=>''
				);
			}
			$vars = $_G['cache']['plugin']['sns_seoinfo'];
			$groups=unserialize($vars['groups']);
			if(!in_array($_G['groupid'],$groups)) return '';
			//$open=1;//เปิดที่นี่
			include template('sns_seoinfo:post');
			return $return;
		}
	}
	
	function post_feedlog_message($var){
		global $_G;
		$tid = $var['param'][2]['tid'];		
		$pid = $var['param'][2]['pid'];	
		$title=addslashes(trim($_GET['seoinfo_title']));
		$keywords=addslashes(trim($_GET['seoinfo_keywords']));
		$thumbnail=addslashes(trim($_GET['seoinfo_thumbnail']));
		$description=addslashes(trim($_GET['seoinfo_description']));
		if(!$title&&!$keywords&&!$description&&!$thumbnail) return '';//เติมส่วนที่มันว่างเปล่าทั้งหมด
		$seoinfo=array(
			'tid'=>$tid,
			'uid'=>$_G['uid'],
			'username'=>$_G['username'],
			'title'=>$title,
			'keywords'=>$keywords,
			'thumbnail'=>$thumbnail,
			'description'=>$description,
		);		
		if($var['param'][0]=='post_newthread_succeed'){//โพสต์ใหม่
			DB::insert('sns_seoinfo',$seoinfo);
		}elseif($var['param'][0]=='post_edit_succeed'){//แก้ไข
			
			$first=DB::result_first("select first from ".DB::table('forum_post')." where pid=".intval($pid));
			if($first){
				$log=DB::result_first("select id from ".DB::table('sns_seoinfo')." where tid='$tid'");
				if($log){
					DB::update('sns_seoinfo',$seoinfo,array('tid'=>$tid));
				}else{
					DB::insert('sns_seoinfo',$seoinfo);
				}
			}
		}
	}
}

?>