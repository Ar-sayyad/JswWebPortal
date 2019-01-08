<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->library('user_agent');
        $this->load->model('jsw_model');
        $this->jsw_model->is_admin_logged_in();
        $this->load->helper('file');        
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
       public function index()
	{
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Users";
            $data['mydiv3'] = "";
            $data['title'] = "Users";
            $data['linkUrl'] = "";
            $cond = array('userType !=' => $this->session->userdata('userType'));
            $data['user_data'] = $this->jsw_model->check_data_info('dbo.tblusers',$cond);  
            $this->load->view('jsw/users',$data);            
	} 
         public function users()
	{
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Users";
            $data['mydiv3'] = "";
            $data['title'] = "Users";
            $data['linkUrl'] = "";
            $cond = array('userType !=' => $this->session->userdata('userType'));
            $data['user_data'] = $this->jsw_model->check_data_info('dbo.tblusers',$cond);  
            $this->load->view('jsw/users',$data);            
	} 
                
         public function pages()
	{
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Pages";
            $data['mydiv3'] = "";
            $data['title'] = "Pages";
            $data['linkUrl'] = "";
            $data['page_data'] = $this->jsw_model->select_data_info('dbo.pages');  
            $this->load->view('jsw/pages',$data);            
	} 
        
        public function department()
	{
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Department";
            $data['mydiv3'] = "";
            $data['title'] = "Department";
            $data['linkUrl'] = "";
            $data['dept_data'] = $this->jsw_model->select_data_info('dbo.userTypes');  
            $this->load->view('jsw/department',$data);            
	} 
              
      public function saveAccess(){              
                 $userType_id= $this->input->post('userType_id');
                 $data= array('Access_pages'=> implode(',', $this->input->post('page_id')));
                 $where =array('userType'=>$userType_id);
                 $this->jsw_model->update_data_info('dbo.UserTypes',$data,$where);
                echo 1;                          
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
