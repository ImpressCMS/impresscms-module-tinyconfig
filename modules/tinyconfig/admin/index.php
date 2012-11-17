<?php
/**
* TinyConfig
*
* File: /admin/index.php
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

include 'admin_header.php';

icms_cp_header();
	icms::$module -> displayAdminMenu( 1, 'TinyConfig' );
	warnings();
	echo '<div style="border: 1px solid #D9D9D9; border-radius: 4px; margin: 10px 0; padding: 5px;">' . _AM_TINYCFG_INDEX . '</div>';
icms_cp_footer();

?>