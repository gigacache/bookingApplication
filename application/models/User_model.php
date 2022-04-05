<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class User_model extends CI_Model{

  public function verify(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $hashPass = $this->getPassword($email);
    if(password_verify($password, $hashPass)) {
    return true;
    } else {
        return false;
    }

  }

  public function getPassword($email){
    $this->db->select('password');
    $this->db->from('users');
    $this->db->where('email',$email);
    $password = $this->db->get()->row()->password;
    return $password;
  }


  public function getRole(){
      $email = $this->input->post('email');
      $this->db->select('role');
      $this->db->from('users');
      $this->db->where('email',$email);
      $query=$this->db->get()->row()->role;
      return $query;
    }

public function getUserId(){
   $email = $this->input->post('email');
    $this->db->select('userID');
    $this->db->from('users');
    $this->db->where('email',$email);
    $query=$this->db->get()->row()->userID;
    return $query;
  }

  public function signUp(){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $address = $this->input->post('address');
    $postcode = $this->input->post('postcode');
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $data = array(
      'email'=>$email,
      'password'=>$hashed_password,
      'name'=>$name,
      'address'=>$address,
      'postcode'=>$postcode,
      'score'=>0,
      'role'=>'customer'
    );
    return $this->db->insert('users',$data);
    }


    public function checkEmail(){
      $email = $this->input->post('email');
      $this->db->select('email');
      $this->db->from('users');
      $this->db->where('email',$email);
      $query=$this->db->get();
      if($query->num_rows() > 0){
       return true;}
       else {return false;}
      }


    public function getUserDetails(){
      $userID = $this->session->userdata('userID');
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('userID',$userID);
      $query=$this->db->get();
      return $query;
    }


    public function getAllCustomers(){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('role','customer');
      $query=$this->db->get();
      return $query;
    }



    public function addScore(){
      $userID = $this->input->post('userID');
      $score = $this->getScore($userID);
      $score++;
      $this->updateScore($userID,$score);
    }


    public function minusScore(){
      $userID = $this->input->post('userID');
      $score = $this->getScore($userID);
      $score = $score - 1;
      $this->updateScore($userID,$score);
    }


    public function getScore($userID){
      $this->db->select('score');
      $this->db->from('users');
      $this->db->where('userID',$userID);
      $query=$this->db->get()->row()->score;
      return $query;
    }

    public function updateScore($userID, $score){
      $this->db->set('score', $score);
      $this->db->where('userID', $userID);
      $this->db->update('users');
    }


    public function updateDetails(){
      $userID = $this->session->userdata('userID');
      $password = $this->input->post('password');
      $name= $this->input->post('name');
      $address = $this->input->post('address');
      $postcode = $this->input->post('postcode');

      if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $this->db->set('password', $hashed_password);}

      $data = array(
              'name' => $name,
              'address' => $address,
              'postcode' => $postcode
      );

      $this->db->where('userID', $userID);
      $this->db->update('users', $data);
    }






} // End of CI_Model
