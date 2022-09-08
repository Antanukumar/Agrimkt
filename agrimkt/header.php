<?php
session_start();

$_SESSION['login'] = false;
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $_SESSION['login'] = true;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Adshboard:AgriMkt</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">AgriMkt</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="addashboard.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addmandi.php">Add Mandi</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="addprod.php">Add product</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <?php
                if ($_SESSION['login']) {
                ?>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link " href="adlogin.php"><?= $email ?></a </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="logout.php">Logout</a>
                        </li>
                    </ul>
                <?php
                } else {
                ?>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link " href="adlogin.php">Signin</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="registration.php">Signup</a>
                        </li>
                    </ul>
                <?php
                }
                ?>

            </div>
        </nav>
    </div>