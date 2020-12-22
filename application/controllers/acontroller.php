<?php

	class acontroller extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('amodel');

		}

		public function index()
		{
			$data['tabel_a'] = $this->amodel->getAll();

			$data['tabel_a'] = $this->db->get('tabel_a')->result();
			$this->load->view('uts/v_uts_index', $data);
		}


		public function tambah()
		{
			$this->load->view('uts/v_uts_tambah');
		}

		public function simpan_data()
		{
			$data = [
				'merek' => $this->input->post('merek'),
				'jenis' => $this->input->post('jenis'),
				'stok' => $this->input->post('stok'),
			];

			$this->amodel->create($data);
			redirect('acontroller/index', 'refresh');
		}
	}


