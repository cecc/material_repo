<?php 

class connect_pdo
{
    protected $dbh;



    public function __construct()
    {
        try {
            $db_host = 'sql2.njit.edu';  //  hostname
            $db_name = 'cecc';  //  databasename
            $db_user = 'cecc';  //  username
            $user_pw = 'slavonic7';  //  password

            $con = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);  
            $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $con->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8  
        }
        catch (PDOException $err) {  
            echo "harmless error message if the connection fails";
            $err->getMessage() . "<br/>";
            file_put_contents('PDOErrors.txt',$err, FILE_APPEND);  // write some details to an error-log outside public_html  
            die();  //  terminate connection
        }
    }

    public function dbh()
    {
        return $this->dbh;
    }
}
#   put database handler into a var for easier access
    $con = new connect_pdo();
    $con = $con->dbh();
//

?>