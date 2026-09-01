<?php

class StatesAPIController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/LocationsModel');
		$this->output
			->set_header('Cache-Control: no-store, no-cache')
			->set_content_type('application/json');
	}

	public function get_all_states()
	{
		
		$data = json_decode($this->LocationsModel->get_states(), true);
		$this->output->set_output(json_encode($data));
	}

	public function get_cities_by_state(){
		$state = $this->input->get('state');
		$this->output->set_output($this->LocationsModel->get_cities_by_state_name(['city_state' => $state]));
	}

	public function get_addresslines(){
		$state = $this->input->get('state') ?? null;
		$city = $this->input->get('city') ?? null;
		$this->output->set_output($this->LocationsModel->get_addresslines(['state' => $state, 'city' => $city]));
	}
}
