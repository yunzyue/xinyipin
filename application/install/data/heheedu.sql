-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-10 07:56:09
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heheedu`
--

-- --------------------------------------------------------

--
-- 表的结构 `hehe_articles`
--
DROP TABLE IF EXISTS `he_articles`;
CREATE TABLE `he_articles` (
  `id` int(11) NOT NULL COMMENT '文章id',
  `title` varchar(155) NOT NULL COMMENT '文章标题',
  `description` varchar(255) NOT NULL COMMENT '文章描述',
  `keywords` varchar(155) NOT NULL COMMENT '文章关键字',
  `thumbnail` varchar(255) NOT NULL COMMENT '文章缩略图',
  `content` text NOT NULL COMMENT '文章内容',
  `add_time` datetime NOT NULL COMMENT '发布时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hehe_articles`
--

INSERT INTO `he_articles` (`id`, `title`, `description`, `keywords`, `thumbnail`, `content`, `add_time`) VALUES
(2, '文章标题', '文章描述', '关键字1,关键字2,关键字3', '/upload/20170916/1e915c70dbb9d3e8a07bede7b64e4cff.png', '<p><img src="/upload/image/20170916/1505555254.png" title="1505555254.png" alt="QQ截图20170916174651.png"/></p><p>测试文章内容</p><p>测试内容</p>', '2017-09-16 17:47:44');

-- --------------------------------------------------------

--
-- 表的结构 `hehe_node`
--
DROP TABLE IF EXISTS `he_node`;
CREATE TABLE `he_node` (
  `id` int(11) NOT NULL,
  `node_name` varchar(155) NOT NULL DEFAULT '' COMMENT '节点名称',
  `control_name` varchar(155) NOT NULL DEFAULT '' COMMENT '控制器名',
  `action_name` varchar(155) NOT NULL COMMENT '方法名',
  `is_menu` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否是菜单项 1不是 2是',
  `type_id` int(11) NOT NULL COMMENT '父级节点id',
  `style` varchar(155) DEFAULT '' COMMENT '菜单样式'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `hehe_node`
--

INSERT INTO `he_node` (`id`, `node_name`, `control_name`, `action_name`, `is_menu`, `type_id`, `style`) VALUES
(1, '用户管理', '#', '#', 2, 0, 'fa fa-users'),
(2, '管理员管理', 'user', 'index', 2, 1, ''),
(3, '添加管理员', 'user', 'useradd', 1, 2, ''),
(4, '编辑管理员', 'user', 'useredit', 1, 2, ''),
(5, '删除管理员', 'user', 'userdel', 1, 2, ''),
(6, '角色管理', 'role', 'index', 2, 1, ''),
(7, '添加角色', 'role', 'roleadd', 1, 6, ''),
(8, '编辑角色', 'role', 'roleedit', 1, 6, ''),
(9, '删除角色', 'role', 'roledel', 1, 6, ''),
(10, '分配权限', 'role', 'giveaccess', 1, 6, ''),
(11, '系统管理', '#', '#', 2, 0, 'fa fa-desktop'),
(12, '数据备份/还原', 'data', 'index', 2, 11, ''),
(13, '备份数据', 'data', 'importdata', 1, 12, ''),
(14, '还原数据', 'data', 'backdata', 1, 12, ''),
(15, '节点管理', 'node', 'index', 2, 1, ''),
(16, '添加节点', 'node', 'nodeadd', 1, 15, ''),
(17, '编辑节点', 'node', 'nodeedit', 1, 15, ''),
(18, '删除节点', 'node', 'nodedel', 1, 15, ''),
(19, '文章管理', 'articles', 'index', 2, 0, 'fa fa-book'),
(20, '文章列表', 'articles', 'index', 2, 19, ''),
(21, '添加文章', 'articles', 'articleadd', 1, 19, ''),
(22, '编辑文章', 'articles', 'articleedit', 1, 19, ''),
(23, '删除文章', 'articles', 'articledel', 1, 19, ''),
(24, '上传图片', 'articles', 'uploadImg', 1, 19, '');

-- --------------------------------------------------------

--
-- 表的结构 `hehe_role`
--
DROP TABLE IF EXISTS `he_role`;
CREATE TABLE `he_role` (
  `id` int(11) NOT NULL COMMENT 'id',
  `role_name` varchar(155) NOT NULL COMMENT '角色名称',
  `rule` varchar(255) DEFAULT '' COMMENT '权限节点数据'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `hehe_role`
--

INSERT INTO `he_role` (`id`, `role_name`, `rule`) VALUES
(1, '超级管理员', '*'),
(2, '系统维护员', '1,2,3,4,5,6,7,8,9,10');

-- --------------------------------------------------------

--
-- 表的结构 `hehe_user`
--
DROP TABLE IF EXISTS `he_user`;
CREATE TABLE `he_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT '密码',
  `login_times` int(11) NOT NULL DEFAULT '0' COMMENT '登陆次数',
  `last_login_ip` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT '最后登录IP',
  `last_login_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `real_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT '真实姓名',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `role_id` int(11) NOT NULL DEFAULT '1' COMMENT '用户角色id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hehe_user`
--

INSERT INTO `he_user` (`id`, `user_name`, `password`, `login_times`, `last_login_ip`, `last_login_time`, `real_name`, `status`, `role_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 41, '127.0.0.1', 1505559479, 'admin', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hehe_articles`
--
ALTER TABLE `he_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hehe_node`
--
ALTER TABLE `he_node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hehe_role`
--
ALTER TABLE `he_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hehe_user`
--
ALTER TABLE `he_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `hehe_articles`
--
ALTER TABLE `he_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hehe_node`
--
ALTER TABLE `he_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- 使用表AUTO_INCREMENT `hehe_role`
--
ALTER TABLE `he_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hehe_user`
--
ALTER TABLE `he_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
