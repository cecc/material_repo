<?php

include('../assets/application_header.php')
include('../assets/connect.php');

$result = mysql_query("SELECT * FROM repo_organization");



#get a list organizations from the database and display them in a table
	#organization name, address,  phone number, fax, email, contact person ---- > 

if($result){

	# Creates table with while loop

	echo '<table>';
	while ($row = mysql_fetch_array($result)){

		#creates table row for each organization in database table 

		echo '<tr>';
    	echo '<td>' . $row["name"] . '</td>';
    	echo '<td>' . $row["org_location"] . '</td>';
    	echo '<td>' . $row["org_phone"] . '</td>';
    	echo '<td>' . $row["oprg_fax"] . '</td>';
    	echo '<td>' . $row["org_email"] . '</td>';
    	echo '<td>' . $row["operationHours"] . '</td>';
    	echo '<td>' . $row["contact"] . '</td>';
    	echo '</tr>';
	}
	echo '<table>';

} else{

	# if unable to retrieve data

	print "Unable to return organization information";
	die();

}

 ?>



