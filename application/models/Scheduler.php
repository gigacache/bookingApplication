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
    $timeInTheDay = array();
    print_r($obj->result_array());
    echo "<br/>";

    foreach ($obj->result_array() as $row){
        $times = $row['bookingTimes'];
        $timesArray = explode(",", $times);
        echo "<br/>";

          foreach($timesArray as $time){
            $timeInTheDay[$row['bookingID']] = $time;

              print_r($time);

          }


      //  print_r($timesArray);
// preg_split('/ (PM|AM) /', $time);
//$arrayname[indexname] = $value



// time in the day array, key vaules = bookingID and time


// rules // no dublicates of bookingID // cant be sceadued passed 8-5 // on one day



}

print_r($timeInTheDay);


}









  } // End of CI_Model
