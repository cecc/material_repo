<?php


include('../assets/application_header.php');
include('../assets/connect.php');


if(isset($_POST['submit'])) {

  print "Hello Tonight";


  $username = $_POST['email'];
  $password = $_POST['password'];
}
?>

    <form method="post" action="login.php">
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        </p>
<input type="submit" value="Submit">
      </form>

