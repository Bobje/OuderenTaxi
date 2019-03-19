<?php 
include 'header.php';
?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-8"> 
				<form  method="post" action="setup_p3.php">
				  <div class="container">
					<h1>Register - Page 2</h1>
					<p>To personalize your exprience and book taxis we would like to know your first and last name, as well as your adress.</p>
					<hr>
					<div class="option_line">
						<label for="email"><b>First Name</b></label>
						<input type="text" placeholder="Enter Name" name="first_name" >
					</div>
					<div class="option_line">
						<label for="email"><b>Last Name</b></label>
						<input type="text" placeholder="Enter Last name" name="last_name" >
					</div>
					<div class="option_line">
						<label for="psw"><b>Phonenumber</b></label>
						<input type="text" placeholder="Enter Phonenumber" name="phonenumber" >
					</div>
					<div class="option_line">
						<label for="psw-repeat"><b>Address</b></label>
						<input type="text" placeholder="Enter address" name="address" >
					</div>
					<hr>
					<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

					<button type="submit" class="registerbtn">Next step</button>
				  </div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php';?>
