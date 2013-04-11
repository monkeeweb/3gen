<?php
class Cursos extends CI_Controller{
	public function index($id=false) {
        $data['title'] = 'Cursos'; 
		
		$this->load->model('curso_model');
       	
		$cursos = $this->curso_model->get();
       	$data['cursos'] = $cursos;
		$data['erro'] = '';		
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/cursos', $data);
		$this->load->view('templates/footer', $data);
        
    }
    
}

?>