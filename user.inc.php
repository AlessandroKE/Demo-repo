<?php

include ('Database_OOP.PHP');

class User extends database
{

    protected function getAllUsers(){
        $sql = "SELECT * FROM kejani";

        $result = $this-> connection()->query($sql); // -> this is an object operatorwhich is used to access methods and properties of an object.
        $num_rows = $result->num_rows();

        if ($num_rows > 0){
            while ($row = $result->fetch_assoc){
                $data[] = $row;
            }

            return $data;  
            
    }


}

?>

//Procedural style for mysqli_Fecth_Assoc

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

$result = mysqli_query($mysqli, $query);

/* fetch associative array */
while ($row = mysqli_fetch_assoc($result)) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}

