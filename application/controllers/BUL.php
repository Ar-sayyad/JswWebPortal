<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BUL extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->model('jsw_model');
        $this->jsw_model->is_logged_in();
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
       public function index()
	{
            $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 1";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20076";
            $this->load->view('jsw/bulOne',$data);            
	}  
        
        public function bulOne()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 1";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20076";
            $this->load->view('jsw/bulOne',$data);             
	}   
        
        public function bulTwo()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 2";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20077";
            $this->load->view('jsw/bulOne',$data);             
	}   
        public function bulThree()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 3";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20078";
            $this->load->view('jsw/bulOne',$data);             
	} 
        
            
        
}
