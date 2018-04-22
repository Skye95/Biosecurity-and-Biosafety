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
            //echo 'OK';
            
            $this->form_validation->set_rules('exporter_organization','Organization', 'required');  
            
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