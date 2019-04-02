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
            $data['mnth'] = "";
            $data['year'] ="";
            $t= $this->jsw_model->is_access_in(55);
            if($t==1){
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['CargoDespatchform_data'] = $this->jsw_model->select_data_info('dbo.tbl_cargo_despatch_road_MF_DPR');  
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
            $this->form_validation->set_rules('month', 'Month', 'required');
            $this->form_validation->set_rules('year', 'Year', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                      $this->session->set_flashdata('err_msg',validation_errors());
                      redirect(base_url() . 'CargoDespatch');
                    }
                    else
                     { 
                        $month = $this->input->post('month');
                        $year = $this->input->post('year');
                        $cond = array('month' => $month,'year' => $year);
                        $CargoDespatch_data= $this->jsw_model->check_data_info('dbo.tbl_cargo_despatch_road_MF_DPR',$cond);                         
                        $this->CargoDespatch($CargoDespatch_data,$month,$year);
                     }                   
            
        }
        
        public function CargoDespatch($CargoDespatch_data,$month,$year){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "Cargo Despatch";
            $data['mydiv3'] = "";
            $data['title'] = "Cargo Despatch";
            $data['linkUrl'] = "";
            $data['mnth'] = $month;
            $data['year'] =$year;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['CargoDespatchform_data'] = $CargoDespatch_data;
            $this->load->view('jsw/CargoDespatchform',$data);              
        }
        
      public function save(){
            $this->form_validation->set_rules('date', 'Date', 'required');
             $this->form_validation->set_rules('Mother_vessel', 'Mother Vessel', 'required');
              $this->form_validation->set_rules('cargo', 'Cargo', 'required');
               $this->form_validation->set_rules('cargo_qty_for_day', 'Cargo Qty', 'required');
                $this->form_validation->set_rules('TripsForDay_FromBerthNo', 'Trips', 'required');
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
