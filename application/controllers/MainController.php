<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";
class MainController extends BaseController
{
	public $error;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/CategoriesModel');
		$this->error = [];
	}
	public function index()
	{
		$this->data['page']['title'] = "Home" . " • " . APP_NAME;
		$this->data['page']['quotes'] = [
			'Anand-Kumar.jpg',
			'Dr.-S-Rangarajan.jpg',
			'Dr-Priti-Adani.jpg',
			'General-M.M.-Naravane.jpg',
			'Mr.-Nambi-Narayan.jpg',
			'Ms.-Sonali-Bendre.jpg',
			'Ms.-Upasana-Kamineni.jpg',
			'Prasoon-Joshi.jpg',
			'Ritesh-Agarwal-.jpg',
			'Sonam-Wangchuck.jpg',
			'Ustad-Amjad-Ali-Khan.jpg',
		];
		$this->data['page']['categories'] = json_decode($this->CategoriesModel->get(), true);
		$this->load->main_view('index', $this->data);
	}
}
