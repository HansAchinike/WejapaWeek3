<?php 
	session_start();
	$none ="";
	$non ="";
	if (isset($_POST['submit'])) 
	{

		$password = $_POST['password'];
		$lname = $_POST['lname'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$color = $_POST['color'];
		$dept = $_POST['dept'];
		$checkbox = $_POST['checkbox'];
		$gender = $_POST['gender'];

		if (!empty($lname) AND !empty($password) AND !empty($name) AND !empty($dob) AND !empty($color) AND !empty($email) AND !empty($dept) AND !empty($checkbox) AND !empty($gender))
		{
			$_SESSION['color'] = $color;
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $name;
			echo "<script>alert ('login success!!')</script>";
			echo "<script>window.open('welcome.php','_self')</script>";	
		}
		else 
		{
			$none= "<div class='alert alert-danger alert-dismissible fade show'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>All fields are required.</strong>
					</div>"
			;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title></title>
</head>
<body style="background-color: yellow">
	<form action="task.php" method="POST" target="_blank">
		<ol>
		<div class="container">
			<div class="row">
				<div class="col">
					<?php echo $none?><?php echo $non ?>

					<h1 style="text-align:center; ">WELCOME</h1>

					<h4 style="text-align: center;">Sign Up Form</h4>

					<label for="Name">First Name</label>
					<input type="text" class="form-control"
					placeholder="Enter your First Name" name="name"> 

					<label for="LName">Last Name</label>
					<input type="text" class="form-control"
					placeholder="Enter your Last Name" name="lname"> 

					<label for="Date Of Birth">Date Of Birth</label>
					<input type="date" class="form-control"
					placeholder="Enter Mobile" id="Mobile" name="dob"> 

					<label for="Email">Email</label>
					<input type="text" class="form-control" placeholder="Enter Email" name="email"><br>
				 
				    <p><strong> Select Your Most Suitable Color</strong></p>
				    <select single size="11" name="color">
				    	<option value="red">Red</option>
				    	<option value="yellow">Yellow</option>
				    	<option value="blue">Blue</option>
				    	<option value="pink">Pink</option>
				    	<option value="green">Green</option>
				    	<option value="purple">Purple</option>
				    	<option value="orange">Orange</option>
				    	<option value="gold">Gold</option>
				    	<option value="brown">Brown</option>
				    	<option value="violet">Violet</option>
				    	<option value="magenta">Magenta</option>
				    </select><br>


					<label for="Department">Department</label>
					<select id="Department" name="dept">
						<option value="   ">   </option>
						<option value="Internship">Internship</option>
						<option value="Head Of Department">Head Of Department</option>
						<option value="Staff">Staff</option>
					</select>



					<h5>Gender</h5>
					<input type="radio" id="Male" name="gender" value="Male">
					<label for="Male">Male</label>

					<input type="radio" id="Female" name="gender" value="Female">
					<label for="Female">Female</label>

					<br>
					<label for="psw">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Input Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
					title="Must contain at least one number,uppercase and lowercase letters,symbols and at least 15 or more characters ">

					<div id="message">
						<h5>Password Must Contain The Following:</h5>
						<p id="letter" class="invalid"><b>Lowercase</b> letters</p>
						<p id="capital" class="invalid"><b>Capital (uppercase)</b> letters</p>
						<p id="number" class="invalid"><b>Number(s)</b></p>
						<p id="length" class="invalid">Minimum of <b>15 characters</b></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<label class="form-check-label">
							<input class="form-check-input" name="checkbox" type="checkbox">Remember Me
						</label>
					</div>
				</div>
			</div>
		</div>
		</ol>
		<div class="container">
			<div class="row">
				<div class="col">
					<button type="submit" name="submit" class="btn btn-primary">Submit </button> 
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>