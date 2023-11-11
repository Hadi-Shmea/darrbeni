<?php
namespace Usermodel;
class Usermodel{

private $db;

public function __construct($db){
    $this->db=$db;
}

public function index($id=null){

    if($id !==null){
    $this->db->where('id',$id);
    $user= $this->db->get('users');

    
    }    
    else{
        
        $user= $this->db->get('users');
    }
    return $user;
}

public function update_model($entered_data,$id){
    
    $this->db->where('id',$id);
    $update_user=$this->db->update('users',$entered_data);
    return $update_user;
    
}
public function addUser($data) {
     return  $this->db->insert('users', $data); 
}
public function delete($id) {
    $this->db->where('id',$id);
    $this->db->delete('users');

}
}