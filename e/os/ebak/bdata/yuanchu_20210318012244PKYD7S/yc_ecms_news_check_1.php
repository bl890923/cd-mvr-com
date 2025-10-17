<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yc_ecms_news_check`;");
E_C("CREATE TABLE `yc_ecms_news_check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `yc_ecms_news_check` values('1','3','0','0','0','0',0x323032312d30332d3137,0x31,'1',0x61646d696e,'0','0','0','0','0','0','0','1615949910','1615949910','0','0','0',0x2c627c,0x2f79632f6779776d2f67736a6a2f323032312d30332d31372f312e68746d6c,'1','1','1','',0xe4bc81e4b89ae7ae80e4bb8b,'1615949407','','0','',0xe6b996e58c97e4b8ade58e9fe6a59ae5a4a9e58c96e5b7a5e68a80e69cafe69c89e99990e585ace58fb8efbc8ce5baa7e890bde4ba8ee6ada6e6b189e5b882e4b89ce8a5bfe6b996e58cbae698afe4b880e5aeb6e4b893e4b89ae4bb8ee4ba8be58c96e5b7a5e68a80e69cafe69c8de58aa1e58f8ae68890e5a597e8aebee5a487e8aebee8aea12de5ae89e8a3852de8b083e8af95e4baa4e992a5e58c99e5b7a5e7a88be79a84e9ab98e696b0e68a80e69cafe4bc81e4b89aefbc8ce4b8bbe8a681e4bb8ee4ba8be5ba9fe6b0b4e99bb6e68e92e694bee38081e789a9e69699e7949fe4baa7e6b593e7bca9e38081e892b8e58f91,'0');");

@include("../../inc/footer.php");
?>