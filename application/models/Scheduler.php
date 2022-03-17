<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Scheduler extends CI_Model{


public function create(){
  $scheduleObj = $this->getAllRequest();
  $this->sortSchedule($scheduleObj);
  return $this->getSchedule();
}


  public function getAllRequest(){
    $this->db->select('*');
    $this->db->from('requests');
    $this->db->where('status','pending');
    $query=$this->db->get();
    return $query;
  }



public function sortSchedule($obj){
  $count = 0;
    $timeInTheDay = array();
    $duration = array();
    echo "<br/>";
    print_r($obj->result_array());
    echo "<br/>";

    foreach ($obj->result_array() as $row){
        $times = $row['bookingTimes'];
        $timesArray = explode(",", $times);
        echo "<br/>";
        $count =0;
        // Adds times to times with booking ID in array
          foreach($timesArray as $time){
            $count++;
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

           echo "<br/> Appiontment:".$row['requestID'];
           echo "<br/> Starts ".date('H:i', strtotime($time));
           echo "<br/> Starts ". $endTime;
           echo "<br/> Service ".$row['service'];
           echo "<br/>";

           //$this->addToScheduler($row['userID'],$row['bookingDate'],$row['service'],$timeFormat,$endTime);

            $timeInTheDay[$count][$row['requestID']] = $timeFormat . '-' . $endTime;



          }

}






print_r($timeInTheDay);
$this->sortArray2D($timeInTheDay);
return $timeInTheDay;
}




public function sortArray2D($timeInTheDay){

  $previous=0;
  $keys = array_keys($timeInTheDay);
for($i = 0; $i < count($timeInTheDay); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($timeInTheDay[$keys[$i]] as $key => $value) {
      $t = explode("-", $value);
      foreach($t as $tim){
        if($previous == $tim){
          echo "<br/>";

        print($tim);
        echo "<br/>";}
        $previous = $tim;
      }
      print_r( $t);
      //  echo $key . " : " . $value . "<br>";
        $previous = $value;
    }
    echo "}<br>";
}
}





public function addToScheduler($userID,$bookingDate, $service,$startTime, $endTime){
  $data = array(
    'userID'=>$userID,
    'bookingDate'=>$bookingDate,
    'service'=>$service,
    'startTime'=>$startTime,
    'endTime'	=>$endTime,
    'status'=> 'sechduling'     );
  return $this->db->insert('Schedule',$data);
  }

public function getSchedule(){
  $this->db->select('*');
  $this->db->from('schedule');
  $this->db->order_by('startTime', 'asc');
  $this->db->where('status','sechduling');
  $this->db->where('bookingDate','2022-03-16');
  $query=$this->db->get();
  return $query;
}


} // End of CI_Model
