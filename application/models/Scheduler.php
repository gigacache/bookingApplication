<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Scheduler extends CI_Model{


public function create(){
  $scheduleObj = $this->getAllRequest();
  $this->sortSchedule($scheduleObj);
}


  public function getAllRequest(){
    $this->db->select('*');
    $this->db->from('bookings');
    $this->db->where('status','pending');
    $query=$this->db->get();
    return $query;
  }



public function sortSchedule($obj){
print_r($obj->result_array());
echo "<br/>";
foreach ($obj->result_array() as $row)
{
        $times = $row['bookingTimes'];
        $timesArray = explode(",", $times);
        echo "<br/>";
        foreach($timesArray as $time){
            print_r($time);
        }
      //  print_r($timesArray);


        // need to get most pop services

        /// compare and loop times in list

        // with duration of servce

        // them rove and update data base with one time and acsepted



}




}









  } // End of CI_Model
