<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasiadmin extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin_aspirasi_model');
	}

	public function index(){
		$aspirasi= $this->admin_aspirasi_model->listing();
		$data = array('title' 		=>'Data Aspirasi',
					  'aspirasi' 	=> $aspirasi,
					  'all'      =>   $this->admin_aspirasi_model->sum_all(),
                      'Unanswer' =>   $this->admin_aspirasi_model->sum_aspirasi(),
                      'answered' =>   $this->admin_aspirasi_model->sum_respon(),
					  'isi' 		=> 'admin/aspirasi/v_r_list');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	public function dashboard(){
		$data = array('title' =>'Administrator',
					'all'      =>   $this->admin_aspirasi_model->sum_all(),
                    'Unanswer' =>   $this->admin_aspirasi_model->sum_aspirasi(),
                    'answered' =>   $this->admin_aspirasi_model->sum_respon(),
					  'isi' => 'admin/dasbor/v_d_list'
					);
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	public function response($id_aspirasi){	
		$aspirasi = $this->admin_aspirasi_model->detail($id_aspirasi);
		
		$valid = $this->form_validation;
		$valid->set_rules('respon_aspirasi', 'Respon Admin', 'required',array('required'=>'Respon harus diisi'));
		$cek = $valid->run();
		if($cek==false){
		$data = array('title' 		=>'Respon Aspirasi',
					  'all'      =>   $this->admin_aspirasi_model->sum_all(),
                      'Unanswer' =>   $this->admin_aspirasi_model->sum_aspirasi(),
                      'answered' =>   $this->admin_aspirasi_model->sum_respon(),
					  'aspirasi' 	=> $aspirasi,
					  'isi' 		=> 'admin/aspirasi/v_r_adminrespon');
		$this->load->view('admin/layout/wrapper',$data);
		}
		else{
			$data =  array(	'id_aspirasi' => $id_aspirasi,
							'respon_aspirasi' => $this->input->post(respon_aspirasi),
							'status_aspirasi' => $this->input->post(status_aspirasi),
							'id_admin' => $this->input->post(id_admin)
							);
			$this->admin_aspirasi_model->answerrespon($data);
			$this->session->set_flashdata('sukses','Respon telah dijawab');
			redirect(base_url('admin/aspirasi'));
		}			
	}
	
	public function delete($id_aspirasi){
		$data = array('id_aspirasi' => $id_aspirasi);
		$this->admin_aspirasi_model->delete($data);
		$this->session->set_flashdata('Sukses','Data Telah dihapus');
		redirect(base_url('admin/aspirasi'));
	}
}
