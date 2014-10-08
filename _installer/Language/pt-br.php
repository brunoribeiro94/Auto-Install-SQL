<?php

// Português Brasil

define('LOGO', <<<EOF
        <a style="background-image:url('%s');" href="%s" tabindex="-1">%s</a>
EOF
);

/*
 * Steps
 */
define('STEP1_TITLETAG', '%s &rsaquo; Arquivo de Configuração da Instalação');
define('STEP1_TITLE', 'Bem-vindo ao %s. Antes de começar, precisamos de algumas informações sobre o banco de dados. Você precisa conhecer o valor dos seguintes items antes de continuar.');
define('STEP1_LIST1', 'Nome do Banco de Dados');
define('STEP1_LIST2', 'Nome de Usuário do Banco de Dados');
define('STEP1_LIST3', 'Senha do Banco de Dados');
define('STEP1_LIST4', 'Sevidor do Banco de Dados');
define('STEP1_TEXT1', 'Nós vamos usar essas informações para criar um arquivo <code>%s</code>.	<strong>Se por acaso, esta criação automática de arquivo não funcionar, não se preocupe. Tudo o que ele faz é preencher as informações do banco de dados em um arquivo de configuração. Você também pode simplesmente abrir <code>%s</code> num editor de texto, preencher suas informações e salvá-lo como <code>%s</code>.');
define('STEP1_TEXT2', 'Provavelmente esses itens foram fornecidos pelo seu servidor de hospedagem. Se não tiver essa informação, então você precisa entrar em contato com eles antes de continuar. Se estiver pronto...');
define('STEP1_BUTTOM', 'Vamos lá!');

define('STEP2_TITLE', 'Bem-vindo ao %s. Antes de começar, precisamos de algumas informações sobre o banco de dados. Você precisa conhecer o valor dos seguintes items antes de continuar.');
define('STEP2_TEXT1', 'Abaixo você deve digitar suas informações de conexão com o banco de dados. Se você não tem certeza quais são, contate sua hospedagem.');

define('STEP2_LIST1', 'Nome do Banco de Dados');
define('STEP2_DLIST1', 'Nome do banco de dados onde você quer instalar o %s.');

define('STEP2_LIST2', 'Nome de usuário');
define('STEP2_DLIST2', 'Usuário de MySQL');

define('STEP2_LIST3', 'Senha');
define('STEP2_DLIST3', '&hellip;e sua senha do MySQL.');


define('STEP2_LIST4', 'Servidor da banco de dados');
define('STEP2_DLIST4', 'Você deve obter esta informação do seu servidor de hospedagem, se <code>localhost</code> não funcionar.');

define('STEP2_BUTTOM', 'Enviar');

// sucess

define('SUCCESS_TEXT', 'Muito bem! Você concluiu esta parte da instalação. Agora o %s pode se comunicar com seu banco de dados. Se você estiver pronto, é hora de&hellip;');
define('SUCCESS_BUTTOM', 'Instalar');

/**
 * Erros
 */
// unknown error
define('ERROUNKNOW_TEXT1', 'Não foi possível gravar o arquivo <code>%s</code>.');
define('ERROUNKNOW_TEXT2', 'Você pode criar o arquivo <code>%s</code> manualmente e colar o seguinte texto nele.');
define('ERROUNKNOW_TEXT3', 'Depois de concluir clique em &#8220;Instalar&#8221;.');

// connection error
define('ERRO_CONNETION_TEXT1', 'Erro ao estabelecer conexão com o banco de dados');
define('ERRO_CONNETION_TEXT2', 'Isto tanto pode significar que as informações de nome de usuário e senha em seu arquivo <code>$s</code> estão incorretas ou que não pudemos contactar o servidor do banco de dados em <code>localhost</code>. Isto pode significar que o servidor de hospedagem do seu banco de dados está fora do ar.');
define('ERRO_CONNETION_TEXT3', 'Você tem certeza que possui o nome de usuário e senha corretos?');
define('ERRO_CONNETION_TEXT4', 'Você tem certeza que digitou corretamente o nome do servidor de hospedagem?');
define('ERRO_CONNETION_TEXT5', 'Você tem certeza que o servidor do banco de dados está funcionando?');
define('ERRO_CONNETION_TEXT6', 'Se você não tem certeza do que esses termos significam, provavelmente você deveria contactar seu servidor de hospedagem.');
define('ERRO_CONNETION_BUTTOM', 'Tente novamente');
