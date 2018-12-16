/*
Navicat MySQL Data Transfer

Source Server         : Liu
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : dashou

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-12-16 20:59:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ds_agent
-- ----------------------------
DROP TABLE IF EXISTS `ds_agent`;
CREATE TABLE `ds_agent` (
  `agent_id` int(3) NOT NULL AUTO_INCREMENT,
  `agent_name` varchar(100) NOT NULL,
  `agent_city` varchar(50) NOT NULL,
  `agent_province` varchar(50) NOT NULL,
  `agent_phone` varchar(20) NOT NULL,
  `agent_master` varchar(20) NOT NULL,
  `agent_address` varchar(255) NOT NULL,
  PRIMARY KEY (`agent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_agent
-- ----------------------------
INSERT INTO `ds_agent` VALUES ('1', '大寿保险有限公司（石家庄）', '石家庄市', '河北省', '0302-2305-61', '王先生', '槐安西路-1103');
INSERT INTO `ds_agent` VALUES ('2', '大寿保险有限公司（广州）', '广州市', '广东省', '0316-2356-89', '李先生', '海珠路-136A');
INSERT INTO `ds_agent` VALUES ('3', '大寿保险有限公司（重庆）', '万州区', '重庆市', '6231-1632-89', '吕女士', '解放路-16553');

-- ----------------------------
-- Table structure for ds_insurance
-- ----------------------------
DROP TABLE IF EXISTS `ds_insurance`;
CREATE TABLE `ds_insurance` (
  `insurance_id` int(3) NOT NULL AUTO_INCREMENT,
  `insurance_title` varchar(100) NOT NULL,
  `insurance_image` varchar(255) NOT NULL,
  `insurance_content` mediumtext,
  `insurance_categories` enum('人身保险','责任保险','人寿保险','工程保险','信用保险','财产保险') NOT NULL,
  `insurance_isdel` enum('未发布','已发布') DEFAULT '未发布',
  `insurance_customer` enum('企业客户','个人客户') DEFAULT '个人客户',
  PRIMARY KEY (`insurance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_insurance
-- ----------------------------
INSERT INTO `ds_insurance` VALUES ('1', '定期人寿保险', './Upload/InsuranceImages/2018-12-15/5c1500ed3c6a3.jpg', '&lt;p&gt;定期人寿保险是以被保险人在保单规定的期间发生死亡，身故受益人有权领取保险金，如果在保险期间内被保险人未死亡，保险人无须支付保险金也不返还保险费，简称“定期寿险”该保险大都是对被保险人在短期内从事较危险的工作提供保障。&lt;/p&gt;', '人寿保险', '已发布', '个人客户');
INSERT INTO `ds_insurance` VALUES ('2', '信用保险', './Upload/InsuranceImages/2018-12-15/5c15015a2972f.jpg', '&lt;p&gt;信用保险，是指保险人对被保险人信用放款或信用售货，债务人拒绝履行合同或不能清偿债务时，所受到的经济损失承担赔偿责任的保险方式。主要有出口信用保险、抵押信用保险等形式。为防止被保险人因信用保险而懈怠经营，滥施信用，通常均要求被保险人作为共保人承担一定份额的损失，并对信用对象作有一定要求，以防保险人遭受不合理的损失。过错造成货物损坏、灭失的，行纪人不负责任。行纪人在委托事务完成之后，应将办理委托事务所取得的一切收益交付给委托人。委托人的主要义务是向行纪人支付办理委托所需的一切费用并支付约定的酬金。委托人还应及时接受行纪人依信托合同所取得的收益。&lt;/p&gt;', '信用保险', '已发布', '企业客户');
INSERT INTO `ds_insurance` VALUES ('3', '健康保险', './Upload/InsuranceImages/2018-12-15/5c150170567cb.jpg', '&lt;p&gt;健康保险，又称“疾病保险”。是指在被保险人身体出现疾病时，由保险人向其支付保险金的人身保险。健康保险的支付范围通常包括医疗费用、收入损失、丧葬费及遗属生活费等。此种保险多与伤害保险合办，也有与人寿保险合办的。为防止道德危险，办理健康保险时，保险人通常都规定一段试保期间，对被保险人在此期间后发生疾病造成的损失，保险人方负赔偿责任。&lt;/p&gt;', '人身保险', '已发布', '个人客户');
INSERT INTO `ds_insurance` VALUES ('4', '企业财产保险', './Upload/InsuranceImages/2018-12-15/5c14fa798e225.jpg', '&lt;p&gt;财产保险是以国营企业或集体企业的固定资产和流动资产作为保险标的办理的一种保险。根据《企业财产保险条款》规定，保险责任范围包括： (1) 因火灾、雷电、洪水、破坏性地震、爆炸、暴风雨、空中飞行物体的坠落等自然灾害和意外事故造成的经济损失；(2)发生灾害事故时，为了抢救或防止灾害蔓延所采取必要措施而造成保险财产的损失；(3)为抢救保险财产，或者为减少财产损失而进行的必要的保护和整理工作所支付的合理费用。保险责任从约定起保日零时起，到保险期满日的24时止，保险期限一般为一年。被保险人应在保险起保后的15天内，一次缴清保险费。企业财产保险还可附加盗窃保险。&lt;/p&gt;', '财产保险', '已发布', '企业客户');
INSERT INTO `ds_insurance` VALUES ('5', '企业工程保险', './Upload/InsuranceImages/2018-12-15/5c14f8029cdad.jpg', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;工程保险是承保建筑安装工程期间一切意外物质损失和对第三人经济赔偿责任的保险。包括建筑工程一切险与安装工程一切险,属综合性保险。保险标的为工程项目主体、工程用的机械设备以及第三者责任，此外尚有些附带项目。保险责任为工程期间因洪水、暴雨、地震等自然灾害损失；火灾；爆炸、飞行物体坠落等意外事故损失；盗窃、恶意行为等人为损失；原材料缺陷、工艺缺陷等工程事故损失以及对第三人的赔偿责任。工程保险规定有免赔额与赔偿限额。&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;', '工程保险', '已发布', '企业客户');
INSERT INTO `ds_insurance` VALUES ('6', '责任保险', './Upload/InsuranceImages/2018-12-15/5c14f9acea44d.jpg', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;责任保险，是指保险人在被保险人依法应对第三者负赔偿民事责任，并被提出赔偿要求时，承担赔偿责任的财产保险形式。责任保险以被保险人对他人依法应负的民事赔偿责任为保险标的，在合同中无保险金额，而规定赔偿限额。责任保险仅承保被保险人的过失侵权民事责任，对故意行为造成的损害不负责任，除特别约定外，通常不包括合同违约责任。责任保险的承保方式有两种。一种是作为其他保险的组成部分或附加部分承保，不作为主要险别单独承保，如汽车保险中的第三人责任险、船舶保险中&amp;#39;的碰撞责任险等。另一种是作为主要险别单独承保。其形式有公众责任保险、产品责任保险、雇主责任保险、职业赔偿保险即职业责任保险等。责任保险作为一种保险形式发展较晚，19世纪后半叶始随近代社会为保障灾害事故受害人利益而确立。&lt;/p&gt;&lt;p&gt;\r\n				&lt;/p&gt;', '责任保险', '已发布', '个人客户');

-- ----------------------------
-- Table structure for ds_join
-- ----------------------------
DROP TABLE IF EXISTS `ds_join`;
CREATE TABLE `ds_join` (
  `join_id` int(3) NOT NULL AUTO_INCREMENT,
  `join_user_id` int(3) NOT NULL,
  `join_content` mediumtext NOT NULL,
  `join_ispass` enum('未通过','通过','待审核') NOT NULL DEFAULT '待审核',
  PRIMARY KEY (`join_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_join
-- ----------------------------
INSERT INTO `ds_join` VALUES ('1', '2', '之前虽然写了几篇关于textarea的高度自适应的解决方案,但都不甚满意,最近从Element的源码中得到启示,就自己写了一个textarea高度自适应的j', '待审核');
INSERT INTO `ds_join` VALUES ('3', '3', '擦撒吃撒sADaw Dw DadcsaCsfAfes', '通过');

-- ----------------------------
-- Table structure for ds_message
-- ----------------------------
DROP TABLE IF EXISTS `ds_message`;
CREATE TABLE `ds_message` (
  `message_id` int(3) NOT NULL AUTO_INCREMENT,
  `message_user_id` int(3) NOT NULL,
  `message_question` varchar(255) NOT NULL,
  `message_answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_message
-- ----------------------------
INSERT INTO `ds_message` VALUES ('1', '2', 'Aliquam at scelerisque ligula. Curabitur id laoreet velit. Lorem ipsum dolor sit amet？', 'None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. ');
INSERT INTO `ds_message` VALUES ('2', '2', 'thinkphp5 session不生效问题解决方案？', '注意：在condition属性中可以支持eq等判断表达式 ，同上面的比较标签，但是不支持带有”>”、”<”等符号的用法，因为会混淆模板解析，所以下面的用法是错误的：\r\n<if condition=\"$id < 5 \"> value1\r\n<else /> value2\r\n</if>\r\n \r\n必须改成：\r\n<if condition=\"$id lt 5 \"> value1\r\n<else /> value2\r\n可以试试先不用ajax,直接访问A方法,然后再访问B方法,看看是否可以读出。撒撒撒但是你的来看离开谁都');
INSERT INTO `ds_message` VALUES ('3', '2', '晒死法撒纳奥惨吗', '踏Lorem 歌答帱婥孱Curabitur id laoreet velit. Lorem ipsum dolor sit amet？Curabitur id laoreet velit. Lorem ipsum dolor sit amet？Curabitur id laoreet velit. Lorem ipsum dolor sit amet？');
INSERT INTO `ds_message` VALUES ('4', '2', '七五是不撒剖地方掉啊？', '天空天空天空天空天空天空天空');
INSERT INTO `ds_message` VALUES ('5', '3', 'We are a awward winning multinational company. We believe in quality and standard worldwide.', '');
INSERT INTO `ds_message` VALUES ('6', '2', '异色烤. We believe in quality and standard worldwide.天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空天空', 'vsdvds');
INSERT INTO `ds_message` VALUES ('7', '2', 'dwadwadaw', 'sss');

-- ----------------------------
-- Table structure for ds_news
-- ----------------------------
DROP TABLE IF EXISTS `ds_news`;
CREATE TABLE `ds_news` (
  `news_id` int(3) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(100) NOT NULL,
  `news_image` varchar(255) DEFAULT NULL,
  `news_content` mediumtext NOT NULL,
  `news_addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_author` varchar(50) DEFAULT NULL,
  `news_isdel` enum('未发布','已发布') NOT NULL DEFAULT '未发布',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_news
-- ----------------------------
INSERT INTO `ds_news` VALUES ('1', 'P2P爆雷波及个别保险公司 仍有多家平台宣称“保险兜底”', './Upload/news/news1.jpg', '近期，有保险公司因P2P爆雷，出现数十亿元大额赔付的消息，再次引发市场关注，也让一大批此前参与该业务的保险公司绷紧了神经。\r\n\r\n　　实际上，据《证券日报》记者昨日梳理显示，与此前不少P2P平台标榜有保险公司兜底情形不同的是，近期明确表示有保险公司背书的P2P平台呈减少态势。\r\n\r\n　　引人注意的是，仍有多家P2P平台在官网表示，投资标的由保险公司的履约保证保险承保，若还款人逾期或违约，则由保险公司兜底。\r\n\r\n　　一家大型保险公司业务人员对《证券日报》记者表示，公司自去年以来，就开始收缩与P2P的业务合作，目前除未到期合作项目，与网贷平台新合作的项目不多。\r\n\r\n　　仍有多家平台与险企合作\r\n\r\n　　《证券日报》记者曾在今年7月份时做过系统的梳理，包括陆金服、宜人贷、小赢理财、玖富、邦融汇、精融汇、小马金融、米缸金融、金投行、蜜蜂有钱等平台与保险公司有业务合作，合作险种包括履约保证保险、借款人意外险等。\r\n\r\n　　《证券日报》记者昨日再次查阅上述平台发现，个别平台官网首页及投资标的中均难见与保险公司合作的表述，个别平台官网的“合作伙伴”中也悄然移除了保险公司。\r\n\r\n　　虽然有平台在投资标的介绍中去掉了保险公司承保的表述与介绍，但仍有P2P平台明确表示，投资标的由保险公司兜底。\r\n\r\n　　例如，12月9日，《证券日报》记者在互联网金融平台精融汇上发现，其官网首页“重点推荐”的一款优选项目显示，该项目年化收益为6.3%，项目期限为6个月，项目金额为90万元。\r\n\r\n　　引人注意的是，精融汇官网信息显示，上述项目由履约保证险担保，承保公司为一家中型财险公司。项目介绍中提到，该项目已通过保险公司审核，同意在借款满标后为其借款提供履约保证保险。第一还款来源为借款企业经营收入，第二还款来源为保险公司承保理赔。\r\n\r\n　　在小马金融的官网，《证券日报》记者也看到，该网站明确表示，公司的天马系列理财产品已经与保险公司签订了履约保证保险，保马系列理财产品与保险公司签订了责任保险。小马金融还提供了保险公司保单查询通道，投资人可查阅相关保单。\r\n\r\n　　履约保证保险是核心业务\r\n\r\n　　今年以来，随着监管趋严以及P2P频现暴雷，与P2P平台合作的保险公司数量呈现下滑态势。\r\n\r\n　　根据盈灿咨询不完全统计，截至2017年3月底，与保险公司合作的P2P网贷平台有55家，已经有33家保险公司介入到P2P网贷行业的保险业务中，有4家保险公司合作的平台数量均在5家以上。到今年7月份，与P2P平台合作的险企降至10余家。\r\n\r\n　　实际上，从2014年开始，P2P网贷平台将保险引入P2P网贷行业中，到2015年平台出于对增信的需求，引入保险保障的平台数量出现大幅度的增加，但大部分都是常见的人身意外险以及抵押物财产保险，其中不乏少部分平台对此夸大宣传。\r\n\r\n　　正因为如此，到了2016年年初，保监会开始加强对互联网平台保险业务的监管，规定“互联网平台不得采取扩大保险责任等方式开展误导性宣传”。P2P网贷平台对保险的热情随之降温，但仍有不少的平台选择与保险公司合作。', '2018-12-15 22:48:00', 'Alnx', '未发布');
INSERT INTO `ds_news` VALUES ('2', '新华保险\"以附促主\"策略加持 推出首款附加心脑血管保险', './Upload/news/news2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2018-12-15 23:19:40', 'Kogbo', '已发布');
INSERT INTO `ds_news` VALUES ('3', '男子给妻子买3000余万保险后杀妻 女儿仅20个月大', './Upload/news/news3.jpg', '女儿身亡1天后 亲家告知死讯\r\n\r\n　　今年下半年，小洁父亲从亲家口中得知，女儿女婿打算去马尔代夫，亲家希望他帮忙劝劝小两口不要出国，毕竟孙女笑笑只有20个月大，经不住旅途颠簸。小洁母亲建议女儿女婿去海南旅游，两人本已同意，但过了些日子告诉老人，他们定了泰国普吉的自由行。\r\n\r\n　　见孩子们已经定好了行程，小洁父母不再阻拦，出发前一天，两位老人给女儿女婿送去了可口的饭菜，留下1万元用作旅途花销，并嘱咐他们要看好孩子，平安归来。\r\n\r\n　　10月27日晚，张轶凡带着妻女从天津滨海国际机场出发，登机前，两人都给父母发来了笑笑在机场的视频，看着外孙女的笑脸，小洁父母很高兴。\r\n\r\n　　10月30日下午4点多，张轶凡的父亲给小洁父亲打来电话，说小洁出事了，让他们来一趟。“我刚进门，他父母就给我们跪下了，他们说小洁29号游泳淹死了。”小洁父亲说，听到这个消息，还没来得及进门的小洁母亲当即瘫倒在地，4位老人哭成一团。\r\n\r\n　　晚上8点多，稍稍平静下来的小洁父亲拨通了女婿的电话，“我问他小洁怎么死的，他说晚上孩子睡了以后，小洁提出去房间外的泳池游泳，游了一会儿，小洁不放心孩子，让他去看看，他看着孩子不知不觉睡着了，醒来发现外面下着小雨，他喊小洁但没人答应，随后发现小洁漂在了池子上，他把小洁拉到泳池边，然后拨打前台电话叫救护车。”\r\n\r\n死者死于这个泳池中死者死于这个泳池中\r\n　　听完女婿的讲述，小洁父亲询问女婿泳池有多大、多深、泳池周围是否能有人进来、泳池周围有无摄像头、以及小洁身上有无外伤等问题，前几个问题女婿回答得都比较干脆，他告诉岳父泳池也就一间屋子那么大，水可以没到他的耳朵（张轶凡身高1.8米），泳池周围进不来人，也没有摄像头，唯独最后一个问题，他犹豫了很久没有作答。小洁父亲感觉，女婿在电话里犹豫了足足1分钟之久，迟迟得不到答案的他急得又追加了一句“说实话！”，女婿这才回答“没有外伤”。\r\n\r\n　　电话里，张轶凡的声音很镇定，但挂断电话后，一朵疑云在小洁父亲心中隐隐升起。\r\n\r\n　　女婿回国 愈加可疑\r\n\r\n　　小洁父亲的怀疑来自女儿的死因，小洁是会游泳的，而且水性不错。小洁的三叔对这段事发经过提出了更多质疑：“我侄女非常在乎孩子，不可能单独留下孩子，自己拉着丈夫去游泳，即使去了，也不会让张轶凡去看孩子，只能是她亲自去或两人一起去，况且我侄女会游泳，最后，也是最重要的一点，为什么事发1天后张轶凡才向家里报信，而且不是直接打给岳父岳母。从常理来说，在国外出了这么大的事，报警之后紧接着就打给双方父母才对。”\r\n\r\n　　10月31日凌晨，张轶凡带着女儿回国，上午9点多，他和父亲一起来到岳父家，一进门就跪下磕头。小洁父亲询问女婿为何事发1天后才给家里报信，张轶凡说他一直在警局做笔录，天亮才离开，期间没带手机。当小洁父母提出要立即返回泰国为女儿料理后事时，张轶凡表示，岳父母需要先开具一份可以证明与小洁亲子关系的公证书才能处理尸体。张轶凡将领尸手续打听得如此清楚，令小洁家人略感意外。\r\n\r\n　　当天中午，张轶凡在岳父母家吃饭，小洁母亲记得，那天张轶凡胃口不错，吃了很多。饭后他称要出去办点事，于下午4点半左右返回岳母家，在他和小洁的卧室里，由小洁三叔一人陪着他签署一些手续材料。签字时，小洁三叔突然发现张轶凡右手虎口处有一道很深的口子，“我问他伤是怎么弄的，他听了放下笔，沉默了几秒钟，小声说是小洁挠的。我问‘你俩打架了？’他说‘也没有’，我又问‘小洁身上有伤吗？’他说‘脖子上有点道子’。我问他俩人为什么吵架，他说小洁嫌我定的酒店太贵。那一刻，我对他的怀疑更深了，小洁是个对钱没什么概念的孩子，她不会因为这种事和丈夫吵架。”\r\n\r\n　　31日晚11点30分，小洁父母在小洁三叔等5名亲友的陪同下与女婿一起启程前往泰国普吉，行李里装着为女儿带的寿衣。\r\n\r\n　　11月1日凌晨到达普吉后，小洁三叔找机会避开小洁父亲夫妇和张轶凡，对其他人说出了自己的怀疑，“我说我觉得小洁八成是张轶凡害死的，让大家盯紧了张轶凡，不敢让我二哥两口子知道，是怕他们情绪失控打草惊蛇。”\r\n\r\n　　酒店分配房间时，小洁三叔将张轶凡分到了自己的房间，张轶凡进屋放下东西旋即出门，随后便有人来喊他，说张轶凡冲进了岳父母的房间并反锁了房门，小洁三叔赶到兄嫂房间外时听到二嫂在屋内哭喊：“没有用！没有用！多少钱也换不来我的孩子！”\r\n\r\n　　此刻小洁三叔已认定张轶凡就是凶手，为防止张轶凡畏罪自杀，他迅速将原本在7楼的房间调换到2楼，并叮嘱所有人稳住张轶凡。\r\n\r\n　　认尸前说出1700万保险  尸体大片青紫、指甲断裂\r\n\r\n　　小洁父亲告诉记者，张轶凡进入他们的房间后就跪下了，他对岳父母坦白自己打了妻子，但否认杀害了妻子，而后提到了保险，“张轶凡说，孩子以后让姥姥看，他爸爸身体不好，妈妈也不适合看，还说他爸爸骂他为了钱丧心病狂，他说他不回去了，就在普吉陪小洁，他说他买了1700万的保险，让我们拿这些钱抚养笑笑。”\r\n\r\n　　1700万的保额没有在小洁父亲夫妻心里激起丝毫涟漪，反倒是张轶凡锁门下跪后的一番话，让小洁父亲也开始怀疑女儿死于女婿之手。', '2018-12-15 22:47:49', 'Joo', '未发布');
INSERT INTO `ds_news` VALUES ('4', '阳光保险全方位护航2018广州马拉松', './Upload/NewsImages/2018-12-14/5c13be62460af.jpg', '&lt;p&gt;12月9日，2018年广州马拉松赛鸣枪开跑，作为本届赛事的官方独家保险赞助商，阳光保险为本次赛事的30000名选手和7000名工作人员提供了全方位保险保障和志愿服务。除了为参赛选手和工作人员提供了人身保险保障，保障比赛过程中可能出现的意外伤害事故或突发急性病（含猝死）事故，阳光保险还为整个赛事提供了公众责任险保障，全面护航广州马拉松赛。\r\n\r\n　　为更好地服务赛事及参赛选手，阳光保险为本次赛事开通绿色理赔通道，实施“直赔”、意外医疗“零免赔100%赔付”的理赔举措。比赛当天，阳光保险20名理赔专业人员入驻赛事14家定点医院，处理理赔事宜、解答疑问并协助现场救护工作。\r\n\r\n　　赛事当天，9名运动员因身体不适被送往医院治疗，其中有1名选手为外籍人士。阳光保险理赔第一时间进行核实，核实完毕后立即启动“直赔”服务，当天即完成9笔赔付。对于需要留院观察的人员，阳光保险于医院继续陪护跟进理赔事宜。\r\n\r\n　　12月6日至8日，阳光保险入驻广马博览会，在阳光保险专属展区开展“阳光下奔跑”主题活动，通过设置一系列健康阳光互动活动，与广大跑步爱好者进行互动，其中，量子检测、有奖大转盘等活动深受欢迎。此外，在广马终点的阳光展台，阳光保险的工作人员为广大跑友提供了号码牌塑封、专业赛后拉伸等贴合跑友实际需求的服务。\r\n\r\n　　广马赛事当天，阳光保险特别组织了100余名阳光跑团代表参赛，阳光跑团成员身着统一服装，快乐奔跑，传递“健康阳光”理念，在赛场上形成了上一道靓丽的风景线。阳光跑团作为阳光保险的官方跑步团体，全年在全国范围内已经代表阳光保险参加了五十余场大中型马拉松赛事。\r\n\r\n　　自2014年以来，为践行“健康阳光”战略，阳光保险持续开展了“阳光下奔跑”系列活动，先后为北京马拉松、杭州马拉松等110余场比赛的170万余名跑步爱好者提供全方位的保险保障和现场志愿服务，并开通“直赔”服务，为参赛选手提供现场理赔服务。\r\n\r\n　　“健康阳光”战略致力于“让人们享受全周期、高品质、最信赖的健康服务”，为让更多人了解“健康阳光”生活理念，阳光保险推出基于运动数据进行差异化定价的定期寿险产品“悦动保”，提倡“保险+健康”理念，保险消费者只要每天坚持运动，不仅能享受到更便宜的保费，更能收获健康的生活方式，提高身体素质与生活品质。&lt;/p&gt;', '2018-12-15 21:38:37', 'Millg', '已发布');
INSERT INTO `ds_news` VALUES ('28', '沿着“必由之路”逐梦前行', './Upload/NewsImages/2018-12-14/5c13bebf4837a.jpg', '&lt;p&gt;近年来，华夏保险坚守“听党的话，跟监管走”的根本原则，坚守“客户利益至上”的核心价值观，持续健康快速发展，现有24家分公司，人员队伍超35万。截至2018年10月底，实现规模保费1858亿，市场第五；其中原保险保费1325亿，占规模业务比例升至约71%，市场第四；公司个险新单标准保费年度累计116亿元，实现历史性突破。业务品质优秀，13月继续率行业领先。&lt;/p&gt;&lt;p&gt;好服务，在华夏。华夏保险实施“移动互联”战略，先后推出微信投保、微信核保、微信保全、微信理赔、微信回访等服务，打通线上闭环，成为中国首家实现“服务全微化”的保险企业，引领中国保险“全微时代”，结合柜面及线下服务体验，为客户提供无空间、无时间限制的优质服务。&lt;/p&gt;&lt;p&gt;投保是保险业务的首要环节，是客户接触保险公司服务的第一印象，高效的投保和承保流程，是保险公司运营和服务实力的具体体现。但是在寿险行业，长期以来，客户投保需要大量的纸面操作和等待环节，平均承保时效2-5天。&lt;/p&gt;&lt;p&gt;2015年，华夏保险推出微信投保工具。客户通过微信收取营销员发来的投保链接，独立进行在线投保、核保、交费，只需操作六步即可完成投保，平均承保时效7.8分钟。相比传统投保方式，微信投保无需下载安装APP，在场景销售、沟通、操作使用方面具有天然优势，便于在营销员和客户群体中广泛推广。微信公众平台的标准化开放接口，也节省了大量的开发成本和时间，后续的功能版本得以快速迭代。微信投保工具备受客户欢迎，2015年上线当年，华夏保险微信承保率即达84%，2017年升至88%，到2018年，已达97%，也就是说，几乎绝大部分客户都是通过微信投保。华夏保险超35万营销队伍，微信投保工具使用率高达100%。与此同时，微信投保工具也带来营销员人均产能的显著提高，2017年上半年，活动人均标准保费较2016年上半年提升26%，人均承保件数较2016年提升18%，提升幅度为近年来最高。&lt;/p&gt;&lt;p&gt;微信核保，指的是如果客户提交投保申请后，自动核保未通过，可以通过微信提交核保申请。核保流程全景透明，大幅减少客户等待时间，其中问题件和核保函的处理时间分别从原来的3天和6天，缩短为2小时。&lt;/p&gt;&lt;p&gt;投保成功以后，客户信息与华夏保险微信服务号自动绑定，客户即可在华夏保险微信服务号享受微信保全、微信理赔等后续服务。&lt;/p&gt;&lt;p&gt;微信保全指的是将OCR智能识别、电子单证等技术运用到保全审批业务中，替代人工作业。目前，华夏保险已上线22项微信保全功能，满足客户常见保全功能的业务需求。对于客户来说，通过微信保全，可以显著提高效率，省心省力。对于华夏保险来说，也降低了作业流程中各环节对人力的需求，有效缓解了业务量与人力不匹配的矛盾，降低审批业务量约50%，人均产能提高约43%。&lt;/p&gt;&lt;p&gt;华夏保险的微信理赔服务，涵盖微信报案、理赔申请、进度查询等11项功能，实现客户足不出户办理赔、随时随地了解理赔进度、理赔服务全流程透明公开。不仅如此，微信理赔还简化了客户理赔申请手续，节约了申请理赔的时间成本，提供了良好的理赔服务体验。&lt;/p&gt;&lt;p&gt;以华夏保险首个微信理赔案例为例，2016年10月1日，安徽高某因车祸抢救无效死亡，身前曾投保华夏护身福两全保险(2014)，2016年12月16日，其妻子使用微信理赔服务，通过“身份验证、填写理赔申请信息、上传资料”简单的三个步骤，仅用了2分钟便完成了理赔申请，1小时内便收到了结案短信通知，3个小时左右，100万元理赔款迅速到账。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2018-12-15 21:37:44', 'Bill Lanuer', '已发布');

-- ----------------------------
-- Table structure for ds_policy
-- ----------------------------
DROP TABLE IF EXISTS `ds_policy`;
CREATE TABLE `ds_policy` (
  `policy_id` int(3) NOT NULL AUTO_INCREMENT,
  `policy_user_id` int(3) NOT NULL,
  `policy_beneficiary_id` int(3) NOT NULL,
  `policy_to_id` int(3) NOT NULL,
  `policy_begin` varchar(255) NOT NULL,
  `policy_end` varchar(255) NOT NULL,
  `policy_insurance_id` int(3) NOT NULL,
  `policy_money` int(30) NOT NULL,
  PRIMARY KEY (`policy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_policy
-- ----------------------------
INSERT INTO `ds_policy` VALUES ('1', '2', '2', '3', '2016-12-06', '2022-12-08', '1', '1350000');
INSERT INTO `ds_policy` VALUES ('2', '2', '4', '3', '2016-08-12', '2019-12-03', '2', '265000');
INSERT INTO `ds_policy` VALUES ('3', '3', '2', '3', '2018-03-15', '2023-11-02', '3', '201200');
INSERT INTO `ds_policy` VALUES ('4', '2', '2', '3', '2020-02-11', '2022-10-10', '4', '1200000');

-- ----------------------------
-- Table structure for ds_user
-- ----------------------------
DROP TABLE IF EXISTS `ds_user`;
CREATE TABLE `ds_user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_idcard` varchar(18) NOT NULL,
  `user_gender` enum('女','男') DEFAULT NULL,
  `user_nationality` varchar(20) NOT NULL DEFAULT '汉族',
  `user_profession` varchar(50) DEFAULT NULL,
  `user_birth` varchar(10) DEFAULT NULL,
  `user_ismarried` enum('未婚','已婚') DEFAULT NULL,
  `user_phone` varchar(11) DEFAULT NULL,
  `user_pwd` varchar(50) NOT NULL DEFAULT '123',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ds_user
-- ----------------------------
INSERT INTO `ds_user` VALUES ('1', 'admin', '1', '男', '汉族', '', '', '未婚', 'admin', '123456');
INSERT INTO `ds_user` VALUES ('2', '李二', '13116019991211356X', '男', '回族', '保安', '1999-12-11', '未婚', '13162000123', '123456');
INSERT INTO `ds_user` VALUES ('3', '张三', '360156198801015618', '女', '满族', '无业', '1988-01-01', '已婚', '16895654910', '123456');
INSERT INTO `ds_user` VALUES ('4', '王一', '131026199812144657', '男', '汉族', '会计', '1998-12-14', '未婚', '18631654219', '123');
INSERT INTO `ds_user` VALUES ('5', '孙权', '16132516325', '男', 'VICa', 'QWa', '19923', '未婚', '16258853661', '123');
INSERT INTO `ds_user` VALUES ('7', '李白', '16132516325', '男', 'VICa', 'QWa', '19923', '已婚', '16258853661', '123');
