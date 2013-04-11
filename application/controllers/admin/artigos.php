<?php
class Artigos extends CI_Controller {

	function Artigos(){
        parent::__construct();
        if(!$this->session->userdata('logged'))
            redirect('admin/login');
    }
    public function index(){
        $this->load->model('artigo_model');
        $artigos = $this->artigo_model->get();
        $data['artigos'] = $artigos;
        $this->load->helper('text');
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/artigo');
        $this->load->view('admin/footer_admin');
       
    }
    public function newArtigo(){
        $artigo['titulo'] = '';
        $artigo['resumo'] = '';
        $artigo['texto'] = '';
        $artigo['pdf'] = '';
        
		$data['artigo'] = $artigo;
    	$data['erro'] = '';

        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/artigo_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function edit($id=false){

    	if(!$id)redirect('admin/artigo');
    	$this->load->model('artigo_model');
       	$artigo = $this->artigo_model->get($id);
       	$data['artigo'] = $artigo;
		$data['erro'] = '';
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/artigo_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function save(){
    	if($_FILES['pdf']["tmp_name"] != ''){
	    	$config['encrypt_name'] = false;
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'pdf';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('pdf')){
			    show_error($this->upload->display_errors());
       			return;
			}else{
			    $upload_data = $this->upload->data();
			    $pdf = $upload_data['file_name']; 
			    $data['pdf'] = $pdf;
			}
		}

		$this->load->model('artigo_model');
         
        $data['texto'] = $this->input->post('texto');
        $data['titulo'] = $this->input->post('titulo');
        $data['resumo'] = $this->input->post('resumo');
         
        $id = $this->input->post('id');
         
        if ($id){
            $this->artigo_model->update($id,$data);
        }else{
            $id = $this->artigo_model->create($data);
        }     
        

		redirect('admin/artigos');
    }
    public function remove($id){
		$this->load->model('artigo_model');
		$this->artigo_model->delete($id);
		redirect('admin/artigo');
	}

}
?>