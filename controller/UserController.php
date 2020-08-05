<?php 


class UserController {

    private $db;
    private $userID;
    private $validation;

    public function __construct(Database $db, Validation $validation){
        $this->db = $db;
        $this->validation = $validation;

    }

    public function createUser()
    {
   
     $name  = $this->validation->input($_POST['name']);
     
     
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      
      $user = new User();
      $user->setName($name);
    
      $userCreated = $this->db->create('users', $user->toArray());

      echo ($userCreated!=1)?"Create Success":'Fail';


     }
     
     //header('');
    }

}


?>