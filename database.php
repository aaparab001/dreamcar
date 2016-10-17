<?php
$servername = "mysql.hostinger.in";
$username = "u788272421_user";
$password = "dreamcar";
$dbname = "u788272421_mydb";
//create connection
$conn =  mysqli_connect($servername,$username,$password,$dbname);
// check connection
if(!$conn){
        die("Connection Failed: ". mysqli_connect_error());
}
$mysqli = new mysqli($servername, $username, $password,$dbname);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
