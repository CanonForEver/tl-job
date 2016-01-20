# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: tl-job
# Generation Time: 2016-01-20 07:49:28 +0000
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
	(2,5,2);

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


# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shokushu` tinyint(2) NOT NULL COMMENT '职位',
  `kinmuchi` tinyint(2) NOT NULL COMMENT '地区',
  `keitai` tinyint(2) NOT NULL COMMENT '雇用方式',
  `category` tinyint(2) NOT NULL COMMENT '行业',
  `ky_kind` varchar(25) NOT NULL DEFAULT '' COMMENT 'hour时薪 day日薪 month月薪 year 年薪',
  `ky_from` varchar(25) NOT NULL DEFAULT '' COMMENT '日起薪',
  `mikeiken` tinyint(4) DEFAULT '0' COMMENT '不问经验',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;

INSERT INTO `jobs` (`id`, `shokushu`, `kinmuchi`, `keitai`, `category`, `ky_kind`, `ky_from`, `mikeiken`, `created_at`, `updated_at`)
VALUES
	(1,5,20,3,9,'day','9000',1,'2016-01-19 16:19:11','2016-01-19 16:19:49');

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
	(1,5,2),
	(2,5,7);

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
	(1,5,7),
	(2,5,9);

/*!40000 ALTER TABLE `user_kinmuchis` ENABLE KEYS */;
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
	(1,5,203),
	(2,5,204);

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
	(1,5,21,2),
	(2,5,10,1);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `k_jikyuu` tinyint(2) DEFAULT NULL COMMENT '希望时薪id',
  `k_gekkyuu` tinyint(2) DEFAULT NULL COMMENT '希望月薪id',
  `k_nenbou` tinyint(2) DEFAULT NULL COMMENT '希望年薪id',
  `html_mail` tinyint(1) DEFAULT '1' COMMENT 'html邮件',
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

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `k_jikyuu`, `k_gekkyuu`, `k_nenbou`, `html_mail`, `kana`, `sex`, `birthday_year`, `birthday_month`, `birthday_day`, `ken`, `jusho`, `jusho2`, `tel`, `tel2`, `m_email`, `m_domain`, `g_name`, `g_gakubu`, `g_year`, `g_type`, `shokureki`, `s_other`)
VALUES
	(1,'Aaron Ryuu','124765984@qq.com','123123',NULL,'2016-01-19 22:55:43','0000-00-00 00:00:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(5,'刘','canonpd@163.com','$2y$10$XfNAnjNn5hq7J7A8Kpu2UuGalFAQ/IGm5MSl0MzoVTsZpOiQKdmv2',NULL,'2016-01-20 14:18:01','2016-01-19 17:36:21',NULL,NULL,NULL,NULL,'Aaron Ryuu',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
