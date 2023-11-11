<?php
namespace Usercontroler;
class Usercontroler{

private $model;

public function __construct($model){
    $this->model=$model;
}
public function index(){

    $users = $this->model->index();
    
    include "app/views/user_view.php";
    

}
public function update($id){

    if(!isset($_POST['update']))
    {
        $update_user_data = $this->model->index($id);
        include "app/views/update_user_view.php";
    }
    else
    {  
        $username=$_POST['username'];
        $password=$_POST['password'];        
        $data=array(
            'username'=>$username,
            'password'=>$password
        );
        $x=$this->model->update_model($data,$id);
        
        header("location:/mvc/");
    }

}
public function addUser() {
    if(!isset($_POST['add']))
    {
        include "app/views/insert_user_view.php";
    }  
  
    else{
        $username=$_POST['username'];
        $email=$_POST['password'];
        $role=($_POST['type']=='normal')?0:1;
        $data = [
            'username' =>$username ,
            'password' => $email ,
            'role'=>$role
        ];
        if ($this->model->addUser($data)) {
            
            header("location:/mvc/");
        } else {
            echo "Failed to add user.";
        }
    }

}
public function deleteUser($id){
    if(!isset($_POST['yes'] ) and  !isset($_POST['no'] ) )
    {
        echo 'are you sure man!';
        include "app/views/delete_user_view.php";
    }
    else
    {
        if(isset($_POST['yes'])){
            $this->model->delete($id);
            header("location:/mvc/");
        }    
    
        else{
            
            header("location:/mvc/");
        }
    }
}
}




?>