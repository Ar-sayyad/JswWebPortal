<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class REPORTS extends CI_Controller {

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
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Utilization Summary";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/JettyDischargeGAPAnalysis?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);            
	}  
        
        public function EquipmentUtilizationSummary()//optional
	{
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Utilization Summary";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/JettyDischargeGAPAnalysis?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);             
	}   
        
        
         public function DaywiseEquipmentUtilization()
	{
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Day wise Equipment Utilization";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/JettyDischargeGAPAnalysis?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);             
	}  
        
         public function DPR()
	{
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "DPR";
            $data['linkUrl'] = "";
            $this->load->view('jsw/Reports',$data);             
	}   
        public function JettyRMHSDelaysReport()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Jetty & RMHS Delays Report";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Jetty_RMHS_Delay?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}   
        
         public function EquipmentWiseDischarge()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Wise Discharge";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/EquipmentWise_Discharge?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}   
        
        
        
        
        /**********ELECTRICAL********/
        
         public function DailyPowerConsumptionNewJetty()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Daily Power Consumption New Jetty";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/DPPL_Elect_Energy_Consumption_New_Jetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}
         public function DailyPowerConsumptionOldJetty()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Daily Power Consumption Old Jetty";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/DPPL_Elect_Energy_Consumption_Old_Jetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	} 
         public function CargoCommodityWisePowerConsumptionnewjetty ()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Commodity Wise Power Consumption New Jetty";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Equipment_cargo_power_discharge_new_jetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}
      public function CargoCommodityWisePowerConsumptionOldjetty()
        {
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Commodity Wise Power Consumption Old Jetty";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Equipment_cargo_wise_PoweConsumption_OldJetty?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
        }
      public function DPPLElectricalNewJettySystemEQDelays()
           {
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical New Jetty System EQ Delays";
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);  
           }
           
      public function DPPLElectricalOldJettySystemEQDelays()
           {
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical Old Jetty System EQ Delays";
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);  
           }
           
      public function DailyEquipmentWisePowerConsumptionNew()
           {
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Daily Equipment Wise Power Consumption New";
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);  
           }
      public function DailyEquipmentWisePowerConsumptionOld()
           {
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "Daily Equipment Wise Power Consumption Old";
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);  
           }
      public function DPPLElectricalNewJettySystemMTTRvMTBF()
           {
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical New Jetty System (MTTR,MTBF)";
                $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/DPPL%20Electrical%20New%20System?rs:Embed=true";
                $this->load->view('jsw/Reports',$data);  
           }     
      public function DPPLElectricalOldJettySystemMTTRvMTBF()
           {
                $data['mydiv'] = "REPORTS";
                $data['mydiv2'] = "Electrical";
                $data['mydiv3'] = "";
                $data['title'] = "DPPL Electrical Old Jetty System (MTTR,MTBF)";
                $data['linkUrl'] = "";
                $this->load->view('jsw/Reports',$data);  
           }   



       /*********MECHANICAL********/        
        
         public function ConveyorLubricationPump()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Conveyor Lubrication Pump";//Discarded
            $data['linkUrl'] = "";
            $this->load->view('jsw/Reports',$data);       
	}   
        
         public function ConveyorTempLoad()//Discarded
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Conveyor Temp & Load";
            $data['linkUrl'] = "";
            $this->load->view('jsw/Reports',$data);       
	}   
        
         public function CycleTimeReportBUL()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Cycle Time Report BUL";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/CycleTime_DPPL?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}   
        
         public function EquipmentCompressor()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Compressor";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Equipment%20Compressor?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}   
        
         public function EquipmentTempLoad()//Discarded
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Temp & Load";
            $data['linkUrl'] = "";
            $this->load->view('jsw/Reports',$data);       
	}   
        
         public function RunningHoursConveyors()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Running Hours Conveyors";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Running_Hour_Conveyor?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}   
        
          public function RunningHoursEquipment()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Running Hours Equipment";
            $data['linkUrl'] = "http://172.21.25.29:8081/Reports_DPPL/report/DPPL_PIMS_PRODUCTION/Running_Hour_Equipment?rs:Embed=true";
            $this->load->view('jsw/Reports',$data);       
	}   
             
     
      
}
