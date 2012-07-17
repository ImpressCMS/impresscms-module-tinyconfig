<?php
/**
* TinyConfig
*
* File: /language/english/admin.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* 				TinyConfig
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

define( '_AM_TINYCFG_WARNINSTALL', 'WARNING: Folder %s does not exists on your server. <br />This folder is required by TinyConfig.' );

define( '_AM_TINYCFG_INDEX', '<b>Configure:</b> General configuration of TinyMCE. This applies to all User Groups.<br /><b>Toolsets:</b> Configure the toolsets per User Group.<br /><b>Simple Toolset:</b> Configure a simplified toolset.' );

// Configuration
define( '_AM_TINYCFG_CONFIG', 'Configure' );
define( '_AM_TINYCFG_CONFIGSAVE', 'Configuration for TinyMCE editor has been saved.' );

define( '_AM_TINYCFG_VERIFYHTML', 'Verify HTML' );
define( '_AM_TINYCFG_VERIFYHTMLDSC', 'This option enables or disables the element cleanup functionality. If you set this option to false, all element cleanup will be skipped but other cleanup functionality such as URL conversion will still be executed.<br />Default: <i>false</i>' );

define( '_AM_TINYCFG_CONVERTURLS', 'Convert URLs' );
define( '_AM_TINYCFG_CONVERTURLSDSC', 'This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact.<br />Default: <i>false</i>' );

define( '_AM_TINYCFG_RELATIVEURLS', 'Relative URLs' );
define( '_AM_TINYCFG_RELATIVEURLSDSC', 'If this option is set to true, all URLs returned from the Image Manager will be relative from ' . ICMS_URL . '. If it\'s set to false all URLs will be converted to absolute URLs.<br />Default: <i>false</i>' );

define( '_AM_TINYCFG_FIXLIST', 'Fix list elements' );
define( '_AM_TINYCFG_FIXLISTDSC', 'This option enables you to specify that list elements UL/OL is to be converted to valid XHTML.<br />Default: <i>false</i>' );

define( '_AM_TINYCFG_FORCEDRTBLCK', 'Forced root block' );
define( '_AM_TINYCFG_FORCEDRTBLCKDSC', 'This option enables you to make sure that any non block elements or text nodes are wrapped in block elements.<br />Default: <i>p-tag</i>' );
define( '_AM_TINYCFG_PTAG', 'p-tag' );

define( '_AM_TINYCFG_SCHEMA', 'Schema' );
define( '_AM_TINYCFG_SCHEMADSC', 'The schema option enables you to switch between the HTML4 and HTML5 schema. This controls the valid elements and attributes that can be placed in the HTML.<br />Default: <i>HTML4</i>' );

define( '_AM_TINYCFG_CONTENTCSS', 'Enter path to CSS for editable area' );
define( '_AM_TINYCFG_CONTENTCSSDSC', 'This option enables you to specify a custom CSS file that extends the theme content CSS. This CSS file is the one used within the editor (the editable area).<br />Enter the path to the CSS file as <i>folder/folder/folder/tinymce_content.css</i> (without a trailing slash at the start).' );

// Toolsets
define( '_AM_TINYCFG_TOOLSETS', 'Toolsets' );
define( '_AM_TINYCFG_TOOLSETSMCE', 'TinyMCE Toolset' );
define( '_AM_TINYCFG_TOOLSETS_NOTSET', '<b>This group has no toolset yet!</b><br />The values you see are default values. Please edit and submit the form to create a toolset for this group.' );
define( '_AM_TINYCFG_TOOLSAVE', 'Toolset for TinyMCE editor has been saved.' );
define( '_AM_TINYCFG_PLUGINSAVAIL', 'Plugins available:' );

define( '_AM_TINYCFG_GROUPS', 'Groups' );
define( '_AM_TINYCFG_GROUPSELECT', 'Select a group' );

define( '_AM_TINYCFG_PLUGINS', 'Plugins' );
define( '_AM_TINYCFG_BUTTONB1', 'Button bar 1' );
define( '_AM_TINYCFG_BUTTONB2', 'Button bar 2' );
define( '_AM_TINYCFG_BUTTONB3', 'Button bar 3' );
define( '_AM_TINYCFG_BUTTONB4', 'Button bar 4' );

define( '_AM_TINYCFG_FONTFAMILY', 'Font family' );
define( '_AM_TINYCFG_FONTFAMILYDSC', 'This option should contain a semicolon separated list of font titles and font families separated by =. The titles are the ones that get presented to the user in the fonts drop down list and the font family name is the string that gets inserted into the font face or fontFamily CSS style.' );

define( '_AM_TINYCFG_FONTSIZE', 'Font size' );
define( '_AM_TINYCFG_FONTSIZEDSC', 'This option should contain a comma separated list of font sizes to include. Each item in the list should be a valid value for the font-style CSS property (10px, 12pt, 1em, etc.).' );

define( '_AM_TINYCFG_TOOLBARLOC', 'Toolbar location' );
define( '_AM_TINYCFG_TOOLBARLOCDSC', 'This option enables you to specify where the toolbar should be located. This option can be set to \'top\' or \'bottom\'. Default: <i>top</i>' );

define( '_AM_TINYCFG_STATUSB', 'Elements statusbar location' );
define( '_AM_TINYCFG_STATUSBDSC', 'This option enables you to specify where the elements statusbar with the path and resize tool should be located. This option can be set to \'top\', \'bottom\' or \'none\'. Default: <i>bottom</i>' );

define( '_AM_TINYCFG_RESIZE', 'Resize' );
define( '_AM_TINYCFG_RESIZEDSC', 'This option gives you the ability to enable/disable the resizing button. This option is only useful if the Elements statusbar location option is set to \'top\' or \'bottom\'.' );

define( '_AM_TINYCFG_SKIN', 'Select skin' );
define( '_AM_TINYCFG_SKINDSC', '' );
define( '_AM_TINYCFG_SKIN_DEFAULT', 'Default' );
define( '_AM_TINYCFG_SKIN_CONTRAST', 'High Contrast' );
define( '_AM_TINYCFG_SKIN_O2K7', 'O2K7' );

define( '_AM_TINYCFG_SKINVAR', 'Select skin variant' );
define( '_AM_TINYCFG_SKINVARDSC', 'The skin variant applies to the O2K7 skin only.' );
define( '_AM_TINYCFG_SKINVAR_BLACK', 'Black' );
define( '_AM_TINYCFG_SKINVAR_SILVER', 'Silver' );

define( '_AM_TINYCFG_BOTTOM', 'bottom' );
define( '_AM_TINYCFG_TOP', 'top' );
define( '_AM_TINYCFG_NONE', 'none' );
define( '_AM_TINYCFG_TRUE', 'true' );
define( '_AM_TINYCFG_FALSE', 'false' );

// Simple Toolsets
define( '_AM_TINYCFG_SIMPLETOOLSETSMCE', 'Simple TinyMCE Toolsets' );
define( '_AM_TINYCFG_SIMPLETOOLSETSMCEDSC', 'With this form it\'s possible to create simplified toolsets. These simplified toolsets can be used for comments, forums and can\'t be set per User Group.' );
define( '_AM_TINYCFG_SIMPLETOOLSAVE', 'Simple toolsets for TinyMCE editor has been saved.' );

// TinyConfig 2.0
define( '_AM_TINYCFG_BRINPRE', 'BR tag within PRE tag option' );
define( '_AM_TINYCFG_BRINPREDSC', 'This option is enabled by default and changes the behavior on how the enter key is used within a pre tag. Since most pre tags are used for things like code examples it made more sense to produce a BR on enter by default and only split pre tags when hitting shift+enter. If you don\'t want this new behavior you can set the br_in_pre to false.<br />Default: <i>true</i>' );
define( '_AM_TINYCFG_BRTAG', 'br-tag' );
?>