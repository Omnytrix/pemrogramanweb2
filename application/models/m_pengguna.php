<?php

	class m_pengguna extends CI_Model
	{
		private	$tabel = 'users';

		public function cek_login($input_username, $input_pasword)
		{
			$this->db->where('username', $input_username);
			$this->db->where('password', $input_pasword);
			return $this->db->get($this->tabel);
		}

		public function getAll()
		{
			return $this->db->get($this->tabel)->result();
		}

		public function create($object)
		{
			return $this->db->insert($this->tabel, $object);
		}

		public function delete($input_username)
		{

			$this->db->delete($this->tabel, ['username' =>$input_username]);
		}

		public function getWhere($input_username)
		{
			return $this->db->get_where($this->tabel,['username' => $input_username])->row_object();
		}

		public function update($data,$where, $tabel)
		{
			$this->db->where($where);
			$this->db->update($tabel,$data);
		}

	}
