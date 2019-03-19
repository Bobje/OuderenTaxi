<?php 
include 'header.php';
?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-8"> 
				<form  method="post" action="register_account.php">
				<div class="container">
					<h1>Register - Page 3</h1>
					<p>In this page you can select the taxi services you would like to setup by selectig the purple boxes. When selecting Regio Taxi or Uber you will be redirected to their website. After completing the login or register process. You will automatically return to this screen.</p>
					  
					<button type="button" id="btn_uber" class="btn btn-info btn-lg option_button" data-toggle="modal" data-target="#UberModal">
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
							<p>Uber</p>
							<label for="email"><b>Account Number</b></label>
							<input type="text" id="uber_txt" placeholder="Enter Name" name="name" >
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
							<p>Regio Taxi</p>
							<label for="email"><b>Passnumber</b></label>
							<input type="text" placeholder="Enter Name" name="name" >
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<button type="button" id="regular_taxi" class="btn btn-info btn-lg option_button" data-toggle="modal" data-target="#RegularModal">
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
							<p>Regualr Taxi</p>
							<label for="email"><b>Creditcard number</b></label>
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
								<input type="text" placeholder="Enter key" name="name" >
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
								<input type="text" placeholder="Enter key" name="name" >
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
								<input type="text" class="option_other" placeholder="Enter key" name="name" >
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

<script>
function f_color(){
	if (document.getElementById('uber_txt').value) {
		document.getElementById("btn_uber").style.background='#32CD32';
	}
}
document.getElementById('uber_txt').onchange= f_color;
</script>


<?php include 'footer.php';?>
