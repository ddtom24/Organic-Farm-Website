<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TheOrganicFarm</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="main">
			

<h2>Already a friend of The Organic Farm?</h2>

<form method="POST">
Username<input type="text" name="username" class="text" autocomplete="off" required>
Password <input type="password" name="password" class="text" required>
<input type="submit" name="submit" id="sub">
</form>

</div>
	

	</header>



</body>	

<!--the following div element makes your page go up so you don't have to look at the bottom of the screen-->
<div style="margin-top:200px"></div>

</html>

<?php 

if (isset($_POST['submit'])) {

    $un=$_POST['username'];
    $pw=$_POST['password'];

    if ($un=='username' && $pw=='password') {

    	header("location:success.html");
    	exit();
    }
    else
    	echo "Invalid Username or Password";
}

?>
