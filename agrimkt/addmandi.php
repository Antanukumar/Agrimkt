<?php

require_once('header.php');
require_once('connection.php');
require_once('impfuns.php');
if ($_SESSION['login']) {
?>

    <div class="container">
        <h3>Add New Mandi</h3>
        <div class="row">
            <?php
            if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo "<p style='color:green'>$msg</p>";
            }


            ?>
            <?php
            if (isset($_POST['AddMandi'])) {
                $district = $_POST['district'];
                $mcode = generateRandomNumber(5);
                $name = $_POST['mname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $contact_person = $_POST['contact_person'];
                $sql = "INSERT INTO mandi(mcode,district,name,contact_person,phone,address,cdate) VALUES('$mcode','$district',' $name','$contact_person','$phone','$address',now())";
                if ($conn->query($sql) === true) {
                    $msg = "Mandi added successfully";
                    header("location:addmandi.php?msg=$msg");
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
                                <label for="empemail">Mandi Name</label>
                                <input type="text" class="form-control" id="pprice" name="mname" placeholder="Mandi Name">
                            </div>
                            <div class="form-group">
                                <label for="empemail">District Name</label>
                                <input type="text" class="form-control" id="pprice" name="district" placeholder="district">
                            </div>
                            <div class="form-group">
                                <label for="empemail">Contact Person</label>
                                <input type="text" class="form-control" id="pprice" name="contact_person" placeholder="contact_person">
                            </div>


                            <div class="form-group">
                                <label for="pprice">Mandi Phone</label>
                                <input type="text" class="form-control" id="pdate" name="phone" placeholder="Mandi Phone no">

                            </div>
                            <div class="form-group">
                                <label for="pprice">Mandi Address</label>
                                <input type="text" class="form-control" id="pdate" name="address" placeholder="Mandi Phone no">

                            </div>
                            <button type="submit" name="AddMandi" class="btn btn-primary">Add Mandi</button>
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