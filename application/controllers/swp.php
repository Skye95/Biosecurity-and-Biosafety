<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class swp extends CI_Controller{
        
        //load swp form
        public function index(){
            $this->load->template('swp_view');
        }
        
    }
?>