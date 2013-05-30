

DROP DATABASE IF EXISTS `zuibo`;
CREATE DATABASE `zuibo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `zuibo`;

#
# Source for table autologin
#

DROP TABLE IF EXISTS `autologin`;
CREATE TABLE `autologin` (
  `mail` varchar(255) NOT NULL,
  `loginkey` varchar(255) NOT NULL,
  `expire` datetime NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Dumping data for table autologin
#

LOCK TABLES `autologin` WRITE;
/*!40000 ALTER TABLE `autologin` DISABLE KEYS */;
INSERT INTO `autologin` VALUES ('mysin007@gmail.com','8dc698b0448f1cd54396f279ae2312f76290ca1f','2012-03-30 14:20:35');
/*!40000 ALTER TABLE `autologin` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table blog_comment
#

DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE `blog_comment` (
  `bcid` int(11) NOT NULL AUTO_INCREMENT,
  `contents` text,
  `uid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`bcid`),
  KEY `blog_comment_idx1` (`bid`),
  KEY `blog_comment_idx2` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Dumping data for table blog_comment
#

LOCK TABLES `blog_comment` WRITE;
/*!40000 ALTER TABLE `blog_comment` DISABLE KEYS */;
INSERT INTO `blog_comment` VALUES (3,'你好，多多关照！',1,2,'2011-02-17 02:58:35','2011-02-17 02:58:35');
INSERT INTO `blog_comment` VALUES (4,'好',1,7,'2011-03-21 06:57:27','2011-03-21 06:57:27');
INSERT INTO `blog_comment` VALUES (5,'有没有人同感呢',1,8,'2011-04-06 06:39:48','2011-04-06 06:39:48');
INSERT INTO `blog_comment` VALUES (6,'我是觉得！',2,8,'2011-04-06 06:39:48','2011-04-06 06:39:48');
/*!40000 ALTER TABLE `blog_comment` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table blog_master
#

DROP TABLE IF EXISTS `blog_master`;
CREATE TABLE `blog_master` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `contents` text,
  `openlevel` int(1) DEFAULT NULL,
  `opengid` int(11) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `bak1` varchar(50) DEFAULT NULL,
  `bak2` varchar(50) DEFAULT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `blog_master_idx1` (`openlevel`),
  KEY `blog_master_idx2` (`opengid`),
  KEY `blog_master_idx3` (`uid`,`year`,`month`,`day`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Dumping data for table blog_master
#

LOCK TABLES `blog_master` WRITE;
/*!40000 ALTER TABLE `blog_master` DISABLE KEYS */;
INSERT INTO `blog_master` VALUES (2,'测试博客','我的第一个博客',1,NULL,1,2011,2,16,NULL,NULL,'2011-02-16 08:51:50','2011-02-16 08:51:50');
INSERT INTO `blog_master` VALUES (3,'测试博客','我的第一个博客',1,NULL,1,2011,2,17,NULL,NULL,'2011-02-17 06:51:46','2011-02-17 06:51:46');
INSERT INTO `blog_master` VALUES (5,'测试博客test','测试博客\r\n测试',1,NULL,1,2011,2,17,NULL,NULL,'2011-02-17 09:15:29','2011-02-17 09:09:44');
INSERT INTO `blog_master` VALUES (6,'测试图片吧','测试图片传',0,NULL,1,2011,2,20,NULL,NULL,'2011-02-20 08:51:34','2011-02-20 08:51:34');
INSERT INTO `blog_master` VALUES (7,'春分时节','春分时节雨纷纷',1,NULL,1,2011,3,21,NULL,NULL,'2011-03-21 06:56:58','2011-03-21 06:56:58');
INSERT INTO `blog_master` VALUES (8,'清明时节雨纷纷','清明又到了，还是与往年一样下着小雨。\r\n总算不用受冻了',1,NULL,1,2011,4,6,NULL,NULL,'2011-04-06 06:24:52','2011-04-06 06:24:52');
INSERT INTO `blog_master` VALUES (9,'皇马比去年进步多','还是尼奥兄有招啊，今年才真正称的上西甲两大豪门。',1,NULL,1,2011,4,8,NULL,NULL,'2011-04-08 14:26:16','2011-04-08 14:26:16');
INSERT INTO `blog_master` VALUES (10,'我刚拍的照片','请大家欣赏，\r\n多提意见啊',1,NULL,1,2011,4,8,NULL,NULL,'2011-04-08 14:54:31','2011-04-08 14:50:32');
INSERT INTO `blog_master` VALUES (11,'又一张照片','刚才照片没有上传好',1,NULL,1,2011,4,8,NULL,NULL,'2011-04-08 14:53:59','2011-04-08 14:53:59');
INSERT INTO `blog_master` VALUES (13,'我的第一个博客','请大家多多关照',1,NULL,5,2011,4,10,NULL,NULL,'2011-04-10 13:12:42','2011-04-10 13:12:42');
/*!40000 ALTER TABLE `blog_master` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table community
#

DROP TABLE IF EXISTS `community`;
CREATE TABLE `community` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `introduce` text,
  `category` int(2) NOT NULL,
  `uid` int(11) NOT NULL,
  `assistant1` int(11) DEFAULT NULL,
  `assistant2` int(11) DEFAULT NULL,
  `assistant3` int(11) DEFAULT NULL,
  `antilevel` int(1) DEFAULT '1',
  `topicright` int(1) DEFAULT '1',
  `smallimg` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `bak1` varchar(1000) DEFAULT NULL,
  `bak2` varchar(50) DEFAULT NULL,
  `bak3` varchar(50) DEFAULT NULL,
  `bak4` varchar(50) DEFAULT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `community_idx1` (`uid`),
  KEY `community_idx2` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table community
#

LOCK TABLES `community` WRITE;
/*!40000 ALTER TABLE `community` DISABLE KEYS */;
INSERT INTO `community` VALUES (1,'梅西之城','所有喜欢梅西的朋友请进来吧，大家一起祝福他，交换关于他的信息，他的比赛视频。',3,1,NULL,NULL,NULL,1,1,'images/1/123b98a994af2244b27a07b7f7a1e97d6ecd8b84_s76.JPG','images/1/123b98a994af2244b27a07b7f7a1e97d6ecd8b84_s180.JPG',NULL,NULL,NULL,NULL,'2011-02-21','2011-02-21');
INSERT INTO `community` VALUES (2,'篮球爱好者','规则1\r\n规则2\r\n规则3\r\n',3,1,NULL,NULL,NULL,1,1,'images/1/b1c431f4a4a28c79a5969e88b6b463048bc167f1_s76.JPG','images/1/b1c431f4a4a28c79a5969e88b6b463048bc167f1_s180.JPG',NULL,NULL,NULL,NULL,'2011-02-22 14:56:36','2011-02-22 14:56:36');
/*!40000 ALTER TABLE `community` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table communitymember
#

DROP TABLE IF EXISTS `communitymember`;
CREATE TABLE `communitymember` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `membertype` int(1) DEFAULT '1',
  `bak1` varchar(1000) DEFAULT NULL,
  `bak2` varchar(50) DEFAULT NULL,
  `bak3` varchar(50) DEFAULT NULL,
  `bak4` varchar(50) DEFAULT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`cid`,`uid`),
  KEY `communitymember_idx1` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table communitymember
#

LOCK TABLES `communitymember` WRITE;
/*!40000 ALTER TABLE `communitymember` DISABLE KEYS */;
INSERT INTO `communitymember` VALUES (1,1,1,NULL,NULL,NULL,NULL,'2011-02-21','2011-02-21');
INSERT INTO `communitymember` VALUES (2,1,2,NULL,NULL,NULL,NULL,'2011-02-22 14:56:36','2011-02-22 14:56:36');
INSERT INTO `communitymember` VALUES (2,2,1,NULL,NULL,NULL,NULL,'2011-03-28 10:18:01','2011-03-28 10:18:01');
INSERT INTO `communitymember` VALUES (2,3,1,NULL,NULL,NULL,NULL,'2011-03-31 14:20:47','2011-03-31 14:20:47');
/*!40000 ALTER TABLE `communitymember` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table friend
#

DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend` (
  `uid` int(11) NOT NULL,
  `fuid` int(11) NOT NULL,
  `fflg` int(1) DEFAULT '0',
  `grpflg` int(1) DEFAULT '0',
  `new_friend_blog` int(1) NOT NULL DEFAULT '0',
  `refuse_type` int(1) DEFAULT '0',
  `refuse_year` int(4) DEFAULT NULL,
  `refuse_month` int(2) DEFAULT NULL,
  `memo` text,
  `bak` varchar(50) DEFAULT NULL,
  `bak1` varchar(50) DEFAULT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`uid`,`fuid`),
  KEY `friend_idx1` (`fuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table friend
#

LOCK TABLES `friend` WRITE;
/*!40000 ALTER TABLE `friend` DISABLE KEYS */;
INSERT INTO `friend` VALUES (1,2,1,1,0,0,NULL,NULL,'修改过设置',NULL,NULL,'2011-04-05 15:45:16','2011-03-22 13:17:17');
INSERT INTO `friend` VALUES (1,3,1,1,0,2,2010,11,'ddd',NULL,NULL,'2011-06-23 02:39:41','2011-03-30 03:32:19');
INSERT INTO `friend` VALUES (2,1,0,1,0,0,NULL,NULL,NULL,NULL,NULL,'2011-04-05 05:22:54','2011-04-05 05:22:37');
INSERT INTO `friend` VALUES (2,3,0,0,0,0,NULL,NULL,NULL,NULL,NULL,'2011-04-10 09:13:09','2011-04-10 09:13:09');
INSERT INTO `friend` VALUES (5,1,0,1,0,0,NULL,NULL,NULL,NULL,NULL,'2011-04-10 11:45:42','2011-04-10 09:31:16');
INSERT INTO `friend` VALUES (5,3,0,1,0,0,NULL,NULL,NULL,NULL,NULL,'2011-04-10 11:45:42','2011-04-10 11:45:12');
/*!40000 ALTER TABLE `friend` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table groupuser
#

DROP TABLE IF EXISTS `groupuser`;
CREATE TABLE `groupuser` (
  `gid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`gid`,`uid`),
  KEY `groupuser_idx1` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table groupuser
#

LOCK TABLES `groupuser` WRITE;
/*!40000 ALTER TABLE `groupuser` DISABLE KEYS */;
INSERT INTO `groupuser` VALUES (1,2,'2011-04-05 15:45:16','2011-04-05 15:45:16');
INSERT INTO `groupuser` VALUES (1,3,'2011-06-23 02:39:41','2011-06-23 02:39:41');
INSERT INTO `groupuser` VALUES (2,2,'2011-04-05 15:45:16','2011-04-05 15:45:16');
INSERT INTO `groupuser` VALUES (2,3,'2011-06-23 02:39:41','2011-06-23 02:39:41');
INSERT INTO `groupuser` VALUES (6,2,'2011-04-05 15:45:16','2011-04-05 15:45:16');
INSERT INTO `groupuser` VALUES (6,3,'2011-06-23 02:39:41','2011-06-23 02:39:41');
INSERT INTO `groupuser` VALUES (7,2,'2011-04-05 15:45:16','2011-04-05 15:45:16');
INSERT INTO `groupuser` VALUES (7,3,'2011-06-23 02:39:41','2011-06-23 02:39:41');
INSERT INTO `groupuser` VALUES (8,1,'2011-04-05 05:47:11','2011-04-05 05:47:11');
INSERT INTO `groupuser` VALUES (10,2,'2011-04-08 09:30:01','2011-04-08 09:30:01');
INSERT INTO `groupuser` VALUES (10,3,'2011-06-23 02:39:41','2011-06-23 02:39:41');
INSERT INTO `groupuser` VALUES (11,1,'2011-04-10 11:45:42','2011-04-10 11:45:42');
INSERT INTO `groupuser` VALUES (11,3,'2011-04-10 11:45:42','2011-04-10 11:45:42');
/*!40000 ALTER TABLE `groupuser` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table hobby
#

DROP TABLE IF EXISTS `hobby`;
CREATE TABLE `hobby` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` int(2) NOT NULL,
  `contents` varchar(200) NOT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`hid`),
  KEY `hobby_idx1` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

#
# Dumping data for table hobby
#

LOCK TABLES `hobby` WRITE;
/*!40000 ALTER TABLE `hobby` DISABLE KEYS */;
INSERT INTO `hobby` VALUES (16,5,2,'爬山','2011-04-08 09:10:37','2011-04-08 09:10:37');
INSERT INTO `hobby` VALUES (17,5,16,'狮毛狗','2011-04-08 09:10:37','2011-04-08 09:10:37');
INSERT INTO `hobby` VALUES (18,5,11,'非诚勿扰','2011-04-08 09:10:37','2011-04-08 09:10:37');
INSERT INTO `hobby` VALUES (19,1,6,'爬山','2011-04-08 09:22:47','2011-04-08 09:22:47');
INSERT INTO `hobby` VALUES (20,1,16,'狮毛狗','2011-04-08 09:22:47','2011-04-08 09:22:47');
INSERT INTO `hobby` VALUES (21,1,11,'非诚勿扰','2011-04-08 09:22:47','2011-04-08 09:22:47');
/*!40000 ALTER TABLE `hobby` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table interest
#

DROP TABLE IF EXISTS `interest`;
CREATE TABLE `interest` (
  `uid` int(11) NOT NULL,
  `movie` int(1) DEFAULT '0',
  `music` int(1) DEFAULT '0',
  `gourmet` int(1) DEFAULT '0',
  `fashion` int(1) DEFAULT '0',
  `trip` int(1) DEFAULT '0',
  `foreignlanguage` int(1) DEFAULT '0',
  `television` int(1) DEFAULT '0',
  `gamble` int(1) DEFAULT '0',
  `sports` int(1) DEFAULT '0',
  `karaok` int(1) DEFAULT '0',
  `drink` int(1) DEFAULT '0',
  `outdoor` int(1) DEFAULT '0',
  `art` int(1) DEFAULT '0',
  `artowner` int(1) DEFAULT '0',
  `reading` int(1) DEFAULT '0',
  `game` int(1) DEFAULT '0',
  `bet` int(1) DEFAULT '0',
  `sportslook` int(1) DEFAULT '0',
  `cooking` int(1) DEFAULT '0',
  `shopping` int(1) DEFAULT '0',
  `drive` int(1) DEFAULT '0',
  `manga` int(1) DEFAULT '0',
  `internet` int(1) DEFAULT '0',
  `diet` int(1) DEFAULT '0',
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table interest
#

LOCK TABLES `interest` WRITE;
/*!40000 ALTER TABLE `interest` DISABLE KEYS */;
INSERT INTO `interest` VALUES (1,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2011-04-08 09:22:47','2011-02-20 07:48:30');
INSERT INTO `interest` VALUES (2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2011-03-22 13:17:17','2011-03-22 13:17:17');
INSERT INTO `interest` VALUES (3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2011-03-29 09:13:07','2011-03-29 09:13:07');
INSERT INTO `interest` VALUES (4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2011-04-08 07:45:32','2011-04-08 07:45:32');
INSERT INTO `interest` VALUES (5,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'2011-04-08 09:10:37','2011-04-08 08:22:08');
/*!40000 ALTER TABLE `interest` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table interest_master
#

DROP TABLE IF EXISTS `interest_master`;
CREATE TABLE `interest_master` (
  `no` int(2) NOT NULL,
  `ename` varchar(40) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table interest_master
#

LOCK TABLES `interest_master` WRITE;
/*!40000 ALTER TABLE `interest_master` DISABLE KEYS */;
INSERT INTO `interest_master` VALUES (1,'movie','电影鉴赏','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (2,'music','音乐鉴赏','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (3,'gourmet','美食','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (4,'fashion','流行服饰','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (5,'trip','旅游','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (6,'foreignlanguage','学外语','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (7,'television','看电视','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (8,'gamble','麻将赌博','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (9,'sports','运动','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (10,'karaok','卡拉OK及玩乐队','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (11,'drink','喝酒','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (12,'outdoor','户外运动','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (13,'art','艺术','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (14,'artowner','收藏','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (15,'reading','读书','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (16,'game','游戏','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (17,'bet','养宠物','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (18,'sportslook','看比赛','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (19,'cooking','做菜','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (20,'shopping','购物','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (21,'drive','开车','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (22,'manga','动漫','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (23,'internet','上网','2011-02-18 14:01:02');
INSERT INTO `interest_master` VALUES (24,'diet','美容及减肥','2011-02-18 14:01:02');
/*!40000 ALTER TABLE `interest_master` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table introduce_by_friend
#

DROP TABLE IF EXISTS `introduce_by_friend`;
CREATE TABLE `introduce_by_friend` (
  `fuid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `relationship` varchar(200) DEFAULT NULL,
  `contents` text NOT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`fuid`,`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table introduce_by_friend
#

LOCK TABLES `introduce_by_friend` WRITE;
/*!40000 ALTER TABLE `introduce_by_friend` DISABLE KEYS */;
INSERT INTO `introduce_by_friend` VALUES (2,1,'同学','一个有幽默感的人','2011-04-05 15:45:17','2011-04-05 09:20:25');
INSERT INTO `introduce_by_friend` VALUES (3,1,'同学','一个好人','2011-06-23 02:39:41','2011-04-05 15:37:58');
/*!40000 ALTER TABLE `introduce_by_friend` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table kbn_master
#

DROP TABLE IF EXISTS `kbn_master`;
CREATE TABLE `kbn_master` (
  `kind` varchar(20) NOT NULL,
  `id` int(2) NOT NULL,
  `name` varchar(200) DEFAULT '',
  `udate` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kind`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table kbn_master
#

LOCK TABLES `kbn_master` WRITE;
/*!40000 ALTER TABLE `kbn_master` DISABLE KEYS */;
INSERT INTO `kbn_master` VALUES ('antilevel',1,'任意参加（公开）','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('antilevel',2,'管理者批准（公开）','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('antilevel',3,'管理者批准（非公开）','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('bland',1,'O型','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('bland',2,'A型','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('bland',3,'B型','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('bland',4,'AB型','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('category',1,'音乐','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',2,'电影','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',3,'运动','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',4,'游戏','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',5,'书籍漫画','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',6,'旅游','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',7,'汽车摩托','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',8,'算命','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',9,'兴趣爱好','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',10,'动物宠物','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',11,'电脑网络','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',12,'学问研究','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',13,'商业经济','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',14,'艺术','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',15,'地域风土','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',16,'美食美酒','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',17,'时装时尚','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',18,'学校','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',19,'企业团体','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',20,'研讨会','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',21,'60后','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',22,'70后','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',23,'80后','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',24,'90后','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',25,'00后','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',26,'演艺名人','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',27,'电视节目','2011-02-21');
INSERT INTO `kbn_master` VALUES ('category',28,'其他','2011-02-21');
INSERT INTO `kbn_master` VALUES ('city',1,'上海市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',2,'北京市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',3,'杭州市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',4,'广州市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',5,'天津市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',6,'深圳市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',7,'沈阳市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',8,'大连市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',9,'重庆市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',10,'南京市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',11,'武汉市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',12,'青岛市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',13,'济南市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',14,'厦门市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',15,'福州市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',16,'成都市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',17,'贵阳市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',18,'温州市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',19,'宁波市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',20,'苏州市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',21,'无锡市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',22,'常州市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('city',1000,'国外','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('education',1,'小学','2010-06-11');
INSERT INTO `kbn_master` VALUES ('education',2,'初中','2010-06-11');
INSERT INTO `kbn_master` VALUES ('education',3,'高中','2010-06-11');
INSERT INTO `kbn_master` VALUES ('education',4,'中专','2010-06-11');
INSERT INTO `kbn_master` VALUES ('education',5,'大专','2010-06-11');
INSERT INTO `kbn_master` VALUES ('education',6,'大学','2010-06-11');
INSERT INTO `kbn_master` VALUES ('education',7,'硕士','2010-06-11');
INSERT INTO `kbn_master` VALUES ('education',8,'博士','2010-06-11');
INSERT INTO `kbn_master` VALUES ('hobby',1,'电影','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',2,'运动','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',3,'音乐','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',4,'美食','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',5,'品牌','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',6,'户外运动','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',7,'观光地','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',8,'艺术','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',9,'学到的新东西','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',10,'书籍漫画','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',11,'电视节目','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',12,'名人','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',13,'游戏','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',14,'网站','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',15,'博彩','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',16,'宠物','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',17,'语言','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('hobby',18,'假日休闲方式','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('level',0,'非公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('level',1,'全体公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('level',2,'向朋友公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('level',3,'向铁哥们公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('level',4,'向特定朋友公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('level',5,'向组公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('level',6,'公开至朋友的朋友','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('marry',0,'未婚','2010-06-11');
INSERT INTO `kbn_master` VALUES ('marry',1,'结婚','2010-06-11');
INSERT INTO `kbn_master` VALUES ('marry',2,'离异','2010-06-11');
INSERT INTO `kbn_master` VALUES ('memberkind',1,'普通会员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('memberkind',2,'尊贵会员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',1,'IT相关','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',2,'事务专员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',3,'技术专员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',4,'业务专员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',5,'设计师','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',6,'零售专员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',7,'服务业','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',8,'董事高管','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',9,'公务员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',10,'教师','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',11,'匠人','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',12,'私营业主','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',13,'艺术家','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',14,'自由职业','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',15,'大学生研究生','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',16,'学生','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',17,'家庭主妇','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',18,'求职中','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',19,'会计师','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',20,'金融业','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',21,'运动员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',22,'军人','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',23,'警察','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',24,'农民','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',25,'医护人员','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('occupy',26,'其他','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('openflg',0,'不公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('openflg',1,'公开','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('province',1,'上海市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',2,'北京市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',3,'天津市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',4,'湖北省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',5,'湖南省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',6,'黑龙江省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',7,'吉林省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',8,'辽宁省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',9,'河北省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',10,'山东省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',11,'河南省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',12,'安徽省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',13,'江苏省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',14,'浙江省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',15,'福建省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',16,'江西省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',17,'广东省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',18,'广西自治区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',19,'海南省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',20,'陕西省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',21,'山西省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',22,'宁夏自治区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',23,'甘肃省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',24,'四川省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',25,'青海省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',26,'重庆市','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',27,'贵州省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',28,'西藏自治区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',29,'新疆自治区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',30,'台湾省','2010-06-11');
INSERT INTO `kbn_master` VALUES ('province',31,'国外','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('right',1,'成员任意创建','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('right',2,'仅限管理者','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('sex',0,'女性','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('sex',1,'男性','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('sh',1,'徐汇区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',2,'闽行区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',3,'黄埔区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',4,'浦东新区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',5,'南汇区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',6,'奉贤区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',7,'闸北区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',8,'宝山区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',9,'崇明县','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',10,'嘉定区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',11,'青浦区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',12,'松江区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',13,'宝山区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',14,'嘉定区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',15,'金山区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',16,'江湾区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',17,'杨浦区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',18,'长宁区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',19,'静安区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('sh',20,'普陀区','2010-06-11');
INSERT INTO `kbn_master` VALUES ('viewblog',0,'可以浏览过去的博客','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('viewblog',1,'不可以浏览过去的博客','0000-00-00 00:00:00');
INSERT INTO `kbn_master` VALUES ('viewblog',2,'可浏览指定日期以后的博客','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `kbn_master` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table metadata
#

DROP TABLE IF EXISTS `metadata`;
CREATE TABLE `metadata` (
  `id` int(11) NOT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `module` varchar(20) DEFAULT NULL,
  `controller` varchar(20) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `flag` char(1) DEFAULT NULL,
  `roles` varchar(100) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table metadata
#

LOCK TABLES `metadata` WRITE;
/*!40000 ALTER TABLE `metadata` DISABLE KEYS */;
INSERT INTO `metadata` VALUES (1,'','default','index','index','Tobu社区','首页, Tobu社区','系统首页','','',0);
INSERT INTO `metadata` VALUES (2,'home','default','index','home','Tobu社区','首页, Tobu社区','系统首页','1','',1);
INSERT INTO `metadata` VALUES (3,'about','default','index','about','关于Tobu社区','Tobu社区,内容介绍','Tobu社区的内容介绍','1','',2);
INSERT INTO `metadata` VALUES (4,'register','default','index','register','用户注册','Tobu社区,用户注册','注册成为Tobu社区的会员','1','',2);
INSERT INTO `metadata` VALUES (5,'registercom','default','index','registercom','用户注册确认','Tobu社区,用户注册','登录Email地址后的确认','1','',2);
INSERT INTO `metadata` VALUES (6,'register1','default','index','register1','用户信息登录','Tobu社区,用户注册','登录用户详细信息','1','',2);
INSERT INTO `metadata` VALUES (7,'register1com','default','index','register1com','用户信息确认','Tobu社区,用户注册','确认用户输入的详细信息','1','',2);
INSERT INTO `metadata` VALUES (8,'register2','default','index','register2','登录手机号','Tobu社区,用户注册','使用手机网站前登录手机号','1','',2);
INSERT INTO `metadata` VALUES (9,'register2com','default','index','register2com','登录确认','Tobu社区,用户注册','确认登录的手机后','1','',2);
INSERT INTO `metadata` VALUES (10,'profile','default','index','profile','个人简介','Tobu社区,个人简介','显示可公开的个人信息','','',1);
INSERT INTO `metadata` VALUES (11,'listfriend','friend','index','list','我的社交圈','Tobu社区,我的社交圈','显示全部朋友列表','',NULL,1);
INSERT INTO `metadata` VALUES (12,'addfriend','friend','index','add','加为好友','Tobu社区,我的社交圈','加入到我的社交圈中','',NULL,1);
INSERT INTO `metadata` VALUES (13,'blog','blog','index','index','我的博客','Tobu社区,我的博客','显示全部博客','',NULL,1);
INSERT INTO `metadata` VALUES (14,'addblog','blog','index','add','写博客','Tobu社区,写博客','写博客','',NULL,13);
INSERT INTO `metadata` VALUES (15,'comblog','blog','index','confirm','确认博客','Tobu社区,写博客','确认博客','',NULL,13);
INSERT INTO `metadata` VALUES (16,'microblog','blog','index','micro','最新微博','Tobu社区,微博','按照时间顺序显示所有微博','',NULL,1);
INSERT INTO `metadata` VALUES (17,'schedule','schedule','index','index','最新日程','Tobu社区,日程','按月为单位显示所有日程','',NULL,1);
INSERT INTO `metadata` VALUES (18,'week','schedule','index','week','最新日程','Tobu社区,日程','按周为单位显示所有日程','',NULL,1);
INSERT INTO `metadata` VALUES (19,'schedulelist','schedule','index','list','最新日程','Tobu社区,日程','显示所有的预定日程','',NULL,1);
INSERT INTO `metadata` VALUES (20,'addschedule','schedule','index','add','追加日程','Tobu社区,日程','追加新日程','',NULL,1);
INSERT INTO `metadata` VALUES (21,'comschedule','schedule','index','confirm','确认日程','Tobu社区,日程','确认日程','',NULL,1);
INSERT INTO `metadata` VALUES (22,'picture','picture','index','index','照片','Tobu社区,照片','显示全部照片','',NULL,1);
INSERT INTO `metadata` VALUES (24,'messagelist','message','recieve','index','站内留言','Tobu社区,站内留言','显示所有站内留言','1',NULL,1);
INSERT INTO `metadata` VALUES (25,'send','message','index','create','写留言','Tobu社区,站内留言','写留言','1',NULL,24);
INSERT INTO `metadata` VALUES (26,'show','message','index','show','留言内容','Tobu社区,站内留言','显示留言内容','1',NULL,24);
INSERT INTO `metadata` VALUES (27,'visitlog','default','index','visitlog','访问统计','Tobu社区,访问统计','显示我访问的网页的统计','',NULL,1);
INSERT INTO `metadata` VALUES (28,'visitother','default','index','other','被访问统计','Tobu社区,访问统计','显示访问我的网页统计','',NULL,1);
INSERT INTO `metadata` VALUES (29,'config','default','index','config','社区设置','Tobu社区,社区设置','显示所有设置项目','1',NULL,1);
INSERT INTO `metadata` VALUES (30,'login','default','index','login',NULL,NULL,NULL,'1',NULL,1);
INSERT INTO `metadata` VALUES (31,'logout','default','index','logout',NULL,NULL,NULL,'1',NULL,1);
INSERT INTO `metadata` VALUES (32,'viewblog','blog','index','view','博客正文','Tobu社区,我的博客','阅读博客正文','1',NULL,1);
INSERT INTO `metadata` VALUES (33,'writeblog','blog','index','do',NULL,NULL,NULL,'1',NULL,NULL);
INSERT INTO `metadata` VALUES (34,'editblog','blog','index','edit','博客编辑','Tobu社区,我的博客','编辑博客。',NULL,NULL,32);
INSERT INTO `metadata` VALUES (35,'edit_profile','default','index','edit','编辑个人简介','Tobu社区,个人简介','编辑用户的个人简介。','1',NULL,1);
INSERT INTO `metadata` VALUES (36,'edit_profile_image','default','index','image','追加个人形象照片',NULL,NULL,'1',NULL,1);
INSERT INTO `metadata` VALUES (37,'edit_profilecom','default','index','editcom','编辑个人简介','Tobu社区,个人简介','编辑用户的个人简介时的确认','1',NULL,35);
INSERT INTO `metadata` VALUES (38,'communitytop','community','index','index','社群检索','Tobu社区,社群','社群首先，从社群检索开始。','1',NULL,1);
INSERT INTO `metadata` VALUES (42,'sendconfirm','message','index','confirm','确认留言','Tobu社区,站内留言','写留言','1',NULL,24);
INSERT INTO `metadata` VALUES (43,'addgroup','friend','group','add','创建新组','Tobu社区,我的社交圈','创建新组，对自己的社交圈进行管理。','1',NULL,11);
INSERT INTO `metadata` VALUES (44,'search','default','search','index','朋友搜索','Tobu社区,搜索朋友','搜索朋友的主页','1',NULL,1);
INSERT INTO `metadata` VALUES (45,'search_friend_mail','default','search','mail','通过邮件地址检索','Tobu社区,搜索朋友','输入邮件地址搜索您的朋友','1',NULL,44);
INSERT INTO `metadata` VALUES (46,'search_school','default','search','school','通过学校名称检索','Tobu社区,搜索朋友','通过学校名称来搜索朋友','1',NULL,44);
INSERT INTO `metadata` VALUES (47,'search_company','default','search','company','通过公司名称检索','Tobu社区,搜索朋友','通过公司名称搜索朋友','1',NULL,44);
INSERT INTO `metadata` VALUES (48,'search_profile','default','search','profile','通过个人信息检索','Tobu社区,搜索朋友','通过个人信息搜索朋友','1',NULL,44);
INSERT INTO `metadata` VALUES (49,'search_mykeyword','default','search','keyword','通过关键字检索','Tobu社区,搜索朋友','通过关键字检索','1',NULL,44);
INSERT INTO `metadata` VALUES (50,'addfriendbymail','default','search','bymail','追加新朋友','Tobu社区,搜索朋友','追加新朋友','1',NULL,44);
INSERT INTO `metadata` VALUES (51,'addfriendbymailcom','default','search','bymailcom','追加新朋友','Tobu社区,搜索朋友','追加新朋友','1',NULL,44);
INSERT INTO `metadata` VALUES (52,'mailadd','default','search','add',NULL,NULL,NULL,'1',NULL,44);
INSERT INTO `metadata` VALUES (53,'edit_intro','default','index','introduce','编辑对朋友的介绍','Tobu社区,个人介绍','编辑对朋友的介绍','1',NULL,10);
INSERT INTO `metadata` VALUES (54,'edit_intro_com','default','index','introducecom','确认朋友的介绍内容','Tobu社区,个人介绍','确认朋友的介绍内容','1',NULL,10);
/*!40000 ALTER TABLE `metadata` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table microblog_comment
#

DROP TABLE IF EXISTS `microblog_comment`;
CREATE TABLE `microblog_comment` (
  `bmid` int(11) NOT NULL AUTO_INCREMENT,
  `contents` text,
  `uid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`bmid`),
  KEY `microblog_comment_idx1` (`uid`,`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table microblog_comment
#

LOCK TABLES `microblog_comment` WRITE;
/*!40000 ALTER TABLE `microblog_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `microblog_comment` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table microblog_master
#

DROP TABLE IF EXISTS `microblog_master`;
CREATE TABLE `microblog_master` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `contents` text,
  `uid` int(11) NOT NULL,
  `thid` int(11) NOT NULL DEFAULT '0',
  `bak` varchar(50) DEFAULT NULL,
  `bak1` varchar(50) DEFAULT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `microblog_master_idx1` (`uid`),
  KEY `microblog_master_idx2` (`thid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table microblog_master
#

LOCK TABLES `microblog_master` WRITE;
/*!40000 ALTER TABLE `microblog_master` DISABLE KEYS */;
/*!40000 ALTER TABLE `microblog_master` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table microblog_theme
#

DROP TABLE IF EXISTS `microblog_theme`;
CREATE TABLE `microblog_theme` (
  `thid` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(200) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `bak` varchar(50) DEFAULT NULL,
  `bak1` varchar(50) DEFAULT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`thid`),
  KEY `microblog_theme_idx1` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table microblog_theme
#

LOCK TABLES `microblog_theme` WRITE;
/*!40000 ALTER TABLE `microblog_theme` DISABLE KEYS */;
/*!40000 ALTER TABLE `microblog_theme` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table mygroup
#

DROP TABLE IF EXISTS `mygroup`;
CREATE TABLE `mygroup` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gname` varchar(100) NOT NULL,
  `introduce` text,
  `uid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `bak1` varchar(50) DEFAULT NULL,
  `bak2` varchar(50) DEFAULT NULL,
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`gid`),
  KEY `mygroup_idx1` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Dumping data for table mygroup
#

LOCK TABLES `mygroup` WRITE;
/*!40000 ALTER TABLE `mygroup` DISABLE KEYS */;
INSERT INTO `mygroup` VALUES (1,'欧冠之友','喜欢看欧洲冠军杯赛的朋友进来吧',1,0,NULL,NULL,'2011-04-05 03:02:19','2011-03-23 10:22:00');
INSERT INTO `mygroup` VALUES (2,'交谊舞之友','喜欢交谊舞的朋友',1,1,NULL,NULL,'2011-03-23 10:22:00','2011-03-23 10:22:00');
INSERT INTO `mygroup` VALUES (6,'同学','我的同班同学',1,4,NULL,NULL,'2011-03-25 10:05:06','2011-03-25 10:05:06');
INSERT INTO `mygroup` VALUES (7,'同事','我同事',1,5,NULL,NULL,'2011-03-25 10:06:10','2011-03-25 10:06:10');
INSERT INTO `mygroup` VALUES (8,'网游朋友','我的网游朋友',2,0,NULL,NULL,'2011-04-05 05:47:11','2011-04-05 03:05:15');
INSERT INTO `mygroup` VALUES (10,'麻将','我的麻将伙伴',1,6,NULL,NULL,'2011-04-08 09:30:01','2011-04-05 13:35:14');
INSERT INTO `mygroup` VALUES (11,'外语学校的同学','外语学校的同学',5,1,NULL,NULL,'2011-04-10 11:45:42','2011-04-10 11:45:42');
/*!40000 ALTER TABLE `mygroup` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table open_friend_list
#

DROP TABLE IF EXISTS `open_friend_list`;
CREATE TABLE `open_friend_list` (
  `bid` int(11) NOT NULL,
  `fuid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`bid`,`fuid`),
  KEY `open_friend_list_idx1` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table open_friend_list
#

LOCK TABLES `open_friend_list` WRITE;
/*!40000 ALTER TABLE `open_friend_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `open_friend_list` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table picture
#

DROP TABLE IF EXISTS `picture`;
CREATE TABLE `picture` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `smallpath` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `largepath` varchar(255) NOT NULL,
  `albumid` int(11) NOT NULL DEFAULT '0',
  `sort` int(1) NOT NULL,
  `bid` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `goodsign` int(11) NOT NULL DEFAULT '0',
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`no`),
  KEY `picture_idx1` (`uid`),
  KEY `picture_idx2` (`mid`),
  KEY `picture_idx3` (`bid`),
  KEY `picture_idx4` (`albumid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Dumping data for table picture
#

LOCK TABLES `picture` WRITE;
/*!40000 ALTER TABLE `picture` DISABLE KEYS */;
INSERT INTO `picture` VALUES (6,'测试博客test','alert001.gif','images/1/7d8c0a9633646ce354af369dd09c705e1fef9c06_s20.gif','images/1/7d8c0a9633646ce354af369dd09c705e1fef9c06.gif','images/1/7d8c0a9633646ce354af369dd09c705e1fef9c06.gif',0,3,5,NULL,1,0,'0000-00-00 00:00:00','2011-02-17 09:09:44');
INSERT INTO `picture` VALUES (7,'测试博客test','add001.gif','images/1/04226ac1e7461486a3044b385919beddfd2febc1_s20.gif','images/1/04226ac1e7461486a3044b385919beddfd2febc1.gif','images/1/04226ac1e7461486a3044b385919beddfd2febc1.gif',0,1,5,NULL,1,0,'0000-00-00 00:00:00','2011-02-17 09:15:29');
INSERT INTO `picture` VALUES (8,'测试图片吧','add001.gif','images/1/813a0b15c7866b5c5373cf7cf28eb0ef8acbfc07_s20.gif','images/1/813a0b15c7866b5c5373cf7cf28eb0ef8acbfc07.gif','images/1/813a0b15c7866b5c5373cf7cf28eb0ef8acbfc07.gif',0,1,6,NULL,1,0,'0000-00-00 00:00:00','2011-02-20 08:51:34');
INSERT INTO `picture` VALUES (9,'测试图片吧','bg_bbs01.gif','images/1/e812fccde29c2abb4e25b67f201e85ea9270469d_s20.gif','images/1/e812fccde29c2abb4e25b67f201e85ea9270469d.gif','images/1/e812fccde29c2abb4e25b67f201e85ea9270469d.gif',0,2,6,NULL,1,0,'0000-00-00 00:00:00','2011-02-20 08:51:34');
INSERT INTO `picture` VALUES (10,'测试图片吧','bg_stripe001.gif','images/1/684a5dc6b81946db36f0d8669d6d746a51e94eaa_s20.gif','images/1/684a5dc6b81946db36f0d8669d6d746a51e94eaa.gif','images/1/684a5dc6b81946db36f0d8669d6d746a51e94eaa.gif',0,3,6,NULL,1,0,'0000-00-00 00:00:00','2011-02-20 08:51:34');
INSERT INTO `picture` VALUES (11,'又一张照片','DSCN0079.JPG','images/1/9317686170f10d52490b2a27a76197f0c88b062d_s20.jpg','images/1/9317686170f10d52490b2a27a76197f0c88b062d_s240.jpg','images/1/9317686170f10d52490b2a27a76197f0c88b062d.JPG',0,1,11,NULL,1,0,'2011-04-08 14:53:59','2011-04-08 14:53:59');
INSERT INTO `picture` VALUES (12,'我刚拍的照片','DSCN0078.JPG','images/1/d358b8c85e70451ae9c87312460e27fae25c0165_s20.jpg','images/1/d358b8c85e70451ae9c87312460e27fae25c0165_s240.jpg','images/1/d358b8c85e70451ae9c87312460e27fae25c0165.JPG',0,1,10,NULL,1,0,'2011-04-08 14:54:31','2011-04-08 14:54:31');
/*!40000 ALTER TABLE `picture` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table recievemessage
#

DROP TABLE IF EXISTS `recievemessage`;
CREATE TABLE `recievemessage` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `sendby` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `title` varchar(400) NOT NULL,
  `delflg` int(1) DEFAULT '0',
  `contents` text,
  `readflg` int(1) DEFAULT '0',
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `recievemessage_idx1` (`uid`),
  KEY `recievemessage_idx2` (`sendby`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Dumping data for table recievemessage
#

LOCK TABLES `recievemessage` WRITE;
/*!40000 ALTER TABLE `recievemessage` DISABLE KEYS */;
INSERT INTO `recievemessage` VALUES (1,'1','2','测试留言',0,'第一次给您留言\r\n请多关照',1,'2011-03-23 09:13:30','2011-03-23 09:13:30');
INSERT INTO `recievemessage` VALUES (2,'1','2','测试留言更新',0,'测试回信ddd',1,'2011-03-23 15:30:03','2011-03-23 15:30:03');
INSERT INTO `recievemessage` VALUES (3,'2','1','RE:测试留言更新',0,'谢谢',1,'2011-03-24 02:03:38','2011-03-24 02:03:38');
INSERT INTO `recievemessage` VALUES (4,'1','3','你好',0,'你好，我是',0,'2011-03-30 03:32:19','2011-03-30 03:32:19');
INSERT INTO `recievemessage` VALUES (5,'2','1','好久不见',0,'最近还好吗？\r\n有空多联系啊',1,'2011-04-08 15:00:10','2011-04-08 15:00:10');
INSERT INTO `recievemessage` VALUES (6,'1','3','请看我最新的照片',0,'照片URL\r\nhttp://localhost/sns/1/picture',0,'2011-04-08 15:06:26','2011-04-08 15:06:26');
/*!40000 ALTER TABLE `recievemessage` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table sendmessage
#

DROP TABLE IF EXISTS `sendmessage`;
CREATE TABLE `sendmessage` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `sendto` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `title` varchar(400) NOT NULL,
  `sendedflg` int(1) DEFAULT '0',
  `contents` text,
  `delflg` int(1) DEFAULT '0',
  `udat` datetime NOT NULL,
  `cdat` datetime NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `sendmessage_idx1` (`uid`),
  KEY `sendmessage_idx2` (`sendto`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Dumping data for table sendmessage
#

LOCK TABLES `sendmessage` WRITE;
/*!40000 ALTER TABLE `sendmessage` DISABLE KEYS */;
INSERT INTO `sendmessage` VALUES (1,'2','1','测试留言',1,'第一次给您留言\r\n请多关照',0,'2011-03-23 09:13:30','2011-03-23 09:13:30');
INSERT INTO `sendmessage` VALUES (2,'2','1','你好',0,'可以和你约会吗',0,'2011-03-23 09:14:23','2011-03-23 09:14:23');
INSERT INTO `sendmessage` VALUES (3,'2','1','测试留言',0,'测试回信',0,'2011-03-23 14:49:14','2011-03-23 14:49:14');
INSERT INTO `sendmessage` VALUES (4,'2','1','测试留言更新',1,'测试回信ddd',1,'2011-03-23 15:30:03','2011-03-23 15:13:18');
INSERT INTO `sendmessage` VALUES (5,'1','2','RE:测试留言更新',0,'谢谢您的来信',0,'2011-03-23 16:04:00','2011-03-23 16:04:00');
INSERT INTO `sendmessage` VALUES (6,'1','2','RE:测试留言更新',1,'谢谢',0,'2011-03-24 02:03:37','2011-03-24 02:03:37');
INSERT INTO `sendmessage` VALUES (7,'3','1','你好',1,'你好，我是',0,'2011-03-30 03:32:19','2011-03-30 03:32:19');
INSERT INTO `sendmessage` VALUES (8,'1','2','好久不见',1,'最近还好吗？\r\n有空多联系啊',0,'2011-04-08 15:00:10','2011-04-08 15:00:10');
INSERT INTO `sendmessage` VALUES (9,'3','1','请看我最新的照片',1,'照片URL\r\nhttp://localhost/sns/1/picture',0,'2011-04-08 15:06:26','2011-04-08 15:06:26');
INSERT INTO `sendmessage` VALUES (10,'2','1','RE:好久不见',0,'恩，好的\r\n你多保重。',0,'2011-04-10 15:49:24','2011-04-08 15:08:10');
/*!40000 ALTER TABLE `sendmessage` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table sitemenu
#

DROP TABLE IF EXISTS `sitemenu`;
CREATE TABLE `sitemenu` (
  `menuid` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `cond` varchar(255) DEFAULT NULL,
  `flg` int(1) DEFAULT '1',
  `cdate` datetime DEFAULT '0000-00-00 00:00:00',
  `udate` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`menuid`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

#
# Dumping data for table sitemenu
#

LOCK TABLES `sitemenu` WRITE;
/*!40000 ALTER TABLE `sitemenu` DISABLE KEYS */;
INSERT INTO `sitemenu` VALUES (1,'个人简介','/snsuser/profile','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (2,'我的社交圈','/snsuser/listfriend','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (3,'我的博客','/snsuser/blog','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (4,'我的日程','/snsuser/schedule','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (5,'照片','/snsuser/picture','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (6,'视频','/snsuser/video','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (7,'站内留言','/messagelist','?mode=recieve&fid=',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (8,'访问统计','/snsuser/visitother','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (9,'社区设置','/snsuser/config','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (10,'写留言','/send','?fid=',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (11,'社交圈管理','/snsuser/listfriend',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (12,'加为朋友','/snsuser/addfriend','?fid=',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (13,'首页','/home',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (14,'关于Tobu社区','/about',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (15,'我要注册','/register',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (16,'运营公司','/company',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (17,'帮助','/help',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO `sitemenu` VALUES (18,'我要登录','',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `sitemenu` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tempuser
#

DROP TABLE IF EXISTS `tempuser`;
CREATE TABLE `tempuser` (
  `mail` varchar(255) NOT NULL,
  `md5_mail` varchar(32) NOT NULL,
  `validflg` int(1) DEFAULT '0',
  `cdate` datetime NOT NULL,
  PRIMARY KEY (`mail`),
  KEY `tempuser_idx1` (`md5_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table tempuser
#

LOCK TABLES `tempuser` WRITE;
/*!40000 ALTER TABLE `tempuser` DISABLE KEYS */;
INSERT INTO `tempuser` VALUES ('admin@softechallenger.com','f71fa28feb6cec647162b2cd36898ed0',1,'2011-03-22 06:17:54');
INSERT INTO `tempuser` VALUES ('mysin007@gmail.com','13b9d7a28468bf82c6731675603c3097',1,'2011-03-29 09:09:47');
INSERT INTO `tempuser` VALUES ('mysin007@hotmail.com','f26511a8810bf5a2164f89fb62b92671',1,'2011-02-10 14:43:42');
INSERT INTO `tempuser` VALUES ('zlmj2908@yahoo.co.jp','9deaeac7d999839fed549ce795b21762',1,'2011-04-08 08:18:39');
/*!40000 ALTER TABLE `tempuser` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table topmenu
#

DROP TABLE IF EXISTS `topmenu`;
CREATE TABLE `topmenu` (
  `topid` int(3) NOT NULL AUTO_INCREMENT,
  `kbn` varchar(20) NOT NULL,
  `sid` int(2) NOT NULL,
  `menuid` int(2) NOT NULL,
  PRIMARY KEY (`topid`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

#
# Dumping data for table topmenu
#

LOCK TABLES `topmenu` WRITE;
/*!40000 ALTER TABLE `topmenu` DISABLE KEYS */;
INSERT INTO `topmenu` VALUES (1,'main',1,1);
INSERT INTO `topmenu` VALUES (2,'main',1,2);
INSERT INTO `topmenu` VALUES (3,'main',1,3);
INSERT INTO `topmenu` VALUES (4,'main',1,4);
INSERT INTO `topmenu` VALUES (5,'main',1,5);
INSERT INTO `topmenu` VALUES (6,'main',1,6);
INSERT INTO `topmenu` VALUES (7,'main',1,7);
INSERT INTO `topmenu` VALUES (8,'main',1,8);
INSERT INTO `topmenu` VALUES (9,'main',1,9);
INSERT INTO `topmenu` VALUES (10,'main',2,1);
INSERT INTO `topmenu` VALUES (11,'main',2,2);
INSERT INTO `topmenu` VALUES (12,'main',2,3);
INSERT INTO `topmenu` VALUES (13,'main',2,4);
INSERT INTO `topmenu` VALUES (14,'main',2,5);
INSERT INTO `topmenu` VALUES (15,'main',2,6);
INSERT INTO `topmenu` VALUES (16,'main',2,10);
INSERT INTO `topmenu` VALUES (17,'main',2,11);
INSERT INTO `topmenu` VALUES (18,'main',3,1);
INSERT INTO `topmenu` VALUES (19,'main',3,2);
INSERT INTO `topmenu` VALUES (20,'main',3,3);
INSERT INTO `topmenu` VALUES (21,'main',3,4);
INSERT INTO `topmenu` VALUES (22,'main',3,5);
INSERT INTO `topmenu` VALUES (23,'main',3,6);
INSERT INTO `topmenu` VALUES (24,'main',3,10);
INSERT INTO `topmenu` VALUES (25,'main',3,12);
INSERT INTO `topmenu` VALUES (26,'main',0,13);
INSERT INTO `topmenu` VALUES (27,'main',0,14);
INSERT INTO `topmenu` VALUES (28,'main',0,15);
INSERT INTO `topmenu` VALUES (29,'main',0,16);
INSERT INTO `topmenu` VALUES (30,'main',0,17);
INSERT INTO `topmenu` VALUES (31,'main',0,18);
/*!40000 ALTER TABLE `topmenu` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table user
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `nick_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `name_level` int(1) NOT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `province` int(2) DEFAULT NULL,
  `city` int(4) DEFAULT NULL,
  `location_level` int(1) NOT NULL,
  `bornprovince` int(2) DEFAULT NULL,
  `borncity` int(4) DEFAULT NULL,
  `bornlocation_level` int(1) DEFAULT NULL,
  `passwd` varchar(32) DEFAULT NULL,
  `appeal` text,
  `sex` int(1) DEFAULT NULL,
  `sex_level` int(1) NOT NULL,
  `blandtype` int(1) DEFAULT NULL,
  `occupy` int(2) DEFAULT NULL,
  `occupy_level` int(1) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `company_level` int(1) DEFAULT NULL,
  `school` varchar(200) DEFAULT NULL,
  `school_level` int(1) DEFAULT NULL,
  `year` int(4) NOT NULL,
  `age_level` int(1) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `birthday_level` int(1) NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `smallimg` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `largeimg` varchar(255) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `validflg` int(1) DEFAULT '0',
  `roles` varchar(50) DEFAULT NULL,
  `csstype` varchar(50) DEFAULT 'gray',
  `bak` varchar(50) DEFAULT NULL,
  `bak1` varchar(50) DEFAULT NULL,
  `mark` int(5) DEFAULT '10',
  `level` int(2) DEFAULT '1',
  `profile_search_flg` int(1) DEFAULT '1',
  `mail_search_flg` int(1) DEFAULT '1',
  `cdate` datetime NOT NULL,
  `udate` datetime NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `user_idx1` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Dumping data for table user
#

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'mysin007@hotmail.com','007','志刚','王',2,'13912341234',1,1,2,1,1,2,'9ec3811e5ca57e20b51a33b3f0b78f06','我是王\r\n大家请多多关照！',1,2,1,1,2,'ITC',2,'北大',2,1975,0,2,14,0,NULL,'images/1/123b98a994af2244b27a07b7f7a1e97d6ecd8b84_s40.JPG','images/1/123b98a994af2244b27a07b7f7a1e97d6ecd8b84_s76.JPG','images/1/123b98a994af2244b27a07b7f7a1e97d6ecd8b84_s180.JPG','2011-09-09 09:15:32',1,'user','gray',NULL,NULL,140,5,1,0,'2011-02-10 14:50:20','2011-04-10 15:10:13');
INSERT INTO `user` VALUES (2,'admin@softechallenger.com','tiger','前','王',2,'15000542156',1,1,2,NULL,NULL,NULL,'9ec3811e5ca57e20b51a33b3f0b78f06',NULL,1,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1979,0,2,14,0,NULL,NULL,NULL,NULL,'2011-04-10 09:11:07',1,'user','gray',NULL,NULL,10,1,1,1,'2011-03-22 13:17:17','2011-04-10 09:11:07');
INSERT INTO `user` VALUES (3,'mysin007@gmail.com','飞龙在天','冕','王',2,'13912341234',1,1,2,NULL,NULL,NULL,'9ec3811e5ca57e20b51a33b3f0b78f06',NULL,1,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1979,0,2,11,0,NULL,NULL,NULL,NULL,'2011-03-31 14:20:35',1,'user','gray',NULL,NULL,10,1,1,1,'2011-03-29 09:13:07','2011-03-31 14:20:35');
INSERT INTO `user` VALUES (5,'zlmj2908@yahoo.co.jp','郝笨笨','蝶','化',2,'15000542156',13,21,2,NULL,17,2,'9ec3811e5ca57e20b51a33b3f0b78f06','我是搞笑天王',0,2,1,NULL,2,'ITC',2,'北大',2,1984,0,4,7,0,NULL,'images/5/404ca1d1b0cd83759223e7898b05fa8d1fdbb088_s40.JPG','images/5/404ca1d1b0cd83759223e7898b05fa8d1fdbb088_s76.JPG','images/5/404ca1d1b0cd83759223e7898b05fa8d1fdbb088_s180.JPG','2011-04-10 11:37:16',1,'user','gray',NULL,NULL,30,1,1,1,'2011-04-08 08:22:08','2011-04-10 13:12:42');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for view delmessage
#

DROP VIEW IF EXISTS `delmessage`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `delmessage` AS select `recievemessage`.`sendby` AS `sendby`,`recievemessage`.`cdat` AS `cdat`,`recievemessage`.`title` AS `title`,`recievemessage`.`uid` AS `uid`,`recievemessage`.`readflg` AS `readflg`,`recievemessage`.`mid` AS `mid`,'recieve' AS `mode` from `recievemessage` where (`recievemessage`.`delflg` = 1) union select `sendmessage`.`uid` AS `sendby`,`sendmessage`.`cdat` AS `cdat`,`sendmessage`.`title` AS `title`,`sendmessage`.`uid` AS `uid`,'0' AS `readflg`,`sendmessage`.`mid` AS `mid`,'send' AS `mode` from `sendmessage` where (`sendmessage`.`delflg` = 1);


