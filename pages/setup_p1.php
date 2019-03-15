
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
					<p>Please create an account</p>
					<hr>
					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="email" >

					<label for="psw"><b>Pincode</b></label>
					<input type="password" placeholder="Enter Pincode" name="psw" >

					<label for="psw-repeat"><b>Repeat Pincode</b></label>
					<input type="password" placeholder="Repeat Pincode" name="psw-repeat" >
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