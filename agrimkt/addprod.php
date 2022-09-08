<?php

require_once('header.php');
require_once('connection.php');
require_once('impfuns.php');
if ($_SESSION['login']) {
?>

    <div class="container">
        <h3>Add New Product</h3>
        <div class="row">
            <?php
            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo "<p style='color:green'>$msg</p>";
            }


            ?>
            <?php
            if (isset($_POST['AddProduct'])) {
                $prod_name = $_POST['prod_name'];
                $prodid = generateRandomNumber(5);
                $sql = "INSERT INTO agriproduct(prodid,prod_name,cdate) VALUES('$prodid','$prod_name',now())";
                if ($conn->query($sql) === true) {
                    $msg = "Product added successfully";
                    header("location:addprod.php?msg=$msg");
                } else {
                    $err = mysqli_error($conn);
                    echo "Error :" . $err;
                }
            }

            ?>


            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card" style="width: 38rem;">

                    <div class="card-body">

                        <form action="#" method="post">

                            <div class="form-group">
                                <label for="empemail">Product Name</label>
                                <input type="text" class="form-control" id="pprice" name="prod_name" placeholder="Product Name">
                            </div>

                            <button type="submit" name="AddProduct" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>




        <?php
    } else {
        $msg = "Please Login As Admin";
        header("location:adlogin.php?msg=$msg");
    }
    require_once('footer.php');
        ?>