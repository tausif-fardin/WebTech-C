<?php
$servername = "localhost"; //default
$username = "root";
$password = ""; //default
$dbname = "mydb";

//create connection using mysql function
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO user(firstname, lastname, age, id)
VALUES ('Doe', 'Bob', 18,'18-38853-3')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>