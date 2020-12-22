<?php

	class m_pengguna extends CI_Model
	{
		private	$table = 'users';

		public function cek_login($input_username, $input_pasword)
		{
			$this->db->where('username', $input_username);
			$this->db->where('password', $input_pasword);
			return $this->db->get($this->table);
		}
	}
