<?php

Class Login_Database extends CI_Model {
 
  function user_status($st)
    {
       if ($st == "true")
       {
       $this->db
                      ->set('status', "booked")
                      ->where('user_id', $_POST['id'])
                      ->update('room');
           }
          else
          {
            $this->db
                            ->set('status', "pending")
                            ->where('user_id', $_POST['id'])
                            ->update('room');
           }
     }
   public function get_blog() {


$this->db->select('*');
$this->db->from('blogs');
$this->db->order_by("id", "desc");
$query = $this->db->get();

if ($this->db->affected_rows() > 0) {
return $query->result();
 
 }
  else {
 return $query->result();

 }
 }   



  public function delete_blog($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blogs');
        if ($this->db->affected_rows() > 0) {
return $query->result();
 
 }
  else {
 return false;
 }
    }
 public function get_blog1($id)
        {

          $this->db->where('id', $id);
        
        $this->db->from('blogs');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        
        if ($this->db->affected_rows() > 0) {
        return $query->result();
         
         }
          else {
         return false;
         } 
        }
         public function insert_client($data) {


 

// Query to insert data in database
 $this->db->insert('feedback', $data);
 if ($this->db->affected_rows() > 0) {

$this->db->select('*');
$this->db->from('feedback');
 $this->db->order_by("id", "desc");
$query = $this->db->get();


return $query->result();
 
 }
  else {
 return false;
 }
 }
  public function get_client() {


$this->db->select('*');
$this->db->from('feedback');
$this->db->order_by("id", "ASC");
$query = $this->db->get();

if ($this->db->affected_rows() > 0) {
return $query->result();
 
 }
  else {
 return false;
 }
 }

 public function insert_blog($data) {


 

// Query to insert data in database
 $this->db->insert('blogs', $data);
 if ($this->db->affected_rows() > 0) {

$this->db->select('*');
$this->db->from('blogs');
 $this->db->order_by("id", "desc");
$query = $this->db->get();


return $query->result();
 
 }
  else {
 return false;
 }
 }

public function get_admin2() {


$this->db->select('*');
$this->db->from('admin');
$this->db->order_by("id");
$query = $this->db->get();

if ($this->db->affected_rows() > 0) {
return $query->result();
 
 }
  else {
 return false;
 }
 }

public function get_admin($data) {
     
      $condition = "username =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where($condition);
      $this->db->limit(1);
      $query = $this->db->get();

      if ($query->num_rows() == 1) {
      return $query->result();

      } else {
        $this->session->set_flashdata("login_erradmin", "Please provide correct information");
      return false;
      }
  }



}

?>