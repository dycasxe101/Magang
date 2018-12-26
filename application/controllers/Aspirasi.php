<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aspirasi extends CI_Controller {
	public function __construct()	{
			parent::__construct();
			$this->load->model('kategori_model');
			$this->load->model('admin_aspirasi_model');
	}
	
	public function index() {
		$data=array('title'		=>'Aspirasi Fasilkom',
					'isi'  		=>'home/v_home'
					);
		$this->load->view('home/layout/wrapper',$data);	
	}
		
	public function add(){
		$kategori = $this->kategori_model->listing();
		
		$valid = $this->form_validation;
		$valid->set_rules('nama', 'Nama', 'required',array('required'=>'Nama harus diisi'));
		$valid->set_rules('email', 'Email', 'required|valid_email',array('required'=>'Email harus diisi'));
		$valid->set_rules('ponsel', 'Kontak', 'required',array('required'=>'Kontak harus isi'));
		$valid->set_rules('id_kategori', 'Kategori', 'required',array('required'=>'Kategori harus isi'));
		$valid->set_rules('isi_aspirasi', 'Pesan Aspirasi', 'required',array('required'=>'Pesan Aspirasi harus isi'));
		$cek = $valid->run();
		if($cek== false){	
			 	$kategori = $this->kategori_model->listing();
				$data = array(
						'kategori' => $kategori,
						'isi' => 'home/v_aspirasi');
				$this->load->view('home/layout/wrapper',$data);
		} else{
			$i=$this->input;
			$data =  array( 
							'nama' => $i->post('nama'),
							'email' => $i->post('email'),
							'ponsel' => $i->post('ponsel'),
							'id_kategori' => $i->post('id_kategori'),
							'isi_aspirasi' => $i->post('isi_aspirasi'),
							'status_aspirasi' => $i->post('status_aspirasi'),
							'uid_aspirasi' => $i->post('uid_aspirasi')
			);
			$query = $this->admin_aspirasi_model->add($data);
			if($query){  
					$js= $i->post('uid_aspirasi');
					$this->session->set_flashdata('sukses',$js);
					redirect(base_url('aspirasi/add'));
                }  
		}
	}
	
	public function read() {
		$data=array('isi'  		=>'home/v_read'
					);
		$this->load->view('home/layout/wrapper',$data);	
	}


	public function readdetail() {
		$cari						= $this->input->post('tiket');
		$search = $this->admin_aspirasi_model->search($cari);
		if($search){
			$data=array(
						'search' =>$search,
						'isi'			=>'home/v_readdetail'
						);
			$this->load->view('home/layout/wrapper',$data);	
		}
		else{
				
		}
	}
}
