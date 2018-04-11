<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class exempt extends CI_Controller{
        
        public function index(){
            $this->load->template('exempt_view');
        }
        
    }
?>