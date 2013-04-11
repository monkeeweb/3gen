<?php
class Banner extends CI_Controller {

	function Banner(){
        parent::__construct();
        if(!$this->session->userdata('logged'))
            redirect('admin/login');
    }
    public function index(){
        $this->load->model('banner_model');
        $banners = $this->banner_model->get();
        $data['banners'] = $banners;
        $this->load->helper('text');
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/banner');
        $this->load->view('admin/footer_admin');
       
    }
    public function newBanner(){
        $banner['texto'] = '';
        $banner['url'] = '';
        $banner['imagem'] = '';
        $banner['lang'] = 'br';
		$data['banner'] = $banner;
    	$data['erro'] = '';

        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/banner_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function edit($id=false){

    	if(!$id)redirect('admin/banner');
    	$this->load->model('banner_model');
       	$banner = $this->banner_model->get($id);
       	$data['banner'] = $banner;
		$data['erro'] = '';
        
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/banner_edit', $data);
        $this->load->view('admin/footer_admin');
    }
    public function save(){
    	if($_FILES['imagem'] != ''){
	    	$config['encrypt_name'] = true;
	    	$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '300';
			$config['max_width']  = '3024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('imagem')){
			    show_error($this->upload->display_errors());
       			return;
			}else{
			    $upload_data = $this->upload->data();
			    $imagem = $upload_data['file_name']; 
			    $data['imagem'] = $imagem;
			}
		}

		$this->load->model('banner_model');
         
        $data['texto'] = $this->input->post('texto');
        $data['url'] = $this->input->post('url');
        $data['lang'] = $this->input->post('lang');
         
        $id = $this->input->post('id');
         
        if ($id){
            $this->banner_model->update($id,$data);
        }else{
            $id = $this->banner_model->create($data);
        }     
        

		redirect('admin/banner');
    }
    public function remove($id){
		$this->load->model('banner_model');
		$this->banner_model->delete($id);
		redirect('admin/banner');
	}

}
?>