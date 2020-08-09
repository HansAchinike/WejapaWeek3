<!DOCTYPE html>
<html>
<body style="background-color: yellow">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">





<form action="welcome.php" method="POST" target="_blank">
<ol>
<div class="container">
	<div class="row">
		<div class="col">


<h1 style="text-align:center; ">WELCOME</h1>

<h4 style="text-align: center;">Sign Up Form</h4>

	<label for="Name">First Name</label>
	<input type="text" class="form-control"
	placeholder="Enter your First Name" name="Name" required="Name"> 


	<label for="LName">Last Name</label>
	<input type="text" class="form-control"
	placeholder="Enter your Last Name" name="LName"> 

	

	
	<label for="Date Of Birth">Date Of Birth</label>
	<input type="date" class="form-control"
	placeholder="Enter Mobile" id="Mobile" required="Date Of Birth"> 



	<label for="Email">Email</label>
	<input type="text" class="form-control" placeholder="Enter Email" name="Email" required="Email"> <br>
 
    <p><strong> Select Your Most Suitable Color</strong></p>
    <select single size="11">
    	<option value="red">Red</option>
    	<option value="yellow">Yellow</option>
    	<option value="Blue">Blue</option>
    	<option value="pink">Pink</option>
    	<option value="Green">Green</option>
    	<option value="purple">Purple</option>
    	<option value="orange">Orange</option>
    	<option value="gold">Gold</option>
    	<option value="brown">Brown</option>
    	<option value="violet">Violet</option>
    	<option value="magenta">Magenta</option>
    </select><br>


	<label for="Department">Department</label>
	<select id="Department" name="Department">
		<option value="   ">   </option>
		<option value="Internship">Internship</option>
		<option value="Head Of Department">Head Of Department</option>
		<option value="Staff">Staff</option>
	 </select>



	 <h5>Gender</h5>
	 <input type="radio" id="Male" name="Gender" value="Male">
	 <label for="Male">Male</label>

	 <input type="radio" id="Female" name="Gender" value="Female">
	 <label for="Female">Female</label>


		<br><label for="psw">Password</label>
		<input type="password" name="psw" class="form-control" placeholder="Input Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
		title="Must contain at least one number,uppercase and lowercase letters,symbols and at least 15 or more characters "required>

		<div id="message">
		<h5>Password Must Contain The Following:</h5>
		<p id="letter" class="invalid"><b>Lowercase</b> letters</p>
		<p id="capital" class="invalid"><b>Capital (uppercase)</b> letters</p>
		<p id="number" class="invalid"><b>Number(s)</b></p>
		<p id="length" class="invalid">Minimum of <b>15 characters</b></p>



	</div>
</div>
</div>


		<div class="row">
		<div class="col">
			<div class="container">

			<label class="form-check-label">
				<input class="form-check-input" type="checkbox">Remember Me
			</label>

		</div>
	</div>
</div>



		</ol>

		<div class="row">
		<div class="col">
			<div class="container">

		

			<button type="Submit" class="btn btn-primary">Submit </button> 

		</div>
	</div>
	</div>



		</form>
	</p>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">


</body>
</html>

