<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class incidentaccidentreport extends CI_Controller{
        
        public function index(){
            $this->load->template('incidentaccidentreport_view');
        }
        
    }
?>