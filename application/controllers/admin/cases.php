<?php
class Cases extends CI_Controller {

	function Cases(){
        parent::__construct();
        if(!$this->session->userdata('logged'))
            redirect('admin/login');
    }
    public function index(){
        $this->load->model('case_model');
        $cases = $this->case_model->get();
        $data['cases'] = $cases;
        $this->load->helper('text');
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/case');
        $this->load->view('admin/footer_admin');
       
    }
    public function newCase(){
        $case['titulo'] = '';
        $case['resumo'] = '';
        $case['texto'] = '';
        $case['thumb'] = '';
        
		$data['case'] = $case;
    	$data['erro'] = '';

        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/case_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function edit($id=false){

    	if(!$id)redirect('admin/case');
    	$this->load->model('case_model');
       	$case = $this->case_model->get($id);
       	$data['case'] = $case;
		$data['erro'] = '';
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/case_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function save(){
    	if($_FILES['thumb']["tmp_name"] != ''){
	    	$config['encrypt_name'] = true;
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '300';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('thumb')){
			    show_error($this->upload->display_errors());
       			return;
			}else{
			    $upload_data = $this->upload->data();
			    $thumb = $upload_data['file_name']; 
			    $data['thumb'] = $thumb;
			}
		}

		$this->load->model('case_model');
         
        $data['texto'] = $this->input->post('texto');
        $data['titulo'] = $this->input->post('titulo');
        $data['resumo'] = $this->input->post('resumo');
         
        $id = $this->input->post('id');
         
        if ($id){
            $this->case_model->update($id,$data);
        }else{
            $id = $this->case_model->create($data);
        }     
        

		redirect('admin/cases');
    }
    public function remove($id){
		$this->load->model('case_model');
		$this->case_model->delete($id);
		redirect('admin/case');
	}

}
?>