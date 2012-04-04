<?php
/**
* TinyConfig
*
* File: /admin/menu.php
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

$adminmenu[1]['title'] = 'Index';
$adminmenu[1]['link']  = 'admin/index.php';
$adminmenu[1]['icon']  = 'images/tinycfg_big.png'; // 32x32 px for options bar (tabs) 
$adminmenu[1]['small'] = 'images/tinycfg_small.png'; // 16x16 px for drop down

$adminmenu[2]['title'] = _MI_TINYCFG_CONFIG;
$adminmenu[2]['link']  = 'admin/config.php';
$adminmenu[2]['icon']  = 'images/tinycfg_config.png';

$adminmenu[3]['title'] = _MI_TINYCFG_TOOLSETS;
$adminmenu[3]['link']  = 'admin/toolsets.php?op=edit';
$adminmenu[3]['icon']  = 'images/tinycfg_toolbar.png';

$adminmenu[4]['title'] = _MI_TINYCFG_SIMPLETOOLSETS;
$adminmenu[4]['link']  = 'admin/simpletoolset.php';
$adminmenu[4]['icon']  = 'images/tinycfg_simpletoolbar.png';

$tinycfgModule = icms_getModuleInfo( basename( dirname( dirname( __FILE__ ) ) ) );

if ( isset( $tinycfgModule ) ) {

	$headermenu[0]['title'] = _MODABOUT_ABOUT;
	$headermenu[0]['link'] = ICMS_URL . '/modules/' . $tinycfgModule -> getVar( 'dirname' ) . '/admin/about.php';
}

?>