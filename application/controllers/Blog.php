<?php

class Blog extends CI_Controller
{

    public function index()
    {
        echo "Hello World!";
    }

    public function helle()
    {
        echo "Xin chào mọi người";
    }

    public function view()
    {
        $this->load->model('Blog_model');
        $data = $this->Blog_model->get_data();
        $this->load->view('blog', $data);
    }
}

?>