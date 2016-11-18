SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `portfolio_photo`
-- ----------------------------
DROP TABLE IF EXISTS `portfolio_photo`;
CREATE TABLE `portfolio_photo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sort` bigint(20) unsigned DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `portfolio_project_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `portfolio_project`
-- ----------------------------
DROP TABLE IF EXISTS `portfolio_project`;
CREATE TABLE `portfolio_project` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sort` bigint(20) unsigned DEFAULT NULL,
  `lang` varchar(2) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `meta_link` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `text` text,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;