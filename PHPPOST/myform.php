<!DOCTYPE html>
<html>
<body>
<?php

$validatename="";
$validatemail="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    if(empty($name) || (strlen($name))<3)
{
    $validatename = "You must enter a valid name.";
}
else
{
    $validatename = "Your name is ".$name;
}

if(empty($email))
{
    $validatemail = "You must enter email.";
}
else{
    $validatemail = "Your email is ".$email;
}
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Name: <input type="text" name="name"><?php echo $validatename;?>
<br>
<br>
E-mail: <input type="text" name="email"><?php echo $validatemail;?><br>
<br>
<input type="checkbox" id="vehicle1" name = "vehicle1" value = "Bike">
<label for="vehicle1">I have a Bike</label><br>
<input type="checkbox" id="vehicle2" name = "vehicle2" value = "Car">
<label for="vehicle2">I have a Bike</label><br>
<input type="checkbox" id="vehicle3" name = "vehicle3" value = "Boat">
<label for="vehicle3">I have a Bike</label><br>

<input type="submit" value= "SUBMIT">
</form>
</body>
</html>
