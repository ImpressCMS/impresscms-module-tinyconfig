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

define( '_AM_TINYCFG_INDEX', '<b>Configuratie:</b> Algemene configuratie van TinyMCE. Deze configuratie is voor alle Gebruikers Groepen.<br /><b>Taakbalken:</b> Configuratie van de taakbalken per Gebruikers Groep.<br /><b>Simpele Taakbalken:</b> Configureer vereenvoudigde taakbalken.' );

// Configuratie
define( '_AM_TINYCFG_CONFIG', 'Configuratie' );
define( '_AM_TINYCFG_CONFIGSAVE', 'De configuratie voor de TinyMCE editor is opgeslagen.' );

define( '_AM_TINYCFG_VERIFYHTML', 'Controlleer HTML' );
define( '_AM_TINYCFG_VERIFYHTMLDSC', 'Deze optie schakelt de funktie voor het opschonen van de elementen in of uit. Als u deze optie uitschakelt wordt het opschonen overgeslagen, maar het opschonen van bijv. URL conversie wordt wel uitgevoerd.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_CONVERTURLS', 'Converteer URLs' );
define( '_AM_TINYCFG_CONVERTURLSDSC', 'This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_RELATIVEURLS', 'Relatieve URLs' );
define( '_AM_TINYCFG_RELATIVEURLSDSC', 'Als de optie <i>ja</i> wordt gekozen, dan worden alle URLs van de Image Manager relatief van ' . ICMS_URL . '. Als de optie <i>nee</i> is dan worden alle URLs omgezet in absolute URLs.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_FORCEBR', 'Forceer BR elementen' );
define( '_AM_TINYCFG_FORCEBRDSC', 'Deze optie forceert de uitvoer van BR elementen in plaats van P elementen.<br />Standaard: <i>nee</i>' );

define( '_AM_TINYCFG_FORCEP', 'Forceer P elementen' );
define( '_AM_TINYCFG_FORCEPDSC', 'Als de gekozen optie <i>Ja</i> is, dan zullen P elementen gegenereert worden bij aanslag van de Enter toets en BR elementen bij Shift+Enter toets.<br />Standaard: <i>ja</i>' );

define( '_AM_TINYCFG_FORCEDRTBLCK', 'Forceer root blok' );
define( '_AM_TINYCFG_FORCEDRTBLCKDSC', 'Met deze optie kunt u ervoor zorgen dat alle niet blok elementen of tekstnodes zijn verpakt in blok-elementen.<br />Standaard: <i>p-tag</i>' );
define( '_AM_TINYCFG_PTAG', 'p-tag' );

define( '_AM_TINYCFG_SCHEMA', 'Schema' );
define( '_AM_TINYCFG_SCHEMADSC', 'Deze optie laat u kiezen tussen HTML4 en HTML5 schema. Dit regelt de geldige elementen en attributen die kunnen worden geplaatst in de HTML. <br />Standaard: <i>HTML4</i>' );

define( '_AM_TINYCFG_CONTENTCSS', 'Vul het pad in naar de CSS voor het beschrijfbare veld' );
define( '_AM_TINYCFG_CONTENTCSSDSC', 'Deze optie stelt u in staat om een eigen CSS bestand te gebruiken. Dit CSS bestand wordt gebruikt voor het in te vullen deel van de editor.<br />Vul het pad als volgt in: <i>folder/folder/folder/tinymce_content.css</i> (dus zonder te beginnen met /).' );

// Taakbalken
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

define( '_AM_TINYCFG_FONTFAMILY', 'Lettertype' );
define( '_AM_TINYCFG_FONTFAMILYDSC', 'Deze optie moet een puntkomma gescheiden lijst bevatten van lettertitels en lettertype van elkaar gescheiden door =. De titels zijn degenen die de gebruiker zal zien in de letter drop-down menu en het lettertype naam is de string die wordt ingevoegd in het lettertype gezicht of fontFamily CSS stijl.' );

define( '_AM_TINYCFG_FONTSIZE', 'Lettergrootte' );
define( '_AM_TINYCFG_FONTSIZEDSC', 'Deze optie moet een komma gescheiden lijst bevatten van de lettergroottes. Ieder item in de lijst dient een geldige waarde te zijn voor de lettertype CSS eigenschap (10px, 12pt, 1em, etc.).' );

define( '_AM_TINYCFG_TOOLBARLOC', 'Taakbalk lokatie' );
define( '_AM_TINYCFG_TOOLBARLOCDSC', 'Met deze optie kunt u bepalen waar de taakbalk geplaatst wordt. Deze optie kan \'boven\' of \'onder\' zijn.<br />Standaard: <i>boven</i>' );

define( '_AM_TINYCFG_STATUSB', 'Elementen pad lokatie' );
define( '_AM_TINYCFG_STATUSBDSC', 'Met deze optie kunt u kiezen waar de elementen pad en de vergroten/verkleinen optie geplaatst worden. Deze optie kan \'geen\', \'boven\' of \'onder\' zijn.<br />Standaard: <i>onder</i>' );

define( '_AM_TINYCFG_RESIZE', 'Vergroten en verkleinen' );
define( '_AM_TINYCFG_RESIZEDSC', 'Deze optie geeft u de mogelijkheid om de vergroot/verklein knop in- of uit te schakelen. Deze optie werkt alleen als de optie voor de elementen pad \'boven\' of \'onder\' is.' );

define( '_AM_TINYCFG_SKIN', 'Selekteer uiterlijk' );
define( '_AM_TINYCFG_SKINDSC', '' );
define( '_AM_TINYCFG_SKIN_DEFAULT', 'Standaard' );
define( '_AM_TINYCFG_SKIN_CONTRAST', 'Hoog Contrast' );
define( '_AM_TINYCFG_SKIN_O2K7', 'O2K7' );

define( '_AM_TINYCFG_SKINVAR', 'Selekteer variant uiterlijk' );
define( '_AM_TINYCFG_SKINVARDSC', 'De variant van het uiterlijk is alleen van toepassing op O2K7.' );
define( '_AM_TINYCFG_SKINVAR_BLACK', 'Zwart' );
define( '_AM_TINYCFG_SKINVAR_SILVER', 'Zilver' );

define( '_AM_TINYCFG_BOTTOM', 'onder' );
define( '_AM_TINYCFG_TOP', 'boven' );
define( '_AM_TINYCFG_NONE', 'geen' );
define( '_AM_TINYCFG_TRUE', 'ja' );
define( '_AM_TINYCFG_FALSE', 'nee' );

// Simpele Taakbalken
define( '_AM_TINYCFG_SIMPLETOOLSETSMCE', 'Simpele TinyMCE Taakbalken' );
define( '_AM_TINYCFG_SIMPLETOOLSETSMCEDSC', 'Met dit formulier kunt u eenvoudige taakbalken maken. Deze set eenvoudige taakbalken kunnen bijvoorbeeld gebruikt worden voor de commentaren en de forum modules. Deze taakbalken zijn voor alle gebruikers groepen.' );
define( '_AM_TINYCFG_SIMPLETOOLSAVE', 'Taakbalken voor de TinyMCE editor zijn opgeslagen.' );

?>