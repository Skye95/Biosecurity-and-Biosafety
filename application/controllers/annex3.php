<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class annex3 extends CI_Controller
    
    {
        
        function __construct()
        {
            parent::__construct();
            
            $this->load->model('annex3_model');
        }
        
        public function index()
        {
            //echo 'Form validation testing OK';
            $this->form_validation->set_rules('organization','Reference No.', 'required');
            $this->form_validation->set_rules('organization','Organization', 'required');
            $this->form_validation->set_rules('organization','Faculty/Department', 'required');
            $this->form_validation->set_rules('organization','Laboratory', 'required');
            $this->form_validation->set_rules('organization','Date/Time', 'required');
            
            //PI/ LABORATORY PERSONEL INFORMATION
            $this->form_validation->set_rules('organization','PI/ Laboratory Personnel’s Name', 'required');
            $this->form_validation->set_rules('organization','Telephone', 'required|numeric');
            $this->form_validation->set_rules('organization','DATE', 'required');
            $this->form_validation->set_rules('organization','TIME', 'required');
            
            //IDENTIFY THE DIRECT AND CONTRIBUTING CAUSES OF THE INCIDENT
            $this->form_validation->set_rules('organization','Describe the incident','required');
            //checkbox data----here---missing
            $this->form_validation->set_rules('organization','State cause if not listed above');
            $this->form_validation->set_rules('organization','Incident contribute', 'required');
            $this->form_validation->set_rules('organization','Contributed to the incident', 'required');
            $this->form_validation->set_rules('organization','Contributed to the incident', 'required');
            $this->form_validation->set_rules('organization','Corrective actions', 'required');
            $this->form_validation->set_rules('organization','Implement corrective actions', 'required');
            
            //signature
            $this->form_validation->set_rules('organization','Signature of Principal Investigator', 'required');
            $this->form_validation->set_rules('organization','Signature of Biosafety Officer', 'required');
            $this->form_validation->set_rules('organization','PI Name', 'required');
            $this->form_validation->set_rules('organization','BO Name', 'required');
            $this->form_validation->set_rules('organization','Date', 'required');
            $this->form_validation->set_rules('organization','Date', 'required');
            $this->form_validation->set_rules('organization','Signature of IBC Chair', 'required');
            $this->form_validation->set_rules('organization','IBC Name', 'required');
            $this->form_validation->set_rules('organization','Date', 'required');
            
        
            if($this->form_validation->run()== FALSE) 
            {
                
                $this->load->template('annex3_view');
            
            }
            
            else 
            {
                $this-> index();    
            }
            
        }
        
    }
?>