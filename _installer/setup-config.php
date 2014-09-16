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
class SetupConfig extends SetupConfigHTML {

    /**
     * ASCI table for replace
     * @var array 
     */
    private $ASCITableReplace = array(
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
    private function ReplaceASCIIFwrite($string) {
        foreach ($this->ASCITableReplace as $k => $v) {
            $string = str_replace($k, $v, $string);
        }
        return $string;
    }

    /**
     * Write a file in UTF-8 format
     * @param type $filename
     * @param type $content
     */
    private function WriteUTF8File($filename, $content) {
        $f = fopen($filename, "w");
        fwrite($f, pack("CCC", 0xef, 0xbb, 0xbf)); // Now UTF-8 - Add byte order mark
        fwrite($f, $content);
        fclose($f);
    }

    /**
     * Check conecction
     * @return boolean
     */
    private function CheckConnection($POST) {
        @$mysqli = new mysqli($POST['dbhost'], $POST['uname'], $POST['pwd'], $POST['dbname']);
        // Check if any error occurred
        return !mysqli_connect_errno() ? true : false;
    }

    /**
     * Check database connection and make a file of config
     * @return Void
     */
    private function MakeFile() {
        $file = '../' . $this->file;
        if ($this->CheckConnection($_POST) == true) {
            $this->WriteUTF8File($file, $this->ReplaceASCIIFwrite($this->FileGenerate($_POST)));
            // defines the permission to 666
            chmod($file, 0666);
            // faz a verificação final, se o arquivo foi criado
            if (file_exists($file))
                print $this->HTMLSucessCreatedFileConfig();
            else
                print $this->HTMLErroUnknow();
        } else {
            print $this->HTMLErroConnection();
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
                print $this->HTMLStep2();
                break;
            case 2:
                $this->MakeFile();
                break;
            default :
                print $this->HTMLStep1();
                break;
        }
    }

}

new SetupConfig();
