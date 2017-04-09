-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-10 01:06:22
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `christlove`
--

-- --------------------------------------------------------

--
-- 表的结构 `access`
--

CREATE TABLE IF NOT EXISTS `access` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '权限名称',
  `flag_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT '权限的OP',
  `pid` int(11) NOT NULL COMMENT '父级ID',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `admin_role_id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `truename` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cardid` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gender` smallint(6) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `city_id` int(11) NOT NULL,
  `suboffice_id` int(11) NOT NULL,
  `job_title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `admin_role`
--

CREATE TABLE IF NOT EXISTS `admin_role` (
`id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `access_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_list` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `api_user`
--

CREATE TABLE IF NOT EXISTS `api_user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL COMMENT '父级ID',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT '类名称',
  `status` smallint(6) NOT NULL COMMENT '状态1正常，0禁用',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `status`, `create_at`, `update_at`) VALUES
(1, 1, '一级分类', 1, '2017-04-10 00:00:00', '2017-04-10 00:00:00'),
(2, 1, '圣教常识', 1, '2017-04-10 00:13:37', '2017-04-10 00:13:37');

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `menuname` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单名称',
  `menu_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单的URL',
  `pid` int(11) NOT NULL COMMENT '父级ID',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `status` smallint(6) NOT NULL COMMENT '状态，1正常，0禁用'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `menu_access`
--

CREATE TABLE IF NOT EXISTS `menu_access` (
`id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT '角色ID',
  `menu_id` int(11) NOT NULL COMMENT '菜单ID',
  `list` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '权限列表',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL COMMENT '分类ID',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '新闻标题',
  `thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '配图',
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '关键字',
  `introduction` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '简介',
  `author` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT '作者',
  `hits` int(11) NOT NULL COMMENT '点击次数',
  `status` smallint(6) NOT NULL COMMENT '状态，1正常，0审核中',
  `content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `level` smallint(6) NOT NULL COMMENT '文章级别'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `thumb`, `keyword`, `introduction`, `author`, `hits`, `status`, `content`, `create_at`, `update_at`, `level`) VALUES
(1, 2, '圣枝主日', '69867b5caf049a6eafca47b2d1acc15c.jpeg', '圣枝主日', '教宗大良时代在罗马称四旬期第六主日为「苦难主日」，弥撒中诵读玛窦福音中的主受难史。到第九世纪时，圣枝游行礼才逐渐引进西方各教会中。', '李若望', 0, 1, '<p>&nbsp; &nbsp;<span style="line-height: 24px;">第四世纪时，已有人记载关于此日在耶路撒冷教会中庆祝的情形：民众为庆祝耶稣荣进耶路撒冷的事迹，也列队重走昔日耶稣与门徒们进城时所走的路线。下午，民众与主教到撖榄山聚合，读经唱圣诗，然后到耶稣升天处，读有关圣经、唱圣诗。约于下午五时，诵读福音关于耶稣此日荣进耶路撒冷的叙述，然后下山进城，儿童拿着树枝，高唱「奉上主之名而来的应受赞美」的经句。人们游行，经过全城，最后到达耶稣复活堂，举行夜祷。此圣枝游行礼很快传到整个东方教会中，此主日也就称为圣枝主日。</span></p><p>&nbsp; &nbsp; 教宗大良时代在罗马称四旬期第六主日为「苦难主日」，弥撒中诵读玛窦福音中的主受难史。到第九世纪时，圣枝游行礼才逐渐引进西方各教会中。中世纪时，圣枝游行逐渐戏剧化：信友首先于城外集合，然后手持圣枝游行到城内主要圣堂，游行时有人持十字架或福音书，象征耶稣的临在。在德国多次用一木质做的所谓「圣枝驴子」，背上有耶稣像，脚上有滑轮，由人牵引前进。这些习惯以后逐渐消失</p><p>&nbsp; &nbsp; 圣枝主日也叫基督苦难主日，是指复活节前的一个主日，是圣周的开始，之后而来的圣周一、二、三是耶稣受难的前导，对耶稣的苦难作整体性的追念，而后圣周四、五、六庆祝耶稣救赎奥迹的个别事件。前三天在礼仪中诵读：</p><p>&nbsp; &nbsp; 圣周一读耶稣到拉匝禄家里赴宴，玛丽为他敷香液，预示他将被安葬。</p><p>&nbsp; &nbsp; 圣周二读马尔谷的耶稣受难史。</p><p>&nbsp; &nbsp; 圣周三读路加的耶稣受难史。</p><p>&nbsp; &nbsp; 本主日教会庆祝并追念耶稣荣进耶路撒冷及他的苦难。</p><p>&nbsp; &nbsp; 福音书记载耶稣在受难前五天，从伯大尼村骑着小驴驹荣进耶路撒冷城，受到群众夹道欢迎。人们脱下衣服铺在路上，砍下树枝拿在手中，前呼后拥地高唱：“贺撒纳!达味之子；奉主名而来的当受赞美。”(玛21：9)耶稣进入圣城，甘心为人受难。</p><p>&nbsp; &nbsp; 在圣枝主日弥撒前，教会举行祝圣圣枝礼仪。在圣堂外合适的地方，预备一张桌子，桌上放着为礼仪用的树枝，教友们聚集在桌子周围。主礼和辅礼人员，身穿红色祭服，来到教友们聚集的地方。主礼向教友们致候、祈祷，向树枝划十字、洒圣水、奉香，祝圣圣枝，并恭读四福音之一——耶稣荣进圣城的记述。读完福音，主礼、辅礼人员向教友们送圣枝。送完后，列队游行进入圣堂，次序为：提香炉者领队，其次是持十字者，由持蜡烛者陪同，随后是主礼及辅礼人员，再后是众教友。每人手持圣枝，齐声欢唱：“希伯来的儿童，拿着橄榄树枝，前来欢迎救主，向他高声欢唱，响彻云霄。”主礼到达圣所后，向祭台致敬、奉香，开始弥撒。弥撒的读经以耶稣受难为主题。福音分甲、乙、丙三年，依次读玛窦、玛尔谷、路加所记载的耶稣受难史。</p><p>&nbsp; &nbsp; 弥撒完毕，教友们将领到的圣枝拿回家中，敬放一处，或摘下一些插在苦像上。若不便存放，可烧掉，不得随便丢弃或玩弄。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/></p>', '2017-04-10 00:18:27', '2017-04-10 00:18:27', 1);

-- --------------------------------------------------------

--
-- 表的结构 `news_content`
--

CREATE TABLE IF NOT EXISTS `news_content` (
`id` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '新闻内容',
  `news_id` int(11) NOT NULL COMMENT '新闻ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`id` int(11) NOT NULL,
  `rolename` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色名称',
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色备注',
  `status` smallint(6) NOT NULL COMMENT '状态，0禁用，1正常',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `ip` int(11) NOT NULL COMMENT 'IP'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `rolename`, `note`, `status`, `create_at`, `update_at`, `ip`) VALUES
(1, '超级管理', '拥有所有权限', 1, '2017-03-01 16:25:52', '2017-03-01 16:25:52', 1270),
(2, '编辑管理员', '编辑者', 1, '2017-03-01 16:31:51', '2017-03-01 16:31:51', 1270);

-- --------------------------------------------------------

--
-- 表的结构 `role_access`
--

CREATE TABLE IF NOT EXISTS `role_access` (
`id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT '角色ID',
  `access_id` int(11) NOT NULL COMMENT '权限ID',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `list` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT '角色ID',
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `salt` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码盐值，8位',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `ip` int(11) NOT NULL COMMENT 'IP',
  `role` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色名',
  `status` smallint(6) NOT NULL COMMENT '状态，0禁用，1启用'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `role_id`, `username`, `password`, `salt`, `create_at`, `update_at`, `ip`, `role`, `status`) VALUES
(3, 2, 'lcp05786', '$2y$10$oyHIviYnEkn6TQUI7QvcHeBvz9s7d1Yxn4GfKdpMhVUhQYOFC1Mk6', '3bf31c0b', '2017-01-22 16:28:50', '2017-01-22 16:28:50', 1270, 'ROLE_ADMIN', 1),
(4, 1, 'lcp0578', '$2y$10$IMS7M/TmUzE0cOVUKetYSuZKDVWFX0hQmfzmQ1vL.gA7jfSJbygSG', '461ce29b', '2017-03-01 16:27:21', '2017-03-01 16:27:21', 1270, 'ROLE_ADMIN', 1),
(5, 1, 'lcpeng', '$2y$10$ToqRLX56xSyEnWYnR4ixx.Maw78vqzwSCvl1nvUyRjzdzxFsje2pi', 'c619b839', '2017-03-11 03:21:29', '2017-03-11 03:21:29', 1270, 'ROLE_ADMIN', 1),
(6, 2, 'handi', '$2y$10$7IXvDM/5vlnrnRILc9DlUOneYVc5KDuXXdbwNvYwq0j4XWQeJc4RC', 'f8a80b95', '2017-03-11 06:39:15', '2017-03-11 06:39:15', 1270, 'ROLE_ADMIN', 1);

-- --------------------------------------------------------

--
-- 表的结构 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(11) NOT NULL,
  `titile` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `editor` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `video_log`
--

CREATE TABLE IF NOT EXISTS `video_log` (
`id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `web_user`
--

CREATE TABLE IF NOT EXISTS `web_user` (
`id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_880E0D76F85E0677` (`username`), ADD UNIQUE KEY `UNIQ_880E0D7696901F54` (`number`), ADD KEY `IDX_880E0D76123FA025` (`admin_role_id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_user`
--
ALTER TABLE `api_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_AC64A0BAF85E0677` (`username`), ADD UNIQUE KEY `UNIQ_AC64A0BAC912ED9D` (`api_key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_64C19C1727ACA70` (`parent_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_access`
--
ALTER TABLE `menu_access`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_1DD3995012469DE2` (`category_id`);

--
-- Indexes for table `news_content`
--
ALTER TABLE `news_content`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_access`
--
ALTER TABLE `role_access`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`), ADD KEY `IDX_8D93D649D60322AC` (`role_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_log`
--
ALTER TABLE `video_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_user`
--
ALTER TABLE `web_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_4991DBBCE7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `api_user`
--
ALTER TABLE `api_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_access`
--
ALTER TABLE `menu_access`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news_content`
--
ALTER TABLE `news_content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_access`
--
ALTER TABLE `role_access`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video_log`
--
ALTER TABLE `video_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `web_user`
--
ALTER TABLE `web_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 限制导出的表
--

--
-- 限制表 `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `FK_880E0D76123FA025` FOREIGN KEY (`admin_role_id`) REFERENCES `admin_role` (`id`);

--
-- 限制表 `category`
--
ALTER TABLE `category`
ADD CONSTRAINT `FK_64C19C1727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`);

--
-- 限制表 `news`
--
ALTER TABLE `news`
ADD CONSTRAINT `FK_1DD3995012469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- 限制表 `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `FK_8D93D649D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
