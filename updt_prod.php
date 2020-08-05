<?php include("header.php"); ?>


<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="admin_dashboard.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Product Update</li>
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
            <h2 class="w3_agile_header">Add a<span> Product</span></h2>
            <?php
                        include('../config.php');
                        $g_id=$_GET['p_id'];

                        $result = mysqli_query($connection, "SELECT * FROM `products` where p_id='$g_id'");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
            <form action="updt_prod.php" method="post" enctype="multipart/form-data">
                <span class="input input--ichiro">
                    <label>
                        Category
                    </label>
                    <input class="form-control" type="hidden" id="input-26" name="id" value="<?php  echo $row['p_id']; ?>" readonly="" />
                    <input class="form-control" type="text" id="input-26" name="Category" value="<?php  echo $row['c_id']; ?>" readonly="" />

                </span>
                <span class="input input--ichiro">
                    <label>
                        Product Name
                    </label>
                    <input class="form-control" type="text" id="input-26" name="Name" value="<?php  echo $row['prod_name']; ?>" required="" />

                </span>
                <span class="input input--ichiro">
                    <label>
                        Price in Rs
                    </label>
                    <input class="form-control" type="text" id="input-26" name="price" value="<?php  echo $row['item_price']; ?>" required="" />

                </span>
                <span class="input input--ichiro">
                    <label>
                        Stocks
                    </label>
                    <input class="form-control" type="number" id="input-26" name="stocks" min="0" value="<?php  echo $row['total_stock']; ?>" required="" />

                </span>
                <span class="input input--ichiro">
                    <label>
                        Product Image
                    </label>
                    <input type="file" class="form-control" id="input-26" name="pdffile"  required="" />

                </span>
                <textarea  name="desc"  value="<?php  echo $row['item_desc']; ?>" required=""></textarea>
                <input type="submit" name="submit" value="Submit">
            </form>
            <?php } ?>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<?php
include('../config.php');
if (isset($_POST['submit'])) {
    // Print '<script>alert(" in post if");</script>';
    $Category = $_POST['Category'];
    $Name = $_POST['Name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $stocks= $_POST['stocks'];
    $reg_date = date('Y-m-d H:i:s');
    $new_name="";
    $id=$_POST['id'];
    // echo date_format($edate,"d/m/Y");
    //  $edate1 =date_format($edate,"d/m/Y");

    $errors = array();
    if (isset($_FILES['pdffile'])) {
        $file_name = $_FILES['pdffile']['name'];
        $file_size = $_FILES['pdffile']['size'];
        $file_tmp = $_FILES['pdffile']['tmp_name'];
        $file_type = $_FILES['pdffile']['type'];
        // $file_ext=strtolower(end(explode('.',$_FILES['pdffile']['name'])));
        $exploded = explode('.', $_FILES['pdffile']['name']);
        $file_ext = strtolower(end($exploded));
        $expensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        $new_name = "pro".time().".".$file_ext;

        if ($file_size > 504857600) {
            $errors[] = 'File size must be excately 10 MB';
        }
        if (empty($errors) == true) {

            move_uploaded_file($file_tmp, "../uploads/".$new_name);
            //   echo "Success";
        } else {
            print_r($errors);
        }
    }
    mysqli_query($connection, "update products set `prod_name`='$Name',item_price='$price',`item_image`='$new_name',`item_desc`='$desc',`total_stock`='$stocks' where p_id='$id'");
    print '<script>alert("Updated");</script>';
    print '<script>window.location.assign("view_products.php");</script>';
}
?>
<?php include("footer.php"); ?>