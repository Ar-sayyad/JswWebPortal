<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBC extends CI_Controller {

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
            $data['mydiv2'] = "MBC";
            $data['mydiv3'] = "";
            $data['title'] = "MBC";
            $data['linkUrl'] = "";
            $data['mnth'] = "";
            $data['year'] ="";
            $t= $this->jsw_model->is_access_in(54);
            if($t==1){
                $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
                $data['MBCForm_data'] = $this->jsw_model->select_data_info('dbo.tbl_MBC_MF_DPR');  
                $this->load->view('jsw/MBCform',$data);                
            }else{
                $data['title'] = "Access Denied..!";
                $data['icons'] = "error";
                $this->load->view('jsw/denied',$data);
                }
                 }else{
                       redirect(base_url().'Login');        
               }
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
             $this->form_validation->set_rules('MBC_name', 'MBC Name', 'required');
             $this->form_validation->set_rules('Cargo', 'Cargo', 'required');
             $this->form_validation->set_rules('bl_qty', 'Balance Qty', 'required');
             $this->form_validation->set_rules('Load_Port', 'Load Port', 'required');
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
                            $where =array('Id'=>$id);
                            $this->jsw_model->update_data_info('dbo.tbl_MBC_MF_DPR',$data,$where);
                      echo 1;
                     }
                         
        }
        
        public function delete($id){
                $where =array('Id'=>$id);
                $this->jsw_model->delete_data_info('dbo.tbl_MBC_MF_DPR',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> MBC Details Deleted Successfully'));
                //redirect(base_url() . 'MBC');    
                redirect($this->agent->referrer());
        }
       
        
}
