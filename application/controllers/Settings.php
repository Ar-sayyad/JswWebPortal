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
        
           
       public function saveUser(){
           $this->form_validation->set_rules('emp_name', 'Employee Name', 'required');
           $this->form_validation->set_rules('email', 'Email', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('dept', 'Department', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                           $emp_name= $this->input->post('emp_name');
                           $email = $this->input->post('email');
                           $password= strrev(sha1(md5($this->input->post('password'))));
                           $dept= $this->input->post('dept');
                           $userType= $this->input->post('userType');
                                                      
                            $cond = array('email' => $email);
                         $exist = $this->jsw_model->check_data_info('dbo.tblusers',$cond);
                         if($exist){
                                echo '<i class="material-icons">close</i> User Data Already Exist..!';
                         }else{                           
                                $data= array(
                                    'emp_name'=> $emp_name,
                                    'email'=> $email,
                                    'password'=> $password,
                                    'userType'=>$userType,
                                    'Dept'=> $dept
                                        );
                                $this->jsw_model->save_data_info('dbo.tblusers',$data);
                            
                            echo 1;
                         }
                    } 
            
        }
        
        public function update($id){
             $this->form_validation->set_rules('emp_name', 'Employee Name', 'required');
           //$this->form_validation->set_rules('email', 'Email', 'required');
          // $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('dept', 'Department', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                           $emp_name= $this->input->post('emp_name');
//                           $email = $this->input->post('email');
//                           $password= $this->input->post('password');
                           $dept= $this->input->post('dept');
                           $userType= $this->input->post('userType');
                                                   
                                $data= array(
                                    'emp_name'=> $emp_name,
                                    'userType'=>$userType,
                                    'Dept'=> $dept
                                        );
                            $where =array('user_id'=>$id);
                            $this->jsw_model->update_data_info('dbo.tblusers',$data,$where);
                      echo 1;
                     }
                         
        }
        
        public function delete($id){
                $where =array('user_id'=>$id);
                $this->jsw_model->delete_data_info('dbo.tblusers',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> User Details Deleted Successfully'));
                redirect(base_url() . 'Settings/users');    
                //redirect($this->agent->referrer());
        }
       
        
}
