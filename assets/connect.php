
<?php


	$sys_hostname = 'sql2.njit.edu';
	$sys_username = 'cecc';
	$sys_project = 'cecc';
	$sys_password = 'slavonic7';


( $dbh = mysql_connect( $sys_hostname, $sys_username, $sys_password ) )
	        or die ( "Unable to connect to MySQL database.!! " );
			

mysql_select_db( $sys_project );



?>
