<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/login/register');
    }

    public function register(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[login.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm]');

        if($this->form_validation->run()==false){
            $this->load->view("admin/login/register");

        } else{
            $this->register_model->register();
            redirect('admin/login', 'refresh');
        }


    }

}

/* End of file register.php */
