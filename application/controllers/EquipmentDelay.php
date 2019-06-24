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
            $data['mydiv2'] = "Equipment Delay";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Delay";
            $data['linkUrl'] = "";
                        $date=date_create(date('Y-m-d'));
                        date_sub($date,date_interval_create_from_date_string("1 days"));
                        $prev =  date_format($date,"Y-m-d");
            $data['formdate'] = $prev;
            $data['todate'] = date('Y-m-d');
            $t= $this->jsw_model->is_access_in(57);
            if($t==1){
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['EquipmentDelay_data'] = '';  
            $this->load->view('jsw/EquipmentDelay',$data);                
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }    
                 }else{
                       redirect(base_url().'Login');        
               }
	} 
                
        public function searchEquipmentDelay(){            
            $this->form_validation->set_rules('formdate', 'From Date', 'required');
            $this->form_validation->set_rules('todate', 'To Date', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                      $this->session->set_flashdata('err_msg',validation_errors());
                      redirect(base_url() . 'EquipmentDelay');
                    }
                    else
                     { 
                         $startDate = $this->input->post('formdate');
                         $endDate = $this->input->post('todate');                        
                        $qry ="SELECT * FROM tbl_Equipment_Delay_MF where date between '$startDate' and '$endDate'";
                        $EquipmentDelay_data = $this->db->query($qry)->result_array();
                        $this->EquipmentDelay($EquipmentDelay_data,$startDate,$endDate);
                     }                  
            
        }
        
        public function EquipmentDelay($EquipmentDelay_data,$startDate,$endDate){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "Equipment Delay";
            $data['mydiv3'] = "";
            $data['title'] = "Equipment Delay";
            $data['linkUrl'] = "";
            $data['formdate'] = $startDate;
            $data['todate'] = $endDate;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['EquipmentDelay_data'] = $EquipmentDelay_data;
            $this->load->view('jsw/EquipmentDelay',$data);           
        }
        
      public function save(){
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('Remarks', 'Remarks', 'required');
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
                                   // 'Delay_FIlter'=>$this->input->post('Delay_FIlter'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_Equipment_Delay_MF',$data);
                            echo 1;
                      }
                          
      }
        
        public function update($id){
            $this->form_validation->set_rules('Remarks', 'Remarks', 'required');
            //$this->form_validation->set_rules('Operator_Name', 'Remarks', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     { 
                                $data= array(
                                        //'Operator_Name'=> $this->input->post('Operator_Name'),
                                        'Remarks'=> $this->input->post('Remarks')
                                       // 'Delay_FIlter'=>$this->input->post('Delay_FIlter')
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
