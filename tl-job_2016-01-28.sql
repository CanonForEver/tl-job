# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: tl-job
# Generation Time: 2016-01-28 03:34:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bookmarks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookmarks`;

CREATE TABLE `bookmarks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bookmarks` WRITE;
/*!40000 ALTER TABLE `bookmarks` DISABLE KEYS */;

INSERT INTO `bookmarks` (`id`, `user_id`, `job_id`)
VALUES
	(1,5,1),
	(2,5,2),
	(27,5,110000),
	(28,5,109998),
	(29,5,108265),
	(30,5,108579),
	(31,5,109728),
	(32,5,104999),
	(33,5,108984),
	(34,5,81306),
	(35,5,84353),
	(36,5,74301),
	(37,5,98956),
	(38,5,109890),
	(39,5,90020),
	(40,5,110201),
	(41,5,110048),
	(42,5,110057),
	(43,5,105088),
	(44,5,109729),
	(45,5,102220),
	(46,5,104188);

/*!40000 ALTER TABLE `bookmarks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `sort_order` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `sort_order`)
VALUES
	(1,'互联网相关',1),
	(2,'软件及信息处理',2),
	(3,'制造厂',5),
	(5,'服务业',3),
	(6,'设计出版和媒体',4),
	(9,'公共团体',8),
	(10,'其他',10),
	(11,'人才派遣、介绍外包',9),
	(12,'会计咨询金融',7),
	(13,'游戏',6);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table coms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `coms`;

CREATE TABLE `coms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL COMMENT '公司名',
  `kana` varchar(45) DEFAULT NULL COMMENT '公司英文名',
  `zip` varchar(45) DEFAULT NULL COMMENT '邮编',
  `jusho1` varchar(45) DEFAULT NULL COMMENT '省',
  `jusho2` varchar(45) DEFAULT NULL COMMENT '市区',
  `jusho3` varchar(45) DEFAULT NULL COMMENT '详细地点',
  `tel` varchar(45) DEFAULT NULL COMMENT '电话号码',
  `tantoname` varchar(45) DEFAULT NULL COMMENT '管理者名',
  `tantokana` varchar(45) DEFAULT NULL COMMENT '管理者英文',
  `mail` varchar(45) DEFAULT NULL COMMENT '邮件',
  `web` varchar(45) DEFAULT NULL COMMENT '公司网址',
  `ceo` varchar(45) DEFAULT NULL COMMENT '法人代表',
  `select_plan_id` int(11) DEFAULT NULL COMMENT '选择那种收费服务',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `honsha` varchar(45) DEFAULT NULL COMMENT '公司所在地',
  `setup_year` varchar(45) DEFAULT NULL COMMENT '成立年',
  `setup_month` varchar(45) DEFAULT NULL COMMENT '成立月',
  `capital` varchar(45) DEFAULT NULL COMMENT '注册资本',
  `workers` varchar(45) DEFAULT NULL COMMENT '员工数',
  `business` text COMMENT '事业内容',
  `torihiki` text COMMENT '主要成果',
  `sales_year1` varchar(45) DEFAULT NULL COMMENT '销售年',
  `sales_month1` varchar(45) DEFAULT NULL COMMENT '销售月',
  `sales_type1` tinyint(1) DEFAULT NULL COMMENT '销售类型',
  `sales1` varchar(45) DEFAULT NULL COMMENT '销售额',
  `sales_year2` varchar(45) DEFAULT NULL,
  `sales_month2` varchar(45) DEFAULT NULL,
  `sales_type2` tinyint(1) DEFAULT NULL,
  `sales2` varchar(45) DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL COMMENT '所属行业',
  `license_category1` varchar(45) DEFAULT NULL COMMENT '许可证分类',
  `license_number1` varchar(45) DEFAULT NULL COMMENT '许可证号',
  `license_category2` varchar(45) DEFAULT NULL,
  `license_number2` varchar(45) DEFAULT NULL,
  `license_category3` varchar(45) DEFAULT NULL,
  `license_number3` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `coms` WRITE;
/*!40000 ALTER TABLE `coms` DISABLE KEYS */;

INSERT INTO `coms` (`id`, `name`, `kana`, `zip`, `jusho1`, `jusho2`, `jusho3`, `tel`, `tantoname`, `tantokana`, `mail`, `web`, `ceo`, `select_plan_id`, `created_at`, `updated_at`, `honsha`, `setup_year`, `setup_month`, `capital`, `workers`, `business`, `torihiki`, `sales_year1`, `sales_month1`, `sales_type1`, `sales1`, `sales_year2`, `sales_month2`, `sales_type2`, `sales2`, `category`, `license_category1`, `license_number1`, `license_category2`, `license_number2`, `license_category3`, `license_number3`)
VALUES
	(3,'联想','てください','123-4567','北海道','時以外は企業に公','学校名','123432','山田','タカナで','canonpd@gmail.com','http://www.hao123.com','山田',34,'2016-01-25 17:13:03','2016-01-27 03:30:56','关山街道102','2014','5','2000','20','インターネット広告事業\r\nインターネットメディア事業\r\nソーシャルゲーム事業','','','0',0,'','','0',0,'',2,'0','','0','','0','');

/*!40000 ALTER TABLE `coms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table focus_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `focus_types`;

CREATE TABLE `focus_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `focus_types` WRITE;
/*!40000 ALTER TABLE `focus_types` DISABLE KEYS */;

INSERT INTO `focus_types` (`id`, `name`)
VALUES
	(1,'雇佣形式'),
	(2,'工作时间・休假'),
	(3,'給与関連'),
	(4,'待遇・制度');

/*!40000 ALTER TABLE `focus_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table focus_words
# ------------------------------------------------------------

DROP TABLE IF EXISTS `focus_words`;

CREATE TABLE `focus_words` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `focus_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `focus_words` WRITE;
/*!40000 ALTER TABLE `focus_words` DISABLE KEYS */;

INSERT INTO `focus_words` (`id`, `name`, `focus_type_id`)
VALUES
	(1,'短期派遣',1),
	(2,'第二新卒',1),
	(3,'长期休假',2),
	(4,'弹性工作时间',2),
	(5,'计件工资',3),
	(6,'退休金制度',3),
	(7,'住房津贴',3),
	(8,'年薪制',3),
	(9,'加班津贴',3),
	(10,'宿舍',4),
	(12,'股票期权制',4),
	(13,'使用中文的工作',4),
	(14,'使用英语的工作',4),
	(15,'公司内部风险企业制度',4),
	(16,'管理职员采用',4),
	(17,'U・Iターン歓迎',4),
	(18,'新规事业',4),
	(19,'正式员工录用制',4),
	(20,'发型自由',4),
	(21,'服装自由',4),
	(22,'不问学历',4),
	(23,'女性欢迎的工作',4),
	(24,'社会保险完备',4),
	(25,'有经验者优先',4);

/*!40000 ALTER TABLE `focus_words` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table gekkyuus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gekkyuus`;

CREATE TABLE `gekkyuus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `gekkyuus` WRITE;
/*!40000 ALTER TABLE `gekkyuus` DISABLE KEYS */;

INSERT INTO `gekkyuus` (`id`, `name`)
VALUES
	(1,'月給 15 万円以上'),
	(2,'月給 20 万円以上'),
	(3,'月給 25 万円以上'),
	(4,'月給 30 万円以上'),
	(5,'月給 35 万円以上'),
	(6,'月給 40 万円以上'),
	(7,'月給 45 万円以上'),
	(8,'月給 50 万円以上'),
	(9,'月給制は希望しない');

/*!40000 ALTER TABLE `gekkyuus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jikyuus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jikyuus`;

CREATE TABLE `jikyuus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `jikyuus` WRITE;
/*!40000 ALTER TABLE `jikyuus` DISABLE KEYS */;

INSERT INTO `jikyuus` (`id`, `name`)
VALUES
	(1,'時給 800 円以上'),
	(2,'時給 1000 円以上'),
	(3,'時給 1500 円以上'),
	(4,'時給 2000 円以上'),
	(5,'時給 2500 円以上'),
	(6,'時給 3000 円以上'),
	(7,'時給 3500 円以上'),
	(8,'時給 4000 円以上'),
	(9,'時給制は希望しない');

/*!40000 ALTER TABLE `jikyuus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_focus_words
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_focus_words`;

CREATE TABLE `job_focus_words` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `job_id` int(11) DEFAULT NULL,
  `job_focus_word` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `job_focus_words` WRITE;
/*!40000 ALTER TABLE `job_focus_words` DISABLE KEYS */;

INSERT INTO `job_focus_words` (`id`, `job_id`, `job_focus_word`)
VALUES
	(1,3,10),
	(2,3,22),
	(3,3,18);

/*!40000 ALTER TABLE `job_focus_words` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `com_id` int(11) DEFAULT NULL COMMENT '公司id',
  `shokushu` tinyint(2) NOT NULL COMMENT '职位',
  `kinmuchi` tinyint(2) NOT NULL COMMENT '地区',
  `category` tinyint(2) NOT NULL COMMENT '行业',
  `mikeiken` tinyint(4) DEFAULT '0' COMMENT '不问经验',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `shosai` varchar(45) DEFAULT NULL COMMENT '招聘标题',
  `background` text COMMENT '招聘背景',
  `job_details` text COMMENT '工作内容',
  `jusho` text COMMENT '工作地点',
  `railway` varchar(255) DEFAULT NULL COMMENT '勤務地最寄駅',
  `mensetuti` varchar(255) DEFAULT '' COMMENT '面接地',
  `how_apply1` tinyint(2) DEFAULT NULL COMMENT '应聘方法',
  `process` text COMMENT '应聘流程',
  `tantosha` varchar(45) DEFAULT NULL COMMENT '担当者',
  `mail` varchar(255) DEFAULT NULL COMMENT '电子邮件',
  `sub_mail` varchar(255) DEFAULT NULL,
  `sub_mail2` varchar(255) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL COMMENT '电话号码',
  `keitai1` tinyint(2) DEFAULT NULL COMMENT '雇佣形式',
  `keitai2` tinyint(2) DEFAULT NULL COMMENT '雇佣形式',
  `keitai3` tinyint(2) DEFAULT NULL COMMENT '雇佣形式',
  `jikan1` varchar(255) DEFAULT NULL COMMENT '工作时间',
  `jikan2` varchar(255) DEFAULT NULL COMMENT '工作时间',
  `jikan3` varchar(255) DEFAULT NULL COMMENT '工作时间',
  `kyujitu1` varchar(255) DEFAULT NULL COMMENT '休息日',
  `kyujitu2` varchar(255) DEFAULT NULL COMMENT '休息日',
  `kyujitu3` varchar(255) DEFAULT NULL COMMENT '休息日',
  `ky1_kind` varchar(45) DEFAULT NULL COMMENT '薪资类型hour,day,month,year',
  `ky2_kind` varchar(45) DEFAULT NULL COMMENT '薪资类型',
  `ky3_kind` varchar(45) DEFAULT NULL COMMENT '薪资类型',
  `ky1_from` varchar(255) DEFAULT NULL COMMENT '起薪',
  `ky2_from` varchar(255) DEFAULT NULL COMMENT '起薪',
  `ky3_from` varchar(255) DEFAULT NULL COMMENT '起薪',
  `ky1_to` varchar(255) DEFAULT NULL COMMENT '最高薪资',
  `ky2_to` varchar(255) DEFAULT NULL COMMENT '最高薪资',
  `ky3_to` varchar(255) DEFAULT NULL COMMENT '最高薪资',
  `ky1_info` text COMMENT '給与補足',
  `ky2_info` text COMMENT '給与補足',
  `ky3_info` text COMMENT '給与補足',
  `koutsuuhi1` varchar(45) DEFAULT NULL COMMENT '交通费',
  `koutsuuhi2` varchar(45) DEFAULT NULL COMMENT '交通费',
  `koutsuuhi3` varchar(45) DEFAULT NULL COMMENT '交通费',
  `koutsuuhi1_info` text COMMENT '交通費补充信息',
  `koutsuuhi2_info` text COMMENT '交通費补充信息',
  `koutsuuhi3_info` text COMMENT '交通費补充信息',
  `taigu1` text COMMENT '待遇',
  `taigu2` text COMMENT '待遇',
  `taigu3` text COMMENT '待遇',
  `training_period_kind1` varchar(45) DEFAULT NULL COMMENT '试用类型training_trial:研修・試用期間  training研修期間 trial試用期間',
  `training_period_kind2` varchar(45) DEFAULT NULL COMMENT '试用类型',
  `training_period_kind3` varchar(45) DEFAULT NULL COMMENT '试用类型',
  `training_period1` varchar(45) DEFAULT NULL COMMENT '试用期待遇',
  `training_period2` varchar(45) DEFAULT NULL COMMENT '试用期待遇',
  `training_period3` varchar(45) DEFAULT NULL COMMENT '试用期待遇',
  `training_ky1` varchar(255) DEFAULT NULL COMMENT '試用期間がある場合の給与の明記は必須になります',
  `training_ky2` varchar(255) DEFAULT NULL COMMENT '試用期間がある場合の給与の明記は必須になります',
  `training_ky3` varchar(255) DEFAULT NULL COMMENT '試用期間がある場合の給与の明記は必須になります',
  `mikeiken1` tinyint(2) DEFAULT NULL COMMENT '実務経験不問',
  `mikeiken2` tinyint(2) DEFAULT NULL COMMENT '実務経験不問',
  `mikeiken3` tinyint(2) DEFAULT NULL COMMENT '実務経験不問',
  `sikaku1` text COMMENT '応募資格',
  `sikaku2` text COMMENT '応募資格',
  `sikaku3` text COMMENT '応募資格',
  `catch_copy` varchar(255) DEFAULT NULL COMMENT '标语',
  `pr_text` text COMMENT '宣传文',
  `free_title` varchar(255) DEFAULT NULL COMMENT '信息项目1标题',
  `free_body` text COMMENT '信息项目1内容',
  `free_title2` varchar(255) DEFAULT NULL,
  `free_body2` text,
  `p_comment1` text COMMENT '照片1的描述',
  `p_comment2` text,
  `p_comment3` text,
  `p_comment4` text,
  `p_comment5` text,
  `p_comment6` text,
  `p_comment7` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;

INSERT INTO `jobs` (`id`, `com_id`, `shokushu`, `kinmuchi`, `category`, `mikeiken`, `created_at`, `updated_at`, `shosai`, `background`, `job_details`, `jusho`, `railway`, `mensetuti`, `how_apply1`, `process`, `tantosha`, `mail`, `sub_mail`, `sub_mail2`, `tel`, `keitai1`, `keitai2`, `keitai3`, `jikan1`, `jikan2`, `jikan3`, `kyujitu1`, `kyujitu2`, `kyujitu3`, `ky1_kind`, `ky2_kind`, `ky3_kind`, `ky1_from`, `ky2_from`, `ky3_from`, `ky1_to`, `ky2_to`, `ky3_to`, `ky1_info`, `ky2_info`, `ky3_info`, `koutsuuhi1`, `koutsuuhi2`, `koutsuuhi3`, `koutsuuhi1_info`, `koutsuuhi2_info`, `koutsuuhi3_info`, `taigu1`, `taigu2`, `taigu3`, `training_period_kind1`, `training_period_kind2`, `training_period_kind3`, `training_period1`, `training_period2`, `training_period3`, `training_ky1`, `training_ky2`, `training_ky3`, `mikeiken1`, `mikeiken2`, `mikeiken3`, `sikaku1`, `sikaku2`, `sikaku3`, `catch_copy`, `pr_text`, `free_title`, `free_body`, `free_title2`, `free_body2`, `p_comment1`, `p_comment2`, `p_comment3`, `p_comment4`, `p_comment5`, `p_comment6`, `p_comment7`)
VALUES
	(1,3,5,20,9,1,'2016-01-19 16:19:11','2016-01-19 16:19:49','招聘职业标题','招聘背景','工作内容 ','工作地','地铁线路','面试地点',3,'应聘流程\n','应聘联系人','联络邮件',NULL,NULL,'电话号码\n',1,3,NULL,'工作时间',NULL,NULL,'休息日',NULL,NULL,'hour','day','month','5000','2000','8000','10000','3000','15000','薪资补充说明',NULL,NULL,'月2万円まで','交通补助',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'training_trial','training','trial','3个月','一星期','2天','月給19万円～','试用期工资','',1,1,NULL,'资格经验',NULL,NULL,'宣传标语','宣传文 ','信息项目1','信息项目2',NULL,NULL,'写真1描述',NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table keitais
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keitais`;

CREATE TABLE `keitais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `sort_order` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `keitais` WRITE;
/*!40000 ALTER TABLE `keitais` DISABLE KEYS */;

INSERT INTO `keitais` (`id`, `name`, `sort_order`)
VALUES
	(1,'打工',3),
	(2,'正社員 (中途)',1),
	(3,'業務委託',6),
	(5,'派遣社員',5),
	(6,'契約社員',4),
	(7,'正社員 (新卒)',2);

/*!40000 ALTER TABLE `keitais` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kinmuchis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kinmuchis`;

CREATE TABLE `kinmuchis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `kinmuchis` WRITE;
/*!40000 ALTER TABLE `kinmuchis` DISABLE KEYS */;

INSERT INTO `kinmuchis` (`id`, `name`)
VALUES
	(1,'江岸区'),
	(2,'江汉区'),
	(3,'硚口区'),
	(4,'汉阳区'),
	(5,'武昌区'),
	(6,'青山区'),
	(7,'洪山区'),
	(8,'东西湖区'),
	(9,'东湖高新・光谷'),
	(10,'经济开发区'),
	(11,'江夏区'),
	(12,'黄陂区'),
	(13,'蔡甸区'),
	(14,'新洲区'),
	(15,'汉南区'),
	(16,'SOHO・在家');

/*!40000 ALTER TABLE `kinmuchis` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nenbous
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nenbous`;

CREATE TABLE `nenbous` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `nenbous` WRITE;
/*!40000 ALTER TABLE `nenbous` DISABLE KEYS */;

INSERT INTO `nenbous` (`id`, `name`)
VALUES
	(1,'年俸 250 万円以上'),
	(2,'年俸 300 万円以上'),
	(3,'年俸 350 万円以上'),
	(4,'年俸 400 万円以上'),
	(5,'年俸 450 万円以上'),
	(6,'年俸 500 万円以上'),
	(7,'年俸 600 万円以上'),
	(8,'年俸 700 万円以上'),
	(9,'年俸 800 万円以上'),
	(10,'年俸 1000 万円以上'),
	(11,'年俸制は希望しない');

/*!40000 ALTER TABLE `nenbous` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table provinces
# ------------------------------------------------------------

DROP TABLE IF EXISTS `provinces`;

CREATE TABLE `provinces` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;

INSERT INTO `provinces` (`id`, `name`)
VALUES
	(1,'北京市'),
	(2,'天津市'),
	(3,'河北省'),
	(4,'山西省'),
	(5,'内蒙古自治区'),
	(6,'辽宁省'),
	(7,'吉林省'),
	(8,'黑龙江省'),
	(9,'上海市'),
	(10,'江苏省'),
	(11,'浙江省'),
	(12,'安徽省'),
	(13,'福建省'),
	(14,'江西省'),
	(15,'山东省'),
	(16,'河南省'),
	(17,'湖北省'),
	(18,'湖南省'),
	(19,'广东省'),
	(20,'广西壮族自治区'),
	(21,'海南省'),
	(22,'重庆市'),
	(23,'四川省'),
	(24,'贵州省'),
	(25,'云南省'),
	(26,'西藏自治区'),
	(27,'陕西省'),
	(28,'甘肃省'),
	(29,'青海省'),
	(30,'宁夏回族自治区'),
	(31,'新疆维吾尔自治区'),
	(32,'台湾省'),
	(33,'香港特别行政区'),
	(34,'澳门特别行政区');

/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resumes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resumes`;

CREATE TABLE `resumes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `office` varchar(45) DEFAULT NULL COMMENT '公司名称',
  `syear` varchar(45) DEFAULT NULL COMMENT '工作年',
  `smonth` varchar(45) DEFAULT NULL COMMENT '工作月',
  `eyear` varchar(45) DEFAULT NULL COMMENT '离开工作年份',
  `emonth` varchar(45) DEFAULT NULL COMMENT '离开的月份',
  `r_shokushu` tinyint(2) DEFAULT NULL COMMENT '职位id',
  `r_keitai` tinyint(2) DEFAULT NULL COMMENT '雇佣形式',
  `job_content` text COMMENT '工作内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `resumes` WRITE;
/*!40000 ALTER TABLE `resumes` DISABLE KEYS */;

INSERT INTO `resumes` (`id`, `user_id`, `office`, `syear`, `smonth`, `eyear`, `emonth`, `r_shokushu`, `r_keitai`, `job_content`)
VALUES
	(117,5,'长乐坊','2015','2','2015','5',0,0,'222'),
	(118,5,'长乐111','2015','0','0','0',0,0,''),
	(119,5,'教育部11111','2010','2','2014','2',0,0,'33333');

/*!40000 ALTER TABLE `resumes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shokushus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shokushus`;

CREATE TABLE `shokushus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `sort_order` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `shokushus` WRITE;
/*!40000 ALTER TABLE `shokushus` DISABLE KEYS */;

INSERT INTO `shokushus` (`id`, `name`, `sort_order`)
VALUES
	(1,'Web总监・Webプロデューサー',2),
	(2,'工程师 其他',6),
	(3,'用户支持',8),
	(4,'一般事務・営業事務',9),
	(5,'平面设计师・创作者',7),
	(6,'営業・企画営業',10),
	(200,'其他',12),
	(201,'人事、経理、広報、法務',11),
	(203,'Web工程师・Web程序员',3),
	(204,'网络工程师・服务器工程师',5),
	(205,'Web设计师・HTML工程师',1),
	(207,'智能手机工程师',4);

/*!40000 ALTER TABLE `shokushus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skill_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skill_categories`;

CREATE TABLE `skill_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `sort_order` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `skill_categories` WRITE;
/*!40000 ALTER TABLE `skill_categories` DISABLE KEYS */;

INSERT INTO `skill_categories` (`id`, `name`, `sort_order`)
VALUES
	(1,'办公自动化',1),
	(2,'设计',2),
	(3,'操作系统',3),
	(4,'程序设计',4),
	(5,'数据库',5);

/*!40000 ALTER TABLE `skill_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;

INSERT INTO `skills` (`id`, `name`, `cate_id`)
VALUES
	(1,'C',4),
	(2,'C++',4),
	(3,'VisualBasic',4),
	(5,'COBOL',4),
	(6,'Java',4),
	(7,'Perl',4),
	(10,'Photoshop',2),
	(11,'Illustrator',2),
	(14,'CAD',2),
	(21,'Word',1),
	(22,'Excel',1),
	(23,'Access',1),
	(24,'PowerPoint',1),
	(36,'Windows',3),
	(40,'Mac',3),
	(41,'Linux',3),
	(42,'Solaris',3),
	(43,'BSD',3),
	(44,'Oracle',5),
	(45,'PHP',4),
	(47,'ASP',4),
	(61,'Flash',2),
	(66,'JavaScript',4),
	(68,'QuarkXpress',2),
	(69,'FireWorks',2),
	(70,'HTMLタグ打ち',2),
	(71,'DreamWeaver',2),
	(73,'Director',2),
	(81,'JSP',4),
	(82,'C#',4),
	(83,'Delphi',4),
	(86,'DB2',5),
	(88,'SQLServer',5),
	(89,'PostgreSQL',5),
	(90,'MySQL',5),
	(98,'3DCG',2),
	(99,'Python',4),
	(100,'Ruby',4),
	(101,'ActionScript',4),
	(103,'CSS',2),
	(104,'InDesign',2),
	(105,'Objective-C',4),
	(106,'HTML5',2),
	(107,'CSS3',2);

/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_keitais
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_keitais`;

CREATE TABLE `user_keitais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户与雇用形式关联',
  `user_id` int(11) DEFAULT NULL,
  `keitai_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_keitais` WRITE;
/*!40000 ALTER TABLE `user_keitais` DISABLE KEYS */;

INSERT INTO `user_keitais` (`id`, `user_id`, `keitai_id`)
VALUES
	(13,5,2);

/*!40000 ALTER TABLE `user_keitais` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_kinmuchis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_kinmuchis`;

CREATE TABLE `user_kinmuchis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户希望地点',
  `user_id` int(11) DEFAULT NULL,
  `kinmuchi_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_kinmuchis` WRITE;
/*!40000 ALTER TABLE `user_kinmuchis` DISABLE KEYS */;

INSERT INTO `user_kinmuchis` (`id`, `user_id`, `kinmuchi_id`)
VALUES
	(43,5,1),
	(44,5,2);

/*!40000 ALTER TABLE `user_kinmuchis` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_searches
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_searches`;

CREATE TABLE `user_searches` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `shokushu_id` varchar(255) DEFAULT NULL,
  `kinmuchi_id` varchar(255) DEFAULT NULL,
  `keitai_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `ky_kind` varchar(255) DEFAULT NULL,
  `ky_from` int(11) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `new` tinyint(1) DEFAULT NULL,
  `mikeiken` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_searches` WRITE;
/*!40000 ALTER TABLE `user_searches` DISABLE KEYS */;

INSERT INTO `user_searches` (`id`, `user_id`, `title`, `shokushu_id`, `kinmuchi_id`, `keitai_id`, `category_id`, `ky_kind`, `ky_from`, `keyword`, `new`, `mikeiken`)
VALUES
	(1,5,'搜索标题1','a:3:{i:0;i:205;i:1;i:1;i:2;i:203;}','a:3:{i:0;i:1;i:1;i:4;i:2;i:9;}','a:3:{i:0;i:1;i:1;i:3;i:2;i:6;}','a:3:{i:0;i:2;i:1;i:5;i:2;i:11;}','month',250000,'php工程师',1,1),
	(2,5,'标题2','a:3:{i:0;i:205;i:1;i:1;i:2;i:203;}','a:3:{i:0;i:1;i:1;i:4;i:2;i:9;}','a:3:{i:0;i:1;i:1;i:3;i:2;i:6;}','a:3:{i:0;i:2;i:1;i:5;i:2;i:11;}','year',2400000,'系统工程师',0,0);

/*!40000 ALTER TABLE `user_searches` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_shokushus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_shokushus`;

CREATE TABLE `user_shokushus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户与希望职位关联表',
  `user_id` int(11) DEFAULT NULL,
  `shokushu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_shokushus` WRITE;
/*!40000 ALTER TABLE `user_shokushus` DISABLE KEYS */;

INSERT INTO `user_shokushus` (`id`, `user_id`, `shokushu_id`)
VALUES
	(55,5,203);

/*!40000 ALTER TABLE `user_shokushus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_skills`;

CREATE TABLE `user_skills` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `skill_id` tinyint(4) DEFAULT NULL,
  `value` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_skills` WRITE;
/*!40000 ALTER TABLE `user_skills` DISABLE KEYS */;

INSERT INTO `user_skills` (`id`, `user_id`, `skill_id`, `value`)
VALUES
	(226,6,21,0),
	(227,5,21,1),
	(228,5,22,0),
	(229,5,23,2),
	(230,5,24,0),
	(231,5,10,3),
	(232,5,11,0),
	(233,5,14,0),
	(234,5,61,0),
	(235,5,68,0),
	(236,5,69,0),
	(237,5,70,3),
	(238,5,71,0),
	(239,5,73,0),
	(240,5,98,0),
	(241,5,103,2),
	(242,5,104,0),
	(243,5,106,2),
	(244,5,107,2),
	(245,5,36,4),
	(246,5,40,4),
	(247,5,41,4),
	(248,5,42,0),
	(249,5,43,4),
	(250,5,1,0),
	(251,5,2,1),
	(252,5,3,0),
	(253,5,5,0),
	(254,5,6,0),
	(255,5,7,0),
	(256,5,45,0),
	(257,5,47,0),
	(258,5,66,0),
	(259,5,81,0),
	(260,5,82,0),
	(261,5,83,0),
	(262,5,99,0),
	(263,5,100,0),
	(264,5,101,0),
	(265,5,105,0),
	(266,5,44,0),
	(267,5,86,0),
	(268,5,88,0),
	(269,5,89,0),
	(270,5,90,0);

/*!40000 ALTER TABLE `user_skills` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `k_jikyuu` tinyint(2) DEFAULT NULL COMMENT '希望时薪id',
  `k_gekkyuu` tinyint(2) DEFAULT NULL COMMENT '希望月薪id',
  `k_nenbou` tinyint(2) DEFAULT NULL COMMENT '希望年薪id',
  `html_mail` tinyint(1) DEFAULT '1' COMMENT 'html邮件',
  `scout` tinyint(1) DEFAULT NULL,
  `mailservice_new` tinyint(1) DEFAULT NULL,
  `mailservice_pickup` tinyint(1) DEFAULT NULL,
  `mailservice_digest` tinyint(1) DEFAULT NULL,
  `mailservice_dm` tinyint(1) DEFAULT NULL,
  `kana` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '英文名',
  `sex` tinyint(1) DEFAULT NULL COMMENT '1是男，2是女',
  `birthday_year` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '出生年',
  `birthday_month` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '出生月',
  `birthday_day` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '出生日',
  `ken` tinyint(4) DEFAULT NULL COMMENT '省',
  `jusho` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '市区',
  `jusho2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '详细地址',
  `tel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '住宅电话',
  `tel2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '手机',
  `m_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '移动邮件地址',
  `m_domain` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '移动邮件地址服务商域名',
  `g_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '学校名',
  `g_gakubu` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '专业',
  `g_year` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '毕业年份',
  `g_type` tinyint(4) DEFAULT NULL COMMENT '1、入学 2、退学 3、毕业 4、毕业实习',
  `shokureki` text COLLATE utf8_unicode_ci COMMENT '求职意愿',
  `s_other` text COLLATE utf8_unicode_ci COMMENT '其他职业技能',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `k_jikyuu`, `k_gekkyuu`, `k_nenbou`, `html_mail`, `scout`, `mailservice_new`, `mailservice_pickup`, `mailservice_digest`, `mailservice_dm`, `kana`, `sex`, `birthday_year`, `birthday_month`, `birthday_day`, `ken`, `jusho`, `jusho2`, `tel`, `tel2`, `m_email`, `m_domain`, `g_name`, `g_gakubu`, `g_year`, `g_type`, `shokureki`, `s_other`)
VALUES
	(1,'Aaron Ryuu','124765984@qq.com','123123',NULL,'2016-01-19 22:55:43','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(5,'刘东','canonpd@163.com','$2y$10$XfNAnjNn5hq7J7A8Kpu2UuGalFAQ/IGm5MSl0MzoVTsZpOiQKdmv2',NULL,'2016-01-25 16:02:01','2016-01-28 03:09:02',0,0,0,1,NULL,NULL,NULL,NULL,NULL,'Aaron Ryuu',1,'1983','7','3',17,'市区町村まで','時以外は企業に公','027-87774527','15007160010','123123','0','学校学校名','	 学校名','2007',3,'123123123','99999');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
