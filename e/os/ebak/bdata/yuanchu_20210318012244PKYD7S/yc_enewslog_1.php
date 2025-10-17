<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yc_enewslog`;");
E_C("CREATE TABLE `yc_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `yc_enewslog` values('1',0x61646d696e,'2021-03-17 10:17:39',0x3132372e302e302e31,'1','','0',0x3534313639);");
E_D("replace into `yc_enewslog` values('2',0x61646d696e,'2021-03-17 16:27:00',0x3132372e302e302e31,'1','','0',0x3632323633);");
E_D("replace into `yc_enewslog` values('3',0x61646d696e,'2021-03-18 00:51:28',0x3132372e302e302e31,'1','','0',0x3630303433);");
E_D("replace into `yc_enewslog` values('4',0x61646d696e,'2021-03-18 00:52:42',0x3132372e302e302e31,'1','','0',0x3630313736);");

@include("../../inc/footer.php");
?>