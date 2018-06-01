/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : loan_data

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-05-03 18:03:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `username` varchar(120) NOT NULL COMMENT '管理员账号',
  `password` varchar(255) NOT NULL COMMENT '管理员密码',
  `last_login_time` int(11) DEFAULT NULL COMMENT '最后登录时间',
  `last_login_ip` varchar(120) DEFAULT NULL COMMENT '最后登录ips',
  `role` varchar(120) NOT NULL COMMENT '角色',
  `email` varchar(120) DEFAULT NULL COMMENT '邮箱',
  `tel` varchar(120) DEFAULT NULL COMMENT '电话',
  `weixin` varchar(120) DEFAULT NULL COMMENT '微信号码',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '$2y$10$goW/J0wTpxNdM46OBaQpdurmgc6CcIZAtBcwwyr8XmEun3t10RyZy', null, null, '', null, null, null);

-- ----------------------------
-- Table structure for balance_manage
-- ----------------------------
DROP TABLE IF EXISTS `balance_manage`;
CREATE TABLE `balance_manage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户关联id',
  `describe` varchar(120) DEFAULT NULL COMMENT '描述',
  `balance` decimal(10,2) DEFAULT NULL COMMENT '余额',
  `add_time` int(11) DEFAULT NULL COMMENT '新建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of balance_manage
-- ----------------------------
INSERT INTO `balance_manage` VALUES ('1', '9', '似懂非懂水电费', '200.00', '1525339783');

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`city`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('10', '七台河市', '10');
INSERT INTO `city` VALUES ('7', '万宁市', '24');
INSERT INTO `city` VALUES ('2', '三亚市', '24');
INSERT INTO `city` VALUES ('4', '三明市', '14');
INSERT INTO `city` VALUES ('12', '三门峡市', '17');
INSERT INTO `city` VALUES ('1', '上海市', '3');
INSERT INTO `city` VALUES ('11', '上饶市', '15');
INSERT INTO `city` VALUES ('8', '东方市', '24');
INSERT INTO `city` VALUES ('17', '东莞市', '20');
INSERT INTO `city` VALUES ('5', '东营市', '16');
INSERT INTO `city` VALUES ('5', '中卫市', '30');
INSERT INTO `city` VALUES ('18', '中山市', '20');
INSERT INTO `city` VALUES ('13', '临夏回族自治州', '21');
INSERT INTO `city` VALUES ('10', '临汾市', '6');
INSERT INTO `city` VALUES ('13', '临沂市', '16');
INSERT INTO `city` VALUES ('8', '临沧市', '25');
INSERT INTO `city` VALUES ('12', '临高县', '24');
INSERT INTO `city` VALUES ('6', '丹东市', '8');
INSERT INTO `city` VALUES ('11', '丽水市', '12');
INSERT INTO `city` VALUES ('6', '丽江市', '25');
INSERT INTO `city` VALUES ('9', '乌兰察布市', '32');
INSERT INTO `city` VALUES ('3', '乌海市', '32');
INSERT INTO `city` VALUES ('21', '乌苏市', '31');
INSERT INTO `city` VALUES ('1', '乌鲁木齐市', '31');
INSERT INTO `city` VALUES ('15', '乐东黎族自治县', '24');
INSERT INTO `city` VALUES ('10', '乐山市', '22');
INSERT INTO `city` VALUES ('4', '九江市', '15');
INSERT INTO `city` VALUES ('16', '云林县', '7');
INSERT INTO `city` VALUES ('21', '云浮市', '20');
INSERT INTO `city` VALUES ('6', '五家渠市', '31');
INSERT INTO `city` VALUES ('3', '五指山市', '24');
INSERT INTO `city` VALUES ('15', '亳州市', '13');
INSERT INTO `city` VALUES ('13', '仙桃市', '18');
INSERT INTO `city` VALUES ('7', '伊 春 市', '10');
INSERT INTO `city` VALUES ('18', '伊宁市', '31');
INSERT INTO `city` VALUES ('6', '佛山市', '20');
INSERT INTO `city` VALUES ('9', '佳木斯市', '10');
INSERT INTO `city` VALUES ('17', '保亭黎族苗族自治县', '24');
INSERT INTO `city` VALUES ('6', '保定市', '5');
INSERT INTO `city` VALUES ('4', '保山市', '25');
INSERT INTO `city` VALUES ('15', '信阳市', '17');
INSERT INTO `city` VALUES ('5', '儋州市', '24');
INSERT INTO `city` VALUES ('2', '克拉玛依市', '31');
INSERT INTO `city` VALUES ('14', '六安市', '13');
INSERT INTO `city` VALUES ('2', '六盘水市', '23');
INSERT INTO `city` VALUES ('1', '兰州市', '21');
INSERT INTO `city` VALUES ('11', '兴安盟', '32');
INSERT INTO `city` VALUES ('9', '内江市', '22');
INSERT INTO `city` VALUES ('21', '凉山彝族自治州', '22');
INSERT INTO `city` VALUES ('2', '包头市', '32');
INSERT INTO `city` VALUES ('1', '北京市', '1');
INSERT INTO `city` VALUES ('5', '北海市', '28');
INSERT INTO `city` VALUES ('3', '十堰市', '18');
INSERT INTO `city` VALUES ('1', '南京市', '11');
INSERT INTO `city` VALUES ('11', '南充市', '22');
INSERT INTO `city` VALUES ('1', '南宁市', '28');
INSERT INTO `city` VALUES ('7', '南平市', '14');
INSERT INTO `city` VALUES ('15', '南投县', '7');
INSERT INTO `city` VALUES ('1', '南昌市', '15');
INSERT INTO `city` VALUES ('6', '南通市', '11');
INSERT INTO `city` VALUES ('13', '南阳市', '17');
INSERT INTO `city` VALUES ('17', '博乐市', '31');
INSERT INTO `city` VALUES ('2', '厦门市', '14');
INSERT INTO `city` VALUES ('4', '双鸭山市', '10');
INSERT INTO `city` VALUES ('22', '台东县', '7');
INSERT INTO `city` VALUES ('13', '台中县', '7');
INSERT INTO `city` VALUES ('4', '台中市', '7');
INSERT INTO `city` VALUES ('8', '台北县', '7');
INSERT INTO `city` VALUES ('1', '台北市', '7');
INSERT INTO `city` VALUES ('18', '台南县', '7');
INSERT INTO `city` VALUES ('5', '台南市', '7');
INSERT INTO `city` VALUES ('10', '台州市', '12');
INSERT INTO `city` VALUES ('1', '合肥市', '13');
INSERT INTO `city` VALUES ('8', '吉安市', '15');
INSERT INTO `city` VALUES ('2', '吉林市', '9');
INSERT INTO `city` VALUES ('7', '吐鲁番市', '31');
INSERT INTO `city` VALUES ('11', '吕梁市', '6');
INSERT INTO `city` VALUES ('3', '吴忠市', '30');
INSERT INTO `city` VALUES ('16', '周口市', '17');
INSERT INTO `city` VALUES ('7', '呼伦贝尔市', '32');
INSERT INTO `city` VALUES ('1', '呼和浩特市', '32');
INSERT INTO `city` VALUES ('11', '和田市', '31');
INSERT INTO `city` VALUES ('11', '咸宁市', '18');
INSERT INTO `city` VALUES ('4', '咸阳市', '27');
INSERT INTO `city` VALUES ('10', '哈密市', '31');
INSERT INTO `city` VALUES ('1', '哈尔滨市', '10');
INSERT INTO `city` VALUES ('2', '唐山市', '5');
INSERT INTO `city` VALUES ('14', '商丘市', '17');
INSERT INTO `city` VALUES ('10', '商洛市', '27');
INSERT INTO `city` VALUES ('9', '喀什市', '31');
INSERT INTO `city` VALUES ('17', '嘉义县', '7');
INSERT INTO `city` VALUES ('7', '嘉义市', '7');
INSERT INTO `city` VALUES ('4', '嘉兴市', '12');
INSERT INTO `city` VALUES ('5', '嘉峪关市', '21');
INSERT INTO `city` VALUES ('3', '四平市', '9');
INSERT INTO `city` VALUES ('4', '固原市', '30');
INSERT INTO `city` VALUES ('5', '图木舒克市', '31');
INSERT INTO `city` VALUES ('3', '基隆市', '7');
INSERT INTO `city` VALUES ('20', '塔城市', '31');
INSERT INTO `city` VALUES ('6', '大 庆 市', '10');
INSERT INTO `city` VALUES ('13', '大兴安岭地区', '10');
INSERT INTO `city` VALUES ('2', '大同市', '6');
INSERT INTO `city` VALUES ('13', '大理白族自治州', '25');
INSERT INTO `city` VALUES ('2', '大连市', '8');
INSERT INTO `city` VALUES ('4', '天水市', '21');
INSERT INTO `city` VALUES ('1', '天津市', '2');
INSERT INTO `city` VALUES ('14', '天门市', '18');
INSERT INTO `city` VALUES ('1', '太原市', '6');
INSERT INTO `city` VALUES ('19', '奎屯市', '31');
INSERT INTO `city` VALUES ('10', '威海市', '16');
INSERT INTO `city` VALUES ('13', '娄底市', '19');
INSERT INTO `city` VALUES ('9', '孝感市', '18');
INSERT INTO `city` VALUES ('9', '宁德市', '14');
INSERT INTO `city` VALUES ('2', '宁波市', '12');
INSERT INTO `city` VALUES ('8', '安庆市', '13');
INSERT INTO `city` VALUES ('9', '安康市', '27');
INSERT INTO `city` VALUES ('5', '安阳市', '17');
INSERT INTO `city` VALUES ('4', '安顺市', '23');
INSERT INTO `city` VALUES ('10', '定安县', '24');
INSERT INTO `city` VALUES ('11', '定西市', '21');
INSERT INTO `city` VALUES ('9', '宜兰县', '7');
INSERT INTO `city` VALUES ('13', '宜宾市', '22');
INSERT INTO `city` VALUES ('5', '宜昌市', '18');
INSERT INTO `city` VALUES ('9', '宜春市', '15');
INSERT INTO `city` VALUES ('3', '宝鸡市', '27');
INSERT INTO `city` VALUES ('17', '宣城市', '13');
INSERT INTO `city` VALUES ('12', '宿州市', '13');
INSERT INTO `city` VALUES ('13', '宿迁市', '11');
INSERT INTO `city` VALUES ('20', '屏东县', '7');
INSERT INTO `city` VALUES ('11', '屯昌县', '24');
INSERT INTO `city` VALUES ('4', '山南地区', '29');
INSERT INTO `city` VALUES ('6', '岳阳市', '19');
INSERT INTO `city` VALUES ('14', '崇左市', '28');
INSERT INTO `city` VALUES ('13', '巢湖市', '13');
INSERT INTO `city` VALUES ('17', '巴中市', '22');
INSERT INTO `city` VALUES ('8', '巴彦淖尔市', '32');
INSERT INTO `city` VALUES ('4', '常州市', '11');
INSERT INTO `city` VALUES ('7', '常德市', '19');
INSERT INTO `city` VALUES ('8', '平凉市', '21');
INSERT INTO `city` VALUES ('4', '平顶山市', '17');
INSERT INTO `city` VALUES ('7', '广元市', '22');
INSERT INTO `city` VALUES ('14', '广安市', '22');
INSERT INTO `city` VALUES ('1', '广州市', '20');
INSERT INTO `city` VALUES ('10', '庆阳市', '21');
INSERT INTO `city` VALUES ('13', '库尔勒市', '31');
INSERT INTO `city` VALUES ('10', '廊坊市', '5');
INSERT INTO `city` VALUES ('6', '延安市', '27');
INSERT INTO `city` VALUES ('9', '延边朝鲜族自治州', '9');
INSERT INTO `city` VALUES ('2', '开封市', '17');
INSERT INTO `city` VALUES ('7', '张家口市', '5');
INSERT INTO `city` VALUES ('8', '张家界市', '19');
INSERT INTO `city` VALUES ('7', '张掖市', '21');
INSERT INTO `city` VALUES ('14', '彰化县', '7');
INSERT INTO `city` VALUES ('3', '徐州市', '11');
INSERT INTO `city` VALUES ('14', '德宏傣族景颇族自治州', '25');
INSERT INTO `city` VALUES ('14', '德州市', '16');
INSERT INTO `city` VALUES ('5', '德阳市', '22');
INSERT INTO `city` VALUES ('9', '忻州市', '6');
INSERT INTO `city` VALUES ('12', '怀化市', '19');
INSERT INTO `city` VALUES ('15', '怒江傈傈族自治州', '25');
INSERT INTO `city` VALUES ('7', '思茅市', '25');
INSERT INTO `city` VALUES ('17', '恩施土家族苗族自治州', '18');
INSERT INTO `city` VALUES ('11', '惠州市', '20');
INSERT INTO `city` VALUES ('1', '成都市', '22');
INSERT INTO `city` VALUES ('10', '扬州市', '11');
INSERT INTO `city` VALUES ('8', '承德市', '5');
INSERT INTO `city` VALUES ('10', '抚州市', '15');
INSERT INTO `city` VALUES ('4', '抚顺市', '8');
INSERT INTO `city` VALUES ('1', '拉萨市', '29');
INSERT INTO `city` VALUES ('20', '揭阳市', '20');
INSERT INTO `city` VALUES ('3', '攀枝花市', '22');
INSERT INTO `city` VALUES ('9', '文山壮族苗族自治州', '25');
INSERT INTO `city` VALUES ('6', '文昌市', '24');
INSERT INTO `city` VALUES ('7', '新乡市', '17');
INSERT INTO `city` VALUES ('5', '新余市', '15');
INSERT INTO `city` VALUES ('11', '新竹县', '7');
INSERT INTO `city` VALUES ('6', '新竹市', '7');
INSERT INTO `city` VALUES ('2', '无锡市', '11');
INSERT INTO `city` VALUES ('5', '日喀则地区', '29');
INSERT INTO `city` VALUES ('11', '日照市', '16');
INSERT INTO `city` VALUES ('1', '昆明市', '25');
INSERT INTO `city` VALUES ('14', '昌吉市　', '31');
INSERT INTO `city` VALUES ('14', '昌江黎族自治县', '24');
INSERT INTO `city` VALUES ('3', '昌都地区', '29');
INSERT INTO `city` VALUES ('5', '昭通市', '25');
INSERT INTO `city` VALUES ('7', '晋中市', '6');
INSERT INTO `city` VALUES ('5', '晋城市', '6');
INSERT INTO `city` VALUES ('2', '景德镇市', '15');
INSERT INTO `city` VALUES ('2', '曲靖市', '25');
INSERT INTO `city` VALUES ('6', '朔州市', '6');
INSERT INTO `city` VALUES ('13', '朝阳市', '8');
INSERT INTO `city` VALUES ('5', '本溪市', '8');
INSERT INTO `city` VALUES ('13', '来宾市', '28');
INSERT INTO `city` VALUES ('1', '杭州市', '12');
INSERT INTO `city` VALUES ('7', '松原市', '9');
INSERT INTO `city` VALUES ('7', '林芝地区', '29');
INSERT INTO `city` VALUES ('6', '果洛藏族自治州', '26');
INSERT INTO `city` VALUES ('4', '枣庄市', '16');
INSERT INTO `city` VALUES ('2', '柳州市', '28');
INSERT INTO `city` VALUES ('2', '株洲市', '19');
INSERT INTO `city` VALUES ('3', '桂林市', '28');
INSERT INTO `city` VALUES ('10', '桃园县', '7');
INSERT INTO `city` VALUES ('12', '梅州市', '20');
INSERT INTO `city` VALUES ('4', '梧州市', '28');
INSERT INTO `city` VALUES ('12', '楚雄彝族自治州', '25');
INSERT INTO `city` VALUES ('8', '榆林市', '27');
INSERT INTO `city` VALUES ('6', '武威市', '21');
INSERT INTO `city` VALUES ('1', '武汉市', '18');
INSERT INTO `city` VALUES ('6', '毕节地区', '23');
INSERT INTO `city` VALUES ('11', '永州市', '19');
INSERT INTO `city` VALUES ('7', '汉中市', '27');
INSERT INTO `city` VALUES ('4', '汕头市', '20');
INSERT INTO `city` VALUES ('13', '汕尾市', '20');
INSERT INTO `city` VALUES ('7', '江门市', '20');
INSERT INTO `city` VALUES ('16', '池州市', '13');
INSERT INTO `city` VALUES ('1', '沈阳市', '8');
INSERT INTO `city` VALUES ('9', '沧州市', '5');
INSERT INTO `city` VALUES ('12', '河池市', '28');
INSERT INTO `city` VALUES ('14', '河源市', '20');
INSERT INTO `city` VALUES ('5', '泉州市', '14');
INSERT INTO `city` VALUES ('9', '泰安市', '16');
INSERT INTO `city` VALUES ('12', '泰州市', '11');
INSERT INTO `city` VALUES ('4', '泸州市', '22');
INSERT INTO `city` VALUES ('3', '洛阳市', '17');
INSERT INTO `city` VALUES ('1', '济南市', '16');
INSERT INTO `city` VALUES ('8', '济宁市', '16');
INSERT INTO `city` VALUES ('18', '济源市', '17');
INSERT INTO `city` VALUES ('2', '海东地区', '26');
INSERT INTO `city` VALUES ('3', '海北藏族自治州', '26');
INSERT INTO `city` VALUES ('5', '海南藏族自治州', '26');
INSERT INTO `city` VALUES ('1', '海口市', '24');
INSERT INTO `city` VALUES ('8', '海西蒙古族藏族自治州', '26');
INSERT INTO `city` VALUES ('3', '淄博市', '16');
INSERT INTO `city` VALUES ('6', '淮北市', '13');
INSERT INTO `city` VALUES ('4', '淮南市', '13');
INSERT INTO `city` VALUES ('8', '淮安市', '11');
INSERT INTO `city` VALUES ('2', '深圳市', '20');
INSERT INTO `city` VALUES ('16', '清远市', '20');
INSERT INTO `city` VALUES ('3', '温州市', '12');
INSERT INTO `city` VALUES ('5', '渭南市', '27');
INSERT INTO `city` VALUES ('5', '湖州市', '12');
INSERT INTO `city` VALUES ('3', '湘潭市', '19');
INSERT INTO `city` VALUES ('14', '湘西土家族苗族自治州', '19');
INSERT INTO `city` VALUES ('8', '湛江市', '20');
INSERT INTO `city` VALUES ('10', '滁州市', '13');
INSERT INTO `city` VALUES ('16', '滨州市', '16');
INSERT INTO `city` VALUES ('11', '漯河市', '17');
INSERT INTO `city` VALUES ('6', '漳州市', '14');
INSERT INTO `city` VALUES ('7', '潍坊市', '16');
INSERT INTO `city` VALUES ('15', '潜江市', '18');
INSERT INTO `city` VALUES ('19', '潮州市', '20');
INSERT INTO `city` VALUES ('9', '澄迈县', '24');
INSERT INTO `city` VALUES ('21', '澎湖县', '7');
INSERT INTO `city` VALUES ('1', '澳门特别行政区', '33');
INSERT INTO `city` VALUES ('9', '濮阳市', '17');
INSERT INTO `city` VALUES ('6', '烟台市', '16');
INSERT INTO `city` VALUES ('8', '焦作市', '17');
INSERT INTO `city` VALUES ('8', '牡丹江市', '10');
INSERT INTO `city` VALUES ('9', '玉林市', '28');
INSERT INTO `city` VALUES ('7', '玉树藏族自治州', '26');
INSERT INTO `city` VALUES ('3', '玉溪市', '25');
INSERT INTO `city` VALUES ('3', '珠海市', '20');
INSERT INTO `city` VALUES ('18', '琼中黎族苗族自治县', '24');
INSERT INTO `city` VALUES ('4', '琼海市', '24');
INSERT INTO `city` VALUES ('14', '甘南藏族自治州', '21');
INSERT INTO `city` VALUES ('20', '甘孜藏族自治州', '22');
INSERT INTO `city` VALUES ('8', '白城市', '9');
INSERT INTO `city` VALUES ('6', '白山市', '9');
INSERT INTO `city` VALUES ('13', '白沙黎族自治县', '24');
INSERT INTO `city` VALUES ('3', '白银市', '21');
INSERT INTO `city` VALUES ('10', '百色市', '28');
INSERT INTO `city` VALUES ('9', '益阳市', '19');
INSERT INTO `city` VALUES ('9', '盐城市', '11');
INSERT INTO `city` VALUES ('11', '盘锦市', '8');
INSERT INTO `city` VALUES ('12', '眉山市', '22');
INSERT INTO `city` VALUES ('2', '石嘴山市', '30');
INSERT INTO `city` VALUES ('1', '石家庄市', '5');
INSERT INTO `city` VALUES ('3', '石河子市　', '31');
INSERT INTO `city` VALUES ('16', '神农架林区', '18');
INSERT INTO `city` VALUES ('1', '福州市', '14');
INSERT INTO `city` VALUES ('3', '秦皇岛市', '5');
INSERT INTO `city` VALUES ('16', '米泉市', '31');
INSERT INTO `city` VALUES ('10', '红河哈尼族彝族自治州', '25');
INSERT INTO `city` VALUES ('6', '绍兴市', '12');
INSERT INTO `city` VALUES ('12', '绥 化 市', '10');
INSERT INTO `city` VALUES ('6', '绵阳市', '22');
INSERT INTO `city` VALUES ('15', '聊城市', '16');
INSERT INTO `city` VALUES ('10', '肇庆市', '20');
INSERT INTO `city` VALUES ('2', '自贡市', '22');
INSERT INTO `city` VALUES ('9', '舟山市', '12');
INSERT INTO `city` VALUES ('2', '芜湖市', '13');
INSERT INTO `city` VALUES ('23', '花莲县', '7');
INSERT INTO `city` VALUES ('5', '苏州市', '11');
INSERT INTO `city` VALUES ('12', '苗栗县', '7');
INSERT INTO `city` VALUES ('9', '茂名市', '20');
INSERT INTO `city` VALUES ('4', '荆州市', '18');
INSERT INTO `city` VALUES ('8', '荆门市', '18');
INSERT INTO `city` VALUES ('3', '莆田市', '14');
INSERT INTO `city` VALUES ('12', '莱芜市', '16');
INSERT INTO `city` VALUES ('17', '菏泽市', '16');
INSERT INTO `city` VALUES ('3', '萍乡市', '15');
INSERT INTO `city` VALUES ('8', '营口市', '8');
INSERT INTO `city` VALUES ('14', '葫芦岛市', '8');
INSERT INTO `city` VALUES ('3', '蚌埠市', '13');
INSERT INTO `city` VALUES ('11', '衡水市', '5');
INSERT INTO `city` VALUES ('4', '衡阳市', '19');
INSERT INTO `city` VALUES ('8', '衢州市', '12');
INSERT INTO `city` VALUES ('6', '襄樊市', '18');
INSERT INTO `city` VALUES ('11', '西双版纳傣族自治州', '25');
INSERT INTO `city` VALUES ('1', '西宁市', '26');
INSERT INTO `city` VALUES ('1', '西安市', '27');
INSERT INTO `city` VALUES ('10', '许昌市', '17');
INSERT INTO `city` VALUES ('8', '贵港市', '28');
INSERT INTO `city` VALUES ('1', '贵阳市', '23');
INSERT INTO `city` VALUES ('11', '贺州市', '28');
INSERT INTO `city` VALUES ('18', '资阳市', '22');
INSERT INTO `city` VALUES ('7', '赣州市', '15');
INSERT INTO `city` VALUES ('4', '赤峰市', '32');
INSERT INTO `city` VALUES ('4', '辽源市', '9');
INSERT INTO `city` VALUES ('10', '辽阳市', '8');
INSERT INTO `city` VALUES ('15', '达州市', '22');
INSERT INTO `city` VALUES ('8', '运城市', '6');
INSERT INTO `city` VALUES ('7', '连云港市', '11');
INSERT INTO `city` VALUES ('16', '迪庆藏族自治州', '25');
INSERT INTO `city` VALUES ('5', '通化市', '9');
INSERT INTO `city` VALUES ('5', '通辽市', '32');
INSERT INTO `city` VALUES ('8', '遂宁市', '22');
INSERT INTO `city` VALUES ('3', '遵义市', '23');
INSERT INTO `city` VALUES ('5', '邢台市', '5');
INSERT INTO `city` VALUES ('2', '那曲地区', '29');
INSERT INTO `city` VALUES ('4', '邯郸市', '5');
INSERT INTO `city` VALUES ('5', '邵阳市', '19');
INSERT INTO `city` VALUES ('1', '郑州市', '17');
INSERT INTO `city` VALUES ('10', '郴州市', '19');
INSERT INTO `city` VALUES ('6', '鄂尔多斯市', '32');
INSERT INTO `city` VALUES ('7', '鄂州市', '18');
INSERT INTO `city` VALUES ('9', '酒泉市', '21');
INSERT INTO `city` VALUES ('1', '重庆市', '4');
INSERT INTO `city` VALUES ('7', '金华市', '12');
INSERT INTO `city` VALUES ('2', '金昌市', '21');
INSERT INTO `city` VALUES ('7', '钦州市', '28');
INSERT INTO `city` VALUES ('12', '铁岭市', '8');
INSERT INTO `city` VALUES ('5', '铜仁地区', '23');
INSERT INTO `city` VALUES ('2', '铜川市', '27');
INSERT INTO `city` VALUES ('7', '铜陵市', '13');
INSERT INTO `city` VALUES ('1', '银川市', '30');
INSERT INTO `city` VALUES ('10', '锡林郭勒盟', '32');
INSERT INTO `city` VALUES ('7', '锦州市', '8');
INSERT INTO `city` VALUES ('11', '镇江市', '11');
INSERT INTO `city` VALUES ('1', '长春市', '9');
INSERT INTO `city` VALUES ('1', '长沙市', '19');
INSERT INTO `city` VALUES ('4', '长治市', '6');
INSERT INTO `city` VALUES ('15', '阜康市', '31');
INSERT INTO `city` VALUES ('9', '阜新市', '8');
INSERT INTO `city` VALUES ('11', '阜阳市', '13');
INSERT INTO `city` VALUES ('6', '防城港市', '28');
INSERT INTO `city` VALUES ('15', '阳江市', '20');
INSERT INTO `city` VALUES ('3', '阳泉市', '6');
INSERT INTO `city` VALUES ('8', '阿克苏市', '31');
INSERT INTO `city` VALUES ('22', '阿勒泰市', '31');
INSERT INTO `city` VALUES ('12', '阿图什市', '31');
INSERT INTO `city` VALUES ('19', '阿坝藏族羌族自治州', '22');
INSERT INTO `city` VALUES ('12', '阿拉善盟', '32');
INSERT INTO `city` VALUES ('4', '阿拉尔市', '31');
INSERT INTO `city` VALUES ('6', '阿里地区', '29');
INSERT INTO `city` VALUES ('12', '陇南市', '21');
INSERT INTO `city` VALUES ('16', '陵水黎族自治县', '24');
INSERT INTO `city` VALUES ('12', '随州市', '18');
INSERT INTO `city` VALUES ('16', '雅安市', '22');
INSERT INTO `city` VALUES ('2', '青岛市', '16');
INSERT INTO `city` VALUES ('3', '鞍山市', '8');
INSERT INTO `city` VALUES ('5', '韶关市', '20');
INSERT INTO `city` VALUES ('1', '香港特别行政区', '34');
INSERT INTO `city` VALUES ('5', '马鞍山市', '13');
INSERT INTO `city` VALUES ('17', '驻马店市', '17');
INSERT INTO `city` VALUES ('19', '高雄县', '7');
INSERT INTO `city` VALUES ('2', '高雄市', '7');
INSERT INTO `city` VALUES ('5', '鸡 西 市', '10');
INSERT INTO `city` VALUES ('3', '鹤 岗 市', '10');
INSERT INTO `city` VALUES ('6', '鹤壁市', '17');
INSERT INTO `city` VALUES ('6', '鹰潭市', '15');
INSERT INTO `city` VALUES ('10', '黄冈市', '18');
INSERT INTO `city` VALUES ('4', '黄南藏族自治州', '26');
INSERT INTO `city` VALUES ('9', '黄山市', '13');
INSERT INTO `city` VALUES ('2', '黄石市', '18');
INSERT INTO `city` VALUES ('11', '黑 河 市', '10');
INSERT INTO `city` VALUES ('8', '黔东南苗族侗族自治州', '23');
INSERT INTO `city` VALUES ('9', '黔南布依族苗族自治州', '23');
INSERT INTO `city` VALUES ('7', '黔西南布依族苗族自治州', '23');
INSERT INTO `city` VALUES ('2', '齐齐哈尔市', '10');
INSERT INTO `city` VALUES ('8', '龙岩市', '14');

-- ----------------------------
-- Table structure for customer_distribute
-- ----------------------------
DROP TABLE IF EXISTS `customer_distribute`;
CREATE TABLE `customer_distribute` (
  `distribute_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '分配id',
  `user_id` bigint(20) DEFAULT NULL COMMENT '用户id',
  `customer_id` bigint(20) DEFAULT NULL COMMENT '客户id',
  `distribute_time` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分配时间',
  PRIMARY KEY (`distribute_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of customer_distribute
-- ----------------------------
INSERT INTO `customer_distribute` VALUES ('1', '12', '3', '1525327971');
INSERT INTO `customer_distribute` VALUES ('2', '12', '6', '1525327971');
INSERT INTO `customer_distribute` VALUES ('3', '13', '3', '1525327971');
INSERT INTO `customer_distribute` VALUES ('4', '13', '6', '1525327971');
INSERT INTO `customer_distribute` VALUES ('5', '13', '3', '1525328202');
INSERT INTO `customer_distribute` VALUES ('6', '13', '8', '1525328203');
INSERT INTO `customer_distribute` VALUES ('7', '13', '6', '1525328203');
INSERT INTO `customer_distribute` VALUES ('8', '13', '7', '1525328203');
INSERT INTO `customer_distribute` VALUES ('9', '13', '10', '1525328203');
INSERT INTO `customer_distribute` VALUES ('10', '13', '11', '1525328203');
INSERT INTO `customer_distribute` VALUES ('11', '13', '12', '1525328203');
INSERT INTO `customer_distribute` VALUES ('12', '13', '13', '1525328203');
INSERT INTO `customer_distribute` VALUES ('13', '13', '14', '1525328203');
INSERT INTO `customer_distribute` VALUES ('14', '13', '15', '1525328203');
INSERT INTO `customer_distribute` VALUES ('15', '13', '16', '1525328203');

-- ----------------------------
-- Table structure for customer_list
-- ----------------------------
DROP TABLE IF EXISTS `customer_list`;
CREATE TABLE `customer_list` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '客户信息编号',
  `name` varchar(120) NOT NULL COMMENT '姓名',
  `tel` varchar(120) NOT NULL COMMENT '电话',
  `wx_number` varchar(120) DEFAULT NULL COMMENT '微信账号',
  `loan_amount` decimal(10,2) DEFAULT NULL COMMENT '贷款金额',
  `time` int(11) DEFAULT NULL COMMENT '云端分发时间',
  `credit` int(10) DEFAULT NULL COMMENT '信用积分',
  `have_job` varchar(120) DEFAULT NULL COMMENT '有无工作',
  `have_social_security` varchar(100) DEFAULT NULL COMMENT '有无社保',
  `have_provident` varchar(120) DEFAULT NULL COMMENT '有无公积金',
  `age` tinyint(4) DEFAULT NULL COMMENT '年龄',
  `qq` varchar(120) DEFAULT NULL COMMENT 'qq号',
  `add_time` varchar(11) DEFAULT NULL COMMENT '申请时间',
  `remark` varchar(225) DEFAULT NULL COMMENT '备注',
  `tel_status` varchar(120) DEFAULT NULL COMMENT '电话状态',
  `file` varchar(255) DEFAULT NULL COMMENT '上传文档',
  `admin_id` int(11) DEFAULT NULL COMMENT '分配的管理员',
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer_list
-- ----------------------------
INSERT INTO `customer_list` VALUES ('17', 'www', '13355666', '12132', '2500.00', null, '1000', 'www', '454', 'ddf', '100', 'www', '05/03/2018', 'dfd', '40', null, null);
INSERT INTO `customer_list` VALUES ('3', '张池', '1325564545', '4545', '100.00', '1524815310', '4', '搜索', '放到', '得到', '52', '999', '04/05/2018', '水电费第三方', '对对对', null, null);
INSERT INTO `customer_list` VALUES ('8', '张池', '1325894545', '54641', '100.00', null, '100', '书店', '第三方的', '水电费', '10', '1441465', '05/17/2018', '胜多负少的', '水电费', null, null);
INSERT INTO `customer_list` VALUES ('6', '胜多负少的dd', '13221621', '45', '454.00', '1524815310', '4545', '45', '45', '45', '45', '45', '04/06/2018', '12641321', '45', null, null);
INSERT INTO `customer_list` VALUES ('7', '对对对', '454654', '4645', '4214.00', '1524815310', '45', '456', '45', '456', '45', '454', '04/26/2018', '454524', '45', null, null);
INSERT INTO `customer_list` VALUES ('10', '都是范德萨', '地方', '44655466', '200.00', null, '100', '水电费', '大幅度', '地方', '20', '5112112121', '05/03/2018', '所发生的', '水电费', null, null);
INSERT INTO `customer_list` VALUES ('11', '水电费', '41000', '4545', '20.00', null, '5212', '都是范德萨', '佛挡杀佛', '是的范德萨', '10', '4556', '04/05/2018', '41513', '水电费', null, null);
INSERT INTO `customer_list` VALUES ('12', '对对对', '451211', '12121020202', '1100.00', null, '100', '水电费', '地方', '大幅度', '127', '5465465441', '05/31/2018', '水电费水电费', '第三方的', null, null);
INSERT INTO `customer_list` VALUES ('13', '对对对', '53132', '454', '25.00', null, '454', '4545', '454', '454', '127', '45', '05/24/2018', '4545', '45', null, null);
INSERT INTO `customer_list` VALUES ('14', '接解决', '454', '456', '454.00', null, '456', '45', '456', '456', '127', '456', '05/03/2018', '456', '456', null, null);
INSERT INTO `customer_list` VALUES ('15', '方法', '12445', '54', '454.00', null, '454', 'fd', '45452445', '胜多负少的', '45', '4', '05/03/2018', '454545', '45445', null, null);
INSERT INTO `customer_list` VALUES ('16', '密码', '4545', '45', '545.00', null, '45', '45', '45', '45', '45', '454', '05/03/2018', '454', '454', null, null);

-- ----------------------------
-- Table structure for information
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `information_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '信息中心编号',
  `describe` varchar(120) DEFAULT NULL COMMENT '说明',
  `time` int(11) DEFAULT NULL COMMENT '时间',
  `title` varchar(120) DEFAULT NULL COMMENT '信息中心标题',
  PRIMARY KEY (`information_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES ('1', '<p>你好哈哈哈哈<br/></p>', '1524798910', '你好');
INSERT INTO `information` VALUES ('2', '<p>水电费是</p>', '1524888619', '水电费是否');
INSERT INTO `information` VALUES ('5', '<p>发送到对方</p>', '1525327278', '书店');

-- ----------------------------
-- Table structure for know
-- ----------------------------
DROP TABLE IF EXISTS `know`;
CREATE TABLE `know` (
  `know_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `know_content` varchar(255) DEFAULT NULL COMMENT '使用须知内容s',
  PRIMARY KEY (`know_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of know
-- ----------------------------
INSERT INTO `know` VALUES ('2', '<p>是打发打发所得到的</p>');

-- ----------------------------
-- Table structure for normal_question
-- ----------------------------
DROP TABLE IF EXISTS `normal_question`;
CREATE TABLE `normal_question` (
  `question_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `question_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '问题标题',
  `question_content` text COLLATE utf8_unicode_ci COMMENT '问题内容',
  `create_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '问题创建时间',
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of normal_question
-- ----------------------------
INSERT INTO `normal_question` VALUES ('1', '水电费', '<p>是的发送到发送到水电费</p>', '1524815310');
INSERT INTO `normal_question` VALUES ('2', '胜多负少', '<p>是的实打实地方的第三方</p>', '1524815336');

-- ----------------------------
-- Table structure for provincial
-- ----------------------------
DROP TABLE IF EXISTS `provincial`;
CREATE TABLE `provincial` (
  `pid` int(11) NOT NULL,
  `Provincial` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of provincial
-- ----------------------------
INSERT INTO `provincial` VALUES ('0', '北京市');
INSERT INTO `provincial` VALUES ('2', '天津市');
INSERT INTO `provincial` VALUES ('3', '上海市');
INSERT INTO `provincial` VALUES ('4', '重庆市');
INSERT INTO `provincial` VALUES ('5', '河北省');
INSERT INTO `provincial` VALUES ('6', '山西省');
INSERT INTO `provincial` VALUES ('7', '台湾省');
INSERT INTO `provincial` VALUES ('8', '辽宁省');
INSERT INTO `provincial` VALUES ('9', '吉林省');
INSERT INTO `provincial` VALUES ('10', '黑龙江省');
INSERT INTO `provincial` VALUES ('11', '江苏省');
INSERT INTO `provincial` VALUES ('12', '浙江省');
INSERT INTO `provincial` VALUES ('13', '安徽省');
INSERT INTO `provincial` VALUES ('14', '福建省');
INSERT INTO `provincial` VALUES ('15', '江西省');
INSERT INTO `provincial` VALUES ('16', '山东省');
INSERT INTO `provincial` VALUES ('17', '河南省');
INSERT INTO `provincial` VALUES ('18', '湖北省');
INSERT INTO `provincial` VALUES ('19', '湖南省');
INSERT INTO `provincial` VALUES ('20', '广东省');
INSERT INTO `provincial` VALUES ('21', '甘肃省');
INSERT INTO `provincial` VALUES ('22', '四川省');
INSERT INTO `provincial` VALUES ('23', '贵州省');
INSERT INTO `provincial` VALUES ('24', '海南省');
INSERT INTO `provincial` VALUES ('25', '云南省');
INSERT INTO `provincial` VALUES ('26', '青海省');
INSERT INTO `provincial` VALUES ('27', '陕西省');
INSERT INTO `provincial` VALUES ('28', '广西壮族自治区');
INSERT INTO `provincial` VALUES ('29', '西藏自治区');
INSERT INTO `provincial` VALUES ('30', '宁夏回族自治区');
INSERT INTO `provincial` VALUES ('31', '新疆维吾尔自治区');
INSERT INTO `provincial` VALUES ('32', '内蒙古自治区');
INSERT INTO `provincial` VALUES ('33', '澳门特别行政区');
INSERT INTO `provincial` VALUES ('34', '香港特别行政区');

-- ----------------------------
-- Table structure for question
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `question_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '问题编号',
  `detail` varchar(255) DEFAULT NULL COMMENT '反馈详情',
  `question_type` varchar(120) DEFAULT NULL COMMENT '问题类型',
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '服务编号',
  `role` varchar(255) DEFAULT NULL COMMENT '职务',
  `name` varchar(120) DEFAULT NULL COMMENT '姓名',
  `tel` varchar(120) DEFAULT NULL COMMENT '电话',
  `weixin` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES ('1', '经理', '张池', '1325684445', 'wex211121', '54645545');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `credit` int(11) DEFAULT NULL COMMENT '芝麻信用分',
  `real_name` varchar(120) NOT NULL COMMENT '真实姓名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `tel` varchar(120) DEFAULT NULL COMMENT '电话',
  `age` tinyint(3) DEFAULT NULL COMMENT '年龄',
  `city_id` int(11) DEFAULT NULL COMMENT '锁定城市',
  `weixin` varchar(120) DEFAULT NULL COMMENT '联系微信',
  `contact` varchar(120) DEFAULT NULL COMMENT '备用联系人',
  `balance` decimal(10,2) DEFAULT NULL COMMENT '余额',
  `flow_plan` varchar(120) DEFAULT NULL COMMENT '流量计划',
  `img` varchar(120) NOT NULL COMMENT '头像',
  `custorm_id` int(11) DEFAULT NULL COMMENT '陪同客户',
  `province_id` int(11) DEFAULT NULL COMMENT '省',
  `flow_plan_status` tinyint(4) DEFAULT '0' COMMENT '流量计划状态(0:未审核1:审核通过2:审核未通过)',
  PRIMARY KEY (`user_id`,`img`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('9', '12', '张池', '$2y$10$goW/J0wTpxNdM46OBaQpdurmgc6CcIZAtBcwwyr8XmEun3t10RyZy', '54874654@qq.com', '13258460000', '14', '2', '454546', '123454545', '10.00', '3', '', null, '6', '1');
INSERT INTO `user` VALUES ('12', '410', 'zczc', '$2y$10$HToDC0IN56OmZAALywAAJeOMO4sR17/a8yqOL38QlvFZqy/TXf69u', 'sdfdsf', '1213213212', '10', '1', '210110', '125475654545', '100.00', '1', '', null, '3', '2');
INSERT INTO `user` VALUES ('13', '1010', 'dfg', '$2y$10$6U2i9Im1bZAr9GC2fOQdaeRlOfYDNJKkeOsSj/zmHKCoHnYhtEZJu', '455645', '11232535', '100', '10', '12354354354', '11233321', '10.00', '2', '', null, '5', '0');
