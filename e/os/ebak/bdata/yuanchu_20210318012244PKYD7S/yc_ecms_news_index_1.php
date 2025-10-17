<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yc_ecms_news_index`;");
E_C("CREATE TABLE `yc_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `yc_ecms_news_index` values('1','3','0','1615949407','1615949910','1615949910','0');");
E_D("replace into `yc_ecms_news_index` values('2','4','1','1615958057','1615958354','1615958354','1');");
E_D("replace into `yc_ecms_news_index` values('3','4','1','1615958357','1615958407','1615958407','1');");
E_D("replace into `yc_ecms_news_index` values('4','4','1','1615958410','1615958453','1615958453','1');");
E_D("replace into `yc_ecms_news_index` values('5','4','1','1615958456','1615958499','1615958499','1');");
E_D("replace into `yc_ecms_news_index` values('6','4','1','1615958502','1615958541','1615958541','1');");
E_D("replace into `yc_ecms_news_index` values('7','4','1','1615958544','1615958581','1615958581','1');");
E_D("replace into `yc_ecms_news_index` values('8','4','1','1615958584','1615958617','1615958617','1');");
E_D("replace into `yc_ecms_news_index` values('9','4','1','1615958620','1615958654','1615958654','1');");
E_D("replace into `yc_ecms_news_index` values('10','4','1','1615958657','1615958685','1615958685','1');");
E_D("replace into `yc_ecms_news_index` values('11','4','1','1615958689','1615958724','1615958724','1');");
E_D("replace into `yc_ecms_news_index` values('12','4','1','1615958727','1615958761','1615958761','1');");
E_D("replace into `yc_ecms_news_index` values('13','4','1','1615958765','1615958806','1615958806','1');");
E_D("replace into `yc_ecms_news_index` values('14','4','1','1615958809','1615958852','1615958852','1');");
E_D("replace into `yc_ecms_news_index` values('15','4','1','1615958855','1615958885','1615958885','1');");
E_D("replace into `yc_ecms_news_index` values('16','4','1','1615958888','1615958914','1615958914','1');");
E_D("replace into `yc_ecms_news_index` values('17','4','1','1615958917','1615958945','1615958945','1');");
E_D("replace into `yc_ecms_news_index` values('18','4','1','1615958949','1615958982','1615958982','1');");
E_D("replace into `yc_ecms_news_index` values('19','4','1','1615958986','1615959021','1615959021','1');");
E_D("replace into `yc_ecms_news_index` values('20','3','1','1615961329','1615961502','1615962005','1');");
E_D("replace into `yc_ecms_news_index` values('21','9','1','1615964447','1615964792','1615966790','1');");
E_D("replace into `yc_ecms_news_index` values('22','9','1','1615964795','1615964882','1615966843','1');");
E_D("replace into `yc_ecms_news_index` values('23','9','1','1615964885','1615965105','1615966906','1');");
E_D("replace into `yc_ecms_news_index` values('24','9','1','1615965108','1615965369','1615966964','1');");
E_D("replace into `yc_ecms_news_index` values('25','9','1','1615965373','1615965466','1615967017','1');");
E_D("replace into `yc_ecms_news_index` values('26','9','1','1615965469','1615965604','1615967076','1');");
E_D("replace into `yc_ecms_news_index` values('27','9','1','1615965607','1615966183','1615967141','1');");
E_D("replace into `yc_ecms_news_index` values('28','9','1','1615966186','1615966272','1616001272','1');");
E_D("replace into `yc_ecms_news_index` values('29','10','1','1615967715','1615967829','1615967829','1');");
E_D("replace into `yc_ecms_news_index` values('30','10','1','1615967833','1615967921','1615967921','1');");
E_D("replace into `yc_ecms_news_index` values('31','10','1','1615967925','1615968041','1615968041','1');");
E_D("replace into `yc_ecms_news_index` values('32','10','1','1615968044','1615968153','1615968153','1');");
E_D("replace into `yc_ecms_news_index` values('33','10','1','1615968156','1615968398','1615968398','1');");
E_D("replace into `yc_ecms_news_index` values('34','10','1','1615968771','1615968856','1615968856','1');");
E_D("replace into `yc_ecms_news_index` values('35','11','1','1615969046','1615969140','1615969140','1');");
E_D("replace into `yc_ecms_news_index` values('36','11','1','1615969143','1615969238','1615969238','1');");

@include("../../inc/footer.php");
?>