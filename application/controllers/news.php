<?php
class News extends CI_Controller{
	public function index() {
        $data['title'] = 'News'; 
		
		$this->load->model('new_model');
       	
		$news = $this->new_model->page('1');
       	$data['news'] = $news;
		$data['erro'] = '';
		$data['numPages'] = $this->new_model->numPages();
		$data['lastNews'] = $this->lastNews();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/news', $data);
		$this->load->view('templates/footer', $data);
        
    }
    public function page($page = 1) {
        $data['title'] = 'News'; 
		
		$this->load->model('new_model');
       	
		$news = $this->new_model->page($page);
       	$data['news'] = $news;
		$data['erro'] = '';
		$data['numPages'] = $this->new_model->numPages();
		
		$data['lastNews'] = $this->lastNews();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/news', $data);
		$this->load->view('templates/footer', $data);
        
    }
    public function newView($id=false){
    	
    	if(!$id)redirect('/news');

    	$this->load->model('new_model');
    	$new = $this->new_model->get($id);
       	$data['new'] = $new;
		$data['erro'] = '';
		$data['title'] = $new['titulo']; 
		$data['lastNews'] = $this->lastNews();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/news', $data);
		$this->load->view('templates/footer', $data);
    }
    public function lastNews(){
        $this->load->model('new_model');
        $lastNews = $this->new_model->getLast();
        return $lastNews;       
    }
}

?>