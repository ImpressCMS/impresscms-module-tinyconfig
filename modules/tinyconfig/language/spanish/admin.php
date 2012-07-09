<?php
/**
* TinyConfig
*
* File: /language/spanish/admin.php
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
* @translator	debianus
* @version		$Id$
*/

define( '_AM_TINYCFG_WARNINSTALL', 'La carpeta %s no existe en su servidor. <br /> La misma es necesaria para el funcionamiento de TinyConfig.' );

define( '_AM_TINYCFG_INDEX', '<b>Configuración:</b> Preferencias de TinyMCE que se aplicarán a todos los Grupos de usuarios.<br /> <b><i>Toolsets</i></b>: Configurar los <i>toolsets</i> para cada Grupo de usuarios.<br /> <b><i>Toolset</i> simplificado:<b> Configurar un <i>toolset</i> simplificado. Puede ser usado para los comentarios mensajes en los foros etc. pero no puede ser establecido en función de los Grupos de usuarios.' );

define( '_AM_TINYCFG_TOOLSETS', '<i>Toolsets</i>' );
define( '_AM_TINYCFG_TOOLSETSMCE', 'TinyMCE <i>Toolset</i>' );
define( '_AM_TINYCFG_TOOLSETS_NOTSET', '<b>Este Grupo todava no tiene <i>toolset</i></b>. Los valores que visualiza son los predeterminados. Debe completar y enviar el fomulario para creat un <i>toolset</i> para este grupo.' );
define( '_AM_TINYCFG_TOOLSAVE', '<i>Toolset</i> para TinyMCE editor guardado.' );
define( '_AM_TINYCFG_PLUGINSAVAIL', 'Plugins disponibles:' );

define( '_AM_TINYCFG_SIMPLETOOLSETSMCE', 'TinyMCE <i>Toolset<i> simplificado' );
define( '_AM_TINYCFG_SIMPLETOOLSETSMCEDSC', 'Con este formulario es posible crear un <i>toolset</i> simplificado. Puede ser usado para los comentarios mensajes en los foros etc. pero no puede ser establecido en función de los Grupos de usuarios.' );
define( '_AM_TINYCFG_SIMPLETOOLSAVE', '<i>Toolset<i>simplificado para TinyMCE editor guardado.' );

define( '_AM_TINYCFG_GROUPS', 'Grupos' );
define( '_AM_TINYCFG_GROUPSELECT', 'Seleccione un Grupo de usuarios' );

define( '_AM_TINYCFG_PLUGINS', 'Plugins' );
define( '_AM_TINYCFG_BUTTONB1', 'Barra de herramientas 1' );
define( '_AM_TINYCFG_BUTTONB2', 'Barra de herramientas 2' );
define( '_AM_TINYCFG_BUTTONB3', 'Barra de herramientas 3' );
define( '_AM_TINYCFG_BUTTONB4', 'Barra de herramientas 4' );
define( '_AM_TINYCFG_FONTFAMILY', 'Fuentes' );
define( '_AM_TINYCFG_FONTFAMILYDSC', 'Cada fuente debe estar separada por un punto y coma y las familias de las fuentes deben estar separadas por el signo =. Los ttulos de las mismas son la información que se mostrará al usuario en la lista desplegable del editor y la familia de fuentes es la información para el cdigo CSS.' );
define( '_AM_TINYCFG_FONTSIZE', 'Tamaños de las fuentes' );
define( '_AM_TINYCFG_FONTSIZEDSC', 'Cada tamaño disponible debe estar separado por una coma y cada valor debe tener la sintaxis apropiada para la propiedad de CSS <i>font-style</i> (10px 12pt 1em etc.).' );
define( '_AM_TINYCFG_TOOLBARLOC', 'Localización de la barra de herramientas' );
define( '_AM_TINYCFG_TOOLBARLOCDSC', 'Permite determinar donde estar situada la misma. Las opciones son <i>top</i> o <i>bottom</i> (arriba o abajo). Predeterminada: <i>top</i>' );
define( '_AM_TINYCFG_STATUSB', 'Localización de la barra de estado' );
define( '_AM_TINYCFG_STATUSBDSC', 'Esta opción permite determinar dónde se situará la misma y en ella se incluyen la ruta y la función de cambiar el tamaño del editor. Los valores son <i>top</i>, <i>bottom</i> o <i>none</i>. <br />Predeterminada: <i>bottom</i>
' );
define( '_AM_TINYCFG_RESIZE', 'Redimensionar' );
define( '_AM_TINYCFG_RESIZEDSC', 'Esta opción permite activar o no el botn para el redimensionamiento del editor. Pero esta opción necesita que la localización de la barra de estado esté fijada en <i>top</i> o <i>bottom</i> porque el botón aparece en ella.' );
define( '_AM_TINYCFG_BOTTOM', 'bottom' );
define( '_AM_TINYCFG_TOP', 'top' );
define( '_AM_TINYCFG_NONE', 'none' );
define( '_AM_TINYCFG_TRUE', 'true' );
define( '_AM_TINYCFG_FALSE', 'false' );

define( '_AM_TINYCFG_CONFIG', 'Configuración' );
define( '_AM_TINYCFG_CONFIGSAVE', 'La configuración del editor TinyMCE ha sido guardada.' );

define( '_AM_TINYCFG_VERIFYHTML', 'Verificar HTML' );
define( '_AM_TINYCFG_VERIFYHTMLDSC', 'Esta opción activa la función de limpieza de elementos. Si se fija su valor en <i>false</i> no se llevará a cabo, pero otras caractersticas de verificación como la conversión de URL sí.<br /> Predeterminada: <i>false</i>' );

define('AMTINYCFGSKINVAR' ' ');
define('AMTINYCFGSKINVARDSC' '. ');
define('AMTINYCFGSKINVARBLACK' 'Black ');
define('AMTINYCFGSKINVARSILVER' 'Silver ');
define( '_AM_TINYCFG_CONVERTURLS', 'Convertir URLs' );
define( '_AM_TINYCFG_CONVERTURLSDSC', 'Esta opción determina si TinyMCE restaurará los URLs a sus valores originales. De forma predeterminada los URLs son automáticamente convertidos porque al ser un editor que funciona en un navegador web funciona de esa manera: no se pueden conocer los URLs reales a menos que se almacenen. Si se fija el valor de la opción en <i>false</i> se intentará  mantener los URLs intactos.<br /> Predeterminada: <i>false</i>' );

define( '_AM_TINYCFG_RELATIVEURLS', 'URLs relativos' );
define( '_AM_TINYCFG_RELATIVEURLSDSC', 'Activando esta opción todos los URLs producidos por el Gestor de imágenes serán direcciones relativas con origen en ' .  ICMSURL . '. Si no se activa todos serán absolutos.<br />Predeterminado: <i>false</i>' );

define( '_AM_TINYCFG_FORCEBR', 'Forzar elementos BR' );
define( '_AM_TINYCFG_FORCEBRDSC', 'Activando esta opción el editor insertará nuevas líneas para cada elemento BR en lugar de insertar nuevos párrafos. <br />Predeterminada: <i>false</i>' );

define( '_AM_TINYCFG_FORCEP', 'Forzar elementos P' );
define( '_AM_TINYCFG_FORCEPDSC', 'Esta opción permite activar o no la creación de párrafos con la tecla <i>Enter</i> en Mozilla/Firefox.<br />Predeterminado:<i>true</i>' );
define( '_AM_TINYCFG_FIXLIST', 'Fijar elementos <i>list</i>' );
define( '_AM_TINYCFG_FIXLISTDSC', 'Esta opción permite determina si los elementos UL/OL serán convertidos a XHTML válido.<br />Predeterminada:<i>false</i>' );
define( '_AM_TINYCFG_FORCEDRTBLCK', 'Forzar <i>block</i>' );
define( '_AM_TINYCFG_FORCEDRTBLCKDSC', 'Esta opción permite determinar si cualquier elemento que no sea un bloque o nodos de texto será tratado como un elemento <i>block</i>.<br />Predeterminado: <i>p</i>' );

define( '_AM_TINYCFG_SCHEMA', 'Tipo de HTML' );
define( '_AM_TINYCFG_SCHEMADSC', 'Esta opción permite elegir entre HTML4 y HTML5. Ello determinará los elementos y atributos correspondientes del código HTML que genera el editor.<br /> Predeterminado:<i>HTML4</i> ' );

define( '_AM_TINYCFG_SKIN', 'Seleccionar tema' );
define( '_AM_TINYCFG_SKINDSC', 'Permite elegir el tema de diseño para el editor' );
define( '_AM_TINYCFG_SKIN_DEFAULT', 'Predeterminado' );
define( '_AM_TINYCFG_SKIN_CONTRAST', 'Alto contraste' );
define( '_AM_TINYCFG_SKIN_O2K7', 'O2K7' );

define( '_AM_TINYCFG_SKINVAR', 'Seleccionar variante del tema' );
define( '_AM_TINYCFG_SKINVARDSC', 'La misma se aplicará únicamente al tema O2K7.' );
define( '_AM_TINYCFG_SKINVAR_BLACK', 'Black' );
define( '_AM_TINYCFG_SKINVAR_SILVER', 'Silver' );
?>