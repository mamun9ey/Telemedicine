<?php include "include/header.php"; ?>
<?php include "include/validate.php"; ?>

<?php
	
	$empty=0;
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sub"])) {
		$fname=test_input($_POST["fname"]);
		$lname=test_input($_POST["lname"]);
		$mobile=test_input($_POST["mobile"]);
		$age=test_input($_POST["age"]);
		$mail=$_POST["mail"];
		$date_of_birth=test_input($_POST["date_of_birth"]);
		$pass=test_input($_POST["pass"]);
		$con_pass=test_input($_POST["con_pass"]);
		if(empty($fname) || empty($lname) || empty($mobile) || empty($age) || empty($mail) || empty($date_of_birth) || empty($pass) || empty($con_pass) ){
			$empty=1;
		}

		if (mysqli_query($conn,"INSERT INTO user(fname, lname, mobile, age, email, pass, status) VALUES('asdf', 'asdf', 2345345, 23, 'asdf@gmail.com', 'asdf',1)")) {
		  echo "New record created successfully";
		}else{
			echo "Failed !!!";
		}
	}
	
?>

<!-- booking section starts   -->

<section class="book" id="book" style="padding-top:10rem">

    <h1 class="heading"> <span style="font-size:22px;">already have an account ? click </span> <a style="text-decoration:underline;color:#16a085" href="book.php">here</a> </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form action="" method="post">
            <h3>Registration </h3>
			<?php 
			if($empty==1){
			?>
			<p style="color:red;font-size:16px;" >Error !!! Empty will not be allowed.</p>
			<?php
			}
			?>
			
            <input type="text" placeholder="your first name" class="box" name="fname">
			
            <input type="text" placeholder="your last name" class="box" name="lname">
            <input type="number" placeholder="your mobile number" class="box" name="mobile">
            <input type="number" placeholder="age" class="box" name="age">
            <input type="email" placeholder="your email" class="box" name="mail">
            <span style="font-size: 20px;color:#16a085;padding: 10px;"> Date of Birth</span><input type="date" style="width:72%;" class="box"  name="date_of_birth">
			<input type="password" placeholder="Password" class="box" name="pass">
			<input type="password" placeholder="Confirm Password" class="box" name="con_pass">
            <input type="submit" value="Register Now" class="btn" name="sub">
        </form>

    </div>

</section>

<!-- booking section ends -->
<?php include "include/footer.php"; ?>