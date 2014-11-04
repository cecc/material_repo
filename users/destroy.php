<?php

include('../assets/application_header.php');
include('../connect.php');


    $n =$_GET['id'];
    
    print"<h1> The ID deleted is". $n. "</h1>";
    
    $sql="DELETE FROM repo_user WHERE id=$n";
	

    
	$r = mysql_query($sql);
	
	if ($r){
		
		print "The record has been deleted.";	
		
	}else{
		
		print "Nothing to do !";
	}
	
	
    die;
    

?>
