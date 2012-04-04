<?php
/**
* TinyConfig
*
* File: /admin/toolsets.php
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

if ( isset( $_GET['tinycfg_gid'] ) ) { $tinycfg_gid = $_GET['tinycfg_gid']; } else { $tinycfg_gid = 0; }
if ( isset( $_POST['tinycfg_gid'] ) ) { $tinycfg_gid = $_POST['tinycfg_gid']; } else { $tinycfg_gid = 0; }

function toolsets_edit( $tinycfg_gid = 0 ) {
	global $icmsConfig, $icmsAdminTpl;

	if ( !empty( $_POST['grouplist'] ) ) {

	echo '<br />';

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'tinycfg_toolsets' )." WHERE tinycfg_gid = ".intval($_POST['grouplist']);
	$tinycfg_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

	if ( !$tinycfg_array['tinycfg_gid'] ) {
		$tinycfg_gid = '';
	} 

	$fontfamily_default = 'Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
	$fontsize_default = '1 (8pt)=8pt,2 (10pt)=10pt,3 (12pt)=12pt,4 (14pt)=14pt,5 (18pt)=18pt,6 (24pt)=24pt,7 (36pt)=36pt';

	$tinycfg_id		= $tinycfg_array['tinycfg_id'] ? $tinycfg_array['tinycfg_id'] : 0;
	$plugins		= $tinycfg_array['plugins'] ? htmlspecialchars( $tinycfg_array['plugins'] ) : 'icmsmlcontent,xoopsimagemanager,xoopsquotecode,xoopsemotions,table,advimage,advlink,emotions,insertdatetime,preview,media,contextmenu,paste,fullscreen,visualchars,nonbreaking';
	$buttons1		= $tinycfg_array['buttons1'] ? htmlspecialchars( $tinycfg_array['buttons1'] ) : 'bold,italic,underline,strikethrough,sub,sup,separator,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect';
	$buttons2		= $tinycfg_array['buttons2'] ? htmlspecialchars( $tinycfg_array['buttons2'] ) : 'xoopsquote,xoopscode,icmsmlcontent,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,removeformat,separator,link,unlink,anchor,xoopsimagemanager,media,separator,charmap,nonbreaking,hr,xoopsemotions,separator,pastetext,pasteword,separator,forecolor,backcolor';
	$buttons3		= $tinycfg_array['buttons3'] ? htmlspecialchars( $tinycfg_array['buttons3'] ) : 'tablecontrols,separator,cleanup,visualaid,visualchars,separator,insertdate,inserttime,separator,preview,fullscreen,help,code';
	$buttons4		= $tinycfg_array['buttons4'] ? htmlspecialchars( $tinycfg_array['buttons4'] ) : '';
	$toolbarloc		= $tinycfg_array['toolbarloc'] ? htmlspecialchars( $tinycfg_array['toolbarloc'] ) : 'top';
	$statusbar		= $tinycfg_array['statusbar'] ? htmlspecialchars( $tinycfg_array['statusbar'] ) : 'bottom';
	$resize			= $tinycfg_array['resize'] ? htmlspecialchars( $tinycfg_array['resize'] ) : 'true';
	$fontfamily		= $tinycfg_array['fontfamily'] ? htmlspecialchars( $tinycfg_array['fontfamily'] ) : $fontfamily_default;
	$fontsize		= $tinycfg_array['fontsize'] ? htmlspecialchars( $tinycfg_array['fontsize'] ) : $fontsize_default;
	$skin			= $tinycfg_array['skin'] ? htmlspecialchars( $tinycfg_array['skin'] ) : 'default';
	$skinvariant	= $tinycfg_array['skinvariant'] ? htmlspecialchars( $tinycfg_array['skinvariant'] ) : 'silver';

	if ( !$tinycfg_array['tinycfg_gid'] ) {
		echo '<div style="border: 1px solid #D9D9D9; border-radius: 4px; margin-bottom: 10px; padding: 5px; background: #FFCCCC;">' . _AM_TINYCFG_TOOLSETS_NOTSET . '</div>';
	}

	$pluginslist = '';
	$dirname = ICMS_ROOT_PATH.'/editors/tinymce/jscripts/plugins/';
	$dir = opendir( $dirname );
		while ( $filename = readdir( $dir ) ) {
			if ( $filename != '.' && $filename != '..' && $filename != 'example' && $filename != 'CVS' && $filename != 'index.html' ) {
				$pluginslist .= $filename . ', ';
			}
		}
	closedir($dir);
	echo '<div style="border: 1px solid #D9D9D9; border-radius: 4px; margin-bottom: 10px; padding: 5px; font-size: .9em;"><b>' . _AM_TINYCFG_PLUGINSAVAIL . '</b> ' . $pluginslist . '</div>';

	$icmsAdminTpl -> assign( 'xoops_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_LIBRARIES_URL . '/lytebox/lytebox.css" />');

	$sform = new icms_form_Theme( _AM_TINYCFG_TOOLSETSMCE, 'storyform', 'toolsets.php' );
	$sform -> setExtra( 'enctype="multipart/form-data"' );

	$pluginz = new icms_form_elements_Textarea( _AM_TINYCFG_PLUGINS, 'plugins', $plugins, 4, 60);
	$sform -> addElement( $pluginz, false );

	$buttonsa = new icms_form_elements_Textarea( _AM_TINYCFG_BUTTONB1, 'buttons1', $buttons1, 4, 60);
	$sform -> addElement( $buttonsa, false );

	$buttonsb = new icms_form_elements_Textarea( _AM_TINYCFG_BUTTONB2, 'buttons2', $buttons2, 4, 60);
	$sform -> addElement( $buttonsb, false );

	$buttonsc = new icms_form_elements_Textarea( _AM_TINYCFG_BUTTONB3, 'buttons3', $buttons3, 4, 60);
	$sform -> addElement( $buttonsc, false );

	$buttonsd = new icms_form_elements_Textarea( _AM_TINYCFG_BUTTONB4, 'buttons4', $buttons4, 4, 60);
	$sform -> addElement( $buttonsd, false );

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

	$sform -> addElement( new icms_form_elements_Hidden( 'tinycfg_gid', intval($_POST['grouplist'] ) ) );
	$sform -> addElement( new icms_form_elements_Hidden( 'tinycfg_id', $tinycfg_id ) );

	$button_tray = new icms_form_elements_Tray( '', '' );
	$hidden = new icms_form_elements_Hidden( 'op', 'save' );
	$button_tray -> addElement( $hidden );

	$butt_create = new icms_form_elements_Button( '', '', _SUBMIT, 'submit' );
	$butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'save_toolsets\'"' );
	$button_tray -> addElement( $butt_create );
	$sform -> addElement( $button_tray );
	$sform -> display();
	unset( $hidden ); 

	}

icms_cp_footer();
}

switch ( strtolower( $op ) ) {
	case 'edit':
	default:
		icms_cp_header();
		icms::$module -> displayAdminMenu( 3, _AM_TINYCFG_TOOLSETS . ' | TinyConfig' );

		warnings();

		$groupform = new icms_form_Theme( _AM_TINYCFG_GROUPS, 'grouplist', 'toolsets.php' );
		$group_tray = new icms_form_elements_Tray( _AM_TINYCFG_GROUPSELECT, '' );
		$group_tray -> addElement( new icms_form_elements_select_Group( '', 'grouplist', true, '', 1, false ) );
		$group_tray -> addElement( new icms_form_elements_Button( '', 'grouplistsubmit', _GO, 'submit' ) );
		$groupform -> addElement( $group_tray );
		$groupform -> display();

		toolsets_edit( $tinycfg_gid );
		break;

	case 'save_toolsets':
		$tinycfg_id		= ( !empty( $_POST['tinycfg_id'] ) ) ? $_POST['tinycfg_id'] : 0;
		$plugins		= icms_core_DataFilter::addSlashes( trim( $_POST['plugins'] ) );
		$buttons1		= icms_core_DataFilter::addSlashes( trim( $_POST['buttons1'] ) );
		$buttons2		= icms_core_DataFilter::addSlashes( trim( $_POST['buttons2'] ) );
		$buttons3		= icms_core_DataFilter::addSlashes( trim( $_POST['buttons3'] ) );
		$buttons4		= icms_core_DataFilter::addSlashes( trim( $_POST['buttons4'] ) );
		$fontfamily		= icms_core_DataFilter::addSlashes( trim( $_POST['fontfamily'] ) );
		$fontsize		= icms_core_DataFilter::addSlashes( trim( $_POST['fontsize'] ) );
		$toolbarloc		= addSlashes( trim( $_POST['toolbarloc'] ) );
		$statusbar		= addslashes( trim( $_POST['statusbar'] ) );
		$resize			= addslashes( trim( $_POST['resize'] ) );
		$skin			= addslashes( trim( $_POST['skin'] ) );
		$skinvariant	= addslashes( trim( $_POST['skinvariant'] ) );
		$tinycfg_gid	= $_POST['tinycfg_gid'];

		if ( !$tinycfg_id ) {
			$sql = "INSERT INTO " . icms::$xoopsDB -> prefix( 'tinycfg_toolsets' ) . "(tinycfg_id, tinycfg_gid, plugins, buttons1, buttons2, buttons3, buttons4, toolbarloc, statusbar, resize, fontfamily, fontsize)";
			$sql .= " VALUES ('', '$tinycfg_gid', '$plugins', '$buttons1', '$buttons2', '$buttons3', '$buttons4', '$toolbarloc', '$statusbar', '$resize', '$fontfamily', '$fontsize', '$skin', '$skinvariant')";
		} else {
			$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'tinycfg_toolsets' ) . " SET plugins='$plugins', buttons1='$buttons1', buttons2='$buttons2', buttons3='$buttons3', buttons4='$buttons4', toolbarloc='$toolbarloc', statusbar='$statusbar', resize='$resize', fontfamily='$fontfamily', fontsize='$fontsize', skin='$skin', skinvariant='$skinvariant' WHERE tinycfg_gid = " . $tinycfg_gid;
		}
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		redirect_header( 'toolsets.php', 2, _AM_TINYCFG_TOOLSAVE );
		break;
}
?>