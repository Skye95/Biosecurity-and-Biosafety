<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class annex2 extends CI_Controller{
        
        function __construct()
        {
            parent::__construct();

            $this->load->database();
            $this->load->model('annex2_model');
            $this->load->model('notification_model');
        }
        
        public function index(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $this->form_validation->set_rules('applicant_name', 'Name', 'required|callback_fullname_check');
            $this->form_validation->set_rules('institutional_address', 'Institutionl Address', 'required');
            $this->form_validation->set_rules('collaborating_partners', 'Collaborating Partners', 'required');
            $this->form_validation->set_rules('project_title', 'Project Title', 'required');
            $this->form_validation->set_rules('project_objective_methodology', 'Objective Methodology', 'required');
            $this->form_validation->set_rules('biological_system_parent_organisms', 'Parent Organisms', 'required');
            $this->form_validation->set_rules('biological_system_donor_organisms', 'Donor Organisms', 'required');
            $this->form_validation->set_rules('biological_system_modified_traits', 'Modified Traits', 'required');
            $this->form_validation->set_rules('premises', 'Premise', 'required');
            $this->form_validation->set_rules('period', 'Period', 'required');
            $this->form_validation->set_rules('risk_assessment_and_management', 'Risk assessment', 'required');
            $this->form_validation->set_rules('emergency_response_plan', 'Emergency Response Plan', 'required');
            $this->form_validation->set_rules('IBC_recommendation', 'Recommendation', 'required');
            $this->form_validation->set_rules('PI_experience_and_expertise', 'Experience & Expertise', 'required');
            $this->form_validation->set_rules('PI_training', 'Training', 'required');
            $this->form_validation->set_rules('PI_health', 'Health', 'required');
            $this->form_validation->set_rules('PI_other', 'Other', 'required');
            //$this->form_validation->set_rules('personnel_involved[]', 'Personnel Involved', 'callback_fullname_check');
            //$this->form_validation->set_rules('personnel_designation[]', 'Personnel Designation', 'alpha_numeric_spaces');
            $this->form_validation->set_rules('IBC_name', 'IBC name', 'required');
            $this->form_validation->set_rules('IBC_date', 'IBC date', 'required');
            
            
            
            if ($this->form_validation->run() == FALSE){
                
                //$data['load'] = "true";
                //$id = 1;
                //$data['retrieved'] = $this->annex2_model->get_form_by_id($id);
                
                $this->load->template('annex2_view', $data);
                
            }else{
                
                $ar1 = implode(',',$this->input->post('personnel_involved'));
                $ar2 = implode(',',$this->input->post('personnel_designation'));
                
                $data = array(
                    'account_id' => $this->session->userdata('account_id'),
                    'applicant_name' => $this->input->post('applicant_name'),
                    'institutional_address' => $this->input->post('institutional_address'),
                    'collaborating_partners' => $this->input->post('collaborating_partners'),
                    'project_title' => $this->input->post('project_title'),
                    'project_objective_methodology' => $this->input->post('project_objective_methodology'),
                    'biological_system_parent_organisms' => $this->input->post('biological_system_parent_organisms'),
                    'biological_system_donor_organisms' => $this->input->post('biological_system_donor_organisms'),
                    'biological_system_modified_traits' => $this->input->post('biological_system_modified_traits'),
                    'premises' => $this->input->post('premises'),
                    'period' => $this->input->post('period'),
                    'risk_assessment_and_management' => $this->input->post('risk_assessment_and_management'),
                    'emergency_response_plan' => $this->input->post('emergency_response_plan'),
                    'IBC_recommendation' => $this->input->post('IBC_recommendation'),
                    'PI_experience_and_expertise' => $this->input->post('PI_experience_and_expertise'),
                    'PI_training' => $this->input->post('PI_training'),
                    'PI_health' => $this->input->post('PI_health'),
                    'PI_other' => $this->input->post('PI_other'),
                    'personnel_involved' => $ar1,
                    'personnel_designation' => $ar2,
                    'IBC_name' => $this->input->post('IBC_name'),
                    'IBC_date' => $this->input->post('IBC_date')
                );
                
                
                if($this->annex2_model->insert_new_applicant_data($data)){
                    
                   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Success Has been achieved</div>', $data);
                   redirect('annex2/index');
                    
                        
                } else {
                    
                   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
                   redirect('annex2/index');
                    
                    
                    
                }
                
                
            }
            
            
            
        }
        
        public function load_form(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $data['load'] = "true";
            
            $id = $this->session->userdata('account_id');
            $data['retrieved'] = $this->annex2_model->get_form_by_id($id);
            
            $this->load->template('annex2_view', $data);
            
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