<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Booking_model extends CI_Model{


  public function addBooking(){
    $userID = $this->session->userdata('userID'); // Where item is the array index like session id
    $service = $this->input->post('service');
    $date = $this->input->post('date');
    $times = implode(',',$this->input->post('times'));
    $status = "pending";
    $data = array(
      'userID'=>$userID,
      'service'=>$service,
      'bookingDate'=>$date,
      'bookingTimes'=>$times,
      'status'=> $status,
    );
    return $this->db->insert('bookings',$data);
    } 












} // End of CI_Model
