<?php 

# Object Oriented PHP for PHP and MySQL

class Database
{
	private db_host = "sql2.njit.edu"; 
	private db_user = "cecc"; 
	private db_pass = "slavonic7"; 
	private db_name = "cecc"; 


    public function connect(){  
    	
    	if(!$this->con){
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
            
            if($myconn)
            {
                $seldb = @mysql_select_db($this->db_name,$myconn);
                if($seldb)
                {
                    $this->con = true; 
                    return true; 
                } else
                {
                    return false; 
                }
            } else
            {
                return false; 
            }
        } else
        {
            return true; 
        }
    	
    
    
    
    
    }//end of connect
    
    
    private $result = array(); 
 
	private function tableExists($table)
	    {
	        $tablesInDb = @mysql_query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
	        if($tablesInDb)
	        {
	            if(mysql_num_rows($tablesInDb)==1)
	            {
	                return true; 
	            }
	            else
	            { 
	                return false; 
	            }
	        }
	    }
	    
	    
    
    
    
    
    
    public function disconnect(){
	    
    }
    public function select(){   
	    
	    
	    
	    
    }
    public function insert(){ 
      }
    public function delete()        {   }
    public function update()    {   }
}


?>