<?php
// script to connect to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_de_compte";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn)
{
	 echo "Connexion bien établie";
}
else
{
	//echo "Connection failed";  
	//or use to see error funtion of php	
	die("Connexion échouée" . mysqli_connect_error());
}
?>