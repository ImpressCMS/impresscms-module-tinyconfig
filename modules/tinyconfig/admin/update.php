<?php
/**
* TinyConfig
*
* File: /admin/update.php
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
 
if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' ); }

// Referer check
$ref = xoops_getenv( 'HTTP_REFERER' );

if( $ref == '' || strpos( $ref , ICMS_URL . '/modules/system/admin.php' ) === 0 ) {
		$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'tinycfg_configs') . " ADD COLUMN contentcss VARCHAR(128) NOT NULL default ''";
		if ( !mysql_query( $sql ) ) {}
		$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'tinycfg_configs') . " ADD COLUMN fixlist VARCHAR(128) NOT NULL default 'false' AFTER relativeurls";
		if ( !mysql_query( $sql ) ) {}

		// TinyConfig 2.0		
		$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'tinycfg_configs') . " DROP forcebr";
		if ( !mysql_query( $sql ) ) {}
	//	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'tinycfg_configs') . " DROP forcep";
	//	if ( !mysql_query( $sql ) ) {}

		$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'tinycfg_configs') . " ADD COLUMN brinpre VARCHAR(128) NOT NULL default 'true'";
		if ( !mysql_query( $sql ) ) {}
}
?>