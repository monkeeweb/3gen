<?php
class Noticia_model extends CI_Model {

	public function get($id = false){

	    if ($id) $this->db->where('id', $id);
	    $this->db->order_by('date', 'asc');
	    $get = $this->db->get('noticia');
	    if($id) return $get->row_array();
	    if($get->num_rows > 0) return $get->result_array();
	    return array();
	}
	public function create($data){
		return $this->db->insert('noticia', $data);
	}
	public function update($id, $data){
	    $this->db->where('id', $id);
	    $update = $this->db->update('noticia', $data);
	    return $update;
	}
	public function delete($id){
	    $this->db->where('id', $id);
	    $this->db->delete('noticia');
	}
}
   
?>