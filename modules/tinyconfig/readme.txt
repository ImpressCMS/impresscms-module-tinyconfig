==========================
Installation of TinyConfig
==========================

Upload the folders from the download package to your server.
This will overwrite the files editors/tinymce/formtinymce.php and editors/tinymce/tinymce.php.
Install TinyConfig from the Module Administration like any other ICMS module.




================================
Using Simple Toolsets in modules
================================

$editor = new XoopsFormTinymce( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '500px', 'setextra' => 0 ) );

'setextra' => 0    : normal toolsets
'setextra' => 1    : simple toolsets




=============================================================
Default values for TinyConfig Configuration and Toolset forms
=============================================================


Configuration
=============

Verify HTML: false

Convert URLs: false

Relative URLs: false

Force BR elements: false

Force P elements: true

Forced root block: p

Schema: HTML4




Toolsets
========

Plugins: icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking

Button bar 1: bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect

Button bar 2: xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor

Button bar 3: tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code

Button bar 4:

Font family: Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats

Font size: 1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt,7 (36pt)=36pt

Toolbar location: top

Elements statusbar location: bottom

Resize: true

Select skin: default

Skin variant: Silver




Simple Toolsets
===============

Plugins: icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,advimage,advlink,emotions,preview,media,contextmenu,paste,fullscreen,visualchars

Button bar 1: bold,italic,underline,strikethrough,separator,fontselect,fontsizeselect,forecolor,backcolor,separator,preview,fullscreen

Button bar 2: xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor

Font family: Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Courier New=courier new,courier;Helvetica=helvetica;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats

Font size: 1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt

Toolbar location: top

Elements statusbar location: bottom

Resize: true

Select skin: default

Skin variant: Silver