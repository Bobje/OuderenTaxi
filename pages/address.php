<?php 
include 'header.php';

//now, let's register our session variables
if ($_POST['start_location'] =="Now"){
	$_SESSION['input_starttime'] = date("h:i:sa");
	$_SESSION['datepicker'] = date("Y/m/d");
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
					<div class="button_row">
						<label class="form_label">Starting point</label> 
						
						<input type="radio" name="start_location" id="start_location_home" value="Home" checked> 
						<label for="start_location_home">Home</label>
						
						<input type="radio" name="start_location" id="start_location_other" value="">
						<label for="start_location_other">Other</label> 
						<input type="text" name="other_reason" />
						<button onclick=""> 
							<span class="glyphicon glyphicon-book"></span>
						</button>

					</div>
					<div class="button_row">
						<label class="form_label">Destination</label> 
						<input type="text" name="destination" required>
						
							<span class="glyphicon glyphicon-book"></span>
						
					</div>
					<div class="button_row">
						<input type="submit" value="Go To Step 2">
					</div>
					
				</form>
			</div>
	
		</div>
	</div>
</section>


<?php include 'footer.php';?>
