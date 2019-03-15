<?php include ("pages/header.php"); ?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm-8"> 
				<form method="post" action="pages/address.php">
					
					<div class="col-sm-6 left button_row">
					
						<input type="radio" name="start_location" id="start_location_home" value="Now" checked> 
						<label for="start_location_home">Now</label>
					</div>

					<div class="col-sm-6 right">
						<div class="button_row">
							<input type="radio" name="start_location" id="start_location_other" value="">							 
							<label for="start_location_other">Plan a Taxi</label> 
						</div>
						<div class="button_row">
							<label class="form_label">Date</label> 						
							<input type="text" id="datepicker" name="input_date">
							
						
							<label for="input_starttime">Pickup time</label>
							<input type="time" id="input_starttime" name="input_starttime">
								
							
						</div>

					</div>

					<div class="button_row">
						<button type="submit" class="registerbtn">Next step</button>
					</div>
				</form>

			</div>
	
		</div>
	</div>
</section>

<?php include ("pages/footer.php");?>
