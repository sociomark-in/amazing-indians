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
				if ($this->input->get("mode") == "view") {
					$this->data['page']['title'] = "Eligibility Criteria" . " • " . APP_NAME;
					$this->load->main_view('misc/eligibility', $this->data);
				} else {
					redirect(base_url('assets/uploads/2026/terms-and-conditions.pdf'));
				}
				break;
			case 'rules-and-regulations':
				redirect(base_url('assets/uploads/2026/terms-and-conditions.pdf'));
				// $this->load->main_view('misc/terms', $this->data);
				break;
			case 'sample-application':
				redirect(base_url('assets/uploads/2025/sample-application-2025.pdf'));
				// $this->load->main_view('misc/terms', $this->data);
				break;
			case 'terms-and-conditions':
				if ($this->input->get("mode") == "view") {
					$this->data['page']['title'] = "Terms & Conditions" . " • " . APP_NAME;
					$this->load->main_view('misc/terms', $this->data);
				} else {
					redirect(base_url('assets/uploads/2026/terms-and-conditions.pdf'));
				}
				break;

			default:
				show_404();
				break;
		}
	}
}
