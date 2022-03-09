<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Scheduler extends CI_Model{


public function create(){
  $this->getAllRequest();
}


  public function getAllRequest(){
    $this->db->select('*');
    $this->db->from('bookings');
    $this->db->where('status','pending');
    $query=$this->db->get();

    foreach ($query->result() as $row) {
      print $row->times;
    }
  }












  } // End of CI_Model
