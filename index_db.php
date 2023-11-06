<?php

include_once("conn.php");

$username=$_POST['username'];
$password=$_POST['password'];



$sql="insert into user_data values('".$username."','".$password."')";

mysqli_query($conn,$sql);


?>