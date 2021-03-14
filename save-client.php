<?php

$name = $_REQUEST["name"];
$identification_card = $_REQUEST["identification_card"];
$license_plate = $_REQUEST["license_plate"];
$phone = $_REQUEST["phone"];


//1- conect to database
$host = "localhost";
$dbname = "car_workshop_db_2021";
$ussername = "root";
$password = "";

$cnx = new PDO("mysql:host=$host;dbname=$dbname", $ussername, $password);

//2. Build SQL sentence

$sql = "INSERT INTO client, (id, name, identification_card, license_plate, phone) VALUES (NULL, '$name', '$identification_card',  '$license_plate',  '$phone')";

//3. prepare SQL sentence

$q = $cnx->prepare($sql);

//4. execute SQL sentence

$result = $q->execute();
if($result){
    echo "Client saved sucessfully";
}
else{
    echo "There was an error creating the client $name";

}
?>
