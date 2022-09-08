<?php

require_once('header.php');

require_once('connection.php');
if ($_SESSION['login']) {
?>

    <div class="container">
        <h3>Add New Price</h3>
        <div class="row">
            <?php
            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo "<p style='color:green'>$msg</p>";
            }


            ?>
            <?php
            if (isset($_POST['AddPrice'])) {
                $product = $_POST['product'];
                $mandi = $_POST['mandi'];
                $pprice = $_POST['pprice'];
                $pdate = $_POST['pdate'];
                $sql = "INSERT INTO price_table(product,mandi,price,pdate) VALUES('$product','$mandi',' $pprice','$pdate')";
                if ($conn->query($sql) === true) {
                    $msg = "price added successfully";
                    header("location:addashboard.php?msg=$msg");
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
                                <label for="empemail">Product</label>

                                <select class="form-control" id="prname" name="product">
                                    <?php
                                    $sql = "SELECT *  from  agriproduct";

                                    $result = $conn->query($sql);


                                    while ($rowp = mysqli_fetch_array($result)) {
                                        $pid = $rowp['prodid'];
                                        $pname = $rowp['prod_name'];
                                        echo "<option value=$pid>$pname</option>";
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="emppass">Mandi</label>
                                <select class="form-control" id="prname" name="mandi">
                                    <?php
                                    $sql = "SELECT *  from  mandi";

                                    $result = $conn->query($sql);


                                    while ($rowp = mysqli_fetch_array($result)) {
                                        $mid = $rowp['mcode'];
                                        $mname = $rowp['name'];
                                        echo "<option value=$mid>$mname</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pprice">Price</label>
                                <input type="text" class="form-control" id="pprice" name="pprice" placeholder="Price Id">

                            </div>

                            <div class="form-group">
                                <label for="pprice">Date</label>
                                <input type="date" class="form-control" id="pdate" name="pdate" placeholder="Date">

                            </div>

                            <button type="submit" name="AddPrice" class="btn btn-primary">Add Price</button>
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