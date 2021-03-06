# MySQL file for TinyConfig
# Author: McDonald


#
# Table structure for table 'tinycfg_configs'
#

CREATE TABLE `tinycfg_configs` (
	`verifyhtml` varchar(128) NOT NULL default 'false',
	`converturls` varchar(128) NOT NULL default 'false',
	`relativeurls` varchar(128) NOT NULL default 'false',
	`fixlist` varchar(128) NOT NULL default 'false',
	`forcedrootblock` varchar(128) NOT NULL default 'p',
	`sschema` varchar(128) NOT NULL default 'html4',
	`contentcss` varchar(128) NOT NULL default '',
	`brinpre` varchar(128) NOT NULL default 'true'
);

INSERT INTO tinycfg_configs (verifyhtml,converturls,relativeurls,fixlist,forcedrootblock,sschema,brinpre) VALUES ('false','false','false','false','p','html4','true');


#
# Table structure for table 'tinycfg_toolsets'
#

CREATE TABLE `tinycfg_toolsets` (
	`tinycfg_id` int(11) NOT NULL auto_increment,
	`tinycfg_gid` int(11) NOT NULL,
	`plugins` longtext NOT NULL,
	`buttons1` longtext NOT NULL,
	`buttons2` longtext NOT NULL,
	`buttons3` longtext NOT NULL,
	`buttons4` longtext NOT NULL,
	`toolbarloc` varchar(128) NOT NULL default 'top',
	`statusbar` varchar(128) NOT NULL default 'bottom',
	`resize` varchar(128) NOT NULL default 'true',
	`fontfamily` longtext NOT NULL,
	`fontsize` longtext NOT NULL,
	`skin` varchar(128) NOT NULL default 'default',
	`skinvariant` varchar(128) NOT NULL default 'silver',
	PRIMARY KEY (tinycfg_id)
);

INSERT INTO tinycfg_toolsets (tinycfg_id,tinycfg_gid,buttons1,buttons2,buttons3,plugins,fontfamily,fontsize,skin,skinvariant) VALUES (1,1,'bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect,separator,tinyautosave','xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor','tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code','icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking,tinyautosave','Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats','1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt,7 (36pt)=36pt','default','silver');
INSERT INTO tinycfg_toolsets (tinycfg_id,tinycfg_gid,buttons1,buttons2,buttons3,plugins,fontfamily,fontsize,skin,skinvariant) VALUES (2,2,'bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect,separator,tinyautosave','xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor','tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code','icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking,tinyautosave','Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats','1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt,7 (36pt)=36pt','default','silver');
INSERT INTO tinycfg_toolsets (tinycfg_id,tinycfg_gid,buttons1,buttons2,buttons3,plugins,fontfamily,fontsize,skin,skinvariant) VALUES (3,3,'bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect,separator,tinyautosave','xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor','tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code','icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking,tinyautosave','Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats','1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt,7 (36pt)=36pt','default','silver');


CREATE TABLE `tinycfg_simpletoolset` (
	`plugins` longtext NOT NULL,
	`buttons1` longtext NOT NULL,
	`buttons2` longtext NOT NULL,
	`toolbarloc` varchar(128) NOT NULL default 'top',
	`statusbar` varchar(128) NOT NULL default 'bottom',
	`resize` varchar(128) NOT NULL default 'true',
	`fontfamily` longtext NOT NULL,
	`fontsize` longtext NOT NULL,
	`skin` varchar(128) NOT NULL default 'default',
	`skinvariant` varchar(128) NOT NULL default 'silver'
);

INSERT INTO tinycfg_simpletoolset (buttons1,buttons2,plugins,fontfamily,fontsize,skin,skinvariant) VALUES ('bold,italic,underline,strikethrough,separator,fontselect,fontsizeselect,forecolor,backcolor,separator,preview,fullscreen','xoopsquote,xoopscode,icmsmlcontent,separator,undo,redo,separator,link,unlink,xoopsimagemanager,media,separator,xoopsemotions,separator,pastetext','icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,advimage,advlink,emotions,preview,media,contextmenu,paste,fullscreen,visualchars','Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Courier New=courier new,courier;Helvetica=helvetica;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats','1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt','default','silver');