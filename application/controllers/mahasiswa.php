<?php
class mahasiswa extends CI_controller
{
	public function index($url_nim = '', $url_jur = '')
	{
		$data['nama'] = 'Himawan Fitriadi';
		$data['umur'] = '35 tahun';
		$data['nim'] = $url_nim;
		$data['jur'] = $url_jur;

		$this->load->view('mahasiswa/v_index', $data);
	}
	public function jurusan()
	{
		echo "D3 Sistem Informasi";
	}
}
