<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Clients</title>
</head>
<body style="background-image: url(images/studio1.jpeg); width: auto; height: 582px; background-size: cover; background-repeat: no-repeat;">

</body>
</html>
<?php
    $con=mysqli_connect("localhost","root","","project");

    $sql="SELECT * FROM clientinfo";
    $result=mysqli_query($con,$sql);
?>

<center>
<table width=60% border=1 style="top: 30%; position: absolute; left: 50%; transform: translate(-50%, -90%); color: #000;" cellpadding= 5px;>
    <tr>
        <td>Name</td><td>Age</td><td>Email</td></tr>
<?php
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr><td>".$row['db_name']."</td><td>".$row['db_age']."</td><td>".$row['db_email']."</td></tr>";
    }
?>
</table>
</center>