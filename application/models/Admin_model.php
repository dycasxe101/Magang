
<?php
class Admin_model extends CI_Model {
	public function __construct()	{
		$this->load->database();
	}
	
	public function listing(){
		$this->db->select('tb_admin.*, tb_aspirasi.id_aspirasi');
		$this->db->from('tb_admin');
		$this->db->join('tb_aspirasi', 'tb_aspirasi.id_admin = tb_admin.id_admin','LEFT');
		$this->db->order_by('id_admin','desc');
		$query= $this->db->get();
		return $query->result();
	}
	
	public function detail($id_admin){
		$query = $this->db->get_where('tb_admin',array('id_admin' => $id_admin));
		return $query->row();
	}
	
	public function add($data){
		$this->db->insert('tb_admin', $data);	
	}
	
	public function edit($data){
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update('tb_admin', $data);
	
	}
	
	public function delete($data){
		$this->db->where('id_admin',$data['id_admin']);
		$this->db->delete('tb_admin',$data);
	}
	
}