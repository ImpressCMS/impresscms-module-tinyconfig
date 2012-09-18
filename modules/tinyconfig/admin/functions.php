<?php
/**
* TinyConfig
*
* File: /admin/functions.php
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

function tinycfg_tooltip( $description, $tip = 'help' ) {
	switch ( $tip ) {
		case 'help':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:help tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/help_small.png" alt="" /></a>';
			break;
		case 'info':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:info tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/information_small.png" alt="" /></a>';
			break;
		case 'warning':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:warning tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/error_small.png" alt="" /></a>';
			break;
		case 'error':
			$tooltip = '<a style="float: right;" href="javascript:void(0)" class="lytetip" data-lyte-options="tipStyle:error tipDecoration:none" title="' . $description . '"><img style="float: right;" src="' . ICMS_LIBRARIES_URL . '/lytebox/images/exclamation_small.png" alt="" /></a>';
			break;
	}
	return $tooltip;
}

function warnings() {
	// Check if library folders are there
	$path_01 = ICMS_LIBRARIES_PATH . '/lytebox';
	if ( !is_dir( $path_01 ) ) { icms_core_Message::error( sprintf( _AM_TINYCFG_WARNINSTALL, $path_01 ) ); }
}

?>