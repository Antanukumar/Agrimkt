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
    $name = $rowp['name'];
    $contact_person = $rowp['contact_person'];
    $phone = $rowp['phone'];
    $address = $rowp['address'];
}


?>
<div class="center-content" style="background:url()">
    <div class="mandi">
        <h2>District Name :<?= $dist ?> </h2>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" style="padding-right: 0px; padding-left: 0px;" class="table table-hover">
                        <thead>

                            <tr>
                                <td><b>Mandi Name</b></td>
                                <td><?= $name ?></td>
                            </tr>
                            <tr>
                                <td><b>Contact Person</b></td>
                                <td><?= $contact_person ?></td>
                            </tr>
                            <tr>
                                <td><b>Phone Number</b></td>
                                <td><?= $phone ?></td>
                            </tr>
                            <tr>
                                <td><b>Address</b></td>
                                <td><?= $address ?></td>
                            </tr>
                            </tr>

                        </thead>

                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
require_once('footer1.php');
?>