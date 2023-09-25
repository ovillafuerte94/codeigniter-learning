<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        /* Checks if the user is authenticated */
        if ($this->session->userdata('logged_in')) {
            /* Redirects user to home page */
            redirect('/');
        }

        /* Load user model */
        $this->load->model('User_model');

        $this->load->library('form_validation');
    }

    /**
     * Login form
     *
     * @return void
     */
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->smarty->display('login.tpl');
        } else {
            /* if the login form has been submitted */
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user_by_username($username);

            if ($user && password_verify($password, $user->password)) {
                /* Start session */
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('logged_in', true);
                /* Redirects user to home page */
                redirect('/');
            } else {
                /* Displays an error message if the credentials are incorrect */
                $this->session->set_flashdata('error', 'Wrong credentials');
                $this->smarty->display('login.tpl');
            }
        }
    }
}
