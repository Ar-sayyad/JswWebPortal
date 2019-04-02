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
       // $this->jsw_model->is_admin_logged_in();
        $this->load->helper('file');        
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
       public function index()
	{
                 if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Users";
            $data['mydiv3'] = "";
            $data['title'] = "Users";
            $data['linkUrl'] = "";
            $cond = array('userType !=' => $this->session->userdata('userType'));
            $data['user_data'] = $this->jsw_model->check_data_info('dbo.tblusers',$cond);  
            $this->load->view('jsw/users',$data); 
            }else{
                       redirect(base_url().'Login');        
               }
	} 
         public function users()
	{
                 if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){  
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Users";
            $data['mydiv3'] = "";
            $data['title'] = "Users";
            $data['linkUrl'] = "";
            $cond = array('userType !=' => $this->session->userdata('userType'));
            $data['user_data'] = $this->jsw_model->check_data_info('dbo.tblusers',$cond);  
            $this->load->view('jsw/users',$data);    
             }else{
                       redirect(base_url().'Login');        
               }
	} 
                
         public function pages()
	{
                  if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){ 
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Pages";
            $data['mydiv3'] = "";
            $data['title'] = "Pages";
            $data['linkUrl'] = "";
            $data['page_data'] = $this->jsw_model->select_data_info('dbo.pages');  
            $this->load->view('jsw/pages',$data);  
             }else{
                       redirect(base_url().'Login');        
               }
	} 
        
        public function department()
	{
                 if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('user_login') == 1 ){ 
            $data['mydiv'] = "Settings";
            $data['mydiv2'] = "Department";
            $data['mydiv3'] = "";
            $data['title'] = "Department";
            $data['linkUrl'] = "";
            $data['dept_data'] = $this->jsw_model->select_data_info('dbo.userTypes');  
            $this->load->view('jsw/department',$data); 
             }else{
                       redirect(base_url().'Login');        
               }
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
           $this->form_validation->set_rules('emp_code', 'Employee Code', 'required');
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
                           $emp_code= $this->input->post('emp_code');
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
                                    'AD_user_id'=> $emp_code,
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
             $this->form_validation->set_rules('emp_code', 'Employee Code', 'required');
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
                           $emp_code= $this->input->post('emp_code');
//                           $email = $this->input->post('email');
//                           $password= $this->input->post('password');
                           $dept= $this->input->post('dept');
                           $userType= $this->input->post('userType');
                                                   
                                $data= array(
                                    'emp_name'=> $emp_name,
                                    'AD_user_id'=> $emp_code,
                                    'userType'=>$userType,
                                    'Dept'=> $dept
                                        );
                            $where =array('user_id'=>$id);
                            $this->jsw_model->update_data_info('dbo.tblusers',$data,$where);
                      echo 1;
                     }
                         
        }
        
         public function updatePassword($id){
//             $this->form_validation->set_rules('curr_password', 'Current Password', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('confirm', 'confirm', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
//                           $curr_password= strrev(sha1(md5($this->input->post('curr_password'))));
//                            $cond = array('user_id' => $this->session->userdata('log_id'),'password' => $curr_password);
//                            $exist = $this->jsw_model->check_data_info('dbo.tblusers',$cond);
//                         if($exist){
                                  $password= strrev(sha1(md5($this->input->post('password'))));

                                   $data= array('password'=> $password);
                                   $where =array('user_id'=>$id);
                                   $this->jsw_model->update_data_info('dbo.tblusers',$data,$where);
                             echo 1;  
                             //$this->session->sess_destroy();	
//                         }else{  
//                              echo '<i class="material-icons">close</i> Current Password of admin is Invalid..!';     
//                         }
                     }
                         
        }
        
        
        public function delete($id){
                $where =array('user_id'=>$id);
                $this->jsw_model->delete_data_info('dbo.tblusers',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> User Details Deleted Successfully'));
                redirect(base_url() . 'Settings/users');    
                //redirect($this->agent->referrer());
        }
       
        public function saveDept(){
           $this->form_validation->set_rules('dept_name', 'Department Name', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                           $dept_name= $this->input->post('dept_name');                                                      
                            $cond = array('Department' => $dept_name);
                         $exist = $this->jsw_model->check_data_info('dbo.UserTypes',$cond);
                         if($exist){
                                echo '<i class="material-icons">close</i> Name Already Exist..!';
                         }else{                           
                                $data= array('Department'=> $dept_name);
                                $this->jsw_model->save_data_info('dbo.UserTypes',$data);
                            
                            echo 1;
                         }
                    } 
            
        }
        
         public function updateDept($id){
            $this->form_validation->set_rules('dept_name', 'Department Name', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                            $dept_name= $this->input->post('dept_name'); 
                            $cond = array('Department' => $dept_name, 'userType!=' => $id);
                            $exist = $this->jsw_model->check_data_info('dbo.UserTypes',$cond);
                         
                         if($exist){
                                echo '<i class="material-icons">close</i> Department Name Already Exist..!';
                         }else{                           
                                $data= array('Department'=> $dept_name);
                                $where =array('userType'=>$id);
                                $this->jsw_model->update_data_info('dbo.UserTypes',$data,$where);
                                echo 1;
                         }
                               
                     }
                         
        }
        
}
