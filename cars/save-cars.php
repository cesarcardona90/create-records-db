<?php

$license_plate= $_REQUEST["license_plate"];
$owner_identification = $_REQUEST["owner_identification"];
$mark = $_REQUEST["mark"];
$model = $_REQUEST["model"];
$km = $_REQUEST["km"];


//1- conect to database
$host = "localhost";
$dbname = "car_workshop_db_2021";
$ussername = "root";
$password = "";

$cnx = new PDO("mysql:host=$host;dbname=$dbname", $ussername, $password);

//2. Build SQL sentence

$sql = "INSERT INTO `cars` (`id`, `license_plate`, `owner_identification`, `mark`, `model`, `km`) VALUES (NULL, '$license_plate', '$owner_identification', '$mark', '$model', '$km')";

//3. prepare SQL sentence

$q = $cnx->prepare($sql);

//4. execute SQL sentence

$result = $q->execute();
if($result){
    echo "Car  saved sucessfully";
}
else{
    echo "There was an error creating the Car";

}
?>
