<!DOCTYPE html>
<html lang="en">
<head>
	<title>Result Page</title>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<style type="text/css">
		* {
			margin: 0px; 
			padding: 0px; 
			font-family: tahoma;
			font-size: 1.10em;  
		}
		body {
			background-color: silver; 
		}
		#header, #body {
			width: 700px; 
			padding: 20px; 
			margin: 20px auto; 
			border: 2px solid black; 
		}
		#header {
			background-color: rgb(161,212,144); 
		}
		#body {
			background-color: rgb(250,250,250); 
		}
			h2 {
				text-decoration: underline;
			}
			#body p {
				display: inline-block;
				width: 300px; 
			}
			.submit {
				padding: 0px 7px; 
				margin-top: 20px;
				background-color: blue; 
				color: white; 
				margin-left: 550px;  
			}
	</style>
</head>
<body>
	<div id="header">
		Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?> times now.
	</div>
	<div id="body">
		<h2>Submitted Information</h2>
		<p>Name: </p>
			<?php echo $this->load->session->userdata('name'); ?><br>
		<p>Dojo Location: </p> 
			<?php echo $this->load->session->userdata('location'); ?><br>
		<p>Favorite Language: </p> 
			<?php echo $this->load->session->userdata('language'); ?><br>
		<p>Comment: </p> 
			<?php echo $this->load->session->userdata('comment'); ?><br>
		<form action='/'>
			<input type='submit' value='Go Back' class='submit'>
		</form>
	</div> <!-- End Container -->
</body> 
</head>