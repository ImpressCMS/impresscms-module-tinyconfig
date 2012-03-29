<?php
/**
* TinyConfig
*
* File: /language/nederlands/admin.php
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

define( '_AM_TINYCFG_WARNINSTALL', 'WAARSCHUWING: De map %s bestaat niet op uw server.<br />Deze map is nodig voor TinyConfig.' );

define( '_AM_TINYCFG_INDEX', '<b>Configuratie:</b> Algemene configuratie van TinyMCE. Deze configuratie is voor alle Gebruikers Groepen.<br /><b>Knoppenbalken:</b> Configuratie van de knoppenbalken per Gebruikers Groepen.' );
define( '_AM_TINYCFG_GENERAL', 'Algemeen' );
define( '_AM_TINYCFG_CONFIGOUTPUT', 'Cleanup/Output' );

define( '_AM_TINYCFG_TOOLSETS', 'Taakbalken' );
define( '_AM_TINYCFG_TOOLSETSMCE', 'TinyMCE Taakbalk' );
define( '_AM_TINYCFG_TOOLSETS_NOTSET', '<b>Deze groep heeft nog geen taakbalken!</b><br />De waarden die u ziet zijn standaard waarden. Bewerk en sla dit formulier op om een knoppenbalk voor deze groep aan te maken.' );
define( '_AM_TINYCFG_TOOLSAVE', 'Taakbalken voor de TinyMCE editor zijn opgeslagen.' );
define( '_AM_TINYCFG_PLUGINSAVAIL', 'Beschikbare plugins:' );

define( '_AM_TINYCFG_GROUPS', 'Groepen' );
define( '_AM_TINYCFG_GROUPSELECT', 'Selekteer een groep' );

define( '_AM_TINYCFG_PLUGINS', 'Plugins' );
define( '_AM_TINYCFG_BUTTONB1', 'Taakbalk 1' );
define( '_AM_TINYCFG_BUTTONB2', 'Taakbalk 2' );
define( '_AM_TINYCFG_BUTTONB3', 'Taakbalk 3' );
define( '_AM_TINYCFG_BUTTONB4', 'Taakbalk 4' );
define( '_AM_TINYCFG_TOOLBARLOC', 'Taakbalk lokatie' );
define( '_AM_TINYCFG_STATUSB', 'Elementen pad lokatie' );
define( '_AM_TINYCFG_RESIZE', 'Vergroten en verkleinen' );
define( '_AM_TINYCFG_BOTTOM', 'onder' );
define( '_AM_TINYCFG_TOP', 'boven' );
define( '_AM_TINYCFG_NONE', 'geen' );
define( '_AM_TINYCFG_TRUE', 'ja' );
define( '_AM_TINYCFG_FALSE', 'nee' );

define( '_AM_TINYCFG_CONFIG', 'Configuratie' );
define( '_AM_TINYCFG_CONFIGSAVE', 'De configuratie voor de TinyMCE editor is opgeslagen.' );

define( '_AM_TINYCFG_VERIFYHTML', 'Controlleer HTML' );
define( '_AM_TINYCFG_VERIFYHTMLDSC', 'This option enables or disables the element cleanup functionality. If you set this option to false, all element cleanup will be skipped but other cleanup functionality such as URL conversion will still be executed.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_CONVERTURLS', 'Converteer URLs' );
define( '_AM_TINYCFG_CONVERTURLSDSC', 'This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_RELATIVEURLS', 'Relatieve URLs' );
define( '_AM_TINYCFG_RELATIVEURLSDSC', 'If this option is set to true, all URLs returned from the Image Manager will be relative from ' . ICMS_URL . '. If it\'s set to false all URLs will be converted to absolute URLs.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_FORCEBR', 'Forceer BR elementen' );
define( '_AM_TINYCFG_FORCEBRDSC', 'Deze optie forceert de uitvoer van BR elementen in plaats van P elementen.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_FORCEP', 'Forceer P elementen' );
define( '_AM_TINYCFG_FORCEPDSC', 'Als de gekozen optie <i>Ja</i> is, dan zullen P elementen gegenereert worden bij aanslag van de Enter toets en BR elementen bij Shift+Enter toets.<br />Standaard: <i>ja</i>' );

define( '_AM_TINYCFG_FORCEDRTBLCK', 'Forceer root blok' );
define( '_AM_TINYCFG_FORCEDRTBLCKDSC', 'Met deze optie kuntt u ervoor zorgen dat alle niet blok elementen of tekstnodes zijn verpakt in blok-elementen.<br />Standaard: <i>p</i>' );

define( '_AM_TINYCFG_SKIN', 'Selekteer uiterlijk' );
define( '_AM_TINYCFG_SKINDSC', '' );
define( '_AM_TINYCFG_SKIN_DEFAULT', 'Standaard' );
define( '_AM_TINYCFG_SKIN_CONTRAST', 'Hoog Contrast' );
define( '_AM_TINYCFG_SKIN_O2K7', 'O2K7' );

define( '_AM_TINYCFG_SKINVAR', 'Selekteer variant uiterlijk' );
define( '_AM_TINYCFG_SKINVARDSC', 'De variant van het uiterlijk is alleen van toepassing op O2K7.' );
define( '_AM_TINYCFG_SKINVAR_BLACK', 'Zwart' );
define( '_AM_TINYCFG_SKINVAR_SILVER', 'Zilver' );

?>