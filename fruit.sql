-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 10 月 25 日 01:06
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fruit`
--

-- --------------------------------------------------------

--
-- 表的结构 `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `accessId` int(10) NOT NULL AUTO_INCREMENT,
  `roleId` int(10) NOT NULL,
  `tab` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `access` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`accessId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `access`
--

INSERT INTO `access` (`accessId`, `roleId`, `tab`, `access`) VALUES
(12, 2, '', 'a:4:{i:0;s:14:"article_select";i:1;s:14:"article_insert";i:2;s:14:"article_update";i:3;s:14:"article_delete";}'),
(11, 1, '', 'a:2:{i:0;s:14:"article_select";i:1;s:14:"article_insert";}'),
(13, 3, '', 'a:11:{i:0;s:11:"menu_select";i:1;s:11:"menu_update";i:2;s:11:"menu_delete";i:3;s:14:"article_select";i:4;s:14:"article_insert";i:5;s:14:"article_update";i:6;s:14:"article_delete";i:7;s:11:"user_select";i:8;s:11:"user_insert";i:9;s:11:"user_update";i:10;s:11:"user_delete";}');

-- --------------------------------------------------------

--
-- 表的结构 `articler`
--

CREATE TABLE IF NOT EXISTS `articler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thumbImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auther` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '管理员',
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `articler`
--

INSERT INTO `articler` (`id`, `pid`, `title`, `type`, `thumbImg`, `content`, `auther`, `time`) VALUES
(1, 4, '压力机备件', '代理产品', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503308109'),
(2, 4, '压力机备件', '代理产品', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503308109'),
(3, 6, '压力机备件', '大修改造', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503308109'),
(4, 6, '压力机备件', '大修改造', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503308109'),
(5, 5, '压力机备件a', '主要产品', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503308402'),
(6, 5, '压力机备件', '主要产品', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503308109'),
(7, 6, '压力机备件', '大修改造', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/fruit/upload/20170815/1502781950295914.png&quot; title=&quot;1502781950295914.png&quot; alt=&quot;14588705254697965.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503308109'),
(10, 6, 'aa', '大修改造', '', '&lt;p&gt;aaa&lt;br/&gt;&lt;/p&gt;', '管理员', '1503308416'),
(11, 6, 'aa', '大修改造', '', '&lt;p&gt;aaa&lt;br/&gt;&lt;/p&gt;', '管理员', '1503308490'),
(12, 6, 'awdw', '', '', '&lt;p&gt;			&lt;/p&gt;&lt;p&gt;vdsss&lt;br/&gt;&lt;/p&gt;&lt;p&gt;		&lt;/p&gt;', '管理员', '1503453608');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户评论' AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`comId`, `userId`, `userName`, `goodsId`, `score`, `comCnt`, `thumImg`, `comTime`, `replyCnt`, `replayTime`) VALUES
(1, 1, '', 0, '5', 'b', '', '1502271919', '', ''),
(2, 2, '', 0, '5', 'b', '', '1502327274', '', ''),
(3, 3, '', 0, '5', 'n', '', '1502327283', '', ''),
(4, 4, '', 4, '5', 'n', '', '1502327338', '', ''),
(5, 137, '', 4, '3', '此人没有写文字评论哦~', '', '1502327387', '', ''),
(6, 2147483647, '', 5, '3', '此人没有写文字评论哦~', '', '1502327431', '', ''),
(7, 2147483647, '', 6, '3', '多次回购，甜，家人都喜欢。', '', '1502327495', '', ''),
(8, 2147483647, '', 6, '3', '多次回购，甜，家人都喜欢。', '', '1502327549', '', ''),
(9, 2147483647, '', 8, '1', '地', '', '1502327591', '', ''),
(10, 137, '', 8, '1', '地', '', '1502327613', 'eqeqweqweqwe', '1502327613'),
(11, 2147483647, '', 9, '1', '地', '', '1502327644', 'cvxcvxcvxcvcx', '1502327644'),
(12, 1374567890, '', 9, '1', '地', '', '1502327657', '', ''),
(13, 13745678901, '', 9, '1', '地', '', '1502327742', '', ''),
(14, 0, '', 0, '', '', '', '1502328272', '', ''),
(15, 2, '', 3, '1', 'gdfg', '', '1502334813', '', ''),
(16, 2, '', 3, '1', 'gdfg', '', '1502334929', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`goodsId`, `goodsName`, `thumbImg`, `marketPrice`, `discount`, `nums`, `spec`, `code`, `addr`, `storage`, `property`, `remarks`) VALUES
(1, '越南巴沙鱼柳', '', '25.80', '0', 0, '', '', '', '', '', ''),
(2, '越南红心火龙果（小）', '', '59.90', '8.5', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `goods_category`
--

CREATE TABLE IF NOT EXISTS `goods_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `goods_category`
--

INSERT INTO `goods_category` (`id`, `pid`, `name`, `time`, `img`) VALUES
(1, 0, '新鲜水果', '', ''),
(39, 1, '椰子', '', '/fruitday/upload/20171025/1508891479134568.jpg'),
(40, 5, '苹果王', '', '/fruitday/upload/20171025/1508891504714930.jpg'),
(3, 0, '肉类禽蛋', '', ''),
(38, 1, '葡萄', '', '/fruitday/upload/20171025/1508891459484408.jpg'),
(5, 0, '蔬菜瓜果', '', ''),
(6, 0, '水产海鲜', '', ''),
(7, 0, '豪礼在手', '', ''),
(8, 0, '鲜奶乳品', '', ''),
(9, 0, '速食调料', '', ''),
(10, 0, '格调人生', '', ''),
(11, 0, '美颜享瘦', '', ''),
(36, 0, '进店必买', '', ''),
(37, 3, '姑娘果', '', '/fruitday/upload/20171025/1508891360127072.jpg'),
(41, 0, '今日上新', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `goods_list`
--

CREATE TABLE IF NOT EXISTS `goods_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `cid` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品类型id',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名称',
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品缩略图',
  `price` decimal(10,2) NOT NULL COMMENT '市场价格',
  `pcs` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '计价单位',
  `cnt` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '折扣',
  `num` int(10) NOT NULL DEFAULT '1' COMMENT '总数量',
  `prototype` varchar(2048) COLLATE utf8_unicode_ci NOT NULL COMMENT '其它属性',
  `remarks` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `goods_list`
--

INSERT INTO `goods_list` (`id`, `cid`, `name`, `img`, `price`, `pcs`, `cnt`, `discount`, `num`, `prototype`, `remarks`) VALUES
(42, '41', '牛奶', '<img  src="/fruitday/upload/20171025/1508892150444475.jpg"/>', '27.80', '个', '<p>牛奶西</p>', '0', 1, 'a:0:{}', ''),
(38, '36', '海鲜', '<img  src="/fruitday/upload/20171025/1508891887459751.jpg"/>', '40.60', '公斤', '<p>这是橙子</p>', '0', 1, 'a:0:{}', ''),
(39, '36', '苹果', '<img  src="/fruitday/upload/20171025/1508892013282417.jpg"/>', '66.00', '个', '<p>发送苹果</p>', '0', 1, 'a:0:{}', ''),
(40, '41', '苹果', '<img  src="/fruitday/upload/20171025/1508892013282417.jpg"/>', '66.00', '个', '<p>发送苹果</p>', '0', 1, 'a:2:{s:6:"产地";s:0:"";s:6:"品质";s:6:"上等";}', ''),
(41, '41', '牛奶', '<img  src="/fruitday/upload/20171025/1508892150444475.jpg"/>', '27.80', '个', '<p>牛奶西</p>', '0', 1, 'a:2:{s:6:"产地";s:12:"中国广东";s:6:"品质";s:6:"上等";}', ''),
(12, '12', '佳沛新西兰绿奇异果', '&lt;img  src=&quot;/fruit_mobile_201795/upload/20170927/1506477378254532.jpg&quot;/&gt;', '49.90', '个', '<p><img src="/fruit_mobile_201795/upload/20170927/1506477404865498.jpg" title="1506477404865498.jpg" alt="15015688033271.jpg"/><img src="/fruit_mobile_201795/upload/20170927/1506477425109774.jpg" title="1506477425109774.jpg" alt="15015688072545.jpg"/></p>', '0', 1, 'a:4:{s:12:"水果甜度";s:0:"";s:12:"储藏方法";s:0:"";s:6:"品牌";s:0:"";s:6:"产地";s:0:"";}', ''),
(13, '12', '巨无霸-佳沛新西兰阳光金奇异果', '&lt;img  src=&quot;/fruit_mobile_201795/upload/20170927/1506477378254532.jpg&quot;/&gt;', '69.90', '个', '<p><img src="/fruit_mobile_201795/upload/20170927/1506477587571462.jpg" title="1506477587571462.jpg" alt="14932714493047.jpg"/></p>', '0', 1, 'a:4:{s:12:"水果甜度";s:4:"3星";s:12:"储藏方法";s:19:"0度及以上冷藏";s:6:"品牌";s:6:"佳沛";s:6:"产地";s:9:"新西兰";}', ''),
(15, '1', 'test', '<img  src="/fruitday/upload/20171024/1508815705115940.jpg"/>', '32.00', '个', '<p>4684321</p>', '0', 1, 'a:0:{}', ''),
(36, '17', '111', '<img  src="/fruitday/upload/20171024/1508816587138213.jpg"/>', '23.00', '个', '<p>水电费水电费水电费</p>', '0', 1, 'a:0:{}', ''),
(37, '36', '橙子', '<img  src="/fruitday/upload/20171025/1508891806111874.jpg"/>', '36.60', '个', '<p>这是橙子</p>', '0', 1, 'a:0:{}', '');

-- --------------------------------------------------------

--
-- 表的结构 `goods_order`
--

CREATE TABLE IF NOT EXISTS `goods_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单流水号',
  `uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户id',
  `money` decimal(10,2) NOT NULL COMMENT '总金额',
  `order_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单状态（商品）1:待处理,2：已提交,3:已结清,4:已作废',
  `pay_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '付款状态 1:待处理, 2:末付款,3：已付款,4:已退款',
  `addr` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '收货地址',
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '收货人',
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '下单时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `goods_order`
--

INSERT INTO `goods_order` (`id`, `orderid`, `uid`, `money`, `order_status`, `pay_status`, `addr`, `user`, `time`) VALUES
(1, '59cef733b336130349', '18', '209.70', '2', '0', '', '', '1506735923'),
(2, '59cefb0d1e21266563', '18', '99.80', '3', '3', '', '', '1506736909'),
(3, '59efe375a8a1b33900', '2', '373.80', '2', '2', '', '', '1508893557');

-- --------------------------------------------------------

--
-- 表的结构 `goods_prototype`
--

CREATE TABLE IF NOT EXISTS `goods_prototype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL COMMENT '商品分类id',
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '属性值的输入类型，1手工；2选择',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '属性名称',
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '属性值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `goods_prototype`
--

INSERT INTO `goods_prototype` (`id`, `cid`, `type`, `name`, `value`) VALUES
(16, 12, '1', '水果甜度', ''),
(15, 12, '1', '储藏方法', ''),
(14, 12, '1', '品牌', ''),
(13, 12, '1', '产地', ''),
(7, 2, '1', '营养元素', ''),
(8, 2, '1', '储藏方法', ''),
(10, 4, '1', '产地', '产地1'),
(11, 4, '2', '品种', '品种1,a,d'),
(12, 4, '1', '品质', '品质1'),
(17, 41, '1', '产地', ''),
(18, 41, '2', '品质', '上等,中间,下等');

-- --------------------------------------------------------

--
-- 表的结构 `goods_shopcar`
--

CREATE TABLE IF NOT EXISTS `goods_shopcar` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '购物标记id',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `goodid` int(10) NOT NULL COMMENT '商品id',
  `goodname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名',
  `price` decimal(10,2) NOT NULL COMMENT '商品价格',
  `num` int(11) NOT NULL COMMENT '商品数量',
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '加入购物车时间',
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1:待处理,2：已提交,3:已发货,4:已退货',
  `orderid` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单编号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `goods_shopcar`
--

INSERT INTO `goods_shopcar` (`id`, `uid`, `goodid`, `goodname`, `price`, `num`, `time`, `status`, `orderid`) VALUES
(1, 2, 11, ' 佳沛新西兰阳光金奇异果(巨无霸)(原箱)', '179.00', 1, '1506500434', '2', '59cc6ba9af4c4'),
(6, 2, 13, '巨无霸-佳沛新西兰阳光金奇异果', '69.90', 1, '1506560601', '2', '59cc6ba9af4c4'),
(5, 3, 12, '佳沛新西兰绿奇异果', '49.90', 2, '1506560588', '2', '59cc6ba9af4c4'),
(8, 18, 12, '佳沛新西兰绿奇异果', '49.90', 3, '1506580173', '1', '59ceea57be208'),
(9, 18, 13, '巨无霸-佳沛新西兰阳光金奇异果', '69.90', 1, '1506735923', '2', '59cef733b336130349'),
(10, 18, 13, '巨无霸-佳沛新西兰阳光金奇异果', '69.90', 1, '1506735923', '2', '59cef733b336130349'),
(13, 18, 12, '佳沛新西兰绿奇异果', '49.90', 1, '1506731762', '2', '59ceea57be208'),
(14, 18, 12, '佳沛新西兰绿奇异果', '49.90', 2, '1506732576', '2', '59ceea57be208'),
(15, 18, 13, '巨无霸-佳沛新西兰阳光金奇异果', '69.90', 2, '1506735923', '2', '59cef733b336130349'),
(16, 18, 12, '佳沛新西兰绿奇异果', '49.90', 3, '1506732618', '2', '59ceea57be208'),
(17, 18, 11, ' 佳沛新西兰阳光金奇异果(巨无霸)(原箱)', '179.00', 4, '1506732623', '2', '59ceea57be208'),
(18, 18, 13, '巨无霸-佳沛新西兰阳光金奇异果', '69.90', 3, '1506735923', '2', '59cef733b336130349'),
(19, 18, 2, '佳沛新西兰绿奇异果', '49.90', 2, '1506736909', '3', '59cefb0d1e21266563'),
(20, 18, 12, '佳沛新西兰绿奇异果', '49.90', 3, '1506740477', '1', ''),
(22, 2, 37, '橙子', '36.60', 3, '1508893543', '2', '59efe375a8a1b33900'),
(23, 2, 39, '苹果', '66.00', 4, '1508893550', '2', '59efe375a8a1b33900');

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `pid`, `name`, `url`, `sort`) VALUES
(1, 2, '网站首页a', 'index.p', ''),
(2, 0, '产品中心', 'product.php', ''),
(3, 0, '新闻资讯', 'news.php', ''),
(4, 2, '代理产品', '', ''),
(5, 2, '主要产品', '', ''),
(6, 2, '大修产品', '', ''),
(7, 3, '公司新闻', '', ''),
(8, 3, '行业新闻', '', ''),
(18, 2, 'saa', 'SA', ''),
(16, 0, 'aaa', 'asdsa', ''),
(17, 16, 'bbb', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `roleId` int(10) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色名',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`roleId`, `roleName`) VALUES
(1, '编辑组'),
(2, '管理员组'),
(3, '超级管理员组'),
(9, 'b'),
(8, 'a'),
(10, 'x'),
(11, 'x'),
(12, 'm'),
(13, 'r'),
(14, 'ddd');

-- --------------------------------------------------------

--
-- 表的结构 `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `salesId` int(10) NOT NULL AUTO_INCREMENT COMMENT '销售id',
  `userId` int(10) NOT NULL COMMENT '购买用户id',
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `goodsId` int(10) NOT NULL COMMENT '商品id',
  `nums` int(10) NOT NULL COMMENT '数量',
  `prices` decimal(10,2) NOT NULL COMMENT '价格',
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '时间',
  PRIMARY KEY (`salesId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `roleId` int(10) NOT NULL COMMENT '用户所在组(角色)',
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thumbImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userId`, `roleId`, `userName`, `pwd`, `thumbImg`, `time`) VALUES
(2, 3, 'admin', '123456', '', ''),
(3, 2, 'boss', '123456', '', ''),
(4, 1, 'user01', '123456', '', ''),
(5, 2, 'boss01', '1', '', '1503991843'),
(14, 0, '11222', 'q', '', '1505981135'),
(15, 0, '13', 'q', '', '1505982098'),
(16, 0, '17', 'q', '', '1505982120'),
(17, 0, '13114568792', 'q', '', '1505982190'),
(18, 0, '15625779395', '159357', '', '1506578447');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
