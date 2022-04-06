<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Data_model extends CI_Model{

  public function getScheduleData(){
  $this->db->select('*');
  $this->db->from('requests');
  $this->db->like('status', 'Scheduled');
  return $this->db->count_all_results();
  }

  public function getPendingData(){
  $this->db->select('*');
  $this->db->from('requests');
  $this->db->like('status', 'pending');
  return $this->db->count_all_results();
  }

  public function getRejectedData(){
  $this->db->select('*');
  $this->db->from('requests');
  $this->db->like('status', 'rejected');
  return $this->db->count_all_results();
  }

  public function getCancelledData(){
  $this->db->select('*');
  $this->db->from('requests');
  $this->db->like('status', 'cancelled');
  return $this->db->count_all_results();
  }

  public function getUserScheduleData(){
  $userID = $this->session->userdata('userID');
  $this->db->select('*');
  $this->db->where('userID',$userID);
  $this->db->from('requests');
  $this->db->like('status', 'Scheduled');
  return $this->db->count_all_results();
  }

  public function getUserPendingData(){
  $userID = $this->session->userdata('userID');
  $this->db->select('*');
  $this->db->from('requests');
  $this->db->where('userID',$userID);
  $this->db->like('status', 'pending');
  return $this->db->count_all_results();
  }

  public function getUserRejectedData(){
  $userID = $this->session->userdata('userID');
  $this->db->select('*');
  $this->db->from('requests');
  $this->db->where('userID',$userID);
  $this->db->like('status', 'rejected');
  return $this->db->count_all_results();
  }

  public function getUserCancelledData(){
  $userID = $this->session->userdata('userID');
  $this->db->select('*');
  $this->db->from('requests');
  $this->db->where('userID',$userID);
  $this->db->like('status', 'cancelled');
  return $this->db->count_all_results();
  }



} // End of CI_Model
