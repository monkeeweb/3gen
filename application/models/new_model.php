<?php
class New_model extends CI_Model {

	public function get($id = false){

	    if ($id) $this->db->where('id', $id);
	    $this->db->order_by('data', 'desc');
	    $get = $this->db->get('new');
	    if($id) return $get->row_array();
	    if($get->num_rows > 0) return $get->result_array();
	    return array();
	}
	public function page($page = 1){

	    $this->db->order_by('data', 'desc');
	    $items = ( $page - 1 ) * 10;
	    $get = $this->db->get('new', '10', $items);
	    if($get->num_rows > 0) return $get->result_array();
	    return array();
	}
	public function numPages(){

	    $get = $this->db->get('new');
	    $numPages = ceil($get->num_rows / 10);
	    return $numPages;
	}
	public function getLast(){

	    $this->db->order_by('data', 'desc');
	    $get = $this->db->get('new', '5');
	    if($get->num_rows > 0) return $get->result_array();
	    return array();
	}
	public function create($data){
		return $this->db->insert('new', $data);
	}
	public function update($id, $data){
	    $this->db->where('id', $id);
	    $update = $this->db->update('new', $data);
	    return $update;
	}
	public function delete($id){
	    $this->db->where('id', $id);
	    $this->db->delete('new');
	}
}
   
?>