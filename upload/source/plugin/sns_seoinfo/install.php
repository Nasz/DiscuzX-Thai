<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

DROP TABLE IF EXISTS pre_sns_seoinfo;
CREATE TABLE pre_sns_seoinfo (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `tid` mediumint(8) unsigned NOT NULL,
  `uid` mediumint(8) unsigned NOT NULL,
  `username` varchar(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` text,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;
EOF;

runquery($sql);
$finish = TRUE;

?>