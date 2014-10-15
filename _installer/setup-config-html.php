<?php

/**
 * HTMLs configuration pages
 * @author Bruno Ribeiro <bruno.espertinho@gmail.com>
 * @version 1.1
 * @access public
 * @package Config
 * @todo Improve the customization of the configuration file
 * */
class SetupConfigHTML
  {
    
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
     * Language of pages
     * @var string 
     */
    var $CurrentLanguage = 'pt-br';
    
    /**
     * Rules for replacement
     * @var array
     */
    var $Rules = array("&lt;" => "<", "&gt;" => ">", "&quot;" => '"', "&apos;" => "'", "&amp;" => "&");
    
    /**
     * Metthod Magic
     * Require language file
     */
    public function __construct()
      {
        switch ($this->CurrentLanguage)
        {
            case 'pt-br': // Português Brasileiro
                include(__DIR__ . '/Language/pt-br.php');
                break;
             case 'en': // English
                include(__DIR__ . '/Language/en.php');
                break;    
             case 'es': // Español - Beta
                include(__DIR__ . '/Language/es.php');
                break; 
            case 'it': // Italiano - Beta
                include(__DIR__ . '/Language/it.php');
                break;
            default:
                break;
        }
      }
    
    /**
     * Here is the main configuration file of your application.
     * Note: replace special characters that makes conflict with the EOFPAGE 
     * if the character in question does not exist, add it to 
     * the array $ASCI_table_replace the file setup-config.php
     * @access protected
     * @param array $POST
     * @return HTML
     */
    protected function FileGenerate($POST)
      {
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
     * Convert Special Char
     * @param string $string
     * @return string
     */
    private function RevertHTML($string)
      {
        foreach ($this->Rules as $k => $v)
          {
            $string = str_replace($k, $v, $string);
          }
        return $string;
      }
    
    /**
     * Create an HTML for step 1
     * @access protected
     * @return HTML
     */
    protected function HTMLStep1()
      {
        $html = new DOMDocument();
        $html->loadHTMLFile("Pages/step1.xml");
        $html->preserveWhiteSpace = false;
        $html->formatOutput       = true;
        
        $html->getElementById('logo')->nodeValue                 = sprintf(LOGO, $this->logo, $this->link, $this->name);
        $html->getElementsByTagName('title')->item(0)->nodeValue = sprintf(STEP1_TITLETAG, $this->name);
        $html->getElementById('title')->nodeValue                = sprintf(STEP1_TITLE, $this->name);
        $html->getElementById('LIST1')->nodeValue                = STEP1_LIST1;
        $html->getElementById('LIST2')->nodeValue                = STEP1_LIST2;
        $html->getElementById('LIST3')->nodeValue                = STEP1_LIST3;
        $html->getElementById('LIST4')->nodeValue                = STEP1_LIST4;
        $html->getElementById('txt1')->nodeValue                 = sprintf(STEP1_TEXT1, $this->file, $this->file, $this->file);
        $html->getElementById('txt2')->nodeValue                 = STEP1_TEXT2;
        $html->getElementById('step_1_buttom')->nodeValue        = STEP1_BUTTOM;
        
        return $this->RevertHTML($html->saveHTML());
      }
    
    /**
     * Create an HTML for step 2
     * @access protected
     * @return HTML
     */
    protected function HTMLStep2()
      {
        $html = new DOMDocument();
        $html->loadHTMLFile("Pages/step2.xml");
        $html->preserveWhiteSpace = false;
        $html->formatOutput       = true;
        
        $html->getElementById('logo')->nodeValue                 = sprintf(LOGO, $this->logo, $this->link, $this->name);
        $html->getElementsByTagName('title')->item(0)->nodeValue = sprintf(STEP1_TITLETAG, $this->name);
        
        $html->getElementById('STEP2_TEXT1')->nodeValue = STEP2_TEXT1;
        
        $html->getElementById('LIST1')->nodeValue  = STEP2_LIST1;
        $html->getElementById('DLIST1')->nodeValue = sprintf(STEP2_DLIST1, $this->name);
        
        $html->getElementById('LIST2')->nodeValue  = STEP2_LIST2;
        $html->getElementById('DLIST2')->nodeValue = STEP2_DLIST2;
        
        $html->getElementById('LIST3')->nodeValue  = STEP2_LIST3;
        $html->getElementById('DLIST3')->nodeValue = STEP2_DLIST3;
        
        $html->getElementById('LIST3')->nodeValue  = STEP2_LIST3;
        $html->getElementById('DLIST3')->nodeValue = STEP2_DLIST3;
        
        $html->getElementById('LIST4')->nodeValue  = STEP2_LIST4;
        $html->getElementById('DLIST4')->nodeValue = STEP2_DLIST4;
        
        
        $input = $html->getElementById('send');
        $input->removeAttribute('value');
        $input->setAttribute('value', STEP2_BUTTOM);
        
        return $this->RevertHTML($html->saveHTML());
      }
    
    /**
     * Create an HTML when it is not possible to connect to the database
     * @access protected
     * @return type
     */
    protected function HTMLErroConnection()
      {
        $html = new DOMDocument();
        $html->loadHTMLFile("Pages/ErroConnection.xml");
        $html->preserveWhiteSpace = false;
        $html->formatOutput       = true;
        
        $html->getElementsByTagName('title')->item(0)->nodeValue = sprintf(STEP1_TITLETAG, $this->name);
        
        $html->getElementById('TEXT1')->nodeValue  = ERRO_CONNETION_TEXT1;
        $html->getElementById('TEXT2')->nodeValue  = ERRO_CONNETION_TEXT2;
        $html->getElementById('TEXT3')->nodeValue  = ERRO_CONNETION_TEXT3;
        $html->getElementById('TEXT4')->nodeValue  = ERRO_CONNETION_TEXT4;
        $html->getElementById('TEXT5')->nodeValue  = ERRO_CONNETION_TEXT5;
        $html->getElementById('TEXT6')->nodeValue  = ERRO_CONNETION_TEXT6;
        $html->getElementById('buttom')->nodeValue = ERRO_CONNETION_BUTTOM;
        
        return $this->RevertHTML($html->saveHTML());
      }
    
    /**
     * create an HTML when the file was created successfully
     * @access protected
     * @return HTML
     */
    protected function HTMLSucessCreatedFileConfig()
      {
        $html = new DOMDocument();
        $html->loadHTMLFile("Pages/SucessCreated.xml");
        $html->preserveWhiteSpace = false;
        $html->formatOutput       = true;
        
        $html->getElementById('logo')->nodeValue                 = sprintf(LOGO, $this->logo, $this->link, $this->name);
        $html->getElementsByTagName('title')->item(0)->nodeValue = sprintf(STEP1_TITLETAG, $this->name);
        
        $html->getElementById('text')->nodeValue = sprintf(SUCCESS_TEXT, $this->name);
        
        $html->getElementById('buttom')->nodeValue = SUCCESS_BUTTOM;
        
        return $this->RevertHTML($html->saveHTML());
      }
    
    /**
     * create an HTML when some error occurs
     * @access protected
     * @return HTML
     */
    protected function HTMLErroUnknow()
      {
        $html = new DOMDocument();
        $html->loadHTMLFile("Pages/ErroUnknow.xml");
        $html->preserveWhiteSpace = false;
        $html->formatOutput       = true;
        
        $html->getElementById('logo')->nodeValue                 = sprintf(LOGO, $this->logo, $this->link, $this->name);
        $html->getElementsByTagName('title')->item(0)->nodeValue = sprintf(STEP1_TITLETAG, $this->name);
        
        $html->getElementById('ERROUNKNOW_TEXT1')->nodeValue = sprintf(ERROUNKNOW_TEXT1, $this->file);
        $html->getElementById('ERROUNKNOW_TEXT2')->nodeValue = sprintf(ERROUNKNOW_TEXT2, $this->file);
        $html->getElementById('ERROUNKNOW_TEXT3')->nodeValue = ERROUNKNOW_TEXT3;
        
        $html->getElementById('wp-config')->nodeValue = $this->FileGenerate($_POST);
        
        $html->getElementById('buttom')->nodeValue = SUCCESS_BUTTOM;
        
        return $this->RevertHTML($html->saveHTML());
      }
    
  }
