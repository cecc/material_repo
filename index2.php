
<?php
include('assets/connect_pdo.php');

print "<h1> Welcome to the Material Repo </h1>";

$id = 1;



   foreach($dbh->query('SELECT * FROM edh_users LIMIT 1') as $row) {
        print_r($row);
        
    }


?>