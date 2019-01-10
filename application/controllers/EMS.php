<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EMS extends CI_Controller {

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
            $data['mydiv2'] = "EMS";
            $data['mydiv3'] = "";
            $data['title'] = "EMS - 1";
            $data['page'] = "33";
            $t= $this->jsw_model->is_access_in(33);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20018";
            $this->load->view('jsw/emsOne',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }               
	}  
        
        public function emsOne()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "EMS";
            $data['mydiv3'] = "";
            $data['title'] = "EMS - 1";
            $data['page'] = "33";
             $t= $this->jsw_model->is_access_in(33);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20018";
            $this->load->view('jsw/emsOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }                 
	}   
        
        public function emsTwo()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "EMS";
            $data['mydiv3'] = "";
            $data['title'] = "EMS - 2";
            $data['page'] = "34";
             $t= $this->jsw_model->is_access_in(34);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20019";
            $this->load->view('jsw/emsOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }               
	}          
        
            
        
}
