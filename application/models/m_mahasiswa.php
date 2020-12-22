<?php
class m_mahasiswa extends CI_Model
{
	private $tabel = 'mahasiswa';
	public function getAll()
	{
		//SELECT*FROM mahasiswa
		return $this->db->get($this->tabel)->result();
	}

	public function create($object)
	{
		return $this->db->insert($this->tabel, $object);
	}

	public function delete($input_NIM)
	{
		//delete from mahasiswa where NIM = $input_NIM
		$this->db->delete($this->tabel, ['NIM' =>$input_NIM]);
	}

	public function getWhere($input_NIM)
	{
		return $this->db->get_where($this->tabel,['NIM' => $input_NIM])->row_object();
	}

	public function update($data,$where, $tabel)
	{
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}
}

