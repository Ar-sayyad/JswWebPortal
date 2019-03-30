<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RateForm extends CI_Controller {

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
            $data['mydiv2'] = "Rate Form";
            $data['mydiv3'] = "";
            $data['title'] = "Rate Form";
            $data['linkUrl'] = "";
            $data['mnth'] = "";
            $data['year'] ="";
            $t= $this->jsw_model->is_access_in(56);
            if($t==1){
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['RateForm_data'] = $this->jsw_model->select_data_info('dbo.tbl_rate_MF');  
            $this->load->view('jsw/RateForm',$data);                
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }            
	} 
                
        public function searchRateForm(){            
            $this->form_validation->set_rules('month', 'Month', 'required');
            $this->form_validation->set_rules('year', 'Year', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                      $this->session->set_flashdata('err_msg',validation_errors());
                      redirect(base_url() . 'RateForm');
                    }
                    else
                     { 
                        $month = $this->input->post('month');
                        $year = $this->input->post('year');
                        $cond = array('month' => $month,'year' => $year);
                        $RateForm_data= $this->jsw_model->check_data_info('dbo.tbl_rate_MF',$cond);                         
                        $this->RateForm($RateForm_data,$month,$year);
                     }                   
            
        }
        
        public function RateForm($RateForm_data,$month,$year){
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "Rate Form";
            $data['mydiv3'] = "";
            $data['title'] = "Rate Form";
            $data['linkUrl'] = "";
            $data['mnth'] = $month;
            $data['year'] =$year;
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['RateForm_data'] = $RateForm_data;
            $this->load->view('jsw/RateForm',$data);              
        }
        
      public function save(){
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('Rate', 'Rate', 'required');
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
                                    'Rate'=> $this->input->post('Rate'),
                                    'Description'=> $this->input->post('Description'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_rate_MF',$data);
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
                                    'Rate'=> $this->input->post('Rate'),
                                    'Description'=> $this->input->post('Description'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $where =array('SL_no'=>$id);
                            $this->jsw_model->update_data_info('dbo.tbl_rate_MF',$data,$where);
                      echo 1;
                     }
                         
        }
        
        public function delete($id){
                $where =array('SL_no'=>$id);
                $this->jsw_model->delete_data_info('dbo.tbl_rate_MF',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> Rate Form Details Deleted Successfully'));
                //redirect(base_url() . 'MBC');    
                redirect($this->agent->referrer());
        }
       
        
}
