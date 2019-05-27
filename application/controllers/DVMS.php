<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DVMS extends CI_Controller {

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
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "DVMS";
            $data['page'] = "1";
            $t= $this->jsw_model->is_access_in(1);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30128";
            $this->load->view('jsw/DVMS',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                 }else{
                       redirect(base_url().'Login');        
               }
	}  
         
        public function berthOne()
	{
                 if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 1";
            $data['page'] = "2";
             $t= $this->jsw_model->is_access_in(2);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30129";
            $this->load->view('jsw/DVMS',$data);         
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                }else{
                       redirect(base_url().'Login');        
               }
	}   
        
        public function berthTwo()
	{
                if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 2";
            $data['page'] = "3";
            $t= $this->jsw_model->is_access_in(3);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20050";
            $this->load->view('jsw/DVMS',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                } 
                 }else{
                       redirect(base_url().'Login');        
               }
	}   
        public function berthThree()
	{
                if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 3";
            $data['page'] = "4";
            $t= $this->jsw_model->is_access_in(4);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30130";
            $this->load->view('jsw/DVMS',$data);         
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
         public function berthFour()
	{
                if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 4";
            $data['page'] = "5";
             $t= $this->jsw_model->is_access_in(5);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20052";
            $this->load->view('jsw/DVMS',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }       
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
         public function berthFive()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 5";
            $data['page'] = "6";
            $t= $this->jsw_model->is_access_in(6);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30131";
            $this->load->view('jsw/DVMS',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }     
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
         public function berthSix()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 6";
            $data['page'] = "7";
            $t= $this->jsw_model->is_access_in(7);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20054";
            $this->load->view('jsw/DVMS',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                } 
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
         public function berthSeven()
	{
                   if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 7";
            $data['page'] = "8";
            $t= $this->jsw_model->is_access_in(8);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/30132";
            $this->load->view('jsw/DVMS',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                } 
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
         public function berthEight()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "DVMS";
            $data['mydiv3'] = "";
            $data['title'] = "Berth - 8";
            $data['page'] = "9";
            $t= $this->jsw_model->is_access_in(9);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20056";
            $this->load->view('jsw/DVMS',$data);             
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
