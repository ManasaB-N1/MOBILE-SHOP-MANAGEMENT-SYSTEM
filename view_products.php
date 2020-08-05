<?php include("header.php"); 
?>


<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="user_dashboard.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Products</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->

<!-- contact -->

<!-- //footer -->
<div class="footer">
    <div class="container" style="margin-left:4em">
        <div class="col-md-6 w3_agileits_contact_grid_right">
          
        </div>
        <div class="clearfix"> </div>

        <?php
        // if (isset($_POST['submit'])) {

            // $GLOBALS['a'] = $_POST['Category'];
            // $Category = $GLOBALS['a'];
            // $_SESSION['Category']=$_POST['Category'];
            // $Category = $_SESSION['Category'];

            // Print '<script>alert(" '.$Category.'");</script>';
            include("../config.php");
            $query = mysqli_query($connection, "SELECT * FROM `products` where p_active=1");
            while ($row = mysqli_fetch_array($query)) {

                ?>
                <div class="agile_top_brands_grids" > 

                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <!-- <img src="../uploads/<?php echo $row['item_image'] ?>" alt=" " class="img-responsive"> -->
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " style="width: 60%;height: 25%;" src="../uploads/<?php echo $row['item_image'] ?>"></a>
                                                <p><?php echo $row['prod_name'] ?></p>
                                                <h4><?php echo $row['item_price'] ?> <span> </span></h4>
                                                <p style="color: black;">More Details:</p><p><?php echo $row['item_desc'] ?></p>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="#" method="post">
                                                   
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        ?>
    </div>

   
   

</div>

<?php include("footer.php"); ?>