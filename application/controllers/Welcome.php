<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	}
	public function index()
	{
		$this->load->view('welcome');
	}

	public function verify(){
		$check=$this->Welcome_model->verify();
		if($check){
			$userId =$this->Welcome_model->getUserId();
			$email = $this->input->post('email');
			$arraydata = array(
						'userID'  => $userId,
						'username'  => $email,
						'login'     => TRUE);
			$this->session->set_userdata($arraydata);
			redirect('dashboard');

		}

				else{
					$this->session->set_flashdata('eroMessage',' Invalid email or password');
					redirect('');
				}

					}

	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}



	public function registerUser(){
		$this->Welcome_model->signUp();
		$this->session->set_flashdata('susMessage','Thankyou for regestring. Your account has now been actived and you can login.');
		redirect('');

	}


	public function dashboard(){
		$this->load->view('dashboard');
	}


}
