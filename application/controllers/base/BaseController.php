<?php

class BaseController extends CI_Controller
{
    public $APP_ID, $SITE_URL, $CLIENT_NAME;
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->data['CLIENT_NAME'] = APP_NAME;
    }
}
