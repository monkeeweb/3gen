<?php
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
				
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		//log_message('info', $page);
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['lastNews'] = $this->lastNews();
		$data['banners'] = $this->banners();
		

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	
	}
	public function lastNews(){
        $this->load->model('new_model');
        $lastNews = $this->new_model->getLast();
        return $lastNews;       
    }
    public function banners(){
        $this->load->model('banner_model');
        $banners = $this->banner_model->get(false, CURRENT_LANGUAGE);
        return $banners;       
    }
}
?>