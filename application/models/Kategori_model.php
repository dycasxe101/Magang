<?php
class Kategori_model extends CI_Model {
	public function __construct()	{
		$this->load->database();
	}
	
	public function listing(){
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->order_by('id_kategori','DESC');
		$q = $this->db->get();
		return $q->result();
	}
	
	
	public function add($data){
		$this->db->insert('tb_kategori', $data);	
	}
	
	
	public function delete($data){
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->delete('tb_kategori',$data);
	}
	
}

