<?php 
include 'pages/header.php';

?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm-8"> 
				<form method="post" action="pages/address.php">
					<div class="button_row">
						<label class="form_label">Pick up time</label> 
						
						<input type="radio" name="start_location" id="start_location_home" value="Now" checked> 
						<label for="start_location_home">Now</label>
						
						<input type="radio" name="start_location" id="start_location_other" value="">
						<label for="start_location_other">Other</label> 
						Date: <input type="text" id="datepicker">
						<div class="md-form">
						  <input placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">
						  <label for="input_starttime">Pickup time</label>
						</div>

					</div>
					
					<div class="button_row">
						<input type="submit" value="Go To Step 2">
					</div>
				</form>
			</div>
	
		</div>
	</div>
</section>

<?php include 'pages/footer.php';?>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  
 
    // initialize input widgets first
    $('#datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });

    $('#datepairExample .date').datepicker({
        'format': 'yyyy-m-d',
        'autoclose': true
    });

    // initialize datepair
    $('#datepairExample').datepair();
	
	// Time Picker Initialization
	$('#input_starttime').pickatime({});
		
  </script>