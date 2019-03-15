<?php 
include 'header.php';
?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-8"> 
				<form  method="post" action="register.php">
				<div class="container">
					<h1>Register - Page 3</h1>
					<p>Please fill in this form to create an account.</p>
					  
					<button type="button" class="btn btn-info btn-lg option_button" data-toggle="modal" data-target="#UberModal">
						Uber
					</button>
					
					<!-- Modal Uber -->
					<div id="UberModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						  <div class="modal-body">
							<p>Some text in the modal.</p>
							<label for="email"><b>Passnumber</b></label>
							<input type="text" placeholder="Enter Name" name="name" >
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<button type="button" class="btn btn-info btn-lg option_button" data-toggle="modal" data-target="#RegioModal">
						Regio taxi
					</button>
					
					<!-- Modal Regio Taxi -->
					<div id="RegioModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						  <div class="modal-body">
							<p>Some text in the modal.</p>
							<label for="email"><b>Passnumber</b></label>
							<input type="text" placeholder="Enter Name" name="name" >
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<button type="button" class="btn btn-info btn-lg option_button" data-toggle="modal" data-target="#RegularModal">
						Regular Taxi
					</button>
					
					<!-- Modal Uber -->
					<div id="RegularModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						  <div class="modal-body">
							<p>Some text in the modal.</p>
							<label for="email"><b>Passnumber</b></label>
							<input type="text" placeholder="Enter Name" name="name" >
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<hr>
					
					<div class="option_line">
						<label> Philips Hue Lamp </label>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="Hue_radio" checked>No
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="Hue_radio">Yes
								<input type="text" placeholder="Enter key" name="name" disabled>
							</label>
						</div>
					</div>
					
					<div class="option_line">
						<label>Alexa Home</label>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="Alexa_radio" checked>No
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="Alexa_radio">Yes
								<input type="text" placeholder="Enter key" name="name" disabled>
							</label>
						</div>
					</div>
					
					<div class="option_line">
						<label>Google Agenda</label>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="GoogleAgenda_radio" checked>No
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="GoogleAgenda_radio">Yes
								<input type="text" class="option_other" placeholder="Enter key" name="name" disabled>
							</label>
						</div>
					</div>
					
					<button type="submit" class="registerbtn">Register</button>
				</div>
				
				</form>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php';?>
