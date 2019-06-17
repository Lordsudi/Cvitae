<?php
$name="";
$address="";
$id= 0;
$db=mysqli_connect('localhost','root','','crud');
if (isset($POST['save'])) {
	$name= $_POST['name'];
	$address= $_POST['address'];
	$query= "INSERT INTO info (name,address) VALUES ('$name','$address')";
	mysqli_query($db,$query);
	header('location: user.php');
}
$results = mysqli_query($db,"select * from ")