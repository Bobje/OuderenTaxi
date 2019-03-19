<?php include("header.php"); ?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-8"> 
				<div class="option_header">
					<h2>Options</h2>
					
				</div>
				<div>
					<div class="option_line">
						<label> Philips Hue Lamp </label>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="Hue_radio" checked>No
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="Hue_radio"checked>Yes
								<input type="text" class="option_text" placeholder="Enter key" name="name" value="Philips2019">
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
								<input type="radio" class="form-check-input" name="GoogleAgenda_radio" >No
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="GoogleAgenda_radio">Yes
								<input type="text" class="option_other" placeholder="Enter key" name="name" >
							</label>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>

<?php include("footer.php"); ?>
