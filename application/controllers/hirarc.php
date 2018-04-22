<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class hirarc extends CI_Controller{
        
        function __construct()
        {
            parent::__construct();

            $this->load->database();
            //$this->load->model('annex5_model');
        }
        
        public function index(){
            
            $this->form_validation->set_rules('company_name', 'Company name', 'required|callback_fullname_check');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('process_location', 'Process location', 'required');
            $this->form_validation->set_rules('conducted_name', 'Conducted by who', 'required');
            $this->form_validation->set_rules('conducted_designation', 'Conducted by (designation)', 'required');
            $this->form_validation->set_rules('approved_name', 'Approver name', 'required');
            $this->form_validation->set_rules('approved_designation', 'Approver designation', 'required');
            $this->form_validation->set_rules('date_from', 'Date from', 'required');
            $this->form_validation->set_rules('date_to', 'Date to', 'required');
            $this->form_validation->set_rules('review_date', 'Review date', 'required');
            $this->form_validation->set_rules('HIRARC_no[]', 'HIRARC No.', 'required');
            $this->form_validation->set_rules('HIRARC_activity[]', 'Work Activity', 'required');
            $this->form_validation->set_rules('HIRARC_hazard[]', 'Hazard', 'required');
            $this->form_validation->set_rules('HIRARC_effects[]', 'cause/effect', 'required');
            $this->form_validation->set_rules('HIRARC_risk_control[]', 'Risk Control', 'required');
            $this->form_validation->set_rules('HIRARC_LLH[]', 'LLH', 'required');
            $this->form_validation->set_rules('HIRARC_SEV[]', 'SEV', 'required');
            $this->form_validation->set_rules('HIRARC_RR[]', 'RR', 'required');
            $this->form_validation->set_rules('HIRARC_control_measure[]', 'Control measure', 'required');
            $this->form_validation->set_rules('HIRARC_PIC[]', 'Due date', 'required');
            
            
            
            
            if ($this->form_validation->run() == FALSE)
            {
                
                $this->load->template('hirarc_view');
                
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured</div>', $data);
                redirect('hirarc/index'); 
                
            }
            
        }
        
        public function fullname_check($str) {
            
            if (!preg_match('/^([a-z0-9 ])+$/i', $str)) {
                $this->form_validation->set_message('fullname_check', 'The %s field can only be alphanumerical');
                return FALSE;
            } else {
                return TRUE;
            }
        }
        
        public function phone_check($str) {
            
            if (!preg_match('/^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/', $str)) {
                $this->form_validation->set_message('phone_check', 'Use a valid phone number');
                return FALSE;
            } else {
                return TRUE;
            }
        }
        
    }
?>