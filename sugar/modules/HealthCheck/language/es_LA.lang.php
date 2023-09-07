<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Chequeo de salud',
    'LBL_MODULE_NAME_SINGULAR' => 'Chequeo de salud',
    'LBL_MODULE_TITLE' => 'Chequeo de salud',
    'LBL_LOGFILE' => 'Archivo de registro',
    'LBL_BUCKET' => 'Nivel',
    'LBL_FLAG' => 'Bandera',
    'LBL_LOGMETA' => 'Meta de registro',
    'LBL_ERROR' => 'Error',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => 'Los datos serializados no pudieron deserializarse',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => 'Los datos serializados no pudieron deserializarse por contener referencias a objetos o clases',

    'LBL_SCAN_101_LOG' => '%s tiene historial de estudio',
    'LBL_SCAN_102_LOG' => '%s tiene extensiones: %s',
    'LBL_SCAN_103_LOG' => '%s tiene vardefs personalizados',
    'LBL_SCAN_104_LOG' => '%s tiene layoutdefs personalizados',
    'LBL_SCAN_105_LOG' => '%s tiene personalización viewdefs',

    'LBL_SCAN_201_LOG' => '%s no es un módulo de existencias',

    'LBL_SCAN_301_LOG' => '%s para ser iniciado como BWC',
    'LBL_SCAN_302_LOG' => 'Vistas de archivos desconocidos presentes - %s no es módulo MB',
    'LBL_SCAN_303_LOG' => 'Archivo forma no vacío %s - %s no es módulo MB',
    'LBL_SCAN_304_LOG' => 'Archivo desconocido %s - %s no es módulo MB',
    'LBL_SCAN_305_LOG' => 'Vardefs erróneos - clave %s, nombre %s',
    'LBL_SCAN_306_LOG' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
    'LBL_SCAN_307_LOG' => 'Vardefs erróneos - vínculo %s refiere a relación inválida',
    'LBL_SCAN_308_LOG' => 'Función HTML Vardef en %s',
    'LBL_SCAN_309_LOG' => 'Errror md5 para %s',
    'LBL_SCAN_310_LOG' => 'Archivo desconocido %s/%s',
    'LBL_SCAN_311_LOG' => 'Función Vardef HTML %s en módulo $module para campo %s',
    'LBL_SCAN_312_LOG' => 'Vardefs erróneo- es el tipo de campo &#39;nombre&#39; no es válido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_313_LOG' => 'Extensión dir %s detectado - %s no es módulo MB',
    'LBL_SCAN_314_LOG' => "Vardefs erróneos - campo multienum '%s' con lista de opciones claves '%s' contienen caracteres incompatibles - '{%s}' en módulo %s",

    'LBL_SCAN_401_LOG' => 'Se encontró una inclusión de archivos de proveedor para los archivos trasladados a proveedor:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'Módulo erróneo %s - no en beanList y no en filesystem',
    'LBL_SCAN_403_LOG' => 'Se encontró una inclusión de archivos específicos de Sugar para:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'Logic hook after_ui_frame detectado',
    'LBL_SCAN_521_LOG' => 'Logic hook after_ui_footer detectado',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s tiene vistas personalizadas no admitidas. Estas vistas personalizadas serán movidas a un directorio Inhabilitado durante la actualización',
    'LBL_SCAN_407_LOG' => '%s tiene vistas personalizadas no admitidas. Estas vistas personalizadas serán movidas a un directorio Inhabilitado durante la actualización',
    'LBL_SCAN_408_LOG' => 'Los componentes personalizados de creación de acciones se encontraron en %s. Estos componentes se copiarán y modificarán para extende en su lugar el componente de creación durante la actualización',
    'LBL_SCAN_409_LOG' => 'Vardefs no válidos - "link_file" ha quedado obsoleto. La clase de enlace especificada en "link_class" debe ser autodescargable',
    'LBL_SCAN_519_LOG' => 'Extensión dir %s detectada',
    'LBL_SCAN_518_LOG' => 'CustomCode %s en %s, archivo %s encontrado',
    'LBL_SCAN_410_LOG' => 'Campos máximos - Encontrados más de %s campos (%s) en %s',
    'LBL_SCAN_522_LOG' => '&#39;get_subpanel_data&#39; con &#39; función:&#39; valor en %s encontrado',
    'LBL_SCAN_412_LOG' => 'Vínculo de subpanel erróneo %s in %s',
    'LBL_SCAN_413_LOG' => 'Clase de widget desconocido detectado: %s para %s, %s de módulo en el archivo %s',
    'LBL_SCAN_414_LOG' => 'Campos desconocidos manejados por CRYS-36, no hay más por verificar',
    'LBL_SCAN_415_LOG' => 'Archivo adjunto erróneo en %s: %s',
    'LBL_SCAN_523_LOG' => 'Parámetro By-ref en archivo adjunto %s función %s',
    'LBL_SCAN_417_LOG' => 'Módulo Incompatible %s',
    'LBL_SCAN_418_LOG' => 'Subpanel encontrado con vínculo a módulo inexistente: %s en archivo de %s',
    'LBL_SCAN_419_LOG' => 'Vardefs erróneos - clave %s, nombre %s',
    'LBL_SCAN_420_LOG' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
    'LBL_SCAN_421_LOG' => 'Vardefs erróneos - vínculo %s refiere a relación inválida',
    'LBL_SCAN_422_LOG' => 'El módulo %s tiene la definición de otro módulo  %s  en el archivo  %s',
    'LBL_SCAN_525_LOG' => 'Función HTML Vardef en %s',
    'LBL_SCAN_423_LOG' => 'Subcampos de vardefs erróneos - %s refiere a subcampo erróneo %s. Ubicado en módulo %s',
    'LBL_SCAN_424_LOG' => 'HTML en línea encontrada en %s en línea %s',
    'LBL_SCAN_425_LOG' => '"Echo" encontrado en %s en línea %s',
    'LBL_SCAN_426_LOG' => '"Print" encontrado en %s en línea %s',
    'LBL_SCAN_427_LOG' => '"Die/exit" encontrado en %s en línea %s',
    'LBL_SCAN_428_LOG' => '"Print_r" encontrado en %s en línea %s',
    'LBL_SCAN_429_LOG' => '"Var_dump" encontrado en %s en línea %s',
    'LBL_SCAN_430_LOG' => 'Buscar buffering de salida (%s) en %s en línea %s',
    'LBL_SCAN_431_LOG' => 'Se encontró una plantilla de Smarty personalizada: "%s"',
    'LBL_SCAN_436_LOG' => 'Se encontró una plantilla de PDF personalizada: "%s"',
    'LBL_SCAN_437_LOG' => 'Plantilla de Smarty incompatible con sintaxis de Smarty3: "%s"',
    'LBL_SCAN_438_LOG' => 'Se encontró una plantilla de PDF personalizada que no se puede convertir automáticamente a sintaxis de Smarty3: "%s"',
    'LBL_SCAN_439_LOG' => 'Plantilla incompatible con sintaxis de Smarty3, se omitió: "%s".',
    'LBL_SCAN_451_LOG' => 'Se ha eliminado el código de AuthN, utilice \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate en su lugar. Archivos que usan el código eliminado: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => 'Función Vardef HTML %s en módulo %s para campo %s',
    'LBL_SCAN_432_LOG' => 'Vardefs erróneo- es el tipo de campo &#39;nombre&#39; no es válido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_526_LOG' => "Vardefs erróneos - campo multienum '%s' con lista de opciones '%s' las claves contienen caracteres incompatibles - '{%s}' en módulo %s",
    'LBL_SCAN_527_LOG' => "Nombre de tabla en bean %s no coincide con el atributo de tabla en la %s/vardefs.php",
    'LBL_SCAN_528_LOG' => 'Campo %s de módulo %s tiene valor incorrecto display_default',
    'LBL_SCAN_529_LOG' => '%s: %s en archivo %s en línea %s',
    'LBL_SCAN_530_LOG' => 'Archivo personalizado no encontrado: %s',
    'LBL_SCAN_531_LOG' => 'Controlador de la base de datos obsoleto: %s',
    'LBL_SCAN_532_LOG' => 'Una clase en %s llama a su constructor de stock principal %s::%s()',
    'LBL_SCAN_533_LOG' => 'Una clase en %s llama a su constructor de stock principal en calidad de %s::%s()',
    'LBL_SCAN_534_LOG' => 'Controlador de la base de datos no compatible: %s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => 'Archivos personalizados de búsqueda elástica encontrados %s',
    'LBL_SCAN_434_LOG' => 'Se ha encontrado el uso de funciones de array en $_SESSION en los archivos: %s',
    'LBL_SCAN_435_LOG' => 'La clase SugarSession se eliminó de la API. Utilice Sugarcrm\Sugarcrm\Session\SessionStorage en su lugar. Archivos con código obsoleto: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Uso de los API app.date removidos de Sidecar en %s',
    'LBL_SCAN_551_LOG' => 'Uso de los API Bean removidos de Sidecar en %s',
    'LBL_SCAN_560_LOG' => 'custom/modules/Quotes/quotes.js puede contener personalizaciones que no son compatibles con nuevas cotizaciones.',
    'LBL_SCAN_561_LOG' => 'custom/modules/Quotes/EditView.js puede contener personalizaciones que no son compatibles con nuevas cotizaciones.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_563_LOG' => 'Uso de personalización de Monolog incompatible: %s',
    'LBL_SCAN_564_LOG' => 'Uso de funcionalidad DBAL obsoleta: %s',
    'LBL_SCAN_565_LOG' => 'Uso de propiedad de configuración obsoleta $sugar_config[&#39;passwordHash&#39;]. A partir de la versión 13.3 no será compatible: %s',
    'LBL_SCAN_566_LOG' => 'Uso de propiedad de configuración no compatible $sugar_config[&#39;passwordHash&#39;]: %s',
    'LBL_SCAN_570_LOG' => 'Estado y tipo no válidos para los correos electrónicos: estado=%s, tipo = %s',
    'LBL_SCAN_571_LOG' => 'El archivo obsoleto tiene personalizaciones: %s',
    'LBL_SCAN_572_LOG' => 'El archivo personalizado tiene un conflicto de nombre: %s',
    'LBL_SCAN_573_LOG' => 'El archivo personalizado de ayuda tiene un conflicto de nombre: %s',
    'LBL_SCAN_574_LOG' => 'El subpanel de correos electrónicos existe. Directorio personalizado: %s',
    'LBL_SCAN_575_LOG' => 'Se debe cambiar el Subpanel de contactos para los correos electrónicos para usar el subpanel para correos archivados de contactos: %s',
    'LBL_SCAN_576_LOG' => 'Se han detectado personalizaciones de la apariencia en &#39;%s&#39;. La apariencia final podría no funcionar como se espera, compruebe sus personalizaciones de apariencia.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => 'Sentencia prohibida detectada en &#39;%s&#39;: %s',
    'LBL_SCAN_586_LOG' => 'FontAwesome está obsoleto a contar de la versión 11.2 y no se admitirá en la versión 12.0. Se detectó el uso de FontAwesome en: %s',

    'LBL_SCAN_501_LOG' => 'Archivo no encontrado: %s',
    'LBL_SCAN_502_LOG' => 'md5 incompatible para %s, esperado %s',
    'LBL_SCAN_503_LOG' => 'Módulo personalizado con el mismo nombre para módulo Sugar7 : %s',
    'LBL_SCAN_504_LOG' => 'Tipo de campo no encontrrado en módulo %s: %s',
    'LBL_SCAN_505_LOG' => 'Tipo de cambio en %s para campo %s: de %s para %s',
    'LBL_SCAN_506_LOG' => '$this uso en %s',
    'LBL_SCAN_507_LOG' => 'Subcampos de vardefs erróneos - %s refiere a subcampo erróneo %s. Ubicado en módulo %s',
    'LBL_SCAN_508_LOG' => 'HTML en línea encontrada en %s en línea %s',
    'LBL_SCAN_509_LOG' => '"Echo" encontrado en %s en línea %s',
    'LBL_SCAN_510_LOG' => '"Print" encontrado en %s en línea %s',
    'LBL_SCAN_511_LOG' => '"Die/exit" encontrado en %s en línea %s',
    'LBL_SCAN_512_LOG' => '"Print_r" encontrado en %s en línea %s',
    'LBL_SCAN_513_LOG' => '"Var_dump" encontrado en %s en línea %s',
    'LBL_SCAN_514_LOG' => 'Buscar buffering de salida (%s) en %s en línea %s',
    'LBL_SCAN_515_LOG' => 'Falla de script: %s',
    'LBL_SCAN_516_LOG' => 'Archivos previamente eliminados encontrados en referencia: %s',
    'LBL_SCAN_517_LOG' => 'Integración Incompatible - %s %s',
    'LBL_SCAN_540_LOG' => 'Restablecimiento de datos de integración incompatible - %s %s',
    'LBL_SCAN_541_LOG' => 'Serialización no válida de Sugar Bpm -  %s serializaciones no válidas en la columna %s de la tabla %s: %s.',
    'LBL_SCAN_542_LOG' => 'Uso no válido de campo de Sugar Bpm - %s campos no válidos utilizados en %s.',
    'LBL_SCAN_545_LOG' => 'Grupo de campos parcialmente bloqueado de Sugar BPM - %4$s campos bloqueados en el grupo %s en la definición de proceso %s para el módulo %s.',
    'LBL_SCAN_546_LOG' => 'Configuración TinyMCE de la base de conocimientos personalizada',
    'LBL_SCAN_547_LOG' => 'Uso de firma eliminada `resetLoadFlag` en %s',
    'LBL_SCAN_548_LOG' => 'Uso de método obsoleto &#39;initButtons&#39; en %s',
    'LBL_SCAN_549_LOG' => 'Uso de firma eliminada `getField` en %s',
    'LBL_SCAN_552_LOG' => 'Uso de los API Undescore removidos de Sidecar en %s',
    'LBL_SCAN_553_LOG' => 'Uso de los API Bean removidos de Sidecar en %s',
    'LBL_SCAN_554_LOG' => 'El controlador de Sidecar %s se extiende del controlador Sidecar removido',

    'LBL_SCAN_901_LOG' => 'Instancia ya actualizada a Sugar 7',
    'LBL_SCAN_903_LOG' => 'Versión de actualizador no soportada. Por favor instale el paquete SugarUpgradeWizardPrereq que corresponda',
    'LBL_SCAN_904_LOG' => 'Se encontraron valores NULOS en la cadena de la lista de módulos. Archivo:  %s, Módulos: %s',
    'LBL_SCAN_999_LOG' => 'Falla desconocida, por favor contacte a soporte',

    'LBL_SCAN_101_TITLE' => '%s tiene historial de estudio',
    'LBL_SCAN_102_TITLE' => '%s tiene extensiones: %s',
    'LBL_SCAN_103_TITLE' => '%s tiene vardefs personalizados',
    'LBL_SCAN_104_TITLE' => '%s tiene layoutdefs personalizados',
    'LBL_SCAN_105_TITLE' => '%s tiene personalización viewdefs',

    'LBL_SCAN_201_TITLE' => '%s no es un módulo de existencias',

    'LBL_SCAN_301_TITLE' => '%s para ser iniciado como BWC',
    'LBL_SCAN_302_TITLE' => 'Vistas de archivos desconocidos presentes - %s no es módulo MB',
    'LBL_SCAN_303_TITLE' => 'Archivo forma no vacío %s - %s no es módulo MB',
    'LBL_SCAN_304_TITLE' => 'Archivo desconocido %s - %s no es módulo MB',
    'LBL_SCAN_305_TITLE' => 'Vardefs erróneos - clave %s, nombre %s',
    'LBL_SCAN_306_TITLE' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
    'LBL_SCAN_307_TITLE' => 'Vardefs erróneos - vínculo %s refiere a relación inválida',
    'LBL_SCAN_308_TITLE' => 'Función HTML Vardef en %s',
    'LBL_SCAN_309_TITLE' => 'Errror md5 para %s',
    'LBL_SCAN_310_TITLE' => 'Archivo desconocido %s/%s',
    'LBL_SCAN_311_TITLE' => 'Función Vardef HTML %s en módulo $module para campo %s',
    'LBL_SCAN_312_TITLE' => 'Vardefs erróneo- es el tipo de campo &#39;nombre&#39; no es válido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_313_TITLE' => 'Extensión dir %s detectado - %s no es módulo MB',

    'LBL_SCAN_401_TITLE' => 'Se encontró una inclusión de archivos de proveedor para los archivos trasladados a proveedor:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'Módulo erróneo %s - no en beanList y no en filesystem',
    'LBL_SCAN_403_TITLE' => 'Se encontró una inclusión de archivos específicos de Sugar para:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'Logic hook after_ui_frame detectado',
    'LBL_SCAN_521_TITLE' => 'Logic hook after_ui_footer detectado',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s tiene vistas personalizadas no admitidas. Estas vistas personalizadas serán movidas a un directorio Inhabilitado durante la actualización',
    'LBL_SCAN_407_TITLE' => '%s tiene vistas personalizadas no admitidas. Estas vistas personalizadas serán movidas a un directorio Inhabilitado durante la actualización',
    'LBL_SCAN_408_TITLE' => 'Se encontraron componentes personalizados de creación de acciones que ya no se soportan.',
    'LBL_SCAN_409_TITLE' => 'Vardefs no válidos - el módulo %s tiene vardefs no válidos para el campo %s.',
    'LBL_SCAN_519_TITLE' => 'Extensión dir %s detectada',
    'LBL_SCAN_518_TITLE' => 'CustomCode %s en %s, archivo %s encontrado',
    'LBL_SCAN_410_TITLE' => 'Campos máximos - Encontrados más de %s campos (%s) en %s',
    'LBL_SCAN_522_TITLE' => '&#39;get_subpanel_data&#39; con &#39; función:&#39; valor en %s encontrado',
    'LBL_SCAN_412_TITLE' => 'Vínculo de subpanel erróneo %s in %s',
    'LBL_SCAN_413_TITLE' => 'Clase de widget desconocido detectado: %s para %s, %s de módulo en el archivo %s',
    'LBL_SCAN_414_TITLE' => 'Campos desconocidos manejados por CRYS-36, no hay más por verificar',
    'LBL_SCAN_415_TITLE' => 'Archivo adjunto erróneo en %s: %s',
    'LBL_SCAN_523_TITLE' => 'Parámetro By-ref en archivo adjunto %s función %s',
    'LBL_SCAN_417_TITLE' => 'Módulo Incompatible %s',
    'LBL_SCAN_418_TITLE' => 'Subpanel encontrado con vínculo a módulo inexistente: %s en archivo de %s',
    'LBL_SCAN_419_TITLE' => 'Vardefs erróneos - clave %s, nombre %s',
    'LBL_SCAN_420_TITLE' => 'Vardefs erróneos - campo relacionado %s tiene `module` vacío',
    'LBL_SCAN_421_TITLE' => 'Vardefs erróneos - vínculo %s refiere a relación inválida',
    'LBL_SCAN_422_TITLE' => 'El módulo %s tiene una definición de otro módulo',
    'LBL_SCAN_525_TITLE' => 'Función HTML Vardef en %s',
    'LBL_SCAN_423_TITLE' => 'Subcampos de vardefs erróneos - %s refiere a subcampo erróneo %s. Ubicado en módulo %s',
    'LBL_SCAN_424_TITLE' => 'HTML en línea encontrada en %s en línea %s',
    'LBL_SCAN_425_TITLE' => '"Echo" encontrado en %s en línea %s',
    'LBL_SCAN_426_TITLE' => '"Print" encontrado en %s en línea %s',
    'LBL_SCAN_427_TITLE' => '"Die/exit" encontrado en %s en línea %s',
    'LBL_SCAN_428_TITLE' => '"Print_r" encontrado en %s en línea %s',
    'LBL_SCAN_429_TITLE' => '"Var_dump" encontrado en %s en línea %s',
    'LBL_SCAN_430_TITLE' => 'Buscar buffering de salida (%s) en %s en línea %s',
    'LBL_SCAN_431_TITLE' => 'Se encontró una plantilla de Smarty personalizada: "%s"',
    'LBL_SCAN_436_TITLE' => 'Se encontró una plantilla de PDF personalizada: "%s"',
    'LBL_SCAN_437_TITLE' => 'Plantilla de Smarty incompatible con sintaxis de Smarty3: "%s"',
    'LBL_SCAN_438_TITLE' => 'Se encontró una plantilla de PDF personalizada que no se puede convertir de forma automática a sintaxis de Smarty3: "%s"',
    'LBL_SCAN_439_TITLE' => 'Plantilla incompatible con sintaxis de Smarty3, se omitió: "%s"',
    'LBL_SCAN_451_TITLE' => 'Se ha eliminado el código de AuthN, utilice \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate en su lugar. Archivos que usan el código eliminado: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => 'Función Vardef HTML %s en módulo %s para campo %s',
    'LBL_SCAN_432_TITLE' => 'Vardefs erróneo- es el tipo de campo &#39;nombre&#39; no es válido &#39;%s&#39;, módulo - &#39;%s&#39;',
    'LBL_SCAN_433_TITLE' => 'Archivos personalizados de búsqueda elástica encontrados %s',
    'LBL_SCAN_434_TITLE' => 'Se ha encontrado el uso de funciones de array en $_SESSION en los archivos: %s',
    'LBL_SCAN_435_TITLE' => 'Se encontró la utilización de una clase SugarSession eliminada',
    'LBL_SCAN_550_TITLE' => 'Uso de los API app.date removidos de Sidecar en %s',
    'LBL_SCAN_551_TITLE' => 'Uso de los API Bean removidos de Sidecar en %s',

    'LBL_SCAN_501_TITLE' => 'Archivo no encontrado: %s',
    'LBL_SCAN_502_TITLE' => 'md5 incompatible para %s, esperado %s',
    'LBL_SCAN_503_TITLE' => 'Módulo personalizado con el mismo nombre para módulo Sugar7 : %s',
    'LBL_SCAN_504_TITLE' => 'Tipo de campo no encontrrado en módulo %s: %s',
    'LBL_SCAN_505_TITLE' => 'Tipo de cambio en %s para campo %s: de %s para %s',
    'LBL_SCAN_506_TITLE' => '$this uso en %s',
    'LBL_SCAN_507_TITLE' => 'Subcampos de vardefs erróneos- %s se refiere a un subcampo %s erróneo %s. Ubicado en módulo %s',
    'LBL_SCAN_508_TITLE' => 'HTML en línea encontrada en %s en línea %s',
    'LBL_SCAN_509_TITLE' => '"Echo" encontrado en %s en línea %s',
    'LBL_SCAN_510_TITLE' => '"Print" encontrado en %s en línea %s',
    'LBL_SCAN_511_TITLE' => '"Die/exit" encontrado en %s en línea %s',
    'LBL_SCAN_512_TITLE' => '"Print_r" encontrado en %s en línea %s',
    'LBL_SCAN_513_TITLE' => '"Var_dump" encontrado en %s en línea %s',
    'LBL_SCAN_514_TITLE' => 'Buscar buffering de salida (%s) en %s en línea %s',
    'LBL_SCAN_515_TITLE' => 'Falla de script: %s',
    'LBL_SCAN_517_TITLE' => 'Integración Incompatible - %s %s',
    'LBL_SCAN_526_TITLE' => "Vardefs erróneos - campo multienum '%s' con lista de opciones '%s' las claves contienen caracteres incompatibles - '{%s}' en módulo %s",
    'LBL_SCAN_528_TITLE' => 'Campo %s de módulo %s tiene valor incorrecto display_default',
    'LBL_SCAN_529_TITLE' => '%s: %s en archivo %s en línea %s',
    'LBL_SCAN_530_TITLE' => 'Archivo personalizado no encontrado: %s',
    'LBL_SCAN_531_TITLE' => 'Controlador de la base de datos obsoleto: %s',
    'LBL_SCAN_532_TITLE' => 'Llamada al constructor de principal de stock PHP4 en %s',
    'LBL_SCAN_533_TITLE' => 'Llamada al constructor de principal personalizado PHP4 en %s',
    'LBL_SCAN_534_TITLE' => 'Controlador de la base de datos no compatible: %s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => 'Restablecimiento de datos de integración incompatible - %s %s',
    'LBL_SCAN_541_TITLE' => 'Serialización no válida de Sugar BPM -  %s serializaciones no válidas en la columna %s de la tabla %s: %s',
    'LBL_SCAN_542_TITLE' => 'Uso no válido de campo de Sugar Bpm - %s campos no válidos utilizados en %s.',
    'LBL_SCAN_545_TITLE' => 'Grupo de campos parcialmente bloqueado de Sugar Bpm - Módulo %3$s: el grupo %s está parcialmente bloqueado en la definición del proceso %s.',
    'LBL_SCAN_546_TITLE' => 'Configuración TinyMCE de la base de conocimientos personalizada',
    'LBL_SCAN_547_TITLE' => 'Uso de firma eliminada `resetLoadFlag` en %s',
    'LBL_SCAN_548_TITLE' => 'Uso de método obsoleto &#39;initButtons&#39; en %s',
    'LBL_SCAN_549_TITLE' => 'Uso de firma eliminada `getField` en %s',
    'LBL_SCAN_552_TITLE' => 'Uso de los API Undescore removidos de Sidecar en %s',
    'LBL_SCAN_553_TITLE' => 'Uso de los API Bean removidos de Sidecar en %s',
    'LBL_SCAN_554_TITLE' => 'El controlador de Sidecar %s se extiende del controlador Sidecar removido',
    'LBL_SCAN_570_TITLE' => 'Se han encontrado valores inesperados en los correos electrónicos',
    'LBL_SCAN_571_TITLE' => 'El archivo personalizado contiene un código que se ha quedado obsoleto',
    'LBL_SCAN_572_TITLE' => 'Existe un conflicto de nombre con un archivo personalizado',
    'LBL_SCAN_573_TITLE' => 'Existe un conflicto de nombre con un archivo personalizado de ayuda',
    'LBL_SCAN_574_TITLE' => 'Hay personalizaciones en el subpanel de Correos electrónicos',
    'LBL_SCAN_575_TITLE' => 'Hay personalizaciones en subpanel de Contactos en Correos Electrónicos',
    'LBL_SCAN_576_TITLE' => 'Personalizaciones de apariencia detectadas',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => 'Sentencias prohibidas detectadas',
    'LBL_SCAN_586_TITLE' => 'Se detectó uso obsoleto de FontAwesome',

    'LBL_SCAN_901_TITLE' => 'Instancia ya actualizada a Sugar 7',
    'LBL_SCAN_903_TITLE' => 'Versión no soportada por el actualizador.',
    'LBL_SCAN_904_TITLE' => 'Valores NULOS encontrados en las cadenas de la lista de módulos',
    'LBL_SCAN_999_TITLE' => 'Falla desconocida, por favor contacte a soporte',

    'LBL_SCAN_101_DESCR' => 'Se detectaron personalizaciones de estudio en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones pueden ser mejoradas a Sugar7.',
    'LBL_SCAN_102_DESCR' => 'Se detectaron personalizaciones de estudio en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones pueden ser mejoradas a Sugar7.',
    'LBL_SCAN_103_DESCR' => 'Se detectaron personalizaciones de estudio en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones pueden ser mejoradas a Sugar7.',
    'LBL_SCAN_104_DESCR' => 'Se detectaron personalizaciones de estudio en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones pueden ser mejoradas a Sugar7.',
    'LBL_SCAN_105_DESCR' => 'Se detectaron personalizaciones de estudio en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones pueden ser mejoradas a Sugar7.',

    'LBL_SCAN_201_DESCR' => 'Se detectaron personalizaciones de estudio en su instancia. No anticipamos ningún problema con esta personalización y sus personalizaciones pueden ser mejoradas a Sugar7.',

    'LBL_SCAN_301_DESCR' => 'Ciertas personalizaciones fueron detectadas y no fueron emigradas a Sugar7. Este módulo (%s) seguirá estando disponible pero será ejecutado en Modo de Compatibilidad Atrasado en Sugar7.',
    'LBL_SCAN_302_DESCR' => 'Vistas de archivos desconocidos fueron migrados a Sugar7.  Este módulo (%s) seguirá estando disponible pero será ejecutado en Modo de Compatibilidad Atrasado en Sugar7. ',
    'LBL_SCAN_303_DESCR' => 'Se detectaron archivos de formulario No Vacíos y no se migraron a Sugar7. Este módulo (%s) seguirá estando disponible pero será ejecutado en Modo de Compatibilidad Atrasado en Sugar7. ',
    'LBL_SCAN_304_DESCR' => 'Archivos desconocidos (%s%s) fueron detectados y no fueron migrados a Sugar7. Este módulo (%s) seguirá estando disponible pero será ejecutado en Modo de Compatibilidad Atrasado en Sugar7. ',
    'LBL_SCAN_305_DESCR' => 'Vardefs erróneos (%s: %s) fueron detectados en el módulo %s y no se migraron a Sugar7.  Esta personalización seguirá disponible, pero se ejecutará en Modo de Compatibilidad Atrasada en Sugar7. ',
    'LBL_SCAN_306_DESCR' => 'Vardefs erróneos fueron detectados en el módulo y no se migraron a Sugar7. El campo relacionado (%s) en el módulo %s tiene un `módulo` vacío). Esta personalización seguirá disponible, pero se ejecutará en Modo de Compatibilidad Atrasada en Sugar7. ',
    'LBL_SCAN_307_DESCR' => 'Vardefs malos fueron detectados y no fueron migrados a Sugar7. El vínculo (%s) en el módulo  %s se refiere a la relación inválida. Esta personalización seguirá estando disponible pero se ejecutará en Modo de Compatibilidad Atrasada en Sugar7. ',
    'LBL_SCAN_308_DESCR' => 'Ciertas personalizaciones fueron descubiertas y no se emigraron a Sugar7. Este módulo (%s) seguirá estando disponible pero pero se ejecutará en Modo de Compatibilidad Atrasada en Sugar7. ',
    'LBL_SCAN_309_DESCR' => 'Un md5 hash para %s no concuerda con el archivo de cuadros. Este archivo pudo haber sido modificado y no se actualizará para Sugar7',
    'LBL_SCAN_310_DESCR' => 'Se detectaron archivos de vista desconocida (%s) y no fueron emigrados a Sugar7. Este módulo (%s) seguirá estando disponible pero se ejecutará en Modo de Compatibilidad Atrasada en Sugar7.',
    'LBL_SCAN_311_DESCR' => 'Ciertas personalizaciones fueron descubiertas y no se emigraron a Sugar7. Este módulo (%s) seguirá estando disponible pero pero se ejecutará en Modo de Compatibilidad Atrasada en Sugar7. ',
    'LBL_SCAN_312_DESCR' => 'Vardefs erróneos se detectaron y no se migraron a Sugar7. Vardefs erróneos: el tipo de campo &#39;nombre&#39; no es válido &#39;%s&#39; para el módulo &#39;%s&#39;.  Esta personalización seguirá disponible, pero se ejecutará en Modo de Compatibilidad Atrasada en Sugar7. ',
    'LBL_SCAN_313_DESCR' => 'El directorio Extensiones se detectó - %s no es un módulo Creador de Módulos. Este módulo seguirá estando disponible, pero sólo en el Modo de Compatibilidad Atrasada.',

    'LBL_SCAN_401_DESCR' => 'El archivo personalizado incluye un archivo que ha sido movido al directorio del proveedor. Hemos intentado tomar la acción correctiva y ninguna acción adicional es necesaria. ',
    'LBL_SCAN_402_DESCR' => 'Módulo erróneo %s - no en beanList y no en filesystem',
    'LBL_SCAN_403_DESCR' => 'Algunos de los archivos Sugar han cambiado su ubicación en Sugar 7. Se deben corregir sus rutas predefinidas.',
    'LBL_SCAN_520_DESCR' => 'Este logic hook ya no essoportado en Sugar 7',
    'LBL_SCAN_521_DESCR' => 'Este logic hook ya no essoportado en Sugar 7',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'El módulo Stock de Sugar tiene vistas personalizadas en custom/modules/%s/views no soportadas. Estos archivos de vistas personalizadas se moverán a un directorio Inhabilitado durante la actualización',
    'LBL_SCAN_407_DESCR' => 'El módulo Stock de Sugar tiene vistas personalizadas en modules/%s/views. Estos archivos de vistas personalizadas se moverán a un directorio Inhabilitado durante la actualización',
    'LBL_SCAN_408_DESCR' => 'Los componentes personalizados de creación de acciones se encontraron en %s. Estos componentes se copiarán y modificarán para extender en su lugar el componente de creación durante la actualización',
    'LBL_SCAN_409_DESCR' => 'El atributo "link_file" en los vardefs ha quedado obsoleto. La clase del enlace debe ser autodescargable',
    'LBL_SCAN_519_DESCR' => 'El módulo Stock de Sugar tiene una de las extensiones que no es soportada para la actualización, como enrutamiento personalizado, control de acceso, Javascript, etc.',
    'LBL_SCAN_518_DESCR' => 'Los vardefs incluyen las definiciones de customCode de usuario que no sabemos cómo convertir',
    'LBL_SCAN_410_DESCR' => 'Demasiados campos en la vista',
    'LBL_SCAN_522_DESCR' => 'Los datos de subpanel son traídos por una función, por el momento no soportamos actualización.',
    'LBL_SCAN_412_DESCR' => 'El subpanel se refiere a un vínculo que no existe o que no está correctamente definido',
    'LBL_SCAN_413_DESCR' => 'El campo se refiere a una clase de widget que no tiene un archivo de la clase widget correspondiente',
    'LBL_SCAN_414_DESCR' => 'Campos desconocidos manejados por CRYS-36, no hay más por verificar',
    'LBL_SCAN_415_DESCR' => 'Logic Hook se refiere a un archivo que no existe',
    'LBL_SCAN_523_DESCR' => 'El archivo viejo de logic hook usa por referencia el pase de parámetro, que puede llevar a mensajes de error (y así estropear el RESTO)',
    'LBL_SCAN_417_DESCR' => 'Módulo Feeds o iFrames detectado, el cual no debería existir más',
    'LBL_SCAN_418_DESCR' => 'Subpanel se refiere a un módulo que no existe',
    'LBL_SCAN_419_DESCR' => 'La clave Vardef no corresponde al nombre de vardef',
    'LBL_SCAN_420_DESCR' => 'Vardef contiene campos relacionados en referencia a la relación que no pueden ser cargados correctamente',
    'LBL_SCAN_421_DESCR' => 'Vardef contiene un campo de vínculo que no puede ser cargado correctamente',
    'LBL_SCAN_422_DESCR' => 'El módulo %s tiene la definición de otro módulo  %s  en el archivo  %s',
    'LBL_SCAN_525_DESCR' => 'Vardef define enum como resultado de la función de HTML, que no está soportado por Sugar7',
    'LBL_SCAN_423_DESCR' => 'Vardef se define como campos compuestos que contienen subcampos, y uno de estos subcampos realmente no existe',
    'LBL_SCAN_424_DESCR' => 'El archivo contiene HTML en fila',
    'LBL_SCAN_425_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_426_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_427_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_428_DESCR' => 'El código contiene esta función de salida. No se permite print_r(..., true).',
    'LBL_SCAN_429_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_430_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_431_DESCR' => 'Se convertirá para ajustarse a la sintaxis de Smarty3',
    'LBL_SCAN_436_DESCR' => 'Se convertirá para ajustarse a la sintaxis de Smarty3',
    'LBL_SCAN_437_DESCR' => 'Existe sintaxis presente en el archivo .tpl que no se puede convertir para que sea compatible con Smarty3. Corríjalo manualmente para actualizar la instancia.',
    'LBL_SCAN_438_DESCR' => 'No se puede convertir la plantilla de PDF para se ajuste a la sintaxis de Smarty 3. Corríjalo manualmente para actualizar la instancia.',
    'LBL_SCAN_439_DESCR' => 'Hay sintaxis presente en el archivo .tpl que no se puede convertir para que sea compatible con Smarty3. Se omitió. Si es una plantilla válida de Smarty, corríjala manualmente.',
    'LBL_SCAN_451_DESCR' => 'Se ha eliminado el código de AuthN, utilice \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate en su lugar',
    'LBL_SCAN_524_DESCR' => 'El campo se define como función de producción HTML y no se puede autoconvertir (sabemos cómo convertir algunos campos de origen como correos electrónicos y moneda)',
    'LBL_SCAN_432_DESCR' => 'Campo &#39;nombre&#39; tiene un tipo distinto de nombre, fullname, varchar o id',
    'LBL_SCAN_433_DESCR' => 'Archivos personalizados de búsqueda elástica encontrados %s',
    'LBL_SCAN_434_DESCR' => 'Se ha encontrado el uso de funciones de array en $_SESSION en los archivos: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, este código se migrará mediante comandos de actualización',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, este código se migrará mediante comandos de actualización',

    'LBL_SCAN_501_DESCR' => 'Uno de los archivos principales no está presente en la instancia',
    'LBL_SCAN_502_DESCR' => 'Uno de los archivos principales se ha modificado en esta instalación',
    'LBL_SCAN_503_DESCR' => 'El módulo personalizado tiene el mismo nombre que uno de los nuevos módulos de Sugar',
    'LBL_SCAN_504_DESCR' => 'La definición del campo Vardef omite el tipo',
    'LBL_SCAN_505_DESCR' => 'Un tipo de campo no-blob está cambiado a un tipo de campo blob. Esto no está permitido porque los tipos de blob no pueden ser indexados y puede que tengamos filtros que dependan de que este campo sea indexado.',
    'LBL_SCAN_506_DESCR' => '$this es usado en el archivo metadata. Debido a que el archivo metadata es cargado en un contexto diferente en Sugar 7, podría fallar.',
    'LBL_SCAN_507_DESCR' => 'Vardef se define como campos compuestos que contienen subcampos, y uno de estos subcampos realmente no existe',
    'LBL_SCAN_508_DESCR' => 'El archivo contiene HTML en fila',
    'LBL_SCAN_509_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_510_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_511_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_512_DESCR' => 'El código contiene esta función de salida. No se permite print_r(..., true).',
    'LBL_SCAN_513_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_514_DESCR' => 'El código contiene esta función de salida',
    'LBL_SCAN_515_DESCR' => 'La verificación de script ha fallado, significa que el instaScannerMeta.phpnce probablemente contiene un código PHP erróneo que el script intenta de cargar.',
    'LBL_SCAN_517_DESCR' => 'Se detectó paquete que se bloqueó al no ser compatible con Sugar 7',
    'LBL_SCAN_526_DESCR' => "Esta Lista contiene valores de Nombre de Artículos que evitan la actualización.",
    'LBL_SCAN_528_DESCR' => 'Campo de Cita/Fecha de Cita/Tiempo con valor incorrecto display_default como -ninguno-',
    'LBL_SCAN_529_DESCR' => 'Los errores PHP pueden ser provocados por el intérprete cuando se encuentran algunos problemas de códigos php-syntax o de tiempo de ejecución.',
    'LBL_SCAN_530_DESCR' => 'Uno de los archivos no está presente en la instancia, pero es usado por el código personalizado.',
    'LBL_SCAN_531_DESCR' => 'El controlador de la base de datos %s está obsoleto. Utilice %s en su lugar.',
    'LBL_SCAN_532_DESCR' => 'Una clase declarada en %s llama al constructor de principal de stock %s::%s()',
    'LBL_SCAN_533_DESCR' => 'Una clase declarada en %s llama al constructor de principal personalizado %s::%s()',
    'LBL_SCAN_534_DESCR' => 'El controlador de la base de datos %s ya no es compatible. Utilice %s en su lugar.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => 'Se detectaron paquetes que se bloquearon debido a su incompatibilidad con la versión de Sugar de destino. Será necesario desintalar Y eliminar estos paquetes antes de realizar la actualización. Tenga en cuenta que al desinstalar estos paquetes se eliminarán las tablas y datos generados por el paquete y el uso de los módulos del paquete.',
    'LBL_SCAN_541_DESCR' => 'Se descubrieron datos en las tablas de Gestión de Procesos que no son deserializables o convertibles',
    'LBL_SCAN_542_DESCR' => 'Invalid fields have been found in your Process Management Business Rules and/or Actions. These fields must be removed from Business Rules and/or Actions in order to upgrade.',
    'LBL_SCAN_545_DESCR' => 'Un campo de grupo está parcialmente bloqueado en una definición de proceso. Estos campos deben ser desbloqueados en la definición del proceso para continuar con la actualización.',
    'LBL_SCAN_546_DESCR' => 'No se puede migrar una configuración TinyMCE personalizada en el módulo de la base de conocimientos. '
        . 'El parámetro "tinyConfig" en el archivo %s se vaciará. '
        . 'Si tiene alguna personalización de TinyMCE allí, deberá guardarla antes de realizar la actualización '
        . 'y añadirla manualmente después de realizar la actualización.',
    'LBL_SCAN_547_DESCR' => 'Uso de firma eliminada `resetLoadFlag` en %s',
    'LBL_SCAN_548_DESCR' => 'Uso de método obsoleto &#39;initButtons&#39; en %s',
    'LBL_SCAN_549_DESCR' => 'Uso de firma eliminada `getField` en %s',
    'LBL_SCAN_552_DESCR' => 'Uso de los API Undescore removidos de Sidecar en %s',
    'LBL_SCAN_553_DESCR' => 'Uso de los API Bean removidos de Sidecar en %s',
    'LBL_SCAN_554_DESCR' => 'El controlador de Sidecar %s se extiende del controlador Sidecar removido',

    'LBL_SCAN_901_DESCR' => 'Instancia ya actualizada a Sugar 7',
    'LBL_SCAN_903_DESCR' => 'Versión de actualizador no soportada. Por favor instale el paquete SugarUpgradeWizardPrereq que corresponda',
    'LBL_SCAN_904_DESCR' => 'Archivo: %s, Módulos: %s',
    'LBL_SCAN_999_DESCR' => 'Falla desconocida, por favor contacte a soporte',

    'LBL_SCAN_577_TITLE' => 'Ordenación de la base de datos no compatible',
    'LBL_SCAN_577_LOG' => "La ordenación '%s' es incompatible con el conjunto de caracteres '%s'",
    'LBL_SCAN_577_DESCR' => "Escoja una ordenación distinta en sus ajustes locales, o elimine la configuración 'dbconfigoption.collation' para usar la ordenación predeterminada.",

    'LBL_SCAN_578_TITLE' => 'No se ha podido eliminar la tabla de la base de datos temporal: %s',
    'LBL_SCAN_578_LOG' => 'No se ha podido eliminar la tabla de la base de datos temporal: %s',
    'LBL_SCAN_578_DESCR' => 'No se ha podido borrar la tabla temporal creada para comprobar la conversión del conjunto de caracteres durante la actualización, y deberá borrarse manualmente',

    'LBL_SCAN_579_TITLE' => 'No se ha podido realizar la conversión de conjunto de caracteres/ordenación: (%s) en la tabla: %s',
    'LBL_SCAN_579_LOG' => 'No se ha podido realizar la conversión de conjunto de caracteres/ordenación: (%s) en la tabla: %s',
);
