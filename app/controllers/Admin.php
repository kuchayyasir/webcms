<?php

class Admin extends Controller
{
    public function __construct()
    {

        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = ['title' => 'Admin'];
        $this->view('admin/index', $data);
    }

    public function dashboard()
    {
        /* if(!isLoggedIn()){
             redirect('admin');
         }*/
        $data = ['title' => 'Dashboard'];
        $this->view('admin/dashboard', $data);
    }

    public function login()
    {
        //Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
            //Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter your password';
            }

            //Check for user/email
            if ($this->userModel->findUserByEmail($data['email'])) {
                // die('success');
                //user found
            } else {
                $data['email_err'] = 'User Not Found';
            }

            if (empty($data['email_err']) && empty($data['password_err'])) {
                //Validated all
                //Check and set registered user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    //Create Session variable
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Incorrect Password ';
                    //reload view
                    $this->view('users/login', $data);
                }
            } else {
                //Load View with Errors
                $this->view('users/login', $data);
            }
        } else {
            //load the form
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];


            //Load view
            $this->view('users/login', $data);
        }
    }
}