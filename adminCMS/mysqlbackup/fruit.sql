-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: fruit
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `access`
--

DROP TABLE IF EXISTS `access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access` (
  `accessId` int(10) NOT NULL AUTO_INCREMENT,
  `roleId` int(10) NOT NULL,
  `tab` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `access` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`accessId`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access`
--

LOCK TABLES `access` WRITE;
/*!40000 ALTER TABLE `access` DISABLE KEYS */;
INSERT INTO `access` VALUES (12,2,'','a:4:{i:0;s:14:\"article_select\";i:1;s:14:\"article_insert\";i:2;s:14:\"article_update\";i:3;s:14:\"article_delete\";}'),(11,1,'','a:2:{i:0;s:14:\"article_select\";i:1;s:14:\"article_insert\";}'),(13,3,'','a:11:{i:0;s:11:\"menu_select\";i:1;s:11:\"menu_update\";i:2;s:11:\"menu_delete\";i:3;s:14:\"article_select\";i:4;s:14:\"article_insert\";i:5;s:14:\"article_update\";i:6;s:14:\"article_delete\";i:7;s:11:\"user_select\";i:8;s:11:\"user_insert\";i:9;s:11:\"user_update\";i:10;s:11:\"user_delete\";}');
/*!40000 ALTER TABLE `access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articler`
--

DROP TABLE IF EXISTS `articler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thumbImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auther` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '管理员',
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articler`
--

LOCK TABLES `articler` WRITE;
/*!40000 ALTER TABLE `articler` DISABLE KEYS */;
INSERT INTO `articler` VALUES (1,4,'压力机备件','代理产品','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503308109'),(2,4,'压力机备件','代理产品','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503308109'),(3,6,'压力机备件','大修改造','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503308109'),(4,6,'压力机备件','大修改造','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503308109'),(5,5,'压力机备件a','主要产品','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503308402'),(6,5,'压力机备件','主要产品','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503308109'),(7,6,'压力机备件','大修改造','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503308109'),(10,6,'aa','大修改造','','&lt;p&gt;aaa&lt;br/&gt;&lt;/p&gt;','管理员','1503308416'),(11,6,'aa','大修改造','','&lt;p&gt;aaa&lt;br/&gt;&lt;/p&gt;','管理员','1503308490'),(12,6,'awdw','','','&lt;p&gt;			&lt;/p&gt;&lt;p&gt;vdsss&lt;br/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;','管理员','1503453608');
/*!40000 ALTER TABLE `articler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `comId` int(20) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `userId` bigint(20) NOT NULL COMMENT '购买用户id',
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名称',
  `goodsId` int(20) NOT NULL COMMENT '水果编号id',
  `score` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '评分',
  `comCnt` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论内容',
  `thumImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '晒图',
  `comTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '评论时间',
  `replyCnt` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '回复内容',
  `replayTime` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`comId`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户评论';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,1,'',0,'5','b','','1502271919','',''),(2,2,'',0,'5','b','','1502327274','',''),(3,3,'',0,'5','n','','1502327283','',''),(4,4,'',4,'5','n','','1502327338','',''),(5,137,'',4,'3','此人没有写文字评论哦~','','1502327387','',''),(6,2147483647,'',5,'3','此人没有写文字评论哦~','','1502327431','',''),(7,2147483647,'',6,'3','多次回购，甜，家人都喜欢。','','1502327495','',''),(8,2147483647,'',6,'3','多次回购，甜，家人都喜欢。','','1502327549','',''),(9,2147483647,'',8,'1','地','','1502327591','',''),(10,137,'',8,'1','地','','1502327613','eqeqweqweqwe','1502327613'),(11,2147483647,'',9,'1','地','','1502327644','cvxcvxcvxcvcx','1502327644'),(12,1374567890,'',9,'1','地','','1502327657','',''),(13,13745678901,'',9,'1','地','','1502327742','',''),(14,0,'',0,'','','','1502328272','',''),(15,2,'',3,'1','gdfg','','1502334813','',''),(16,2,'',3,'1','gdfg','','1502334929','','');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `goodsId` int(10) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `goodsName` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名称',
  `thumbImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品缩略图',
  `marketPrice` decimal(10,2) NOT NULL COMMENT '市场价格',
  `discount` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '折扣',
  `nums` int(10) NOT NULL COMMENT '总数量',
  `spec` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '规格',
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品条码',
  `addr` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品产地',
  `storage` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '存储方式',
  `property` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '其它属性',
  `remarks` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  PRIMARY KEY (`goodsId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'越南巴沙鱼柳','',25.80,'0',0,'','','','','',''),(2,'越南红心火龙果（小）','',59.90,'8.5',0,'','','','','','');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,2,'网站首页a','index.p',''),(2,0,'产品中心','product.php',''),(3,0,'新闻资讯','news.php',''),(4,2,'代理产品','',''),(5,2,'主要产品','',''),(6,2,'大修产品','',''),(7,3,'公司新闻','',''),(8,3,'行业新闻','',''),(18,2,'saa','SA',''),(16,0,'aaa','asdsa',''),(17,16,'bbb','','');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `roleId` int(10) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色名',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'编辑组'),(2,'管理员组'),(3,'超级管理员组'),(9,'b'),(8,'a'),(10,'x'),(11,'x'),(12,'m'),(13,'r'),(14,'ddd');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `salesId` int(10) NOT NULL AUTO_INCREMENT COMMENT '销售id',
  `userId` int(10) NOT NULL COMMENT '购买用户id',
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `goodsId` int(10) NOT NULL COMMENT '商品id',
  `nums` int(10) NOT NULL COMMENT '数量',
  `prices` decimal(10,2) NOT NULL COMMENT '价格',
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '时间',
  PRIMARY KEY (`salesId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userId` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `roleId` int(10) NOT NULL COMMENT '用户所在组(角色)',
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thumbImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,3,'admin','123456','',''),(3,2,'boss','123456','',''),(4,1,'user01','123456','',''),(5,2,'boss01','1','','1503991843');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-29 15:38:51
