<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";

class TermsController extends BaseController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function single($slug)
	{
		$this->load->model('data/CategoriesModel');
		$this->data['page']['categories'] = json_decode($this->CategoriesModel->get(), true);
		switch ($slug) {
			case 'eligibility-criteria':
				$this->load->main_view('misc/terms', $this->data);
				break;
			case 'rules-and-regulations':
				$this->load->main_view('misc/terms', $this->data);
				break;

			default:
				show_404();
				break;
		}
	}
}
