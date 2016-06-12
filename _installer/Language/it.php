<?php

// Italiano

define('LOGO', <<<EOF
<a style="background-image:url('%s');" href="%s" tabindex="-1">%s</a>
EOF
);


/*
* Steps
*/
define('STEP1_TITLETAG', '%s &rsaquo; Installazione del file di configurazione');
define('STEP1_TITLE', 'Benvenuti ao %s. Prima di iniziare, abbiamo bisogno di alcune informazioni sul database. È necessario conoscere il valore dei seguenti elementi prima di procedere.');
define('STEP1_LIST1', 'Nome del database');
define('STEP1_LIST2', 'Nome utente database');
define('STEP1_LIST3', 'Database delle password');
define('STEP1_LIST4', 'Server di database');
define('STEP1_TEXT1', 'Useremo queste informazioni per creare un file <code>%s</code>. <strong>Se per caso, la creazione automatica dei file non funziona, non ti preoccupare. Tutto quello che fa è inserire le informazioni dal database in un file di configurazione. È anche possible aprire semplicemente <code>%s</code> in un editor di testo, inserire le informazioni e salvarlo come <code>%s</code>.');
define('STEP1_TEXT2', 'Probabilmente questi elementi sono stati forniti dal vostro server di hosting. Se non si dispone di queste informazioni, allora avete bisogno di contattarli prima di continuare. Se sei pronto ...');
define('STEP1_BUTTOM', 'Venire!');
define('STEP2_TITLE', 'Benvenuti ao %s. Prima di iniziare, abbiamo bisogno di alcune informazioni sul database. È necessario conoscere il valore dei seguenti elementi prima di procedere.');
define('STEP2_TEXT1', 'Qui di seguito è necessario immettere le informazioni di connessione al database. Se non siete sicuri di quello che sono, contattare il provider di hosting.');
define('STEP2_LIST1', 'Nome del database');
define('STEP2_DLIST1', 'Nome del database in cui si desidera installare %s.');
define('STEP2_LIST2', 'Nome utente');
define('STEP2_DLIST2', 'MySQL User');
define('STEP2_LIST3', 'Password');
define('STEP2_DLIST3', '&hellip, e la tua password MySQL.');
define('STEP2_LIST4', 'Il server di database');
define('STEP2_DLIST4', 'Si dovrebbe ottenere queste informazioni dal vostro server di hosting, se <code>localhost</code> non funziona.');
define('STEP2_BUTTOM', 'Inviare');

// sucess
define('SUCCESS_TEXT', "Ottimo! Avete completato questa parte dell'installazione. Ora %s può comunicare con loro database. Se sei pronto, è il momento di &hellip;");
define('SUCCESS_BUTTOM', 'Installare');

/**
* Erros
*/
// unknown error
define('ERROUNKNOW_TEXT1', 'Impossibile scrivere il file <code>%s</code>.');
define('ERROUNKNOW_TEXT2', 'È possible creare il file <code>%s</code> manualmente e incollare il seguente testo su di esso.');
define('ERROUNKNOW_TEXT3', 'Dopo aver completato click &#8220;Installare&#8221;.');

// connection error
define('ERRO_CONNETION_TEXT1', 'Errore durante la connessione al database');
define('ERRO_CONNETION_TEXT2', 'Potrebbe significare che le informazioni di nome utente e password in vostro <code>%s </code> non sono corrette o che non si riesce a contattare il server di database in <code>localhost</code> . Ciò può significare che il server che ospita il database è giù.');
define('ERRO_CONNETION_TEXT3', 'Sei sicuro di aver il nome utente e la password corretti?');
define('ERRO_CONNETION_TEXT4', 'Sei sicuro di aver digitato il nome del server di hosting?');
define('ERRO_CONNETION_TEXT5', 'Sei sicuro che il server database sia in esecuzione?');
define('ERRO_CONNETION_TEXT6', 'Se non siete sicuri che cosa significano questi termini probabilmente si dovrebbe contattare il proprio server di hosting.');
define('ERRO_CONNETION_BUTTOM', 'Riprova');
