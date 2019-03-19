<?php 
include 'header.php';
include '../api.php';
//now, let's register our session variables
if ($_SESSION['start_location'] == "Home"){
	$_SESSION['ID'] = '03';
	
	$_SESSION['start_location'] = "Roeterseiland, Amsterdam";
}
 
$_SESSION['taxi'] = $_POST['taxi'];

?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm-8"> 
				<form method="post" action="order.php">
					<h2>Your Taxi order</h2>
					<div class="option_line">
						<label><b>When:</b> <?php if($_SESSION['Depart_time']=="Now"){echo "Now";}else{ echo $_SESSION['input_date '] ." - ". $_SESSION['input_starttime ']; } ?></label>
					</div>
					<div class="option_line">
						<label><b>From:</b> <?php echo $_SESSION['start_location']; ?></label>
					</div>
					<div class="option_line">
						<label><b>To: </b><?php echo $_SESSION['destination']; ?></label>
					</div>
					<div class="option_line">
						<label><b>Taxi:</b> <?php echo $_SESSION['taxi']; ?></label>
					</div>
					
					<div class="option_line">
						<button type="submit" class="registerbtn">Order Taxi</button>
					</div>
				</form>


			</div>
	
		</div>
	</div>
</section>


<?php include 'footer.php';?>
