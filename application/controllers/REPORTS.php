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
            $data['linkUrl'] = "";
            $this->load->view('jsw/newmhsPathOne',$data);            
	}  
        
        public function EquipmentUtilizationSummary()
	{
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Utilization Summary";
            $data['linkUrl'] = "";
            $this->load->view('jsw/EquipmentUtilizationSummary',$data);             
	}   
        
         public function DaywiseEquipmentUtilization()
	{
           $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Day wise Equipment Utilization";
            $data['linkUrl'] = "";
            $this->load->view('jsw/DaywiseEquipmentUtilization',$data);             
	}  
        
        public function JettyRMHSDelaysReport()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Jetty & RMHS Delays Report";
            $data['linkUrl'] = "";
            $this->load->view('jsw/JettyRMHSDelaysReport',$data);       
	}   
        
         public function EquipmentWiseDischarge()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Operation";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Wise Discharge";
            $data['linkUrl'] = "";
            $this->load->view('jsw/EquipmentWiseDischarge',$data);       
	}   
        
        
        
        
         public function DPPLEnergyConsumption()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "DPPL Energy Consumption";
            $data['linkUrl'] = "";
            $this->load->view('jsw/DPPLEnergyConsumption',$data);       
	}   
        
         public function CargoCommodityEquipmentPowerConsumption()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Commodity & Equip. Power Consumption";
            $data['linkUrl'] = "";
            $this->load->view('jsw/CargoCommodityEquipmentPowerConsumption',$data);       
	}   
        
         public function MTTRandMTBF()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "MTTR and MTBF";
            $data['linkUrl'] = "";
            $this->load->view('jsw/MTTRandMTBF',$data);       
	}   
        
         public function EquipmentDelay()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Electrical";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Delay";
            $data['linkUrl'] = "";
            $this->load->view('jsw/EquipmentDelay',$data);       
	}   
        
       
        
        
         public function ConveyorLubricationPump()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Conveyor Lubrication Pump";
            $data['linkUrl'] = "";
            $this->load->view('jsw/ConveyorLubricationPump',$data);       
	}   
        
         public function ConveyorTempLoad()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Conveyor Temp & Load";
            $data['linkUrl'] = "";
            $this->load->view('jsw/ConveyorTempLoad',$data);       
	}   
        
         public function CycleTimeReportBUL()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Cycle Time Report BUL";
            $data['linkUrl'] = "";
            $this->load->view('jsw/CycleTimeReportBUL',$data);       
	}   
        
         public function EquipmentCompressor()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Compressor";
            $data['linkUrl'] = "";
            $this->load->view('jsw/EquipmentCompressor',$data);       
	}   
        
         public function EquipmentTempLoad()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Temp & Load";
            $data['linkUrl'] = "";
            $this->load->view('jsw/EquipmentTempLoad',$data);       
	}   
        
         public function RunningHoursConveyors()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Running Hours Conveyors";
            $data['linkUrl'] = "";
            $this->load->view('jsw/RunningHoursConveyors',$data);       
	}   
        
          public function RunningHoursEquipment()
	{
            $data['mydiv'] = "REPORTS";
            $data['mydiv2'] = "Mechanical";
            $data['mydiv3'] = "";
            $data['title'] = "Running Hours Equipment";
            $data['linkUrl'] = "";
            $this->load->view('jsw/RunningHoursEquipment',$data);       
	}   
             
     
      
}
