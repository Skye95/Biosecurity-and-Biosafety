<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class annualfinalreport extends CI_Controller
    {
        
        function __construct()
        {
            parent::__construct();
            
            $this->load->database();
            $this->load->model('notification_model');
            $this->load->model('annualfinalreport_model');
        }
        
        public function index()
        {
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $this->form_validation->set_rules('project_title','Project Title', 'required');
            $this->form_validation->set_rules('chief_investigator','Chief Investigator', 'required');
            
            //3.personal
            /*$this->form_validation->set_rules('personnel_extra_title','Personal Title', 'required');
            $this->form_validation->set_rules('personnel_extra_name','Name', 'required');
            $this->form_validation->set_rules('personnel_extra_qualifications','Qualifications', 'required');
            $this->form_validation->set_rules('personnel_extra_department','Department', 'required');
            $this->form_validation->set_rules('personnel_extra_campus','Campus', 'required');
            $this->form_validation->set_rules('personnel_extra_postal_address','Postal address', 'required');
            $this->form_validation->set_rules('personnel_extra_telephone','Phone No', 'required|numeric');
            $this->form_validation->set_rules('personnel_extra_fax','Fax', 'required|numeric');
            $this->form_validation->set_rules('personnel_extra_email_address','Email', 'required|valid_email');*/
            
            //4.Project Summary
            $this->form_validation->set_rules('project_summary','Project Summary', 'required');
            //5.Project Summary
            $this->form_validation->set_rules('project_outline','Explanation', 'required');
            //6.Report incident            
            //>set_rules('project_incidents','incident and the actions taken', 'required');
            //7.Assessments
            //8.Change to facilities
             //>set_rules('project_facility_changes','Building number', 'required');
             //>set_rules('project_facility_room_number','Room number', 'required');
            //9.Sign-off

            
            if($this->form_validation->run()== FALSE) 
            {
                
                $this->load->template('annualfinalreport_view', $data);
            
            }
            else 
            {
                 $data = array(
                     'account_id' => $this->session->userdata('account_id'),
                     'SBC_reference_no' => $this->input->post('SBC_reference_no'),
                     'project_approval_date' => $this->input->post('project_approval_date'),
                     'project_report_date' => $this->input->post('project_report_date'),
                     'personnel_extra' => $this->input->post('personnel_extra'),
                     'project_title' => $this->input->post('project_title'),
                     'chief_investigator' => $this->input->post('chief_investigator'),
                     'personnel_extra' => $this->input->post('personnel_extra'),
                     'personnel_extra_title' => $this->input->post('personnel_extra_title'),
                     'personnel_extra_name' => $this->input->post('personnel_extra_name'),
                     'personnel_extra_qualifications' => $this->input->post('personnel_extra_qualifications'),
                     'personnel_extra_department' => $this->input->post('personnel_extra_department'),
                     'personnel_extra_campus' => $this->input->post('personnel_extra_campus'),
                     'personnel_extra_postal_address' => $this->input->post('personnel_extra_postal_address'),
                     'personnel_extra_telephone' => $this->input->post('personnel_extra_telephone'),
                     'personnel_extra_fax' => $this->input->post('personnel_extra_fax'),
                     'personnel_extra_email_address' => $this->input->post('personnel_extra_email_address'),
                     'project_summary' => $this->input->post('project_summary'),
                     'project_outline' => $this->input->post('project_outline'),
                     'project_incidents' => $this->input->post('project_incidents'),
                     'project_facility_changes' => $this->input->post('project_facility_changes'),
                     'project_facility_room_number' => $this->input->post('project_facility_room_number'),
                     'project_facility_building_number' => $this->input->post('project_facility_building_number'),
                     'project_facility_description' => $this->input->post('project_facility_description'),
                     'project_sign_off_chief_investigator_name' => $this->input->post('project_sign_off_chief_investigator_name'),
                     'project_sign_off_BO_name' => $this->input->post('project_sign_off_BO_name')
                    
                );
                
                if($this->annualfinalreport_model->insert_new_applicant_data($data))
                    {
                    
                       $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Form has been Submited</div>', $data);
                       redirect('annualfinalreport/index');
                     
                    } 
                else 
                    {                    
                       $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
                       redirect('annualfinalreport/index');     
                    } 
            }
        
        }
        
        public function load_form(){
            
            $data['readnotif'] = $this->notification_model->get_read($this->session->userdata('account_id'));
            
            $data['load'] = "true";
            
            $id = $this->session->userdata('account_id');
            $data['retrieved'] = $this->annualfinalreport_model->get_form_by_id($id);
            
            $this->load->template('annualfinalreport_view', $data);
            
        }
        
        
        
    }
?>