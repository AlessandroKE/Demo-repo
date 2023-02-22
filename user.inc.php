<?php

//include ('Database_OOP.PHP');

class User extends database
{

    protected function getAllUsers(){
        $sql = "SELECT * FROM kejani";

        $result = $this-> connection()->query($sql);
        $num_rows = $result->num_rows();

        if ($num_rows > 0){
            while ($row = $result->fetch_assoc){
                $data[] = $row;
            }

            return $data;  
            
    }


}

?>
