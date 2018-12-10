<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBC extends CI_Controller {

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
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "MBC";
            $data['mydiv3'] = "";
            $data['title'] = "MBC";
            $data['linkUrl'] = "";
            $data['mnth'] = "";
            $data['year'] ="";
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['MBCForm_data'] = "";//$this->jsw_model->select_data_info('dbo.tbl_JettyForm_MF_DPR');  
            $this->load->view('jsw/MBCform',$data);            
	} 
                
        public function searchMBC(){            
            $this->form_validation->set_rules('month', 'Month', 'required');
            $this->form_validation->set_rules('year', 'Year', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                              $this->session->set_flashdata('err_msg',validation_errors());
                                redirect(base_url() . 'MBC');
                    }
                    else
                     { 
                        $month = $this->input->post('month');
                        $year = $this->input->post('year');
                        $cond = array('month' => $month,'year' => $year);
                        $MBCForm_data= $this->jsw_model->check_data_info('dbo.tbl_MBC_MF_DPR',$cond);                         
                        $this->MBC($MBCForm_data,$month,$year);
                     }                   
            
        }
        
        public function MBC($MBCForm_data,$month,$year){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "MBC";
            $data['mydiv3'] = "";
            $data['title'] = "MBC";
            $data['linkUrl'] = "";
            $data['mnth'] = $month;
            $data['year'] =$year;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['MBCForm_data'] = $MBCForm_data;
            $this->load->view('jsw/MBCform',$data);              
        }
        
      public function save(){
            $this->form_validation->set_rules('ETA_Dharamtar', 'Date-Time', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                            $trans_date = $this->input->post('ETA_Dharamtar');
                            $time=strtotime($trans_date);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                            $data= array(
                                    'ETA_Dharamtar'=> $trans_date,
                                    'MBC_name'=> $this->input->post('MBC_name'),
                                    'Cargo'=> $this->input->post('Cargo'),
                                    'bl_qty'=> $this->input->post('bl_qty'),
                                    'Load_Port'=> $this->input->post('Load_Port'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_MBC_MF_DPR',$data);
                            echo 1;
                      }
                          
      }
        
        public function update($id){
            $this->form_validation->set_rules('trans_date', 'Date', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                            $trans_date = $this->input->post('trans_date');
                            $time=strtotime($trans_date);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                            $data= array(
                                    'trans_date'=> $trans_date,
                                    'At_Jetty_under_discharge'=> $this->input->post('At_Jetty_under_discharge'),
                                    'At_Jetty_waiting_for_discharge'=> $this->input->post('At_Jetty_waiting_for_discharge'),
                                    'At_R_19_waiting_loaded'=> $this->input->post('At_R_19_waiting_loaded'),
                                    'At_gulf_waiting_loaded'=> $this->input->post('At_gulf_waiting_loaded'),
                                    'In_transit_from_MV_GULL_toJetty_Loaded'=> $this->input->post('In_transit_from_MV_GULL_toJetty_Loaded'),
                                    'Under_loading_at_MV'=> $this->input->post('Under_loading_at_MV'),
                                    'At_R_19_waiting_loaded'=> $this->input->post('Waiting_for_Loading'),
                                    'Waiting_for_Loading'=> $this->input->post('At_R_19_waiting_loaded'),
                                    'Waiting_at_jetty'=> $this->input->post('Waiting_at_jetty'),
                                    'Empty_at_gull_R_19'=> $this->input->post('Empty_at_gull_R_19'),
                                    'In_transit_from_jetty_to_MV'=> $this->input->post('In_transit_from_jetty_to_MV'),
                                    'Breakdown_offHired'=> $this->input->post('Breakdown_offHired'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                           $where =array('Id'=>$id);
                            $this->jsw_model->update_data_info('dbo.tbl_JettyForm_MF_DPR',$data,$where);
                            echo 1;
                     }
                         
        }
        
        public function delete($id){
                $where =array('Id'=>$id);
                $this->jsw_model->delete_data_info('dbo.tbl_JettyForm_MF_DPR',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> Jetty Details Deleted Successfully'));
                redirect(base_url() . 'Jetty');          
        }
       
        
}
