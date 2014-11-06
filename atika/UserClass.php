<?php
  include ('../assets/connect.php');

class Users {
      public $name;
      public $email;
      public $phoneNumber;
      public $secondaryPhone;
      public $type;
      public $status;
      public $password;
   

public function setName($fname){
    $this->name=$fname; 
}

public function getName() {
   return $this->name. "<br />"; 
}


public function setEmail($femail){
    $this->email=$femail; 
}

public function getEmail() {
   return $this->email. "<br />"; 
}


public function setPhoneNumber($fphoneNumber){
    $this->phoneNumber=$fphoneNumber; 
}

public function getPhoneNumber() {
   return $this->phonNumber. "<br />"; 
}


public function setsecondaryPhone($fsecondaryPhone){
    $this->secondaryPhone=$fsecondaryPhone; 
}

public function getsecondaryPhone() {
   return $this->secondaryPhone. "<br />"; 
}


public function setType($fype){
    $this->type=$ftype; 
}

public function getType() {
   return $this->type. "<br />"; 
}



public function setStatus($fstatus){
    $this->status=$fstatus; 
}

public function getStatus() {
   return $this->status . "<br />"; 
}


public function setpassword($fpassword){
    $this->password=$fpassword; 
}

public function getpassword() {
   return $this->password. "<br />"; 
}
  public function createUser(){

  	//get the values
  	$fname = $this->name;
  	$femail = $this->email;
  	$fphone = $this->phoneNumber;
  	$ftype = "testing";

  	//SQL Statement
    $q = "INSERT INTO repo_user (name, email, phoneNumber, type) VALUES ($fname, $femail, $fphone, $ftype)";
  	$result = mysql_query($q);



  }


}


//Creates the user 
$obj= new Users;
//sets some properties
$obj->setName ("Paul Rajah"); 
$obj->setEmail ("pr257@njit.edu"); 
$obj->setPhoneNumber ("973.596.5401");






$obj-> createUser();





?>















