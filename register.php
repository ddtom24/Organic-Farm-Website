<?php

$servername = "192.168.64.2";
$dBUsername = "root";
$dBPassword = "";
$dBName = "useraccounts";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$num=$_POST['fname'];
$pn=$_POST['surname'];
$mail=$_POST['email'];
$username=$_POST['username'];
$pw=$_POST['pwd'];

$sql = "INSERT INTO users( fname ,surname, email, username,pwd,)
VALUES ('$num', '$pn', '$mail','$username', $pw')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>