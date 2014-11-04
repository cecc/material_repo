<?php

include('../assets/application_header.php');
include('../connect.php');

$n = $_GET['id'];



if ($_SERVER ['REQUEST_METHOD']== POST){
	
	print "Organization Input Recieved <br>";



	//get user input
	$f_oid = $_POST['org_name'];
	$f_uid = $_POST['user_id'];
	$f_name = $_POST['org_name'];
	$f_email = $_POST['org_email'];
	$f_phone = $_POST['org_phone'];
	$f_pass = $_POST['password'];



	print "<h2> $f_name </h2> ";



	$update = "UPDATE repo_organization 
				SET Name = '$f_name',  Email = '$f_email', phone_number = '$f_phone', 
					Password = '$f_pass'
				WHERE ID = $f_id";
				

	
	//print $sql;
	
	$upd = mysql_query($update);
	
	
	if ($upd){
	
		print $f_name . " your account has been updated.";
	}
	



	die;
}


print "<h1> Organization Update Page</h1>" ;
print "<h2> The ID passed is " . $n . "</h2>";


$sql = "SELECT * FROM repo_organization WHERE ID = $n";

$result = mysql_query($sql);

?>

		<form action=<?=$_SERVER['PHP_SELF']?> method="post">


<?php
if ($result){
		
		
		 while($row = mysql_fetch_assoc($result)){
		 	foreach($r as $value) {
		       echo '<td>' . $value . '</td>';
		   }
			print '<input type="submit" value="Update">';
		
	    } 
	}


die;

 ?>
 
