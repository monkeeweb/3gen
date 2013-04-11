<?php
class Menu_admin extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->load->model('users_model', 'users');
         $this->users->logged();
    }

    function index() {
        $data['title'] = 'Admin';
        $this->load->view('admin/header_admin', $data);
        $this->load->view('admin/menu_admin');
        $this->load->view('admin/footer_admin', $data);
    }
}
?>