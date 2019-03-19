
<?php 
include 'header.php';

//now, let's register our session variables



?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm-8"> 
				<form method="post" action="setup_p2.php">
				  <div class="container">
					<h1>Register</h1>
					<p>For now you can start of by filling in your email adress and a pincode to secure your information.</p>
					<hr>
					<div class="option_line">
						<label for="email"><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" >
					</div>
					<div class="option_line">
						<label for="psw"><b>Pincode</b></label>
						<input type="password" placeholder="Enter Pincode" name="psw" >
					</div>
					<div class="option_line">
						<label for="psw-repeat"><b>Repeat Pincode</b></label>
						<input type="password" placeholder="Repeat Pincode" name="psw-repeat" >
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