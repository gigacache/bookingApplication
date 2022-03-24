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
$startOfDay = '08:00';
$startTime = strtotime($startOfDay);
$storedStartTime = 0;

$midDay= '12:00';
$endDay= '17:00';
$minStartTime = strtotime($midDay);
$storedminStartTime = 0;



    foreach ($obj->result_array() as $row){

        if($row['timeOfDay'] == 'Morning'){

          $seconds2add = $this->durationOfService($row['service']);
          $storedStartTime =+ $startTime;
          $startTime+=$seconds2add;
          echo '<br/>';
          echo 'new time: ';
          echo date('h:i',$startTime);
          echo '<br/>';

          $endTime = date('h:i',$startTime);

          $this->addToScheduler($row['userID'],$row['bookingDate'], $row['service'],date('h:i',$storedStartTime), $endTime);

          $startTime =+ $startTime;

        }

        if($row['timeOfDay'] == 'Afternoon'){
          $seconds2add = $this->durationOfService($row['service']);
          $storedminStartTime =+ $minStartTime;
          $minStartTime+=$seconds2add;
          echo '<br/>';
          echo 'new time: ';
          echo date('h:i',$minStartTime);
          echo '<br/>';

          $endTime = date('h:i',$minStartTime);

          $this->addToScheduler($row['userID'],$row['bookingDate'], $row['service'],date('h:i',$storedminStartTime), $endTime);

          $minStartTime =+ $minStartTime;

        }




//if (!($minStartTime > strtotime($endDay)) ){













      }
}






public function durationOfService($service){
  $seconds2add = 0;
  if($service == 1){
    $seconds2add = 1800;}

  if($service == 2){
    $seconds2add = 1800;}

  if($service == 3){
    $seconds2add = 1800;}


  return $seconds2add;}



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


public function updateRequest($userID){
  $this->db->set('status', 'Scheduled');
  $this->db->where('userID', $user);
  $this->db->update('mytable');
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
