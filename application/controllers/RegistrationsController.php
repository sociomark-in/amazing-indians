<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";


class RegistrationsController extends BaseController
{
	public function register()
	{
		$this->data['page']['title'] = "Register Now" . " • " . APP_NAME;
		$this->load->main_view('registrations/index', $this->data);
	}
}
