<?php
$servername = "localhost"; //default
$username = "root";
$password = ""; //default

//create connection using mysql function
$conn = new mysqli($servername,$username,$password);
//check connection
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
echo "Connected successfully";

?>