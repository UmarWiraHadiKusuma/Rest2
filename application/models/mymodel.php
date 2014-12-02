<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model{
	public function GetMhs($where=""){
		$data = $this->db->query('select * from mhs '.$where);
		return $data->result_array();
	}

	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function UpdateData($tabelName,$where){
		$res = $this->db->update($tabelName,$where);
		return $res;
	} 

	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;

	}
}