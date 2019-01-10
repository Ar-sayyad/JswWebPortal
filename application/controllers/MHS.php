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
            $data['page'] = "10";
            $t= $this->jsw_model->is_access_in(10);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20072";
            $this->load->view('jsw/newmhsPathOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }               
	}  
        
        public function newmhsPathOne()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 1";
            $data['page'] = "11";
            $t= $this->jsw_model->is_access_in(11);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20037";
            $this->load->view('jsw/newmhsPathOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	}   
        
         public function newmhsPathTwo()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 2";
            $data['page'] = "12";
            $t= $this->jsw_model->is_access_in(12);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20070";
            $this->load->view('jsw/newmhsPathOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	}   
        
        public function newmhsPathThree()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 3";
            $data['page'] = "13";
            $t= $this->jsw_model->is_access_in(13);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20039";
            $this->load->view('jsw/newmhsPathOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }              
	}   
        public function newmhsPathFour()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 4";
            $data['page'] = "14";
            $t= $this->jsw_model->is_access_in(14);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20040";
            $this->load->view('jsw/newmhsPathOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	}   
        public function newmhsPathFive()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 5";
            $data['page'] = "15";
            $t= $this->jsw_model->is_access_in(15);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20041";
            $this->load->view('jsw/newmhsPathOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	}   
          public function newmhsPathSix()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 6";
            $data['page'] = "16";
            $t= $this->jsw_model->is_access_in(16);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20083";
            $this->load->view('jsw/newmhsPathOne',$data);              
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }           
	}   
        public function newmhsPathSeven()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "New MHS Overview";
            $data['title'] = "MHS PATH - 7";
            $data['page'] = "17";
            $t= $this->jsw_model->is_access_in(17);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20044";
            $this->load->view('jsw/newmhsPathOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	}   
//        public function newmhsPathEight()
//	{
//           $data['mydiv'] = "DASHBOARD";
//            $data['mydiv2'] = "MHS";
//            $data['mydiv3'] = "New MHS Overview";
//            $data['title'] = "MHS PATH - 8";
//            $data['page'] = "18";
//            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20068";
//            $this->load->view('jsw/newmhsPathOne',$data);             
//	}   
        
                
        public function oldmhsOverview()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "Old MHS Overview";
            $data['page'] = "18";
            $t= $this->jsw_model->is_access_in(18);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20048";
            $this->load->view('jsw/newmhsPathOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	} 
        
         public function oldmhsPathA()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - A";
            $data['page'] = "19";
            $t= $this->jsw_model->is_access_in(19);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20059";
            $this->load->view('jsw/newmhsPathOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }            
	}  
        
        public function oldmhsPathB()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - B";
            $data['page'] = "20";
            $t= $this->jsw_model->is_access_in(20);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20060";
            $this->load->view('jsw/newmhsPathOne',$data);             
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }            
	}   
        public function oldmhsPathC()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - C";
            $data['page'] = "21";
            $t= $this->jsw_model->is_access_in(21);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20061";
            $this->load->view('jsw/newmhsPathOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	}   
        public function oldmhsPathD()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - D";
            $data['page'] = "22";
            $t= $this->jsw_model->is_access_in(22);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20062";
            $this->load->view('jsw/newmhsPathOne',$data);              
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }            
	}   
        
        public function oldmhsPathE()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - E";
            $data['page'] = "23";
            $t= $this->jsw_model->is_access_in(23);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20063";
            $this->load->view('jsw/newmhsPathOne',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }              
	}   
        public function oldmhsPathF()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - F";
            $data['page'] = "24";
            $t= $this->jsw_model->is_access_in(24);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20064";
            $this->load->view('jsw/newmhsPathOne',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }            
	}   
        public function oldmhsPathG()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - G";
            $data['page'] = "25";
            $t= $this->jsw_model->is_access_in(25);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20065";
            $this->load->view('jsw/newmhsPathOne',$data);              
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }           
	}   
        public function oldmhsPathH()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - H";
            $data['page'] = "26";
            $t= $this->jsw_model->is_access_in(26);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20066";
            $this->load->view('jsw/newmhsPathOne',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }              
	}   
         public function oldmhsPathI()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Old MHS Overview";
            $data['title'] = "MHS PATH - I";
            $data['page'] = "27";
            $t= $this->jsw_model->is_access_in(27);
            if($t==1){              
            $data['linkUrl'] = "https://172.21.25.29/PIVision/PB/#/PBDisplays/20082";
            $this->load->view('jsw/newmhsPathOne',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }            
	}   
        
         public function MotorTemperature()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Motor Temperature";
            $data['title'] = "Motor Temperature";
            $data['page'] = "28";
            $t= $this->jsw_model->is_access_in(28);
            if($t==1){              
            $data['linkUrl'] = "";
            $this->load->view('jsw/MotorTemperature',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }            
	}   
        
         public function MotorCurrent()
	{
           $data['mydiv'] = "DASHBOARD";
            $data['mydiv2'] = "MHS";
            $data['mydiv3'] = "Motor Current";
            $data['title'] = "Motor Current";
            $data['page'] = "29";
            $t= $this->jsw_model->is_access_in(29);
            if($t==1){              
            $data['linkUrl'] = "";
            $this->load->view('jsw/MotorCurrent',$data);            
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }             
	}   
       
       
        
}
