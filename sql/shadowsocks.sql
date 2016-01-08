SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
--
-- Table structure for table `invite_code`
--

CREATE TABLE IF NOT EXISTS `invite_code` (
`id` int(32) NOT NULL,
  `code` varchar(128) NOT NULL,
  `user` int(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3644 ;

--
-- Dumping data for table `invite_code`
--

INSERT INTO `invite_code` (`id`, `code`, `user`) VALUES
(3639, '193c77e35a4a3f', 1),
(3643, '134201a5b85900', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invite_code`
--
ALTER TABLE `invite_code`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invite_code`
--
ALTER TABLE `invite_code`
MODIFY `id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3644; SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ss_node`;
CREATE TABLE `ss_node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `node_name` varchar(128) NOT NULL,
  `node_type` int(3) NOT NULL,
  `node_server` varchar(128) NOT NULL,
  `node_method` varchar(64) NOT NULL,
  `node_info` varchar(128) NOT NULL,
  `node_status` varchar(128) NOT NULL,
  `node_order` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ss_node` (`id`, `node_name`, `node_type`, `node_server`, `node_method`, `node_info`, `node_status`, `node_order`) VALUES
(1,	'第一个节点',	0,	'node.url.io',	'aes-256-cfb',	'node描述',	'可用',	0);

-- 2015-01-14 06:18:14
SET NAMES utf8;
SET time_zone = '+08:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ss_reset_pwd`;
CREATE TABLE `ss_reset_pwd` (
  `id` int(11) NOT NULL ,
  `init_time` int(11) NOT NULL,
  `expire_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `uni_char` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `ss_reset_pwd`
MODIFY `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT;

INSERT INTO `ss_reset_pwd` (`id`, `init_time`, `expire_time`, `user_id`, `uni_char`) VALUES
(0,	1424448190,	1424534590,	1,	'2MzU5ODFkYzM4MmVkZTM2ZTdjNGNhNDI');

-- 2015-02-22 09:55:41
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ss_user_admin`;
CREATE TABLE `ss_user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ss_user_admin` (`id`, `uid`) VALUES
(1,	1);

-- 2015-04-25 15:20:07
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `passwd` varchar(16) NOT NULL,
  `t` int(11) NOT NULL DEFAULT '0',
  `u` bigint(20) NOT NULL,
  `d` bigint(20) NOT NULL,
  `plan` varchar(2) CHARACTER SET utf8mb4 NOT NULL,
  `transfer_enable` bigint(20) NOT NULL,
  `port` int(11) NOT NULL,
  `switch` tinyint(4) NOT NULL DEFAULT '1',
  `enable` tinyint(4) NOT NULL DEFAULT '1',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `last_get_gift_time` int(11) NOT NULL DEFAULT '0',
  `last_check_in_time` int(11) NOT NULL DEFAULT '0',
  `last_rest_pass_time` int(11) NOT NULL DEFAULT '0',
  `reg_date` datetime NOT NULL,
  `invite_num` int(8) NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `ref_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`uid`, `user_name`, `email`, `pass`, `passwd`, `t`, `u`, `d`, `plan`, `transfer_enable`, `port`, `switch`, `enable`, `type`, `last_get_gift_time`, `last_check_in_time`, `last_rest_pass_time`, `reg_date`, `invite_num`, `money`, `ref_by`) VALUES
(1,	'user',	'first@blood.com',	'c5a4e7e6882845ea7bb4d9462868219b',	'LoveFish',	1427454468,	25570082746,	19210700227,	'B',	385601241088,	10000,	1,	1,	7,	0,	1429758822,	0,	'1997-01-27 00:00:00',	0,	1.20,	0);

-- 2015-04-28 14:54:26
