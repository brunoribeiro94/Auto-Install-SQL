<?php

// Español - Beta

define('LOGO', <<<EOF
<a style="background-image:url('%s');" href="%s" tabindex="-1">%s</a>
EOF
);

// finish

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
