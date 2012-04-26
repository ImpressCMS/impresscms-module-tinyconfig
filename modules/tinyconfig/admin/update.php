<?php
/**
* impression - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: /include/update.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links
* @since		1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				WF-Links
* @since		1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				impression
* @since		1.00
* @author		McDonald
* @version		$Id$
*/
 
if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' ); }

// Referer check
$ref = xoops_getenv( 'HTTP_REFERER' );

if( $ref == '' || strpos( $ref , ICMS_URL . '/modules/system/admin.php' ) === 0 ) {
		$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'tinycfg_configs') . " ADD COLUMN contentcss VARCHAR(1128) NOT NULL default ''";
		if ( !mysql_query( $sql ) ) {}
		$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'tinycfg_configs') . " ADD COLUMN fixlist VARCHAR(128) NOT NULL default 'false' AFTER forcep";
		if ( !mysql_query( $sql ) ) {}
}
?>