<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Scheduler extends CI_Model{


public function create(){
  $date = $this->input->post('date');
  $scheduleObj = $this->getAllRequest($date);
  $this->sortSchedule($scheduleObj);
  return $this->getSchedule($date);
}


  public function getAllRequest($date){
    $this->db->select('*');
    $this->db->from('requests');
    $this->db->where('status','pending');
    $this->db->where('bookingDate' , $date);
    $query=$this->db->get();
    return $query;
  }



public function sortSchedule($obj){
  print_r($obj->result_array());
  echo "<br/>";
  $startTime = '08:00';
  $count=0;
  $new_time = strtotime($startTime);
    foreach ($obj->result_array() as $row){

      $seconds2add =0;
        if($row['timeOfDay'] == 'Morning'){

          if($row['service'] == 1){
            $seconds2add = 1800;}

          if($row['service'] == 2){
            $seconds2add = 1800;}

          if($row['service'] == 3){
            $seconds2add = 1800;}

          $new_time+=$seconds2add;

          echo '<br/>';
          echo 'new time: ';
          echo date('h:i',$new_time);
          echo '<br/>';

          $dataTime = date('h:i',$new_time);

          if($count == 1){
          $dataTim = date('h:i',$startTime);}
          else{
              $dataTim = '08:00';
}
          $this->addToScheduler($row['userID'],$row['bookingDate'], $row['service'],$dataTim, $dataTime);

          $startTime =+ $new_time;
$count++;
        }















      }
}


public function addToScheduler($userID,$bookingDate, $service,$startTime, $endTime){
  $data = array(
    'userID'=>$userID,
    'bookingDate'=>$bookingDate,
    'service'=>$service,
    'startTime'=>$startTime,
    'endTime'	=>$endTime,
    'status'=> 'scheduled');
  return $this->db->insert('Schedule',$data);
  }

public function getSchedule($date){
  $this->db->select('*');
  $this->db->from('schedule');
  $this->db->where('bookingDate' , $date);
  $this->db->join('users', 'users.userID = schedule.userID');
  $this->db->order_by('startTime', 'asc');
  $query=$this->db->get();
  return $query;
}


} // End of CI_Model
