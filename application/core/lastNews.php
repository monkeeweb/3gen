<?php
class lastNews extends CI_Controller {

    public function lastNews(){
        $this->load->model('new_model');
        $news = $this->news_model->getLast();
        return $news;

       
    }
   
}
?>