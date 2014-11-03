<?php

include('../assets/application_header.php')
include('../assets/connect.php');

$result = mysql_query("SELECT * FROM repo_user");

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
		echo '<tr>';

		 while($row = mysql_fetch_assoc($result)){
		 				
		 	echo '<td>' . $row['orgainzation_id'] . '</td>';

			echo '<td>' . $row['org_name'] . '</td>';
			
		    echo '<td>' . $row['org_email'] . '</td>';

		    echo '<td>' . $row['org_number'] . '</td>';

				    echo '<td> <a href="show.php?id='.$row['organization_id'] .'">Show </a> | Update | Destroy   </td></tr>';
  
		
		
	    } 
	    echo '</tr>';
	    echo '</table>';
	}
	else{
		
		print "Something is wrong with the sql";
		    echo 'MySQL Error: ' . mysql_error();
		
	}




 ?>
