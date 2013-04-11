<?php
class Cursos extends CI_Controller {

	function Cursos(){
        parent::__construct();
        if(!$this->session->userdata('logged'))
            redirect('admin/login');
    }
    public function index(){
        $this->load->model('curso_model');
        $cursos = $this->curso_model->get();
        $data['cursos'] = $cursos;
        $this->load->helper('text');
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/curso');
        $this->load->view('admin/footer_admin');
       
    }
    public function newCurso(){
        $curso['titulo'] = '';
        $curso['data'] = '';
        $curso['ano'] = '';
        $curso['pdf'] = '';
        
		$data['curso'] = $curso;
    	$data['erro'] = '';

        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/curso_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function edit($id=false){

    	if(!$id)redirect('admin/curso');
    	$this->load->model('curso_model');
       	$curso = $this->curso_model->get($id);
       	$data['curso'] = $curso;
		$data['erro'] = '';
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/curso_edit', $data);
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

		$this->load->model('curso_model');
         
        $data['titulo'] = $this->input->post('titulo');
        $data['data'] = $this->input->post('data');
        $data['ano'] = $this->input->post('ano');
         
        $id = $this->input->post('id');
         
        if ($id){
            $this->curso_model->update($id,$data);
        }else{
            $id = $this->curso_model->create($data);
        }     
        

		redirect('admin/cursos');
    }
    public function remove($id){
		$this->load->model('curso_model');
		$this->curso_model->delete($id);
		redirect('admin/curso');
	}

}
?>