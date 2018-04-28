<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class pc1 extends CI_Controller{
		
		function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('pc1_model');
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
            $this->form_validation->set_rules('project_summary', 'Project summary', 'required');
            $this->form_validation->set_rules('GMO_name', 'GMO name', 'required');
            $this->form_validation->set_rules('GMO_method', 'GMO method', 'required');
            $this->form_validation->set_rules('GMO_origin', 'GMO origin', 'required');
            $this->form_validation->set_rules('modified_trait_class', 'modified trait class', 'required');
            $this->form_validation->set_rules('modified_trait_description', 'modified trait description', 'required');
            $this->form_validation->set_rules('project_hazard_staff', 'project hazard staff', 'required');
            $this->form_validation->set_rules('project_hazard_environment', 'project hazard environment', 'required');
            $this->form_validation->set_rules('project_hazard_steps', 'project hazard steps', 'required');
            $this->form_validation->set_rules('project_transport', 'project transport', 'required');
            $this->form_validation->set_rules('project_disposal', 'Project disposal', 'required');
            $this->form_validation->set_rules('project_facilities_building_no', 'Building No', 'required');
            $this->form_validation->set_rules('project_facilities_room_no', 'Room no', 'required');
            $this->form_validation->set_rules('project_facilities_containment_level', 'Containment level', 'required');
            $this->form_validation->set_rules('project_facilities_certification_no', 'Certification no', 'required');
           
            
            
            
            
            if ($this->form_validation->run() == FALSE)
            {
                
                //$data['load'] = "true";
                //$id = 1;
                //$data['retrieved'] = $this->annex2_model->get_form_by_id($id);
            
                
                $this->load->template('pc1_view', $data);
                
            }
            else
            {
                
                $ar1 = implode(',',$this->input->post('project_add_qualification'));
                $ar2 = implode(',',$this->input->post('project_add_name'));
                $ar3 = implode(',',$this->input->post('project_add_department'));
                $ar4 = implode(',',$this->input->post('project_add_campus'));
                $ar5 = implode(',',$this->input->post('project_add_postal_address'));
                $ar6 = implode(',',$this->input->post('project_add_telephone'));
                $ar7 = implode(',',$this->input->post('project_add_fax'));
                $ar8 = implode(',',$this->input->post('project_add_email_address'));
                $ar9 = implode(',',$this->input->post('project_add_title'));
                
                $data = array(
                    'account_id' => $this->session->userdata('account_id'),
                    'date_received ' => $this->input->post('date_received '),
                    'SBC_reference_no' => $this->input->post('SBC_reference_no'),
                    'project_title' => $this->input->post('project_title'),
                    'project_supervisor_title' => $this->input->post('project_supervisor_title'),
                    'project_supervisor_name' => $this->input->post('project_supervisor_name'),
                    'project_supervisor_qualification' => $this->input->post('project_supervisor_qualification'),
                    'project_supervisor_department' => $this->input->post('project_supervisor_department'),
                    'project_supervisor_campus' => $this->input->post('project_supervisor_campus'),
                    'project_supervisor_postal_address' => $this->input->post('project_supervisor_postal_address'),
                    'project_supervisor_telephone' => $this->input->post('project_supervisor_telephone'),
                    'project_supervisor_fax' => $this->input->post('project_supervisor_fax'),
                    'project_supervisor_email_address' => $this->input->post('project_supervisor_email_address'),
                    'project_add_title ' => $ar9,
                    'project_add_qualification' => $ar1,
                    'project_add_name' => $ar2,
                    'project_add_department' => $ar3,
                    'project_add_campus' => $ar4,
                    'project_add_postal_address' => $ar5,
                    'project_add_telephone' => $ar6,
                    'project_add_fax' => $ar7,
                    'project_add_email_address' => $ar8,
                    'dealing_type_a' => $this->input->post('dealing_type_a'),
                    'dealing_type_c' => $this->input->post('dealing_type_c'),
                    'project_summary' => $this->input->post('project_summary'),
                    'GMO_name' => $this->input->post('GMO_name'),
                    'GMO_method' => $this->input->post('GMO_method'),
                    'GMO_origin' => $this->input->post('GMO_origin'),
                    'modified_trait_class' => $this->input->post('modified_trait_class'),
                    'modified_trait_description' => $this->input->post('modified_trait_description'),
                    'project_hazard_staff' => $this->input->post('project_hazard_staff'),
                    'project_hazard_environment' => $this->input->post('project_hazard_environment'),
                    'project_hazard_steps' => $this->input->post('project_hazard_steps'),
                    'project_transport' => $this->input->post('project_transport'),
                    'project_disposal' => $this->input->post('project_disposal'),
                    'project_facilities_building_no' => $this->input->post('project_facilities_building_no'),
                    'project_facilities_room_no' => $this->input->post('project_facilities_room_no'),
                    'project_facilities_containment_level' => $this->input->post('project_facilities_containment_level'),
                    'project_facilities_certification_no' => $this->input->post('project_facilities_certification_no'),
                    'officer_notified' => $this->input->post('officer_notified'),
                    'officer_name' => $this->input->post('officer_name'),
                    'laboratory_manager' => $this->input->post('laboratory_manager')
                    
                    
                );
                
                
                if($this->pc1_model->insert_new_applicant_data($data)){
                    
                   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Success Has been achieved</div>', $data);
                   redirect('pc1/index');
                    
                        
                } else {
                    
                   $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
                   redirect('pc1/index');
                    
                    
                    
                }
                
            }
        }
        
        public function load_form(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $data['load'] = "true";
            
            $id = $this->session->userdata('account_id');
            $data['retrieved'] = $this->pc1_model->get_form_by_id($id);
            
            $this->load->template('pc1_view', $data);
            

        }
        
        public function fullname_check($str) {
            
            if (!preg_match('/^([a-z0-9 ])+$/i', $str)) {
                $this->form_validation->set_message('fullname_check', 'The %s field can only be alphanumerical and not empty');
                return FALSE;
            } else {
                return TRUE;
            }

        }
        
    }
?>