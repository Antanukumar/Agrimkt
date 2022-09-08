<style>

</style>
<?php
require_once('header1.php');
require_once('connection.php');
require_once('impfuns.php');


?>
<div class="center-content">
    <div class="mandi">
        <h2>Get Contact And Address of Mandi..</h2>
        <?php
        $sql = "SELECT *  from  mandi";

        $result = $conn->query($sql);
        $ct = 0;

        while ($rowp = mysqli_fetch_array($result)) {
            $mid = $rowp['mcode'];
            $mname = $rowp['name'];
            $dist = $rowp['district'];
            $ct++;
            echo "<a href='getmandi.php?md=$mid' >$dist</a>";
            if ($ct > 3) {
                echo "<br>";
                $ct = 0;
            }
        }
        ?>
    </div>
</div>
<?php
require_once('footer1.php');
?>