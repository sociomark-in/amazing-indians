<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";

class TermsController extends BaseController
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function single($slug){
		switch ($slug) {
			case 'eligibility-criteria':
				echo "New View";
				break;
			case 'rules-and-regulations':
				echo "New View";
				break;
			
			default:
				show_404();
				break;
		}
	}
}
