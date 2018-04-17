<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicationpage extends CI_Controller {

	public function index()
	{
        $this->load->template('applicationpage_view');
	}
}
