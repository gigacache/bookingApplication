<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Booking_model extends CI_Model{


  public function addBooking(){
    $userID = $this->session->userdata('userID'); // Where item is the array index like session id
    $service = $this->input->post('service');
    $date = $this->input->post('date');
    $timeOfDay = $this->input->post('timeOfDay');
    $status = "pending";
    $data = array(
      'userID'=>$userID,
      'service'=>$service,
      'bookingDate'=>$date,
      'timeOfDay'=>$timeOfDay,
      'status'=> $status,
    );
    return $this->db->insert('requests',$data);
    }


    public function getUsersBooking(){
      $userID = $this->session->userdata('userID');
      $this->db->select('*');
      $this->db->from('requests');
      $this->db->where('userID',$userID);
      $query=$this->db->get();
      return $query;
    }


    public function getUsersSchedule(){
      $userID = $this->session->userdata('userID');
      $this->db->select('*');
      $this->db->from('schedule');
      $this->db->where('userID' , $userID);
      $this->db->order_by('bookingDate', 'asc');
      $this->db->order_by('startTime', 'asc');
      $query=$this->db->get();
      return $query;
    }

    public function cancelBooking(){
      $requestID = $this->input->post('requestID');
      $this->db->set('status', 'cancelled');
      $this->db->where('requestID', $requestID);
      $this->db->update('requests');
    }

    public function allBookings(){
      $this->db->select('*');
      $this->db->from('requests');
      $this->db->join('users', 'users.userID = requests.userID');
      $query=$this->db->get();
      return $query;
    }

    public function getAcceptedBookings(){
      $this->db->select('*');
      $this->db->from('requests');
      $this->db->where('status','accepted');
      $query=$this->db->get();
      return $query;
    }

    public function getRequestDates(){
      $this->db->distinct();
      $this->db->select('bookingDate');
      $this->db->from('requests');
      $query=$this->db->get();
      return $query;
    }








} // End of CI_Model
