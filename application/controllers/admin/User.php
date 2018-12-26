<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin_aspirasi_model');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$admin = $this->admin_model->listing();
		$data = array('title' =>'Data Admin',
					  'admin' => $admin,
					  'all'      =>   $this->admin_aspirasi_model->sum_all(),
                      'Unanswer' =>   $this->admin_aspirasi_model->sum_aspirasi(),
                      'answered' =>   $this->admin_aspirasi_model->sum_respon(),
					  'isi' => 'admin/user/v_a_list');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	public function add()
	{	
		$valid = $this->form_validation;
		
		$valid->set_rules('nama_admin', 'Nama', 'required',array('required'=>'Nama harus diisi'));
		$valid->set_rules('email_admin', 'Email', 'required|valid_email',array('required'=>'Email harus diisi'));
		$valid->set_rules('ponsel_admin', 'Kontak', 'required',array('required'=>'Kontak harus isi'));
		$valid->set_rules('username_admin', 'Username','required|min_length[3]|is_unique[tb_admin.username_admin]',
						array(
							'required'=>'Username harus diisi',
							'is_unique' => 'Username <strong>'.$this->input->post('username_admin'.' telah ada')));
		$valid->set_rules('password_admin', 'Password', 'required',array('required' => 'Password harus diisi'));
		$cek=$valid->run();
		if($cek == false){
			  $data = array('title' =>'Tambah Admin',
					  'all'      =>   $this->admin_aspirasi_model->sum_all(),
                      'Unanswer' =>   $this->admin_aspirasi_model->sum_aspirasi(),
                      'answered' =>   $this->admin_aspirasi_model->sum_respon(),
					  'isi' => 'admin/user/v_a_create');
			  $this->load->view('admin/layout/wrapper',$data);
		} else{
			$i=$this->input;
			$data =  array( 
							'nama_admin' => $i->post(nama_admin),
							'email_admin' => $i->post(email_admin),
							'ponsel_admin' => $i->post(ponsel_admin),
							'username_admin' => $i->post(username_admin),
							'password_admin' => sha1($i->post(password_admin))
			);
			$this->admin_model->add($data);
			$this->session->set_flashdata('sukses','Data Admin telah ditambah');
			redirect(base_url('admin/user'));
		}
	}
	
	public function edit($id_admin)
	{	
		$admin = $this->admin_model->detail($id_admin);
		$valid = $this->form_validation;
		$valid->set_rules('nama_admin', 'Nama', 'required',array('required'=>'Nama harus diisi'));
		$valid->set_rules('email_admin', 'Email', 'required|valid_email');
		$valid->set_rules('ponsel_admin', 'Kontak', 'required');
		$valid->set_rules('password_admin', 'Password', 'required',array('required' => 'Password harus diisi'));
		
		if($valid->run() == false){
			  $data = array('title' =>'Edit Admin',
							'all'      =>   $this->admin_aspirasi_model->sum_all(),
							'Unanswer' =>   $this->admin_aspirasi_model->sum_aspirasi(),
							'answered' =>   $this->admin_aspirasi_model->sum_respon(),
			  				'admin' => $admin,
					 		'isi' => 'admin/user/v_a_update');
			  $this->load->view('admin/layout/wrapper',$data);
		} else{
			$i=$this->input;
			$data =  array( 'id_admin'	=>	$id_admin,
							'nama_admin' => $i->post(nama_admin),
							'email_admin' => $i->post(email_admin),
							'ponsel_admin' => $i->post(ponsel_admin),
							'password_admin' => sha1($i->post(password_admin))
			);
			$this->admin_model->edit($data);
			$this->session->set_flashdata('sukses','Data admin telah diedit');
			redirect(base_url('admin/user'));
		}
	}
	
	public function delete($id_admin)
	{
		$data = array('id_admin' => $id_admin);
		$this->admin_model->delete($data);
		$this->session->set_flashdata('Sukses','Data Telah dihapus');
		redirect(base_url('admin/user'));
	}
	
	public function logout(){
		$this->simple_login->logout();
	
	}
}
