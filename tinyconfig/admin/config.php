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

$op = '';

if ( isset( $_GET['op'] ) ) $op = $_GET['op'];
if ( isset( $_POST['op'] ) ) $op = $_POST['op'];

function config_edit() {
	global $icmsConfig, $icmsAdminTpl;

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'tinycfg_configs' );
	$tinycfg_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

	$skin			= $tinycfg_array['skin'] ? htmlspecialchars( $tinycfg_array['skin'] ) : 'default';
	$skinvariant	= $tinycfg_array['skinvariant'] ? htmlspecialchars( $tinycfg_array['skinvariant'] ) : 'silver';
	$verifyhtml		= $tinycfg_array['verifyhtml'] ? htmlspecialchars( $tinycfg_array['verifyhtml'] ) : 'false';
	$converturls	= $tinycfg_array['converturls'] ? htmlspecialchars( $tinycfg_array['converturls'] ) : 'false';
	$relativeurls	= $tinycfg_array['relativeurls'] ? htmlspecialchars( $tinycfg_array['relativeurls'] ) : 'false';
	$forcebr		= $tinycfg_array['forcebr'] ? htmlspecialchars( $tinycfg_array['forcebr'] ) : 'false';
	$forcep			= $tinycfg_array['forcep'] ? htmlspecialchars( $tinycfg_array['forcep'] ) : 'true';
	$forcedrootblock= $tinycfg_array['forcedrootblock'] ? htmlspecialchars( $tinycfg_array['forcedrootblock'] ) : 'p';
	$sschema			= $tinycfg_array['sschema'] ? htmlspecialchars( $tinycfg_array['sschema'] ) : 'html4';

	icms_cp_header();
	icms::$module -> displayAdminMenu( 2, _AM_TINYCFG_CONFIG . ' | TinyConfig' );

	warnings();

	$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.css" />');

	$sform = new icms_form_Theme( 'TinyMCE Configuration', 'storyform', '' );
	$sform -> setExtra( 'enctype="multipart/form-data"' );

	$sform -> insertBreak( '&#9658; <b><i>' . _AM_TINYCFG_GENERAL . '</i></b>', 'odd' );

	$skin_array = array( 'default' => _AM_TINYCFG_SKIN_DEFAULT, 'highcontrast' => _AM_TINYCFG_SKIN_CONTRAST, 'o2k7' => _AM_TINYCFG_SKIN_O2K7 );
	$skin_select = new icms_form_elements_Select( _AM_TINYCFG_SKIN, 'skin', $skin );
	$skin_select -> addOptionArray( $skin_array );
	$sform -> addElement( $skin_select );

	$skinvar_array = array( 'none' => _NONE, 'black' => _AM_TINYCFG_SKINVAR_BLACK, 'silver' => _AM_TINYCFG_SKINVAR_SILVER );
	$skinvar_select = new icms_form_elements_Select( _AM_TINYCFG_SKINVAR . tinycfg_tooltip( _AM_TINYCFG_SKINVARDSC, 'help' ), 'skinvariant', $skinvariant );
	$skinvar_select -> addOptionArray( $skinvar_array );
	$sform -> addElement( $skinvar_select );

	$sform -> insertBreak( '&#9658; <b><i>' . _AM_TINYCFG_CONFIGOUTPUT . '</i></b>', 'odd' );

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

	$forcebr_array = array( 'false' => _AM_TINYCFG_FALSE, 'true' => _AM_TINYCFG_TRUE );
	$forcebr_select = new icms_form_elements_Select( _AM_TINYCFG_FORCEBR . tinycfg_tooltip( _AM_TINYCFG_FORCEBRDSC, 'help' ), 'forcebr', $forcebr );
	$forcebr_select -> addOptionArray( $forcebr_array );
	$sform -> addElement( $forcebr_select );

	$forcep_array = array( 'false' => _AM_TINYCFG_FALSE, 'true' => _AM_TINYCFG_TRUE );
	$forcep_select = new icms_form_elements_Select( _AM_TINYCFG_FORCEP . tinycfg_tooltip( _AM_TINYCFG_FORCEPDSC, 'help' ), 'forcep', $forcep );
	$forcep_select -> addOptionArray( $forcep_array );
	$sform -> addElement( $forcep_select );

	$forcedrootblck = new icms_form_elements_Text( _AM_TINYCFG_FORCEDRTBLCK . tinycfg_tooltip( _AM_TINYCFG_FORCEDRTBLCKDSC, 'help' ), 'forcedrootblock', 5, 1, $forcedrootblock );
	$sform -> addElement( $forcedrootblck );

	$schema_array = array( 'html4' => 'HTML4', 'html5' => 'HTML5' );
	$schema_select = new icms_form_elements_Select( _AM_TINYCFG_SCHEMA . tinycfg_tooltip( _AM_TINYCFG_SCHEMADSC, 'help' ), 'sschema', $sschema );
	$schema_select -> addOptionArray( $schema_array );
	$sform -> addElement( $schema_select );

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

		$skin			= addslashes( trim( $_POST['skin'] ) );
		$skinvariant	= addslashes( trim( $_POST['skinvariant'] ) );
		$verifyhtml		= addslashes( trim( $_POST['verifyhtml'] ) );
		$converturls	= addslashes( trim( $_POST['converturls'] ) );
		$relativeurls	= addslashes( trim( $_POST['relativeurls'] ) );
		$forcebr		= addslashes( trim( $_POST['forcebr'] ) );
		$forcep			= addslashes( trim( $_POST['forcep'] ) );
		$forcedrootblock= addslashes( trim( $_POST['forcedrootblock'] ) );
		$sschema			= addslashes( trim( $_POST['sschema'] ) );

		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'tinycfg_configs' ) . " SET verifyhtml='$verifyhtml', converturls='$converturls', relativeurls='$relativeurls', forcebr='$forcebr', forcep='$forcep', forcedrootblock='$forcedrootblock', skin='$skin', skinvariant='$skinvariant', sschema='$sschema'";
		$result = icms::$xoopsDB -> queryF( $sql );
		$error = 'DBERROR' . ': <br /><br />' . $sql;
		if ( !$result ) {
			trigger_error( $error, E_USER_ERROR );
		}
		redirect_header( 'index.php', 2, _AM_TINYCFG_TOOLSAVE );
		break;
}
?>