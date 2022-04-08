<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				$this->load->model('User_model');
				$this->load->model('Booking_model');
				$this->load->model('Scheduler');
        $this->load->model('Data_model');
	}


	public function index(){
		echo '<h2>User Unit Tests</h2>';
		$this->runUserUnitTests();
		echo '<h2>Booking Unit Tests</h2>';
    $this->runBookingUnitTests();
		echo '<h2>Data Unit Tests</h2>';
    $this->runDataUnitTest();
	}

  public function runUnitTest($testFunction,$expectedResult, $testName){
        echo $this->unit->run($testFunction, $expectedResult, $testName);
    }

	public function runUserUnitTests(){
			$this->runUnitTest($this->User_model->signUp(),'is_true' , 'Signing up');
			$this->runUnitTest($this->User_model->checkEmail(),'is_true' , 'Checking new users email against emails that already exist');
			$this->runUnitTest($this->User_model->getUserDetails(),'is_object' , 'Getting Users Details');
			$this->runUnitTest($this->User_model->getAllCustomers(),'is_object' , 'Getting Users who are customers');
			$this->runUnitTest($this->User_model->updateDetails(),'is_true' , 'Updating User Details');
		}

  public function runBookingUnitTests(){
    $this->runUnitTest($this->Booking_model->getUsersBooking(),'is_object' , 'Getting Users Booking Requests');
    $this->runUnitTest($this->Booking_model->addBooking(),'is_true' , 'Adding Booking Infomation');
		$this->runUnitTest($this->Booking_model->getUsersSchedule(),'is_object' , 'Getting Users Schedule');
		$this->runUnitTest($this->Booking_model->cancelBooking(),'is_true' , 'Cancel Booking');
		$this->runUnitTest($this->Booking_model->allBookings(),'is_object' , 'Getting All Booking');
		$this->runUnitTest($this->Booking_model->getAcceptedBookings(),'is_object' , 'Getting All Accepted Booking');
		$this->runUnitTest($this->Booking_model->getRequestDates(),'is_object' , 'Getting Distinct Booking Request Dates');
  }

  public function runDataUnitTest(){
    $this->runUnitTest($this->Data_model->getScheduleData(),'is_int' , 'Counting All Scheduled Status Booking Requests');
		$this->runUnitTest($this->Data_model->getPendingData(),'is_int' , 'Counting All Pending Status Booking Requests');
		$this->runUnitTest($this->Data_model->getRejectedData(),'is_int' , 'Counting All Rejected Status Booking Requests');
		$this->runUnitTest($this->Data_model->getCancelledData(),'is_int' , 'Counting All Cancelled Status Booking Requests');
		$this->runUnitTest($this->Data_model->getUserScheduleData(),'is_int' , 'Counting Users Scheduled Status Booking Requests');
		$this->runUnitTest($this->Data_model->getUserPendingData(),'is_int' , 'Counting Users Pending Status Booking Requests');
		$this->runUnitTest($this->Data_model->getUserRejectedData(),'is_int' , 'Counting Users Rejected Status Booking Requests');
		$this->runUnitTest($this->Data_model->getUserCancelledData(),'is_int' , 'Counting Users Cancelled Status Booking Requests');

  }




}
