<?php
	include ('../assets/application_header.php');
	include ('../assets/connect.php');
	
	


	$sql = mysql_query("SELECT * FROM repo_organization");


	if ($sql){

		# This part gets the result

		while ($row = mysql_fetch_assoc($sql)){
	
			$rows[] = $row;
		}


		#create the table 
	
		echo '<table class="table">
			      <tr>
			       <th>ID</th>
			       <th>Name</th>
			       <th>Email</th>
			       <th>Address</th>
			       <th>Phone Number</th>
			       <th>Created</th>
			       <th>Operations</th>
			     </tr>';


		foreach ($rows as $row){
			print "<tr>";
			print "<td>" . $row['organization_id'] . "</td>";
                        print "<td>" . $row['org_name'] . "</td>";
                        print "<td>" . $row['org_email'] . "</td>";
                        print "<td>" . $row['org_location'] . "</td>";
                        print "<td>" . $row['org_phone'] . "</td>";
                        print "<td>" . $row['created_at']."</td>";
                        print "</tr>";

		
			
		}

	


	}//ends $sql
	
	

 

?>

