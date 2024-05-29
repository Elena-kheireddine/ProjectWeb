<!DOCTYPE html>
<html lang="en">
<head>
    <link href="register.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Registration</title>
</head>
<body style="background-image: url(images/studio1.jpeg); width: 100%; height: 598px; background-size: cover; background-repeat: no-repeat; color: #000;">
    <div class="registration">
        <form method="post" action="register_action.php">
            <h1>Looking for a new Beginning?</h1>
            <h2>Register for a new journey and a life changing experience</h2>

            <p>Enter Name:</p>
            <input type=text name="txtFullName" placeholder="Name">

            <p>Enter Age:</p>
            <input type=text name="txtFullName" placeholder="Age">

            <p>Enter Email:</p>
            <input type=email name="txtFullName" placeholder="Email">

            <p><input type=submit value=Submit></p>
        </form>

        <?php
        if(isset($_GET['status']) && $_GET['status']==1) 
            echo"Success !!";
        if(isset($_GET['status']) && $_GET['status']==2)
            echo"All Fields are Required!!";  
        ?> 
    </div>

    <div class="fixed">
        <a class="links" href="index.html">
            <p style="color: #fff; font-size: 20px;" class="links">Visit our page</p>
        </a>
    </div>
</body>
</html>