<?php
// Русский - Beta
define('LOGO', <<<EOF
<a style="background-image:url('%s');" href="%s" tabindex="-1">%s</a>
EOF
);

// sucess
define('SUCCESS_TEXT', 'Очень хорошо! Вы завершили эту часть установки. Теперь %s может общаться с их базы данных. Если вы готовы, пора&hellip;');
define('SUCCESS_BUTTOM', 'Установите');
/**
* Erros
*/
// unknown error
define('ERROUNKNOW_TEXT1', 'Не удалось записать файл <code>%s</code>.');
define('ERROUNKNOW_TEXT2', 'Вы можете создать файл <code>%s</code> вручную и вставьте следующий текст на нем.');
define('ERROUNKNOW_TEXT3', 'После завершения нажмите кнопку &#8220;Установить&#8221;.');
// connection error
define('ERRO_CONNETION_TEXT1', 'Ошибка подключения к базе данных');
define('ERRO_CONNETION_TEXT2', 'Это может означать, что информация, имени пользователя и пароля в файле <code>%s</code> неправильно или мы не можем связаться с сервером базы данных в <code>localhost</code>. Это может означать, что ваш хостинг-сервер базы данных не работает.');
define('ERRO_CONNETION_TEXT3', 'Вы уверены, что вы имя пользователя и пароль правильно?');
define('ERRO_CONNETION_TEXT4', 'Вы уверены, что набрали имя хостинг-сервер?');
define('ERRO_CONNETION_TEXT5', 'Вы уверены, что сервер базы данных запущен?');
define('ERRO_CONNETION_TEXT6', 'Если вы не уверены, что означают эти термины, которые вы, вероятно, следует связаться с хостинг-сервере.');
define('ERRO_CONNETION_BUTTOM', 'попробуй еще раз');
