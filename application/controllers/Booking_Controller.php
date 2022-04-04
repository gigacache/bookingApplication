<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				$this->load->model('Booking_model');
				$this->load->model('Scheduler');
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
		$data["scheduleData"] = $this->Booking_model->getUsersSchedule();
		$data['main_view'] = './user/booking';
		$this->load->view('template', $data);
	}


	public function addBooking(){
		$this->Booking_model->addBooking();
		$this->session->set_flashdata('susMessage','Booking Request has been regiester. Our system will auto finalise requests within 24 hours.');
		redirect('bookings');
	}

	public function cancelBooking(){
		$this->Booking_model->cancelBooking();
		$this->session->set_flashdata('susMessage','Booking Request has been cancled.');
		redirect('bookings');
	}

	public function cancelAppointment(){
		$this->Scheduler->cancelAppointment();
		redirect('Booking_Controller/showSchedule');
	}

	public function adminBooking(){
		$data["allBookingData"] = $this->Booking_model->allBookings();
		$data["requestDates"] = $this->Booking_model->getRequestDates();
		$data['main_view'] = './admin/adminBooking';
		$this->load->view('template', $data);
	}

	public function createSchedule(){
		$date = $this->input->post('date');
		$data["date"] = $date;
		$data["requestDates"] = $this->Booking_model->getRequestDates();
		$data["data"]= $this->Scheduler->create();
		$data['main_view'] = 'schedulerView';
		$this->load->view('template', $data);
}

public function showSchedule(){
	$date = $this->input->post('date');
	$data["date"] = $date;
	$data["requestDates"] = $this->Booking_model->getRequestDates();
	$data["data"] = $this->Scheduler->getSchedule($date);
	$data['main_view'] = 'schedulerView';
	$this->load->view('template', $data);
}








}
