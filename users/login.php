<?php

include('../assests/application_header.php');
include('../assests/connect.php');

if ($_SERVER ['REQUEST METHOD'] == POST){
  
  $username = $_POST['email'];
  $password = $_POST['password'];
  
  
  // check to see if user exists
  $sql = " SELECT COUNT(*) FROM repo_users WHERE email == $username AND password == $password ";
  
  $q = mysql_query($sql);
  
  if ($q > 1 ){
    
    print " The User does exists in our system.";
    
    die();
    
  } else{
    
    print "No Match FOUDN try again";
    
  }
  
  
  
  
}

?>

    <form method="post" action=<?=$_SERVER['PHP_SELF']?>>
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>

