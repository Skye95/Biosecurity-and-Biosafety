<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class formf extends CI_Controller
    {
        
        function __construct()
        {
            parent::__construct();
            
            $this->load->model('formf_model');
        }
        
        public function index()
        {
            //echo 'Form validation testing OK';
            $this->form_validation->set_rules('exporter_organization','Organization', 'required|alpha');
            $this->form_validation->set_rules('exporter_name','Name of Applicant', 'required|alpha');
            $this->form_validation->set_rules('exporter_position','Position in Organization', 'required|alpha');
            $this->form_validation->set_rules('exporter_telephone_office','Telephone (office)', 'required|numeric');
            $this->form_validation->set_rules('exporter_telephone_mobile','Telephone (mobile)', 'required|numeric');
            $this->form_validation->set_rules('exporter_fax','Fax number', 'required|alpha');
            $this->form_validation->set_rules('exporter_email_address','Email', 'required|valid_email');
            $this->form_validation->set_rules('exporter_postal_address','Postal Address', 'required');          
            $this->form_validation->set_rules('LMO_description','Description of LMO', 'required');
            $this->form_validation->set_rules('LMO_type_description','LMO Type', 'required|alpha');
            $this->form_validation->set_rules('LMO_identification','Identification of LMO', 'required');
            $this->form_validation->set_rules('LMO_scientific_name','Scientific name', 'required|alpha');
            $this->form_validation->set_rules('LMO_trait','Introduced Trait', 'required');
            $this->form_validation->set_rules('LMO_intended_usage','Intended use of LMO', 'required');
            $this->form_validation->set_rules('LMO_export_form','Describe form', 'required');
            $this->form_validation->set_rules('LMO_export_mode_description','Mode of export', 'required');
            $this->form_validation->set_rules('LMO_point_of_exit','Point of exit', 'required');
            $this->form_validation->set_rules('LMO_methods','Suggested methods', 'required');
            $this->form_validation->set_rules('import_country_name','Name of importing country', 'required');
            $this->form_validation->set_rules('import_evidence','Evidence', 'required');
            $this->form_validation->set_rules('export_import_CBI','Section information', 'required');
            $this->form_validation->set_rules('applicant_signature_date','Date', 'required');
            $this->form_validation->set_rules('applicant_name','Name', 'required|alpha');
            $this->form_validation->set_rules('applicant_stamp','Official Stamp', 'required');
            $this->form_validation->set_rules('representative_signature_date','Date', 'required');
            $this->form_validation->set_rules('representative_name','Name', 'required|alpha');
            $this->form_validation->set_rules('representative_stamp','Official Stamp', 'required|alpha');
                        
            if($this->form_validation->run()== FALSE) 
            {
                $this->load->template('formf_view');
            }
            else {
                $this->index();
            }
            
        }
        
    }


?>