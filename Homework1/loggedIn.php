<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
session_start();
if (! empty($_SESSION['username']))

{
	echo $_SESSION['username'];
    ?>

    <p>Welcome to Our Website!</p>
	<p><a href='logout.php'>Click here to log out</a></p>

<?php
}
else
{
    echo 'You are not logged in. <a href="index.php">Click here</a> to log in. <br>';
}
?>
<form method="post" action="">
	<input type="hidden" name="submitted" />
	<input type="submit" value="Log Out" />
</form>
<?php
if (isset($_POST['submitted'])) {
        header("Location: /homework1/index.php");
     
}
?>
</body>
</html>

