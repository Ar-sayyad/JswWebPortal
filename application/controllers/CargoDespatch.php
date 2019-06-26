<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CargoDespatch extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
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
            $data['mydiv2'] = "Cargo Despatch";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Despatch";
            $data['linkUrl'] = "";
            $data['date'] = date('Y-m-d');
            $t= $this->jsw_model->is_access_in(55);
            if($t==1){
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $cond = array('date' => date('Y-m-d'));
            $data['CargoDespatchform_data'] = $this->jsw_model->check_data_info('dbo.tbl_cargo_despatch_road_MF_DPR',$cond);  
            $this->load->view('jsw/CargoDespatchform',$data);                
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
                
        public function searchCargoDespatch(){            
            $this->form_validation->set_rules('date', 'Date', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                      $this->session->set_flashdata('err_msg',validation_errors());
                      redirect(base_url() . 'CargoDespatch');
                    }
                    else
                     { 
                        $date = $this->input->post('date');
                        $cond = array('date' => $date);
                        $CargoDespatch_data= $this->jsw_model->check_data_info('dbo.tbl_cargo_despatch_road_MF_DPR',$cond);                         
                        $this->CargoDespatch($CargoDespatch_data,$date);
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
                                echo  $phpArray =($vcn['VESSEL_NAME'].",".$vcn['CARGO_NAME']);
                                // echo json_encode($phpArray);
                         }
                     }              
                
        }
        
        public function CargoDespatch($CargoDespatch_data,$date){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "Cargo Despatch";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Despatch";
            $data['linkUrl'] = "";
            $data['date'] = $date;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['CargoDespatchform_data'] = $CargoDespatch_data;
            $this->load->view('jsw/CargoDespatchform',$data);              
        }
        
      public function save(){
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('VCN_No', 'VCN No.', 'required');
             $this->form_validation->set_rules('Mother_vessel', 'Mother Vessel', 'required');
              $this->form_validation->set_rules('cargo', 'Cargo', 'required');
               $this->form_validation->set_rules('cargo_qty_for_day', 'Cargo Qty', 'required');
                $this->form_validation->set_rules('TripsForDay_FromBerthNo', 'Trips', 'required');
                $this->form_validation->set_rules('Selection', 'Selection', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                            $trans_date = $this->input->post('date');
                            $Selection = $this->input->post('Selection');
                            $trips = $this->input->post('TripsForDay_FromBerthNo')." ".$Selection;
                            $time=strtotime($trans_date);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                            $data= array(
                                    'date'=> $trans_date,
                                    'vcn_num'=> $this->input->post('VCN_No'),
                                    'Mother_vessel'=> $this->input->post('Mother_vessel'),
                                    'cargo'=> $this->input->post('cargo'),
                                    'cargo_qty_for_day'=> $this->input->post('cargo_qty_for_day'),
                                    'TripsForDay_FromBerthNo'=> $trips,
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_cargo_despatch_road_MF_DPR',$data);
                            echo 1;
                      }
                          
      }
        
        public function update($id){
            $this->form_validation->set_rules('date', 'Date', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                           $trans_date = $this->input->post('date');
                            $time=strtotime($trans_date);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                            $data= array(
                                    'date'=> $trans_date,
                                    'Mother_vessel'=> $this->input->post('Mother_vessel'),
                                    'cargo'=> $this->input->post('cargo'),
                                    'cargo_qty_for_day'=> $this->input->post('cargo_qty_for_day'),
                                    'TripsForDay_FromBerthNo'=> $this->input->post('TripsForDay_FromBerthNo'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $where =array('Id'=>$id);
                            $this->jsw_model->update_data_info('dbo.tbl_cargo_despatch_road_MF_DPR',$data,$where);
                      echo 1;
                     }
                         
        }
        
        public function delete($id){
                $where =array('Id'=>$id);
                $this->jsw_model->delete_data_info('dbo.tbl_cargo_despatch_road_MF_DPR',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> Cargo Dispatch Details Deleted Successfully'));
                //redirect(base_url() . 'MBC');    
                redirect($this->agent->referrer());
        }
       
        
}
