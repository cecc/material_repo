<?php

include('../assets/application_header.php');
include('../assets/connect.php');


if(isset($_POST['submit'])) {

  $username = $_POST['email'];
  $password = $_POST['password'];
 
 print "Hello !! "; 
  try {


  # MySQL with PDO_MYSQL
    $dbh = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    


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

