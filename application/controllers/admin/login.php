<?php
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

        $this->load->model('users_model', 'users');
        $query = $this->users->validate();

        $data['title'] = 'Admin';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header_admin', $data);
            $this->load->view('admin/login');
            $this->load->view('admin/footer_admin', $data);
        } else {

            if ($query) { 
                $data = array(
                    'username' => $this->input->post('username'),
                    'logged' => true
                );
                $this->session->set_userdata($data);
                redirect('admin/banner');
            } else {
                redirect($this->index());
            }
        }
    
    }
}
?>