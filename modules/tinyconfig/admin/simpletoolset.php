<?php
/**
* TinyConfig
*
* File: /admin/simpletoolset.php
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

function simpletoolset_edit() {
	global $icmsConfig, $icmsAdminTpl;

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'tinycfg_simpletoolset' );
	$tinycfg_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

	$plugins_default = 'icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,advimage,advlink,emotions,preview,media,contextmenu,paste,fullscreen,visualchars';
	$buttons1_default = 'bold,italic,underline,strikethrough,separator,fontselect,fontsizeselect,forecolor,backcolor,separator,preview,fullscreen';
	$buttons2_default = 'xoopsquote,xoopscode,icmsmlcontent,separator,undo,redo,separator,link,unlink,xoopsimagemanager,media,separator,xoopsemotions,separator,pastetext';
	$fontfamily_default = 'Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Courier New=courier new,courier;Helvetica=helvetica;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
	$fontsize_default = '1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt';

	$plugins		= $tinycfg_array['plugins'] ? htmlspecialchars( $tinycfg_array['plugins'] ) : $plugins_default;
	$buttons1		= $tinycfg_array['buttons1'] ? htmlspecialchars( $tinycfg_array['buttons1'] ) : $buttons1_default;
	$buttons2		= $tinycfg_array['buttons2'] ? htmlspecialchars( $tinycfg_array['buttons2'] ) : $buttons2_default;
	$toolbarloc		= $tinycfg_array['toolbarloc'] ? htmlspecialchars( $tinycfg_array['toolbarloc'] ) : 'top';
	$statusbar		= $tinycfg_array['statusbar'] ? htmlspecialchars( $tinycfg_array['statusbar'] ) : 'bottom';
	$resize			= $tinycfg_array['resize'] ? htmlspecialchars( $tinycfg_array['resize'] ) : 'true';
	$fontfamily		= $tinycfg_array['fontfamily'] ? htmlspecialchars( $tinycfg_array['fontfamily'] ) : $fontfamily_default;
	$fontsize		= $tinycfg_array['fontsize'] ? htmlspecialchars( $tinycfg_array['fontsize'] ) : $fontsize_default;
	$skin			= $tinycfg_array['skin'] ? htmlspecialchars( $tinycfg_array['skin'] ) : 'default';
	$skinvariant	= $tinycfg_array['skinvariant'] ? htmlspecialchars( $tinycfg_array['skinvariant'] ) : 'silver';

	echo '<div style="border: 1px solid #D9D9D9; border-radius: 4px; margin-bottom: 10px; padding: 5px; font-size: .9em; background-color: #FFFF99;">' . _AM_TINYCFG_SIMPLETOOLSETSMCEDSC . '</div>';

	$pluginslist = '';
	$dirname = ICMS_ROOT_PATH.'/editors/tinymce/jscripts/tiny_mce/plugins/';
	$dir = opendir( $dirname );
		while ( $filename = readdir( $dir ) ) {
			if ( $filename != '.' && $filename != '..' && $filename != 'example' && $filename != 'CVS' && $filename != 'index.html' ) {
				$pluginslist .= $filename . ', ';
			}
		}
	closedir($dir);
	echo '<div style="border: 1px solid #D9D9D9; border-radius: 4px; margin-bottom: 10px; padding: 5px; font-size: .9em;"><b>' . _AM_TINYCFG_PLUGINSAVAIL . '</b> ' . $pluginslist . '</div>';

	$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.css" />');

	$sform = new icms_form_Theme( _AM_TINYCFG_SIMPLETOOLSETSMCE, 'storyform', 'simpletoolset.php' );
	$sform -> setExtra( 'enctype="multipart/form-data"' );

	$pluginz = new icms_form_elements_Textarea( _AM_TINYCFG_PLUGINS, 'plugins', $plugins, 4, 60);
	$sform -> addElement( $pluginz, false );

	$buttonsa = new icms_form_elements_Textarea( _AM_TINYCFG_BUTTONB1, 'buttons1', $buttons1, 4, 60);
	$sform -> addElement( $buttonsa, false );

	$buttonsb = new icms_form_elements_Textarea( _AM_TINYCFG_BUTTONB2, 'buttons2', $buttons2, 4, 60);
	$sform -> addElement( $buttonsb, false );

	$fonts = new icms_form_elements_Textarea( _AM_TINYCFG_FONTFAMILY . tinycfg_tooltip( _AM_TINYCFG_FONTFAMILYDSC, 'help' ), 'fontfamily', $fontfamily, 4, 60);
	$sform -> addElement( $fonts, false );

	$fontssize = new icms_form_elements_Textarea( _AM_TINYCFG_FONTSIZE . tinycfg_tooltip( _AM_TINYCFG_FONTSIZEDSC, 'help' ), 'fontsize', $fontsize, 4, 60);
	$sform -> addElement( $fontssize, false );

	$toolbarloc_array = array( 'bottom'=>_AM_TINYCFG_BOTTOM, 'top'=>_AM_TINYCFG_TOP );
	$toolbarloc_select = new icms_form_elements_Select( _AM_TINYCFG_TOOLBARLOC . tinycfg_tooltip( _AM_TINYCFG_TOOLBARLOCDSC, 'help' ), 'toolbarloc', $toolbarloc );
	$toolbarloc_select -> addOptionArray( $toolbarloc_array );
	$sform -> addElement( $toolbarloc_select );

	$status_array = array( 'none'=>_AM_TINYCFG_NONE, 'bottom'=>_AM_TINYCFG_BOTTOM, 'top'=>_AM_TINYCFG_TOP );
	$status_select = new icms_form_elements_Select( _AM_TINYCFG_STATUSB . tinycfg_tooltip( _AM_TINYCFG_STATUSBDSC, 'help' ), 'statusbar', $statusbar );
	$status_select -> addOptionArray( $status_array );
	$sform -> addElement( $status_select );

	$resize_array = array( 'true'=>_AM_TINYCFG_TRUE, 'false'=>_AM_TINYCFG_FALSE );
	$resize_select = new icms_form_elements_Select( _AM_TINYCFG_RESIZE . tinycfg_tooltip( _AM_TINYCFG_RESIZEDSC, 'help' ), 'resize', $resize );
	$resize_select -> addOptionArray( $resize_array );
	$sform -> addElement( $resize_select );

	$skin_array = array( 'default' => _AM_TINYCFG_SKIN_DEFAULT, 'highcontrast' => _AM_TINYCFG_SKIN_CONTRAST, 'o2k7' => _AM_TINYCFG_SKIN_O2K7 );
	$skin_select = new icms_form_elements_Select( _AM_TINYCFG_SKIN, 'skin', $skin );
	$skin_select -> addOptionArray( $skin_array );
	$sform -> addElement( $skin_select );

	$skinvar_array = array( 'none' => _NONE, 'black' => _AM_TINYCFG_SKINVAR_BLACK, 'silver' => _AM_TINYCFG_SKINVAR_SILVER );
	$skinvar_select = new icms_form_elements_Select( _AM_TINYCFG_SKINVAR . tinycfg_tooltip( _AM_TINYCFG_SKINVARDSC, 'help' ), 'skinvariant', $skinvariant );
	$skinvar_select -> addOptionArray( $skinvar_array );
	$sform -> addElement( $skinvar_select );

	$button_tray = new icms_form_elements_Tray( '', '' );
	$hidden = new icms_form_elements_Hidden( 'op', 'save' );
	$button_tray -> addElement( $hidden );

	$butt_create = new icms_form_elements_Button( '', '', _SUBMIT, 'submit' );
	$butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'save_simpletoolset\'"' );
	$button_tray -> addElement( $butt_create );
	$sform -> addElement( $button_tray );
	$sform -> display();
	unset( $hidden ); 

icms_cp_footer();
}

switch ( strtolower( $op ) ) {
	case 'edit':
	default:
		icms_cp_header();
		icms::$module -> displayAdminMenu( 4, _AM_TINYCFG_TOOLSETS . ' | TinyConfig' );

		warnings();

		simpletoolset_edit();
		break;

	case 'save_simpletoolset':
		$plugins		= icms_core_DataFilter::addSlashes( trim( $_POST['plugins'] ) );
		$buttons1		= icms_core_DataFilter::addSlashes( trim( $_POST['buttons1'] ) );
		$buttons2		= icms_core_DataFilter::addSlashes( trim( $_POST['buttons2'] ) );
		$fontfamily		= icms_core_DataFilter::addSlashes( trim( $_POST['fontfamily'] ) );
		$fontsize		= icms_core_DataFilter::addSlashes( trim( $_POST['fontsize'] ) );
		$toolbarloc		= addSlashes( trim( $_POST['toolbarloc'] ) );
		$statusbar		= addslashes( trim( $_POST['statusbar'] ) );
		$resize			= addslashes( trim( $_POST['resize'] ) );
		$skin			= addslashes( trim( $_POST['skin'] ) );
		$skinvariant	= addslashes( trim( $_POST['skinvariant'] ) );

		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'tinycfg_simpletoolset' ) . " SET plugins='$plugins', buttons1='$buttons1', buttons2='$buttons2', toolbarloc='$toolbarloc', statusbar='$statusbar', resize='$resize', fontfamily='$fontfamily', fontsize='$fontsize', skin='$skin', skinvariant='$skinvariant'";
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		redirect_header( 'index.php', 2, _AM_TINYCFG_SIMPLETOOLSAVE );
		break;
}
?>