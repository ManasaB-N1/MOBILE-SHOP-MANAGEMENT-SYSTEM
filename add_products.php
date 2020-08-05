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
            <h2 class="w3_agile_header">Add a<span> Product</span></h2>

            <form action="add_products.php" method="post" enctype="multipart/form-data">
                <span class="input input--ichiro">
                    <label>
                        Category
                    </label>
                    <select class="form-control" name="Category">
                        <option value="0">----Select Category---</option>
                        <?php
                        include('../config.php');
                        $query = mysqli_query($connection, "SELECT * from categories");
                        $exists = mysqli_num_rows($query);
                        if ($exists > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                $cat_id = $row['cat_id'];
                                $type_name = $row['category_name'];
                                print '<option value="' . $cat_id . '">' . $type_name . '</option>';
                            }
                        }
                        ?>
                    </select>

                </span>
                <span class="input input--ichiro">
                    <label>
                        Product Name
                    </label>
                    <input class="form-control" type="text" id="input-26" name="Name" placeholder=" " required="" />

                </span>
                <span class="input input--ichiro">
                    <label>
                        Price (in Rs)
                    </label>
                    <input class="form-control" type="number" id="input-26" name="price" placeholder=" " required="" />

                </span>
                <span class="input input--ichiro">
                    <label>
                        Number of stock
                    </label>
                    <input class="form-control" type="number" id="input-26" min="0" name="stocks" placeholder=" " required="" />

                </span>
                <span class="input input--ichiro">
                    <label>
                        Product Image
                    </label>
                    <input type="file" class="form-control" id="input-26" name="pdffile" placeholder=" " required="" />
                </span>
                <textarea placeholder="Your description for the product.." name="desc" required=""></textarea>
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
    $Category = $_POST['Category'];
    $Name = $_POST['Name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $stocks= $_POST['stocks'];
    $reg_date = date('Y-m-d H:i:s');
    $new_name = "";

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
        $new_name = "pro" . time() . "." . $file_ext;

        if ($file_size > 504857600) {
            $errors[] = 'File size must be excately 10 MB';
        }
        if (empty($errors) == true) {

            move_uploaded_file($file_tmp, "../uploads/" . $new_name);
            //   echo "Success";
        } else {
            print_r($errors);
        }
    }
    mysqli_query($connection, "insert into products(`prod_name`,item_price,`item_image`,`item_desc`,`c_id`,`cre_date`,total_stock) 
	values ('$Name','$price','$new_name','$desc','$Category','$reg_date','$stocks')");
    print '<script>alert("Product added");</script>';
    print '<script>window.location.assign("add_products.php");</script>';
}
?>
<?php include("footer.php"); ?>