<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inventory extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('inventory_model');
    }
    
    public function index() {
        $data['inventory'] = $this->inventory_model->get_all_inventory();
        $this->load->template('inventory_view', $data);
    }
    
	public function index2()
	{
        $data['storage'] = $this->inventory_model->get_all_storage();
        $this->load->template('inventory_view', $data);
	}
    
    public function new_inventory()
	{
        $data['storage'] = $this->inventory_model->get_all_inventory();
        $this->load->template('inventory_view', $data);
	}
    
    public function new_storage()
	{
        $data['storage'] = $this->inventory_model->get_all_storage();
        $this->load->template('inventory_view', $data);
	}
}
?>