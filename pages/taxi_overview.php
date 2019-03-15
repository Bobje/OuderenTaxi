<?php 
include 'header.php';
include '../api.php';
//now, let's register our session variables
if ($_SESSION['start_location'] == "Home"){
	$_SESSION['ID'] = '03';
	$homeAddress = GetHomeAddress($_SESSION['ID']);
	$_SESSION['start_location'] = $homeAddress;
}
 
$_SESSION['taxi'] = $_POST['taxi'];

?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm-8"> 
				<?php
		
					echo "<h3> PHP List All Session Variables</h3>";
					foreach ($_SESSION as $key=>$val)
					echo $key." : ".$val."<br/>";
				?>


			</div>
	
		</div>
	</div>
</section>


<?php include 'footer.php';?>
