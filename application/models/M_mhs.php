<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mhs extends CI_Model {
	public function ambilmhs(){
		$query = $this->db->get('tampil');
		return $query->result_array();
	}
 
	public function editambilmhs($id){
		$this->db->where('id', $id);
		$query = $this->db->get('mahasiswa');
		return $query->result_array();
	}

	public function tambah_mhs()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mhs' => $this->input->post('nama'),
			'jekel' => $this->input->post('jekel'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		return $this->db->insert('mahasiswa',$data);
	}

	public function edit_mhs()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mhs' => $this->input->post('nama'),
			'jekel' => $this->input->post('jekel'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		$id_surat_lama = $this->input->post('id');
		$this->db->where('id', $id_surat_lama);
		return $this->db->update('mahasiswa',$data);
	}

	public function hapus_mhs($id){
		return $this->db->delete('mahasiswa',array('id' =>$id));
	}

	public function ambildatanim(){
		$query = $this->db->get('log');
		return $query->result_array();
	}

}