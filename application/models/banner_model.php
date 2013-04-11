<?php
class Banner_model extends CI_Model {

	public function get($id = false, $lang = false){

	    if ($id) $this->db->where('id', $id);
	    if ($lang) $this->db->where('lang', $lang);
	    $this->db->order_by('id', 'desc');
	    $get = $this->db->get('banner');
	    if($id) return $get->row_array();
	    if($get->num_rows > 0) return $get->result_array();
	    return array();
	}
	public function create($data){
		return $this->db->insert('banner', $data);
	}
	public function update($id, $data){
	    $this->db->where('id', $id);
	    $update = $this->db->update('banner', $data);
	    return $update;
	}
	public function delete($id){
	    $this->db->where('id', $id);
	    $this->db->delete('banner');
	}
}
   
?>