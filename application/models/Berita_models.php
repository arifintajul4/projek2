<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_models extends CI_Model
{
	public function getAllBerita()
	{
		return $this->db->get('tbl_berita')->result_array();
	}

	public function getBeritaById($id)
	{
		return $this->db->get_where('tbl_berita', ['id_berita' => $id])->row();
	}

	public function storeBerita()
	{
		$data = [
			'judul_berita' => $this->input->post('judul'),
			'isi_berita' => $this->input->post('isi'),
			'keterangan' => $this->input->post('keterangan')
		];
		$this->db->insert('tbl_berita', $data);
	}

	public function updateBerita($id)
	{
		$data = [
			'judul_berita' => $this->input->post('judul'),
			'isi_berita' => $this->input->post('isi'),
			'keterangan' => $this->input->post('keterangan')
		];	
		$this->db->where('id_berita', $id);
		$this->db->update('tbl_berita', $data);
	}

	public function hapusBerita($id)
	{
		$this->db->where('id_berita', $id);
		$this->db->delete('tbl_berita');
	}
}