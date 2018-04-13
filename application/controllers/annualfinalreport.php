<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class annualfinalreport extends CI_Controller{
        
        public function index(){
            $this->load->template('annualfinalreport_view');
        }
        
    }
?>