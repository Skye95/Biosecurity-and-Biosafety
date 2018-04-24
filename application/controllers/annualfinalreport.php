<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class annualfinalreport extends CI_Controller
    {
        
        function __construct()
        {
            parent::__construct();
            
            $this->load->model('annualfinalreport_model');
        }
        
        public function index()
        {
            
            $this->form_validation->set_rules('project_title','Project Title', 'required');
            $this->form_validation->set_rules('chief_investigator','Chief Investigator', 'required');
            
            //3.personal
            $this->form_validation->set_rules('personnel_extra_title','Personal Title', 'required');
            $this->form_validation->set_rules('personnel_extra_name','Name', 'required');
            $this->form_validation->set_rules('personnel_extra_qualifications','Qualifications', 'required');
            $this->form_validation->set_rules('personnel_extra_department','Department', 'required');
            $this->form_validation->set_rules('personnel_extra_campus','Campus', 'required');
            $this->form_validation->set_rules('personnel_extra_postal_address','Postal address', 'required');
            $this->form_validation->set_rules('personnel_extra_telephone','Phone No', 'required|numeric');
            $this->form_validation->set_rules('personnel_extra_fax','Fax', 'required|numeric');
            $this->form_validation->set_rules('personnel_extra_email_address','Email', 'required|valid_email');
            
            //4.Project Summary
            $this->form_validation->set_rules('project_summary','Project Summary', 'required');
            //5.Project Summary
            $this->form_validation->set_rules('project_outline','Explanation', 'required');
            //6.Report incident
            //>set_rules('project_title','incident and the actions taken', 'required');
            //7.Assessments
            //8.Change to facilities
             //>set_rules('project_title','Building number', 'required');
             //>set_rules('project_title','Room number', 'required');
            //9.Sign-off

            
            if($this->form_validation->run()== FALSE) 
            {
                
                $this->load->template('annualfinalreport_view');
            
            }
            else 
            {
                $this-> index();    
            }
        
        }
    }
?>