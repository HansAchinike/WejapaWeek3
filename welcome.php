<?php 
	session_start();
	if (isset($_SESSION['color']) AND isset($_SESSION['email']) AND isset($_SESSION['name']) ) {
		$color = $_SESSION['color'];
		$email = $_SESSION['email'];
		$name = $_SESSION['name'];
	}
	else{
		echo "<script>alert ('Please Login or Register!!')</script>";
		echo "<script>window.open('wejapa wk3.php','_self')</script>";
	}
?>
<!DOCTYPE html>
<html>
<body style="background-color: <?php echo $color;?>;">

	<h1>WELCOME</h1>
	<h2>These Are Your Details</h2>
	<h3><?php echo $name;?></h3>
    <br>
	<h3>Your Email Address is: <?php echo $email;?></h3>					
</body>
</html>