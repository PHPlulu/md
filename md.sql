/*
Navicat MySQL Data Transfer

Source Server         : bd
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : md

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-24 19:53:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth
-- ----------------------------
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `order_by_id` int(11) unsigned NOT NULL DEFAULT '0',
  `pid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `client_path` varchar(50) NOT NULL,
  `api_path` varchar(50) NOT NULL,
  `is_menu` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COMMENT='菜单权限表';

-- ----------------------------
-- Records of auth
-- ----------------------------
INSERT INTO `auth` VALUES ('1', '0', '0', '系统基础设置', 'index/index', '/', '1');
INSERT INTO `auth` VALUES ('2', '221', '1', '墓位信息设置', 'Cem/wlist', '/', '1');
INSERT INTO `auth` VALUES ('3', '0', '1', '墓位信息重置', '', '/', '1');
INSERT INTO `auth` VALUES ('4', '3', '1', '墓位类型设置', 'Cemsty/wlist', '/', '1');
INSERT INTO `auth` VALUES ('5', '0', '1', '墓位型号设置', 'CemModel/wlist', 'CemSty', '1');
INSERT INTO `auth` VALUES ('6', '0', '1', '墓位材质设置', 'CemMat/wlist', 'CemMat', '1');
INSERT INTO `auth` VALUES ('7', '0', '1', '墓位安葬类型设置', 'CemBurType/wlist', 'CemBurType', '1');
INSERT INTO `auth` VALUES ('8', '0', '1', '骨灰寄存位设置', 'System/sysjc', '/', '1');
INSERT INTO `auth` VALUES ('9', '0', '1', '寄存样式设置', 'System/sysys', '/', '1');
INSERT INTO `auth` VALUES ('10', '0', '1', '骨灰盒类型设置', 'System/syslx', '/', '1');
INSERT INTO `auth` VALUES ('11', '0', '1', '故者关系设置', 'Rel8Def/wlist', 'rel8def', '1');
INSERT INTO `auth` VALUES ('12', '0', '1', '客户来访方式设置', 'ComeMode/wlist', 'ComeMode', '1');
INSERT INTO `auth` VALUES ('13', '0', '1', '未成交原因设置', 'WayNotDeal/wlist', 'WayNotDeal', '1');
INSERT INTO `auth` VALUES ('14', '0', '1', '成交情况设置', 'SradeStatus/wlist', 'SradeStatus', '1');
INSERT INTO `auth` VALUES ('15', '0', '1', '咨询电话设置', 'Tel/wlist', '/', '1');
INSERT INTO `auth` VALUES ('16', '0', '1', '来访问渠道设置', 'Comeas/wlist', '/', '1');
INSERT INTO `auth` VALUES ('17', '0', '1', '来访次数设置', 'ComeNum/wlist', 'VisitNum', '1');
INSERT INTO `auth` VALUES ('21', '0', '1', '墓位状态设置', 'CemStatus/wlist', '/', '1');
INSERT INTO `auth` VALUES ('22', '0', '1', '来访渠道1设置', 'ComeChannel/t1', '/', '1');
INSERT INTO `auth` VALUES ('23', '0', '1', '来访渠道2设置', 'ComeChannel/t2', '/', '1');
INSERT INTO `auth` VALUES ('24', '0', '1', '来访渠道3设置', 'ComeChannel/t3', '/', '1');
INSERT INTO `auth` VALUES ('25', '0', '0', '墓位销售管理', 'Cemetery/index', '/', '1');
INSERT INTO `auth` VALUES ('26', '0', '1', '来访渠道3设置', 'ComeChannel/t3', '/', '1');
INSERT INTO `auth` VALUES ('27', '0', '25', '已落葬墓位管理', 'Tomb/zang', '/', '1');
INSERT INTO `auth` VALUES ('28', '0', '25', '故者落葬情况管理', 'Tomb/zlist', '/', '1');
INSERT INTO `auth` VALUES ('29', '0', '25', '故者落葬确认', 'Tomb/toset', '/', '1');
INSERT INTO `auth` VALUES ('30', '11', '25', '墓位销售', 'Tomb/sale', '/', '1');
INSERT INTO `auth` VALUES ('31', '10', '25', '预定维护', 'Tomb/tending', '/', '1');
INSERT INTO `auth` VALUES ('32', '10', '25', '已购墓位管理', 'Tomb/buyed', '/', '1');
INSERT INTO `auth` VALUES ('33', '0', '0', '寄存位销售管理', 'Deposit/index', '/', '1');
INSERT INTO `auth` VALUES ('34', '0', '33', '寄存位销售', 'Deposit/dep_sell', '/', '1');
INSERT INTO `auth` VALUES ('35', '0', '33', '寄存位定购维护', 'Deposit/dep_wh', '/', '1');
INSERT INTO `auth` VALUES ('36', '0', '33', '寄存位管理费过期提醒', 'Deposit/dep_tx', '/', '1');
INSERT INTO `auth` VALUES ('37', '0', '1', '骨灰寄存室', 'System/sysjct', '/', '0');
INSERT INTO `auth` VALUES ('41', '0', '1', '骨灰寄存层', 'System/sysjcc', '/', '0');
INSERT INTO `auth` VALUES ('42', '0', '1', '骨灰寄存位', 'System/sysjcw', '/', '0');
INSERT INTO `auth` VALUES ('43', '0', '1', '物品设置', 'Gset/gset', '/', '1');
INSERT INTO `auth` VALUES ('44', '0', '0', '物品销售管理', 'Gset/glist', '/', '1');
INSERT INTO `auth` VALUES ('45', '0', '44', '物品销售', 'Gset/glist', '/', '1');
INSERT INTO `auth` VALUES ('46', '0', '44', '骨灰盒销售', 'Gset/hlist', '/', '1');
INSERT INTO `auth` VALUES ('47', '0', '0', '财务管理', 'Finan/muwei', '/', '1');
INSERT INTO `auth` VALUES ('48', '0', '47', '墓位预订收费确认', 'Finan/muwei', '/', '1');
INSERT INTO `auth` VALUES ('49', '0', '47', '墓位预订退订确认', 'Finan/muweit', '/', '1');
INSERT INTO `auth` VALUES ('50', '0', '47', '墓位已购收费确认', 'Finan/muweis', '/', '1');
INSERT INTO `auth` VALUES ('51', '0', '47', '墓位已购退购确认', 'Finan/muweist', '/', '1');
INSERT INTO `auth` VALUES ('52', '0', '47', '碑文杂费收费确认', 'Finan/muweiz', '/', '1');
INSERT INTO `auth` VALUES ('53', '0', '47', '寄存位收费确认', 'Finan/syslist', '/', '1');
INSERT INTO `auth` VALUES ('54', '0', '47', '物品收费确认', 'Finan/glist', '/', '1');
INSERT INTO `auth` VALUES ('55', '0', '47', '骨灰盒收费确认', 'Finan/hlist', '/', '1');
INSERT INTO `auth` VALUES ('56', '10', '25', '已落葬墓位管理', 'Tomb/used', '/', '1');
INSERT INTO `auth` VALUES ('57', '0', '0', '销售统计', 'Statistic/glist', '/', '1');
INSERT INTO `auth` VALUES ('58', '0', '57', '物品销售统计', 'Statistic/glist', '/', '1');
INSERT INTO `auth` VALUES ('59', '0', '0', '系统管理', 'Stration/muweis', '/', '1');
INSERT INTO `auth` VALUES ('60', '0', '59', '墓位定购收费确认', 'Stration/muweis', '/', '1');
INSERT INTO `auth` VALUES ('61', '0', '59', '墓位定购发票统计', 'Stration/invoice', '/', '1');
INSERT INTO `auth` VALUES ('62', '0', '59', '墓位杂费单据管理', 'Stration/fee', '/', '1');
INSERT INTO `auth` VALUES ('63', '0', '59', '来访登记管理', 'Stration/visit_log', '/', '1');
INSERT INTO `auth` VALUES ('64', '0', '59', '销售员信息修改', 'Stration/user', '/', '1');
INSERT INTO `auth` VALUES ('65', '0', '59', '墓位销售锁定管理', 'Stration/lock', '/', '1');
INSERT INTO `auth` VALUES ('66', '0', '59', '墓位订购时间格式', 'Stration/format', '/', '0');
INSERT INTO `auth` VALUES ('67', '0', '25', '安葬日提醒', 'Tomb/azset', '/', '1');
INSERT INTO `auth` VALUES ('68', '0', '25', '祭祀日管理', 'Tomb/jtoady', '/', '1');
INSERT INTO `auth` VALUES ('69', '0', '25', '预定过期提醒', 'Tomb/sysyd', '/', '1');
INSERT INTO `auth` VALUES ('70', '0', '25', '管理费过期提醒', 'Tomb/glprice', '/', '1');
INSERT INTO `auth` VALUES ('71', '0', '57', '墓位状态统计', 'Statistic/mwsta', '/', '1');
INSERT INTO `auth` VALUES ('72', '0', '57', '墓位销售情况统计', 'Statistic/mwcount', '/', '1');
INSERT INTO `auth` VALUES ('73', '0', '57', '墓位预订情况统计', 'Statistic/mwyu', '/', '1');
INSERT INTO `auth` VALUES ('74', '0', '57', '墓位销售员业绩统计', 'Statistic/user', '/', '1');
INSERT INTO `auth` VALUES ('75', '0', '57', '墓位销售、剩余情况表', 'Statistic/mwsell', '/', '1');
INSERT INTO `auth` VALUES ('76', '0', '57', '来访及成交情况表', 'Statistic/come', '/', '1');
INSERT INTO `auth` VALUES ('77', '0', '57', '各渠道来访及成交情况表', 'Statistic/qudao', '/', '1');
INSERT INTO `auth` VALUES ('78', '0', '57', '各年龄段销售情况统计', 'Statistic/age', '/', '1');
INSERT INTO `auth` VALUES ('79', '0', '57', '墓位碑文杂费统计', 'Statistic/zf', '/', '1');
INSERT INTO `auth` VALUES ('80', '0', '57', '墓位碑文情况统计', 'Statistic/bw', '/', '1');
INSERT INTO `auth` VALUES ('81', '0', '57', '各个墓区、排售况分析', 'Statistic/sell', '/', '1');
INSERT INTO `auth` VALUES ('82', '0', '25', '墓位祭扫、安葬信息管理', 'Grave/glist', '/', '1');
INSERT INTO `auth` VALUES ('83', '0', '25', '墓位祭扫、安葬登记', 'Grave/grave', '/', '1');
INSERT INTO `auth` VALUES ('84', '0', '25', '客户来访登记', 'Contacts/visit_push', '/', '1');
INSERT INTO `auth` VALUES ('85', '0', '25', '客户来访信息管理', 'Contacts/visit_log', '/', '1');
INSERT INTO `auth` VALUES ('86', '0', '25', '查看联系人', 'Contacts/wlist', '/', '1');
INSERT INTO `auth` VALUES ('87', '0', '57', '墓位祭扫安葬情况统计', 'Statistic/jslist', '/', '1');
INSERT INTO `auth` VALUES ('88', '0', '57', '客服代表日销售统计', 'Statistic/daily', '/', '1');
INSERT INTO `auth` VALUES ('89', '0', '57', '客服代表月销售情况统计', 'Statistic/dailm', '/', '1');
INSERT INTO `auth` VALUES ('90', '0', '57', '墓位折扣统计', 'Statistic/zlist', '/', '1');
INSERT INTO `auth` VALUES ('91', '0', '57', '客服代表月销售情况对比', 'Statistic/maisell', '/', '1');
INSERT INTO `auth` VALUES ('92', '0', '57', '客服代表销售情况表', 'Statistic/sellcount', '/', '1');
INSERT INTO `auth` VALUES ('93', '0', '57', '同期销售情况对比', 'Statistic/ycount', '/', '1');

-- ----------------------------
-- Table structure for bw_info
-- ----------------------------
DROP TABLE IF EXISTS `bw_info`;
CREATE TABLE `bw_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cem_info_id` int(11) NOT NULL COMMENT '墓位ID',
  `kzys` tinyint(1) DEFAULT '0' COMMENT '刻字样式 2==普通刻字，3==喷砂刻字',
  `bwzt` tinyint(1) DEFAULT '0' COMMENT '碑文字体 2==隶书，3==魏碑，4==行楷',
  `ziti` tinyint(1) DEFAULT '0' COMMENT '简体繁体 2==简体，3==繁体',
  `shuajin` tinyint(1) DEFAULT '0' COMMENT '刷金 2==是，3==否',
  `tjb` tinyint(1) DEFAULT '0' COMMENT '贴金箔 2==是，3==否',
  `cxsl` tinyint(1) DEFAULT '0' COMMENT '瓷像数量 2==单人，3==双人',
  `cxsc` tinyint(1) DEFAULT '0' COMMENT '瓷像颜色 2==黑白，3==色彩',
  `cxcc` tinyint(1) DEFAULT '0' COMMENT '瓷像尺寸',
  `cxxz` tinyint(1) DEFAULT '0' COMMENT '瓷像形状 2==椭圆，3==方形',
  `dysl` tinyint(1) DEFAULT '0' COMMENT '影雕数量',
  `dyxz` tinyint(1) DEFAULT '0' COMMENT '影雕形状',
  `mname` char(10) DEFAULT NULL COMMENT '母姓名',
  `fname` char(10) DEFAULT NULL,
  `uaddress` varchar(255) DEFAULT NULL,
  `zangtime` int(11) DEFAULT NULL COMMENT '安葬日期',
  `mstime` int(11) DEFAULT NULL COMMENT '母生于',
  `mgtime` int(11) DEFAULT NULL COMMENT '母故于',
  `fstime` int(11) DEFAULT NULL COMMENT '父生于',
  `fgtime` int(11) DEFAULT NULL COMMENT '父故于',
  `beimian` text COMMENT '背面碑文内容',
  `kouli` text COMMENT '叩立',
  `bcont` text COMMENT '备注',
  `cem_id` int(11) DEFAULT NULL COMMENT '墓园ID',
  `staff_id` int(11) DEFAULT NULL COMMENT '业务员',
  `ztime` int(11) DEFAULT NULL,
  `dead_id` int(11) DEFAULT NULL COMMENT '落葬ID',
  PRIMARY KEY (`id`,`cem_info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='碑文 内容 参数';

-- ----------------------------
-- Records of bw_info
-- ----------------------------
INSERT INTO `bw_info` VALUES ('2', '268', '0', '2', '2', '2', '3', '2', '2', '4', '2', '2', '2', '暗示', '暗示', '爱的爱的爱的爱的', '1532534400', '1532534400', '1532534400', '1531670400', '1531670400', '爱的', '暗示', '爱的', '4', '14', '1531382649', null);
INSERT INTO `bw_info` VALUES ('5', '274', '2', '2', '2', '2', '2', '0', '0', '0', '0', '0', '0', '1', null, '1', '1532534400', '1532534400', '1532534400', null, null, '1', '1', '1', '4', null, null, '24');
INSERT INTO `bw_info` VALUES ('6', '282', '2', '2', '2', '2', '2', '2', '3', '6', '2', '2', '2', '传奇', '', '传奇传奇传奇传奇', '1532620800', null, null, '1532620800', '1532620800', '传奇传奇传奇', '传奇传奇', '传奇传奇传奇传奇', '4', null, null, '46');
INSERT INTO `bw_info` VALUES ('7', '410', '3', '0', '3', '0', '0', '0', '0', '0', '0', '0', '0', '123', '123', '12', '1534780800', '1532880000', '1533484800', '1532880000', '1535990400', '123', '123', null, '17', null, null, '95');
INSERT INTO `bw_info` VALUES ('8', '635', '2', '2', '2', '2', '2', '2', '2', '4', '2', '2', '2', null, null, null, null, null, null, null, null, null, null, null, '21', null, null, null);
INSERT INTO `bw_info` VALUES ('9', '637', '3', '4', '2', '2', '2', '2', '2', '4', '3', '2', '2', null, null, null, null, null, null, null, null, null, null, null, '21', null, null, null);
INSERT INTO `bw_info` VALUES ('10', '693', '2', '2', '2', '2', '2', '2', '2', '4', '2', '2', '2', null, null, null, null, null, null, null, null, null, null, null, '30', null, null, null);
INSERT INTO `bw_info` VALUES ('11', '726', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, '31', null, null, null);
INSERT INTO `bw_info` VALUES ('12', '762', '3', '2', '2', '2', '3', '3', '2', '6', '2', '0', '0', '吴文', '无人', '山东省', '1534262400', '1533744000', '1534176000', '1533744000', '1534953600', '养育之恩 \n永世不忘', '儿女', '按照那给我', '32', null, null, '93');
INSERT INTO `bw_info` VALUES ('13', '704', '2', '2', '3', '0', '2', '2', '2', '5', '3', '0', '2', '吴文', '无人', '山东省', '1534262400', '1533484800', '1532880000', '1532880000', '1533571200', '养育之恩\n永世不忘', '儿女', null, '29', null, null, null);
INSERT INTO `bw_info` VALUES ('14', '753', '2', '3', '2', '2', '2', '2', '2', '4', '2', '3', '3', '吴文', '无人', '山东省', '1533052800', '1533657600', '1534262400', '1534262400', '1534176000', '养育之恩\n永世不忘', '儿女', null, '32', null, null, null);
INSERT INTO `bw_info` VALUES ('15', '468', '3', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '123', '1', '1', '1533052800', '1532793600', '1533484800', '1532966400', '1535385600', '1', '1', null, '18', null, null, null);
INSERT INTO `bw_info` VALUES ('16', '469', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, null, null, null, null, null, null, null, null, null, null, '18', null, null, null);

-- ----------------------------
-- Table structure for bw_num
-- ----------------------------
DROP TABLE IF EXISTS `bw_num`;
CREATE TABLE `bw_num` (
  `id` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL COMMENT '计数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='杂费打印计数';

-- ----------------------------
-- Records of bw_num
-- ----------------------------
INSERT INTO `bw_num` VALUES ('1', '1533273851', '10');

-- ----------------------------
-- Table structure for bw_zf
-- ----------------------------
DROP TABLE IF EXISTS `bw_zf`;
CREATE TABLE `bw_zf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `z_t` int(11) DEFAULT NULL COMMENT '特大字数量',
  `z_t_k` int(11) DEFAULT NULL COMMENT '特大字刻字单价',
  `z_t_b` int(11) DEFAULT NULL COMMENT '特大字贴金箔单价',
  `z_t_k_p` int(11) DEFAULT NULL COMMENT '刻字金额',
  `z_t_b_p` int(11) DEFAULT NULL COMMENT '贴金箔金额',
  `z_z` int(11) DEFAULT NULL COMMENT '中字数量',
  `z_z_k` int(11) DEFAULT NULL COMMENT '刻字单价',
  `z_z_b` int(11) DEFAULT NULL COMMENT '贴金箔单价',
  `z_z_k_p` int(11) DEFAULT NULL COMMENT '刻字金额',
  `z_z_b_p` int(11) DEFAULT NULL COMMENT '贴金箔金额',
  `z_d` int(11) DEFAULT NULL COMMENT '大字数量',
  `z_d_k` int(11) DEFAULT NULL,
  `z_d_b` int(11) DEFAULT NULL,
  `z_d_k_p` int(11) DEFAULT NULL,
  `z_d_b_p` int(11) DEFAULT NULL,
  `z_x` int(11) DEFAULT NULL COMMENT '小字数量',
  `z_x_k` int(11) DEFAULT NULL,
  `z_x_b` int(11) DEFAULT NULL,
  `z_x_k_p` int(11) DEFAULT NULL,
  `z_x_b_p` int(11) DEFAULT NULL,
  `zk_sum` decimal(10,2) DEFAULT NULL COMMENT '刻字金额总计',
  `zb_sum` decimal(10,2) DEFAULT NULL COMMENT '贴金箔金额总计',
  `z_beizhu` text COMMENT '字体备注',
  `cx` tinyint(1) DEFAULT NULL COMMENT '瓷像是否选中  2==选中',
  `cx_type` tinyint(1) DEFAULT NULL COMMENT '类型 2==单人，3==双人',
  `cx_num` int(11) DEFAULT NULL COMMENT '瓷像数量',
  `cx_price` int(11) DEFAULT NULL COMMENT '瓷像单价',
  `cx_sum` decimal(10,2) DEFAULT NULL COMMENT '瓷像总价',
  `lb` tinyint(1) DEFAULT NULL COMMENT '封门立碑是否选中 2==选中，3==未选中',
  `lb_type` tinyint(1) DEFAULT NULL COMMENT '2==首次，3==二次',
  `lb_price` int(11) DEFAULT NULL COMMENT '单价',
  `lb_sum` decimal(10,2) DEFAULT NULL COMMENT '总价',
  `tj` tinyint(1) DEFAULT NULL COMMENT '家族台阶  是否选中 2==选中，3==未选中',
  `tj_num` int(11) DEFAULT NULL COMMENT '数量',
  `tj_price` int(11) DEFAULT NULL COMMENT '单价',
  `tj_sum` decimal(10,2) DEFAULT NULL COMMENT '总价',
  `zs` tinyint(1) DEFAULT NULL COMMENT '墓穴装饰 是否选中 2==选中，3==未选中',
  `zs_type` tinyint(1) DEFAULT NULL COMMENT '类型 2==花岗岩，3==黑理石',
  `zs_price` int(11) DEFAULT NULL COMMENT '单价',
  `zs_sum` decimal(10,2) DEFAULT NULL COMMENT '总价',
  `bzj` tinyint(1) DEFAULT NULL COMMENT '不干胶 2==选中，3==未选中',
  `bzj_type` tinyint(1) DEFAULT NULL COMMENT '2==单人,3==双人',
  `bzj_price` int(11) DEFAULT NULL COMMENT '单价',
  `bzj_sum` decimal(10,2) DEFAULT NULL COMMENT '总价',
  `sum` decimal(10,2) DEFAULT NULL COMMENT '合计总价',
  `cem_id` int(11) DEFAULT NULL COMMENT '墓园',
  `cx_beizhu` text COMMENT '瓷像备注',
  `lb_beizhu` text COMMENT '封门立碑备注',
  `tj_beizhu` text COMMENT '家族台阶备注',
  `zs_beizhu` text COMMENT '墓穴装饰 备注',
  `bzj_beizhu` text COMMENT '不干胶备注',
  `sta` tinyint(1) DEFAULT '3' COMMENT '是否已付款 2==已付款，3==未付款',
  `ztime` int(11) DEFAULT NULL COMMENT '杂费设置日期',
  `dsum` varchar(255) DEFAULT NULL COMMENT '人民币大写',
  `cem_info_id` int(11) DEFAULT NULL COMMENT '墓位',
  `cem_area_id` int(11) DEFAULT NULL,
  `cem_row_id` int(11) DEFAULT NULL,
  `dtime` int(11) DEFAULT NULL COMMENT '最后打印时间',
  `dset` int(11) DEFAULT NULL COMMENT '打印次数',
  `staff_id` int(11) DEFAULT NULL COMMENT '操作员',
  `dead_id` int(11) DEFAULT NULL COMMENT '故者ID',
  `jnum` int(11) DEFAULT NULL COMMENT '缴款次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='碑文杂费';

-- ----------------------------
-- Records of bw_zf
-- ----------------------------
INSERT INTO `bw_zf` VALUES ('2', '1', '1', '1', '1', '1', '3', '3', '3', '9', '9', '2', '2', '2', '4', '4', '4', '4', '4', '16', '16', '30.00', '30.00', '8', '2', '2', '5', '5', '25.00', '2', '2', '6', '6.00', '0', '7', '7', '49.00', '0', '2', '8', '8.00', '2', '2', '8', '8.00', '156.00', '4', '8', '8', '8', '8', '8', '3', '1532681896', '壹佰伍拾陆圆整', '282', '1', '6', '1531382931', '2', '14', null, null);
INSERT INTO `bw_zf` VALUES ('3', '1', '1', '1', '1', '1', '3', '3', '3', '9', '9', '2', '2', '2', '4', '4', '4', '4', '4', '16', '16', '30.00', '30.00', '8', '2', '2', '5', '5', '25.00', '2', '2', '6', '6.00', '2', '7', '7', '49.00', '2', '2', '8', '8.00', '2', '2', '8', '8.00', '156.00', '4', '8', '8', '8', '8', '8', '3', '1532681896', '壹佰伍拾陆圆整', '282', '1', '6', '1531382931', '1', '14', null, null);
INSERT INTO `bw_zf` VALUES ('4', '1', '1', '1', '1', '1', '3', '3', '3', '9', '9', '2', '2', '2', '4', '4', '4', '4', '4', '16', '16', '30.00', '30.00', '8', null, '2', '5', '5', '25.00', null, '2', '6', '6.00', null, '7', '7', '49.00', null, '2', '8', '8.00', null, '2', '8', '8.00', '156.00', '4', '8', '8', '8', '8', '8', '2', '1532681896', '壹佰伍拾陆圆整', '282', '1', '6', '1531382931', '1', '14', null, null);
INSERT INTO `bw_zf` VALUES ('5', '1', '1', '1', '1', '1', '2', '2', '2', '4', '4', '1', '1', '1', '1', '1', '2', '2', '2', '4', '4', '10.00', '10.00', '喜欢骑', '2', '2', '3', '3', '9.00', '2', '2', '3', '3.00', '2', '3', '3', '0.00', '2', '2', '3', '3.00', '2', '2', '3', '3.00', '38.00', '4', '喜欢骑', '喜欢骑', '喜欢骑', '喜欢骑', '喜欢骑', '2', '1532691842', '叁拾捌圆整', '282', '1', '6', null, '1', '14', '46', null);
INSERT INTO `bw_zf` VALUES ('6', '1', '1', '1', '1', '1', '3', '3', '3', '9', '9', '2', '2', '2', '4', '4', '4', '4', '4', '16', '16', '30.00', '30.00', '8', null, '2', '5', '5', '25.00', null, '2', '6', '6.00', null, '7', '7', '49.00', null, '2', '8', '8.00', null, '2', '8', '8.00', '156.00', '4', '8', '8', '8', '8', '8', '2', '1532681896', '壹佰伍拾陆圆整', '282', '1', '6', null, null, '14', null, null);

-- ----------------------------
-- Table structure for cem
-- ----------------------------
DROP TABLE IF EXISTS `cem`;
CREATE TABLE `cem` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COMMENT='墓园';

-- ----------------------------
-- Records of cem
-- ----------------------------
INSERT INTO `cem` VALUES ('23', '天福园', '第一个墓区', null);
INSERT INTO `cem` VALUES ('28', '天瑞园', '第二个墓区', null);
INSERT INTO `cem` VALUES ('29', '天泽园', '第三个墓区', null);
INSERT INTO `cem` VALUES ('30', '天圣园', ' 第四个墓区', null);
INSERT INTO `cem` VALUES ('31', '测试1', '第五个墓区', null);
INSERT INTO `cem` VALUES ('32', '天文园', '第六个墓区', null);

-- ----------------------------
-- Table structure for cem_area
-- ----------------------------
DROP TABLE IF EXISTS `cem_area`;
CREATE TABLE `cem_area` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cem_id` int(11) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `sn` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COMMENT='墓区';

-- ----------------------------
-- Records of cem_area
-- ----------------------------
INSERT INTO `cem_area` VALUES ('112', '30', 'A区', null);
INSERT INTO `cem_area` VALUES ('113', '30', 'B区', null);
INSERT INTO `cem_area` VALUES ('114', '30', 'C区', null);
INSERT INTO `cem_area` VALUES ('115', '29', 'A区', null);
INSERT INTO `cem_area` VALUES ('116', '23', 'A区', null);
INSERT INTO `cem_area` VALUES ('117', '31', 'A区', null);
INSERT INTO `cem_area` VALUES ('118', '32', 'A区', null);
INSERT INTO `cem_area` VALUES ('119', '32', 'B区', null);
INSERT INTO `cem_area` VALUES ('120', '32', 'C区', null);

-- ----------------------------
-- Table structure for cem_info
-- ----------------------------
DROP TABLE IF EXISTS `cem_info`;
CREATE TABLE `cem_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `long_title` varchar(100) DEFAULT NULL,
  `cem_id` int(11) unsigned NOT NULL,
  `cem_area_id` int(11) unsigned NOT NULL,
  `cem_row_id` int(11) unsigned NOT NULL,
  `price` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '原价',
  `deal_price` decimal(11,2) DEFAULT NULL,
  `pay_sum_money` decimal(11,2) unsigned DEFAULT '0.00' COMMENT '支付总金额 应付总额',
  `manage_money` decimal(11,2) unsigned DEFAULT '0.00' COMMENT '管理费',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '付款状态 0 未 1  已付款 . 2 支付定金,3==已退订确认',
  `material` int(11) unsigned NOT NULL COMMENT '材质',
  `style` int(11) unsigned NOT NULL COMMENT '类型',
  `model` int(11) unsigned NOT NULL COMMENT '型号',
  `status` int(11) NOT NULL COMMENT '状态 38==空，39==预订,44==付款（已定），41==已葬',
  `length` decimal(11,2) unsigned NOT NULL,
  `width` decimal(11,2) unsigned NOT NULL,
  `acreage` decimal(11,2) NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `contacts_id` int(11) unsigned NOT NULL DEFAULT '0',
  `reserve_date` int(11) DEFAULT NULL COMMENT '预定日期',
  `remind_date` int(11) DEFAULT NULL COMMENT '提醒日期：',
  `reserve_money` decimal(11,2) DEFAULT '0.00' COMMENT '定金',
  `unpaid_money` decimal(11,2) DEFAULT NULL COMMENT '除去定金还差多少钱(余额）',
  `salesman` int(11) unsigned DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `sta` tinyint(1) DEFAULT '3' COMMENT '是否已取消 2==预订墓位退订，3==不是（默认），4==已购墓位退订',
  `money` int(11) DEFAULT '0' COMMENT '预订--成交价格',
  `beizhu` text,
  `manage_year` int(11) DEFAULT NULL COMMENT '管理费-年限',
  `manage_sum_money` decimal(10,2) DEFAULT '0.00' COMMENT '管理费--总额',
  `mw_price` decimal(10,2) DEFAULT '0.00' COMMENT '墓位费',
  `settime` char(20) DEFAULT NULL COMMENT '定购日期',
  `starttime` char(20) DEFAULT NULL COMMENT '使用开始',
  `endtime` char(20) DEFAULT '0' COMMENT '使用结束',
  `mwnum` int(11) DEFAULT NULL COMMENT '墓位号',
  `lnum` char(15) DEFAULT NULL COMMENT '当日销售流水号',
  `hnum` char(17) DEFAULT NULL COMMENT '合同编号',
  `manage_time` int(11) DEFAULT NULL COMMENT '管理费过期时间',
  `znum` char(18) DEFAULT NULL COMMENT '墓位证编号',
  `suo` tinyint(1) DEFAULT '3' COMMENT '墓位锁定 2==锁定，3==未锁定',
  `suo_staff_id` int(11) DEFAULT NULL COMMENT '锁定墓位  业务员',
  `suo_time` int(11) DEFAULT NULL,
  `flg` tinyint(1) DEFAULT NULL COMMENT '购买标识  2==直接购买，3==补交预订尾款',
  `s_staff_id` int(11) DEFAULT NULL COMMENT '折扣授权人',
  `s_time` int(11) DEFAULT NULL COMMENT '授权时间',
  `s_sta` tinyint(1) DEFAULT '3' COMMENT '授权标识 2==已折扣授权，3==未折扣',
  `s_lv` char(10) DEFAULT NULL COMMENT '折扣率',
  `price_m` varchar(20) DEFAULT NULL COMMENT '原价格 大写',
  `money_m` varchar(20) DEFAULT NULL COMMENT '成交价格 大写',
  `hnum_s` varchar(17) DEFAULT NULL COMMENT '合同编号 短编号',
  `pnum` int(11) DEFAULT NULL COMMENT '打印次数',
  `ptimeone` int(11) DEFAULT NULL COMMENT '第一次 开票时间',
  `pmoneyone` int(11) DEFAULT NULL COMMENT '第一次打印金额',
  `ptimetwo` int(11) DEFAULT NULL COMMENT '第二次 开票日期',
  `pmoneytwo` int(11) DEFAULT NULL COMMENT '第二次打印金额',
  `pfnumone` varchar(255) DEFAULT NULL COMMENT '第一次打印发票号',
  `pfnumtwo` varchar(255) DEFAULT NULL COMMENT '第二次打印发票号',
  `fa_time_one` int(11) DEFAULT NULL COMMENT '第一次 开发票日期',
  `fa_time_two` int(11) DEFAULT NULL COMMENT '第二次 开发票日期',
  `open` tinyint(1) DEFAULT '3' COMMENT '开启标识  2==有人在洽谈，3==正常',
  `qt_time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=768 DEFAULT CHARSET=utf8mb4 COMMENT='墓位';

-- ----------------------------
-- Records of cem_info
-- ----------------------------
INSERT INTO `cem_info` VALUES ('261', '1号', '22-2区-2区-1号1', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', '11', null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('262', '2号', '22-2区-2区-2号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '22', '2018', '2018', '222.00', '0.00', '11', null, '3', '1', null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('263', '3号', '22-2区-2区-3号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '22', '1530633600', '1530633600', '123.00', '0.00', '11', null, '3', '1', null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('264', '4号', '22-2区-2区-4号', '4', '1', '6', '100.00', null, null, null, '3', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '0', '2018', '2018', '222224.00', '0.00', '11', null, '2', '1', null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('265', '5号', '22-2区-2区-5号', '4', '1', '6', '100.00', null, null, null, '3', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '35', '2018', '2018', '100.00', '0.00', '11', null, '2', '1', null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('266', '6号', '22-2区-2区-6号', '4', '1', '7', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '2', '2018', '2018', '0.00', '0.00', '11', null, '2', '11', null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('267', '7号', '22-2区-2区-7号', '4', '1', '6', '100.00', null, '124.00', '1.00', '1', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '38', '1530720000', '1530720000', '123.00', '123.00', '11', null, '3', '123', '1111', '1', '1.00', null, '1532707200', '1532707200', '1532707200', '267', '20180728171631', 'TQ20180728-3', '1535908591', 'Cem20180728171631', '3', null, null, '3', null, null, '3', null, null, null, '20180728-3', '3', '1532863231', '123', '1533295128', '123', '2', '', '1533295128', null, '3', null);
INSERT INTO `cem_info` VALUES ('268', '8号', '22-2区-2区-8号', '4', '1', '8', '100.00', null, '1353.00', '246.00', '1', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '1530547200', '14', null, '37', null, null, '0.00', null, '14', null, '3', '123', '111', '20', '133.00', null, '1530720000', '1533744000', '1533830400', '268', '20180705115645', 'TQ20180705115645', '1593028843', 'Cem20180705115645', '3', null, null, '3', null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('269', '9号', '22-2区-2区-9号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '22', '1530633600', '1530633600', '11111.00', '0.00', '11', null, '3', '111', null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('270', '10号', '22-2区-2区-10号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '1', '2018', '2018', '10.00', '90.00', '11', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', '14', '1531875546', null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('271', '11号', '22-2区-2区-11号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '0', '2018', '2018', '222.00', '0.00', '11', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('272', '12号', '22-2区-2区-12号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '0', '2018', '2018', '59.00', '50.00', '13', null, '2', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('273', '13号', '22-2区-2区-13号', '4', '1', '6', '100.00', null, '506.00', '22.00', '1', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '33', '2018', '2018', '12345.00', '0.00', '11', null, '4', null, null, '22', '484.00', '22.00', '1530547200', '1530547200', '1530547200', null, null, null, null, null, '3', null, null, '3', null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('274', '14号', '22-2区-2区-14号', '4', '1', '11', '100.00', null, null, null, '1', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '1530547200', '14', null, '35', '1530633600', '1530633600', '1.00', '1.00', '11', null, '3', '1234', '111111', null, null, null, null, '-28800', '-28800', '274', '20180704112614', 'TQ20180704112614', null, null, '3', null, null, '3', null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('275', '15号', '22-2区-2区-15号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', '14', '1534241686', null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('276', '16号', '22-2区-2区-16号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '29', '1530633600', '1530633600', '123.00', '0.00', '11', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('277', '17号', '22-2区-2区-17号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('278', '18号', '22-2区-2区-18号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('279', '19号', '22-2区-2区-19号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '2018', '14', null, '41', '1530892800', '1530892800', '1.00', '1.00', '11', null, '3', '1', null, null, null, null, null, null, null, '279', '20180707153132', 'TQ20180707153132', null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('280', '20号', '22-2区-2区-20号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('281', '21号', '22-2区-2区-21号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('282', '22号', '22-2区-2区-22号', '4', '1', '6', '100.00', null, '121.00', '11.00', '0', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '2018', '14', null, '20', '1530547200', '1530547200', '123321.00', '0.00', '11', null, '3', null, '爱的', '11', '121.00', null, '1531929600', '1531929600', '1531929600', '282', '20180719174050', 'TQ20180719174050', '1566236450', 'Cem20180719174050', '3', null, null, '3', null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('283', '23号', '22-2区-2区-23号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('284', '24号', '22-2区-2区-24号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('285', '25号', '22-2区-2区-25号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('286', '26号', '22-2区-2区-26号', '4', '1', '6', '100.00', null, '101.00', '1.00', '1', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '52', null, null, '0.00', null, '11', null, '3', '100', null, '1', '1.00', null, '1532707200', '1532707200', '1532707200', '286', '20180728171449', 'TQ20180728-1', '1535908489', 'Cem20180728171449', '3', null, null, '2', null, null, '3', null, '壹佰圆', '壹佰圆整', '20180728-1', '1', '1534914848', '100', null, null, '', null, null, '1534914848', '3', null);
INSERT INTO `cem_info` VALUES ('287', '27号', '22-2区-2区-27号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('288', '28号', '22-2区-2区-28号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('289', '29号', '22-2区-2区-29号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('290', '30号', '22-2区-2区-30号', '4', '1', '6', '100.00', null, '121.00', '11.00', '0', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '2018', '14', null, '13', '1530115200', '1530115200', '111.00', '0.00', '11', null, '3', '11', '11', '11', '121.00', null, '1531929600', '1531929600', '1531929600', '290', '20180719173727', 'TQ20180719173727', '1566236247', 'Cem20180719173727', '3', null, null, '3', null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('291', '31号', '22-2区-2区-31号', '4', '1', '6', '100.00', null, '2222332.00', '11.00', '0', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '2018', '14', null, '28', '1530201600', '1530201600', '2222211.00', '2222211.00', '11', null, '3', '11', '1', '11', '121.00', null, '1531929600', '1531929600', '1531929600', '291', '20180719173454', 'TQ20180719173454', '1566236094', 'Cem20180719173454', '3', null, null, '3', null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('292', '32号', '22-2区-2区-32号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '0', '2018', '2018', '3333.00', '0.00', '11', null, '2', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('293', '33号', '22-2区-2区-33号', '4', '1', '9', '1111.00', null, '1.00', '1.00', '1', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '1530547200', '14', null, '13', '1530115200', '1530115200', '11.00', '0.00', '11', null, '3', null, '', '1', '1.00', null, '1530633600', '1530633600', '1530633600', null, null, null, null, null, '3', null, null, '2', null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('294', '34号', '22-2区-2区-34号', '4', '1', '6', '100.00', null, null, null, '3', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '29', '1530115200', '1530115200', '88.00', '88.00', '11', null, '2', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('295', '35号', '22-2区-2区-35号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('296', '36号', '22-2区-2区-36号', '4', '1', '6', '100.00', null, '101.00', '1.00', '1', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '51', null, null, '0.00', null, '11', null, '3', '100', null, '1', '1.00', null, '1532707200', '1532707200', '1532707200', '296', '20180728171039', 'TQ20180728171039', '1535908239', 'Cem20180728171039', '3', null, null, '2', null, null, '3', null, '壹佰圆', '壹佰圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('297', '37号', '22-2区-2区-37号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('298', '38号', '22-2区-2区-38号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '2018', '14', null, '44', '1532016000', '1532016000', '11.00', '84.00', '11', null, '3', '95', null, null, null, null, null, null, null, '298', '20180720102059', 'TQ20180720102059', null, null, '3', null, null, null, '14', '1530633600', '2', '0.9500', null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('299', '39号', '22-2区-2区-39号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('300', '40号', '22-2区-2区-40号', '4', '1', '6', '100.00', null, '64.00', '1.00', '0', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '2018', '14', null, '42', '1531929600', '1531929600', '22.00', '63.00', '11', null, '3', '85', '1111', '1', '1.00', null, '1531929600', '1531929600', '1531929600', '300', '20180719171743', 'TQ20180719171743', '1535131063', 'Cem20180719171743', '3', null, null, '3', '14', '1530633600', '2', '0.9500', null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('301', '41号', '22-2区-2区-41号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '2018', '14', null, '35', '1531929600', '1531929600', '11.00', '84.00', '11', null, '3', '95', null, null, null, null, null, null, null, '301', '20180719174214', 'TQ20180719174214', null, null, '3', null, null, null, '14', '1530633600', '2', '0.8500', null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('302', '42号', '22-2区-2区-42号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('303', '43号', '22-2区-2区-43号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('304', '44号', '22-2区-2区-44号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('305', '45号', '22-2区-2区-45号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('306', '46号', '22-2区-2区-46号', '4', '1', '10', '1111.00', null, '595.00', '22.00', '1', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '1530547200', '14', null, '20', '1530547200', '1530547200', '111.00', '111.00', '11', null, '3', '111', null, '22', '484.00', null, '1530633600', '1530633600', '1530633600', null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, '4', '1530633600', '111', '1532863874', '111', '1', '1', '1530633600', '1530633600', '3', null);
INSERT INTO `cem_info` VALUES ('307', '47号', '22-2区-2区-47号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('308', '48号', '22-2区-2区-48号', '4', '1', '6', '100.00', null, '2.00', '1.00', '1', '35', '7', '37', '41', '60.00', '20.00', '120.00', '13', '1530547200', '14', null, '35', null, null, '0.00', null, '11', null, '3', '1', '111', '1', '1.00', null, '1530633600', '1530633600', '1530633600', null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('309', '49号', '22-2区-2区-49号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('310', '50号', '22-2区-2区-50号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('311', '51号', '22-2区-2区-51号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('312', '52号', '22-2区-2区-52号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('313', '53号', '22-2区-2区-53号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('314', '54号', '22-2区-2区-54号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('315', '55号', '22-2区-2区-55号', '4', '1', '6', '100.00', null, '219.00', '11.00', '0', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '43', null, null, '0.00', null, '11', null, '3', '98', null, '11', '121.00', null, '1532016000', '1532016000', '1532016000', '315', '20180720091711', 'TQ20180720091711', '1566292631', 'Cem20180720091711', '3', null, null, '2', '14', '1530633600', '2', '0.7500', null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('316', '56号', '22-2区-2区-56号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('317', '57号', '22-2区-2区-57号', '4', '1', '6', '100.00', null, '12.00', '1.00', '0', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '45', null, null, '0.00', null, '11', null, '3', '11', null, '1', '1.00', null, '1532016000', '1532016000', '1532016000', '317', '20180720102251', 'TQ20180720102251', '1535192571', 'Cem20180720102251', '3', null, null, '2', '14', '1530633600', '2', '0.1100', null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('318', '58号', '22-2区-2区-58号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('319', '59号', '22-2区-2区-59号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '2018', '14', null, '47', '1532361600', '1532361600', '11.00', '77.00', '11', null, '3', '88', null, null, null, null, null, null, null, '319', '20180724092029', 'TQ20180724092029', null, null, '3', null, null, null, '14', '1532395229', '2', '0.8800', '壹佰圆', '捌拾捌圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('320', '60号', '22-2区-2区-60号', '4', '1', '6', '100.00', null, '209.00', '11.00', '0', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '49', null, null, '0.00', null, '11', null, '3', '88', null, '11', '121.00', null, '1532361600', '1532361600', '1532361600', '320', '20180724093614', 'TQ20180724093614', '1566639374', 'Cem20180724093614', '3', null, null, '2', '14', '1532396174', '2', '0.8800', '壹佰圆', '捌拾捌圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('321', '61号', '22-2区-2区-61号', '4', '1', '6', '100.00', null, '0.00', '0.00', '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '2018', '14', '0000-00-00 00:00:00', '48', '1532361600', '1532361600', '11.00', '77.00', '11', '', '3', '88', null, '0', '0.00', null, '0', '0', '0', '321', '20180724092537', 'TQ20180724092537', null, null, '3', null, null, null, '14', '1532395537', '2', '0.8800', '壹佰圆', '捌拾捌圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('322', '62号', '22-2区-2区-62号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('323', '63号', '22-2区-2区-63号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('324', '64号', '22-2区-2区-64号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('325', '65号', '22-2区-2区-65号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('326', '66号', '22-2区-2区-66号', '4', '1', '6', '100.00', null, '101.00', '1.00', '0', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '53', null, null, '0.00', null, '11', null, '3', '100', null, '1', '1.00', null, '1532707200', '1532707200', '1532707200', '326', '20180728171546', 'TQ20180728-2', '1535908546', 'Cem20180728171546', '3', null, null, '2', null, null, '3', null, '壹佰圆', '壹佰圆整', '20180728-2', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('327', '67号', '22-2区-2区-67号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('328', '68号', '22-2区-2区-68号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('329', '69号', '22-2区-2区-69号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('330', '70号', '22-2区-2区-70号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('331', '71号', '22-2区-2区-71号', '4', '1', '6', '100.00', null, '12.00', '3.00', '0', '35', '7', '37', '42', '60.00', '20.00', '120.00', '13', '1530547200', '13', null, '31', null, null, '0.00', null, '11', null, '3', null, null, '3', '9.00', '3.00', '1530547200', '1530547200', '1530547200', null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('332', '72号', '22-2区-2区-72号', '4', '1', '6', '100.00', null, '6.00', '2.00', '0', '35', '7', '37', '42', '60.00', '20.00', '120.00', '13', '1530547200', '1', null, '19', null, null, '0.00', null, '11', null, '3', null, null, '2', '4.00', '2.00', '0', '0', '0', null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('333', '73号', '22-2区-2区-73号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('334', '74号', '22-2区-2区-74号', '4', '1', '6', '100.00', null, null, null, '2', '35', '7', '37', '39', '60.00', '20.00', '120.00', '13', '2018', '14', null, '46', '1532361600', '1532361600', '11.00', '87.00', '11', null, '3', '98', null, null, null, null, null, null, null, '334', '20180724091421', 'TQ20180724091421', null, null, '3', null, null, null, '14', '1532394861', '2', '0.9800', '壹佰圆', '捌拾捌圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('335', '75号', '22-2区-2区-75号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('336', '76号', '22-2区-2区-76号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('337', '77号', '22-2区-2区-77号', '4', '1', '6', '100.00', null, '198.00', '11.00', '0', '35', '7', '37', '44', '60.00', '20.00', '120.00', '13', '2018', '14', null, '50', null, null, '0.00', null, '11', null, '3', '77', null, '11', '121.00', null, '1532361600', '1532361600', '1532361600', '337', '20180724093719', 'TQ20180724093719', '1566639439', 'Cem20180724093719', '3', null, null, '2', '14', '1532396239', '2', '0.7700', '壹佰圆', '柒拾柒圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('338', '78号', '22-2区-2区-78号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('339', '79号', '22-2区-2区-79号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('340', '80号', '22-2区-2区-80号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('341', '81号', '22-2区-2区-81号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('342', '82号', '22-2区-2区-82号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('343', '83号', '22-2区-2区-83号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('344', '84号', '22-2区-2区-84号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('345', '85号', '22-2区-2区-85号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('346', '86号', '22-2区-2区-86号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('347', '87号', '22-2区-2区-87号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('348', '88号', '22-2区-2区-88号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('349', '89号', '22-2区-2区-89号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('350', '90号', '22-2区-2区-90号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('351', '91号', '22-2区-2区-91号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('352', '92号', '22-2区-2区-92号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('353', '93号', '22-2区-2区-93号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('354', '94号', '22-2区-2区-94号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('355', '95号', '22-2区-2区-95号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('356', '96号', '22-2区-2区-96号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('357', '97号', '22-2区-2区-97号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('358', '98号', '22-2区-2区-98号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('359', '99号', '22-2区-2区-99号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('360', '100号', '22-2区-2区-100号', '4', '1', '6', '100.00', null, null, null, '0', '35', '7', '37', '38', '60.00', '20.00', '120.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('388', '1w', '22-2区-2区-1w', '4', '1', '6', '1.00', null, null, null, '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '13', '1530547200', null, null, '0', null, null, '0.00', null, '0', null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('389', '1', '22-2区-2区-1', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('390', '1号', '22-2区-2区-1号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('391', '2号', '22-2区-2区-2号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('392', '3号', '22-2区-2区-3号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('393', '4号', '22-2区-2区-4号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('394', '5号', '22-2区-2区-5号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('395', '6号', '22-2区-2区-6号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('396', '7号', '22-2区-2区-7号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('397', '8号', '22-2区-2区-8号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('398', '9号', '22-2区-2区-9号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('399', '10号', '22-2区-2区-10号', '4', '1', '15', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1530547200', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('405', '1', '22-3区-3区-1', '4', '2', '16', '11111.00', null, '11111.00', '0.00', '0', '36', '8', '45', '44', '1.00', '1.00', '1.00', '14', '2018', '14', null, '72', null, null, '0.00', null, '11', null, '3', '11111', '', '20', '0.00', '0.00', '1534953600', '1534953600', '2166105600', '405', '20180823174649', 'TQ20180823-4', '1597254409', 'Cem20180823174649', '3', null, null, '2', null, null, '3', null, '壹万壹仟壹佰壹拾壹圆', '壹万壹仟壹佰壹拾壹圆整', '20180823-4', null, null, null, null, null, null, null, null, null, '2', '1535017578');
INSERT INTO `cem_info` VALUES ('406', '1', '测试-1--1', '11', '39', '17', '1.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '1.00', '1.00', '1.00', '14', '1532896614', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('407', '1号', '天祥园-A区--1号', '17', '76', '18', '2000.00', null, '2063.00', '7.00', '1', '36', '8', '37', '44', '2.00', '2.00', '4.00', '14', '2018', '14', null, '56', null, null, '0.00', null, '11', null, '3', '2000', null, '9', '63.00', '0.00', '1533225600', '1533225600', '0', '407', '20180803131538', 'TQ20180803-3', '1561295738', 'Cem20180803131538', '3', null, null, '2', null, null, '3', null, '贰仟圆', '贰仟圆整', '20180803-3', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('408', '2号', '天祥园-A区--2号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190599', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '2', '14', '1533295418', null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('409', '3号', '天祥园-A区--3号', '17', '76', '18', '2000.00', null, '1500.00', '0.00', '1', '36', '8', '37', '44', '2.00', '2.00', '4.00', '14', '2018', '14', null, '58', '1533225600', '1533657600', '500.00', '1500.00', '11', null, '3', '2000', '', '0', '0.00', '0.00', '1533225600', '1533225600', '0', '409', '20180803201218', 'TQ20180803-5', '1533327138', 'Cem20180803201218', '3', null, null, '3', null, null, '3', null, '贰仟圆', '贰仟圆整', '20180803-5', '1', '1533298380', '2000', null, null, '', null, null, '1533298380', '3', null);
INSERT INTO `cem_info` VALUES ('410', '4号', '天祥园-A区--4号', '17', '76', '18', '2000.00', null, '2000.00', '0.00', '0', '36', '8', '37', '41', '2.00', '2.00', '4.00', '14', '2018', '14', null, '55', null, null, '0.00', null, '11', null, '3', '2000', '', '0', '0.00', '0.00', '1532880000', '1532880000', '1534089600', '410', '20180803122850', 'TQ20180803-2', '1533299330', 'Cem20180803122850', '3', null, null, '2', null, null, '3', null, '贰仟圆', '贰仟圆整', '20180803-2', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('411', '5号', '天祥园-A区--5号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190599', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('414', '1号', '天祥园-A区--1号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('415', '2号', '天祥园-A区--2号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('416', '3号', '天祥园-A区--3号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('417', '4号', '天祥园-A区--4号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('418', '5号', '天祥园-A区--5号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('419', '6号', '天祥园-A区--6号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('420', '7号', '天祥园-A区--7号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('421', '8号', '天祥园-A区--8号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('422', '9号', '天祥园-A区--9号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('423', '10号', '天祥园-A区--10号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '36', '8', '37', '38', '2.00', '2.00', '4.00', '14', '1533190647', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('429', '1号', '天祥园-A区--1号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('430', '2号', '天祥园-A区--2号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('431', '3号', '天祥园-A区--3号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('432', '4号', '天祥园-A区--4号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('433', '5号', '天祥园-A区--5号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('434', '6号', '天祥园-A区--6号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('435', '7号', '天祥园-A区--7号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('436', '8号', '天祥园-A区--8号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('437', '9号', '天祥园-A区--9号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('438', '10号', '天祥园-A区--10号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190692', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('444', '1号', '天祥园-A区--1号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('445', '2号', '天祥园-A区--2号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('446', '3号', '天祥园-A区--3号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('447', '4号', '天祥园-A区--4号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('448', '5号', '天祥园-A区--5号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('449', '6号', '天祥园-A区--6号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('450', '7号', '天祥园-A区--7号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('451', '8号', '天祥园-A区--8号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('452', '9号', '天祥园-A区--9号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('453', '10号', '天祥园-A区--10号', '17', '76', '18', '2000.00', null, '0.00', '0.00', '0', '35', '7', '37', '38', '2.00', '2.00', '4.00', '14', '1533190777', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('459', '1号', '天祥园-A区--1号', '17', '76', '19', '200.00', null, '256.00', '8.00', '0', '35', '8', '37', '44', '4.00', '4.00', '16.00', '14', '2018', '14', null, '54', null, null, '0.00', null, '11', null, '3', '200', null, '7', '56.00', '0.00', '1533225600', '1533225600', '1533225600', '459', '20180803122812', 'TQ20180803-1', '1555072092', 'Cem20180803122812', '3', null, null, '2', null, null, '3', null, '贰佰圆', '贰佰圆整', '20180803-1', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('460', '2号', '天祥园-A区--2号', '17', '76', '19', '200.00', null, '200.00', '0.00', '0', '35', '8', '37', '44', '4.00', '4.00', '16.00', '14', '2018', '14', null, '57', null, null, '0.00', null, '11', null, '3', '200', null, '0', '0.00', '0.00', '1533225600', '1533225600', '1533225600', '460', '20180803134232', 'TQ20180803-4', '1533303752', 'Cem20180803134232', '3', null, null, '2', null, null, '3', null, '贰佰圆', '贰佰圆整', '20180803-4', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('461', '3号', '天祥园-A区--3号', '17', '76', '19', '200.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '4.00', '4.00', '16.00', '14', '1533190823', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('462', '4号', '天祥园-A区--4号', '17', '76', '19', '200.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '4.00', '4.00', '16.00', '14', '1533190823', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('463', '5号', '天祥园-A区--5号', '17', '76', '19', '200.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '4.00', '4.00', '16.00', '14', '1533190823', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('468', '1号', '天仁园-A区--1号', '18', '96', '25', '36900.00', null, '36400.00', '0.00', '0', '61', '8', '60', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '59', '1533398400', '1533830400', '500.00', '36400.00', '11', null, '3', '36900', '', '0', '0.00', '0.00', '1533398400', '1533398400', '-28800', '468', '20180805135433', 'TQ20180805-1', '1533477273', 'Cem20180805135433', '3', null, null, '3', null, null, '3', null, '叁万陆仟玖佰圆', '叁万陆仟玖佰圆整', '20180805-1', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('469', '2号', '天仁园-A区--2号', '18', '96', '25', '36900.00', null, '36100.00', '0.00', '0', '61', '8', '60', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '60', '1533398400', '1533830400', '800.00', '36100.00', '11', null, '3', '36900', '', '0', '0.00', '0.00', '1533398400', '1533398400', '-28800', '469', '20180805162351', 'TQ20180805-2', '1533486231', 'Cem20180805162351', '3', null, null, '3', null, null, '3', null, '叁万陆仟玖佰圆', '叁万陆仟玖佰圆整', '20180805-2', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('470', '3号', '天仁园-A区--3号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('471', '4号', '天仁园-A区--4号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('472', '5号', '天仁园-A区--5号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('473', '6号', '天仁园-A区--6号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('474', '7号', '天仁园-A区--7号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('475', '8号', '天仁园-A区--8号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('476', '9号', '天仁园-A区--9号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('477', '10号', '天仁园-A区--10号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('478', '11号', '天仁园-A区--11号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('479', '12号', '天仁园-A区--12号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('480', '13号', '天仁园-A区--13号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('481', '14号', '天仁园-A区--14号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('482', '15号', '天仁园-A区--15号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('483', '16号', '天仁园-A区--16号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('484', '17号', '天仁园-A区--17号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('485', '18号', '天仁园-A区--18号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('486', '19号', '天仁园-A区--19号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('487', '20号', '天仁园-A区--20号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('488', '21号', '天仁园-A区--21号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('489', '22号', '天仁园-A区--22号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('490', '23号', '天仁园-A区--23号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('491', '24号', '天仁园-A区--24号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('492', '25号', '天仁园-A区--25号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('493', '26号', '天仁园-A区--26号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('494', '27号', '天仁园-A区--27号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('495', '28号', '天仁园-A区--28号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('496', '29号', '天仁园-A区--29号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('497', '30号', '天仁园-A区--30号', '18', '96', '25', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533304339', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('499', '1号', '天仁园-A区--1号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('500', '2号', '天仁园-A区--2号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('501', '3号', '天仁园-A区--3号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('502', '4号', '天仁园-A区--4号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('503', '5号', '天仁园-A区--5号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('504', '6号', '天仁园-A区--6号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('505', '7号', '天仁园-A区--7号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('506', '8号', '天仁园-A区--8号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('507', '9号', '天仁园-A区--9号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('508', '10号', '天仁园-A区--10号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('509', '11号', '天仁园-A区--11号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('510', '12号', '天仁园-A区--12号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('511', '13号', '天仁园-A区--13号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('512', '14号', '天仁园-A区--14号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('513', '15号', '天仁园-A区--15号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('514', '16号', '天仁园-A区--16号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('515', '17号', '天仁园-A区--17号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('516', '18号', '天仁园-A区--18号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('517', '19号', '天仁园-A区--19号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('518', '20号', '天仁园-A区--20号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('519', '21号', '天仁园-A区--21号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('520', '22号', '天仁园-A区--22号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('521', '23号', '天仁园-A区--23号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('522', '24号', '天仁园-A区--24号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('523', '25号', '天仁园-A区--25号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('524', '26号', '天仁园-A区--26号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('525', '27号', '天仁园-A区--27号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('526', '28号', '天仁园-A区--28号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('527', '29号', '天仁园-A区--29号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('528', '30号', '天仁园-A区--30号', '18', '96', '26', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435193', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('530', '1号', '天仁园-A区--1号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('531', '2号', '天仁园-A区--2号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('532', '3号', '天仁园-A区--3号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('533', '4号', '天仁园-A区--4号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('534', '5号', '天仁园-A区--5号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('535', '6号', '天仁园-A区--6号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('536', '7号', '天仁园-A区--7号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('537', '8号', '天仁园-A区--8号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('538', '9号', '天仁园-A区--9号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('539', '10号', '天仁园-A区--10号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('540', '11号', '天仁园-A区--11号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('541', '12号', '天仁园-A区--12号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('542', '13号', '天仁园-A区--13号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('543', '14号', '天仁园-A区--14号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('544', '15号', '天仁园-A区--15号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('545', '16号', '天仁园-A区--16号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('546', '17号', '天仁园-A区--17号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('547', '18号', '天仁园-A区--18号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('548', '19号', '天仁园-A区--19号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('549', '20号', '天仁园-A区--20号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('550', '21号', '天仁园-A区--21号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('551', '22号', '天仁园-A区--22号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('552', '23号', '天仁园-A区--23号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('553', '24号', '天仁园-A区--24号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('554', '25号', '天仁园-A区--25号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('555', '26号', '天仁园-A区--26号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('556', '27号', '天仁园-A区--27号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('557', '28号', '天仁园-A区--28号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('558', '29号', '天仁园-A区--29号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('559', '30号', '天仁园-A区--30号', '18', '96', '27', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435444', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('561', '1号', '天仁园-A区--1号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('562', '2号', '天仁园-A区--2号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('563', '3号', '天仁园-A区--3号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('564', '4号', '天仁园-A区--4号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('565', '5号', '天仁园-A区--5号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('566', '6号', '天仁园-A区--6号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('567', '7号', '天仁园-A区--7号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('568', '8号', '天仁园-A区--8号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('569', '9号', '天仁园-A区--9号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('570', '10号', '天仁园-A区--10号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('571', '11号', '天仁园-A区--11号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('572', '12号', '天仁园-A区--12号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('573', '13号', '天仁园-A区--13号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('574', '14号', '天仁园-A区--14号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('575', '15号', '天仁园-A区--15号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('576', '16号', '天仁园-A区--16号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('577', '17号', '天仁园-A区--17号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('578', '18号', '天仁园-A区--18号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('579', '19号', '天仁园-A区--19号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('580', '20号', '天仁园-A区--20号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('581', '21号', '天仁园-A区--21号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('582', '22号', '天仁园-A区--22号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('583', '23号', '天仁园-A区--23号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('584', '24号', '天仁园-A区--24号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('585', '25号', '天仁园-A区--25号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('586', '26号', '天仁园-A区--26号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('587', '27号', '天仁园-A区--27号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('588', '28号', '天仁园-A区--28号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('589', '29号', '天仁园-A区--29号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('590', '30号', '天仁园-A区--30号', '18', '96', '28', '36900.00', null, '0.00', '0.00', '0', '61', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435496', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('592', '1号', '天仁园-A区--1号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('593', '2号', '天仁园-A区--2号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('594', '3号', '天仁园-A区--3号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('595', '4号', '天仁园-A区--4号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('596', '5号', '天仁园-A区--5号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('597', '6号', '天仁园-A区--6号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('598', '7号', '天仁园-A区--7号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('599', '8号', '天仁园-A区--8号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('600', '9号', '天仁园-A区--9号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('601', '10号', '天仁园-A区--10号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('602', '11号', '天仁园-A区--11号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('603', '12号', '天仁园-A区--12号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('604', '13号', '天仁园-A区--13号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('605', '14号', '天仁园-A区--14号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('606', '15号', '天仁园-A区--15号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('607', '16号', '天仁园-A区--16号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('608', '17号', '天仁园-A区--17号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('609', '18号', '天仁园-A区--18号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('610', '19号', '天仁园-A区--19号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('611', '20号', '天仁园-A区--20号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('612', '21号', '天仁园-A区--21号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('613', '22号', '天仁园-A区--22号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('614', '23号', '天仁园-A区--23号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('615', '24号', '天仁园-A区--24号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('616', '25号', '天仁园-A区--25号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('617', '26号', '天仁园-A区--26号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('618', '27号', '天仁园-A区--27号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('619', '28号', '天仁园-A区--28号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('620', '29号', '天仁园-A区--29号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('621', '30号', '天仁园-A区--30号', '18', '96', '29', '36900.00', null, '0.00', '0.00', '0', '50', '8', '60', '38', '0.80', '0.90', '0.72', '14', '1533435690', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('623', '1号', '天文园A区1排1号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '2018', '0', '0000-00-00 00:00:00', '0', '0', '0', '0.00', '0.00', '0', '', '3', '0', '', '0', '0.00', '0.00', '', '', '', '0', '', '', '1533708212', 'Cem20180808060332', '3', null, null, '3', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180808-1', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('624', '2号', '天文园A区1排2号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('625', '3号', '天文园A区1排3号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('626', '4号', '天文园A区1排4号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '67', null, null, '0.00', null, '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534176000', '1534176000', '', '626', '20180814113703', 'TQ20180814-1', '1596454623', 'Cem20180814113703', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180814-1', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('627', '5号', '天文园A区1排5号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '2018', '14', null, '68', '1534176000', '1534176000', '39800.00', '-39800.00', '11', null, '2', '39800', '', null, '0.00', '0.00', null, null, null, '627', '20180814114305', null, null, null, '3', null, null, null, null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('628', '6号', '天文园A区1排6号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '4', '39800', null, '40', '0.00', '0.00', '1534176000', '1534176000', '1849795200', '628', '20180814114521', 'TQ20180814-2', '1658664591', 'Cem20180814114521', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180814-2', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('629', '7号', '天文园A区1排7号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '1', '35', '8', '49', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '70', '1534176000', '1534521600', '39800.00', '-39800.00', '13', null, '3', '39800', '', '1', '0.00', '0.00', '1534176000', '1534176000', '', '629', '20180814141117', 'TQ20180814-5', '1537366276', 'Cem20180814141117', '3', null, null, '3', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180814-5', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('630', '8号', '天文园A区1排8号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '2', '35', '8', '49', '39', '0.80', '0.90', '0.72', '14', '2018', '14', null, '71', '1534176000', '1534521600', '39800.00', '-39800.00', '11', null, '3', '39800', '', null, '0.00', '0.00', null, null, null, '630', '20180814115041', null, null, null, '3', null, null, null, null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('631', '9号', '天文园A区1排9号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '72', null, null, '0.00', null, '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534176000', '1534176000', '', '631', '20180814115108', 'TQ20180814-3', '1596455468', 'Cem20180814115108', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180814-3', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('632', '10号', '天文园A区1排10号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '73', null, null, '0.00', null, '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534176000', '1534176000', '', '632', '20180814115138', 'TQ20180814-4', '1596455498', 'Cem20180814115138', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180814-4', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('633', '11号', '天文园A区1排11号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '44', '0.80', '0.90', '0.72', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534262400', '1534262400', '2165414400', '633', '20180815084757', 'TQ20180815-1', '1596530877', 'Cem20180815084757', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180815-1', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('634', '12号', '天文园A区1排12号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '70', null, null, '0.00', null, '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534262400', '1534262400', '', '634', '20180815130002', 'TQ20180815-3', '1596546002', 'Cem20180815130002', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180815-3', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('635', '13号', '天文园A区1排13号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '78', null, null, '0.00', null, '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '1849968000', '635', '20180816105230', 'TQ20180816-1', '1596624750', 'Cem20180816105230', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180816-1', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('636', '14号', '天文园A区1排14号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '44', '0.80', '0.90', '0.72', '14', '2018', '14', null, '76', '1534262400', '1534694400', '1000.00', '-1000.00', '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534780800', '1534780800', '2165932800', '636', '20180821102454', 'TQ20180821-3', '1597055094', 'Cem20180821102454', '3', null, null, '3', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180821-3', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('637', '15号', '天文园A区1排15号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '41', '0.80', '0.90', '0.72', '14', '2018', '14', null, '79', null, null, '0.00', null, '11', null, '3', '39800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '1849968000', '637', '20180816105427', 'TQ20180816-2', '1596624867', 'Cem20180816105427', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180816-2', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('638', '16号', '天文园A区1排16号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('639', '17号', '天文园A区1排17号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('640', '18号', '天文园A区1排18号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('641', '19号', '天文园A区1排19号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('642', '20号', '天文园A区1排20号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('643', '21号', '天文园A区1排21号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('644', '22号', '天文园A区1排22号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('645', '23号', '天文园A区1排23号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('646', '24号', '天文园A区1排24号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('647', '25号', '天文园A区1排25号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('648', '26号', '天文园A区1排26号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '44', '0.80', '0.90', '0.72', '14', '2018', '14', null, '75', null, null, '0.00', null, '11', null, '3', '39800', null, '20', '0.00', '0.00', '1534262400', '1534262400', '2165414400', '648', '20180815085821', 'TQ20180815-2', '1596531501', 'Cem20180815085821', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180815-2', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('649', '27号', '天文园A区1排27号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('650', '28号', '天文园A区1排28号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('651', '29号', '天文园A区1排29号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('652', '30号', '天文园A区1排30号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('653', '31号', '天文园A区1排31号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('654', '32号', '天文园A区1排32号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('655', '33号', '天文园A区1排33号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('656', '34号', '天文园A区1排34号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('657', '35号', '天文园A区1排35号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('658', '36号', '天文园A区1排36号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('659', '37号', '天文园A区1排37号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('660', '38号', '天文园A区1排38号', '21', '101', '40', '39800.00', null, '0.00', '0.00', '0', '35', '8', '49', '38', '0.80', '0.90', '0.72', '14', '1533540379', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('661', '39号', '天文园A区1排39号', '21', '101', '40', '39800.00', null, '39800.00', '0.00', '0', '35', '8', '49', '44', '0.80', '0.90', '0.72', '14', '2018', '14', '0000-00-00 00:00:00', '80', '0', '0', '0.00', '0.00', '11', '', '3', '39800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '1849968000', '661', '20180816110420', 'TQ20180816-3', '1596625460', 'Cem20180816110420', '3', null, null, '2', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180816-3', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('662', '40号', '天文园A区1排40号', '21', '101', '40', '39800.00', null, '39300.00', '0.00', '0', '35', '8', '49', '44', '0.80', '0.90', '0.72', '14', '2018', '14', null, '64', '1533744000', '1534089600', '500.00', '39300.00', '11', null, '3', '39800', '重复购买', '40', '0.00', '0.00', '1533744000', '1534176000', '2165414400', '662', '20180809110903', 'TQ20180809-1', '1658665202', 'Cem20180809110903', '3', null, null, '3', null, null, '3', null, '叁万玖仟捌佰圆', '叁万玖仟捌佰圆整', '20180809-1', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('686', '1号', '天文园A区2排1号', '21', '101', '41', '38900.00', null, '38900.00', '0.00', '1', '61', '8', '60', '44', '0.80', '0.90', '0.72', '14', '2018', '14', null, '65', null, null, '0.00', null, '11', null, '3', '38900', null, '4', '0.00', '0.00', '1533744000', '1533744000', '2165414400', '686', '20180809160605', 'TQ20180809-2', '1546272365', 'Cem20180809160605', '3', null, null, '2', null, null, '3', null, '叁万捌仟玖佰圆', '叁万捌仟玖佰圆整', '20180809-2', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('687', '1号', '天圣园A区1排1号', '30', '112', '71', '12800.00', null, '0.00', '0.00', '1', '50', '8', '49', '41', '0.99', '0.99', '0.98', '14', '2018', '14', null, '84', '1534348800', '1534780800', '500.00', '12300.00', '11', null, '3', '12800', '购墓家属介绍  迁移 夫妻', '20', '0.00', '0.00', '1534348800', '1534348800', '', '687', '20180816132716', 'TQ20180816-5', '1596634036', 'Cem20180816132716', '3', null, null, '3', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180816-5', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('688', '2号', '天圣园A区1排2号', '30', '112', '71', '12800.00', null, '0.00', '0.00', '0', '50', '8', '49', '41', '0.99', '0.99', '0.98', '14', '2018', '14', null, '83', '1534348800', '1534780800', '500.00', '9300.00', '11', null, '3', '9800', '', '0', '0.00', '0.00', '1534348800', '1534348800', '', '688', '20180816130813', 'TQ20180816-4', '1534424893', 'Cem20180816130813', '3', null, null, '3', '17', '1534394924', '2', '0.7656', '壹万贰仟捌佰圆', '玖仟捌佰圆整', '20180816-4', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('689', '3号', '天圣园A区1排3号', '30', '112', '71', '12800.00', null, '12800.00', '0.00', '0', '50', '8', '49', '44', '0.99', '0.99', '0.98', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '1849968000', '689', '20180816170505', 'TQ20180816-6', '1596647105', 'Cem20180816170505', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180816-6', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('690', '4号', '天圣园A区1排4号', '30', '112', '71', '12800.00', null, '0.00', '0.00', '0', '50', '8', '49', '38', '0.99', '0.99', '0.98', '14', '1534392859', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', '1534905155');
INSERT INTO `cem_info` VALUES ('691', '5号', '天圣园A区1排5号', '30', '112', '71', '12800.00', null, '0.00', '0.00', '0', '50', '8', '49', '38', '0.99', '0.99', '0.98', '14', '1534392859', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('692', '6号', '天圣园A区1排6号', '30', '112', '71', '12800.00', null, '12800.00', '0.00', '0', '50', '8', '49', '41', '0.99', '0.99', '0.98', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '1849968000', '692', '20180816172126', 'TQ20180816-7', '1596648086', 'Cem20180816172126', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180816-7', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('693', '7号', '天圣园A区1排7号', '30', '112', '71', '12800.00', null, '12800.00', '0.00', '0', '50', '8', '49', '41', '0.99', '0.99', '0.98', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '1849968000', '693', '20180816172259', 'TQ20180816-8', '1596648179', 'Cem20180816172259', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180816-8', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('694', '8号', '天圣园A区1排8号', '30', '112', '71', '12800.00', null, '12800.00', '0.00', '0', '50', '8', '49', '44', '0.99', '0.99', '0.98', '14', '2018', '14', null, '70', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '1849968000', '694', '20180816172323', 'TQ20180816-9', '1596648203', 'Cem20180816172323', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180816-9', null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('695', '9号', '天圣园A区1排9号', '30', '112', '71', '12800.00', null, '0.00', '0.00', '0', '50', '8', '49', '38', '0.99', '0.99', '0.98', '14', '1534392859', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('696', '10号', '天圣园A区1排10号', '30', '112', '71', '12800.00', null, '0.00', '0.00', '0', '50', '8', '49', '38', '0.99', '0.99', '0.98', '14', '1534392859', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('702', '1号', '天泽园A区1排1号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '2', '35', '8', '37', '39', '0.50', '0.50', '0.25', '14', '2018', '14', null, '85', '1534348800', '1534867200', '1000.00', '11800.00', '11', null, '3', '12800', '1', null, '0.00', '0.00', null, null, null, '702', '20180816195111', null, null, null, '3', null, null, null, null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('703', '2号', '天泽园A区1排2号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '2', '35', '8', '37', '39', '0.50', '0.50', '0.25', '14', '2018', '14', null, '86', '1534348800', '1534867200', '1000.00', '11800.00', '11', null, '3', '12800', '2', null, '0.00', '0.00', null, null, null, '703', '20180816195353', null, null, null, '3', null, null, null, null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('704', '3号', '天泽园A区1排3号', '29', '115', '86', '12800.00', null, '12800.00', '0.00', '0', '35', '8', '37', '41', '0.50', '0.50', '0.25', '14', '2018', '14', null, '87', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '', '704', '20180816200627', 'TQ20180816-10', '1596657987', 'Cem20180816200627', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180816-10', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('705', '4号', '天泽园A区1排4号', '29', '115', '86', '12800.00', null, '12800.00', '0.00', '0', '35', '8', '37', '41', '0.50', '0.50', '0.25', '14', '2018', '14', null, '88', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534348800', '1534348800', '', '705', '20180816201145', 'TQ20180816-11', '1596658305', 'Cem20180816201145', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180816-11', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('706', '5号', '天泽园A区1排5号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', '1534905180');
INSERT INTO `cem_info` VALUES ('707', '6号', '天泽园A区1排6号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('708', '7号', '天泽园A区1排7号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('709', '8号', '天泽园A区1排8号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('710', '9号', '天泽园A区1排9号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('711', '10号', '天泽园A区1排10号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('712', '11号', '天泽园A区1排11号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('713', '12号', '天泽园A区1排12号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('714', '13号', '天泽园A区1排13号', '29', '115', '86', '12800.00', null, '12800.00', '0.00', '0', '35', '8', '37', '44', '0.50', '0.50', '0.25', '14', '2018', '14', null, '90', null, null, '0.00', null, '11', null, '3', '12800', null, '20', '0.00', '0.00', '1534608000', '1534608000', '2165760000', '714', '20180819144530', 'TQ20180819-1', '1596897930', 'Cem20180819144530', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180819-1', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('715', '14号', '天泽园A区1排14号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('716', '15号', '天泽园A区1排15号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('717', '16号', '天泽园A区1排16号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('718', '17号', '天泽园A区1排17号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('719', '18号', '天泽园A区1排18号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('720', '19号', '天泽园A区1排19号', '29', '115', '86', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.50', '0.50', '0.25', '14', '1534420201', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('721', '20号', '天泽园A区1排20号', '29', '115', '86', '12800.00', null, '12800.00', '0.00', '0', '35', '8', '37', '41', '0.50', '0.50', '0.25', '14', '2018', '14', null, '89', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534435200', '1534435200', '', '721', '20180817094047', 'TQ20180817-1', '1596706847', 'Cem20180817094047', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180817-1', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('722', '1号', '测试1A区1排1号', '31', '117', '106', '12800.00', null, '12800.00', '0.00', '0', '35', '8', '37', '41', '0.80', '0.50', '0.40', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534694400', '1534694400', '', '722', '20180820094114', 'TQ20180820-1', '1596966074', 'Cem20180820094114', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180820-1', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('723', '2号', '测试1A区1排2号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('724', '3号', '测试1A区1排3号', '31', '117', '106', '12800.00', null, '12800.00', '0.00', '0', '35', '8', '37', '41', '0.80', '0.50', '0.40', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534694400', '1534694400', '', '724', '20180820094147', 'TQ20180820-2', '1596966107', 'Cem20180820094147', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180820-2', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('725', '4号', '测试1A区1排4号', '31', '117', '106', '12800.00', null, '12800.00', '0.00', '1', '35', '8', '37', '44', '0.80', '0.50', '0.40', '14', '2018', '14', null, '91', null, null, '0.00', null, '11', null, '3', '12800', null, '20', '0.00', '0.00', '1534780800', '1534780800', '2165932800', '725', '20180821101607', 'TQ20180821-1', '1597054567', 'Cem20180821101607', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180821-1', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('726', '5号', '测试1A区1排5号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '41', '0.80', '0.50', '0.40', '14', '2018', '14', null, '69', '1534694400', '1535126400', '1000.00', '-1000.00', '11', null, '3', '12800', '', '20', '0.00', '0.00', '1534694400', '1534694400', '', '726', '20180820094401', 'TQ20180820-3', '1596966241', 'Cem20180820094401', '3', null, null, '3', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180820-3', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('727', '6号', '测试1A区1排6号', '31', '117', '106', '12800.00', null, '12800.00', '0.00', '0', '35', '8', '37', '44', '0.80', '0.50', '0.40', '14', '2018', '14', null, '92', null, null, '0.00', null, '11', null, '3', '12800', null, '30', '0.00', '0.00', '1534780800', '1534780800', '', '727', '20180821101643', 'TQ20180821-2', '1628159123', 'Cem20180821101643', '3', null, null, '2', null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', '20180821-2', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('728', '7号', '测试1A区1排7号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '39', '0.80', '0.50', '0.40', '14', '2018', '14', null, '69', '1534694400', '1535126400', '1000.00', '-1000.00', '11', null, '3', '12800', '', null, '0.00', '0.00', null, null, null, '728', '20180820094324', null, null, null, '3', null, null, null, null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('729', '8号', '测试1A区1排8号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '2', '35', '8', '37', '39', '0.80', '0.50', '0.40', '14', '2018', '14', null, '71', '1534780800', '1535212800', '1000.00', '-1000.00', '11', null, '3', '12800', '', null, '0.00', '0.00', null, null, null, '729', '20180821101746', null, null, null, '3', null, null, null, null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('730', '9号', '测试1A区1排9号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '39', '0.80', '0.50', '0.40', '14', '2018', '14', null, '72', '1534780800', '1535212800', '1000.00', '-1000.00', '11', null, '3', '12800', '', null, '0.00', '0.00', null, null, null, '730', '20180821102028', null, null, null, '3', null, null, null, null, null, '3', null, '壹万贰仟捌佰圆', '壹万贰仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('731', '10号', '测试1A区1排10号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('732', '11号', '测试1A区1排11号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('733', '12号', '测试1A区1排12号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('734', '13号', '测试1A区1排13号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('735', '14号', '测试1A区1排14号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '2', '1534905174');
INSERT INTO `cem_info` VALUES ('736', '15号', '测试1A区1排15号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('737', '16号', '测试1A区1排16号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('738', '17号', '测试1A区1排17号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('739', '18号', '测试1A区1排18号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('740', '19号', '测试1A区1排19号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('741', '20号', '测试1A区1排20号', '31', '117', '106', '12800.00', null, '0.00', '0.00', '0', '35', '8', '37', '38', '0.80', '0.50', '0.40', '14', '1534729155', null, null, '0', null, null, '0.00', null, null, null, '3', '0', null, null, '0.00', '0.00', null, null, null, null, null, null, null, null, '3', null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, null, null, '3', null);
INSERT INTO `cem_info` VALUES ('753', '1号', '天文园A区1排1号', '32', '118', '137', '14800.00', null, '13800.00', '100.00', '1', '50', '8', '49', '41', '2.00', '1.00', '2.00', '14', '2018', '14', null, '84', null, null, '0.00', null, '11', null, '3', '12800', '', '10', '1000.00', '0.00', '1534953600', '1534953600', '', '753', '20180823084233', 'TQ20180823-1', '1566117753', 'Cem20180823084233', '3', null, null, '2', '17', '1534984953', '2', '0.8649', '壹万肆仟捌佰圆', '壹万贰仟捌佰圆整', '20180823-1', '1', '1534985314', '12800', null, null, '', null, null, '1534985314', '2', '1534984902');
INSERT INTO `cem_info` VALUES ('754', '2号', '天文园A区1排2号', '32', '118', '137', '14800.00', null, '0.00', '0.00', '0', '50', '8', '49', '39', '2.00', '1.00', '2.00', '14', '2018', '14', null, '84', '1534867200', '1535299200', '1000.00', '8800.00', '11', null, '3', '9800', '转介绍', null, '0.00', '0.00', null, null, null, '754', '20180822083627', null, null, null, '3', null, null, null, '17', '1534898187', '2', '0.6622', '壹万肆仟捌佰圆', '玖仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('755', '3号', '天文园A区1排3号', '32', '118', '137', '14800.00', null, '0.00', '0.00', '2', '50', '8', '49', '39', '2.00', '1.00', '2.00', '14', '2018', '14', null, '69', '1534867200', '1535299200', '1000.00', '-1000.00', '11', null, '3', '14800', '', null, '0.00', '0.00', null, null, null, '755', '20180822103208', null, null, null, '3', null, null, null, null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', '1534905112');
INSERT INTO `cem_info` VALUES ('756', '4号', '天文园A区1排4号', '32', '118', '137', '14800.00', null, '14800.00', '0.00', '1', '50', '8', '49', '44', '2.00', '1.00', '2.00', '14', '2018', '14', null, '72', null, null, '0.00', null, '11', null, '3', '14800', '', '20', '0.00', '0.00', '1534953600', '1534953600', '2166105600', '756', '20180823145506', 'TQ20180823-2', '1597244106', 'Cem20180823145506', '3', null, null, '2', null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', '20180823-2', null, null, null, null, null, null, null, null, null, '2', '1535006768');
INSERT INTO `cem_info` VALUES ('757', '5号', '天文园A区1排5号', '32', '118', '137', '14800.00', null, '0.00', '0.00', '0', '50', '8', '49', '39', '2.00', '1.00', '2.00', '14', '2018', '14', null, '69', '1534953600', '1535385600', '1000.00', '-1000.00', '11', null, '3', '14800', '', null, '0.00', '0.00', null, null, null, '757', '20180823150317', null, null, null, '3', null, null, null, null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', '1535007312');
INSERT INTO `cem_info` VALUES ('758', '6号', '天文园A区1排6号', '32', '118', '137', '14800.00', null, '14800.00', '0.00', '1', '50', '8', '49', '44', '2.00', '1.00', '2.00', '14', '2018', '14', null, '69', null, null, '0.00', null, '11', null, '3', '14800', '', '20', '0.00', '0.00', '1534867200', '1534867200', '2166019200', '758', '20180822093347', 'TQ20180822-1', '1597138427', 'Cem20180822093347', '3', null, null, '2', null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', '20180822-1', null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('759', '7号', '天文园A区1排7号', '32', '118', '137', '14800.00', null, '0.00', '0.00', '0', '50', '8', '49', '39', '2.00', '1.00', '2.00', '14', '2018', '14', null, '69', '1534867200', '1535299200', '1000.00', '-1000.00', '11', null, '3', '14800', '', null, '0.00', '0.00', null, null, null, '759', '20180822093447', null, null, null, '3', null, null, null, null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '2', null);
INSERT INTO `cem_info` VALUES ('760', '8号', '天文园A区1排8号', '32', '118', '137', '14800.00', null, '14800.00', '0.00', '0', '50', '8', '49', '44', '2.00', '1.00', '2.00', '14', '2018', '14', null, '72', null, null, '0.00', null, '11', null, '3', '14800', '', '20', '0.00', '0.00', '1534953600', '1534953600', '2166105600', '760', '20180823151451', 'TQ20180823-3', '1597245291', 'Cem20180823151451', '3', null, null, '2', null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', '20180823-3', null, null, null, null, null, null, null, null, null, '2', '1535008092');
INSERT INTO `cem_info` VALUES ('761', '9号', '天文园A区1排9号', '32', '118', '137', '14800.00', null, '0.00', '0.00', '0', '50', '8', '49', '39', '2.00', '1.00', '2.00', '14', '2018', '14', null, '84', '1534867200', '1535299200', '200.00', '14600.00', '11', null, '3', '14800', '', null, '0.00', '0.00', null, null, null, '761', '20180822110347', null, null, null, '3', null, null, null, null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', null, null, null, null, null, null, null, null, null, null, '3', '1534906998');
INSERT INTO `cem_info` VALUES ('762', '10号', '天文园A区1排10号', '32', '118', '137', '14800.00', null, '14800.00', '0.00', '0', '50', '8', '49', '41', '2.00', '1.00', '2.00', '14', '2018', '14', '0000-00-00 00:00:00', '93', '0', '0', '0.00', '0.00', '11', '', '3', '14800', '', '20', '0.00', '0.00', '1534953600', '1534953600', '', '762', '20180823190907', 'TQ20180823-5', '1597259347', 'Cem20180823190907', '3', null, null, '2', null, null, '3', null, '壹万肆仟捌佰圆', '壹万肆仟捌佰圆整', '20180823-5', null, null, null, null, null, null, null, null, null, '2', '1535022492');

-- ----------------------------
-- Table structure for cem_num
-- ----------------------------
DROP TABLE IF EXISTS `cem_num`;
CREATE TABLE `cem_num` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `settime` int(11) DEFAULT NULL COMMENT '销售时间',
  `num` int(11) DEFAULT NULL COMMENT '计数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COMMENT='墓位销售当天计数';

-- ----------------------------
-- Records of cem_num
-- ----------------------------
INSERT INTO `cem_num` VALUES ('1', '1532769289', '1');
INSERT INTO `cem_num` VALUES ('2', '1532769346', '2');
INSERT INTO `cem_num` VALUES ('3', '1532769391', '3');
INSERT INTO `cem_num` VALUES ('4', '1533270492', '1');
INSERT INTO `cem_num` VALUES ('5', '1533270530', '2');
INSERT INTO `cem_num` VALUES ('6', '1533273338', '3');
INSERT INTO `cem_num` VALUES ('7', '1533274952', '4');
INSERT INTO `cem_num` VALUES ('8', '1533298338', '5');
INSERT INTO `cem_num` VALUES ('9', '1533448473', '1');
INSERT INTO `cem_num` VALUES ('10', '1533457431', '2');
INSERT INTO `cem_num` VALUES ('11', '1533679412', '1');
INSERT INTO `cem_num` VALUES ('12', '1533784143', '1');
INSERT INTO `cem_num` VALUES ('13', '1533801965', '2');
INSERT INTO `cem_num` VALUES ('14', '1533802088', '3');
INSERT INTO `cem_num` VALUES ('15', '1534217823', '1');
INSERT INTO `cem_num` VALUES ('16', '1534218321', '2');
INSERT INTO `cem_num` VALUES ('17', '1534218668', '3');
INSERT INTO `cem_num` VALUES ('18', '1534218698', '4');
INSERT INTO `cem_num` VALUES ('19', '1534227077', '5');
INSERT INTO `cem_num` VALUES ('20', '1534294077', '1');
INSERT INTO `cem_num` VALUES ('21', '1534294701', '2');
INSERT INTO `cem_num` VALUES ('22', '1534309202', '3');
INSERT INTO `cem_num` VALUES ('23', '1534387950', '1');
INSERT INTO `cem_num` VALUES ('24', '1534388067', '2');
INSERT INTO `cem_num` VALUES ('25', '1534388660', '3');
INSERT INTO `cem_num` VALUES ('26', '1534396093', '4');
INSERT INTO `cem_num` VALUES ('27', '1534397236', '5');
INSERT INTO `cem_num` VALUES ('28', '1534410305', '6');
INSERT INTO `cem_num` VALUES ('29', '1534411286', '7');
INSERT INTO `cem_num` VALUES ('30', '1534411379', '8');
INSERT INTO `cem_num` VALUES ('31', '1534411403', '9');
INSERT INTO `cem_num` VALUES ('32', '1534421187', '10');
INSERT INTO `cem_num` VALUES ('33', '1534421505', '11');
INSERT INTO `cem_num` VALUES ('34', '1534470047', '1');
INSERT INTO `cem_num` VALUES ('35', '1534661130', '1');
INSERT INTO `cem_num` VALUES ('36', '1534729274', '1');
INSERT INTO `cem_num` VALUES ('37', '1534729307', '2');
INSERT INTO `cem_num` VALUES ('38', '1534729441', '3');
INSERT INTO `cem_num` VALUES ('39', '1534817767', '1');
INSERT INTO `cem_num` VALUES ('40', '1534817803', '2');
INSERT INTO `cem_num` VALUES ('41', '1534818294', '3');
INSERT INTO `cem_num` VALUES ('42', '1534901627', '1');
INSERT INTO `cem_num` VALUES ('43', '1534907660', '2');
INSERT INTO `cem_num` VALUES ('44', '1534984953', '1');
INSERT INTO `cem_num` VALUES ('45', '1535007306', '2');
INSERT INTO `cem_num` VALUES ('46', '1535008491', '3');
INSERT INTO `cem_num` VALUES ('47', '1535017609', '4');
INSERT INTO `cem_num` VALUES ('48', '1535022547', '5');

-- ----------------------------
-- Table structure for cem_pnum
-- ----------------------------
DROP TABLE IF EXISTS `cem_pnum`;
CREATE TABLE `cem_pnum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='墓位销售票据计数';

-- ----------------------------
-- Records of cem_pnum
-- ----------------------------
INSERT INTO `cem_pnum` VALUES ('1', '4', '1534914861');

-- ----------------------------
-- Table structure for cem_row
-- ----------------------------
DROP TABLE IF EXISTS `cem_row`;
CREATE TABLE `cem_row` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cem_id` int(11) unsigned NOT NULL,
  `cem_area_id` int(11) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `sn` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COMMENT='墓排';

-- ----------------------------
-- Records of cem_row
-- ----------------------------
INSERT INTO `cem_row` VALUES ('71', '30', '112', '1排', null);
INSERT INTO `cem_row` VALUES ('72', '30', '112', '2排', null);
INSERT INTO `cem_row` VALUES ('73', '30', '112', '3排', null);
INSERT INTO `cem_row` VALUES ('74', '30', '112', '4排', null);
INSERT INTO `cem_row` VALUES ('75', '30', '112', '5排', null);
INSERT INTO `cem_row` VALUES ('76', '30', '112', '6排', null);
INSERT INTO `cem_row` VALUES ('77', '30', '112', '7排', null);
INSERT INTO `cem_row` VALUES ('78', '30', '112', '8排', null);
INSERT INTO `cem_row` VALUES ('79', '30', '112', '9排', null);
INSERT INTO `cem_row` VALUES ('80', '30', '112', '10排', null);
INSERT INTO `cem_row` VALUES ('86', '29', '115', '1排', null);
INSERT INTO `cem_row` VALUES ('87', '29', '115', '2排', null);
INSERT INTO `cem_row` VALUES ('88', '29', '115', '3排', null);
INSERT INTO `cem_row` VALUES ('89', '29', '115', '4排', null);
INSERT INTO `cem_row` VALUES ('90', '29', '115', '5排', null);
INSERT INTO `cem_row` VALUES ('91', '29', '115', '6排', null);
INSERT INTO `cem_row` VALUES ('92', '29', '115', '7排', null);
INSERT INTO `cem_row` VALUES ('93', '29', '115', '8排', null);
INSERT INTO `cem_row` VALUES ('94', '29', '115', '9排', null);
INSERT INTO `cem_row` VALUES ('95', '29', '115', '10排', null);
INSERT INTO `cem_row` VALUES ('96', '29', '115', '11排', null);
INSERT INTO `cem_row` VALUES ('97', '29', '115', '12排', null);
INSERT INTO `cem_row` VALUES ('98', '29', '115', '13排', null);
INSERT INTO `cem_row` VALUES ('99', '29', '115', '14排', null);
INSERT INTO `cem_row` VALUES ('100', '29', '115', '15排', null);
INSERT INTO `cem_row` VALUES ('101', '29', '115', '16排', null);
INSERT INTO `cem_row` VALUES ('102', '29', '115', '17排', null);
INSERT INTO `cem_row` VALUES ('103', '29', '115', '18排', null);
INSERT INTO `cem_row` VALUES ('104', '29', '115', '19排', null);
INSERT INTO `cem_row` VALUES ('105', '29', '115', '20排', null);
INSERT INTO `cem_row` VALUES ('106', '31', '117', '1排', null);
INSERT INTO `cem_row` VALUES ('107', '31', '117', '2排', null);
INSERT INTO `cem_row` VALUES ('108', '31', '117', '3排', null);
INSERT INTO `cem_row` VALUES ('109', '31', '117', '4排', null);
INSERT INTO `cem_row` VALUES ('110', '31', '117', '5排', null);
INSERT INTO `cem_row` VALUES ('111', '31', '117', '6排', null);
INSERT INTO `cem_row` VALUES ('112', '31', '117', '7排', null);
INSERT INTO `cem_row` VALUES ('113', '31', '117', '8排', null);
INSERT INTO `cem_row` VALUES ('114', '31', '117', '9排', null);
INSERT INTO `cem_row` VALUES ('115', '31', '117', '10排', null);
INSERT INTO `cem_row` VALUES ('116', '31', '117', '11排', null);
INSERT INTO `cem_row` VALUES ('117', '31', '117', '12排', null);
INSERT INTO `cem_row` VALUES ('118', '31', '117', '13排', null);
INSERT INTO `cem_row` VALUES ('119', '31', '117', '14排', null);
INSERT INTO `cem_row` VALUES ('120', '31', '117', '15排', null);
INSERT INTO `cem_row` VALUES ('121', '31', '117', '16排', null);
INSERT INTO `cem_row` VALUES ('122', '31', '117', '17排', null);
INSERT INTO `cem_row` VALUES ('123', '31', '117', '18排', null);
INSERT INTO `cem_row` VALUES ('124', '31', '117', '19排', null);
INSERT INTO `cem_row` VALUES ('125', '31', '117', '20排', null);
INSERT INTO `cem_row` VALUES ('137', '32', '118', '1排', null);
INSERT INTO `cem_row` VALUES ('138', '32', '118', '2排', null);
INSERT INTO `cem_row` VALUES ('139', '32', '118', '3排', null);
INSERT INTO `cem_row` VALUES ('140', '32', '118', '4排', null);
INSERT INTO `cem_row` VALUES ('141', '32', '118', '5排', null);
INSERT INTO `cem_row` VALUES ('142', '32', '118', '6排', null);
INSERT INTO `cem_row` VALUES ('143', '32', '118', '7排', null);
INSERT INTO `cem_row` VALUES ('144', '32', '118', '8排', null);
INSERT INTO `cem_row` VALUES ('145', '32', '118', '9排', null);
INSERT INTO `cem_row` VALUES ('146', '32', '118', '10排', null);
INSERT INTO `cem_row` VALUES ('147', '32', '118', '11排', null);
INSERT INTO `cem_row` VALUES ('148', '32', '118', '12排', null);
INSERT INTO `cem_row` VALUES ('149', '32', '118', '13排', null);
INSERT INTO `cem_row` VALUES ('150', '32', '118', '14排', null);
INSERT INTO `cem_row` VALUES ('151', '32', '118', '15排', null);
INSERT INTO `cem_row` VALUES ('152', '32', '118', '16排', null);
INSERT INTO `cem_row` VALUES ('153', '32', '118', '17排', null);
INSERT INTO `cem_row` VALUES ('154', '32', '118', '18排', null);
INSERT INTO `cem_row` VALUES ('155', '32', '118', '19排', null);
INSERT INTO `cem_row` VALUES ('156', '32', '118', '20排', null);

-- ----------------------------
-- Table structure for cem_yd
-- ----------------------------
DROP TABLE IF EXISTS `cem_yd`;
CREATE TABLE `cem_yd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) DEFAULT NULL COMMENT '墓位预订总计数',
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='墓位预订总计数';

-- ----------------------------
-- Records of cem_yd
-- ----------------------------

-- ----------------------------
-- Table structure for come_channel
-- ----------------------------
DROP TABLE IF EXISTS `come_channel`;
CREATE TABLE `come_channel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sn` varchar(100) DEFAULT NULL,
  `title` varchar(11) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `ppid` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COMMENT='来访渠道';

-- ----------------------------
-- Records of come_channel
-- ----------------------------
INSERT INTO `come_channel` VALUES ('1', '22', 'ddd', '11', '0', '0');
INSERT INTO `come_channel` VALUES ('3', '22', 'dd', '22', '1', '0');
INSERT INTO `come_channel` VALUES ('6', '22', '33', '222', '1', '3');
INSERT INTO `come_channel` VALUES ('7', '2', '1', '2', '1', '3');
INSERT INTO `come_channel` VALUES ('8', '2', '2', '3', '1', '3');
INSERT INTO `come_channel` VALUES ('13', '1', '1234123', '123123', '4', '11');
INSERT INTO `come_channel` VALUES ('14', '', '佛光阁', '第三个墓区', '0', '0');
INSERT INTO `come_channel` VALUES ('15', '11', '佛光阁', '第三个墓区', '1', '0');
INSERT INTO `come_channel` VALUES ('16', '', '', '', '0', '0');
INSERT INTO `come_channel` VALUES ('17', '', '', '', '0', '0');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cem_info_id` int(11) DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `sex` tinyint(1) unsigned DEFAULT '0',
  `relationship` int(11) unsigned DEFAULT NULL COMMENT '与故者关系',
  `idcard` char(18) DEFAULT NULL,
  `tel` char(11) DEFAULT NULL COMMENT '联系电话',
  `phone` char(11) DEFAULT NULL COMMENT '手机号',
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `workplace` varchar(100) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL COMMENT '邮政编码',
  `create_by` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL COMMENT '操作员',
  `update_time` datetime DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL COMMENT '年龄',
  `weixin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COMMENT='联系人';

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('13', '0', '请问2', '3', '11', '111111111111111', '1', '13030040711', '111', '1', '11111', '', null, '2018-06-26 18:58:04', null, null, '', '30', null);
INSERT INTO `contacts` VALUES ('14', '0', '请问2', '0', '11', null, '2', null, null, '2', null, null, null, '2018-06-26 19:41:18', null, null, null, '43', null);
INSERT INTO `contacts` VALUES ('15', '0', '请问2', '0', null, '213123', '321321', ' 113131', '321', '312312', '3213', '150036', null, null, null, null, null, '34', null);
INSERT INTO `contacts` VALUES ('16', '0', '请问2', '0', '11', null, '1', null, null, '1', null, null, null, '2018-06-27 09:11:29', null, null, null, '35', null);
INSERT INTO `contacts` VALUES ('17', '0', '请问2', '0', '11', null, '2', null, null, '2', null, null, null, '2018-06-27 09:13:12', null, null, null, '46', null);
INSERT INTO `contacts` VALUES ('18', '0', '请问2', '0', '11', null, '12312312312', null, null, '爱仕达奥大所大所大所大所多', null, null, null, '2018-06-27 10:42:57', null, null, null, '50', null);
INSERT INTO `contacts` VALUES ('19', '0', '请问2', '0', '46', '13030040777', '13030040777', '13030040777', null, '请问2', null, null, null, '2018-06-27 10:51:57', null, null, null, '60', null);
INSERT INTO `contacts` VALUES ('20', '0', '请问2', '3', '11', '111111', '13030040711', '13030040711', '李二李二李二李二李二李二李二李二李二李二李二李二李二', '李二李二李二', '李二李二李二李二', '', null, '2018-06-28 14:40:45', null, null, '', '70', null);
INSERT INTO `contacts` VALUES ('21', '0', '请问2', '1', '11', '123123123123123123', '123123123', ' 1231231231', '12312312', '3123123', '123123', null, null, null, null, null, null, '55', null);
INSERT INTO `contacts` VALUES ('22', '0', '请问2', '1', '11', '321123', '123123', ' 1231231231', '123123', '123', '12313', null, null, null, null, null, null, '72', null);
INSERT INTO `contacts` VALUES ('23', '0', '请问2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '76', null);
INSERT INTO `contacts` VALUES ('26', '0', '请问2', '1', '11', '666', '666', ' 666', '666', '666', '666', null, null, null, null, null, null, '62', null);
INSERT INTO `contacts` VALUES ('27', '0', '请问2', '1', '11', '2222211', '2222211', '2222211', '2222211', '2222211', '2222211', null, null, null, null, null, null, '31', null);
INSERT INTO `contacts` VALUES ('28', '0', '请问2', '3', '11', '222221122', '2222211222', '2222211222', '222221122', '2222211222', '22222112222', '', null, null, null, null, '', '20', null);
INSERT INTO `contacts` VALUES ('29', '0', '请问2', '1', '11', '88', '88', '88', '88', '88', '88', null, null, null, null, null, null, '28', null);
INSERT INTO `contacts` VALUES ('30', '0', '请问2', '1', '11', '13030040777', '13030040777', '13030040777', '13030040777', '13030040777', '13030040777', null, null, null, null, null, null, '42', null);
INSERT INTO `contacts` VALUES ('31', '0', '请问2', '1', '11', '13030040777', '13030040777', '13030040777', '13030040777', '13030040777', '13030040777', null, null, null, null, null, null, '44', null);
INSERT INTO `contacts` VALUES ('33', '0', '请问2', '0', '11', '1', '11111', '13030040755', '1111', '11', '1111', null, null, null, null, null, null, '33', null);
INSERT INTO `contacts` VALUES ('34', '0', '333', '0', '11', '222', '13030000000', '13030000000', '333', '333', '333', null, null, null, null, null, null, '66', null);
INSERT INTO `contacts` VALUES ('35', '0', '1', '3', '11', '1', '1', '13030044444', '1', '1', '1', '', null, null, null, null, '', '52', null);
INSERT INTO `contacts` VALUES ('36', '0', '123', '1', '11', '123', '123', '13011111111', '123', '123', '123', '150036', null, null, null, null, null, '43', null);
INSERT INTO `contacts` VALUES ('37', '0', 'asd', '3', '11', '15245245211', '15245245211', '15245245211', '15245245211', '15245245211', '15245245211', '111111111', null, null, null, null, '', '68', null);
INSERT INTO `contacts` VALUES ('38', '0', '啊啊啊啊', '0', '11', '1', '1212121', '13030040771', '1', '121212211', '1', null, null, '2018-07-07 15:20:34', null, null, null, '60', null);
INSERT INTO `contacts` VALUES ('39', '0', '顶顶顶', '0', '11', null, '22', null, null, '1', null, null, null, '2018-07-07 15:25:18', null, null, null, '70', null);
INSERT INTO `contacts` VALUES ('40', '0', '欣赏欣赏', '0', '11', null, '1', null, null, '1', null, null, null, '2018-07-07 15:26:17', null, null, null, '32', null);
INSERT INTO `contacts` VALUES ('41', '0', '1212', '1', '11', '1212121212121212', '12121212121', '13011111112', '1212121212121212', '1212121212121212', '1212121212121212', '150036', null, null, null, null, null, '55', null);
INSERT INTO `contacts` VALUES ('42', '0', '老王', '3', '11', '12312312312', '18245678941', '11', '123', '123', '123', '', null, null, null, null, '', '11111', null);
INSERT INTO `contacts` VALUES ('43', '0', '123', '1', '11', '12312312312', '12333333331', '13011111999', 'xs', 'xs', 'xs', null, null, null, null, null, '', '12', null);
INSERT INTO `contacts` VALUES ('44', '0', '自行车', '1', '11', '1', '1', '13011111777', '1', '1', '1', '150036', null, null, null, null, null, '11', null);
INSERT INTO `contacts` VALUES ('45', '0', '需', '1', '11', '1231', '12312', '13733333333', '123', '123', '123', null, null, null, null, null, '', '50', null);
INSERT INTO `contacts` VALUES ('46', '0', '自行', '1', '11', '123', 'zxc', '13030040711', 'zxc', 'zxc', 'zxc', '150036', null, null, null, null, null, '12', null);
INSERT INTO `contacts` VALUES ('47', '0', '11', '1', '11', '1', '1', '13030040711', '1', '1', '1', '150036', null, null, null, null, null, '1', null);
INSERT INTO `contacts` VALUES ('48', '0', '789', '1', '11', '789', '789', '13030040711', '789', '789', '789', '150036', null, null, null, null, null, '77', null);
INSERT INTO `contacts` VALUES ('49', '0', '4574', '1', '11', '4746', '478', '13030040777', '467', '467', '467', null, null, null, null, null, '', '11', null);
INSERT INTO `contacts` VALUES ('50', '0', '12我', '1', '11', '123', '123', '13030040777', '123', '123我', '123', null, null, null, null, null, '', '123', null);
INSERT INTO `contacts` VALUES ('51', '0', '玩儿玩儿', '1', '11', '12312312312', '123123', '13030040000', '123', '123', '123123', null, null, null, null, null, '', '123123', null);
INSERT INTO `contacts` VALUES ('52', '0', '1的', '1', '11', '111', '1', '13030040711', '1', '1', '1', null, null, null, null, null, '', '33', null);
INSERT INTO `contacts` VALUES ('53', '0', '1222信息', '1', '11', '1', '1', '13030040123', '1', '1', '1', null, null, null, null, null, '', '44', null);
INSERT INTO `contacts` VALUES ('54', '0', '窝u', '1', '11', '23010619', '1314513213', '1314513213', '', '', '', null, null, null, null, null, '', '0', null);
INSERT INTO `contacts` VALUES ('55', '0', '你好', '3', '11', '******************', '14745732909', '14745732909', '', '', '', '', null, null, null, null, '', '150000', null);
INSERT INTO `contacts` VALUES ('56', '0', '测试2', '1', '11', '230103196304080319', '13654669245', '15904611621', '', '', '', null, null, null, null, null, '', '32', null);
INSERT INTO `contacts` VALUES ('57', '0', '大富大贵', '1', '11', '230103196304080319', '136546', '18604601160', '', '', '', null, null, null, null, null, '', '32', null);
INSERT INTO `contacts` VALUES ('58', '0', '第三方', '1', '11', '230103198604230319', '13654669245', '13654669245', '', '', '', null, null, null, null, null, null, '32', null);
INSERT INTO `contacts` VALUES ('59', '0', '武术', '3', '11', '230103198504061260', '15845058127', '18945612345', '', '哈尔滨市香坊区成高子镇民强村', '哈尔滨市轴承厂', '', null, null, null, null, '', '33', null);
INSERT INTO `contacts` VALUES ('60', '0', '何立峰', '3', '11', '230109196712091684', '15746546945', '18646546946', '', '哈尔滨市', '无', '', null, null, null, null, '', '51', null);
INSERT INTO `contacts` VALUES ('61', '0', '李磊', '1', '11', '230103198701291618', '13895784513', '13895784513', '', '哈尔滨市香坊区成高子镇', '', '150000', null, null, null, null, null, null, null);
INSERT INTO `contacts` VALUES ('62', '0', '李斌', '1', '11', '230103198701291618', '13895784513', '13895784513', '', '哈尔滨市香坊区成高子镇', '', '150000', null, null, null, null, '20180808/a5697a673dad9913b448f9f878cc297b.jpg', null, null);
INSERT INTO `contacts` VALUES ('63', '0', '穆棱河', '1', '11', '230108196484641245', '13895769456', '13946548954', '', '哈尔滨市急救中心', '', '150000', null, null, null, null, null, null, null);
INSERT INTO `contacts` VALUES ('64', '0', '穆棱峰', '0', '11', '230108196484641245', '13895769456', '13946548954', '', '哈尔滨市急救中心', '', '150000', null, null, null, null, '20180809/26ae965828980fe0611872366ce469ea.jpg', null, null);
INSERT INTO `contacts` VALUES ('65', '0', '爱的', '2', '11', '222222222222222222', '13030040711', '13030040711', '暗示', '阿达', '爱的', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('66', '0', '暗示', '2', '11', '333333333333333333', '13030040711', '13030040711', '水电费', '是的发生的', '奥术大师', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('67', '0', '账上', '2', '11', '234545199645412245', '13555564854', '15563247895', '', '是的', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('68', '0', '是的', '2', null, '231156199956411231', '15326489575', '13562459875', null, '', '', '150000', null, null, null, null, null, null, '');
INSERT INTO `contacts` VALUES ('69', '0', '是的', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('70', '0', '测试7', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '', null, '');
INSERT INTO `contacts` VALUES ('71', '0', '测试8', '2', null, '231156199956411231', '15298555556', '13562459875', null, '', '', '150000', null, null, null, null, null, null, '');
INSERT INTO `contacts` VALUES ('72', '0', '测试9', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '', null, '现在');
INSERT INTO `contacts` VALUES ('73', '0', '测试10', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('74', '0', '阿森松岛', '0', '46', null, '13254562581', null, null, '', null, null, '14', '2018-08-14 14:13:32', null, null, null, null, null);
INSERT INTO `contacts` VALUES ('75', '0', '123', '2', '46', '231156199956411231', '15298555556', '13562459875', '', '', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('76', '0', '测试8', '2', '11', '231156199956411231', '15326489575', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '20180821/05c6ca9e81c56dcc2c3e7ba547906922.jpg', null, '');
INSERT INTO `contacts` VALUES ('77', '0', 'hdfh', '0', '11', null, '13254562581', null, null, '哈尔滨松', null, null, '14', '2018-08-15 14:07:12', null, null, null, null, null);
INSERT INTO `contacts` VALUES ('78', '0', '测试13', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('79', '0', '测试14', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('80', '0', '儿童', '2', '11', '232312198809088899', '13111111111', '13111111111', '', '哈尔滨', '', '150000', null, null, null, null, '20180816/229927b2a84bdaea06d376e849617d2a.jpg', null, null);
INSERT INTO `contacts` VALUES ('81', '0', '李敏', '3', null, '888888888888888888', '14745732909', '14745732909', null, '哈尔滨市香坊区成高子镇', '无', '150000', null, null, null, null, null, null, '88888888888');
INSERT INTO `contacts` VALUES ('82', '0', '李敏', '3', null, '123456456456456541', '15545264030', '14745732909', null, '', '凡人歌', '150000', null, null, null, null, null, null, '');
INSERT INTO `contacts` VALUES ('83', '0', '李敏', '3', '11', '121212121212121212', '14745498320', '14587989652', '', '', '', '', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('84', '0', '李敏', '3', '11', '252525252525252525', '14745732906', '14745732985', '', '哈尔滨', '凡人歌', '150000', null, null, null, null, '', null, '');
INSERT INTO `contacts` VALUES ('85', '0', '天1', '2', null, '232323199909090000', '13111111111', '13111111111', null, '哈哈', '', '150000', null, null, null, null, null, null, '');
INSERT INTO `contacts` VALUES ('86', '0', '天2', '2', null, '232323199909090000', '13111111111', '13111111111', null, '发发', '', '150000', null, null, null, null, null, null, '');
INSERT INTO `contacts` VALUES ('87', '0', '天3', '2', '11', '232323199909090000', '13111111111', '13111111111', '', '订单', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('88', '0', '天4', '2', '11', '232323199909090000', '13111111111', '13111111111', '', '全球', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('89', '0', '测试20', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('90', '0', '测试13', '2', '11', '231456186845625463', '15536525452', '13652485987', '', '哈尔滨市', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('91', '0', '测试4', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '', null, null);
INSERT INTO `contacts` VALUES ('92', '0', '测试6', '2', '11', '231156199956411231', '15298555556', '13562459875', '', '哈尔滨', '', '150000', null, null, null, null, '20180821/a6b94a57fd72c6e92ddc6221a8377ce8.jpg', null, null);
INSERT INTO `contacts` VALUES ('93', '0', '测试99', '2', '11', '232323199909090000', '13111111111', '13111111111', '11111111', '11111111', '', '150000', null, null, null, null, '', null, '11111111');

-- ----------------------------
-- Table structure for dead
-- ----------------------------
DROP TABLE IF EXISTS `dead`;
CREATE TABLE `dead` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cem_info_id` int(11) unsigned NOT NULL,
  `dead_name` varchar(20) NOT NULL,
  `sex` tinyint(1) unsigned DEFAULT NULL,
  `gstime` int(11) DEFAULT NULL COMMENT '出生日期（公历）',
  `gdtime` int(11) DEFAULT NULL COMMENT '逝世日期（公历）',
  `dead_address` varchar(50) DEFAULT NULL COMMENT '原籍',
  `jrtime` int(11) DEFAULT NULL COMMENT '忌日 （农历数字，用于祭祀日提醒）',
  `salesman` int(11) unsigned NOT NULL COMMENT '业务员',
  `dead_work` varchar(50) DEFAULT NULL COMMENT '工作单位',
  `gltime` int(11) unsigned zerofill DEFAULT '00000000000' COMMENT '落葬日期（公历）',
  `nstime` char(20) DEFAULT NULL COMMENT '出生日期（农历）',
  `ndtime` char(20) DEFAULT NULL COMMENT '逝世日期（农历）',
  `nltime` char(20) DEFAULT NULL COMMENT '落葬日期（农历）',
  `cstype` tinyint(1) DEFAULT NULL COMMENT '出生日期 分类 ： 2==只显示公历，3==只显示农历，4==都显示，5==都不显示',
  `lztype` tinyint(1) DEFAULT NULL COMMENT '逝世日期 类型： 2==只显示公历，3==只显示农历，4==都显示，5==都不显示',
  `sstype` tinyint(1) DEFAULT NULL COMMENT '落葬日期 类型： 2==只显示公历，3==只显示农历，4==都显示，5==都不显示',
  `cem_id` int(11) DEFAULT NULL,
  `cem_area_id` int(11) DEFAULT NULL,
  `cem_row_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT '3' COMMENT '故者落墓状态 2==已落，3==未落',
  `sta` tinyint(11) DEFAULT '3' COMMENT '安葬类别  2==二次安葬，3==首次',
  `ins_type` tinyint(1) DEFAULT '2' COMMENT '插入数据的区别  2==预定时插入，3==安葬时插入',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COMMENT='死者信息';

-- ----------------------------
-- Records of dead
-- ----------------------------
INSERT INTO `dead` VALUES ('1', '270', '李二', null, null, null, null, null, '46', null, '01534730835', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('2', '272', '李二', null, null, null, null, null, '11', null, '01534912843', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('3', '262', '李二', null, null, null, null, null, '46', null, '01534730827', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('4', '262', '李二', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('5', '263', '李二', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('6', '292', '李二', null, null, null, null, null, '11', null, '01534912855', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('7', '264', '李二', null, null, null, null, null, '11', null, '01534221932', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('8', '265', '李二', null, null, null, null, null, '11', null, '01535014592', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('9', '269', '李二', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('10', '271', '李二', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('11', '273', '李二', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('12', '276', '李二', null, null, null, null, null, '11', null, '01534221890', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('13', '282', '李二李二', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('14', '290', '李二', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('15', '290', '李二1', null, null, null, '111', null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('16', '293', '李二', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('17', '291', '李二', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('18', '291', '李二', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('19', '291', '李二', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('20', '291', '李二', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('21', '294', '李二', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('22', '306', '李二', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('23', '321', '333', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('24', '274', '1', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('25', '267', '123', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('26', '268', '李二', '2', '1531670400', '1531670400', '', '1531670400', '14', '', '01531747385', '六月初四', '六月初四', '六月初四', '2', '2', '2', '4', '1', '8', '3', '3', '2');
INSERT INTO `dead` VALUES ('27', '279', '12121', null, null, null, null, null, '11', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('28', '268', '1112', '2', '1531670400', '1531670400', '111', '1531670400', '14', '11', '01531670400', '六月初四', '六月初四', '六月初四', '2', '2', '2', '4', '1', '8', '3', '2', '2');
INSERT INTO `dead` VALUES ('29', '268', '李四', '2', '1531756800', '1531756800', '111', '1531756800', '14', '11', '01531756800', '六月初四', '六月初四', '六月初四', '2', '2', '2', '4', '1', '6', '3', '2', '2');
INSERT INTO `dead` VALUES ('30', '300', '123', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('31', '301', '1', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('32', '0', '1233', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('33', '298', '自行车', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('34', '0', '需', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('35', '334', '自行车', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('36', '319', '1', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('37', '321', '789', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('38', '0', '4674', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('39', '0', '2123饿', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('40', '290', 'xx', '2', '1532448000', '1532448000', 'xx', '1532448000', '11', 'xx', '01532448000', null, null, null, '2', '2', '2', '4', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('41', '291', 'ss', '2', '1532448000', '1532448000', 's', null, '11', 'ss', '01532448000', null, null, null, '2', '2', '2', '4', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('42', '293', '1', '2', '1532448000', '1532448000', '111', null, '11', '1', '01532448000', null, null, null, '2', '2', '2', '4', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('43', '308', '等等', '2', '1532448000', '1532448000', '等等', '1532448000', '11', '等等', '01532448000', null, null, null, '2', '2', '2', '4', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('44', '300', '爱的', '2', '1532448000', '1532448000', '爱的', '1532448000', '11', '爱的', '01532448000', null, null, null, '2', '2', '2', '4', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('45', '274', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '4', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('46', '282', '传奇', '2', '1532620800', '1532620800', '传奇', '1532620800', '11', '传奇', '01532620800', null, null, null, '2', '2', '2', '4', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('47', '0', '热污染问题', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('48', '0', '1的', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('49', '0', '111详细信息', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('50', '0', '刘凯及', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('51', '0', '你好', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('52', '410', '你好', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '17', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('53', '0', '测试', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('54', '0', '街道口附近老师', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('55', '409', '梁硕去', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('56', '468', '武威', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('57', '468', '武松', '2', '-644227200', '1222185600', '', null, '11', '', '01533398400', null, null, null, '2', '2', '2', '18', null, null, '3', '2', '2');
INSERT INTO `dead` VALUES ('58', '469', '何欢', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('59', '469', '何欢', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('60', '623', '', null, null, null, null, null, '0', null, '01534220852', null, null, null, null, null, null, null, null, null, '2', '3', '2');
INSERT INTO `dead` VALUES ('61', '623', '', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('62', '662', '', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('63', '662', '', null, null, null, null, null, '0', null, '00000000000', null, null, null, null, null, null, null, null, null, '3', '3', '2');
INSERT INTO `dead` VALUES ('64', '631', '', '2', null, null, '', null, '11', '', '01534301308', null, null, null, '2', '2', '2', '21', null, null, '2', '2', '3');
INSERT INTO `dead` VALUES ('65', '632', '', '2', null, null, '', null, '11', '', '01534301304', null, null, null, '2', '2', '2', '21', null, null, '2', '2', '3');
INSERT INTO `dead` VALUES ('66', '626', '', '2', null, null, '', null, '11', '', '01534301294', null, null, null, '2', '2', '2', '21', null, null, '2', '2', '3');
INSERT INTO `dead` VALUES ('67', '635', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '21', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('68', '634', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '21', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('69', '637', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '21', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('70', '688', '无人', '3', '515520000', '1525536000', '山东省', null, '11', '', '01534176000', null, null, null, '2', '2', '2', '30', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('71', '687', '无人', '3', '515520000', '1525536000', '', null, '11', '', '01534176000', null, null, null, '2', '2', '2', '30', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('72', '629', '', '2', null, null, '', null, '13', '', '00000000000', null, null, null, '2', '2', '2', '21', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('73', '693', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '30', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('74', '704', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '29', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('75', '721', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '29', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('76', '705', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '29', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('77', '692', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '30', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('78', '469', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '18', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('90', '722', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '31', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('91', '724', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '31', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('92', '726', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '31', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('93', '762', '无人', '3', '515520000', '1525536000', '山东省', null, '17', '', '01534913017', null, null, null, '2', '2', '2', '32', null, null, '2', '2', '3');
INSERT INTO `dead` VALUES ('94', '753', '无人', '3', '1534176000', '1534176000', '山东省', '1533657600', '11', '', '01533657600', null, null, null, '2', '2', '2', '32', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('95', '410', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '17', null, null, '3', '2', '3');
INSERT INTO `dead` VALUES ('96', '762', '', '2', null, null, '', null, '11', '', '00000000000', null, null, null, '2', '2', '2', '32', null, null, '3', '2', '3');

-- ----------------------------
-- Table structure for dep_sell
-- ----------------------------
DROP TABLE IF EXISTS `dep_sell`;
CREATE TABLE `dep_sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_mw_id` int(11) DEFAULT NULL COMMENT '寄存位ID',
  `long_title` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL COMMENT '原始价格',
  `jcm` decimal(10,2) DEFAULT NULL COMMENT '寄存位费',
  `glmo` decimal(10,2) DEFAULT NULL COMMENT '管理费',
  `glmt` int(11) DEFAULT NULL COMMENT '年限',
  `summoney` decimal(10,2) DEFAULT NULL COMMENT '应付总额',
  `settime` int(11) DEFAULT NULL COMMENT '定购日期',
  `starttime` int(11) DEFAULT NULL COMMENT '使用开始',
  `endtime` int(11) DEFAULT NULL COMMENT '使用结束',
  `uname` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '联系人姓名',
  `ucode` char(18) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '身份证号',
  `phone` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '联系电话',
  `gzdw` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '工作单位',
  `email` char(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '电子邮件',
  `home` char(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '家庭住址',
  `gzgx` int(11) DEFAULT NULL COMMENT '故者关系',
  `sex` tinyint(1) DEFAULT NULL COMMENT '性别',
  `mobile` char(11) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '手机',
  `staffid` int(11) DEFAULT NULL COMMENT '业务员',
  `beizhu` text COLLATE utf8mb4_bin COMMENT '备注',
  `time` int(11) DEFAULT NULL,
  `sumgl` decimal(10,2) DEFAULT NULL COMMENT '管理费总额',
  `sta` tinyint(1) DEFAULT '3' COMMENT '是否已交费 2==已缴费，3==未交费',
  `sysid` int(11) DEFAULT NULL,
  `sysid_s` int(11) DEFAULT NULL,
  `sysid_c` int(11) DEFAULT NULL,
  `sysysid` int(11) DEFAULT NULL,
  `con` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '证书编号',
  `gname` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '故者姓名',
  `gsex` tinyint(1) DEFAULT NULL COMMENT '性别',
  `address` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '原       籍',
  `work` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '工作单位',
  `gtime` int(11) DEFAULT NULL COMMENT '出生日期',
  `diestarttime` int(11) DEFAULT NULL COMMENT '逝世日期',
  `dieendtime` int(11) DEFAULT NULL COMMENT '落葬日期',
  `syszt` tinyint(1) DEFAULT '3' COMMENT '是否已下葬 2==已下葬，',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='寄存位销售';

-- ----------------------------
-- Records of dep_sell
-- ----------------------------
INSERT INTO `dep_sell` VALUES ('1', '2', '123asd-123-123-123', '1234.00', '123.00', '123.00', '123', '15252.00', '1530288000', '1530288000', '1530288000', '123', '123', '123', '123', '123', '1', '11', '2', '13030040712', '11', 0x313233, '1530347721', '15129.00', '2', '9', '36', '39', '4', 'Con20180630162950', '1', '3', '1', '1', '1530288000', '1530288000', '1530288000', '2');
INSERT INTO `dep_sell` VALUES ('2', '1', '11-3-3排-1', '2.00', '1.00', '1.00', '1', '2.00', '1530288000', '1530288000', '1530288000', '1', '1', '1', '1', '1', '1', '11', '2', '13030040712', '11', 0x31, '1530349033', '1.00', '2', '4', '2', '21', '4', 'Con20180630165713', null, null, null, null, null, null, null, '3');

-- ----------------------------
-- Table structure for glist
-- ----------------------------
DROP TABLE IF EXISTS `glist`;
CREATE TABLE `glist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '物品名称',
  `price` decimal(10,2) DEFAULT NULL COMMENT '物品价格',
  `sn` char(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '物品编号',
  `staffid` int(11) DEFAULT NULL COMMENT '操作员',
  `num` int(11) DEFAULT NULL COMMENT '购买数量',
  `sta` tinyint(1) DEFAULT '3' COMMENT '是否已付款 2==已付款，3==未付款',
  `time` int(11) DEFAULT NULL COMMENT '定购日期',
  `gsetid` int(11) DEFAULT NULL COMMENT '物品ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='以购买物品明细';

-- ----------------------------
-- Records of glist
-- ----------------------------
INSERT INTO `glist` VALUES ('7', '2', '2.00', '2', '11', '1', '2', '1529721588', '3');
INSERT INTO `glist` VALUES ('8', '1', '1.00', '1', '11', '1', '2', '1529721588', '2');
INSERT INTO `glist` VALUES ('10', '2', '2.00', '2', '11', '0', '2', '1529721588', '3');
INSERT INTO `glist` VALUES ('11', '2', '2.00', '2', '11', '0', '2', '1529722755', '3');
INSERT INTO `glist` VALUES ('12', '2', '2.00', '2', '11', '0', '3', '1530348252', '3');
INSERT INTO `glist` VALUES ('13', '2', '2.00', '2', '11', '0', '2', '1530348252', '3');
INSERT INTO `glist` VALUES ('15', '2', '2.00', '2', '11', '0', '2', '1530348284', '3');
INSERT INTO `glist` VALUES ('16', '2', '2.00', '2', '11', '0', '3', '1530348284', '3');
INSERT INTO `glist` VALUES ('18', '2', '2.00', '2', '11', '0', '3', '1530348385', '3');
INSERT INTO `glist` VALUES ('19', '2', '2.00', '2', '11', '221', '3', '1530348695', '3');
INSERT INTO `glist` VALUES ('20', '2', '2.00', '2', '11', '1', '3', '1530348764', '3');

-- ----------------------------
-- Table structure for grave
-- ----------------------------
DROP TABLE IF EXISTS `grave`;
CREATE TABLE `grave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `djlx` tinyint(1) DEFAULT NULL COMMENT '登记类型 2==祭扫，3==安葬',
  `status` int(11) DEFAULT NULL COMMENT '安葬类型',
  `num` int(11) DEFAULT NULL COMMENT '来访份数',
  `prop` int(11) DEFAULT NULL COMMENT '来访人数',
  `roleid` int(11) DEFAULT NULL COMMENT '接 待 员',
  `time` int(11) DEFAULT NULL COMMENT '来访日期',
  `cart_w` int(11) DEFAULT NULL COMMENT '来访车辆--微型车',
  `cart_x` int(11) DEFAULT NULL COMMENT '小型车',
  `cart_z` int(11) DEFAULT NULL COMMENT '中型车',
  `cart_d` int(11) DEFAULT NULL COMMENT '大型车',
  `cont` text COLLATE utf8mb4_bin COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='祭扫安葬信息';

-- ----------------------------
-- Records of grave
-- ----------------------------
INSERT INTO `grave` VALUES ('2', '2', '1', '1111', '1111', '1', '1530028800', '111', '1', '1', '1', 0x31);
INSERT INTO `grave` VALUES ('3', '3', '1', '22', '22', '2', '1530028800', '22', '22', '22', '22', 0x3232);
INSERT INTO `grave` VALUES ('4', '3', '1', '33', '33', '2', '1530028800', '33', '33', '33', '33', 0x3333);
INSERT INTO `grave` VALUES ('5', '3', '1', '44', '44', '2', '1530028800', '44', '44', '44', '44', 0x3434);
INSERT INTO `grave` VALUES ('6', '3', '4', '6', '6', '1', '1530028800', '6', '6', '6', '6', 0x36);
INSERT INTO `grave` VALUES ('7', '2', null, '11', '1', '1', '1530028800', '1', '111', '1', '1', 0x31);
INSERT INTO `grave` VALUES ('8', '2', null, '1', '1', '2', '1532880000', '1', '0', '0', '0', '');
INSERT INTO `grave` VALUES ('9', '3', '3', '1', '1', '2', '1533052800', '1', '0', '0', '1', '');
INSERT INTO `grave` VALUES ('10', '2', null, '1', '1', '1', '1532966400', '1', '0', '0', '0', '');

-- ----------------------------
-- Table structure for gset
-- ----------------------------
DROP TABLE IF EXISTS `gset`;
CREATE TABLE `gset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '物品名称',
  `price` decimal(10,2) DEFAULT NULL COMMENT '物品价格',
  `type` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '物品单位',
  `cont` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '物品简介',
  `sn` int(11) DEFAULT NULL COMMENT '物品编号',
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='物品设置';

-- ----------------------------
-- Records of gset
-- ----------------------------
INSERT INTO `gset` VALUES ('2', '1', '1.00', '个', '奥术大师', '1', null);
INSERT INTO `gset` VALUES ('3', '2', '2.00', '个', '阿达', '2', null);

-- ----------------------------
-- Table structure for gset_hlist
-- ----------------------------
DROP TABLE IF EXISTS `gset_hlist`;
CREATE TABLE `gset_hlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `cd` int(11) DEFAULT NULL,
  `wd` int(11) DEFAULT NULL,
  `hd` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sysysid` int(11) DEFAULT NULL COMMENT '选择材质 tplid',
  `time` int(11) DEFAULT NULL,
  `staffid` int(11) DEFAULT NULL COMMENT '操作员',
  `sta` tinyint(1) DEFAULT NULL COMMENT '是否已收费确认 2==已确认，3==未确认',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='骨灰盒销售';

-- ----------------------------
-- Records of gset_hlist
-- ----------------------------
INSERT INTO `gset_hlist` VALUES ('5', '2', '2', '2', '2', '2', '35', '1529916051', '11', '2');
INSERT INTO `gset_hlist` VALUES ('6', 'asd', '1', '1', '1', '1', '36', '1529916132', '11', '2');
INSERT INTO `gset_hlist` VALUES ('7', 'asd', '1', '1', '1', '1', '36', '1530348921', '11', '3');
INSERT INTO `gset_hlist` VALUES ('8', '2', '2', '2', '2', '2', '35', '1530348938', '11', '3');

-- ----------------------------
-- Table structure for otm
-- ----------------------------
DROP TABLE IF EXISTS `otm`;
CREATE TABLE `otm` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ok` int(11) unsigned NOT NULL,
  `mk` int(11) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=utf8mb4 COMMENT='one to many 表\nok one_key\nmk many_key\n一对多关系万能表';

-- ----------------------------
-- Records of otm
-- ----------------------------
INSERT INTO `otm` VALUES ('178', '0', '66', '0');
INSERT INTO `otm` VALUES ('202', '4', '1', '1');
INSERT INTO `otm` VALUES ('203', '4', '2', '1');
INSERT INTO `otm` VALUES ('204', '4', '3', '1');
INSERT INTO `otm` VALUES ('205', '4', '4', '1');
INSERT INTO `otm` VALUES ('206', '4', '5', '1');
INSERT INTO `otm` VALUES ('207', '4', '6', '1');
INSERT INTO `otm` VALUES ('208', '4', '7', '1');
INSERT INTO `otm` VALUES ('209', '4', '8', '1');
INSERT INTO `otm` VALUES ('210', '4', '9', '1');
INSERT INTO `otm` VALUES ('211', '4', '10', '1');
INSERT INTO `otm` VALUES ('212', '4', '11', '1');
INSERT INTO `otm` VALUES ('213', '4', '12', '1');
INSERT INTO `otm` VALUES ('214', '4', '13', '1');
INSERT INTO `otm` VALUES ('215', '4', '14', '1');
INSERT INTO `otm` VALUES ('216', '4', '15', '1');
INSERT INTO `otm` VALUES ('217', '4', '16', '1');
INSERT INTO `otm` VALUES ('218', '4', '17', '1');
INSERT INTO `otm` VALUES ('219', '4', '21', '1');
INSERT INTO `otm` VALUES ('220', '4', '22', '1');
INSERT INTO `otm` VALUES ('221', '4', '23', '1');
INSERT INTO `otm` VALUES ('222', '4', '24', '1');
INSERT INTO `otm` VALUES ('223', '4', '26', '1');
INSERT INTO `otm` VALUES ('224', '4', '37', '1');
INSERT INTO `otm` VALUES ('225', '4', '41', '1');
INSERT INTO `otm` VALUES ('226', '4', '42', '1');
INSERT INTO `otm` VALUES ('227', '4', '43', '1');
INSERT INTO `otm` VALUES ('232', '2', '1', '1');
INSERT INTO `otm` VALUES ('233', '2', '2', '1');
INSERT INTO `otm` VALUES ('234', '2', '3', '1');
INSERT INTO `otm` VALUES ('235', '2', '4', '1');
INSERT INTO `otm` VALUES ('239', '3', '1', '1');
INSERT INTO `otm` VALUES ('240', '3', '2', '1');
INSERT INTO `otm` VALUES ('241', '3', '3', '1');
INSERT INTO `otm` VALUES ('242', '3', '4', '1');
INSERT INTO `otm` VALUES ('243', '3', '5', '1');
INSERT INTO `otm` VALUES ('244', '3', '6', '1');
INSERT INTO `otm` VALUES ('245', '3', '7', '1');
INSERT INTO `otm` VALUES ('246', '3', '8', '1');
INSERT INTO `otm` VALUES ('247', '3', '9', '1');
INSERT INTO `otm` VALUES ('248', '3', '10', '1');
INSERT INTO `otm` VALUES ('249', '3', '11', '1');
INSERT INTO `otm` VALUES ('250', '3', '12', '1');
INSERT INTO `otm` VALUES ('251', '3', '13', '1');
INSERT INTO `otm` VALUES ('252', '3', '14', '1');
INSERT INTO `otm` VALUES ('253', '3', '15', '1');
INSERT INTO `otm` VALUES ('254', '3', '16', '1');
INSERT INTO `otm` VALUES ('255', '3', '17', '1');
INSERT INTO `otm` VALUES ('256', '3', '21', '1');
INSERT INTO `otm` VALUES ('257', '3', '22', '1');
INSERT INTO `otm` VALUES ('258', '3', '23', '1');
INSERT INTO `otm` VALUES ('259', '3', '24', '1');
INSERT INTO `otm` VALUES ('260', '3', '26', '1');
INSERT INTO `otm` VALUES ('261', '3', '37', '1');
INSERT INTO `otm` VALUES ('262', '3', '41', '1');
INSERT INTO `otm` VALUES ('263', '3', '42', '1');
INSERT INTO `otm` VALUES ('264', '3', '43', '1');
INSERT INTO `otm` VALUES ('265', '1', '1', '1');
INSERT INTO `otm` VALUES ('266', '1', '2', '1');
INSERT INTO `otm` VALUES ('267', '1', '3', '1');
INSERT INTO `otm` VALUES ('268', '1', '4', '1');
INSERT INTO `otm` VALUES ('269', '1', '5', '1');
INSERT INTO `otm` VALUES ('270', '1', '6', '1');
INSERT INTO `otm` VALUES ('271', '1', '7', '1');
INSERT INTO `otm` VALUES ('272', '1', '8', '1');
INSERT INTO `otm` VALUES ('273', '1', '9', '1');
INSERT INTO `otm` VALUES ('274', '1', '10', '1');
INSERT INTO `otm` VALUES ('275', '1', '11', '1');
INSERT INTO `otm` VALUES ('276', '1', '12', '1');
INSERT INTO `otm` VALUES ('277', '1', '13', '1');
INSERT INTO `otm` VALUES ('278', '1', '14', '1');
INSERT INTO `otm` VALUES ('279', '1', '15', '1');
INSERT INTO `otm` VALUES ('280', '1', '16', '1');
INSERT INTO `otm` VALUES ('281', '1', '17', '1');
INSERT INTO `otm` VALUES ('282', '1', '21', '1');
INSERT INTO `otm` VALUES ('283', '1', '22', '1');
INSERT INTO `otm` VALUES ('284', '1', '23', '1');
INSERT INTO `otm` VALUES ('285', '1', '24', '1');
INSERT INTO `otm` VALUES ('286', '1', '26', '1');
INSERT INTO `otm` VALUES ('287', '1', '37', '1');
INSERT INTO `otm` VALUES ('288', '1', '41', '1');
INSERT INTO `otm` VALUES ('289', '1', '42', '1');
INSERT INTO `otm` VALUES ('290', '1', '43', '1');
INSERT INTO `otm` VALUES ('291', '1', '25', '1');
INSERT INTO `otm` VALUES ('292', '1', '27', '1');
INSERT INTO `otm` VALUES ('293', '1', '28', '1');
INSERT INTO `otm` VALUES ('294', '1', '29', '1');
INSERT INTO `otm` VALUES ('295', '1', '30', '1');
INSERT INTO `otm` VALUES ('296', '1', '31', '1');
INSERT INTO `otm` VALUES ('297', '1', '32', '1');
INSERT INTO `otm` VALUES ('298', '1', '67', '1');
INSERT INTO `otm` VALUES ('299', '1', '68', '1');
INSERT INTO `otm` VALUES ('300', '1', '69', '1');
INSERT INTO `otm` VALUES ('301', '1', '70', '1');
INSERT INTO `otm` VALUES ('302', '1', '82', '1');
INSERT INTO `otm` VALUES ('303', '1', '83', '1');
INSERT INTO `otm` VALUES ('304', '1', '84', '1');
INSERT INTO `otm` VALUES ('305', '1', '85', '1');
INSERT INTO `otm` VALUES ('306', '1', '86', '1');
INSERT INTO `otm` VALUES ('307', '1', '33', '1');
INSERT INTO `otm` VALUES ('308', '1', '34', '1');
INSERT INTO `otm` VALUES ('309', '1', '35', '1');
INSERT INTO `otm` VALUES ('310', '1', '36', '1');
INSERT INTO `otm` VALUES ('311', '1', '44', '1');
INSERT INTO `otm` VALUES ('312', '1', '45', '1');
INSERT INTO `otm` VALUES ('313', '1', '46', '1');
INSERT INTO `otm` VALUES ('314', '1', '47', '1');
INSERT INTO `otm` VALUES ('315', '1', '48', '1');
INSERT INTO `otm` VALUES ('316', '1', '49', '1');
INSERT INTO `otm` VALUES ('317', '1', '50', '1');
INSERT INTO `otm` VALUES ('318', '1', '51', '1');
INSERT INTO `otm` VALUES ('319', '1', '52', '1');
INSERT INTO `otm` VALUES ('320', '1', '53', '1');
INSERT INTO `otm` VALUES ('321', '1', '54', '1');
INSERT INTO `otm` VALUES ('322', '1', '55', '1');
INSERT INTO `otm` VALUES ('323', '1', '57', '1');
INSERT INTO `otm` VALUES ('324', '1', '58', '1');
INSERT INTO `otm` VALUES ('325', '1', '71', '1');
INSERT INTO `otm` VALUES ('326', '1', '72', '1');
INSERT INTO `otm` VALUES ('327', '1', '73', '1');
INSERT INTO `otm` VALUES ('328', '1', '74', '1');
INSERT INTO `otm` VALUES ('329', '1', '75', '1');
INSERT INTO `otm` VALUES ('330', '1', '76', '1');
INSERT INTO `otm` VALUES ('331', '1', '77', '1');
INSERT INTO `otm` VALUES ('332', '1', '78', '1');
INSERT INTO `otm` VALUES ('333', '1', '79', '1');
INSERT INTO `otm` VALUES ('334', '1', '80', '1');
INSERT INTO `otm` VALUES ('335', '1', '81', '1');
INSERT INTO `otm` VALUES ('336', '1', '87', '1');
INSERT INTO `otm` VALUES ('337', '1', '88', '1');
INSERT INTO `otm` VALUES ('338', '1', '89', '1');
INSERT INTO `otm` VALUES ('339', '1', '90', '1');
INSERT INTO `otm` VALUES ('340', '1', '91', '1');
INSERT INTO `otm` VALUES ('341', '1', '92', '1');
INSERT INTO `otm` VALUES ('342', '1', '93', '1');
INSERT INTO `otm` VALUES ('343', '1', '59', '1');
INSERT INTO `otm` VALUES ('344', '1', '60', '1');
INSERT INTO `otm` VALUES ('345', '1', '61', '1');
INSERT INTO `otm` VALUES ('346', '1', '62', '1');
INSERT INTO `otm` VALUES ('347', '1', '63', '1');
INSERT INTO `otm` VALUES ('348', '1', '64', '1');
INSERT INTO `otm` VALUES ('349', '1', '65', '1');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `discount` decimal(11,2) unsigned NOT NULL DEFAULT '1.00',
  `sn` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '测试12', '0.50', '1');
INSERT INTO `role` VALUES ('2', '22', '1.00', '');
INSERT INTO `role` VALUES ('3', 'dd', '0.01', '3');
INSERT INTO `role` VALUES ('4', '11', '0.90', '');
INSERT INTO `role` VALUES ('5', '1', '1.00', null);
INSERT INTO `role` VALUES ('6', '14745732909', '0.50', null);
INSERT INTO `role` VALUES ('7', '123', '1.00', null);
INSERT INTO `role` VALUES ('8', '12211', '1.00', null);

-- ----------------------------
-- Table structure for staff
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(11) NOT NULL COMMENT 'tel',
  `nickname` varchar(20) DEFAULT NULL,
  `pwd` char(32) NOT NULL,
  `salt` char(4) NOT NULL,
  `show_pwd` varchar(20) DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '0 off   1  open',
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `idcard` char(18) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='员工表';

-- ----------------------------
-- Records of staff
-- ----------------------------
INSERT INTO `staff` VALUES ('11', '2system', '223', '', 'Nmin', '321321', '1', '2', '221');
INSERT INTO `staff` VALUES ('13', '15146059527', '15146059527', '3677eb93e81a4fbe00f2feb4e5246e31', 'Ysvq', null, '1', '1', 'das23');
INSERT INTO `staff` VALUES ('14', '13030040712', '13030040712', '3677eb93e81a4fbe00f2feb4e5246e31', 'Ysvq', '321321', '1', '1', 'das23');
INSERT INTO `staff` VALUES ('15', '123', '123', 'e48ddd4bd11aa89763ba5cd5b968149b', 'UaHP', '123123', '1', '2', '123123');
INSERT INTO `staff` VALUES ('16', '130111', '1111', 'ba5d05861bedab89ae089ec83f6778cd', 'Igop', '111111', '1', '2', '1');
INSERT INTO `staff` VALUES ('17', '14745732909', '李敏', '26313b56be2dfc8750b1f69eff77247f', 'EYDV', '123123', '1', '7', '111111111111111111');
INSERT INTO `staff` VALUES ('18', '14745732909', '李敏', '4e2386a9ef2fb2c2e7ae1ca4c4c76f9d', 'NXWW', '123123', '1', '6', '111111111111111111');

-- ----------------------------
-- Table structure for sys_list
-- ----------------------------
DROP TABLE IF EXISTS `sys_list`;
CREATE TABLE `sys_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `cont` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='寄存厅';

-- ----------------------------
-- Records of sys_list
-- ----------------------------
INSERT INTO `sys_list` VALUES ('8', '测试1', '空', null);
INSERT INTO `sys_list` VALUES ('10', '佛光阁', '空', '20180802/7b9da0f6d6f582788d00ce1cd7967644.png');

-- ----------------------------
-- Table structure for sys_list_c
-- ----------------------------
DROP TABLE IF EXISTS `sys_list_c`;
CREATE TABLE `sys_list_c` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sysid` int(11) unsigned NOT NULL COMMENT '寄存厅',
  `sysid_s` int(11) unsigned NOT NULL COMMENT '寄存室',
  `title` varchar(100) NOT NULL,
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COMMENT='寄存层';

-- ----------------------------
-- Records of sys_list_c
-- ----------------------------
INSERT INTO `sys_list_c` VALUES ('21', '4', '2', '11', '11');
INSERT INTO `sys_list_c` VALUES ('22', '6', '3', '1排', '11');
INSERT INTO `sys_list_c` VALUES ('23', '6', '3', '2排', '11');
INSERT INTO `sys_list_c` VALUES ('24', '6', '3', '3排', '11');
INSERT INTO `sys_list_c` VALUES ('25', '6', '3', '4排', '11');
INSERT INTO `sys_list_c` VALUES ('26', '6', '3', '5排', '11');
INSERT INTO `sys_list_c` VALUES ('27', '6', '3', '6排', '11');
INSERT INTO `sys_list_c` VALUES ('28', '6', '3', '7排', '11');
INSERT INTO `sys_list_c` VALUES ('29', '6', '3', '8排', '11');
INSERT INTO `sys_list_c` VALUES ('30', '6', '3', '9排', '11');
INSERT INTO `sys_list_c` VALUES ('31', '6', '3', '10排', '11');
INSERT INTO `sys_list_c` VALUES ('32', '6', '3', '11排', '11');
INSERT INTO `sys_list_c` VALUES ('39', '9', '36', '123', '0');
INSERT INTO `sys_list_c` VALUES ('40', '8', '42', '测试1', '10');

-- ----------------------------
-- Table structure for sys_list_l
-- ----------------------------
DROP TABLE IF EXISTS `sys_list_l`;
CREATE TABLE `sys_list_l` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `cd` int(11) DEFAULT NULL,
  `wd` int(11) DEFAULT NULL,
  `hd` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sysysid` int(11) DEFAULT NULL COMMENT '选择材质 tplid',
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='骨灰盒设置';

-- ----------------------------
-- Records of sys_list_l
-- ----------------------------
INSERT INTO `sys_list_l` VALUES ('2', '2', '2', '2', '2', '2', '35', null);
INSERT INTO `sys_list_l` VALUES ('3', '1', '1', '1', '1', '1', '35', null);
INSERT INTO `sys_list_l` VALUES ('4', 'asd', '1', '1', '1', '1', '36', '1529632470');

-- ----------------------------
-- Table structure for sys_list_s
-- ----------------------------
DROP TABLE IF EXISTS `sys_list_s`;
CREATE TABLE `sys_list_s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sysid` int(11) DEFAULT NULL COMMENT '寄存厅id',
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '寄存室编号',
  `num` int(11) DEFAULT NULL COMMENT '寄存室数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='寄存室';

-- ----------------------------
-- Records of sys_list_s
-- ----------------------------
INSERT INTO `sys_list_s` VALUES ('1', '3', '1', '1');
INSERT INTO `sys_list_s` VALUES ('2', '4', '12', '12');
INSERT INTO `sys_list_s` VALUES ('3', '6', '3', '3');
INSERT INTO `sys_list_s` VALUES ('4', '3', '2w', '22');
INSERT INTO `sys_list_s` VALUES ('5', '3', '1区', null);
INSERT INTO `sys_list_s` VALUES ('6', '3', '2区', null);
INSERT INTO `sys_list_s` VALUES ('7', '3', '3区', null);
INSERT INTO `sys_list_s` VALUES ('8', '3', '4区', null);
INSERT INTO `sys_list_s` VALUES ('9', '3', '5区', null);
INSERT INTO `sys_list_s` VALUES ('10', '3', '6区', null);
INSERT INTO `sys_list_s` VALUES ('11', '3', '7区', null);
INSERT INTO `sys_list_s` VALUES ('12', '3', '8区', null);
INSERT INTO `sys_list_s` VALUES ('13', '3', '9区', null);
INSERT INTO `sys_list_s` VALUES ('15', '3', '11区', null);
INSERT INTO `sys_list_s` VALUES ('16', '3', '123', null);
INSERT INTO `sys_list_s` VALUES ('17', '3', '13区', null);
INSERT INTO `sys_list_s` VALUES ('18', '3', '14区', null);
INSERT INTO `sys_list_s` VALUES ('19', '3', '15区', null);
INSERT INTO `sys_list_s` VALUES ('20', '3', '16区', null);
INSERT INTO `sys_list_s` VALUES ('21', '3', '17区', null);
INSERT INTO `sys_list_s` VALUES ('22', '3', '18区', null);
INSERT INTO `sys_list_s` VALUES ('23', '3', '19区', null);
INSERT INTO `sys_list_s` VALUES ('24', '3', '20区', null);
INSERT INTO `sys_list_s` VALUES ('36', '9', '123', '0');
INSERT INTO `sys_list_s` VALUES ('37', '10', '1区', null);
INSERT INTO `sys_list_s` VALUES ('38', '10', '2区', null);
INSERT INTO `sys_list_s` VALUES ('39', '10', '3区', null);
INSERT INTO `sys_list_s` VALUES ('40', '10', '4区', null);
INSERT INTO `sys_list_s` VALUES ('41', '10', '5区', null);
INSERT INTO `sys_list_s` VALUES ('42', '8', '测试1', '10');

-- ----------------------------
-- Table structure for sys_list_y
-- ----------------------------
DROP TABLE IF EXISTS `sys_list_y`;
CREATE TABLE `sys_list_y` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='寄存位样式';

-- ----------------------------
-- Records of sys_list_y
-- ----------------------------
INSERT INTO `sys_list_y` VALUES ('3', 'A1', null);
INSERT INTO `sys_list_y` VALUES ('4', 'A2', null);
INSERT INTO `sys_list_y` VALUES ('5', null, '1534213444');
INSERT INTO `sys_list_y` VALUES ('6', null, '1534213455');
INSERT INTO `sys_list_y` VALUES ('8', null, '1534236292');
INSERT INTO `sys_list_y` VALUES ('9', '440', '1534236300');

-- ----------------------------
-- Table structure for sys_mw
-- ----------------------------
DROP TABLE IF EXISTS `sys_mw`;
CREATE TABLE `sys_mw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '寄存位号(名称)',
  `sysid` int(11) DEFAULT NULL COMMENT '寄存厅',
  `sysid_s` int(11) DEFAULT NULL COMMENT '寄存室',
  `sysid_c` int(11) DEFAULT NULL COMMENT '寄存层',
  `sysysid` int(11) DEFAULT NULL COMMENT '寄存位样式',
  `syszt` int(11) DEFAULT NULL COMMENT '寄存位状态 1==空闲，2==已预订，3==已安葬',
  `money` decimal(10,2) DEFAULT NULL COMMENT '寄存位类型',
  `long_title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='寄存位设置';

-- ----------------------------
-- Records of sys_mw
-- ----------------------------
INSERT INTO `sys_mw` VALUES ('1', '2', '4', '2', '21', '4', '2', '2.00', '11-3-3排-1', '1529555329');
INSERT INTO `sys_mw` VALUES ('2', '1234', '9', '36', '39', '4', '3', '1234.00', '123asd-123-123-123', '1529661810');

-- ----------------------------
-- Table structure for template
-- ----------------------------
DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='文本模板 打印合同';

-- ----------------------------
-- Records of template
-- ----------------------------

-- ----------------------------
-- Table structure for tpl
-- ----------------------------
DROP TABLE IF EXISTS `tpl`;
CREATE TABLE `tpl` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_by_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `type` tinyint(2) unsigned NOT NULL,
  `sn` varchar(200) DEFAULT NULL,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COMMENT='公用信息表';

-- ----------------------------
-- Records of tpl
-- ----------------------------
INSERT INTO `tpl` VALUES ('1', '0', '迁坟', '10', null, '0');
INSERT INTO `tpl` VALUES ('2', '0', '首次安葬', '10', null, '0');
INSERT INTO `tpl` VALUES ('3', '0', '首次即时安葬', '10', null, '0');
INSERT INTO `tpl` VALUES ('4', '0', '迁坟及时安葬', '10', null, '0');
INSERT INTO `tpl` VALUES ('5', '0', '二次安葬', '10', null, '0');
INSERT INTO `tpl` VALUES ('7', '0', '单人墓', '2', null, '0');
INSERT INTO `tpl` VALUES ('8', '1', '双人墓', '2', '', '0');
INSERT INTO `tpl` VALUES ('9', '0', '家族墓', '2', null, '0');
INSERT INTO `tpl` VALUES ('10', '0', '双人艺术墓', '2', null, '0');
INSERT INTO `tpl` VALUES ('11', '0', '其', '4', '', '0');
INSERT INTO `tpl` VALUES ('12', '0', '班车', '5', null, '0');
INSERT INTO `tpl` VALUES ('13', '0', '自驾', '5', null, '0');
INSERT INTO `tpl` VALUES ('14', '0', '打车', '5', null, '0');
INSERT INTO `tpl` VALUES ('15', '0', '公交', '5', null, '0');
INSERT INTO `tpl` VALUES ('16', '0', '价格贵', '6', null, '0');
INSERT INTO `tpl` VALUES ('17', '0', '与其他陵园对比', '6', '22', '0');
INSERT INTO `tpl` VALUES ('18', '0', '与家人商量', '6', null, '0');
INSERT INTO `tpl` VALUES ('19', '0', '找人打折', '6', null, '0');
INSERT INTO `tpl` VALUES ('20', '0', '无', '6', null, '0');
INSERT INTO `tpl` VALUES ('21', '0', '找风水先生', '6', null, '0');
INSERT INTO `tpl` VALUES ('22', '0', '家人不齐', '6', null, '0');
INSERT INTO `tpl` VALUES ('23', '0', '初步了解', '6', null, '0');
INSERT INTO `tpl` VALUES ('24', '0', '等折扣', '6', null, '0');
INSERT INTO `tpl` VALUES ('25', '0', '等新墓区', '6', null, '0');
INSERT INTO `tpl` VALUES ('26', '0', '意见不统一', '6', null, '0');
INSERT INTO `tpl` VALUES ('27', '0', '没相中', '6', null, '0');
INSERT INTO `tpl` VALUES ('28', '0', '成交', '7', null, '0');
INSERT INTO `tpl` VALUES ('29', '0', '预定', '7', null, '0');
INSERT INTO `tpl` VALUES ('30', '0', '未成交', '7', null, '0');
INSERT INTO `tpl` VALUES ('31', '0', '退墓', '7', null, '0');
INSERT INTO `tpl` VALUES ('32', '0', '退定金', '7', null, '0');
INSERT INTO `tpl` VALUES ('33', '0', '墓位调换', '7', null, '0');
INSERT INTO `tpl` VALUES ('34', '0', '定金调换', '7', null, '0');
INSERT INTO `tpl` VALUES ('35', '0', '测试', '3', '222', '0');
INSERT INTO `tpl` VALUES ('36', '0', 'aa', '3', '222', '0');
INSERT INTO `tpl` VALUES ('37', '0', 'A1型', '8', '222', '0');
INSERT INTO `tpl` VALUES ('38', '0', '空闲', '9', null, '0');
INSERT INTO `tpl` VALUES ('39', '0', '已预定', '9', null, '0');
INSERT INTO `tpl` VALUES ('40', '0', '22222', '14', null, '0');
INSERT INTO `tpl` VALUES ('41', '0', '已下葬', '9', null, '0');
INSERT INTO `tpl` VALUES ('42', '0', '首次', '13', null, '0');
INSERT INTO `tpl` VALUES ('43', '0', '多次', '13', null, '0');
INSERT INTO `tpl` VALUES ('44', '0', '已购买', '9', '', '0');
INSERT INTO `tpl` VALUES ('45', '0', '1', '8', null, '0');
INSERT INTO `tpl` VALUES ('46', '0', '父子', '4', null, '0');
INSERT INTO `tpl` VALUES ('48', '0', '空墓', '2', null, '0');
INSERT INTO `tpl` VALUES ('49', '0', 'A2', '8', null, '0');
INSERT INTO `tpl` VALUES ('50', '0', '山西黑', '3', null, '0');
INSERT INTO `tpl` VALUES ('51', '0', '迁移', '10', null, '0');
INSERT INTO `tpl` VALUES ('54', '0', '佛光阁', '6', null, '0');
INSERT INTO `tpl` VALUES ('55', '0', '佛光阁', '11', null, '0');
INSERT INTO `tpl` VALUES ('56', '0', '佛光阁', '14', null, '0');
INSERT INTO `tpl` VALUES ('57', '0', '佛光阁', '12', null, '0');
INSERT INTO `tpl` VALUES ('58', '0', '佛光阁', '13', null, '0');
INSERT INTO `tpl` VALUES ('60', '0', 'TQ-001', '8', null, '0');
INSERT INTO `tpl` VALUES ('61', '0', '光泽红', '3', null, '0');
INSERT INTO `tpl` VALUES ('67', '0', '44', '13', null, '0');
INSERT INTO `tpl` VALUES ('68', '0', '12', '12', '', '0');
INSERT INTO `tpl` VALUES ('70', '0', '父女', '4', '', '0');
INSERT INTO `tpl` VALUES ('77', '0', '1', '2', null, '0');

-- ----------------------------
-- Table structure for visit_log
-- ----------------------------
DROP TABLE IF EXISTS `visit_log`;
CREATE TABLE `visit_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `channel_t1` int(11) unsigned DEFAULT NULL,
  `channel_t2` int(11) DEFAULT NULL,
  `channel_t3` int(11) DEFAULT NULL,
  `relationship` int(11) DEFAULT NULL COMMENT '与故者关系',
  `receiver` int(11) unsigned DEFAULT '0' COMMENT '接待者',
  `come_num` int(11) DEFAULT NULL COMMENT '来访次数',
  `come_fun` int(11) DEFAULT NULL COMMENT '来访方式',
  `come_date` int(11) DEFAULT NULL,
  `transaction_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '交易情况 0 未成 1 已成',
  `no_transaction_ps` int(11) unsigned DEFAULT NULL COMMENT '成交(未成交)原因',
  `transaction_suc_date` int(11) DEFAULT NULL COMMENT '成交日期',
  `reception_log` text COMMENT '接待记录',
  `remarks` text COMMENT '备注',
  `contacts_id` int(11) unsigned DEFAULT NULL COMMENT '联系人ID',
  `people_num` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '来访人数',
  `tel_id` int(11) unsigned DEFAULT NULL COMMENT '咨询电话',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COMMENT='客户来访';

-- ----------------------------
-- Records of visit_log
-- ----------------------------
INSERT INTO `visit_log` VALUES ('12', '1', '3', '0', '11', '11', '42', '12', '1530028800', '1', '16', '-28800', '1', '1', '16', '1', '40');
INSERT INTO `visit_log` VALUES ('13', '1', '3', '6', '11', '0', '42', '12', '1530028800', '1', '16', '2', '2', '2', '17', '1', '40');
INSERT INTO `visit_log` VALUES ('14', '1', '3', '8', '11', '0', '42', '12', '1530028800', '0', '16', '0', '阿打算', '爱的', '18', '2', '41');
INSERT INTO `visit_log` VALUES ('15', '1', '3', '6', '46', '13', '43', '13', '1530028800', '1', '16', '1530028800', '请问2', '请问2', '19', '3', '41');
INSERT INTO `visit_log` VALUES ('16', '1', '3', '6', '11', '0', '42', '12', '1530115200', '1', '16', '1530115200', '爱的', '爱的', '20', '1', '40');
INSERT INTO `visit_log` VALUES ('17', null, null, null, null, '0', null, null, null, '0', null, null, null, null, '21', '1', null);
INSERT INTO `visit_log` VALUES ('18', null, null, null, null, '11', null, null, null, '1', null, '1530171878', null, null, '22', '1', null);
INSERT INTO `visit_log` VALUES ('19', null, null, null, null, null, null, null, null, '1', null, '1530185213', null, null, '23', '1', null);
INSERT INTO `visit_log` VALUES ('22', null, null, null, null, '11', null, null, null, '1', null, '1530188609', null, null, '26', '1', null);
INSERT INTO `visit_log` VALUES ('23', null, null, null, null, '11', null, null, null, '1', null, '1530193801', null, null, '27', '1', null);
INSERT INTO `visit_log` VALUES ('24', null, null, null, null, '11', null, null, null, '1', null, '1530194108', null, null, '28', '1', null);
INSERT INTO `visit_log` VALUES ('25', null, null, null, null, '11', null, null, null, '1', null, '1530194384', null, null, '29', '1', null);
INSERT INTO `visit_log` VALUES ('26', null, null, null, null, '11', null, null, null, '1', null, '1530584805', null, null, '30', '1', null);
INSERT INTO `visit_log` VALUES ('27', null, null, null, null, '11', null, null, null, '1', null, '1530585515', null, null, '31', '1', null);
INSERT INTO `visit_log` VALUES ('29', null, null, null, null, '11', null, null, null, '1', null, '1530611529', null, null, '33', '1', null);
INSERT INTO `visit_log` VALUES ('30', null, null, null, null, '11', null, null, null, '1', null, '1530665943', null, null, '34', '1', null);
INSERT INTO `visit_log` VALUES ('31', null, null, null, null, '11', null, null, null, '1', null, '1530668835', null, null, '35', '1', null);
INSERT INTO `visit_log` VALUES ('32', null, null, null, null, '11', null, null, null, '1', null, '1530758872', null, null, '36', '1', null);
INSERT INTO `visit_log` VALUES ('33', null, null, null, null, '11', null, null, null, '1', null, '1530762846', null, null, '37', '1', null);
INSERT INTO `visit_log` VALUES ('34', '1', '3', '6', '14', '14', '42', '12', '1530028800', '1', '16', '1530892800', '12', '12', '38', '1', '40');
INSERT INTO `visit_log` VALUES ('35', '1', '3', '6', '14', '14', '42', '12', '1530028800', '1', '0', '1530892800', '1', '1', '39', '1', '40');
INSERT INTO `visit_log` VALUES ('36', '1', '3', '6', '14', '14', '42', '12', '1530028800', '1', null, '1530892800', '1', '1', '40', '1', '40');
INSERT INTO `visit_log` VALUES ('37', null, null, null, null, '11', null, null, '1530028800', '1', null, '1530948692', null, null, '41', '1', null);
INSERT INTO `visit_log` VALUES ('38', null, null, null, null, '11', null, null, '1531991742', '1', null, '1531991742', null, null, '42', '1', null);
INSERT INTO `visit_log` VALUES ('39', null, null, null, null, '11', null, null, '1532049431', '1', null, '1532049431', null, null, '43', '1', null);
INSERT INTO `visit_log` VALUES ('40', null, null, null, null, '11', null, null, '1532053259', '1', null, '1532053259', null, null, '44', '1', null);
INSERT INTO `visit_log` VALUES ('41', null, null, null, null, '11', null, null, '1532053371', '1', null, '1532053371', null, null, '45', '1', null);
INSERT INTO `visit_log` VALUES ('42', null, null, null, null, '11', null, null, '1532394861', '1', null, '1532394861', null, null, '46', '1', null);
INSERT INTO `visit_log` VALUES ('43', null, null, null, null, '11', null, null, '1532395229', '1', null, '1532395229', null, null, '47', '1', null);
INSERT INTO `visit_log` VALUES ('44', null, null, null, null, '11', null, null, '1532395537', '1', null, '1532395537', null, null, '48', '1', null);
INSERT INTO `visit_log` VALUES ('45', null, null, null, null, '11', null, null, '1532396174', '1', null, '1532396174', null, null, '49', '1', null);
INSERT INTO `visit_log` VALUES ('46', null, null, null, null, '11', null, null, '1532396239', '1', null, '1532396239', null, null, '50', '1', null);
INSERT INTO `visit_log` VALUES ('47', null, null, null, null, '11', null, null, '1532769039', '1', null, '1532769039', null, null, '51', '1', null);
INSERT INTO `visit_log` VALUES ('48', null, null, null, null, '11', null, null, '1532769289', '1', null, '1532769289', null, null, '52', '1', null);
INSERT INTO `visit_log` VALUES ('49', null, null, null, null, '11', null, null, '1532769346', '1', null, '1532769346', null, null, '53', '1', null);
INSERT INTO `visit_log` VALUES ('50', null, null, null, null, '11', null, null, '1533270492', '1', null, '1533270492', null, null, '54', '1', null);
INSERT INTO `visit_log` VALUES ('51', null, null, null, null, '11', null, null, '1533270530', '1', null, '1533270530', null, null, '55', '1', null);
INSERT INTO `visit_log` VALUES ('52', null, null, null, null, '11', null, null, '1533273338', '1', null, '1533273338', null, null, '56', '1', null);
INSERT INTO `visit_log` VALUES ('53', null, null, null, null, '11', null, null, '1533274952', '1', null, '1533274952', null, null, '57', '1', null);
INSERT INTO `visit_log` VALUES ('54', null, null, null, null, '14', null, null, '1533297649', '1', null, '1533297649', null, null, '58', '1', null);
INSERT INTO `visit_log` VALUES ('55', null, null, null, null, '11', null, null, '1533446334', '1', null, '1533446334', null, null, '59', '1', null);
INSERT INTO `visit_log` VALUES ('56', null, null, null, null, '16', null, null, '1533456534', '1', null, '1533456534', null, null, '60', '1', null);
INSERT INTO `visit_log` VALUES ('57', null, null, null, null, '11', null, null, '1533677031', '1', null, '1533677031', null, null, '61', '1', null);
INSERT INTO `visit_log` VALUES ('58', null, null, null, null, '11', null, null, null, '1', null, '1533677684', null, null, '62', '1', null);
INSERT INTO `visit_log` VALUES ('59', null, null, null, null, '11', null, null, '1533777875', '1', null, '1533777875', null, null, '63', '1', null);
INSERT INTO `visit_log` VALUES ('60', null, null, null, null, '11', null, null, null, '1', null, '1533780639', null, null, '64', '1', null);
INSERT INTO `visit_log` VALUES ('61', null, null, null, null, '11', null, null, '1533801965', '1', null, '1533801965', null, null, '65', '1', null);
INSERT INTO `visit_log` VALUES ('62', null, null, null, null, '11', null, null, '1533802088', '1', null, '1533802088', null, null, '66', '1', null);
INSERT INTO `visit_log` VALUES ('63', null, null, null, null, '11', null, null, '1534217823', '1', null, '1534217823', null, null, '67', '1', null);
INSERT INTO `visit_log` VALUES ('64', null, null, null, null, '11', null, null, '1534218185', '1', null, '1534218185', null, null, '68', '1', null);
INSERT INTO `visit_log` VALUES ('65', null, null, null, null, '11', null, null, '1534218321', '1', null, '1534218321', null, null, '69', '1', null);
INSERT INTO `visit_log` VALUES ('66', null, null, null, null, '11', null, null, '1534218612', '1', null, '1534218612', null, null, '70', '1', null);
INSERT INTO `visit_log` VALUES ('67', null, null, null, null, '11', null, null, '1534218641', '1', null, '1534218641', null, null, '71', '1', null);
INSERT INTO `visit_log` VALUES ('68', null, null, null, null, '11', null, null, '1534218668', '1', null, '1534218668', null, null, '72', '1', null);
INSERT INTO `visit_log` VALUES ('69', null, null, null, null, '11', null, null, '1534218698', '1', null, '1534218698', null, null, '73', '1', null);
INSERT INTO `visit_log` VALUES ('70', '1', '3', '6', '46', '0', '42', '12', '1534176000', '1', null, '1534262400', '', '', '74', '1', '40');
INSERT INTO `visit_log` VALUES ('71', null, null, null, null, '11', null, null, '1534294701', '1', null, '1534294701', null, null, '75', '1', null);
INSERT INTO `visit_log` VALUES ('72', null, null, null, null, '11', null, null, '1534309326', '1', null, '1534309326', null, null, '76', '1', null);
INSERT INTO `visit_log` VALUES ('73', '1', '3', '6', '11', '0', '42', '12', '1534262400', '1', null, '1534262400', '', '', '77', '2', '40');
INSERT INTO `visit_log` VALUES ('74', null, null, null, null, '11', null, null, '1534387950', '1', null, '1534387950', null, null, '78', '1', null);
INSERT INTO `visit_log` VALUES ('75', null, null, null, null, '11', null, null, '1534388067', '1', null, '1534388067', null, null, '79', '1', null);
INSERT INTO `visit_log` VALUES ('76', null, null, null, null, '11', null, null, '1534388660', '1', null, '1534388660', null, null, '80', '1', null);
INSERT INTO `visit_log` VALUES ('77', null, null, null, null, '16', null, null, '1534393442', '1', null, '1534393442', null, null, '81', '1', null);
INSERT INTO `visit_log` VALUES ('78', null, null, null, null, '17', null, null, '1534394924', '1', null, '1534394924', null, null, '82', '1', null);
INSERT INTO `visit_log` VALUES ('79', null, null, null, null, '11', null, null, '1534396092', '1', null, '1534396092', null, null, '83', '1', null);
INSERT INTO `visit_log` VALUES ('80', null, null, null, null, '11', null, null, '1534397236', '1', null, '1534397236', null, null, '84', '1', null);
INSERT INTO `visit_log` VALUES ('81', null, null, null, null, '11', null, null, '1534420271', '1', null, '1534420271', null, null, '85', '1', null);
INSERT INTO `visit_log` VALUES ('82', null, null, null, null, '11', null, null, '1534420433', '1', null, '1534420433', null, null, '86', '1', null);
INSERT INTO `visit_log` VALUES ('83', null, null, null, null, '11', null, null, '1534421186', '1', null, '1534421186', null, null, '87', '1', null);
INSERT INTO `visit_log` VALUES ('84', null, null, null, null, '11', null, null, '1534421505', '1', null, '1534421505', null, null, '88', '1', null);
INSERT INTO `visit_log` VALUES ('85', null, null, null, null, '11', null, null, '1534470047', '1', null, '1534470047', null, null, '89', '1', null);
INSERT INTO `visit_log` VALUES ('86', null, null, null, null, '11', null, null, '1534661129', '1', null, '1534661129', null, null, '90', '1', null);
INSERT INTO `visit_log` VALUES ('87', null, null, null, null, '11', null, null, '1534817767', '1', null, '1534817767', null, null, '91', '1', null);
INSERT INTO `visit_log` VALUES ('88', null, null, null, null, '11', null, null, '1534817803', '1', null, '1534817803', null, null, '92', '1', null);
INSERT INTO `visit_log` VALUES ('89', null, null, null, null, '11', null, null, '1535022547', '1', null, '1535022547', null, null, '93', '1', null);
