<!DOCTYPE html>
<html>
<body>
<?php

$validatename="";
$validatemail="";
$validatecheckbox="";
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


if(isset($_REQUEST["vehicle1"]) && isset($_REQUEST["vehicle2"]) && isset($_REQUEST["vehicle3"]))
{
    echo "Please select one vehicle.";
    
}else{
    $v1=$_REQUEST["vehicle1"];
    $v2=$_REQUEST["vehicle2"];
    $v3=$_REQUEST["vehicle3"];
    if(isset($v1)){
        echo $v1;
    }
    elseif(isset($v2)){
        echo $v2;
    }elseif(isset($v3)){
        echo $v3;
    }

}
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Name: <input type="text" name="name"><?php echo $validatename;?>
<br>
<br>
E-mail: <input type="text" name="email"><?php echo $validatemail;?><br>
<br>
<input type="checkbox"  name = "vehicle1" value = "Bike">
<label for="vehicle1">I have a Bike</label><br>
<input type="checkbox"  name = "vehicle2" value = "Car">
<label for="vehicle2">I have a Bike</label><br>
<input type="checkbox"  name = "vehicle3" value = "Boat">
<label for="vehicle3">I have a Bike</label><br>
<?php echo $validatecheckbox;?>
<input type="submit" value= "SUBMIT">
</form>
</body>
</html>
