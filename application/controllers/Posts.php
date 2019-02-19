<?php

class Posts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
    }

    public function index()
    {

        $data['title'] = 'Latest Posts';

        $data['posts'] = $this->Post_model->get_posts();

        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view($slug = null)
    {
        $data['post'] = $this->Post_model->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create()
    {
        $data['title'] = 'Create Post';

        $this->load->view('templates/header', $data);
        $this->load->view('posts/create', $data);
        $this->load->view('templates/footer', $data);
    }

}





















