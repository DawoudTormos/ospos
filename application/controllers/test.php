<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class test extends Secure_Controller
{


    public function __construct()
	{
		parent::__construct('test');

	}

    public function index(){
        //echo $this->session->userdata('menu_group');
        $data = $this->session->userdata;
        print_r($data); 
        echo "<br><br><br>";


       

        print "<pre>";
        print_r($data);
        print "</pre>";


    }


    public function qq(){
        print_r($this->session->userdata); 

    }









}
?>