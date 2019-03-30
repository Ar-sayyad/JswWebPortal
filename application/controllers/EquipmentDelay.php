<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquipmentDelay extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
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
            $data['mydiv2'] = "Equipment Delay";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Delay";
            $data['linkUrl'] = "";
            $data['mnth'] = "";
            $data['year'] ="";
            $t= $this->jsw_model->is_access_in(57);
            if($t==1){
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['EquipmentDelay_data'] = $this->jsw_model->select_data_info('dbo.tbl_Equipment_Delay_MF');  
            $this->load->view('jsw/EquipmentDelay',$data);                
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }           
	} 
                
        public function searchEquipmentDelay(){            
            $this->form_validation->set_rules('month', 'Month', 'required');
            $this->form_validation->set_rules('year', 'Year', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                      $this->session->set_flashdata('err_msg',validation_errors());
                      redirect(base_url() . 'EquipmentDelay');
                    }
                    else
                     { 
                        $month = $this->input->post('month');
                        $year = $this->input->post('year');
                        $cond = array('month' => $month,'year' => $year);
                        $EquipmentDelay_data= $this->jsw_model->check_data_info('dbo.tbl_rate_MF',$cond);                         
                        $this->EquipmentDelay($EquipmentDelay_data,$month,$year);
                     }                   
            
        }
        
        public function EquipmentDelay($EquipmentDelay_data,$month,$year){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "REquipment Delay";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Delay";
            $data['linkUrl'] = "";
            $data['mnth'] = $month;
            $data['year'] =$year;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['EquipmentDelay_data'] = $RateForm_data;
            $this->load->view('jsw/EquipmentDelay',$data);              
        }
        
      public function save(){
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('Delay_FIlter', 'Delay Filter', 'required');
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
                                    'Delay_start_Time'=> $this->input->post('Delay_start_Time'),
                                    'Delay_end_time'=> $this->input->post('Delay_end_time'),
                                    'Delay_Time'=> $this->input->post('Delay_Time'),
                                    'Equipment_Name'=> $this->input->post('Equipment_Name'),
                                    'Operator_Name'=> $this->input->post('Operator_Name'),
                                    'Remarks'=> $this->input->post('Remarks'),
                                    'Delay_FIlter'=>$this->input->post('Delay_FIlter'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_Equipment_Delay_MF',$data);
                            echo 1;
                      }
                          
      }
        
        public function update($id){
            $this->form_validation->set_rules('Delay_FIlter', 'Delay Filter', 'required');
            $this->form_validation->set_rules('Operator_Name', 'Operator Name', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     { 
                                $data= array(
                                        'Operator_Name'=> $this->input->post('Operator_Name'),
                                        'Remarks'=> $this->input->post('Remarks'),
                                        'Delay_FIlter'=>$this->input->post('Delay_FIlter')
                                   );
                                $where =array('Id'=>$id);
                                $this->jsw_model->update_data_info('dbo.tbl_Equipment_Delay_MF',$data,$where);
                                echo 1;  
                     }
        }
        
        public function delete($id){
                $where =array('Id'=>$id);
                $this->jsw_model->delete_data_info('dbo.tbl_Equipment_Delay_MF',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> Rate Form Details Deleted Successfully'));
                //redirect(base_url() . 'MBC');    
                redirect($this->agent->referrer());
        }
       
        
}
