<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LeadsModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();	
	}

	public function insert($data) : bool {
		/* 
		if($this->db->insert($this->table[''], $data)){
			return true;
		} else {
			return false;
		} 
		*/
		return true;
	}
}
