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
            <h2 class="w3_agile_header">Customer<span> Feedback</span></h2>

            <div class="table-responsive">
                <form action="view_shopkeeper.php" method="post">
                    <table id="example" class="table table-responsive">
                        <thead style="text-align: center">
                            <tr style="background: white;">
                                <th>SI No</th>
                                <th>Customer first Name</th>
                                <th>Customer Last Name</th>
                                <th>Feedback</th>
                                <th>Shopkeeper</th>
                            </tr>
                        </thead>
                        <tbody style="background: floralwhite;">
                            <?php
                            $count = 1;
                            include("../config.php");
                            
                            $query = mysqli_query($connection, "SELECT * FROM `feedback` ");
                            while ($row = mysqli_fetch_array($query)) {
                                print '<tr>';
                                print '<td>' . $count++ . '</td>';
                                print '<td>' . $row['fname'] . '</td>';
                                print '<td>' . $row['lname'] . '</td>';
                                print '<td>' . $row['cust_feedback'] . '</td>';
                                print '<td>' . $row['s_name'] . '</td>';
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