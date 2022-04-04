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
    $this->db->order_by('timeOfDay', 'asc');
    $query=$this->db->get();
    return $query;
  }



public function sortSchedule($obj){
  // Morning Session Time From 08:00 - 12:00
  $startOfDay = '08:00';
  $startTime = strtotime($startOfDay);
  $storedStartTime = 0;

  $result = 'scheduled';

  // Afternoon Session Time From 12:00 - 17:00
  $midDay= '12:00';
  $endDay= '17:00';
  $midStartTime = strtotime($midDay);
  $storedMidStartTime = 0;

  // Looping each Booking request Object
  foreach ($obj->result_array() as $row){

        if($row['timeOfDay'] == 'Morning'){
          if (!($startTime >= strtotime($midDay))){
            $seconds2add = $this->durationOfService($row['service']);
            $storedStartTime =+ $startTime;
            $startTime+=$seconds2add;
            $endTime = date('H:i',$startTime);

              if (!($endTime > '12:00')){
                $this->addToScheduler($row['userID'],$row['bookingDate'], $row['service'],date('H:i',$storedStartTime), $endTime , $row['requestID']);
                $startTime =+ $startTime;
              } else{ $result = 'rejected';}
            }else{$result = 'rejected';}
          }

        if($row['timeOfDay'] == 'Afternoon'){
          if (!($midStartTime >= strtotime($endDay))){
          $seconds2add = $this->durationOfService($row['service']);
          $storedMidStartTime =+ $midStartTime;
          $midStartTime+=$seconds2add;
          $endTime = date('H:i',$midStartTime);
          if (!($endTime > '17:00')){
          $this->addToScheduler($row['userID'],$row['bookingDate'], $row['service'],date('H:i',$storedMidStartTime), $endTime, $row['requestID']);
          $midStartTime =+ $midStartTime;
          } else{ $result = 'rejected';}
        }else{$result = 'rejected';}
  }








        $this->updateRequest($row['requestID'],$result);



      }
}




public function durationOfService($service){
  $seconds2add = 0;
  if($service == 'Service One'){
    $seconds2add = 1800;}

  if($service == 'Service Two'){
    $seconds2add = 2700;}

  if($service == 'Service Three'){
    $seconds2add = 3600;}


  return $seconds2add;}



public function addToScheduler($userID,$bookingDate, $service,$startTime, $endTime, $requestID){
  $data = array(
    'userID'=>$userID,
    'bookingDate'=>$bookingDate,
    'service'=>$service,
    'startTime'=>$startTime,
    'endTime'	=>$endTime,
    'status'=> 'scheduled',
    'requestID'=> $requestID);
  return $this->db->insert('Schedule',$data);
  }


public function updateRequest($requestID, $result){
  $this->db->set('status', $result);
  $this->db->where('requestID', $requestID);
  $this->db->update('requests');
}





public function getSchedule($date){
  $this->db->select('*');
  $this->db->from('schedule');
  $this->db->where('bookingDate' , $date);
  $this->db->where('status' , 'scheduled');
  $this->db->join('users', 'users.userID = schedule.userID');
  $this->db->order_by('startTime', 'asc');
  $query=$this->db->get();
  return $query;
}




public function cancelAppointment(){
  $requestID = $this->input->post('requestID');
  $result = 'cancelled';
  $this->updateRequest($requestID, $result);
  $this->db->set('status', 'cancelled');
  $this->db->where('requestID', $requestID);
  $this->db->update('schedule');
}


} // End of CI_Model
