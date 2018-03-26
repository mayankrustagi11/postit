<?php
  class Pages extends Controller {
    public function __construct() {

    }

    public function index() {

      if(isLoggedIn()) {
        redirect('posts');
      }

      $data = [
        'title' => 'Post IT',
        'description' => 'Simple Social Network built on the MRMVC PHP framework.'
      ];

      $this->view('pages/index', $data);
    }

    public function about() {
      $data = [
        'title' => 'About Us',
        'description' => 'An application to share posts with fellow users.'
      ];

      $this->view('pages/about', $data);
    }
  }
