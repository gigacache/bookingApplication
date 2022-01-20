<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	}
	public function index()
	{
		$data['main_view'] = 'welcome';
		$this->load->view('template', $data);
	}



	public function registerUser(){
		$this->Welcome_model->signUp();
		$this->session->set_flashdata('message','Thankyou for regestring. Your account has now been actived and you can login.');
		redirect('');

	}


}
