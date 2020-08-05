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
			<h2>Add Shopkeeper</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="add_shopkeeper.php" method="post">
					<input type="text" placeholder="First Name..." name="First" required=" ">
					<input type="text" placeholder="Last Name..." name="Last" required=" ">
                    <input type="text" placeholder="Phone Number..." pattern="^[0-9]{10}" title="Must contain 10 Numbers" name="pho" required=" ">
                    <input type="text" placeholder="Address..." name="add" required=" " style="margin-top:10px">
					<!-- <div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
						</div>
					</div> -->
					<h6>Login information</h6>

					<input type="email" placeholder="Email Address" name="email" required=" ">
					<input type="password" placeholder="Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required=" ">
					<input type="password" placeholder="Password Confirmation" required=" ">
					<div class="register-check-box">
						<div class="check">
							<!-- <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label> -->
						</div>
					</div>
					<input type="submit" name="submit" value="Add">
				</form>
			</div>
			<!-- <div class="register-home">
				<a href="index.html">Home</a>
			</div> -->
		</div>
	</div>
    <?php

include("../config.php");

if (isset($_POST['submit'])) {
    $First = $_POST['First'];
    $Last = $_POST['Last'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $pho = $_POST['pho'];
    $Password = $_POST['Password'];
    date_default_timezone_set('Asia/Kolkata');
    $reg_date = date('Y-m-d H:i:s');
    $bool = true;

    $query = mysqli_query($connection, "select * from shopkeeper");
    while ($row = mysqli_fetch_array($query)) {
        $table_reg = $row['s_mail'];

        if ($email == $table_reg) {
            $bool = false;
            print '<script>alert("' . $row['s_mail'] . ' has already in our database .. Please try another email");</script> ';
            print '<script>window.location.assign("add_shopkeeper.php");</script>';
        }
    }

    if ($bool) {
        mysqli_query($connection, "insert into shopkeeper(`f_name`,`l_name`,`s_mail`,`s_pass`,`s_pho`,`s_address`) 
                      values ('$First','$Last','$email','$Password','$pho','$add')");

        print '<script>alert("Successfully Registered!...");</script>';
        print '<script>window.location.assign("add_shopkeeper.php");</script>';
    }
}
?>
<?php include("footer.php"); ?>