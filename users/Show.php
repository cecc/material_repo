<?php
include('../assets/application_header.php')
include('../assets/connect.php');

$n = $_GET['id'];




$sql = "SELECT * FROM Users WHERE ID = $n";

$result = mysql_query($sql);

if ($result){
		
		
		 while($row = mysql_fetch_assoc($result)){

		 	print "<b> Full Name: </b>" . $row['Name'];
		 	print "<b> Email: </b>" . $row['Email'];
		 	print "<b> Phone Number: </b>" . $row['Phone'];
		 	print "<b> Fax NUmber: </b>" . $row['Fax'];
		 	print "<b> Location: </b>" . $row['Location'];
		 	print "<b> Mission Statement: </b>" . $row['Mission'];
		 	print "<b> Slogan: </b>" . $row['Slogan'];
		 	print "<b> Abstract: </b>" . $row['Abstract'];
		 	print "<b> Service: </b>" . $row['Service'];
		 	print "<b> Operation Hours: </b>" . $row['OpertionHours'];
      print "<b> Resources: </b>" . $row['Resources'];
      print "<b> Contact: </b>" . $row['Contact'];
      print "<b> Updated_at: </b>" . $row['Updated_at'];

	    } 
	}






die;
?>
