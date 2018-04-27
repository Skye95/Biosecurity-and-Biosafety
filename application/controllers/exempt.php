<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class exempt extends CI_Controller{
		
		
        function __construct()
        {
            parent::__construct();

            $this->load->database();
            $this->load->model('exempt_model');
            $this->load->model('notification_model');
        }
        
        public function index(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $this->form_validation->set_rules('project_title', 'Project title', 'required|callback_fullname_check');
            $this->form_validation->set_rules('project_supervisor_title', 'Project supervisor title', 'required');
            $this->form_validation->set_rules('project_supervisor_name', 'Project supervisor name', 'required');
            $this->form_validation->set_rules('project_supervisor_qualification', 'Project supervisor qualification', 'required');
            $this->form_validation->set_rules('project_supervisor_department', 'Project supervisor department', 'required');
            $this->form_validation->set_rules('project_supervisor_campus', 'Project supervisor campus', 'required');
            $this->form_validation->set_rules('project_supervisor_postal_address', 'Supervisor postal address', 'required');
            $this->form_validation->set_rules('project_supervisor_telephone', 'Supervisor telephone', 'required');
            $this->form_validation->set_rules('project_supervisor_fax', 'Supervisor fax', 'required');
            $this->form_validation->set_rules('project_supervisor_email_address', 'Supervisor email address', 'required|valid_email');
            $this->form_validation->set_rules('project_add_title', 'Additional person title', 'required');
            $this->form_validation->set_rules('project_add_name', 'Additional person name', 'required');
            $this->form_validation->set_rules('project_add_qualification', 'Additional person qualification', 'required');
            $this->form_validation->set_rules('project_add_department', 'Additional person department', 'required');
            $this->form_validation->set_rules('project_add_campus', 'Additional person campus', 'required');
            $this->form_validation->set_rules('project_add_postal_address', 'Additional person postal address', 'required');
            $this->form_validation->set_rules('project_add_telephone', 'Additional person telephone', 'required');
            $this->form_validation->set_rules('project_add_fax', 'Additional person name', 'required');
            $this->form_validation->set_rules('project_add_email_address', 'Additional person email address', 'required|valid_email');
            $this->form_validation->set_rules('project_summary', 'Project summary', 'required');
            $this->form_validation->set_rules('project_facilities_building_no', 'Building No', 'required');
            $this->form_validation->set_rules('project_facilities_room_no', 'Room no', 'required');
            $this->form_validation->set_rules('project_facilities_containment_level', 'Containment level', 'required');
            $this->form_validation->set_rules('project_facilities_certification_no', 'Certification no', 'required');
            $this->form_validation->set_rules('officer_name', 'Officer Name', 'required');
            $this->form_validation->set_rules('laboratory_manager', 'Laboratory manager', 'required');
            
            
            
            if ($this->form_validation->run() == FALSE){
                
                //$data['load'] = "true";
                //$id = 1;
                //$data['retrieved'] = $this->annex2_model->get_form_by_id($id);
                
                $this->load->template('exempt_view', $data);
                
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
                   redirect('exempt/index');
                    
                        
                } else {
                    
                   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
                   redirect('exempt/index');
                    
                    
                    
                }
                
                
            }
            
            
            
        }
        
        public function load_form(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $data['load'] = "true";
            
            $id = $this->session->userdata('account_id');
            $data['retrieved'] = $this->exempt_model->get_form_by_id($id);
            
            $this->load->template('exempt_view', $data);
            
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