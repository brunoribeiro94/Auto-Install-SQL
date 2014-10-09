<?php

// English
define('LOGO', <<<EOF
<a style="background-image:url('%s');" href="%s" tabindex="-1">%s</a>
EOF

/*
* Steps
*/
define('STEP1_TITLETAG', '%s &rsaquo; Configuration File Installation');
define('STEP1_TITLE', 'Welcome to %s. Before getting started, we need some information on the database. You will need to know the following items before proceeding.');
define('STEP1_LIST1', 'Database name');
define('STEP1_LIST2', 'Database username');
define('STEP1_LIST3', 'Database password');
define('STEP1_LIST4', 'Database host');
define('STEP1_TEXT1', 'We’re going to use this information to create a <code>%s</code>. <strong>	If for any reason this automatic file creation doesn’t work, don’t worry. All this does is fill in the database information to a configuration file. You may also simply open <code>%s</code> in a text editor, fill in your information, and save it as <code>%s</code>.');
define('STEP1_TEXT2', 'In all likelihood, these items were supplied to you by your Web Host. If you do not have this information, then you will need to contact them before you can continue. If you’re all ready…');
define('STEP1_BUTTOM', 'Let’s go!');
define('STEP2_TITLE', 'Welcome to %s. Before getting started, we need some information on the database. You will need to know the following items before proceeding.');
define('STEP2_TEXT1', 'Below you should enter your database connection details. If you’re not sure about these, contact your host.');
define('STEP2_LIST1', 'Database Name');
define('STEP2_DLIST1', 'The name of the database you want to run %s in.');
define('STEP2_LIST2', 'User Name');
define('STEP2_DLIST2', 'Your MySQL username');
define('STEP2_LIST3', 'Password');
define('STEP2_DLIST3', '&hellip;and your MySQL password.');
define('STEP2_LIST4', 'Database Host');
define('STEP2_DLIST4', 'You should be able to get this info from your web host, if <code>localhost</code> does not work.');
define('STEP2_BUTTOM', 'Submit');

// connection error
define('ERRO_CONNETION_TEXT1', 'Error establishing a database connection');
define('ERRO_CONNETION_TEXT2', "This either means that the username and password information in your <code>%s</code> file is incorrect or we can't contact the database server at <code>localhost</code>. This could mean your host's database server is down.");
define('ERRO_CONNETION_TEXT3', 'Are you sure you have the correct username and password?');
define('ERRO_CONNETION_TEXT4', 'Are you sure that you have typed the correct hostname?');
define('ERRO_CONNETION_TEXT5', 'Are you sure that the database server is running?');
define('ERRO_CONNETION_TEXT6', "If you're unsure what these terms mean you should probably contact your host.");
define('ERRO_CONNETION_BUTTOM', 'Try again');
