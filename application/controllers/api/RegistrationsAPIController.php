<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";

class RegistrationsAPIController extends BaseController
{
	public $request;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/LeadsModel');
	}

	public function new_request()
	{
		$this->request = $this->input->post();
		$data = [
			'category_id' => $this->input->post('category'),
			'name' => $this->input->post('name'),
			'contact' => $this->input->post('contact'),
			'email' => $this->input->post('email'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
			'dob' => $this->input->post('dob'),
			'education' => $this->input->post('education'),
			'occupation' => $this->input->post('occupation'),
			'organization' => $this->input->post('organization'),
			'designation' => $this->input->post('designation'),
			'work_location' => $this->input->post('work_location'),
		];

		$data['application_id'] = "AI25" . "-" . strtoupper(date('U') . "-" .  random_string('numeric', 5));

		$data['years_social'] = $this->request['case_study'][0];
		for ($i = 1; $i < count($this->request['case_study']); $i++) {
			$data['case_study_' . $i] = $this->request['case_study'][$i];
			# code...
		}

		$config['upload_path']  = FCPATH . 'uploads/' . $data['application_id'] . "/";
		$config['allowed_types'] = '*';
		$config['max_size'] = 500;
		$config['overwrite']     = FALSE;
		$config['remove_spaces'] = TRUE;

		// Get the original file extension
		$file_extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

		$config['file_name'] = time() . '_' . uniqid() . '.' . $file_extension;

		if (!file_exists($config['upload_path'])) {
			mkdir($config['upload_path'], 0777, true);
		}

		if (count($_FILES) > 0) {
			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('photo')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			} else {
				echo "<pre>";
				$data['photo_file'] = $config['file_name'];
				print_r($data);
			}
			die;
		}

		if ($this->LeadsModel->insert($data)) {
			redirect(base_url('thank-you'));
		}
	}

	public function new_registration()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'category' => $this->input->post('category'),
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://script.google.com/macros/s/AKfycbznUL_GiuhDDcPpd2e4B7ismo7La4ZK6gC4Kj8SBix24rBp_KYWabKOUiogGLFFreh25w/exec',
			CURLOPT_POST => 1,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_POSTFIELDS => array(
				'First_Name' => $data['name'],
				'Email_Address' => $data['email'],
				'Contact_Number' => $data['phone'],
				'Category' => $data['category'],
			),
		));

		$response = curl_exec($curl);
		if(curl_errno($curl)){
    		echo curl_error($curl);
    	}
		curl_close($curl);
		redirect('thank-you');
	}
}
