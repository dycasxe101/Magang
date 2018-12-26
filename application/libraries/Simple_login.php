<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {
	
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	
	// Login
	public function login($username, $password) {
		// Query untuk pencocokan data
		$query = $this->CI->db->get_where('tb_admin', array(
										'username_admin' => $username, 
										'password_admin' => sha1($password)
										));
										
		// Jika ada hasilnya
		if($query->num_rows()) {
			$row 	= $this->CI->db->query('SELECT * FROM tb_admin WHERE username_admin = "'.$username.'"');
			$admin 	= $row->row();
			$id_admin 	= $admin->id_admin;
			$nama_admin	= $admin->nama_admin;
			// $_SESSION['username'] = $username;
			$this->CI->session->set_userdata('username_admin', $username ); 
			$this->CI->session->set_userdata('nama_admin', $nama_admin); 
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id_admin', $id_admin);
			// Kalau benar di redirect			
			redirect(base_url('admin/aspirasiadmin/dashboard'));
		}else{
			$this->CI->session->set_flashdata('sukses','Oopss.. Username/password salah');
			redirect(base_url().'login');
		}
		return false;
	}
	
	// Cek login
	public function cek_login() {
		if($this->CI->session->userdata('username_admin') == '') {
			$this->CI->session->set_flashdata('sukses','Oops...silakan login dulu');
			redirect(base_url('login'));
		}	
	}
	
	// Logout
	public function logout() {
		$this->CI->session->unset_userdata('username_admin');
		$this->CI->session->unset_userdata('nama_admin');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id_admin');
		$this->CI->session->set_flashdata('sukses','Terimakasih, Anda berhasil logout');
		redirect(base_url().'login');
	}
	
}