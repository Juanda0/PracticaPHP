<?php
$name = $_POST["name"];
$name = stripcslashes($name);

$query =  "INSERT INTO name_table (name) VALUES ('$name')";
$connection = new mysqli('localhost', 'root', '','name_example_db');
$result = $connection->query($query);

if($result){
    echo "INSERTED SUCCESFULLY NAME: ".$name;
}else{
    echo "error " . $connection->error;
}
?>