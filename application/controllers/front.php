<?php

	class front extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_mahasiswa');
		}

		public function index()
		{
			$data['tbl_mhs'] = $this->m_mahasiswa->getAll();
			$this->load->view('front/v_index', $data);
		}
	}
