<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ETAMumbai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
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
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "ETAMumbai";
            $data['mydiv3'] = "";
            $data['title'] = "ETA Mumbai";
            $data['linkUrl'] = "";
            $data['date'] = date('Y-m-d');
            $t= $this->jsw_model->is_access_in(54);
            if($t==1){
                $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
                $cond = array('date' =>date('Y-m-d'));
                $data['ETA_data'] = $this->jsw_model->check_data_info('dbo.tbl_Mvessel_ExpectedAtMumbai_mf',$cond);  
                $this->load->view('jsw/ETA_Mumbai',$data);                
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
                
        public function searchETAMumbai(){            
            $this->form_validation->set_rules('date', 'Date', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                              $this->session->set_flashdata('err_msg',validation_errors());
                                redirect(base_url() . 'ETAMumbai');
                    }
                    else
                     { 
                        $date = $this->input->post('date');
                        $cond = array('date' => $date);
                        $ETA_data= $this->jsw_model->check_data_info('dbo.tbl_Mvessel_ExpectedAtMumbai_mf',$cond);                         
                        $this->ETAMumbai($ETA_data,$date);
                     }                   
            
        }
        
        public function ETAMumbai($ETA_data,$date){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "ETAMumbai";
            $data['mydiv3'] = "";
            $data['title'] = "ETA Mumbai";
            $data['linkUrl'] = "";
            $data['date'] = $date;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['ETA_data'] = $ETA_data;
            $this->load->view('jsw/ETA_Mumbai',$data);              
        }
        
      public function save(){
            $this->form_validation->set_rules('ETA_Mumbai', 'Date-Time', 'required');
             $this->form_validation->set_rules('date', 'Date', 'required');
             $this->form_validation->set_rules('MvesselName', 'Mother Vessel Name', 'required');
             $this->form_validation->set_rules('Cargo', 'Cargo', 'required');
             $this->form_validation->set_rules('Bl_Qty', 'Balance Qty', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                            $trans_date = $this->input->post('ETA_Mumbai');
                            $time=strtotime($trans_date);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                            $data= array(
                                    'date'=> $this->input->post('date'),
                                    'ETA_Mumbai'=> $trans_date,
                                    'MvesselName'=> $this->input->post('MvesselName'),
                                    'Cargo'=> $this->input->post('Cargo'),
                                    'Bl_Qty'=> $this->input->post('Bl_Qty'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_Mvessel_ExpectedAtMumbai_mf',$data);
                            echo 1;
                      }
                          
      }
        
        public function update($id){
            $this->form_validation->set_rules('ETA_Mumbai', 'Date-Time', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                            $trans_date = $this->input->post('ETA_Mumbai');
                            $time=strtotime($trans_date);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                            $data= array(
                                    'ETA_Mumbai'=> $trans_date,
                                    'MvesselName'=> $this->input->post('MvesselName'),
                                    'Cargo'=> $this->input->post('Cargo'),
                                    'Bl_Qty'=> $this->input->post('Bl_Qty'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $where =array('Id'=>$id);
                            $this->jsw_model->update_data_info('dbo.tbl_Mvessel_ExpectedAtMumbai_mf',$data,$where);
                      echo 1;
                     }
                         
        }
        
        public function delete($id){
                $where =array('Id'=>$id);
                $this->jsw_model->delete_data_info('dbo.tbl_Mvessel_ExpectedAtMumbai_mf',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> ETA Mumbai Details Deleted Successfully'));
                //redirect(base_url() . 'MBC');    
                redirect($this->agent->referrer());
        }
       
        
}
