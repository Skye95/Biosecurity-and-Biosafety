<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class annex2_load extends CI_Controller{
        
        function __construct()
        {
            parent::__construct();

            $this->load->database();
            $this->load->model('annex2_model');
        }
        
        public function index(){
            
            $id = 1;
            $data['retrieved'] = $this->annex2_model->get_form_by_id($id);
            
            $this->load->template('annex2_load_view', $data); 
            
            
        }
        
        
    }
?>