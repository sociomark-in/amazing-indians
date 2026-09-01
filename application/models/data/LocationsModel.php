<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LocationsModel extends CI_Model{
    public $request, $data, $response, $table;
	public function __construct()
	{
		parent::__construct();
        $this->table['locations'] = 'cities_megadata';
	}
    
    public function get_states(){
        $this->db->distinct();
        $this->db->select('city_state');
        $data = $this->db->get($this->table['locations'])->result_array();
        $this->response = [];
        foreach ($data as $key => $row) {
            array_push($this->response, $row['city_state']);
        }
        return json_encode($this->response);
    }
    public function get_cities_by_state_name($state){
        $this->db->select('city_name');
        $this->db->where($state);
        $data = $this->db->get($this->table['locations'])->result_array();
        $this->response = [];
        foreach ($data as $key => $row) {
            array_push($this->response, $row['city_name']);
        }
        return json_encode($this->response);
    }
    public function get_addresslines($address){
        $this->db->distinct();
        $this->db->select('city_state');
        if(!is_null($address['state'])){
            $this->db->where(['city_state', $address['state']]);
        }
        $data1 = $this->db->get($this->table['locations'])->result_array();
        $this->response = [];
        foreach ($data1 as $key => $s) {
            $this->db->select('city_name');
            // array_push($this->response, $s['city_state']);
            if(!is_null($address['state'])){
                $this->db->where(['city_state', $address['state']]);
            }
            if(!is_null($address['city'])){
                $this->db->where(['city_name', $address['city']]);
            }
            $data2 = $this->db->get($this->table['locations'])->result_array();
            foreach ($data2 as $key => $c) {
                array_push($this->response, $c['city_name'] . ", " . $s['city_state']);
            }
            
        }
        return json_encode($this->response);
    }
}
?>