<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function registration() {

        if ($this->input->post('registrationSubmit')) {
            $this->form_validation->set_rules('name', 'Name', 'required');
        } else {
            $this->load->view('user/registration');
        }

    }

    public function login() {

    }
}