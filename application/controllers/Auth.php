<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Auth_model');
    }

    public function index(){
        $this->load->view('auth/login');
    }

    public function login(){
        $user = $this->input->post('user');
        $pass = $this->input->post('passwd');

        $authenticated = $this->Auth_model->login($user, $pass);

        if($authenticated == true){
            $this->load->view('home');
        }else{
            $this->load->view('auth/login');
        }
    }
}