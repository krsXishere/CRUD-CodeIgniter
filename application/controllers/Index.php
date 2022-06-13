<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	public function index()
	{
		$queryAllDataSiswa = $this->Siswa_model->getDataSiswa();
		$data = array('queryAllSiswa' => $queryAllDataSiswa);
		$this->load->view('index', $data);
	}

	public function input()
	{
		$this->load->view('inputdata');
	}

	public function edit($kode)
	{
		$queryDetailSiswa = $this->Siswa_model->getDetailDataSiswa($kode);
		$data = array('detailSiswa' => $queryDetailSiswa);
		$this->load->view('editdata', $data);
	}

	public function hapus()
	{
		$this->load->view('hapus');
	}

	public function insertData()
	{
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenisKelamin = $this->input->post('jenisKelamin');
		$agama = $this->input->post('agama');
		$asalSekolah = $this->input->post('asalSekolah');

		$arrayInsert = array(
			'Kode' => $kode,
			'Nama' => $nama,
			'Alamat' => $alamat,
			'JenisKelamin' => $jenisKelamin,
			'Agama' => $agama,
			'AsalSekolah' => $asalSekolah,
		);

		$this->Siswa_model->insertDataSiswa($arrayInsert);
		redirect(base_url(''));
	}

	public function updateData()
	{
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenisKelamin = $this->input->post('jenisKelamin');
		$agama = $this->input->post('agama');
		$asalSekolah = $this->input->post('asalSekolah');

		$arrayUpdate = array(
			'Nama' => $nama,
			'Alamat' => $alamat,
			'JenisKelamin' => $jenisKelamin,
			'Agama' => $agama,
			'AsalSekolah' => $asalSekolah,
		);

		$this->Siswa_model->updateDataSiswa($kode, $arrayUpdate);
		redirect(base_url(''));
	}

	public function deleteData($kode)
	{
		$this->Siswa_model->deleteDataSiswa($kode);
		redirect(base_url(''));
	}
}
