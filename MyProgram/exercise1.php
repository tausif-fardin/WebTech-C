<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<head>
    <title>Image & Link</title>
</head>
    <img src="img/google-new-logo-png-5.png" alt="Google" width="500" height="300">
    <a href="/MyProgram/homepage.php">Have a look at my first exercise.</a>
</body>

</html>