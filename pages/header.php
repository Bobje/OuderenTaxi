<?php
    //let's start the session
	session_start();
	
	include("Config/dbConnection.php");
	//$base_url =  "taxi1.azurewebsites.net";
    $base_url = "localhost";

	$loggedin = true;
	
	function Redirect($url, $permanent = false) {
		if (headers_sent() === false) {
			header('Location: ' . $base_url.'/login');
		}
		exit();
	}
	if($loggedin == True){
		
	} else {
		echo "<script type='text/javascript'>alert('error');</script>";
		Redirect('http://www.google.com/', false);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--[if lt IE 9]-->
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<!--[endif]-->

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>
<!-- Own stylesheet -->
<link rel="stylesheet" href="http://<?php echo $base_url;?>/style.css">


<title>Taxi button for elderly</title>
</head>

<body>
<header>
	<nav class="navbar navbar-expand-sm sticky-top">
		<div class="container">	
			<a class="navbar-brand" href="/index.php">
				 <img class="taxi_logo" src="/images/taxi_logo.png" alt="Taxi button" > 
			</a>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/pages/options.php">
						<span class="glyphicon glyphicon-cog logo-big"></span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<span class="glyphicon glyphicon-question-sign logo-big"></span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>