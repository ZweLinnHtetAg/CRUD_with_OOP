<?php
class User
{
 private $name;

 public function __construct($user_data = [])
 {

    if (isset($user_data['name'])) {
    $this->name          = @$user_data['name'];
    }

 }

 public function setName($name)
 {
  $this->name = $name;
 }

 public function getName()
 {
  return $this->name;
 }

 public function toArray()
 {
  return [
   "name"          => $this->getName(),
   // "email"         => $this->getEmail(),
   // "password"      => $this->getPassword(),
   // "token"         => $this->getToken(),
   // "profile_image" => $this->getProfileImage(),
   // "is_active"     => $this->getIsActive(),
   // "is_login"      => $this->getIsLogin(),
   // "is_confirmed"  => $this->getIsConfirmed(),
   // "date"          => $this->getDate(),
  ];
 }

}
