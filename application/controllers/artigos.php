<?php
class Artigos extends CI_Controller{
	public function index($id=false) {
        $data['title'] = 'Artigos'; 
		
		$this->load->model('artigo_model');
       	
		$artigos = $this->artigo_model->get();
       	$data['artigos'] = $artigos;
		$data['erro'] = '';		
		
		$data['lastNews'] = $this->lastNews();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/artigos', $data);
		$this->load->view('templates/footer', $data);
        
    }
    public function artigoView($id=false){
    	
    	if(!$id)redirect('/artigos');

    	$this->load->model('artigo_model');
    	$artigo = $this->artigo_model->get($id);
       	$data['artigo'] = $artigo;
		$data['erro'] = '';
		$data['title'] = $artigo['titulo']; 
		$data['lastNews'] = $this->lastNews();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/artigos', $data);
		$this->load->view('templates/footer', $data);
    }
    public function lastNews(){
        $this->load->model('new_model');
        $lastNews = $this->new_model->getLast();
        return $lastNews;       
    }
}

?>