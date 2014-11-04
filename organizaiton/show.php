<?php
include('../assets/application_header.php');
include('../connect.php');


$n = $_GET['id'];

$sql = "SELECT * FROM repo_organization WHERE ID = $n";

$result = mysql_query($sql);

if ($result){
		
		
		 while($row = mysql_fetch_assoc($result)){

		 	print "<b> Full Name: </b>" . $row['Name'];
		 	print "<b> Organization Name: </b>" . $row['org_name'];
		 	print "<b> Organization Email: </b>" . $row['org_email'];
		 	print "<b> Organization Phone Number: </b>" . $row['org_phone'];
		 	print "<b> Organization Fax Number: </b>" . $row['org_fax'];
		 	print "<b> Organization Location: </b>" . $row['org_location'];
		 	print "<b> Mission Statement: </b>" . $row['mission'];
		 	print "<b> Slogan: </b>" . $row['slogan'];
		 	print "<b> Abstract: </b>" . $row['abstract'];
		 	print "<b> Service Information: </b>" . $row['service'];
		 	print "<b> Operation Hours: </b>" . $row['operationHours'];
		 	print "<b> Resources: </b>" . $row['resources'];
		 	print "<b> Contact: </b>" . $row['contact'];
		 	print "<b> Status: </b>" . $row['status'];
	    } 
	}

die;

?>
