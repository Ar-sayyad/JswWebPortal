<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

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
            $data['mydiv'] = "Account";
            $data['mydiv2'] = "Users";
            $data['mydiv3'] = "";
            $data['title'] = "My Profile";
            $data['linkUrl'] = "";
            $cond = array('user_id' => $this->session->userdata('log_id'));
            $data['user_data'] = $this->jsw_model->check_data_info('dbo.tblusers',$cond);  
            $this->load->view('jsw/Accounts',$data);            
	} 
        
         public function password()
	{
            $data['mydiv'] = "Account";
            $data['mydiv2'] = "Password";
            $data['mydiv3'] = "";
            $data['title'] = "Password";
            $data['linkUrl'] = "";
            $cond = array('user_id' => $this->session->userdata('log_id'));
            $data['user_data'] = $this->jsw_model->check_data_info('dbo.tblusers',$cond);  
            $this->load->view('jsw/password',$data);            
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
//           $this->form_validation->set_rules('dept', 'Department', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                           $emp_name= $this->input->post('emp_name');
//                           $dept= $this->input->post('dept');
//                           $userType= $this->input->post('userType');
                                                   
                                $data= array(
                                    'emp_name'=> $emp_name
                                   // 'Dept'=> $dept
                                        );
                            $where =array('user_id'=>$id);
                            $this->jsw_model->update_data_info('dbo.tblusers',$data,$where);
                      echo 1;
                     }
                         
        }
        
         public function updatePassword($id){
             $this->form_validation->set_rules('curr_password', 'Current Password', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('confirm', 'confirm', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                           $curr_password= strrev(sha1(md5($this->input->post('curr_password'))));
                            $cond = array('user_id' => $id,'password' => $curr_password);
                            $exist = $this->jsw_model->check_data_info('dbo.tblusers',$cond);
                         if($exist){
                                  $password= strrev(sha1(md5($this->input->post('password'))));

                                   $data= array('password'=> $password);
                                   $where =array('user_id'=>$id);
                                   $this->jsw_model->update_data_info('dbo.tblusers',$data,$where);
                             echo 1;  
                             $this->session->sess_destroy();	
                         }else{  
                              echo '<i class="material-icons">close</i> Current Password is Invalid..!';     
                         }
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
