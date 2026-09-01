<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";


class RegistrationsController extends BaseController
{
	public function register()
	{
		$this->load->model('data/CategoriesModel');
		$this->data['page']['categories'] = json_decode($this->CategoriesModel->get(), true);
		$this->data['page']['title'] = "Register Now" . " • " . APP_NAME;
		if (new DateTime() <= new DateTime(SUBMISSION_END_DATE)){
			$this->load->main_view('registrations/index2', $this->data);
		} else {
			redirect("");
		}
	}
	
	public function thank_you() {
		// redirect(base_url('assets/uploads/2025/application-form-2025.docx'));
		$this->load->main_view('registrations/thankyou', $this->data);
	}
}
