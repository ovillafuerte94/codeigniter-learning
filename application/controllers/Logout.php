<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        /* Checks if the user is authenticated */
        if (!$this->session->userdata('logged_in')) {
            /* Redirects user to login page */
            redirect('/');
        }
    }

    /**
     * Log out user
     *
     * @return void
     */
    public function index()
    {
        /* Destroys the session and redirects the user to the home page */
        $this->session->sess_destroy();

        redirect('/');
    }
}
