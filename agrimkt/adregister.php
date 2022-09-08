<?php
require_once('connection.php');


$email = "admin@gmail.com";

$pass = "123456";

$hpass = password_hash($pass, PASSWORD_DEFAULT);
$sql = "INSERT INTO admin(email,pass,cdate) VALUES('$email','$hpass',now())";
if ($conn->query($sql) === true) {
    $msg = "registered successfully please login";
    header("location:login.php?msg=$msg");
} else {
    $err = mysqli_error($conn);
    echo "Error :" . $err;
}
