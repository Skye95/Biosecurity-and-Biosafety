<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class notification_of_exporting_biological_material extends CI_Controller{
        
        public function index(){
            $this->load->template('notification_of_exporting_biological_material_view');
        }
        
    }
?>