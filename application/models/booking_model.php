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


    public function getUsersBooking(){
      $userID = $this->session->userdata('userID');
      $this->db->select('*');
      $this->db->from('bookings');
      $this->db->where('userID',$userID);
      $query=$this->db->get();
      return $query;
    }

    public function cancelBooking(){
      $userID = $this->session->userdata('userID');
      $bookingID = $this->input->post('bookingID');
      $this->db->where('bookingID', $bookingID);
      $this->db->delete('bookings');
    }

    public function allBookings(){
      $this->db->select('*');
      $this->db->from('bookings');
      $this->db->where('status','pending');
      $query=$this->db->get();
      return $query;
    }

    public function getAcceptedBookings(){
      $this->db->select('*');
      $this->db->from('bookings');
      $this->db->where('status','accepted');
      $query=$this->db->get();
      return $query;
    }









} // End of CI_Model
