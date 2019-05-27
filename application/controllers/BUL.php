<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BUL extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->model('jsw_model');
       // $this->jsw_model->is_logged_in();
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
       public function index()
	{
             if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 1";
            $data['page'] = "30";
             $t= $this->jsw_model->is_access_in(30);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30133";
            $this->load->view('jsw/bulOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                 }else{
                       redirect(base_url().'Login');        
               }
	}  
        
        public function bulOne()
	{
                if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 1";
            $data['page'] = "30";
             $t= $this->jsw_model->is_access_in(30);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30133";
            $this->load->view('jsw/bulOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                }else{
                       redirect(base_url().'Login');        
               }
	}   
        
        public function bulTwo()
	{
                if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 2";
            $data['page'] = "31";
             $t= $this->jsw_model->is_access_in(31);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30134";
            $this->load->view('jsw/bulOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                }else{
                       redirect(base_url().'Login');        
               }
	}   
        public function bulThree()
	{
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "BUL";
            $data['mydiv3'] = "";
            $data['title'] = "BUL - 3";
            $data['page'] = "32";
             $t= $this->jsw_model->is_access_in(32);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30135";
            $this->load->view('jsw/bulOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
        
            
        
}
