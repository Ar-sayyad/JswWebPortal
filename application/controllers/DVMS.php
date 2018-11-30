<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DVMS extends CI_Controller {

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
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "DVMS";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20081";
            $this->load->view('jsw/DVMS',$data);            
	}  
        
        public function berthOne()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 1";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20049";
            $this->load->view('jsw/berthOne',$data);             
	}   
        
        public function berthTwo()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 2";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20050";
            $this->load->view('jsw/berthTwo',$data);             
	}   
        public function berthThree()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 3";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20051";
            $this->load->view('jsw/berthThree',$data);             
	} 
         public function berthFour()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 4";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20052";
            $this->load->view('jsw/berthFour',$data);             
	} 
         public function berthFive()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 5";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20053";
            $this->load->view('jsw/berthFive',$data);             
	} 
         public function berthSix()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 6";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20054";
            $this->load->view('jsw/berthSix',$data);             
	} 
         public function berthSeven()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 7";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20055";
            $this->load->view('jsw/berthSeven',$data);             
	} 
         public function berthEight()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 8";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20056";
            $this->load->view('jsw/berthEight',$data);             
	} 
        
            
        
}
