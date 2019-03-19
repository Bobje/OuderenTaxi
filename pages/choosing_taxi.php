<?php 
include 'header.php';

//now, let's register our session variables

$_SESSION['start_location'] = $_POST['start_location'];
$_SESSION['destination'] = $_POST['destination'];

?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm-8"> 
				<form method="post" action="taxi_overview.php">
					
					<div class="button_row">
						<input type="radio" name="taxi" id="start_location_home" value="Uber" checked> 
						<label for="start_location_home">Uber</label>
						
						<input type="radio" name="taxi" id="start_location_home" value="Regio Taxi" checked> 
						<label for="start_location_home">Regio Taxi</label>
						
						<input type="radio" name="taxi" id="start_location_home" value="Cheap Taxi Amsterdam" checked> 
						<label for="start_location_home">Cheap Taxi Amsterdam</label>
						
						<input type="radio" name="taxi" id="start_location_home" value="Taxi Direct Amsterdam" checked> 
						<label for="start_location_home">Taxi Direct Amsterdam</label>
					</div>
					<div class="button_row">
						<input type="submit" class="registerbtn" value="Overview">
					</div>
				</form>
			</div>
	
		</div>
	</div>
</section>


<?php include 'footer.php';?>