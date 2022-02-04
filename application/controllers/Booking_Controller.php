<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Welcome_model');
	}
	public function index()
	{
		$this->load->view('booking');
	}


	public function createBooking(){
			$data['main_view'] = 'createBooking';
			$this->load->view('template', $data);
	}

	public function bookingOverview(){
			$data['main_view'] = './user/booking';
			$this->load->view('template', $data);
	}



}
