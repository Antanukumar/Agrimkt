<?php
require_once('header.php');
require_once('connection.php');
?>

<div class="container">
    <h1 class="text-center">Employee List</h1>
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo "<h4 style='color:green'>$msg</h4>";
    }


    ?>
    <div class="row">
        <?php
        $sql = "SELECT *  from  employee";

        $result = $conn->query($sql);
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // echo "<br><br>";
        if (mysqli_num_rows($result) > 0) {
            while ($rowp = mysqli_fetch_array($result)) {
                // echo "<pre>";
                // print_r($rowp);
                // echo "</pre>";
                $eid = $rowp['id'];
                $empname = $rowp['empname'];
                $email = $rowp['emailid'];
                $mobile = $rowp['mobile'];
                $addr = $rowp['address'];
                $sal = $rowp['salary'];
                $doj = $rowp['doj'];
                $img = $rowp['emp_image'];
                $dept = $rowp['department'];
        ?>

                <div class="col-sm-4 mt-3" style="border:1px solid gray">
                    <a href="empdetail.php?eid=<?= $eid ?>">
                        <h3 class="text-center"><img src="./image/<?= $img ?>" width="55px" height="70px">
                            <?= $empname ?></h3>
                    </a>
                    <hr>
                    <h5>Email Id :<?= $email ?></h5>
                    <h5>Mobile No :<?= $mobile ?></h5>
                    <h5>Address :<?= $addr ?></h5>
                    <h5>Salary :<?= $sal ?></h5>
                    <h5>DOJ :<?= $doj ?></h5>
                    <h5>Department:<?= $dept ?></h5>

                </div>




        <?php

            }
        }

        ?>
    </div>
</div>





<?php
require_once('footer.php');


?>