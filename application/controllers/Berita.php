<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function index()
	{
		$data['tittle'] = 'Tambah Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if($this->form_validation->run() == false){
        	$this->load->view('templates/header', $data);
	        $this->load->view('templates/sidebar', $data);
	        $this->load->view('templates/topbar', $data);
	        $this->load->view('admin/berita', $data);
	        $this->load->view('templates/footer');
        }else{
        	$this->Berita_models->storeBerita();
        	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambah Berita!</div>');
            redirect('berita');
        }
	}

	public function list()
	{
		$data['tittle'] = 'Daftar Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Berita_models->getAllBerita();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/list', $data);
        $this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->Berita_models->hapusBerita($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menghapus Berita!</div>');
        redirect('berita/list');
	}

	public function edit($id)
	{
		$data['tittle'] = 'Edit Berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Berita_models->getBeritaById($id);

        $this->form_validation->set_rules('judul', 'Judul Berita', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi Berita', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if($this->form_validation->run() == false){
        	$this->load->view('templates/header', $data);
	        $this->load->view('templates/sidebar', $data);
	        $this->load->view('templates/topbar', $data);
	        $this->load->view('admin/edit', $data);
	        $this->load->view('templates/footer');
        }else{
        	$this->Berita_models->updateBerita($id);
        	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengubah Berita!</div>');
            redirect('berita/list');
        }
	}

}