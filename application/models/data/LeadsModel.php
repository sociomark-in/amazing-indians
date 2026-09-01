<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LeadsModel extends CI_Model{
	public $request, $data, $response, $table;
	public function __construct()
	{
		parent::__construct();	
		$this->table['nominations'] = "award_nominations";
	}

	public function insert($data) {
		
		if($this->db->insert($this->table['nominations'], $data)){
			return true;
		} else {
			return false;
		} 
	}
}
