<?php 
include ("header.php");
?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-8"> 
				<form action="/action_page.php">
				  <div class="container">
					<h1>Register - Page 2</h1>
					<p>Please fill in this form to create an account.</p>
					<hr>
					<label for="email"><b>First Name</b></label>
					<input type="text" placeholder="Enter Name" name="name" required>
					
					<label for="email"><b>Last Name</b></label>
					<input type="text" placeholder="Enter Email" name="email" required>

					<label for="psw"><b>Phonenumber</b></label>
					<input type="password" placeholder="Enter Pincode" name="psw" required>
					
					<label for="psw-repeat"><b>Address</b></label>
					<input type="text" placeholder="Repeat Pincode" name="psw-repeat" required>
					<hr>
					<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

					<button type="submit" class="registerbtn">Register</button>
				  </div>
				  
				  <div class="container signin">
					<p>Already have an account? <a href="login.php">Sign in</a>.</p>
				  </div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include("footer.php"); ?>
