CREATE TABLE IF NOT EXISTS `t_apps` (
  `appid` int(11) NOT NULL auto_increment,
  `dbid` int(11) NOT NULL,
  `apptype` int(4) NOT NULL,
  `appname` varchar(64) NOT NULL,
  `apptitle` varchar(64) NOT NULL,
  `appdesc` varchar(255) default NULL,
  `formid` int(11) default NULL,
  `charttype` varchar(32) default NULL,
  `sqlcontent` text default NULL,
  `param1` varchar(255) default NULL,
  `param2` tinyint(4) default NULL,
  `appkey` varchar(32) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `createdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`appid`),
  KEY `dbid` (`dbid`),
  KEY `creatorid` (`creatorid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_db` (
  `dbid` int(11) unsigned NOT NULL auto_increment,
  `aliasname` varchar(128) NOT NULL,
  `host` varchar(128) NOT NULL,
  `port` varchar(32) default NULL,
  `dbname` varchar(128) NOT NULL,
  `dbuser` varchar(128) NOT NULL,
  `dbpassword` varchar(32) default NULL,
  `charset` varchar(16) default NULL,
  `collation` varchar(32) default NULL,
  `creatorid` int(11) unsigned NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `lastvisitdate` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`dbid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_dbuser` (
  `dbid` int(11) unsigned NOT NULL,
  `userid` int(11) unsigned NOT NULL,
  `priv` tinyint(1) NOT NULL default '1',
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`dbid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_form` (
  `formID` int(11) NOT NULL auto_increment,
  `formName` varchar(64) default NULL,
  `formDescription` varchar(1024) default NULL,
  `loadAction` text default NULL,
  `formXML` text NOT NULL,
  `creatorID` int(11) default NULL,
  `createDate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`formID`),
  UNIQUE KEY `formID` (`formID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_querybuilder` (
  `qbID` int(11) default NULL,
  `qbName` varchar(64) default NULL,
  `qbDescription` varchar(256) default NULL,
  `qbContent` text default NULL,
  `dbid` int(11) NOT NULL,
  `creatorID` int(11) default NULL,
  `createDate` timestamp NOT NULL default CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_user` (
  `userid` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(64) default NULL,
  `username` varchar(16) NOT NULL,
  `Password` varchar(32) default NULL,
  `regip` varchar(15) default NULL,
  `regdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `vip` tinyint(1) NOT NULL default '0',
  `expiredate` timestamp NOT NULL default '0000-00-00 00:00:00',
  `lastdbid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_checkpoint` (
  `cpid` int(11) NOT NULL auto_increment,
  `appid` int(11) unsigned NOT NULL,
  `paramskey` varchar(32) default NULL,
  `recordDate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  PRIMARY KEY  (`cpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_advrep` (
  `appid` int(11) NOT NULL,
  `rpf` varchar(16) not null,
  `sqlconditions` varchar(256) default NULL,
  `sqlops` varchar(256) default NULL,
  `sqlvalues` varchar(256) default null,
  `sqljoins` varchar(256) default NULL,
  `tablenames` varchar(256) default NULL,
  `left_columnnames` varchar(256) default null,
  `right_columnnames` varchar(256) default null,
  `jointype` varchar(256) default null,
  PRIMARY KEY  (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_advrep_tabular` (
  `appid` int(11) NOT NULL,
  `selects` varchar(256) default NULL,
  `selectfuns` varchar(256) default NULL,
  `orders` varchar(256) default NULL,
  `ordertypes` varchar(256) default NULL,
  `rowlimit` smallint(6) default -1,
  PRIMARY KEY  (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_advrep_summary` (
  `appid` int(11) NOT NULL,
  `groupbys` varchar(256) default NULL,
  `groupbyfuns` varchar(256) default NULL,
  `summarys` varchar(256) default NULL,
  `summaryfuns` varchar(256) default NULL,
  PRIMARY KEY  (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_advrep_chart` (
  `appid` int(11) NOT NULL,
  `xaxiss` varchar(256) default NULL,
  `xaxisfuns` varchar(256) default NULL,
  `yaxiss` varchar(256) default NULL,
  `yaxisfuns` varchar(256) default NULL,
  `xaxislabel` varchar(32) default NULL,
  `yaxislabel` varchar(32) default NULL,
  `charttype` varchar(32) default NULL,
  PRIMARY KEY  (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_advrep_pivot` (
  `appid` int(11) NOT NULL,
  `columns` varchar(256) default NULL,
  `columnfuns` varchar(256) default NULL,
  `rows` varchar(256) default NULL,
  `rowfuns` varchar(256) default NULL,
  `datas` varchar(256) default NULL,
  `datafuns` varchar(256) default NULL,
  PRIMARY KEY  (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_advrep_calendar` (
  `appid` int(11) NOT NULL,
  `basedfield` varchar(256) default NULL,
  `basedfieldfun` varchar(256) default NULL,
  `displayfields` varchar(256) default NULL,
  `displayfieldfuns` varchar(256) default NULL,
  `initmonth` varchar(256) default NULL,
  PRIMARY KEY  (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_bookmarks` (
  `bkid` int(11) NOT NULL auto_increment,
  `dbid` int(11) NOT NULL,
  `cat` varchar(32) default NULL,
  `subcat` varchar(32) default NULL,
  `catkey` varchar(32) default NULL,
  `content` text default NULL,
  PRIMARY KEY  (`bkid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_logs` (
  `id` int(11) NOT NULL auto_increment,
  `Connection` varchar(255) default NULL,
  `TableName` varchar(255) default NULL,
  `FieldName` varchar(255) default NULL,
  `Action` varchar(255) default NULL,
  `UserName` varchar(255) default NULL,
  `Comment` varchar(1024) default NULL,
  `Date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_showtables` (
  `dbid` int(11) NOT NULL,
  `tablename` varchar(128) default NULL,
  `userid` int(11) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_hideapps` (
  `dbid` int(11) NOT NULL,
  `appid` int(11) NOT NULL,
  `userid` int(11) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `t_settings` (
  `option_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` mediumtext NOT NULL,
  `option_group` varchar(55) NOT NULL DEFAULT 'site',
  `auto_load` enum('no','yes') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`,`option_name`),
  KEY `option_name` (`option_name`),
  KEY `auto_load` (`auto_load`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

