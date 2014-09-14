<?php

/**
 * HTMLs configuration pages
 * @author Bruno Ribeiro <bruno.espertinho@gmail.com>
 * @version 1
 * @access public
 * @package Config
 * @todo Improve the customization of the configuration file
 * */
class setup_config_html {

    /**
     * file config required for start the website
     * Note: at the time of verification and creating the configuration file, is always 
     * in the root folder, then the file is in a folder specify as follows: "config/config.inc.php"
     * @var string 
     */
    public $file = 'config/config.inc.php';

    /**
     * Name your project
     * @var str 
     */
    var $name = 'Example';

    /**
     * link your project
     * @var str 
     */
    var $link = 'http://example.com';

    /**
     * logo your project
     * @var str 
     */
    var $logo = 'images/w-logo-blue.png';

    /**
     * Here is the main configuration file of your application.
     * Note: replace special characters that makes conflict with the EOFPAGE 
     * if the character in question does not exist, add it to 
     * the array $ASCI_table_replace the file setup-config.php
     * @access protected
     * @param array $POST
     * @return HTML
     */
    protected function FILE_GENERATE($POST) {
        $year = date('Y');
        return <<<EOFPAGE
&#60;?php
/**
 * Arquivo de configura&#231;&#227;o {$this->name}
 *
 * Voc&#234; pode alterar aqui informa&#231;&#245;es de configura&#231;&#227;o
 * @author Bruno Ribeiro <bruno.espertinho&#64;gmail.com>
 * @copyright (c) {$year}, Bruno Ribeiro
 * @since 1.2
 */
# -----------------------------------------
# Bug fix erros de caracteres na header
# ----------------------------------------- 
ini_set('default_charset', 'UTF-8');

# -----------------------------------------
# Timezone
# -----------------------------------------
date_default_timezone_set('America/Maceio');

# -----------------------------------------
# Definindo o título da página
# -----------------------------------------
&#36;config['title'] = 'Controle de Estoque e Vendas';

# -----------------------------------------
# Definindo a lingua padrão da aplicação.
# -----------------------------------------
&#36;config['language'] = 'pt_BR';

# -----------------------------------------
# Habilitando e definindo o nome da pasta cache.
# -----------------------------------------
&#36;config['cache'] = true;

# -----------------------------------------
# Tempo que termina a seção.
# -----------------------------------------
&#36;config['expire_session'] = '1 hours';

# -----------------------------------------
# Moeda usada
# -----------------------------------------
&#36;config['moeda_simb'] = 'R&#36;';

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, type etc.
 *
 * database type
 * database host, usually it's "127.0.0.1" or "localhost", some servers also need port info, like "127.0.0.1:8080"
 * define('DB_HOST', '127.0.0.1');
 * name of the database. please note: database and database table are not the same thing!
 * define('DB_NAME', 'login');
 * user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT
 * By the way, it's bad style to use "root", but for development it will work
 * define('DB_USER', 'root');
 * The password of the above user
 * define('DB_PASS', 'xxx');
 */
define('DB_HOST', '{$POST['dbhost']}');
define('DB_NAME', '{$POST['dbname']}');
define('DB_USER', '{$POST['uname']}');
define('DB_PASS', '{$POST['pwd']}');
EOFPAGE;
    }

    /**
     * Create an HTML for step 1
     * @access protected
     * @return HTML
     */
    protected function HTML_Step1() {
        return <<<EOFPAGE
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$this->name} &rsaquo; Arquivo de Configuração da Instalação</title>
        <link rel='stylesheet' id='buttons-css' href='css/buttons.min.css?ver=4.0' type='text/css' media='all' />
        <link rel='stylesheet' id='open-sans-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0' type='text/css' media='all' />
        <link rel='stylesheet' id='install-css' href='css/install.min.css?ver=4.0' type='text/css' media='all' />
    </head>
    <body class="wp-core-ui">
        <h1 id="logo"><a style="background-image:url('{$this->logo}');" href="{$this->link}" tabindex="-1">{$this->name}</a></h1>

        <p>Bem-vindo ao {$this->name}. Antes de começar, precisamos de algumas informações sobre o banco de dados. Você precisa conhecer o valor dos seguintes items antes de continuar.</p>
        <ol>
            <li>Nome do Banco de Dados</li>
            <li>Nome de Usuário do Banco de Dados</li>
            <li>Senha do Banco de Dados</li>
            <li>Sevidor do Banco de Dados</li>
        </ol>
        <p>
            Nós vamos usar essas informações para criar um arquivo <code>{$this->file}</code>.	<strong>Se por acaso, esta criação automática de arquivo não funcionar, não se preocupe. Tudo o que ele faz é preencher as informações do banco de dados em um arquivo de configuração. Você também pode simplesmente abrir <code>{$this->file}</code> num editor de texto, preencher suas informações e salvá-lo como <code>{$this->file}</code>.</strong>
        </p>
        <p>Provavelmente esses itens foram fornecidos pelo seu servidor de hospedagem. Se não tiver essa informação, então você precisa entrar em contato com eles antes de continuar. Se estiver pronto...</p>

        <p class="step"><a href="setup-config.php?step=1" class="button button-large">Vamos lá!</a></p>
        <script type='text/javascript' src='js/jquery/jquery.js?ver=1.11.1'></script>
        <script type='text/javascript' src='js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='js/language-chooser.min.js?ver=4.0'></script>
    </body>
</html>
EOFPAGE;
    }

    /**
     * Create an HTML for step 2
     * @access protected
     * @return HTML
     */
    protected function HTML_Step2() {
        return <<<EOFPAGE
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$this->name} &rsaquo; Arquivo de Configuração da Instalação</title>
        <link rel='stylesheet' id='buttons-css'  href='css/buttons.min.css?ver=4.0' type='text/css' media='all' />
        <link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0' type='text/css' media='all' />
        <link rel='stylesheet' id='install-css'  href='css/install.min.css?ver=4.0' type='text/css' media='all' />
    </head>
    <body class="wp-core-ui">
        <h1 id="logo"><a style="background-image:url('{$this->logo}');" href="{$this->link}" tabindex="-1">{$this->name}</a></h1>
        <form method="post" action="setup-config.php?step=2">
            <p>Abaixo você deve digitar suas informações de conexão com o banco de dados. Se você não tem certeza quais são, contate sua hospedagem.</p>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="dbname">Nome do Banco de Dados</label></th>
                    <td><input name="dbname" id="dbname" type="text" size="25" value="database" /></td>
                    <td>Nome do banco de dados onde você quer instalar o WP.</td>
                </tr>
                <tr>
                    <th scope="row"><label for="uname">Nome de usuário</label></th>
                    <td><input name="uname" id="uname" type="text" size="25" value="usuario" /></td>
                    <td>Usuário de MySQL</td>
                </tr>
                <tr>
                    <th scope="row"><label for="pwd">Senha</label></th>
                    <td><input name="pwd" id="pwd" type="text" size="25" value="senha" autocomplete="off" /></td>
                    <td>&hellip;e sua senha do MySQL.</td>
                </tr>
                <tr>
                    <th scope="row"><label for="dbhost">Servidor da banco de dados</label></th>
                    <td><input name="dbhost" id="dbhost" type="text" size="25" value="localhost" /></td>
                    <td>Você deve obter esta informação do seu servidor de hospedagem, se <code>localhost</code> não funcionar.</td>
                </tr>
            </table>
            <p class="step"><input name="submit" type="submit" value="Enviar" class="button button-large" /></p>
        </form>
        <script type='text/javascript' src='js/jquery/jquery.js?ver=1.11.1'></script>
        <script type='text/javascript' src='js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='js/language-chooser.min.js?ver=4.0'></script>
    </body>
</html>
EOFPAGE;
    }

    /**
     * Create an HTML when it is not possible to connect to the database
     * @access protected
     * @return type
     */
    protected function HTML_Erro_Connection() {
        return <<<EOFPAGE
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Erro &rsaquo; {$this->name}</title>
        <style type="text/css">
            html {
                background: #f1f1f1;
            }
            body {
                background: #fff;
                color: #444;
                font-family: "Open Sans", sans-serif;
                margin: 2em auto;
                padding: 1em 2em;
                max-width: 700px;
                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
                box-shadow: 0 1px 3px rgba(0,0,0,0.13);
            }
            h1 {
                border-bottom: 1px solid #dadada;
                clear: both;
                color: #666;
                font: 24px "Open Sans", sans-serif;
                margin: 30px 0 0 0;
                padding: 0;
                padding-bottom: 7px;
            }
            #error-page {
                margin-top: 50px;
            }
            #error-page p {
                font-size: 14px;
                line-height: 1.5;
                margin: 25px 0 20px;
            }
            #error-page code {
                font-family: Consolas, Monaco, monospace;
            }
            ul li {
                margin-bottom: 10px;
                font-size: 14px ;
            }
            a {
                color: #21759B;
                text-decoration: none;
            }
            a:hover {
                color: #D54E21;
            }
            .button {
                background: #f7f7f7;
                border: 1px solid #cccccc;
                color: #555;
                display: inline-block;
                text-decoration: none;
                font-size: 13px;
                line-height: 26px;
                height: 28px;
                margin: 0;
                padding: 0 10px 1px;
                cursor: pointer;
                -webkit-border-radius: 3px;
                -webkit-appearance: none;
                border-radius: 3px;
                white-space: nowrap;
                -webkit-box-sizing: border-box;
                -moz-box-sizing:    border-box;
                box-sizing:         border-box;

                -webkit-box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
                box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
                vertical-align: top;
            }

            .button.button-large {
                height: 29px;
                line-height: 28px;
                padding: 0 12px;
            }

            .button:hover,
            .button:focus {
                background: #fafafa;
                border-color: #999;
                color: #222;
            }

            .button:focus  {
                -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.2);
                box-shadow: 1px 1px 1px rgba(0,0,0,.2);
            }

            .button:active {
                background: #eee;
                border-color: #999;
                color: #333;
                -webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
                box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
            }

        </style>
    </head>
    <body id="error-page">
        <p><h1>Erro ao estabelecer conexão com o banco de dados</h1>
            <p>Isto tanto pode significar que as informações de nome de usuário e senha em seu arquivo <code>{$this->file}</code> estão incorretas ou que não pudemos contactar o servidor do banco de dados em <code>localhost</code>. Isto pode significar que o servidor de hospedagem do seu banco de dados está fora do ar.</p>
            <ul>
                <li>Você tem certeza que possui o nome de usuário e senha corretos?</li>
                <li>Você tem certeza que digitou corretamente o nome do servidor de hospedagem?</li>
                <li>Você tem certeza que o servidor do banco de dados está funcionando?</li>
            </ul>
            <p>Se você não tem certeza do que esses termos significam, provavelmente você deveria contactar seu servidor de hospedagem.</p>
        </p><p class="step"><a href="setup-config.php?step=1" onclick="javascript:history.go(-1);
        return false;" class="button button-large">Tente novamente</a></p></body>
</html>
EOFPAGE;
    }

    /**
     * create an HTML when the file was created successfully
     * @access protected
     * @return HTML
     */
    protected function HTML_Sucess_Created_File_Config() {
        return <<<EOFPAGE
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{$this->name} &rsaquo; Arquivo de Configuração da Instalação</title>
	<link rel='stylesheet' id='buttons-css'  href='css/buttons.min.css?ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0' type='text/css' media='all' />
<link rel='stylesheet' id='install-css'  href='css/install.min.css?ver=4.0' type='text/css' media='all' />
</head>
<body class="wp-core-ui">
<h1 id="logo"><a style="background-image:url('{$this->logo}');" href="{$this->link}" tabindex="-1">{$this->name}</a></h1>
<p>Muito bem! Você concluiu esta parte da instalação. Agora o {$this->name} pode se comunicar com seu banco de dados. Se você estiver pronto, é hora de&hellip;</p>

<p class="step"><a href="install.php" class="button button-large">Instalar</a></p>
<script type='text/javascript' src='js/jquery/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='js/language-chooser.min.js?ver=4.0'></script>
</body>
</html>
EOFPAGE;
    }

    /**
     * create an HTML when some error occurs
     * @access protected
     * @return HTML
     */
    protected function HTML_Erro_Unknow() {
        return <<<EOFPAGE
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$this->name} &rsaquo; Arquivo de Configuração da Instalação</title>
        <link rel='stylesheet' id='buttons-css'  href='css/buttons.min.css?ver=4.0' type='text/css' media='all' />
        <link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0' type='text/css' media='all' />
        <link rel='stylesheet' id='install-css'  href='css/install.min.css?ver=4.0' type='text/css' media='all' />
    </head>
    <body class="wp-core-ui">
        <h1 id="logo"><a style="background-image:url('{$this->logo}');" href="{$this->link}" tabindex="-1">{$this->name}</a></h1>
        <p>Não foi possível gravar o arquivo <code>{$this->file}</code>.</p>
        <p>Você pode criar o arquivo <code>{$this->file}</code> manualmente e colar o seguinte texto nele.</p>
        <textarea id="wp-config" cols="98" rows="15" class="code" readonly="readonly">{$file_config}</textarea>
        <p>Depois de concluir clique em &#8220;Instalar&#8221;.</p>
        <p class="step"><a href="install.php" class="button button-large">Instalar</a></p>
        <script>
            (function() {
                var el = document.getElementById('wp-config');
                el.focus();
                el.select();
            })();
        </script>
        <script type='text/javascript' src='js/jquery/jquery.js?ver=1.11.1'></script>
        <script type='text/javascript' src='js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='js/language-chooser.min.js?ver=4.0'></script>
    </body>
</html>
EOFPAGE;
    }

}
