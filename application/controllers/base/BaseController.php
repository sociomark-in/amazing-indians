<?php

class BaseController extends CI_Controller
{
	public $APP_ID, $SITE_URL, $CLIENT_NAME;
	public $data, $EVENTS;
	public function __construct()
	{
		parent::__construct();
		$this->data['CLIENT_NAME'] = APP_NAME;
		$this->EVENTS['opening'] = "01th July 2024";
		$this->EVENTS['deadline'] = "20th July 2024";
		$this->EVENTS['awards'] = "24th August 2024";
	}
}
