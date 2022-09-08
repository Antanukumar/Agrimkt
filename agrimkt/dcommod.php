<style>
    .mandi {
        margin-top: 20px;
        margin-left: 30px;
    }

    .mandi a {
        display: inline-block;
        margin-top: 50px;
        margin-right: 70px;
        font-size: 24px;
        padding: 9px;
        border: 2px solid green;
        border-radius: 20px;

    }
</style>
<?php
require_once('header1.php');
require_once('connection.php');
require_once('impfuns.php');
if (isset($_GET['md'])) {
    $mid = $_GET['md'];
    $sql = "SELECT *  from  mandi where mcode='$mid'";
    $result = $conn->query($sql);
    $rowp = mysqli_fetch_array($result);
    $dist = $rowp['district'];
}


?>
<div class="center-content" style="background:url()">
    <div class="mandi">
        <h2>Today's Commodity Price for :<?= $dist ?> </h2>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" style="padding-right: 0px; padding-left: 0px;" class="table table-hover">
                        <thead>

                            <tr>
                                <td><b>SrNo</b></td>
                                <td><b>Date</b></td>
                                <td><b>Product</b></td>
                                <td><b>Price(Per Quintal)</b></td>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT *  from  price_table where mandi='$mid' ";

                            $result = $conn->query($sql);
                            $ct = 0;

                            while ($rowp = mysqli_fetch_array($result)) {
                                $product = $rowp['product'];
                                $sqll = "SELECT *  from  agriproduct where prodid='$product'";
                                $resultt = $conn->query($sqll);
                                $rowpp = mysqli_fetch_array($resultt);
                                $pname = $rowpp['prod_name'];
                                $price = $rowp['price'];
                                $pdate = $rowp['pdate'];
                                $time_input = strtotime($pdate);
                                $ppdate = getDate($time_input);
                                $mdate = date('d/m/Y ', $time_input);



                                $ct++;


                            ?>
                                <tr>
                                    <td><?= $ct ?></td>
                                    <td><?= $mdate ?></td>
                                    <td><?= $pname ?></td>
                                    <td><?= $price ?></td>

                                </tr>
                            <?php }
                            ?>
                        </tbody>
                        <tfoot>

                            <tr>
                                <td><b>SrNo</b></td>
                                <td><b>Date</b></td>
                                <td><b>Product</b></td>
                                <td><b>price</b></td>
                            </tr>


                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <?php

        ?>
    </div>
</div>
<?php
require_once('footer1.php');
?>