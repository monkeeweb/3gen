<?php
class News extends CI_Controller {

	function News(){
        parent::__construct();
        if(!$this->session->userdata('logged'))
            redirect('admin/login');
    }
    public function index(){
        $this->load->model('new_model');
        $news = $this->new_model->get();
        $data['news'] = $news;
        $this->load->helper('text');
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/new');
        $this->load->view('admin/footer_admin');
       
    }
    public function newNew(){
        $new['titulo'] = '';
        $new['texto'] = '';
        $new['resumo'] = '';
        $new['data'] = '';
        
		$data['new'] = $new;
    	$data['erro'] = '';

        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/new_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function edit($id=false){

    	if(!$id)redirect('admin/news');
    	$this->load->model('new_model');
       	$new = $this->new_model->get($id);

        $conv1 = explode("-",$new['data']);
        $conv2 = array_reverse($conv1);
        $new['data'] = implode("/",$conv2);
         
       	$data['new'] = $new;
		$data['erro'] = '';
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/new_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function save(){
    	
		$this->load->model('new_model');
        log_message('debug', $this->input->post('data'));
        $conv1 = explode("/",$this->input->post('data'));
        $conv2 = array_reverse($conv1);
        $data['data'] = implode("-",$conv2);
        
        $data['texto'] = $this->input->post('texto');
        $data['titulo'] = $this->input->post('titulo');
        $data['resumo'] = $this->input->post('resumo');
         
        $id = $this->input->post('id');
         
        if ($id){
            $this->new_model->update($id,$data);
        }else{
            $id = $this->new_model->create($data);
        }     
        

		redirect('admin/news');
    }
    public function remove($id){
		$this->load->model('new_model');
		$this->new_model->delete($id);
		redirect('admin/news');
	}

}
?>