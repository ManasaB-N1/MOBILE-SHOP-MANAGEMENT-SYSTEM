<?php include("header.php"); ?>


<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="admin_dashboard.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Users</li>
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
            <h2 class="w3_agile_header">Our<span> Shopkeeper</span></h2>

            <div class="table-responsive">
                <form action="view_shopkeeper.php" method="post">
                    <table id="example" class="table table-responsive">
                        <thead style="text-align: center">
                            <tr style="background: white;">
                                <th>Sl No</th>
                                <th>Shopkeeper First Name</th>
                                <th>Shopkeeper Last Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody style="background: floralwhite;">
                            <?php
                            $count = 1;
                            include("../config.php");
                            if (isset($_POST['delete'])) {
                                $sid = $_POST['delete'];
                                $result = mysqli_query($connection, "update shopkeeper set s_active=0 WHERE sid='$sid'");
                                // Print '<script>alert("Booked");</script>';
                            }
                            $query = mysqli_query($connection, "SELECT * FROM `shopkeeper` where s_active=1");
                            while ($row = mysqli_fetch_array($query)) {
                                print '<tr>';
                                print '<td>' . $count++ . '</td>';
                                print '<td>' . $row['f_name'] . '</td>';
                                print '<td>' . $row['l_name'] . '</td>';
                                print '<td>' . $row['s_mail'] . '</td>';
                                print '<td>' . $row['s_pho'] . '</td>';
                                print '<td>' . $row['s_address'] . '</td>';
                                print '<td><button type="submit" name="delete" class="btn btn-danger" onClick="return doconfirm();" value=' . $row['sid'] . '>Delete</button></td>';
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