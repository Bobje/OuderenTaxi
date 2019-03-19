<?php 
include 'header.php';

//now, let's register our session variables
if ($_POST['Depart_time'] =="Now"){
	$_SESSION['Depart_time'] = $_POST['Depart_time'];
}else{
	$_SESSION['input_starttime'] = $_POST['input_starttime'];
	$_SESSION['input_date'] = $_POST['input_date'];
}
?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm-8"> 
				<form method="post" action="choosing_taxi.php">
					<div class="option_line">
						<label class="form_label">Starting point</label> 
						
						<input type="radio" name="start_location" id="start_location_home" value="Home" checked> 
						<label for="start_location_home">Home</label>
						
						<input type="radio" name="start_location" id="start_location_other" value="">
						<label for="start_location_other">Other</label> 
						<input type="text" name="other_reason" />
						 
							<span class="glyphicon glyphicon-book"></span>
						

					</div>
					<div class="option_line">
						<label class="form_label">Destination</label> 
						<input type="text" class="input_text" name="destination">
						<span class="glyphicon glyphicon-book"></span>
						
					</div>
					<div class="option_line">
						<button type="submit" class="registerbtn">Next step</button>
					</div>
					
				</form>
			</div>
	
		</div>
	</div>
</section>


<?php include 'footer.php';?>
