<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";

// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// creating table and intializing columns
$sql = "CREATE TABLE `assignment`.`airsuiteinterview` ( `ID` INT NOT NULL AUTO_INCREMENT , `Value_Key` CHAR(6) NOT NULL , `Value_Data` VARCHAR(120) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
  $conn->query($sql);
  
 // Inserting the data 
$sql = "INSERT INTO airsuiteinterview (ID, Value_Key, Value_Data)
VALUES ('1', 'FIRSTK', 'NULL'),
       ('2', 'SECOND', 'This is second entry'),
       ('3', 'THIRD', 'THIS is THE third ENTRY')";

$conn->query($sql);
echo "<pre>";
print_r($conn);die;
?>