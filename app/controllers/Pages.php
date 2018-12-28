<?php
    class Pages extends Controller {
        public function __construct(){
          }
        public function index(){
            $data = [
                'title' => 'Welcome'
                
            ];
            
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = ['title' => 'About'];
            $this->view('pages/about', $data);
        }
        public function admin(){
            $data = ['title' => 'Admin'];
            $this->view('admin/index', $data);
        }
    }

