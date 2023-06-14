<?php
include "signup.php";
$un=$_POST['name'];
$pwd=$_POST['password'];
$sql="select * from register where name='$un' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
    echo '<script>alert("Logged in Successfully...")</script>';   
}
else{
    echo '<script>alert("Invalid User Name or Password")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="/Images/FAVICON CROWN.png">
</head>
<body>
    <script>
        window.location.assign("/php/index.php");
    </script>
</body>
</html>