<?php

$fullname=$_POST['txtFullName'];
$age=$_POST['txtAge'];
$email=$_POST['txtEmail'];
if(empty($fullname) || empty($email) || empty($age))
     header("location:register.php?status=2");
else{    
//serve - username - password - database name
$con=mysqli_connect("localhost","root","","project");

$query="INSERT INTO clientinfo(db_name,db_age,db_email) VALUES ('$fullname','$age','$email')";
mysqli_query($con,$query) or die(mysqli_error($con));

header("location:register.php?status=1");
}
?>