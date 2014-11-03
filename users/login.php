<?php

<<<<<<< HEAD
include('../assets/application_header.php');
include('../assets/connect.php');


if(isset($_POST['submit'])) {
=======
include('../assest/application_header.php');
include('../assest/connect.php');
>>>>>>> 0a3125f113b757f73010641b6d19314ced293fe8

  $username = $_POST['email'];
  $password = $_POST['password'];
<<<<<<< HEAD
 
 print "Hello !! "; 
  try {


  # MySQL with PDO_MYSQL
    $dbh = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

=======
  
  
  // check to see if user exists
  $sql = " SELECT COUNT(*) FROM repo_user WHERE email == $username AND password == $password ";
  
  $q = mysql_query($sql);
  
  if ($q > 1 ){
    
    print " The User does exists in our system.";
    
    die();
    
  } else{
    
    print "No Match FOUDN try again";
>>>>>>> 0a3125f113b757f73010641b6d19314ced293fe8
    


    $dbh = null;
 
}
catch(PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";

    echo $e->getMessage();
}




}

?>

    <form method="post" action="login.php">
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        </p>
<input type="submit" value="Submit">
      </form>

