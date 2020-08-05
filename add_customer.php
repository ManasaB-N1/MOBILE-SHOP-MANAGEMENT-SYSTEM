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
<div class="register">
    <div class="container">
        <h2>Add Customer</h2>
        <div class="login-form-grids">
            <h5>Customer information to Purchase</h5>
            <form action="add_customer.php" method="post">
                <input type="text" placeholder="First Name..." name="First" required=" ">
                <input type="text" placeholder="Last Name..." name="Last" required=" ">
                <input type="text" placeholder="Phone Number..." pattern="^[0-9]{10}" title="Must contain 10 Numbers" name="pho" required=" ">
                <input type="text" placeholder="Address..." name="add" required=" " style="margin-top:10px">
                <input type="email" placeholder="Email Address" name="email" style="margin-top:10px" required=" ">
                <!-- <div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
						</div>
					</div> -->



        </div>
        <!-- <div class="register-home">
				<a href="index.html">Home</a>
			</div> -->
    </div>
</div>
<h2 class="w3_agile_header"><span> </span></h2>

<div class="table-responsive">

    <table id="example" class="table table-responsive" style="margin-top: 2em;">
        <thead style="text-align: center">
            <tr style="background: wheat;">
                <th>Sl No</th>
                <th>Category Name</th>
                <th>Product Name</th>
                <th>Price in Rs(Inc All Tax)</th>
                <th>Stocks</th>
                <th>Description</th>
                <th>Image</th>
                <th>Select to Purchase</th>
            </tr>
        </thead>
        <tbody style="background: floralwhite;">

            <?php
            // $id = $_POST['Category'];
            include("../config.php");
            $count = 1;
            $check = array();
            $query = mysqli_query($connection, "SELECT * FROM `products` where total_stock>=1 and p_active=1");
            while ($row = mysqli_fetch_array($query)) {
                print '<tr>';
                print '<td>' . $count++ . '</td>';
                print '<td>' . $row['prod_name'] . '</td>';
                print '<td>' . $row['c_id'] . '</td>';
                print '<td>' . $row['item_price'] . '</td>';
                print '<td>' . $row['total_stock'] . '</td>';
                print '<td>' . $row['item_desc'] . '</td>';
                print '<td><img src="../uploads/' . $row['item_image'] . '" style="width: 210px;height: 140px;"></td>';
                print '<td><input type="checkbox" name="checkboxvar[]" value="' . $row['p_id'] . '"></td>';
                print '</tr>';
            }

            //  }
            // if (isset($_POST["check"])) {

            //     array_push($check, $_POST["check"]);
            // }
            // // foreach ($check as $value) {
            // echo '<input type="hidden" name="result" value="'  . print_r($check) .  '">';

            // if (isset($_POST['checkboxvar'])) {
            //     print_r($_POST['checkboxvar']);
            // }

            ?>

        </tbody>
    </table>
    <input type="submit" name="submit" style="margin-left: 40em;    width: 15em;
    height: 4em;" class="btn btn-success" value="Purchase">
    </form>
</div>
<?php

include("../config.php");

if (isset($_POST['submit'])) {
    $First = $_POST['First'];
    $Last = $_POST['Last'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $pho = $_POST['pho'];

    $check1 = $_POST['checkboxvar'];
    // $check1 = implode(", ", $_POST['checkboxvar']);
//     var_dump($check1);
//    echo  count($check1);

    date_default_timezone_set('Asia/Kolkata');
    $reg_date = date('Y-m-d H:i:s');
    $bool = true;

    $f_name=$_SESSION['f_name'];
    $sid=$_SESSION['sid'];

    // for ($i = 0; $i < count($check1); $i++) {
    //     print '<script>alert("' . $check1 . '");</script>';
    // }

   

    // $length = count($check1);

    for ($i = 0; $i < count($check1); $i++) {

        // $c=$check1[$i];
        // print '<script>alert("' .$check1[$i]. '");</script>';

        $data = mysqli_query($connection, "SELECT `f_order` FROM`orders`");
        while($row = mysqli_fetch_array($data)) {
            $ord=$row['f_order'];
           
        }
        $new_or=$ord+1;
        // echo $new_or;
        mysqli_query($connection, "insert into orders(`product_id`,`sid`,`shopname`,`cname_f`,`cname_l`,`cemail`,`cpho`,`caddress`,`f_order`,`o_date`,`status`) 
        values ('$check1[$i]','$sid','$f_name','$First','$Last','$email','$pho','$add','$new_or','$reg_date','2')");
        
        // $result = mysqli_query($connection, "update orders set status=2,f_order='$new_or' WHERE status=1 and user_id='$uid'");
        $new_result = mysqli_query($connection, " SELECT p.*, o.* FROM `orders`o,`products`p WHERE o.product_id = p.p_id AND f_order='$new_or'");
        while ($row1 = mysqli_fetch_array($new_result)) {
            $count=0;
            $count=$row1['total_stock']-1;
            $pid=$row1['product_id'];
            $result = mysqli_query($connection, "update products set total_stock='$count' WHERE p_id='$pid'");
        }
        // print $check1[$i];
       
    }

    print '<script>alert("Order placed!...");</script>';
    print '<script>window.location.assign("add_customer.php");</script>';

}
?>
<?php include("footer.php"); ?>