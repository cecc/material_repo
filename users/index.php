	<?php
	$page_title = "List of Users";
	include('../assets/application_header.php');
	include('../assets/connect.php');

		
	$sql = mysql_query("SELECT * FROM repo_user"); 
	
	if ($sql){
	
	while ($row = mysql_fetch_assoc($sql)){	
		$rows[] = $row;
	}
	
	echo '<table class="table">
			<tr>
			<th>Full Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Secondary Phone</th>
			<th>Status</th>
			<th>Account Type </th>
			<th>Created At</th>
			<th>Organization</th>
			</tr>';
	// Updated some of Atika's Code - 11/05 5:04
	foreach ($rows as $row){
		print "<tr>";
		print "<td><a href=".'show.php?id="'. $row['email'] . '"> '. $row['name']. "</td>";
		print "<td>". $row['email']. "</td>";
		print "<td>" .$row['phoneNumber']. "</td>";
		print "<td>" .$row['secondayPhone']. "</td>";
		print "<td>" .$row['status']. "</td>";
		print "<td>" .$row['type']. "</td>";
		print "<td>" .$row['created_at']. "</td>";
		print "<td>" .$row['organization_id']. "</td>";
		print "</tr>";
	
		} 
				
	}
	
	?>
