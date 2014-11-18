<?php

include('../assets/application_header.php');


?>

<!DOCTYPE html>


<form action="<?=$_SERVER['PHP_SELF']?>" method="post">

name: <input type="text" name="name"><br>
email: <input type="text" name="email"><br>
phoneNumber:<input type="text" name="phoneNumber"><br>
secondaryPhone: <input type="text" name="secondaryPhone"><br>
type:<input type="text" name="type"><br>
status: <input type="boolean" name="status"><br>
password: <input type="text" name="password"><br>
organization_id: <input type="text" name="organization_id"><br>
<input type="submit" name="submit" value="Submit"> 

</form>


</html>
