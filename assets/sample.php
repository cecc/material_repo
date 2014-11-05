<?php
include('oop_php.php');
$db = new Database();
$db->connect();
$db->select('mysqlcrud');


$res = $db->getResult();
print_r($res);
?>