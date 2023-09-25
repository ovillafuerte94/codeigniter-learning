<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
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
     * Register form
     *
     * @return void
     */
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');

        if ($this->form_validation->run() == TRUE) {
            /* If the registration form has been sent */
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            );

            $user_id = $this->User_model->register_user($data);

            if ($user_id) {
                /* Redirects the user to the login page */
                redirect('login');
            } else {
                /* Displays an error message */
                $this->session->set_flashdata('error', 'Something is wrong');
                $this->smarty->display('register.tpl');
            }
        } else {
            /* Render registration form page */
            $this->smarty->display('register.tpl');
        }
    }
}
