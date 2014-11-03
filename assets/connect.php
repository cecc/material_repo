
<?php

$host = "sql2.njit.edu";
$user = "cecc";
$dbname = "cecc";
$pass = "slavonic7";


try {


  # MySQL with PDO_MYSQL
    $dbh = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $dbh = null;
 
}
catch(PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";

    echo $e->getMessage();
}

?>