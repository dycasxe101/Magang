<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
		$valid = $this->form_validation;	
		$valid->set_rules('username_admin', 'Username', 'required',array('required'=>'Username harus diisi'));
		$valid->set_rules('password_admin', 'Password', 'required',array('required'=>'Password harus diisi'));
		
		$username = $this->input->post('username_admin');
		$password =  $this->input->post('password_admin');
		
		if($valid->run()){
			$this->simple_login->login($username,$password, base_url('admin/aspirasiadmin/dashboard'), base_url('login'));
			}
		$data = array('title' =>'Login Administrator');
		$this->load->view('admin/v_login',$data);	
	}
}
