<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				$this->load->model('Booking_model');
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
		$data["bookingData"] = $this->Booking_model->getUsersBooking();
		$data['main_view'] = './user/booking';
		$this->load->view('template', $data);
	}


	public function addBooking(){
		$this->Booking_model->addBooking();
		$this->session->set_flashdata('susMessage','Booking Request has been regiester. Our system will auto finalise requests within 24 hours.');
		redirect('bookings');

	}



}
