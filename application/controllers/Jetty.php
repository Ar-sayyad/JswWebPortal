<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jetty extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
	$this->load->library('form_validation');
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
            $data['mydiv2'] = "Jetty";
            $data['mydiv3'] = "";
            $data['title'] = "Jetty";
            $data['linkUrl'] = "";
            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
            $data['JettyForm_data'] = $this->jsw_model->select_data_info('dbo.tbl_JettyForm_MF_DPR');  
            $this->load->view('jsw/Jettyforms',$data);            
	} 
        
          public function loadForm()
	{
            $data['mydiv'] = "Forms";
            $data['mydiv2'] = "Jetty";
            $data['mydiv3'] = "";
            $data['title'] = "Jetty";
            $data['linkUrl'] = "";
//            $data['month_info'] = $this->jsw_model->select_data_info('dbo.TblMonth'); 
//             $data['JettyForm_data'] = $this->jsw_model->select_data_info('dbo.tbl_JettyForm_MF_DPR');  
            $this->load->view('jsw/modelName',$data);            
	} 
        
        
        public function searchJetty(){            
            $this->form_validation->set_rules('month', 'Month', 'required');
            $this->form_validation->set_rules('year', 'Year', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                              $this->session->set_flashdata('err_msg',validation_errors());
                                redirect(base_url() . 'mhsPerformance');
                    }
                    else
                     { 
                        $month = $this->input->post('month');
                        $year = $this->input->post('year');
                      $cond = array('Month' => trim($this->input->post('month')),
                                'Year' => trim($this->input->post('year')),
                                'Type' => 'MHS');
                         $mhsPerformance_info= $this->jsw_model->check_data_info('dbo.TblMHSPerformanceEC',$cond);                         
                        $this->mhsPerformance($mhsPerformance_info);
                     }                   
            
        }
        
        public function searchBudget(){ 
                    $this->form_validation->set_rules('Month', 'Month', 'required');
                    $this->form_validation->set_rules('year', 'Year', 'required');
                    if ($this->form_validation->run() == FALSE)
                             {
                                      $this->session->set_flashdata('err_msg','All Fields Required..!');
                                        redirect(base_url() . 'budget');
                            }
                            else
                             { 
                                $mn= trim($this->input->post('Month'));
                                $yr = trim($this->input->post('year'));
                                $cond = array('Month' =>$mn,'Year' =>$yr );
                                $data_info = $this->jsw_model->check_data_info('dbo.tblMISBudget',$cond);                         
                                $this->budget($data_info,$mn,$yr);
                             }   
                           
        }
        
        
        public function budget($data_info,$mn,$yr){
                        $data['title'] = "Budget";
                        $data['icons'] = "attach_money";
                        $data['Month'] = $mn;
                        $data['Year'] = $yr;
                        $data['month_info'] = $this->jsw_model->select_data_info('dbo.tblMonth');  
                        $data['budget_info'] =  $data_info;
                        $this->load->view('swpl/budget',$data);        
        }
        
        
      public function save(){
            $this->form_validation->set_rules('trans_date', 'Date', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {   
                            $trans_date = $this->input->post('trans_date');
                            $time=strtotime($trans_date);
                            $month=date("F",$time);
                            $year=date("Y",$time);
                            $data= array(
                                    'trans_date'=> $trans_date,
                                    'At_Jetty_under_discharge'=> $this->input->post('At_Jetty_under_discharge'),
                                    'At_Jetty_waiting_for_discharge'=> $this->input->post('At_Jetty_waiting_for_discharge'),
                                    'At_R_19_waiting_loaded'=> $this->input->post('At_R_19_waiting_loaded'),
                                    'At_gulf_waiting_loaded'=> $this->input->post('At_gulf_waiting_loaded'),
                                    'In_transit_from_MV_GULL_toJetty_Loaded'=> $this->input->post('In_transit_from_MV_GULL_toJetty_Loaded'),
                                    'Under_loading_at_MV'=> $this->input->post('Under_loading_at_MV'),
                                    'At_R_19_waiting_loaded'=> $this->input->post('Waiting_for_Loading'),
                                    'Waiting_for_Loading'=> $this->input->post('At_R_19_waiting_loaded'),
                                    'Waiting_at_jetty'=> $this->input->post('Waiting_at_jetty'),
                                    'Empty_at_gull_R_19'=> $this->input->post('Empty_at_gull_R_19'),
                                    'In_transit_from_jetty_to_MV'=> $this->input->post('In_transit_from_jetty_to_MV'),
                                    'Breakdown_offHired'=> $this->input->post('Breakdown_offHired'),
                                    'month'=> $month,
                                    'year'=> $year
                               );
                            $this->jsw_model->save_data_info('dbo.tbl_JettyForm_MF_DPR',$data);
                            echo 1;
                      }
                          
      }
        
        public function update($id){
             $this->form_validation->set_rules('Month', 'Month', 'required');
            $this->form_validation->set_rules('year', 'Year', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                            //redirect(base_url() . 'tugs');
                    }
                    else
                     {                              
                           $Month= $this->input->post('Month');
                           $year = $this->input->post('year');                          
                            $data= array(
                                    'Month'=> $Month,
                                    'Year'=> $year,
                                    'Discription'=> $this->input->post('Discription'),
                                    'UOM'=> $this->input->post('UOM'),
                                    'Budget'=> $this->input->post('Budget'));
                             $where =array('Sr_No'=>$id);
                            $this->jsw_model->update_data_info('dbo.tblMISBudget',$data,$where);
                            echo 1;
                     }
                         
        }
        
        public function delete($id){
             if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('mechanical_login') == 1) {
                $where =array('Sr_No'=>$id);
                $this->swpl_model->delete_data_info('dbo.tblMISBudget',$where);
                $this->session->set_flashdata('msg', ('<i class="material-icons">check_circle_outline</i> Budget Details Deleted Successfully'));
                redirect(base_url() . 'budget');
            }
            else {
                $this->session->set_userdata('last_page', current_url());
                redirect(base_url());
            }    
        }
       
        
}
