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
            $this->form_validation->set_rules('organization','Organization', 'required');
            
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