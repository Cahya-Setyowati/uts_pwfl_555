<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chart extends CI_Model 
{
	public function datamhs()
	{
		return $this->db->count_all_results('mahasiswa');
	}

	public function jmllk()
	{
		return $this->db->where(array('jekel'=>'Laki-laki'))->count_all_results('mahasiswa');
	}

	public function jmlpr()
	{
		return $this->db->where(array('jekel'=>'Perempuan'))->count_all_results('mahasiswa');
	}

}