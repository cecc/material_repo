<?php

include('../assets/application_header.php');
include('../connect.php');

$n = $_GET['id'];



if ($_SERVER ['REQUEST_METHOD']== POST){
	
	print "User Input Recieved <br>";


	//get user input
	$f_oid = $_POST['organization_id'];
	$f_uid = $_POST['user_id'];
	$f_name = $_POST['name'];
	$f_email = $_POST['email'];
	$f_password = $_POST['password'];
	$f_phone = $_POST['phone'];
	$f_secondaryPhone = $_POST['secondaryPhone'];
	$f_type = $_POST['type'];
	$f_status = $_POST['status'];




	print "<h2> $f_name </h2> ";



	$update = "UPDATE repo_user
				SET name = '$f_name',  email = '$f_email', phoneNumber = '$f_phone', 
					password = '$f_password'
				WHERE ID = $f_id";
				

	
	//print $sql;
	
	$upd = mysql_query($update);
	
	
	if ($upd){
	
		print $f_name . " your account has been updated.";
		
	}
	



	die;
}


print "<h1> User Update Page</h1>" ;
print "<h2> The ID passed is " . $n . "</h2>";


$sql = "SELECT * FROM repo_user WHERE ID = $n";

$result = mysql_query($sql);

?>

		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">


<?php
if ($result){
		
		
		 while($row = mysql_fetch_assoc($result)){
		 	print '<input type="hidden" name="user_id" value="' . $row['ID'] . '">';
		 	print 'Name: <input type="text" name="name" value="' . $row['name'] .'"><br>';
			print 'E-mail: <input type="text" name="email" value="' . $row['email'] .'"><br>';
			print 'Change Password: <input type="password" name="password" value="' . $row['password'] .'"><br>';
			print 'Phone Number: <input type="text" name="phone" value="' . $row['phoneNumber'] .'"><br>';
			print 'Secondary Number: <input type="text" name="secondaryPhone" value="' . $row['secondaryPhone'] .'"><br>';
			print 'Type: <input type="text" name="type" value="' . $row['type'] .'"><br>';
			print '<input type="submit" value="Update">';
		
	    } 
	}


die;

 ?>
