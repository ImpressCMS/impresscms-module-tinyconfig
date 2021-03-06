<?php
/**
* TinyConfig
*
* File: /admin/config.php
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

$op = '';

if ( isset( $_GET['op'] ) ) $op = $_GET['op'];
if ( isset( $_POST['op'] ) ) $op = $_POST['op'];

function config_edit() {
	global $icmsConfig, $icmsAdminTpl;

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'tinycfg_configs' );
	$tinycfg_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

	$verifyhtml		= $tinycfg_array['verifyhtml'] ? htmlspecialchars( $tinycfg_array['verifyhtml'] ) : 'false';
	$converturls	= $tinycfg_array['converturls'] ? htmlspecialchars( $tinycfg_array['converturls'] ) : 'false';
	$relativeurls	= $tinycfg_array['relativeurls'] ? htmlspecialchars( $tinycfg_array['relativeurls'] ) : 'false';
	$brinpre		= $tinycfg_array['brinpre'] ? htmlspecialchars( $tinycfg_array['brinpre'] ) : 'true';
	$fixlist		= $tinycfg_array['fixlist'] ? htmlspecialchars( $tinycfg_array['fixlist'] ) : 'true';
	$forcedrootblock= $tinycfg_array['forcedrootblock'] ? htmlspecialchars( $tinycfg_array['forcedrootblock'] ) : 'p-tag';
	$sschema		= $tinycfg_array['sschema'] ? htmlspecialchars( $tinycfg_array['sschema'] ) : 'html4';
	$contentcss		= $tinycfg_array['contentcss'] ? htmlspecialchars( $tinycfg_array['contentcss'] ) : '';

	icms_cp_header();
	icms::$module -> displayAdminMenu( 2, _AM_TINYCFG_CONFIG . ' | TinyConfig' );

	warnings();

	$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.css" />');

	$sform = new icms_form_Theme( 'TinyMCE Configuration', 'storyform', '' );
	$sform -> setExtra( 'enctype="multipart/form-data"' );

	$verify_array = array( 'false' => _AM_TINYCFG_FALSE, 'true' => _AM_TINYCFG_TRUE );
	$verify_select = new icms_form_elements_Select( _AM_TINYCFG_VERIFYHTML . tinycfg_tooltip( _AM_TINYCFG_VERIFYHTMLDSC, 'help' ), 'verifyhtml', $verifyhtml );
	$verify_select -> addOptionArray( $verify_array );
	$sform -> addElement( $verify_select );

	$converturls_array = array( 'false' => _AM_TINYCFG_FALSE, 'true' => _AM_TINYCFG_TRUE );
	$converturls_select = new icms_form_elements_Select( _AM_TINYCFG_CONVERTURLS . tinycfg_tooltip( _AM_TINYCFG_CONVERTURLSDSC, 'help' ), 'converturls', $converturls );
	$converturls_select -> addOptionArray( $converturls_array );
	$sform -> addElement( $converturls_select );

	$relativeurls_array = array( 'false' => _AM_TINYCFG_FALSE, 'true' => _AM_TINYCFG_TRUE );
	$relativeurls_select = new icms_form_elements_Select( _AM_TINYCFG_RELATIVEURLS . tinycfg_tooltip( _AM_TINYCFG_RELATIVEURLSDSC, 'help' ), 'relativeurls', $relativeurls );
	$relativeurls_select -> addOptionArray( $relativeurls_array );
	$sform -> addElement( $relativeurls_select );

	$brinpre_array = array( 'false' => _AM_TINYCFG_FALSE, 'true' => _AM_TINYCFG_TRUE );
	$brinpre_select = new icms_form_elements_Select( _AM_TINYCFG_BRINPRE . tinycfg_tooltip( _AM_TINYCFG_BRINPREDSC, 'help' ), 'brinpre', $brinpre );
	$brinpre_select -> addOptionArray( $brinpre_array );
	$sform -> addElement( $brinpre_select );

	$fixlist_array = array( 'false' => _AM_TINYCFG_FALSE, 'true' => _AM_TINYCFG_TRUE );
	$fixlist_select = new icms_form_elements_Select( _AM_TINYCFG_FIXLIST . tinycfg_tooltip( _AM_TINYCFG_FIXLISTDSC, 'help' ), 'fixlist', $fixlist );
	$fixlist_select -> addOptionArray( $fixlist_array );
	$sform -> addElement( $fixlist_select );

	$forcedrootblck_array = array( '' => _AM_TINYCFG_BRTAG, 'p' => _AM_TINYCFG_PTAG );
	$forcedrootblck_select = new icms_form_elements_Select( _AM_TINYCFG_FORCEDRTBLCK . tinycfg_tooltip( _AM_TINYCFG_FORCEDRTBLCKDSC, 'help' ), 'forcedrootblock', $forcedrootblock );
	$forcedrootblck_select -> addOptionArray( $forcedrootblck_array );
	$sform -> addElement( $forcedrootblck_select );

	$schema_array = array( 'html4' => 'HTML4', 'html5' => 'HTML5' );
	$schema_select = new icms_form_elements_Select( _AM_TINYCFG_SCHEMA . tinycfg_tooltip( _AM_TINYCFG_SCHEMADSC, 'help' ), 'sschema', $sschema );
	$schema_select -> addOptionArray( $schema_array );
	$sform -> addElement( $schema_select );

	$sform -> addElement( new icms_form_elements_Text( _AM_TINYCFG_CONTENTCSS . tinycfg_tooltip( _AM_TINYCFG_CONTENTCSSDSC, 'help' ), 'contentcss', 70, 128, $contentcss ) );

	$button_tray = new icms_form_elements_Tray( '', '' );
	$hidden = new icms_form_elements_Hidden( 'op', 'save' );
	$button_tray -> addElement( $hidden );

	$butt_create = new icms_form_elements_Button( '', '', _SUBMIT, 'submit' );
	$butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'save_config\'"' );
	$button_tray -> addElement( $butt_create );
	$sform -> addElement( $button_tray );
	$sform -> display();
	unset( $hidden ); 

	icms_cp_footer();
}

switch ( strtolower( $op ) ) {
	case 'edit':
	default:
		config_edit();
		break;

	case 'save_config':

		$verifyhtml		= addslashes( trim( $_POST['verifyhtml'] ) );
		$converturls	= addslashes( trim( $_POST['converturls'] ) );
		$relativeurls	= addslashes( trim( $_POST['relativeurls'] ) );
		$brinpre		= addslashes( trim( $_POST['brinpre'] ) );
		$forcedrootblock= addslashes( trim( $_POST['forcedrootblock'] ) );
		$fixlist		= addslashes( trim( $_POST['fixlist'] ) );
		$sschema		= addslashes( trim( $_POST['sschema'] ) );
		$contentcss		= addslashes( trim( $_POST['contentcss'] ) );

		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'tinycfg_configs' ) . " SET verifyhtml='$verifyhtml', converturls='$converturls', relativeurls='$relativeurls', brinpre='$brinpre', forcedrootblock='$forcedrootblock', fixlist='$fixlist', sschema='$sschema', contentcss='$contentcss'";
		$result = icms::$xoopsDB -> queryF( $sql );
		$error = 'DBERROR' . ': <br /><br />' . $sql;
		if ( !$result ) {
			trigger_error( $error, E_USER_ERROR );
		}
		redirect_header( 'index.php', 2, _AM_TINYCFG_CONFIGSAVE );
		break;
}
?>