<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MHS extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->model('swpl_model');
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
            $data['title'] = "MHS PATH - 1";
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathOne',$data);            
	}  
        
        public function newmhsPathOne()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 1";
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathOne',$data);             
	}   
        
        public function newmhsPathThree()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 3";
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathThree',$data);             
	}   
        public function newmhsPathFour()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 4";
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathFour',$data);             
	}   
        public function newmhsPathFive()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 5";
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathFive',$data);             
	}   
        public function newmhsPathSeven()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 7";
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathSeven',$data);             
	}   
        public function newmhsPathEight()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 8";
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathEight',$data);             
	}   
        
        
        
        public function oldmhsPathA()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - A";
            $data['linkUrl'] = "";
            $this->load->view('jsw/oldmhsPathA',$data);             
	}   
        public function oldmhsPathB()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - B";
            $data['linkUrl'] = "";
            $this->load->view('jsw/oldmhsPathB',$data);             
	}   
        public function oldmhsPathC()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - C";
            $data['linkUrl'] = "";
            $this->load->view('jsw/oldmhsPathC',$data);             
	}   
        public function oldmhsPathD()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - D";
            $data['linkUrl'] = "";
            $this->load->view('jsw/oldmhsPathD',$data);             
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
