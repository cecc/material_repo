<?php

include('../assests/application_header.php')
include ('../connect.php');

$result = mysql_query("SELECT * FROM repo_users");

if ($result){
		
		
		echo '<table border="1">';
		
		print " <tr>
					<td>ID</td>
					<td>Name</td>
					<td>Email</td>
					<td>Phone </td>
					<td>Operations</td>

				</tr>
					";

		 while($row = mysql_fetch_assoc($result)){
		 				echo '<td>' . $row['orgainzation_id'];

			echo '<td>' . $row['org_name'];
			
		    echo '<td>' . $row['org_email'];

		    echo '<td>' . $row['org_number'] . '</td>';

				    echo '<td> <a href="show.php?id='.$row['organization_id'] .'">Show </a>



				    | Update | Destroy   </td></tr>';
  
		
		
	    } 
	}
	else{
		
		print "Something is wrong with the sql";
		    echo 'MySQL Error: ' . mysql_error();
		
	}




 ?>
