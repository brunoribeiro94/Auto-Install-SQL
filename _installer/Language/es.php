<?php

// Español - Beta

define('LOGO', <<<EOF
<a style="background-image:url('%s');" href="%s" tabindex="-1">%s</a>
EOF
);

/*
* Steps
*/
define('STEP1_TITLETAG', '%s &rsaquo; Instalación del archivo de configuración');
define('STEP1_TITLE', 'Welcome to %s. Before getting started, we need some information on the database. You will need to know the following items before proceeding.');
define('STEP1_LIST1', 'Nombre de la base');
define('STEP1_LIST2', 'Nombre de usuario de base de datos');
define('STEP1_LIST3', 'Contraseña de base de datos');
define('STEP1_LIST4', 'Base de datos de host');
define('STEP1_TEXT1', 'Vamos a utilizar esta información para crear un <code>%s</code>. Si por alguna razón esta creación automática de archivos no funciona, no se preocupe. Todo esto hace es rellenar la información de base de datos a un archivo de configuración. Usted puede también simplemente abra <code>%s</code> en un editor de texto, complete su información, y guardarlo como <code>%s</code>.');
define('STEP1_TEXT2', 'Con toda probabilidad, estos elementos fueron suministrados a usted por su servicio de alojamiento web. Si no tiene esta información, entonces usted tendrá que ponerse en contacto con ellos antes de poder continuar. Si ya está todo listo ...');
define('STEP1_BUTTOM', 'Vamonos!');
define('STEP2_TITLE', 'Bienvenido a %s. Antes de empezar, necesitamos un poco de información sobre la base de datos. Usted tendrá que saber los siguientes elementos antes de continuar.');
define('STEP2_TEXT1', 'A continuación deberá introducir los detalles de conexión de base de datos. Si no está seguro acerca de esto, póngase en contacto con su proveedor de alojamiento.');
define('STEP2_LIST1', 'Nombre de la base');
define('STEP2_DLIST1', 'El nombre de la base de datos que desea ejecutar en %s.');
define('STEP2_LIST2', 'Nombre de Usuario');
define('STEP2_DLIST2', 'Su nombre de usuario MySQL');
define('STEP2_LIST3', 'Contraseña');
define('STEP2_DLIST3', '&hellip;y la contraseña de MySQL.');
define('STEP2_LIST4', 'Base de datos del host');
define('STEP2_DLIST4', 'Usted debe ser capaz de obtener esta información de su proveedor de alojamiento web, si <code>localhost</code> no funciona.');
define('STEP2_BUTTOM', 'Enviar');

// sucess
define('SUCCESS_TEXT', 'Muy bien, vivaracho! Usted lo ha hecho a través de esta parte de la instalación. %s puede ahora comunicarse con su base de datos. Si usted está listo, el tiempo ahora a & hellip;');
define('SUCCESS_BUTTOM', 'Ejecute la instalación');
/**
* Erros
*/
// unknown error
define('ERROUNKNOW_TEXT1', 'Lo siento, pero no puedo escribir la <code>%s</code>.');
define('ERROUNKNOW_TEXT2', 'Puede crear el <code>% s </ code> manualmente y pegue el texto siguiente en él.');
define('ERROUNKNOW_TEXT3', 'Después de que hayas hecho esto, haga clic em "Ejecutar la instalación."');

// connection error
define('ERRO_CONNETION_TEXT1', 'Error al establecer una conexión de base de datos');
define('ERRO_CONNETION_TEXT2', "Esto tampoco significa que el nombre de usuario y contraseña en su <code>%s</ code> es incorrecta o no puede comunicarse con el servidor de base de datos en <code> localhost </ code>. Esto podría significar que el servidor de base de datos de su servidor está caído.");
define('ERRO_CONNETION_TEXT3', '¿Estás seguro de que tiene el nombre de usuario y la contraseña correctos?');
define('ERRO_CONNETION_TEXT4', '¿Seguro de que ha escrito el nombre de host correcto?');
define('ERRO_CONNETION_TEXT5', '¿Estas seguro que se ejecuta el servidor de base de datos?');
define('ERRO_CONNETION_TEXT6', "Si no estás seguro de lo que significan estos términos probablemente debería ponerse en contacto con su proveedor de alojamiento.");
define('ERRO_CONNETION_BUTTOM', 'Inténtalo de nuevo');
