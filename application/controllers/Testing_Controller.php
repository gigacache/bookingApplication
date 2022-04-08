<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testing_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				$this->load->model('Booking_model');
				$this->load->model('Scheduler');
        $this->load->model('Data_model');
	}
	public function index()
	{
    $this->runBookingUnitTest();
    $this->runDataUnitTest();
    echo $this->unit->report();
    print_r($this->unit->result());
	}



  public function runUnitTest($testFunction,$expectedResult, $testName){
        $this->unit->run($testFunction, $expectedResult, $testName);
    }



  public function runBookingUnitTest(){
    $this->runUnitTest($this->Booking_model->getUsersBooking(),'is_object' , 'getUsersBooking');
    $this->runUnitTest($this->Booking_model->addBooking(),'is_true' , 'addBooking');
  }

  public function runDataUnitTest(){
    $this->runUnitTest($this->Data_model->getPendingData(),'is_int' , 'countPendingData');
  }




}
