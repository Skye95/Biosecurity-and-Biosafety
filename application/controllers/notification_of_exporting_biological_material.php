<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class notification_of_exporting_biological_material extends CI_Controller
	{
        function __construct()
        {
            parent::__construct();
            
            $this->load->model('notification_of_exporting_biological_material_model');
        }
        
		public function index()
        {
            
            $this->form_validation->set_rules('personnel_name','Name', 'required|alpha');
			
			if($this->form_validation->run()== FALSE) 
            {
                $this->load->template('notification_of_exporting_biological_material_view');
            }
            else {
                $this->index();
            }
            
        }
    }
?>