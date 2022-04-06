<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
			$this->load->model('Data_model');
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function verify(){
		$check=$this->User_model->verify();
		if($check){
			$this->User_model->getRole();
			$userId =$this->User_model->getUserId();
			$email = $this->input->post('email');

			if($this->User_model->getRole()=='admin'){
				$isAdmin= TRUE;}
			if($this->User_model->getRole()=='customer'){
					$isAdmin= FALSE;}

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
		if($this->User_model->checkEmail()){
				$this->session->set_flashdata('eroMessage','Email already exists');
				redirect('');
		}else{
		$this->User_model->signUp();
		$this->session->set_flashdata('susMessage','Thankyou for regestring. Your account has now been actived and you can login.');
		redirect('');}
	}


	public function dashboard(){
		$data['scheduledData']= $this->Data_model->getUserScheduleData();
		$data['rejectedData']= $this->Data_model->getUserRejectedData();
		$data['cancelledData']= $this->Data_model->getUserCancelledData();
		$data['pendingData']= $this->Data_model->getUserPendingData();
		$data['main_view'] = './user/userDashboard';
		$this->load->view('template', $data);
	}

	public function adminDashboard(){
		$data['scheduledData']= $this->Data_model->getScheduleData();
		$data['rejectedData']= $this->Data_model->getRejectedData();
		$data['cancelledData']= $this->Data_model->getCancelledData();
		$data['pendingData']= $this->Data_model->getPendingData();
		$data['customerData']= $this->User_model->getAllCustomers();
		$data['main_view'] = './admin/adminDashboard';
		$this->load->view('template', $data);
	}


	public function userDetails(){
		$data['userDetails']= $this->User_model->getUserDetails();
		$data['main_view'] = './user/userDetails';
		$this->load->view('template', $data);
	}


	public function addUserScore(){
		$this->User_model->addScore();
		redirect('admin');
	}

	public function minusUserScore(){
		$this->User_model->minusScore();
		redirect('admin');
	}

	public function updateUserDetails(){
		$this->User_model->updateDetails();
		$this->session->set_flashdata('susMessage','Your account details have been updated');
		redirect('profile');
	}




}
