# MySQL file for Impression
# Author: McDonald


#
# Table structure for table 'impression_configs'
#

CREATE TABLE `tinycfg_configs` (
	`verifyhtml` varchar(128) NOT NULL default 'false',
	`converturls` varchar(128) NOT NULL default 'false',
	`relativeurls` varchar(128) NOT NULL default 'false',
	`forcebr` varchar(128) NOT NULL default 'false',
	`forcep` varchar(128) NOT NULL default 'true',
	`forcedrootblock` varchar(128) NOT NULL default 'p',
	`skin` varchar(128) NOT NULL default 'default',
	`skinvariant` varchar(128) NOT NULL default 'silver'
);

INSERT INTO tinycfg_configs (verifyhtml,converturls,relativeurls,forcebr,forcep,forcedrootblock,skin,skinvariant) VALUES ('false','false','false','false','true','p','default','silver');

#
# Table structure for table 'impression_configs'
#

CREATE TABLE `tinycfg_toolsets` (
	`tinycfg_id` int(11) NOT NULL auto_increment,
	`tinycfg_gid` int(11) NOT NULL,
	`plugins` longtext NOT NULL,
	`buttons1` longtext NOT NULL,
	`buttons2` longtext NOT NULL,
	`buttons3` longtext NOT NULL,
	`toolbarloc` varchar(128) NOT NULL default 'top',
	`statusbar` varchar(128) NOT NULL default 'bottom',
	`resize` varchar(128) NOT NULL default 'true',
	PRIMARY KEY (tinycfg_id)
);

INSERT INTO tinycfg_toolsets (tinycfg_id,tinycfg_gid,buttons1,buttons2,buttons3,plugins) VALUES (1,1,'bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect','xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor','tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code','icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking');
INSERT INTO tinycfg_toolsets (tinycfg_id,tinycfg_gid,buttons1,buttons2,buttons3,plugins) VALUES (2,2,'bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect','xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor','tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code','icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking');
INSERT INTO tinycfg_toolsets (tinycfg_id,tinycfg_gid,buttons1,buttons2,buttons3,plugins) VALUES (3,3,'bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect','xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor','tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code','icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking');