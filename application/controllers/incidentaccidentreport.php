<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class incidentaccidentreport extends CI_Controller{
        
        function __construct()
        {
            parent::__construct();

            $this->load->database();
            $this->load->model('incidentaccidentreport_model');
            $this->load->model('notification_model');
        }
        
        public function index(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $this->form_validation->set_rules('victim_name', 'Victim name', 'required|callback_fullname_check');
            $this->form_validation->set_rules('victim_age', 'Victim age', 'required');
            $this->form_validation->set_rules('victim_citizenship', 'Victim citizenship', 'required');
            $this->form_validation->set_rules('victim_employment_designation', 'victim employment designation', 'required');
            $this->form_validation->set_rules('victim_faculty', 'Victim faculty', 'required');
            $this->form_validation->set_rules('review_date', 'review date', 'required');
            $this->form_validation->set_rules('incident_date', 'incident date', 'required');
            $this->form_validation->set_rules('incident_location', 'incident location', 'required');
            $this->form_validation->set_rules('incident_details', 'incident details', 'required');
            $this->form_validation->set_rules('incident_actions', 'incident actions', 'required');
            $this->form_validation->set_rules('reporter_name', 'reporter name', 'required');
            $this->form_validation->set_rules('reporter_designation', 'reporter designation', 'required');
            $this->form_validation->set_rules('reporter_date', 'reporter date', 'required');
            $this->form_validation->set_rules('investigation_victim_age', 'investigation victim age', 'required');
            $this->form_validation->set_rules('investigation_victim_citizenship', 'investigation victim citizenship', 'required');
            $this->form_validation->set_rules('investigation_victim_job_description', 'investigation victim job description', 'required');
            $this->form_validation->set_rules('investigation_findings', 'investigation findings', 'required');
            $this->form_validation->set_rules('investigation_preventive_no[0]', 'investigation preventive no', 'required|callback_fullname_check');
            $this->form_validation->set_rules('investigation_preventive_action[0]', 'investigation preventive action', 'required|alpha_numeric_spaces');
            $this->form_validation->set_rules('investigation_preventive_by_whom[0]', 'investigation preventive by whom', 'required');
            $this->form_validation->set_rules('investigation_preventive_timeline[0]', 'investigation preventive timeline', 'required');
            
            
            
            if ($this->form_validation->run() == FALSE){
                
                //$data['load'] = "true";
                //$id = 1;
                //$data['retrieved'] = $this->annex2_model->get_form_by_id($id);
                
                $this->load->template('incidentaccidentreport_view', $data);
                
            }else{
                
                $ar1 = implode(',',$this->input->post('investigation_preventive_no'));
                $ar2 = implode(',',$this->input->post('investigation_preventive_action'));
                $ar3 = implode(',',$this->input->post('investigation_preventive_by_whom'));
                $ar4 = implode(',',$this->input->post('investigation_preventive_timeline'));
                
                $data = array(
                    'account_id' => $this->session->userdata('account_id'),
                    'victim_name' => $this->input->post('victim_name'),
                    'victim_age' => $this->input->post('victim_age'),
                    'victim_gender' => $this->input->post('victim_gender'),
                    'victim_citizenship' => $this->input->post('victim_citizenship'),
                    'victim_employment_designation' => $this->input->post('victim_employment_designation'),
                    'victim_faculty' => $this->input->post('victim_faculty'),
                    'doc_id' => $this->input->post('doc_id'),
                    'review_date' => $this->input->post('review_date'),
                    'incident_date' => $this->input->post('incident_date'),
                    'incident_time' => $this->input->post('incident_time'),
                    'incident_location' => $this->input->post('incident_location'),
                    'incident_type' => $this->input->post('incident_type'),
                    'incident_type_description' => $this->input->post('incident_type_description'),
                    'incident_injury' => $this->input->post('incident_injury'),
                    'incident_physician_or_hospital' => $this->input->post('incident_physician_or_hospital'),
                    'incident_details' => $this->input->post('incident_details'),
                    'incident_actions' => $this->input->post('incident_actions'),
                    'reporter_name' => $this->input->post('reporter_name'),
                    'reporter_designation' => $this->input->post('reporter_designation'),
                    'reporter_date' => $this->input->post('reporter_date'),
                    'investigation_victim' => $this->input->post('investigation_victim'),
                    'investigation_victim_age' => $this->input->post('investigation_victim_age'),
                    'investigation_victim_citizenship' => $this->input->post('investigation_victim_citizenship'),
                    'investigation_victim_job_description' => $this->input->post('investigation_victim_job_description'),
                    'investigation_findings' => $this->input->post('investigation_findings'),
                    'investigation_preventive_no' => $ar1,
                    'investigation_preventive_action' => $ar2,
                    'investigation_preventive_by_whom' => $ar3,
                    'investigation_preventive_timeline' => $ar4,
                    'investigated_by' => $this->input->post('investigated_by'),
                    'reviewed_by' => $this->input->post('reviewed_by')
                );
                
                
                if($this->incidentaccidentreport_model->insert_new_applicant_data($data)){
                    
                   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Success Has been achieved</div>', $data);
                   redirect('incidentaccidentreport/index');
                    
                        
                } else {
                    
                   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
                   redirect('incidentaccidentreport/index');
                    
                    
                    
                }
                
                
            }
            
            
            
        }
        
        public function load_form(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $data['load'] = "true";
            
            $id = $this->session->userdata('account_id');
            $data['retrieved'] = $this->incidentaccidentreport_model->get_form_by_id($id);
            
            $this->load->template('incidentaccidentreport_view', $data);
            
        }
        
        
        public function fullname_check($str) {
            
            if (!preg_match('/^([a-z0-9 ])+$/i', $str)) {
                $this->form_validation->set_message('fullname_check', 'The %s field can only be alphanumerical');
                return FALSE;
            } else {
                return TRUE;
            }
        }
        
    }
?>