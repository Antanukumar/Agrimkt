<?php
//session_start();
require_once('header.php');
require_once('connection.php');
?>
<?php
if (isset($_POST['loginemp'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM admin where email = '$email'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $rowp = mysqli_fetch_array($result);
        $epass = $rowp['pass'];
        if (password_verify($pass, $epass)) {
            $_SESSION['email'] = $email;
            $_SESSION['login'] = true;
            $msg = "Login Success!";
            header("location:addashboard.php?msg=$msg");
        } else {
            $msg = "Email/Password doesnot Exist";
            echo "<script>alert('Email/Password doesnot Exist')</script>";
            // header("location:emp_dashboard.php?msg=$msg");
        }
    } else {
        echo "<script>alert('Email/Password doesnot Exist')</script>";
    }
}

?>

<div class="container">
    <h1>Employee Login</h1>
    <div class="row">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo "<h4 style='color:green'>$msg</h4>";
        }


        ?>

        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card" style="width: 38rem;">

                <div class="card-body">
                    <h5 class="card-title">Employee Login
                        <form action="#" method="post">

                            <div class="form-group">
                                <label for="empemail">Email Id</label>
                                <input type="text" class="form-control" id="empemail" name="email" placeholder="Email Id">

                            </div>
                            <div class="form-group">
                                <label for="emppass">Password</label>
                                <input type="password" class="form-control" id="emppass" name="pass" placeholder="Password">
                            </div>
                            <button type="submit" name="loginemp" class="btn btn-primary">Login</button>
                        </form>
                </div>
            </div>
        </div>




        <?php
        require_once('footer.php');
        ?>