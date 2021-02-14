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
    if(empty($name))
{
    $validatename = "You must enter your name.";
}
else{
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
<input type="submit" value= "SUBMIT">
</form>
</body>
</html>
