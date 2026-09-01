<?php

class BaseController extends CI_Controller
{
	public $APP_ID, $SITE_URL, $CLIENT_NAME;
	public $data, $EVENTS;
	public function __construct()
	{
		parent::__construct();
		$this->data['CLIENT_NAME'] = APP_NAME;
		$this->EVENTS['opening'] = SUBMISSION_START_DATE;
		$this->EVENTS['deadline'] = SUBMISSION_END_DATE;
		$this->EVENTS['awards'] = AWARDS_START_DATE;
	}
}
