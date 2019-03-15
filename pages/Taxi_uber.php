<?php 


//let's start the session
session_start();


include 'header.php';
//now, let's register our session variables

$_SESSION['name'] = $_POST['name'];
$_SESSION['email_address'] = $_POST['email_address'];

?>

<section>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-8"> 
			
			</div>
		</div>
	</div>
</section>

<?php include("footer.php"); ?>