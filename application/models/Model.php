<?php 


class Model extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function add__($table, $data){
      $this->db->insert($table, $data);
	}

	public function list__($table){
	  $data =$this->db->get($table)->result();
	  return $data;
	}

	public function show__($table, $campo, $value){
		$data = $this->db->where($campo, $value)->get($table)->result_array();
		return $data;
	}

	public function update__($table, $data, $id, $campo){
		$this->db->where($campo, $id)->update($table, $data);
	}

	public function delete__($table, $campo, $id){
		$this->db->where($campo, $id)->delete($table);
	}
}

 ?>