<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="adamas_learning";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

//Check connection
if(!$conn) {
   echo "error !";
}
else{
    echo "Connected successfully";
}

?>