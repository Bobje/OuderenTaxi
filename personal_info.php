<?php 
include 'header.php';
?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-8"> 
				<p>
					Fill in your personal information
				</p>
				<form method="post" action="Taxi_uber.php">
					<label>Mevr. / Dhr.</label><br>
					<label>Name</label> <input type="text" name="name">
					<label>Adress</label> <input type="text" name="address">
					<input type="submit" value="Go To Step 2">
				</form>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php';?>
