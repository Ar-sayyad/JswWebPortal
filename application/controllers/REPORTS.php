<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class REPORTS extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('jsw_model');
        //$this->jsw_model->is_logged_in();
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
       public function index()
	{
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Utilization Summary";
            $data['page'] = "35";
            $t= $this->jsw_model->is_access_in(35);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/JettyDischargeGAPAnalysis?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
	}  
        
//        public function EquipmentUtilizationSummary()//optional
//	{
//           $data['mydiv'] = "REPORTS";
//            $data['mydiv2'] = "Operation";
//            $data['mydiv3'] = "";
//            $data['title'] = "Equipment Utilization Summary";
//            $data['page'] = "35";
//            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/JettyDischargeGAPAnalysis?rs:Embed=true";
//            $this->load->view('jsw/Reports',$data);             
//	}   
        
        
         public function DaywiseEquipmentUtilization()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Day wise Equipment Utilization";
            $data['page'] = "35";
            $t= $this->jsw_model->is_access_in(35);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/JettyDischargeGAPAnalysis?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }         
                  }else{
                       redirect(base_url().'Login');        
               }
	}  
        
         public function DPR()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "DPR";
            $data['page'] = "36";
            $t= $this->jsw_model->is_access_in(36);
            if($t==1){              
            $data['linkUrl'] = "";
            $this->load->view('jsw/Reports',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                  }else{
                       redirect(base_url().'Login');        
               }
	}   
        public function JettyRMHSDelaysReport()
	{
                 if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Jetty & RMHS Delays Report";
            $data['page'] = "37";
            $t= $this->jsw_model->is_access_in(37);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Jetty_RMHS_Delay?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                  }else{
                       redirect(base_url().'Login');        
               }
	}   
        
         public function EquipmentWiseDischarge()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Wise Discharge";
            $data['page'] = "38";
            $t= $this->jsw_model->is_access_in(38);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/EquipmentWise_Discharge?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);         
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                  }else{
                       redirect(base_url().'Login');        
               }
	}   
        
        
        
        
        /**********ELECTRICAL********/
        
         public function DailyPowerConsumptionNewJetty()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Daily Power Consumption New Jetty";
            $data['page'] = "39";
            $t= $this->jsw_model->is_access_in(39);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/DPPL_Elect_Energy_Consumption_New_Jetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                  }else{
                       redirect(base_url().'Login');        
               }
	}
         public function DailyPowerConsumptionOldJetty()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Daily Power Consumption Old Jetty";
            $data['page'] = "40";
            $t= $this->jsw_model->is_access_in(40);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/DPPL_Elect_Energy_Consumption_Old_Jetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
	} 
         public function CargoCommodityWisePowerConsumptionnewjetty ()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Commodity Wise Power Consumption New Jetty";
            $data['page'] = "41";
            $t= $this->jsw_model->is_access_in(41);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Equipment_cargo_power_discharge_new_jetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);        
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }      
                  }else{
                       redirect(base_url().'Login');        
               }
	}
      public function CargoCommodityWisePowerConsumptionOldjetty()
        {
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Commodity Wise Power Consumption Old Jetty";
            $data['page'] = "42";
            $t= $this->jsw_model->is_access_in(42);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Equipment_cargo_wise_PoweConsumption_OldJetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }     
                  }else{
                       redirect(base_url().'Login');        
               }
        }
      public function DPPLElectricalNewJettySystemEQDelays()
           {
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical New Jetty System EQ Delays";
                $data['page'] = "43";
                $t= $this->jsw_model->is_access_in(43);
            if($t==1){              
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);        
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                  }else{
                       redirect(base_url().'Login');        
               }
           }
           
      public function DPPLElectricalOldJettySystemEQDelays()
           {
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical Old Jetty System EQ Delays";
                $data['page'] = "44";
                $t= $this->jsw_model->is_access_in(44);
            if($t==1){              
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                  }else{
                       redirect(base_url().'Login');        
               }
           }
           
      public function DailyEquipmentWisePowerConsumptionNew()
           {
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Daily Equipment Wise Power Consumption New";
                $data['page'] = "45";
                $t= $this->jsw_model->is_access_in(45);
            if($t==1){              
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);           
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
           }
      public function DailyEquipmentWisePowerConsumptionOld()
           {
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Daily Equipment Wise Power Consumption Old";
                $data['page'] = "46";
                $t= $this->jsw_model->is_access_in(46);
            if($t==1){              
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
           }
      public function DPPLElectricalNewJettySystemMTTRvMTBF()
           {
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical New Jetty System (MTTR,MTBF)";
                $data['page'] = "47";
                $t= $this->jsw_model->is_access_in(47);
            if($t==1){              
                $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/DPPL%20Electrical%20New%20System?rs:Embed=true";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }   
                  }else{
                       redirect(base_url().'Login');        
               }
           }     
      public function DPPLElectricalOldJettySystemMTTRvMTBF()
           {
               if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical Old Jetty System (MTTR,MTBF)";
                $data['page'] = "48";
                $t= $this->jsw_model->is_access_in(48);
            if($t==1){              
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
           }   


            public function EquipmentDelayNewSystem()
           {
                     if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Equipment Delay New System";
                $data['page'] = "58";
                $t= $this->jsw_model->is_access_in(58);
            if($t==1){              
                $data['linkUrl'] = "http://172.21.25.29:8081/ReportServer/Pages/ReportViewer.aspx?%2fDPPL_PIMS_PRODUCTION%2fEquipment_Delay_New_System&rs:Command=Render?rs:Embed=true";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
           }   
           
            public function EquipmentDelayOldSystem()
           {
                     if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Equipment Delay Old System";
                $data['page'] = "59";
                $t= $this->jsw_model->is_access_in(59);
            if($t==1){              
                $data['linkUrl'] = "http://172.21.25.29:8081/ReportServer/Pages/ReportViewer.aspx?%2fDPPL_PIMS_PRODUCTION%2fEquipment_Delay_Old_System&rs:Command=Render?rs:Embed=true";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
           }   
           
            public function CargoConsumptionNewSystem()
           {
                     if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Cargo Consumption New System";
                $data['page'] = "60";
                $t= $this->jsw_model->is_access_in(60);
            if($t==1){              
                $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/CargoConsumption_NewSystem?rs:Embed=true";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
           }   
           
            public function CargoConsumptionOldSystem()
           {
                     if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Cargo Consumption New System";
                $data['page'] = "61";
                $t= $this->jsw_model->is_access_in(61);
            if($t==1){              
                $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/CargoConsumption_OldSystem?rs:Embed=true";
                $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }  
                  }else{
                       redirect(base_url().'Login');        
               }
           }   

       /*********MECHANICAL********/        
        
//         public function ConveyorLubricationPump()
//	{
//            $data['mydiv'] = "REPORTS";
//            $data['mydiv2'] = "Mechanical";
//            $data['mydiv3'] = "";
//            $data['title'] = "Conveyor Lubrication Pump";//Discarded
//            $data['linkUrl'] = "";
//            $this->load->view('jsw/Reports',$data);       
//	}   
//        
//         public function ConveyorTempLoad()//Discarded
//	{
//            $data['mydiv'] = "REPORTS";
//            $data['mydiv2'] = "Mechanical";
//            $data['mydiv3'] = "";
//            $data['title'] = "Conveyor Temp & Load";
//            $data['linkUrl'] = "";
//            $this->load->view('jsw/Reports',$data);       
//	}   
        
         public function CycleTimeReportBUL()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Cycle Time Report BUL";
            $data['page'] = "49";
            $t= $this->jsw_model->is_access_in(49);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/CycleTime_DPPL?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }       
                  }else{
                       redirect(base_url().'Login');        
               }
	}   
        
         public function EquipmentCompressor()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Compressor";
            $data['page'] = "50";
            $t= $this->jsw_model->is_access_in(50);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Equipment%20Compressor?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);          
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                  }else{
                       redirect(base_url().'Login');        
               }
	}   
        
//         public function EquipmentTempLoad()//Discarded
//	{
//            $data['mydiv'] = "REPORTS";
//            $data['mydiv2'] = "Mechanical";
//            $data['mydiv3'] = "";
//            $data['title'] = "Equipment Temp & Load";
//            $data['linkUrl'] = "";
//            $this->load->view('jsw/Reports',$data);       
//	}   
        
         public function RunningHoursConveyors()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Running Hours Conveyors";
            $data['page'] = "51";
            $t= $this->jsw_model->is_access_in(51);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Running_Hour_Conveyor?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);         
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }      
                  }else{
                       redirect(base_url().'Login');        
               }
	}   
        
          public function RunningHoursEquipment()
	{
                   if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Running Hours Equipment";
            $data['page'] = "52";
            $t= $this->jsw_model->is_access_in(52);
            if($t==1){              
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Running_Hour_Equipment?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);          
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
