<?php
class Cases extends CI_Controller{
	public function index($id=false) {
        $data['title'] = 'Cases'; 
		
		$this->load->model('case_model');
       	
		$cases = $this->case_model->get();
       	$data['cases'] = $cases;
		$data['erro'] = '';		
		
		$data['lastNews'] = $this->lastNews();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/cases', $data);
		$this->load->view('templates/footer', $data);
        
    }
    public function caseView($id=false){
    	
    	if(!$id)redirect('/cases');

    	$this->load->model('case_model');
    	$case = $this->case_model->get($id);
       	$data['case'] = $case;
		$data['erro'] = '';
		$data['title'] = $case['titulo']; 
		$data['lastNews'] = $this->lastNews();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/cases', $data);
		$this->load->view('templates/footer', $data);
    }
    public function lastNews(){
        $this->load->model('new_model');
        $lastNews = $this->new_model->getLast();
        return $lastNews;       
    }
}

?>