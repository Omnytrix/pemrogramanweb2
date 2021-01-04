<?php

	class login extends CI_Controller
	{
		public function index()
		{
			$this->load->view('v_login');
		}

		public function proses()
		{
			//disini bisa drubah ke md5 untuk input passwordnya
			//menjadi $input_password = md5($this->input->post('txtpassword'));
			$input_username = $this->input->post('txtusername');
			$input_password = ($this->input->post('txtpassword'));

			$this->load->model('m_pengguna');
			$cek = $this->m_pengguna->cek_login($input_username, $input_password);

			//cek apakah data sesuai dengan input database
			if ($cek->num_rows() > 0) {
				//jika sesuai maka ambil data tersebut
				$isi = $cek->row_object();
				$data_session = [
					'nama_pengguna' => $isi->nama_lengkap,
					'hak_pengguna' => $isi->hak_akses
				];

				//masukkan data pengguna ke dalam session
				$this->session->set_userdata($data_session);
				redirect('mahasiswa/index');
			} else {
				//echo 'username dan password salah';
				$this->session->set_flashdata('Pesan', 'Maaf, ');
				redirect('login/index');
			}
		}

		public function	logout()
		{
			$this->session->sess_destroy();
			redirect('front/index');
		}
	}

