<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newapplicationpage extends CI_Controller {

	public function index()
	{
        $this->load->template('newapplicationpage_view');
	}
}
?>
