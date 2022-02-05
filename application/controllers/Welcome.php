<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function verify(){
		$check=$this->Welcome_model->verify();
		if($check){
			$isAdmin = FALSE;
			$userId =$this->Welcome_model->getUserId();
			$email = $this->input->post('email');

			if($email=='admin@admin.com'){
				$isAdmin= TRUE;}

			$arraydata = array(
						'userID'  => $userId,
						'email'  => $email,
						'isAdmin'  => $isAdmin,
						'login'     => TRUE);
			$this->session->set_userdata($arraydata);

			if($this->session->isAdmin){
				redirect('admin');
			}else{
				redirect('dashboard');
			}
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
		$data['main_view'] = 'dashboard';
		$this->load->view('template', $data);
	}

	public function adminDashboard(){
		$data['main_view'] = './admin/adminDashboard';
		$this->load->view('template', $data);
	}


	public function userDetails(){
		$data['main_view'] = './user/userDetails';
		$this->load->view('template', $data);
	}


}
