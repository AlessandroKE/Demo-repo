<?php
 
 Class database{
    private $host;
    private $user_name;
    private $password;
    private $db_name;
//Protected properties and methods can only be used by the class in which the property or method was defined and any classes that derive from it. 
//Any other code cannot use them.
    protected function connect(){

        $this->host = "localhost";
        $this->user_name = "root";
        $this->password = "";
        $this->db_name = "kejani";

        $conn = mysqli_connect($this->host,$this->user_name, $this->password,$this->db_name);

        return $conn; 


    }
    
 }

?>