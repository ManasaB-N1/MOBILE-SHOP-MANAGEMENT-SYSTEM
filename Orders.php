<?php include("header.php"); ?>


<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="admin_dashboard.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Orders</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->

<!-- contact -->

<!-- //footer -->
<div class="footer">
    <div class="container" style="margin-left: -1em;">
        <div class="col-md-6 w3_agileits_contact_grid_right">
            <h2 class="w3_agile_header">User<span> Orders</span></h2>

            <div class="table-responsive">
                <form action="view_products.php" method="post">
                    <table id="example" class="table table-responsive">
                        <thead style="text-align: center">
                            <tr style="background: white;">
                                <th>Sl No</th>
                                <th>shopkeeper Id</th>
                                <th>shopkeeper Name</th>
                                <th>Product Name</th>
                                <th>Price in Rs</th>
                                <th>Description</th>
                                <th>More info</th>
                            </tr>
                        </thead>
                        <tbody style="background: floralwhite;">
                            <?php
                            $count = 1;
                            include("../config.php");
                            if (isset($_POST['rem'])) {
                                $p_id = $_POST['rem'];
                                $result = mysqli_query($connection, "DELETE FROM `orders` WHERE pur_id='$p_id'");
                                // Print '<script>alert("Booked");</script>';
                            }

                            if (isset($_POST['pur'])) {
                                $p_id = $_POST['pur'];
                                $result = mysqli_query($connection, "update orders set status=2 WHERE pur_id='$p_id'");
                                // Print '<script>alert("Booked");</script>';
                            } 

                            $query = mysqli_query($connection, "SELECT p.*, o.* FROM `products`p,`orders` o  WHERE  o.product_id=p.p_id and o.status=2");
                            while ($row = mysqli_fetch_array($query)) {
                                print '<tr>';
                                print '<td>' . $count++ . '</td>';
                                print '<td>' . $row['sid'] . '</td>';
                                print '<td>' . $row['shopname'] . '</td>';
                                print '<td>' . $row['prod_name'] . '</td>';
                                print '<td>' . $row['item_price'] . '</td>';
                                print '<td>' . $row['item_desc'] . '</td>';
                                print '<td><a href="more_info.php?f_order=' . $row['f_order'] . '" type="button" class="btn btn-success" value="' . $row['f_order'] . '">View info</a></td>';
                                // print '<td><button type="submit" name="rem" class="btn btn-danger" onClick="return doconfirm();" value=' . $row['pur_id'] . '>Remove</button></td>';
                                print '</tr>';
                            }

                            ?>

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<?php include("footer.php"); ?>