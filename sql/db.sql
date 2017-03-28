CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `comment_by` varchar(45) DEFAULT NULL,
  `comment_text` varchar(800) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `replied_to` int(11) DEFAULT NULL,
  `votes_up` int(11) DEFAULT '0',
  `votes_down` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `forum_type` int(11) DEFAULT NULL,
  `forum_name` varchar(90) DEFAULT NULL,
  `forum_description` varchar(90) DEFAULT NULL,
  `forum_icon` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

INSERT INTO `forums` (`id`, `forum_id`, `forum_type`, `forum_name`, `forum_description`, `forum_icon`) VALUES
(1, 1, 1, '1', '1', 'H7630A7DXOFY1465340163715.png'),
(2, 2, 1, '2', '2', '3J7DYJXHUEAL1465340164010.png'),
(3, 3, 1, '3', '3', 'Y3H0ZXKW6BS11465340163386.png'),
(4, 4, 2, '4', '4', 'ADSIU5U7W1F91465340164046.png'),
(5, 5, 2, '5', '5', 'OHIIWXOXTQLV1465340163985.png'),
(6, 6, 2, '6', '6', '631CI140DCFX1465340163772.png'),
(7, 7, 2, '7', '7', 'C8J7S9HL8RHB1465340163811.png'),
(8, 8, 3, '8', '8', 'OB1XX71CH6CZ1465340163932.png'),
(9, 9, 3, '9', '9', 'CGFP3LH4T20Y1465340163753.png'),
(10, 10, 3, '10', '10', 'L3B2BXGBMI8F1465340163947.png'),
(11, 11, 3, '11', '11', 'ZUFAMWGTP3KU1465340163878.png'),
(12, 12, 3, '12', '12', 'A14TA6QKYP7I1465340163883.png'),
(13, 13, 3, '13', '13', '2EDXXX9GSQ411465340164020.png'),
(14, 14, 4, '14', '14', '0DHCTVAA3F731465340163891.png'),
(15, 15, 4, '15', '15', '0DHCTVAA3F731465340163891.png'),
(16, 17, 5, '16', NULL, 'Q21ASBT2SDXX1465340163697.png'),
(17, 18, 5, '17', NULL, 'MMF2M70OD4PY1465340163646.png'),
(18, 19, 5, '18', NULL, 'BIML5YS7P8XA1465340163522.png'),
(19, 20, 5, '19', NULL, 'KONFY3G21NRT1465340163602.png'),
(20, 21, 5, '20', NULL, 'MD3875H6PEN31465340163613.png'),
(21, 22, 5, '21', NULL, '3AP8QPDFMH191465340163595.png'),
(22, 23, 5, '22', NULL, 'FTPZBBV8LWHM1465340163625.png'),
(23, 24, 5, '23', NULL, '4K4NG17DH5OC1465340163651.png'),
(24, 25, 5, '24', NULL, '6D5HKWY2GULD1465340163386.png'),
(25, 26, 5, '25', NULL, 'Y65BR5SJIAKM1465340163689.png'),
(26, 27, 5, '26', NULL, 'TGVJ0Y6O051R1465340163670.png'),
(27, 16, 5, '27', NULL, '742W2C4VQJ651465340163518.png');

CREATE TABLE `forum_comments` (
  `id` int(11) NOT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `posted_by` varchar(45) DEFAULT NULL,
  `post_time` int(11) DEFAULT NULL,
  `post_message` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `forum_topics` (
  `id` int(11) NOT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `posted_by` varchar(45) DEFAULT NULL,
  `topic` varchar(200) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `post_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `item_comments` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `discussion_key` varchar(45) DEFAULT NULL,
  `comment_by` varchar(45) DEFAULT NULL,
  `comment_text` varchar(1000) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `reply_to` int(11) DEFAULT NULL,
  `language_code` varchar(5) DEFAULT NULL,
  `votes_up` int(11) DEFAULT NULL,
  `votes_down` int(11) DEFAULT NULL,
  `replied_to` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `key` varchar(30) NOT NULL,
  `active` varchar(20) NOT NULL,
  `page_index` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `menu` (`id`, `key`, `active`, `page_index`, `icon`, `href`) VALUES
(1, 'menu-home', 'Main', 'index', 'home', '/'),
(2, 'menu-game', 'Game', 'game', 'game', '/game/'),
(3, 'menu-community', 'Community', 'community', 'community', '/community/'),
(4, 'menu-media', 'Media', 'media', 'media', '/media/'),
(5, 'menu-forums', 'Forum', 'forums', 'forums', '/forum/'),
(6, 'menu-services', 'Shop', 'services', 'services', '/shop/');

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `short_description` varchar(150) DEFAULT NULL,
  `full_description` varchar(1000) DEFAULT NULL,
  `posted_by` varchar(45) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `post_miniature` varchar(60) DEFAULT NULL,
  `comments_key` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `news` (`id`, `title`, `short_description`, `full_description`, `posted_by`, `post_date`, `post_miniature`, `comments_key`) VALUES
(1, 'Новость 1', 'news test', 'news test', 'rock', '2017-03-02 02:05:06', '499ZA6N4RQOC1438877403945.jpg', 'wsfewf'),
(2, 'news test 2', 'news test 2 ', 'news test 2 ', 'rock', '2017-03-02 02:05:06', '499ZA6N4RQOC1438877403945.jpg', 'wsfewf'),
(3, 'news test 3', 'news test 3 ', 'news test 3 ', 'rock', '2017-03-02 02:05:06', '499ZA6N4RQOC1438877403945.jpg', 'wsfewf');

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1 - Service\n2 - Gear\n3 - Mount\n4 - Wallet Top UP',
  `short_code` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL COMMENT 'ONLY IN USD!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `prices` (`id`, `type`, `short_code`, `price`) VALUES
(1, 1, 'pct', 20),
(2, 1, 'pfc', 25),
(3, 1, 'prc', 20),
(4, 1, 'pcc', 15),
(5, 1, 'pnc', 8),
(6, 3, 'celestial-steed', 25),
(7, 3, 'armored-bloodwing', 30),
(8, 2, 'shadowmourne', 50),
(9, 2, 'dragonwrath-tarecgosas-rest', 50);

CREATE TABLE `shop_codes` (
  `id` int(11) NOT NULL,
  `purchased_item` varchar(45) DEFAULT NULL,
  `purchase_code` varchar(100) DEFAULT NULL,
  `purchase_date` varchar(45) DEFAULT NULL,
  `purchased_for_account` int(11) DEFAULT NULL,
  `code_activated` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `shop_codes` (`id`, `purchased_item`, `purchase_code`, `purchase_date`, `purchased_for_account`, `code_activated`) VALUES
(1, 'celestial-steed', 'W0CERR3-XXKALPT-JK27KOJ-5WN3EO1-P66QSTN-JS4H238-DAOOOLS-T3XAXQM', '1490424638', 6, 0),
(2, 'celestial-steed', 'YS1KKHR-4LTGWDB-8AVUVRD-ED9Y596-FJSZDF8-0QQJBYJ-ZC382GV-TGQD9YG', '1490424683', 6, 0),
(3, 'armored-bloodwing', 'FKJHG18-JFUOQAN-FBV15FC-P5SEN7I-B6NAZFR-FO1X72N-F6SX4EY-PSATIIU', '1490424754', 6, 0),
(4, 'shadowmourne', 'ZRIKDM8-099UY0O-GURIXKY-IG4GA73-HZ895O3-V2PAMXC-Y4MV1O6-A00FEVC', '1490424862', 6, 0),
(5, 'celestial-steed', '5SOC0C4-T3ETTYV-NL3S5ZA-QQKXQ76-4EXXDWV-NYKHIN8-KYUPZIC-9QL486M', '1490450989', 6, 0),
(6, 'celestial-steed', 'BLGV1YW-FFUY43F-OFLIIGB-3HX4U6L-XUC2T4G-5QV6D7G-QGU4AXN-H4LJPZ5', '1490451052', 6, 0);

CREATE TABLE `shop_items` (
  `id` int(11) NOT NULL,
  `short_code` varchar(45) DEFAULT NULL,
  `item_id` varchar(45) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `item_type` int(11) DEFAULT NULL,
  `item_shop_icon` varchar(45) DEFAULT NULL,
  `item_background` varchar(45) DEFAULT NULL,
  `item_background_color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `shop_items` (`id`, `short_code`, `item_id`, `item_name`, `item_type`, `item_shop_icon`, `item_background`, `item_background_color`) VALUES
(1, 'celestial-steed', '54811', 'Celestial Steed', 3, 'celestial_steed', 'celestial_steed', '#050933'),
(2, 'armored-bloodwing', '95341', 'Armored Bloodwing', 3, 'armored_bloodwind', 'armored_bloodwind', '#240a08'),
(3, 'shadowmourne', '49623', 'Shadowmourne', 2, 'shadowmourne', 'item_lk', '#002130'),
(4, 'dragonwrath-tarecgosas-rest', '71086', 'Dragonwrath, Tarecgosa\'s Rest', 2, 'dragonwrath', 'item_after_lk', '#240a08');

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `enabled` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slideshow`
--

INSERT INTO `slideshow` (`id`, `title`, `description`, `url`, `image`, `duration`, `enabled`) VALUES
(1, NULL, NULL, 'test', '499ZA6N4RQOC1438877403945.jpg', 5, 1),
(2, 'test 2', 'test 2', 'test', 'vk.jpg', 5, 1);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pinned_character` int(11) DEFAULT NULL,
  `tag_name` varchar(45) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `balance` float DEFAULT '0',
  `selected_currency` varchar(6) DEFAULT 'USD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users_payments_history` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `service` varchar(45) DEFAULT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` float DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `digital_key` text NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user_characters` (
  `bn_id` int(11) NOT NULL,
  `account` int(11) NOT NULL,
  `indexs` int(11) DEFAULT '1',
  `guid` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `class` smallint(6) NOT NULL,
  `class_text` varchar(50) NOT NULL,
  `class_key` varchar(30) NOT NULL,
  `race` smallint(6) NOT NULL,
  `race_text` varchar(50) NOT NULL,
  `race_key` varchar(30) NOT NULL,
  `gender` smallint(6) NOT NULL,
  `level` int(11) NOT NULL,
  `realmId` int(11) NOT NULL DEFAULT '0',
  `realmName` varchar(255) NOT NULL,
  `isActive` int(11) DEFAULT NULL,
  `faction` smallint(1) NOT NULL,
  `faction_text` varchar(15) NOT NULL,
  `guildId` varchar(11) NOT NULL,
  `guildName` varchar(50) NOT NULL,
  `guildUrl` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `item_comments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `shop_codes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `shop_items`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users_payments_history`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_characters`
  ADD PRIMARY KEY (`account`,`guid`,`realmId`);

ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

ALTER TABLE `forum_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `forum_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `item_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `shop_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `shop_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `users_payments_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;