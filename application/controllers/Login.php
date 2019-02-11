<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->model('jsw_model');
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
       public function index()
	{
            $data['title'] = "Login";
            $data['titlebar'] = "Login";
            $this->load->view('jsw/login',$data);
	}     
        
         public function verifyCode(){
              $data['title'] = "Verify Employee Code";
            $data['titlebar'] = "Verify Employee Code";
            $this->load->view('jsw/verifyCode',$data);
        }
        public function ForgotPassword(){
           if ($this->session->userdata('forgot_pass') == 1) {                
                 $data['title'] = "Forgot Password";
                 $data['titlebar'] = "Forgot Password";
                  $this->load->view('jsw/Forgot_Password',$data);	
                }
                else{                 
                    redirect(base_url().'Login');                     
                }
             
        }
}
