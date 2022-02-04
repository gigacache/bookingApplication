<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class Welcome_model extends CI_Model{

  public function verify(){
    $data['email'] = $this->input->post('email');
    $data['password'] = $this->input->post('password');
    return $this->db->get_where('users' , $data)->row();
  }

public function getUserId(){
   $email = $this->input->post('email');
    $this->db->select('userID');
    $this->db->from('users');
    $this->db->where('email',  $email);
    $query=$this->db->get()->row()->GUID;
    return $query;
  }

  public function signUp(){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $address = $this->input->post('address');
    $postcode = $this->input->post('postcode');

    $data = array(
      'email'=>$email,
      'password'=>$password,
      'name'=>$name,
      'address'=>$address,
      'postcode'=>$postcode,
    );
    return $this->db->insert('users',$data);
    }












} // End of CI_Model
