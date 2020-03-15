<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="hardware";
$a=$_POST["name"];
$b=$_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE table if not exists mydb1()";
$sql1 = "insert into mydb1 values(name varchar,pass varchar)";
if ($conn->query($sql) === TRUE) {
	
	 if ($conn->query($sql1)!=NULL) {
		 
		 header("Location: index.html");

	 }
	 else{
	echo "***";
	
	 }
       
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>