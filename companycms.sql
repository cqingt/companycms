/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lcm

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-02-13 11:29:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lcm_article
-- ----------------------------
DROP TABLE IF EXISTS `lcm_article`;
CREATE TABLE `lcm_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(40) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `pic` varchar(300) NOT NULL COMMENT '图片',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `fid` int(11) NOT NULL COMMENT '分类ID',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `edittime` int(11) NOT NULL COMMENT '修改时间',
  `view` int(11) NOT NULL DEFAULT '10' COMMENT '查看次数',
  `status` int(11) NOT NULL COMMENT '当前状态',
  `mp3` varchar(200) DEFAULT NULL,
  `istop` int(11) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `viewtumb` int(11) NOT NULL DEFAULT '0' COMMENT '是否显示封面 0显示 1不显示',
  `articlepassword` varchar(50) DEFAULT NULL COMMENT '文章查看密码',
  `video` varchar(500) DEFAULT NULL COMMENT '视频连接',
  `file` varchar(500) DEFAULT NULL COMMENT '附件地址',
  `type` int(11) NOT NULL COMMENT '文章样式',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '产品价格',
  `additional` varchar(2048) NOT NULL DEFAULT '' COMMENT '产品附加说明',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of lcm_article
-- ----------------------------
INSERT INTO `lcm_article` VALUES ('1', '随便说说吧', '<p>就是要现在，就是不要服输。你知道很多人不在。</p><p>今天，谷歌大中华区总裁石博盟用中文恭贺农历鸡年的到来，他还透露了 2017 的小目标和大目标。</p><p>　　所谓小目标即这位老外希望自己的中文说得更好，大目标则是把更多的创新理念和技术带到中国。</p><p>　　石博盟提到今年谷歌北京总部搬了新办公室，而 AlphaGo 围棋挑战则是成功掀起了全行业对人工智能的热议，他强调，AI 不仅可以下棋，他将在今后为我们的工作生活学习带来更多便利。</p><p>　　此前消息显示，谷歌深度学习团队的 AlphaGo 有望在今年继续公开挑战人类棋手甚至对战《星际争霸》这类网游。</p><p>　　另外，随着去年底谷歌在华举办开发者大会和 Google Developers 中国网站（<a href=\"http://developers.google.cn/\" target=\"_blank\">developers.google.cn</a>）的上线，相信巨头的更多让人期待的服务会与大家见面。</p>', './Public/Uploads/2017-01-20/5881d691a4b1a.png', '1', '28', '1484904084', '1484904084', '20', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('2', '董明珠发格力手机了！员工朋友圈里晒图 人手一台', '<p>本报讯（记者张钦）昨天，很多格力员工开始在朋友圈里晒手机。没错，就是董明珠为他们发的格力手机。有员工在朋友圈里写道：“那些问我到底有没有发手机的小伙伴们，看这里，有图有真相，人手一台！”</p><p>　　就在本月初，网上传出一份格力内部下发的《关于使用格力手机通知》的邮件，其中显示：“根据干部会议精神，春节后全体员工需使用格力手机，请抓好落实。”根据网上文章的意思，格力员工必须购买，而按照目前格力手机的价格：1 代手机 1200 元，2 代手机更要 3300 元，如果强迫员工购买确实有些不合适。甚至有网友联想起去年底董明珠为全体员工每人涨薪 1000 元的举动，因而评论说“这 1000 元也不是白拿的”。不过格力有关人士当天则回应称，“这是鼓励大家都用格力的手机，而非强制性规定，不用也没有问题。”但人们对于格力是否强迫员工自掏腰包买手机还是半信半疑。</p><p>　　不过董明珠毕竟是董明珠，本来一件有些尴尬的事情到她的面前又被迎刃而解。董明珠在此后的一次论坛前夕对外界表示，自己没有强迫员工买手机，而是送。她说，“你是格力员工，格力产品你不用谁用？你自己都不喜欢为什么要让别人喜欢你的产品呢？”董明珠表示，“我们先给员工涨 1000 块钱工资，年终发年终奖，再送一个手机，有什么不可以呢？有什么值得大惊小怪的？你有意见，你也可以给员工送一台手机！”于是，董明珠就真的给员工送手机了！</p><p>　　另外，根据深交所公布的数据显示，董明珠再度斥资超过 300 万元增持格力股票，这已经是她在一个月之内二度增持自家公司股票。数据显示，董明珠在 1 月 16 日增持了 13 万股格力电器股票，占总股本的 0.0216%，成交均价 23.58 元/股，成交总金额 306.54 万元。此前的 2016 年 12 月 20 日，董明珠曾增持 2 万股格力电器股票，成交均价 23.83 元/股，成交额 47.66 万元。昨天，格力电器股价逆市上涨 3.27%，报收于 24.96 元/股。</p><p>　　其实，此前董明珠已经多次增持自家股票。根据深交所公布的资料显示，董明珠最早以“竞价交易”的方式买入格力电器是在 2014 年 3 月 7 日，此后截至去年底，董明珠累计买入格力电器股票 29 次。</p>', './Public/Uploads/2017-01-20/5881d6c7dfef6.png', '1', '28', '1484904138', '1484904138', '22', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('3', '秦朔对话刘强东：京东要向自动化和人工智能转型', '<p>在京东的身上，一直有一个“搬箱子”的标签挥之不去，很多人认为京东只是一家零售公司。但在 2016 年，京东开始全面转型成为技术驱动型公司。</p><p>　　在内部会议上，京东集团 CEO 刘强东强调未来京东将通过 AR/VR 技术、深度学习、人工智能、机器人自动化等创新科技，真正实现物流智能化、无人化，将行业和社会的运营成本降低至极限，将用户体验提升至极限，最终发展成为全球领先的、真正实现智能化的商业体。</p><p>　　2016 年 5 月，京东正式成立了智慧物流开放平台“X事业部”，自主研发无人机、无人车、无人仓等一系列尖端的智慧物流项目。目前，无人机已完成超过 1 万分钟的飞行总时长、近万公里的飞行里程、超过 1000 架次的飞行次数。</p><p>　　近日刘强东做客《改变世界：中国杰出企业家管理思想访谈录》时就京东全面转型的问题与知名媒体人秦朔倾心相谈：是什么原因让他走出农村老家下海经商？又是什么让他坚定自建物流，不惜力排众议？是什么让他震怒，又是什么让他牵挂？人工智能会给人类生活和商业带来哪些颠覆性改变？京东又将怎样推开这个新时代的大门？</p><p>　　<strong>以下为刘强东与秦朔对话节选：</strong></p><p>　　人工智能火遍全球，虽然应用场景还不丰富，但几乎所有大型的互联网企业均已重兵进入。人工智能与电商结合会产生什么化学反应？“零售“、“购物”的概念将怎样被改写？京东将走向何方？</p><p>　　<strong>秦朔：我看到以前有一些报道，说某种意义上你也是京东最重要的技术专家？</strong></p><p>　　刘强东：那时候我们库存管理系统、财务管理系统，包括供货商的管理系统，都是我一个人写的，因为那时候业务很简单。所以从我的角度来说，我并不认为是多么高深的技术。但是未来 12 年，京东集团要全面向技术转型。我们要用 12 年的时间，让技术驱动和支撑我们今天所有的业务，主要有两方面，一个是自动化，第二个是人工智能。</p><p>　　<strong>秦朔：过去给人的印象老说京东重，京东有 10 万大军将来可能有更多的大军，现在为什么又走到了这样一个新的模式里面呢？</strong></p><p>　　刘强东： 因为随着人工智能、云计算等新技术的成熟和普及，我绝对坚信，再次见到 AlphaGo 的时候，无人能够打败它，在这种情况下，我觉得把人工智能技术嫁接到我们的商业和技术上去，已经变得可行了。</p><p>　　<strong>秦朔：对于我们这样的用户来讲，可能意味着什么？</strong></p><p>　　刘强东：意味着你将进一步地缩短购物的时间。随着我们无人车大范围部署以后，消费者购物不再需要留任何地址，比如你在北京，在飞机起飞之前你可以在京东下一个订单，买一瓶香水，你飞到了上海跟朋友去逛街，我们凭借人工智能技术就能够计算到在什么时间、哪个最佳结合点，通过无人车把香水送给你，可能那时你正跟朋友喝茶呢，无人车就悄无声息地跑到你身边，把香水给你了，甚至都不需要支付。</p>', './Public/Uploads/2017-01-20/5881d7124ec88.png', '1', '28', '1484904212', '1484904212', '24', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('4', '天猫吐槽快递放假 京东排队回复“春节不打烊”', '<p>随着中国农历新年的来临，中华大地迎来一波大规模的人口迁移，即返乡潮，各行各业忙碌一年的人们多数选择与家人团聚，送冬迎春。</p><p>　　其中不乏平凡辛劳的快递小哥们，那么，问题来了，过年想网上置办年货、邮寄物品就不得不延后。</p><p>没想到，京东手机通讯火速转发，写着“我们春节不打烊，大家随时买年货”，后来，京东其他官微也队列整齐予以转发，“强势围观”，最后微博还亲自出面调停“都好好过节，发啥快递”。</p><p>　　其实在物流这块，京东对于天猫淘宝的优势想必笔者不用多说，没办法，谁叫东哥有底气呢。</p><p>　　附录：2017 春节快递放假安排</p><p>　　<strong>1. 顺丰</strong></p><p>　　顺丰最后揽件时间：腊月二十九，正月初七上班。顺丰速运相关人士对媒体表示，每年春节顺丰都会采取快递员“轮休”的制度，以此保证每个点部都有人值班，正常收件。</p><p>　　<strong>2. EMS</strong></p><p>　　邮政 EMS 春节期间不放假，但是只送半天邮件。</p><p>　　<strong>3. 韵达</strong></p><p>　　韵达最后揽件时间：腊月二十九（1 月 26 日）开始不收件，正月初六（2 月 2 日）开始正式上班。</p><p>　　<strong>4. 申通</strong></p><p>　　目前新疆、西藏等地区已停止发货，广东地区 1 月 22 日只收省内件，23 日只派件不收件，江浙沪地区 1 月 22 日左右开始减少收件或停运。春节期间，仍有值班人员进行接件，发往江浙沪的包裹不会受太大影响。年后 2 月 4 日（正月初八）左右逐渐恢复正常。</p><p>　　<strong>5. 中通</strong></p><p>　　1 月 16 日开始已停止收寄偏远地区的快件，1 月 20 日开始全面停止收件工作。目前发往西藏、新疆等地的航空线路已经停止，陆路还没有停止。最晚江浙沪皖地区约于 1 月 24 日左右停运。春节期间将有值班人员负责派件。年后预计于 2 月 4 日（正月初八）逐渐恢复正常。</p><p>　　<strong>6. 圆通</strong></p><p>　　圆通快递放假时间：2017 年 1 月 25 日—2017 年 2 月 6 日，圆通快递最后揽件时间：2017 年 1 月 24 日(腊月二十七)，圆通快递上班揽件时间：2017 年 2 月 6 日(正月十一上班)。</p><p>　　另外，京东今年推出“春节不打烊”举措，全国 110 个城市的自营普通订单、446 个城市及区县的大件订单、69 个城市的生鲜冷链订单春节期间将持续生产、配送不间断的为用户提供服务。今年 1 月 27 日至 2 月 3 日（农历除夕至初七），苏宁物流在全国 307 个城市的大小件配送服务不会暂停，而且不涨价。</p>', './Public/Uploads/2017-01-20/5881de7d51090.png', '1', '26', '1484905831', '1484906112', '26', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('5', '为啥要买京东自营？看完彻底懂了', '<p><span style=\"color: rgb(64, 64, 64); font-size: 14px;\">这几天网络上关于京东自营的话题讨论的非常热烈，一方面是消费者购买了京东自营的商品发票信息并非京东商城网站的所有公司，另一方面京东解释“京东的自营就是京东集团子公司的自营就是京东自营”。那么，只要购买到京东自营的商品就可以放心了吗，本次笔者就来谈谈我是如何购买京东自营商品的。</span><br></p><p><span style=\"color: rgb(64, 64, 64); font-size: 14px;\"><span style=\"color: rgb(64, 64, 64); font-size: 14px;\">虽然在京东商城消费并不是特别多，但是笔者认为只要是购买自营商品，在产品品质、售后方面拥有同样的保障，无论发票的开具单位是A或B还是C，我相信很多消费者也是这选择的。近期关于京东商城购物发票开具商并非京东商城网站所有者“京东电子商务有限公司”，实际对于个人消费者而言并没有太大影响，因为普通消费者所关注的售后和报销等问题根本不会因发票开发商不同而有所影响。</span><br></span></p>', './Public/Uploads/2017-01-20/5881dd99c71ee.png', '1', '26', '1484905883', '1484906374', '24', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('6', '水果多吃，好处多多', '<p>这是是内容内容。水果好吃，水果不好吃，水果有营养，水果没营养。</p>', './Public/Uploads/2017-02-05/589747d704664.png', '1', '28', '1486309337', '1486309337', '36', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('7', '【潘苹果-24粒礼盒装】天水花', '<p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>', './Public/Uploads/2017-02-07/5899729428f4c.jpg', '1', '30', '1486451353', '1486451353', '20', '0', '', '0', '0', '', '', '', '2', '255.00', '花牛苹果24粒装|果径75MM中果|居家食用款 营养健康，老幼皆爱');
INSERT INTO `lcm_article` VALUES ('8', '系统管理员', '<p>拜拜拜拜不不不不不不不不</p>', './Public/Uploads/2017-02-07/58997349e2158.jpg', '1', '30', '1486451535', '1486451535', '20', '0', '', '0', '0', '', '', '', '2', '222.00', '花牛苹果24粒装');
INSERT INTO `lcm_article` VALUES ('9', '水果2', '<p>啛啛喳喳错错错错错错错错错</p>', './Public/Uploads/2017-02-07/58998247cfc87.jpg', '1', '30', '1486455369', '1486455369', '23', '0', '', '0', '0', '', '', '', '2', '223.00', '很好吃|多吃点');
INSERT INTO `lcm_article` VALUES ('10', '苹果香蕉', '<p>啛啛喳喳错错错错错错错错错</p>', './Public/Uploads/2017-02-07/58998459e7ef3.jpg', '1', '29', '1486455900', '1486455900', '25', '0', '', '0', '0', '', '', '', '2', '52.00', '很水的苹果');
INSERT INTO `lcm_article` VALUES ('11', '香蕉个巴拉', '<p>啛啛喳喳错错错错错错错错</p>', './Public/Uploads/2017-02-07/58998478e268a.jpg', '1', '29', '1486455930', '1486455930', '25', '0', '', '0', '0', '', '', '', '2', '53.00', '很好吃|很多水');
INSERT INTO `lcm_article` VALUES ('12', '水蜜桃2种', '<p>鹅鹅鹅饿鹅鹅鹅饿</p>', './Public/Uploads/2017-02-07/589985b163c47.jpg', '1', '31', '1486456243', '1486456243', '26', '0', '', '0', '0', '', '', '', '2', '33.00', '狠狠的说|特供水果');
INSERT INTO `lcm_article` VALUES ('13', '公司简介', '<p>潘苹果”是潘石屹公益代言的家乡苹果品牌。&nbsp;2014年初天水花牛苹果集团董事长贾福昌联合潘石屹创建了这一农产品品牌，依靠潘石屹的知名度“潘苹果”这一农产品品牌迅速的传播，经过近两年的品牌运营潘苹果已成为继“褚橙柳桃”之后，国内企业家涉足农业领域的又一具有影响力的水果品牌 </p>', './Public/Uploads/2017-02-08/589a7b4bbc186.png', '1', '32', '1486519117', '1486519117', '20', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('14', '苹果基地', '<p><img alt=\"1IRK141-0-lp.png\" src=\"./Public/Uploads/2017-02-08/589ad3a426264.png\" width=\"300\" height=\"225\"><br></p><p>非常不错，可以很好很强势</p><p><img alt=\"timg.jpg\" src=\"./Public/Uploads/2017-02-08/589ad3be65f2f.jpg\" width=\"1024\" height=\"768\"><br></p>', './Public/Uploads/2017-02-08/589ad398e8570.png', '1', '22', '1486541761', '1486541761', '22', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('15', '香蕉基地', '<p><img alt=\"924437629@chatroom_1482069344680_40.png\" src=\"./Public/Uploads/2017-02-08/589ad3e0ef9ea.png\" width=\"608\" height=\"807\"><br></p>', './Public/Uploads/2017-02-08/589ad3d52c4ab.png', '1', '22', '1486541795', '1486541795', '20', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('16', '水蜜桃基地', '<p><img alt=\"924437629@chatroom_1482075280576_66.png\" src=\"./Public/Uploads/2017-02-08/589ad3fec1ba2.png\" width=\"521\" height=\"736\"><br></p>', './Public/Uploads/2017-02-08/589ad3f8b24bc.png', '1', '22', '1486541824', '1486541824', '24', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('17', '产业联通', '<p>啛啛喳喳错错错错错错错错错</p>', './Public/Uploads/2017-02-08/589b3829e1dcf.png', '1', '33', '1486567467', '1486567467', '10', '0', '', '0', '0', '', '', '', '1', '0.00', '');
INSERT INTO `lcm_article` VALUES ('18', '发展历程', '<p>发展历程历程<img alt=\"924437629@chatroom_1482069344680_40.png\" src=\"./Public/Uploads/2017-02-08/589b388772230.png\" width=\"608\" height=\"807\"></p>', '', '1', '34', '1486567561', '1486567561', '10', '0', '', '0', '0', '', '', '', '1', '0.00', '');

-- ----------------------------
-- Table structure for lcm_bases
-- ----------------------------
DROP TABLE IF EXISTS `lcm_bases`;
CREATE TABLE `lcm_bases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `pic` varchar(255) NOT NULL DEFAULT '',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='基地图片展示';

-- ----------------------------
-- Records of lcm_bases
-- ----------------------------
INSERT INTO `lcm_bases` VALUES ('5', '系统管理员5', './Public/Uploads/2017-02-06/58989cdb73969.jpg', '1486396637');
INSERT INTO `lcm_bases` VALUES ('2', '系统管理员3', './Public/Uploads/2017-02-06/589898b8dc971.jpg', '1486395579');
INSERT INTO `lcm_bases` VALUES ('4', '系统管理员4', './Public/Uploads/2017-02-06/58989cb20c96f.jpg', '1486396595');

-- ----------------------------
-- Table structure for lcm_category
-- ----------------------------
DROP TABLE IF EXISTS `lcm_category`;
CREATE TABLE `lcm_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(30) NOT NULL COMMENT '分类名称',
  `fid` int(11) NOT NULL COMMENT '父级ID',
  `type` int(11) NOT NULL COMMENT '分类样式',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '分类排序',
  `show_index` varchar(32) NOT NULL DEFAULT '' COMMENT '分类在首页展示位置：center|bottom',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of lcm_category
-- ----------------------------
INSERT INTO `lcm_category` VALUES ('3', '水果专区', '0', '1', '100', '');
INSERT INTO `lcm_category` VALUES ('22', '基地展示', '0', '1', '90', '');
INSERT INTO `lcm_category` VALUES ('23', '新闻资讯', '0', '1', '80', '');
INSERT INTO `lcm_category` VALUES ('24', '关于我们', '0', '1', '70', '');
INSERT INTO `lcm_category` VALUES ('25', '联系我们', '0', '1', '60', '');
INSERT INTO `lcm_category` VALUES ('26', '公司新闻', '23', '1', '0', 'center');
INSERT INTO `lcm_category` VALUES ('27', '行业新闻', '23', '1', '0', '');
INSERT INTO `lcm_category` VALUES ('28', '营养知识', '23', '1', '0', 'bottom');
INSERT INTO `lcm_category` VALUES ('29', 'xx苹果', '3', '1', '0', '');
INSERT INTO `lcm_category` VALUES ('30', 'yy苹果', '3', '1', '0', '');
INSERT INTO `lcm_category` VALUES ('31', 'zz苹果', '3', '1', '0', '');
INSERT INTO `lcm_category` VALUES ('32', '公司简介', '24', '1', '0', '');
INSERT INTO `lcm_category` VALUES ('33', '产业链条', '24', '1', '0', '');
INSERT INTO `lcm_category` VALUES ('34', '发展历程', '24', '1', '0', '');

-- ----------------------------
-- Table structure for lcm_code
-- ----------------------------
DROP TABLE IF EXISTS `lcm_code`;
CREATE TABLE `lcm_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL COMMENT '邀请码',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0未使用 1 使用',
  `user` varchar(40) DEFAULT NULL COMMENT '使用用户',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='邀请码';

-- ----------------------------
-- Records of lcm_code
-- ----------------------------

-- ----------------------------
-- Table structure for lcm_comment
-- ----------------------------
DROP TABLE IF EXISTS `lcm_comment`;
CREATE TABLE `lcm_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '评论者姓名',
  `email` varchar(30) NOT NULL COMMENT '评论者邮箱',
  `content` varchar(200) NOT NULL COMMENT '评论者内容',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '评论者ID',
  `replay` int(11) DEFAULT NULL COMMENT '评论谁',
  `ctime` int(11) NOT NULL COMMENT '评论时间',
  `aid` int(11) NOT NULL COMMENT '文章ID',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0显示 1不显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of lcm_comment
-- ----------------------------

-- ----------------------------
-- Table structure for lcm_email_set
-- ----------------------------
DROP TABLE IF EXISTS `lcm_email_set`;
CREATE TABLE `lcm_email_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smtpserver` varchar(200) NOT NULL COMMENT 'SMTP服务器',
  `smtpserverport` int(11) NOT NULL COMMENT 'SMTP服务器端口',
  `smtpusermail` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户邮箱',
  `smtpuser` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户帐号',
  `smtppass` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户密码',
  `reg_set_admin` int(11) NOT NULL COMMENT '用户注册 管理员是否收到邮件 0是 1不是',
  `send_article_set` int(11) NOT NULL COMMENT '用户发表文章  管理员是否收到邮件 0是 1 不是',
  `comment_set` int(11) NOT NULL COMMENT '用户回复 管理员是否收到邮件 0是 1不是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='邮件设置';

-- ----------------------------
-- Records of lcm_email_set
-- ----------------------------
INSERT INTO `lcm_email_set` VALUES ('1', 'smtp.163.com', '25', 'zhaodong1475@163.com', 'zhaodong1475@163.com', 'zxc123456', '1', '1', '1');

-- ----------------------------
-- Table structure for lcm_email_type
-- ----------------------------
DROP TABLE IF EXISTS `lcm_email_type`;
CREATE TABLE `lcm_email_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_user_title` varchar(200) NOT NULL COMMENT '用户注册用户收到邮件的标题',
  `reg_user_content` text NOT NULL COMMENT '用户注册用户收到邮件的内容',
  `reg_admin_title` varchar(200) NOT NULL COMMENT '用户注册管理员收到邮件的标题',
  `reg_admin_content` text NOT NULL COMMENT '用户注册管理员收到邮件的内容',
  `send_article_title` varchar(200) NOT NULL COMMENT '用户发文章管理员收到邮件的标题',
  `send_article_content` text NOT NULL COMMENT '用户发文章管理员收到邮件的内容',
  `send_comment_title` varchar(200) NOT NULL COMMENT '用户评论管理员收到邮件的标题',
  `send_comment_content` text NOT NULL COMMENT '用户评论管理员收到邮件的内容',
  `send_message_title` varchar(200) NOT NULL COMMENT '用户收到留言用户邮件的标题',
  `send_message_content` text NOT NULL COMMENT '用户收到留言用户邮件内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='邮件模板';

-- ----------------------------
-- Records of lcm_email_type
-- ----------------------------
INSERT INTO `lcm_email_type` VALUES ('1', '恭喜您注册本站', '<p></p><p></p><p>恭喜您注册本站<strong></strong><br/></p><p></p><p></p>', '有人注册本网站了', '<p></p><p></p><p>有人注册本网站了</p><p></p><p></p>', '有人发表文章了呦', '<p></p><p></p><p></p><p>有人发表文章了呦</p><p></p><p></p><p></p>', '亲爱的管理员 有人评论文章了呦11122', '<p></p><p></p><p></p><p></p><p></p><p>有人评论啦</p><p></p><p></p><p></p><p></p><p></p>', '亲爱的管理员有用户留言了啊！', '<p></p><p></p>有人留言啦<p></p><p></p>');

-- ----------------------------
-- Table structure for lcm_friendlink
-- ----------------------------
DROP TABLE IF EXISTS `lcm_friendlink`;
CREATE TABLE `lcm_friendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `content` varchar(200) NOT NULL COMMENT '描述',
  `ctime` int(11) NOT NULL COMMENT '时间',
  `url` varchar(100) NOT NULL COMMENT '链接',
  `type` varchar(20) NOT NULL COMMENT '样式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='友情链接';

-- ----------------------------
-- Records of lcm_friendlink
-- ----------------------------
INSERT INTO `lcm_friendlink` VALUES ('1', '斗图啊', '斗图啊是一个在线制作搞笑表情的网站', '1454596882', 'http://www.doutua.com/', 'info');
INSERT INTO `lcm_friendlink` VALUES ('23', '里程密', '里程密开源PHP博客系统', '1454596882', 'http://www.lcm.wang/', 'info');
INSERT INTO `lcm_friendlink` VALUES ('24', '敬业', 'buzhi', '1484877361', 'www.jingye.com', 'danger');

-- ----------------------------
-- Table structure for lcm_site
-- ----------------------------
DROP TABLE IF EXISTS `lcm_site`;
CREATE TABLE `lcm_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(200) NOT NULL COMMENT '网站标题',
  `keywords` text NOT NULL COMMENT '网站关键字',
  `description` text NOT NULL COMMENT '网站描述',
  `logo` varchar(200) NOT NULL COMMENT '网站LOGO',
  `qrcode` varchar(255) NOT NULL DEFAULT '' COMMENT '微信二维码',
  `telephone` varchar(11) NOT NULL DEFAULT '' COMMENT '联系电话',
  `qq` varchar(15) NOT NULL DEFAULT '' COMMENT '联系qq',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '详细地址',
  `articleSatus` int(11) NOT NULL COMMENT '0 无需审核 1 需要审核',
  `userStatus` int(11) NOT NULL COMMENT '0无需注册码 1需要注册码',
  `admin_email` varchar(100) NOT NULL COMMENT '管理员邮箱',
  `set_content` varchar(50) NOT NULL COMMENT '副标题',
  `name` varchar(50) NOT NULL COMMENT '网站名称',
  `statistics` text NOT NULL COMMENT '网站统计代码',
  `code` text NOT NULL COMMENT '邀请码说明',
  `friend_link` text NOT NULL COMMENT '友情链接说明',
  `icp` varchar(600) NOT NULL COMMENT 'ICP备案号',
  `submission` int(11) NOT NULL COMMENT '是否可以投稿 0可以 1不可以',
  `slides_display` int(11) NOT NULL COMMENT '是否显示幻灯片 0显示 1不显示',
  `file_size` int(11) NOT NULL COMMENT '文件大小限制',
  `about_left` varchar(255) NOT NULL DEFAULT '' COMMENT '首页关于我们左侧图片',
  `about_right` varchar(255) NOT NULL DEFAULT '' COMMENT '首页关于我们右侧图片',
  `about_title` varchar(64) NOT NULL DEFAULT '' COMMENT '关于我们品牌标题',
  `about_content` varchar(255) NOT NULL DEFAULT '' COMMENT '关于我们品牌说明',
  `product_right` varchar(255) NOT NULL DEFAULT '' COMMENT '首页产品展示右侧图片',
  `company` varchar(255) NOT NULL DEFAULT '' COMMENT '公司名称',
  `lat` varchar(255) NOT NULL DEFAULT '' COMMENT '经度',
  `lng` varchar(255) NOT NULL DEFAULT '' COMMENT '纬度',
  `pic_hover` varchar(255) NOT NULL DEFAULT '' COMMENT '基地图片展示覆盖层',
  `brand` varchar(64) NOT NULL DEFAULT '' COMMENT '品牌',
  `slogan` varchar(255) NOT NULL DEFAULT '' COMMENT '标语',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='网站设置';

-- ----------------------------
-- Records of lcm_site
-- ----------------------------
INSERT INTO `lcm_site` VALUES ('1', 'xx农场管理系统', '农产品|蜜桃|水果', '农产品展示平台', './Public/Uploads/2017-01-20/5881bb4bbffbf.png', './Public/Uploads/2017-02-05/5897354907825.png', '12345678901', '784966200', '江苏省苏州市姑苏区直属镇菁英公寓', '0', '0', '731371050@qq.com', '农场品展示平台', '泰安农场', '<script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id=\'cnzz_stat_icon_1256104530\'%3E%3C/span%3E%3Cscript src=\'\" + cnzz_protocol + \"s11.cnzz.com/stat.php%3Fid%3D1256104530\' type=\'text/javascript\'%3E%3C/script%3E\"));</script>', '你说不说说不说', '发送邮箱至map720@163.com', '<a href = \"www.baidu.com\">asd</a>', '1', '0', '8', './Public/Uploads/2017-02-06/5897f55da1b8d.jpg', './Public/Uploads/2017-02-06/5897f563b1353.jpg', '品牌的力量', '品牌的力量是很大很大很大的。品牌的力量是很大很大很大的。品牌的力量是很大很大很大的。品牌的力量是很大很大很大的。品牌的力量是很大很大很大的。品牌的力量是很大很大很大的。', './Public/Uploads/2017-02-06/5897f568def79.jpg', '阿狸文化有限公司', '31.268243', '120.736099', './Public/Uploads/2017-02-08/589ad0cbdff26.png', '水果王', '做华东第一水果品牌');

-- ----------------------------
-- Table structure for lcm_slides
-- ----------------------------
DROP TABLE IF EXISTS `lcm_slides`;
CREATE TABLE `lcm_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='幻灯片';

-- ----------------------------
-- Records of lcm_slides
-- ----------------------------
INSERT INTO `lcm_slides` VALUES ('1', '1', './Public/Uploads/2017-01-20/5881799fe4bd2.png', 'http://www.baidu.com', '1484880295');
INSERT INTO `lcm_slides` VALUES ('2', '2', './Public/Uploads/2017-01-20/588179b7323dc.png', 'http://www.baidu.com', '1484880314');

-- ----------------------------
-- Table structure for lcm_user
-- ----------------------------
DROP TABLE IF EXISTS `lcm_user`;
CREATE TABLE `lcm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(40) NOT NULL COMMENT '用户账号',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `pic` varchar(200) NOT NULL COMMENT '用户头像',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `lasttime` int(11) NOT NULL COMMENT '上次登录时间',
  `ip` varchar(50) NOT NULL COMMENT '注册IP地址',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0启用 1禁用',
  `truename` varchar(30) NOT NULL DEFAULT '里程密' COMMENT '昵称',
  `admin` int(11) NOT NULL DEFAULT '0' COMMENT '是否是管理员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of lcm_user
-- ----------------------------
INSERT INTO `lcm_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', './Public/Uploads/UserPic/1.png', '', '1484809933', '1484809933', '127.0.0.1', '0', '管理员', '1');
