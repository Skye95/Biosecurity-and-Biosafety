<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biohazardous_materialpage extends CI_Controller {

	public function index()
	{
        $this->load->template('biohazardous_materialpage_view');
	}
}
?>
