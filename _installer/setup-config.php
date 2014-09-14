<?php
// load html pages
require_once('setup-config-html.php');

/**
 * HTMLs configuration pages
 * @author Bruno Ribeiro <bruno.espertinho@gmail.com>
 * @version 1
 * @access public
 * @package setup_config_html
 * */
class Setup_Config extends setup_config_html {

    /**
     * ASCI table for replace
     * @var array 
     */
    private $ASCI_table_replace = array(
        '&#36;' => '$',
        '&#60;' => '<',
        '&#231;' => 'ç',
        '&#227;' => 'ã',
        '&#64;' => '@',
        '&#234;' => 'ê',
        '&#245;' => 'õ'
    );

    /**
     * Replace special code for create a new file config with format UFT-8
     * @return string
     */
    private function _replace_ASCII_fwrite($string) {
        foreach ($this->ASCI_table_replace as $k => $v) {
            $string = str_replace($k, $v, $string);
        }
        return $string;
    }

    /**
     * Write a file in UTF-8 format
     * @param type $filename
     * @param type $content
     */
    private function writeUTF8File($filename, $content) {
        $f = fopen($filename, "w");
        fwrite($f, pack("CCC", 0xef, 0xbb, 0xbf)); // Now UTF-8 - Add byte order mark
        fwrite($f, $content);
        fclose($f);
    }

    /**
     * Check conecction
     * @return boolean
     */
    private function check_connection($POST) {
        @$mysqli = new mysqli($POST['dbhost'], $POST['uname'], $POST['pwd'], $POST['dbname']);
        // Check if any error occurred
        return !mysqli_connect_errno() ? true : false;
    }

    /**
     * Check database connection and make a file of config
     * @return Void
     */
    private function Make_file() {
        $file = '../' . $this->file;
        if ($this->check_connection($_POST) == true) {
            $this->writeUTF8File($file, $this->_replace_ASCII_fwrite($this->FILE_GENERATE($_POST)));
            // defines the permission to 666
            chmod($file, 0666);
            // faz a verificação final, se o arquivo foi criado
            if (file_exists($file))
                print $this->HTML_Sucess_Created_File_Config();
            else
                print $this->HTML_Erro_Unknow();
        } else {
            print $this->HTML_Erro_Connection();
        }
    }

    /**
     * Method Magic
     * @return void
     */
    public function __construct() {
        $step = filter_input(INPUT_GET, 'step');
        switch ($step) {
            case 1:
                print $this->HTML_Step2();
                break;
            case 2:
                $this->Make_file();
                break;
            default :
                print $this->HTML_Step1();
                break;
        }
    }

}

new Setup_Config();
