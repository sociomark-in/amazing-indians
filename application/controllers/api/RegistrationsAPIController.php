<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";

class RegistrationsAPIController extends BaseController
{
	public $request;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/LeadsModel');
	}

	public function new() {
		$this->request = $this->input->post();
		if($this->LeadsModel->insert($this->request)){
			redirect('https://forms.gle/g8frr5XQr9v31vvC7');
		}
	}
}
