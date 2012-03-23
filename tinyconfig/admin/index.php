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
icms_cp_footer();

?>