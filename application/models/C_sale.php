<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class C_sale extends CI_Model
{

    public function __construct()
    {
      parent::__construct();
    }

    
    function get_dollar_rate(){

        $this->from("pos_global_variables");

    }







    function console_log($message) {
        $STDERR = fopen("php://stderr", "w");
                  fwrite($STDERR, "\n".$message."\n\n");
                  fclose($STDERR);
    }

}