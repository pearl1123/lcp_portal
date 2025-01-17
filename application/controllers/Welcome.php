<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model("UserModel");
    }

	public function index(){
		$data = array(
            'csrf' => $this->csrf()
        );
		$this->load->view('header');
		$this->load->view('welcome_message',$data);
		$this->load->view('footer');
		$this->load->view('modal_login',$data);
		$this->load->view('modal_register',$data);
	}

	public function csrf(){
        $name = $this->security->get_csrf_token_name();
        $hash = $this->security->get_csrf_hash();
        $html = '<input type="hidden" name="'.$name.'" value="'.$hash.'">';
        return $html;
    }

	public function register(){
		$uModel = new UserModel();

		$fullname = htmlentities($this->input->post("fullname"));
		$email = htmlentities($this->input->post("email"));
		$username = htmlentities($this->input->post("username"));
		$password = htmlentities($this->input->post("password"));

		$data = array(
			'username' => $username,
			'fullname' => $fullname,
			'email' => $email,
			'password' => md5($password)
		);
		$res = $uModel->registerUser($data);
	}
}
