<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";

class SeasonsController extends BaseController
{
	public function single($year){
		switch ($year) {
			case '2023':
				$this->data['page']['title'] = "AI 2023" . " • " . APP_NAME;
				$this->load->main_view('seasons/'. $year .'/index', $this->data);
				break;
			
			default:
				redirect('');
				break;
		}
	}
}
