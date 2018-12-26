<?php
class Admin_aspirasi_model extends CI_Model {
	public function __construct()	{
		$this->load->database();
	}
	
	public function listing(){
		$this->db->select('tb_aspirasi.*,tb_admin.nama_admin,tb_kategori.nama_kategori');
		$this->db->from('tb_aspirasi');
		$this->db->join('tb_admin', 'tb_admin.id_admin= tb_aspirasi.id_admin','LEFT');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_aspirasi.id_kategori','LEFT');
		$this->db->order_by('id_aspirasi','desc');
		$query= $this->db->get();
		return $query->result();
	}
	
	public function detail($id_aspirasi){
		$this->db->select('tb_aspirasi.*,tb_admin.nama_admin,tb_kategori.nama_kategori');
		$this->db->from('tb_aspirasi');
		$this->db->join('tb_admin', 'tb_admin.id_admin= tb_aspirasi.id_admin','LEFT');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_aspirasi.id_kategori','LEFT');
		$this->db->where('tb_aspirasi.id_aspirasi', $id_aspirasi);
		$query= $this->db->get();
		return $query->row();
	}
	
	public function answerrespon($data){
		$this->db->where('id_aspirasi', $data['id_aspirasi']);
		$this->db->update('tb_aspirasi', $data);	
	
	}
	
	public function delete($data){
		$this->db->where('id_aspirasi',$data['id_aspirasi']);
		$this->db->delete('tb_aspirasi',$data);
	}
	
	public function sum_all(){
		$query = $this->db->query('SELECT * FROM tb_aspirasi');
		return $query->num_rows();
	}
	
	public function sum_aspirasi(){
		$query = $this->db->query('SELECT * FROM tb_aspirasi WHERE status_aspirasi = "Not Yet"');
		return $query->num_rows();
	}
	
	public function sum_respon(){
		$query = $this->db->query('SELECT * FROM tb_aspirasi WHERE status_aspirasi = "Done"');
		return $query->num_rows();
	}
	
	public function add($data){
		$this->db->insert('tb_aspirasi', $data);	
		$last_id = $this->db->insert_id();
		return  $last_id;
	}
	
	function search($cari)
	{
		$this->db->select('tb_aspirasi.*,tb_admin.nama_admin');
		$this->db->from('tb_aspirasi');
		$this->db->join('tb_admin', 'tb_admin.id_admin= tb_aspirasi.id_admin','LEFT');
		$this->db->like('tb_aspirasi.uid_aspirasi', $cari);
		$query= $this->db->get();
        return $query->row_array();	
		
	}
	
	
	
}