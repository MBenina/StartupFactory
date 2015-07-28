<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
<form method="post" action="">
    Username:<br>
    <input type="text" name="username"><br/>
    Password:<br>
    <input type="password" name="password"><br/><br>
    <input type="submit" name="submit" value="Log In">
</form>
<br>
<?php
session_start();
if(isset($_POST["username"]) && isset($_POST["password"])){
    if($_POST["username"] == 'Mag'&& $_POST["password"] == 'Mag789'){
		//echo "Welcome" ." ".htmlspecialchars($_POST["username"]). "!<br/>" .'You are logged in';
        $_SESSION["username"] = $_POST["username"];
        header("Location: /homework1/loggedIn.php");
		exit;
		
        
    } else {
        echo "Please enter correct Username or Password.";
    }

}
?>
</body>
</html>