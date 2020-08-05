<?php include("header.php"); ?>


<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="admin_dashboard.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Category</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->

<!-- contact -->

<!-- //footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-6 w3_agileits_contact_grid_right">
            <h2 class="w3_agile_header">Purchase <span> Details</span></h2>
            <form action="more_info.php" method="post">
                <?php
                include('../config.php');
                $f_order = $_GET['f_order'];
                $amount = 0;
                $result = mysqli_query($connection, "SELECT p.*, o.* FROM `products`p,`orders` o  WHERE  o.product_id=p.p_id and o.status=3 and o.f_order='$f_order'");
                while ($row = mysqli_fetch_array($result)) {

                    $amount = $row['item_price'];
                    ?>


                    <div class="agileits_w3layouts_map_pos1">
                    <p>Customer Name:<?php echo $row['cname_f']; ?></p>
                    <p>Customer Email:<?php echo $row['cemail']; ?></p>
                    <p>Customer Phone:<?php echo $row['cpho']; ?></p>
                        <h3>Product:<?php echo $row['prod_name']; ?></h3>
                        <p>Rs:<?php echo $row['item_price']; ?></p>


                    </div>
                <?php } ?>
                <div class="agileits_w3layouts_map_pos1">
                    <h3>Total amount(Including All taxes) in Rs: <?php echo $amount; ?></h3>
                    <p></p>
                    <!-- <input type="hidden" name="oid" value='<?php echo $f_order; ?>'>
                    <button type="submit" name="submit" class="btn btn-danger" onClick="return doconfirm();" value='<?php echo $amount; ?>'>Generate Bill</button> -->

                </div>
            </form>
            <div class="about">
                <div class="w3_agileits_contact_grids">
                    <div class="col-md-6 w3_agileits_contact_grid_left">
                        <!-- <div class="agile_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3905851087434!2d-34.90500565012194!3d-8.061582082752993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d90992e4ab%3A0x8e83c4afabe39a3a!2sSport+Club+Do+Recife!5e0!3m2!1sen!2sin!4v1478684415917" style="border:0"></iframe>
				</div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>



<?php
include('../config.php');
if (isset($_POST['submit'])) {
    $amount = $_POST['submit'];
    $oid = $_POST['oid'];
    // echo date_format($edate,"d/m/Y");
    //  $edate1 =date_format($edate,"d/m/Y");
    // $edate=date("d/m/Y");
    $flag = true;



    if ($flag) {
        mysqli_query($connection, "update orders set total='$amount',status=3 where f_order='$oid'");
        print '<script>alert("Added");</script>';
        print '<script>window.location.assign("Orders.php");</script>';
    }
}
?>
<?php include("footer.php"); ?>