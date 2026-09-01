<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";

class SeasonsController extends BaseController
{
	public function single($year)
	{
		$this->load->helper('directory');
		$gallery = count(directory_map(FCPATH . 'assets/media/images/gallery/' . $year . '/thumbs/'));
		$this->data['page']['gallery'] = $gallery;
		switch ($year) {
			case '2024':
				$this->data['page']['year'] = $year;
				$this->data['page']['title'] = "AI 2024" . " • " . APP_NAME;
				$this->load->main_view('seasons/' . $year . '/home', $this->data);
				break;
			case '2025':
				$this->data['page']['year'] = $year;
				$this->data['page']['title'] = "AI 2025" . " • " . APP_NAME;
				$this->load->main_view('seasons/' . $year . '/home', $this->data);
				break;

			default:
				redirect('');
				break;
		}
	}
}
