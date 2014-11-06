<?php


include('assets/application_header.php');
include('assets/connect.php');


if(isset($_POST['submit'])) {

  print "Hello Tonight";


  $username = $_POST['email'];
  $password = $_POST['password'];

  # Query the database to find if the user exists 

  $result = mysql_query("SELECT email FROM repo_user WHERE email = $username");
  
  if($result){	

  	# Match the password provided with the one stored

  	$passResult = mysql_query("SELECT password FROM repo_user WHERE password = $password");
  	
  	if($passResult){

  		print "You Have successfully logged in";

  	}

  } else {

  	# if there is no match redirect login

  	print "Failure to log in. Try again ";
  	die();

  }

}
?>

    <form method="post" action="login.php">
        <p>Username / Email:<input type="text" name="email" value="" placeholder="Email"></p>
        <p>Password:<input type="password" name="password" value="" placeholder="Password"></p>
		<input type="submit" value="Submit">
     </form>

