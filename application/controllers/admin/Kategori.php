<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin_aspirasi_model');
		$this->load->model('kategori_model');
	}

	public function index()
	{
		$kategori = $this->kategori_model->listing();
		$asm = $this->admin_aspirasi_model;
		
		$data = array('title' =>'Data Kategori',
					  'kategori' => $kategori,
					  'all'      =>   $asm->sum_all(),
                      'Unanswer' =>   $asm->sum_aspirasi(),
                      'answered' =>   $asm->sum_respon(),
					  'isi' => 'admin/kategori/v_c_list');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	public function add()
	{	
		$asm = $this->admin_aspirasi_model;
		$valid = $this->form_validation;
		$km = $this->kategori_model;
		
		$valid->set_rules('nama_kategori', 'Kategori', 'required',array('required'=>'Kategori harus diisi'));
		if($valid->run() == false){
			  $data = array('title' =>'Tambah Kategori',
					  'all'      =>   $asm->sum_all(),
                      'Unanswer' =>   $asm->sum_aspirasi(),
                      'answered' =>   $asm->sum_respon(),	
					  'isi' => 'admin/kategori/v_c_create');
			  $this->load->view('admin/layout/wrapper',$data);
		} else{
			$data =  array( 'nama_kategori' => $this->input->post(nama_kategori));
			$km->add($data);
			$this->session->set_flashdata('sukses','Data Kategori telah ditambah');
			redirect(base_url('admin/kategori'));
		}
	}
	
	public function delete($id_kategori)
	{
		$data = array('id_kategori' => $id_kategori);
		$this->kategori_model->delete($data);
		$this->session->set_flashdata('Sukses','Data kategori Telah dihapus');
		redirect(base_url('admin/kategori'));
	}
	
}
