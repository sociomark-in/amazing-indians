<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";
class MainController extends BaseController
{
	public $error;

	public function __construct()
	{
		parent::__construct();
		$this->error = [];
	}
	public function index()
	{
		$this->data['page']['title'] = "Home" . " • " . APP_NAME;
		$this->load->main_view('index', $this->data);
	}
}
