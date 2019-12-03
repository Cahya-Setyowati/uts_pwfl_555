<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

	public function index()
	{
		$data = array(
			"dm" => $this->M_chart->datamhs(),
			"lk" => $this->M_chart->jmllk(),
			"pr" => $this->M_chart->jmlpr(),
			);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer', $data);
	}

	public function tampilan()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['amhs'] = $this->M_mhs->ambilmhs();
		$this->load->view('v_mhs',$data);
		$this->load->view('template/footer');
	}

	public function tambahmhs()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_mhs_tambah');
		$this->load->view('template/footer');
	}

	public function editmhs($id)
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['aamhs'] = $this->M_mhs->editambilmhs($id);
		$this->load->view('v_mhs_edit',$data);
		$this->load->view('template/footer');
	}

	public function riwayatmhs()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['riwayat'] = $this->M_mhs->ambildatanim();
		$this->load->view('v_riwayat',$data);
		$this->load->view('template/footer');
	}

}