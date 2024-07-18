<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";

class CategoriesAPIController extends BaseController
{
	private $request;
	public function __construct()
	{
		parent::__construct();
		$this->request;
		$this->load->model('data/CategoriesModel');
	}

	public function get_single()
	{
		$this->request = $this->input->post();
		$response = $this->CategoriesModel->get(null, ['id' => $this->request['category']]);
		return $this->output->set_content_type('application/json')
        ->set_output(json_encode($response));
	}
}
