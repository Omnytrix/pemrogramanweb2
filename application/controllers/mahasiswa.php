<?php

	class mahasiswa extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_mahasiswa');
			if(!$this->session->userdata('nama_pengguna') ){
				redirect('login/index');
			}

		}

		public function index()
		{

			$data['tbl_mhs'] = $this->m_mahasiswa->getAll();
			$this->load->view('template/header');
			$data['tbl_mhs'] = $this->db->get('mahasiswa')->result();
			$this->load->view('mahasiswa/v_index', $data);
		}

		public function jurusan()
		{
			echo "D3 Sistem Informasi";
		}

		public function tambah()
		{
			$this->load->view('template/header');
			$this->load->view('mahasiswa/v_tambah');
		}

		public function simpan_data()
		{
			$data = [
				'NIM' => $this->input->post('NIM'),
				'Nama' => $this->input->post('Nama'),
				'Alamat' => $this->input->post('Alamat'),
			];

			$this->m_mahasiswa->create($data);
			redirect('mahasiswa/index', 'refresh');
		}

		public function hapus($input_NIM)
		{
			//echo $input_NIM;
			$this->m_mahasiswa->delete($input_NIM);
			redirect('mahasiswa/index', 'refresh');
		}

		public function edit($input_NIM)
		{
			$this->load->view('template/header');
			$data['data_NIM'] = $this->m_mahasiswa->getWhere($input_NIM);
			return $this->load->view('mahasiswa/v_edit', $data);
		}

		public function simpan_edit()
		{
			$NIM = $this->input->post('NIM');
			$Nama = $this->input->post('Nama');
			$Alamat = $this->input->post('Alamat');


			$data = array(
				//'NIM' => $NIM,
				'Nama' => $Nama,
				'Alamat' => $Alamat
			);

			$where = array(
				'NIM' => $NIM
			);

			$this->m_mahasiswa->update($data, $where, 'mahasiswa');
			redirect('mahasiswa/index');

		}
	}


