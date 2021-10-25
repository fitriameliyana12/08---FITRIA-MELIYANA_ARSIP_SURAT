<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Surat extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->database();
		$this->load->model('SuratModel'); // Load SuratModel ke controller ini
	}
	
	public function index(){
		$data['surat'] = $this->SuratModel->view();
		$this->load->view('surat/sidebar');
		$this->load->view('surat/index', $data);
	}
	public function about(){
		$data['surat'] = $this->SuratModel->view();
		$this->load->view('surat/sidebar');
		$this->load->view('surat/about', $data);
	}

	public function downloadSurat($nama)
    {
        $pth = file_get_contents(base_url()."assets/surat/".$nama);
        force_download($nama, $pth);
    }

	public function detail($id){
		$data['surat'] = $this->SuratModel->viewSurat($id);
        // $data['isi'] = "surat/detail";

		$this->load->view('surat/sidebar');
		$this->load->view('surat/detail', $data);
	}

    public function tambahData(){
		$data['isi']="surat/form_tambah";
		$this->load->view('surat/sidebar');
		$this->load->view('surat/form_tambah', $data);
	}

	// Menampilkan halaman edit arsip surat
	public function editData($id){
		$data['surat'] = $this->SuratModel->editData($id);
	
		$this->load->view('surat/sidebar');
		$this->load->view('surat/form_ubah', $data);
	}

    public function simpan_surat(){
        $config['upload_path']		= './assets/surat'; 
		$config['allowed_types']	= 'pdf'; 
		$config['max_size']			= '*'; 
		$config['max_width']        = '*';
		$config['max_height']       = '*'; 
		$config['file_name']        = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10); 
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$this->upload->do_upload("file");
		$data = $this->upload->data();
		$surat =$data['file_name'];
		if ($this->upload->do_upload("file")) {
			$data = array(
			'nomor_surat' 		=>$this->input->post('nomor_surat',true),
			'kategori' 	        =>$this->input->post('kategori',true),
			'judul' 		    =>$this->input->post('judul',true),
			'waktu' 	        =>date('y-m-d H:i:s'),
			'file' 				=>$surat,
            );
            $upload				=$this->SuratModel->tambah_data($data); 
			redirect('surat');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Type file tidak diperbolehkan!</div>');
			redirect('surat');
		}
    }

    public function edit_surat($id){
		$config['upload_path']		= './assets/surat'; 
		$config['allowed_types']	= 'pdf'; 
		$config['max_size']			= '*'; 
		$config['max_width']        = '*';
		$config['max_height']       = '*'; 
		$config['file_name']        = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10); 
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$this->upload->do_upload("file");
		$data = $this->upload->data();
		$surat =$data['file_name'];

		if ($this->upload->do_upload("file")) {
		$data = array(
			'nomor_surat' 		=>$this->input->post('nomor_surat',true),
			'kategori' 	=>$this->input->post('kategori',true),
			'judul' 		=>$this->input->post('judul',true),
			'waktu' 	=>date('y-m-d H:i:s'),
			'file' 				=>$surat,
		);
		$upload					=$this->SuratModel->ubahData($data,$id); 
		redirect('surat');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Type file tidak diperbolehkan!</div>');
			redirect('surat');
		}
	}
	
	public function hapus($id){
		$data = $this->SuratModel->hapus($id);
		redirect('surat');
	}
}
