<?php
/**
 * TinyMCE adapter for XOOPS
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		4.00
 * @version		$Id: formtinymce.php 11122 2011-03-26 23:48:15Z skenow $
 * @package		xoopseditor
 */
if (!defined('ICMS_ROOT_PATH')) die("ImpressCMS root path not defined");

class XoopsFormTinymce extends icms_form_elements_Textarea {
	var $rootpath = "";
	var $_language = _LANGCODE;
	var $_width = "100%";
	var $_height = "500px";

	var $tinymce;
	var $config = array ( );

	/**
	 * Constructor
	 *
	 * @param	array   $configs  Editor Options
	 * @param	bool 	  $checkCompatible  true - return false on failure
	 */
	function XoopsFormTinymce($configs, $checkCompatible = false) {
		$current_path = __FILE__;
		if (DIRECTORY_SEPARATOR != "/")
			$current_path = str_replace ( strpos ( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path );
		$this->rootpath = substr(strstr(dirname($current_path), ICMS_ROOT_PATH), strlen(ICMS_ROOT_PATH));

		if (is_array ( $configs )) {
			$vars = array_keys ( get_object_vars ( $this ) );
			foreach ( $configs as $key => $val) {
				if (in_array ( "_" . $key, $vars )) {
					$this->{"_" . $key} = $val;
				} else {
					$this->config [$key] = $val;
				}
			}
		}

		if ($checkCompatible && ! $this->isCompatible ()) {
			return false;
		}

		parent::__construct( @$this->_caption, @$this->_name, @$this->_value );
		parent::setExtra ( "style='width: " . $this->_width . "; height: " . $this->_height . ";'" );

		$this->initTinymce ();
	}

  /**
  * Initializes tinyMCE
  **/
	function initTinymce() {

		if ( is_object( icms::$user ) ) {
			$uid = icms::$user -> getVar( 'uid' );
			$getthegroupid = icms::$user -> getGroups( $uid );
			$thegroupid = array_slice( $getthegroupid, 0, 1 );
			$thegroupid = implode( ' ', $thegroupid );
			$thegroupid = trim( $thegroupid );
		} else {
			$thegroupid = 3;
		}

		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'tinycfg_toolsets' ) . ' WHERE tinycfg_gid=' . $thegroupid;
		$tinycfg_tools = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

		$this->config ["elements"] = $this->getName() . '_tarea';
		$this->config ["language"] = $this->getLanguage ();
		$this->config ["rootpath"] = $this->rootpath;
		$this->config ["area_width"] = $this->_width;
		$this->config ["area_height"] = $this->_height;
		$this->config ["fonts"] = $tinycfg_tools['fontfamily'];
		$this->config ["font_sizes"] = $tinycfg_tools['fontsize'];
		$this->config ["statusbar_location"] = $tinycfg_tools['statusbar'];
		if ( $tinycfg_tools['resize'] == 'true' ) {
			$this->config ["resizing"] = "true";
		}

		require_once dirname ( __FILE__ ) . "/tinymce.php";
		$this->tinymce = TinyMCE::instance( $this->config );
	}

	/**
	 * get language
	 *
	 * @return	string
	 */
	function getLanguage() {
		$language = str_replace ( '-', '_', strtolower ( $this->_language ) );
		if (strtolower ( _CHARSET ) != "utf-8") {
			$language .= "_ansi";
		}
		return $language;
	}

  /**
  * Gets the fonts for tinymce
  **/
	function getFonts() {
		if (empty ( $this->config ["fonts"] ) && defined ( "_XOOPS_EDITOR_TINYMCE_FONTS" )) {
			$this->config ["fonts"] = constant ( "_XOOPS_EDITOR_TINYMCE_FONTS" );
		}

		return @$this->config ["fonts"];
	}

	/**
	 * prepare HTML for output
	 * @return	string    $ret    HTML
	 */
	function render() {
		$ret = $this->tinymce->render ();
		$ret .= parent::render ();

		$ret .= '<a href="#" id="switchtinymce" title="'._TOGGLETINY.'" onclick="showMCE(\''.$this->_name.'_tarea\'); return false;" style="float:'._GLOBAL_RIGHT.'; display:box; background:#F0F0EE; padding:3px; margin-right:2px; border: 1px solid #ccc; border-top: none;">'._TOGGLETINY.'</a>';
		$ret .= '<br clear="'._GLOBAL_RIGHT.'" />';

		return $ret;
	}

	/**
	 * Check if compatible
	 *
	 * @return  bool
	 */
	function isCompatible() {
		return is_readable( ICMS_ROOT_PATH . $this->rootpath . "/tinymce.php" );
	}
}
?>