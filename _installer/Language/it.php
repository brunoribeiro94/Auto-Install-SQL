<?php

// Italiano

define('LOGO', <<<EOF
<a style="background-image:url('%s');" href="%s" tabindex="-1">%s</a>
EOF
);

// sucess
define('SUCCESS_TEXT', "Ottimo! Avete completato questa parte dell'installazione. Ora %s può comunicare con loro database. Se sei pronto, è il momento di &hellip;");
define('SUCCESS_BUTTOM', 'Installare');

/**
* Erros
*/
// unknown error
define('ERROUNKNOW_TEXT1', 'Impossibile scrivere il file <code>%s</code>.');
define('ERROUNKNOW_TEXT2', 'È possibile creare il file <code>%s</code> manualmente e incollare il seguente testo su di esso.');
define('ERROUNKNOW_TEXT3', 'Dopo aver completato click &#8220;Installare&#8221;.');

// connection error
define('ERRO_CONNETION_TEXT1', 'Errore durante la connessione al database');
define('ERRO_CONNETION_TEXT2', 'Potrebbe significare che le informazioni di nome utente e password in vostro <code>%s </code> non sono corrette o che non si riesce a contattare il server di database in <code>localhost</code> . Ciò può significare che il server che ospita il database è giù.');
define('ERRO_CONNETION_TEXT3', 'Sei sicuro di aver il nome utente e la password corretti?');
define('ERRO_CONNETION_TEXT4', 'Sei sicuro di aver digitato il nome del server di hosting?');
define('ERRO_CONNETION_TEXT5', 'Sei sicuro che il server database sia in esecuzione?');
define('ERRO_CONNETION_TEXT6', 'Se non siete sicuri che cosa significano questi termini probabilmente si dovrebbe contattare il proprio server di hosting.');
define('ERRO_CONNETION_BUTTOM', 'Riprova');
