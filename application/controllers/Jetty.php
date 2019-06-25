<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jetty extends CI_Controller {

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
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "Jetty";
            $data['mydiv3'] = "";
            $data['title'] = "Jetty";
            $data['linkUrl'] = "";
            $data['date'] = date('Y-m-d');
             $t= $this->jsw_model->is_access_in(53);
                if($t==1){
                    $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
                     $cond = array('date' => date('Y-m-d'));
                    $data['JettyForm_data'] = $this->jsw_model->check_data_info('dbo.tbl_JettyForm_MF_DPR',$cond);  
                    $this->load->view('jsw/Jettyforms',$data);   
                }else{
                       $data['title'] = "Access Denied..!";
                        $data['icons'] = "error";
                        $this->load->view('jsw/denied',$data);
                }
                 }else{
                       redirect(base_url().'Login');        
               }
                     
	} 
                
        public function searchJetty(){            
            $this->form_validation->set_rules('date', 'Date', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                              $this->session->set_flashdata('err_msg',validation_errors());
                                redirect(base_url() . 'Jetty');
                    }
                    else
                     { 
                        $date= $this->input->post('date');
                        $cond = array('date' => $date);
                         $JettyForm_data= $this->jsw_model->check_data_info('dbo.tbl_JettyForm_MF_DPR',$cond);                         
                        $this->Jetty($JettyForm_data,$date);
                     }                   
            
        }
        
        public function searchVesselName(){
                $this->form_validation->set_rules('VCN_No', 'VCN_No', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                              $this->session->set_flashdata('err_msg',validation_errors());
                                redirect(base_url() . 'Jetty');
                    }
                    else
                     { 
                        $VCN_No= $this->input->post('VCN_No');
                        $cond = array('VAN_ID' => $VCN_No);
                         $VCN_No_data= $this->jsw_model->check_data_info('dbo.tbl_vcn_mv_cargo_mf',$cond);   
                         foreach($VCN_No_data as $vcn){
                                 echo $vcn['VESSEL_NAME'];
                         }
                     }              
                
        }
        

        public function Jetty($JettyForm_data,$date){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "Jetty";
            $data['mydiv3'] = "";
            $data['title'] = "Jetty";
            $data['linkUrl'] = "";
            $data['date'] = $date;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['JettyForm_data'] = $JettyForm_data;
            $this->load->view('jsw/Jettyforms',$data);              
        }
        
      public function save(){
            $this->form_validation->set_rules('trans_date', 'Date', 'required');
            $this->form_validation->set_rules('VCN_No', 'VCN No.', 'required');
            $this->form_validation->set_rules('Mother_Vessel_Name', 'Mother Vessel Name', 'required');
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
                                    'date'=> $trans_date,
                                    'At_Jetty_under_discharge'=> $this->input->post('At_Jetty_under_discharge'),
                                    'vcn_no'=> $this->input->post('VCN_No'),
                                    'Mother_Vessel_Name' => $this->input->post('Mother_Vessel_Name'),
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
                                    'coastal_cargo'=> $this->input->post('coastal_cargo'),
                                    'hatch_cover_repair'=> $this->input->post('hatch_cover_repair'),
                                    'dry_dock'=> $this->input->post('dry_dock'),
                                    'Breakdown_offHired'=> $this->input->post('Breakdown_offHired'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_JettyForm_MF_DPR',$data);
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
                                    'date'=> $trans_date,
                                    'At_Jetty_under_discharge'=> $this->input->post('At_Jetty_under_discharge'),
                                    'Mother_Vessel_Name' => $this->input->post('Mother_Vessel_Name'),
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
