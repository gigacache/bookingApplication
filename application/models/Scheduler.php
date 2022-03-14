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
    echo "<br/>";
    print_r($obj->result_array());
    echo "<br/>";

    foreach ($obj->result_array() as $row){
        $times = $row['bookingTimes'];
        $timesArray = explode(",", $times);
        echo "<br/>";

        // Adds times to times with booking ID in array
          foreach($timesArray as $time){
            $timeFormat = date('H:i', strtotime($time));
            $startTime = strtotime($time);

            if($row['service'] == 1){
                $endTime = date("H:i", strtotime('+30 minutes', $startTime));
            }
            else if($row['service'] == 2){
                $endTime = date("H:i", strtotime('+45 minutes', $startTime));
            }
            else if($row['service'] == 3){
                $endTime = date("H:i", strtotime('+15 minutes', $startTime));
            }

            echo "<br/> Appiontment:".$row['bookingID'];
            echo "<br/> Starts ".date('H:i', strtotime($time));
            echo "<br/> Starts ". $endTime;
            echo "<br/> Service ".$row['service'];





            $timeInTheDay[$row['bookingID']] = $endTime;
          }






          // checks for duplicate times
          $unique = array_unique($timeInTheDay);
          $duplicates = array_diff_assoc($timeInTheDay, $unique);
          //print_r($duplicates);

          foreach ($duplicates as $key => $value) {
            //print($key);

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
