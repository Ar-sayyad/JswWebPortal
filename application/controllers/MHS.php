<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MHS extends CI_Controller {

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
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "New MHS Overview";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20072";
            $this->load->view('jsw/newmhsPathOne',$data);            
	}  
        
        public function newmhsPathOne()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 1";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20037";
            $this->load->view('jsw/newmhsPathOne',$data);             
	}   
        
         public function newmhsPathTwo()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 2";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20070";
            $this->load->view('jsw/newmhsPathTwo',$data);             
	}   
        
        public function newmhsPathThree()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 3";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20039";
            $this->load->view('jsw/newmhsPathThree',$data);             
	}   
        public function newmhsPathFour()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 4";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20040";
            $this->load->view('jsw/newmhsPathFour',$data);             
	}   
        public function newmhsPathFive()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 5";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20041";
            $this->load->view('jsw/newmhsPathFive',$data);             
	}   
        public function newmhsPathSeven()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 7";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20044";
            $this->load->view('jsw/newmhsPathSeven',$data);             
	}   
        public function newmhsPathEight()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 8";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20068";
            $this->load->view('jsw/newmhsPathEight',$data);             
	}   
        
                
        public function oldmhsOverview()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "Old MHS Overview";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20048";
            $this->load->view('jsw/oldmhsOverview',$data);             
	} 
        
         public function oldmhsPathA()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - A";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20059";
            $this->load->view('jsw/oldmhsPathA',$data);             
	}  
        
        public function oldmhsPathB()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - B";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20060";
            $this->load->view('jsw/oldmhsPathB',$data);             
	}   
        public function oldmhsPathC()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - C";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20061";
            $this->load->view('jsw/oldmhsPathC',$data);             
	}   
        public function oldmhsPathD()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - D";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20062";
            $this->load->view('jsw/oldmhsPathD',$data);             
	}   
        
        public function oldmhsPathE()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - E";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20063";
            $this->load->view('jsw/oldmhsPathE',$data);             
	}   
        public function oldmhsPathF()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - F";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20064";
            $this->load->view('jsw/oldmhsPathF',$data);             
	}   
        public function oldmhsPathG()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - G";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20065";
            $this->load->view('jsw/oldmhsPathG',$data);             
	}   
        public function oldmhsPathH()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - H";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20066";
            $this->load->view('jsw/oldmhsPathH',$data);             
	}   
         public function oldmhsPathI()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - I";
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20067";
            $this->load->view('jsw/oldmhsPathI',$data);             
	}   
        
         public function MotorTemperature()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Motor Temperature";
            $data['title'] = "Motor Temperature";
            $data['linkUrl'] = "";
            $this->load->view('jsw/MotorTemperature',$data);             
	}   
        
         public function MotorCurrent()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Motor Current";
            $data['title'] = "Motor Current";
            $data['linkUrl'] = "";
            $this->load->view('jsw/MotorCurrent',$data);             
	}   
       
       
        
}
