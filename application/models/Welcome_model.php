<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Welcome_model extends CI_Model{

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












} // End of CI_Model
