<?php include("header.php"); ?>


<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="admin_dashboard.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Home</li>
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
            <h2 class="w3_agile_header">Customer<span> Feedback</span></h2>

            <form action="feedback.php" method="post" enctype="multipart/form-data">
                <span class="input input--ichiro">
                    <label>
                        Customer
                    </label>
                    <select class="form-control" name="cus">
                        <option value="0">----Select Customer---</option>
                        <?php
                        include('../config.php');
                        $query = mysqli_query($connection, "SELECT distinct cname_f,cname_l from orders");
                        $exists = mysqli_num_rows($query);
                        if ($exists > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                $pur_id = $row['pur_id'];
                                $name = $row['cname_f'];
                                $namel = $row['cname_l'];
                                print '<option value="' . $name . ',' . $namel . '">' . $name . ' ' . $namel . '</option>';
                            }
                        }
                        ?>
                    </select>

                </span>
                
                <textarea placeholder="Your description for the product.." name="feed" required=""></textarea>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<?php
include('../config.php');
if (isset($_POST['submit'])) {
    // Print '<script>alert(" in post if");</script>';
    $cus = $_POST['cus'];
    $feed = $_POST['feed'];

    $dept_id = explode(",", $cus);

    $dpid = $dept_id[0];
    $dpname = $dept_id[1];

    $f_name=$_SESSION['f_name'];
    $sid=$_SESSION['sid'];

    // echo date_format($edate,"d/m/Y");
    //  $edate1 =date_format($edate,"d/m/Y");

   
    mysqli_query($connection, "insert into feedback(`fname`,lname,`cust_feedback`,`shop_id`,`s_name`) 
	values ('$dpid','$dpname','$feed','$sid','$f_name')");
    print '<script>alert("Feedback Submitted");</script>';
    print '<script>window.location.assign("feedback.php");</script>';
}
?>
<?php include("footer.php"); ?>