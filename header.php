<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "telemedicine";
	
	$conn = mysqli_connect($servername, $username, $password);


	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUET E-health </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-heartbeat"></i> DUET E-health. </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="#services">services</a>
        <a href="#about">about us</a>
        <a href="#doctors">doctors</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

