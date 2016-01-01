<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form page</title>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<style type="text/css">
		* {
			margin: 0px; 
			padding: 0px; 
			font-family: tahoma; 
		}
		body {
			background-color: silver; 
		}
		#container {
			width: 500px;
			margin: 25px auto; 
			border: 2px solid black; 
			padding: 20px; 
			background-color: rgb(250,250,250)
		}
		p, .inputs {
			display: inline-block;
			width: 240px; 
			height: 25px; 
			margin: 5px 0px; 
		}
			.name {
				padding: 0px 5px; 
				width: 230px; 
			}
		textarea {
			padding: 5px; 
			margin: 5px auto;
			overflow: auto; 
			width: 475px; 
			height: 60px; 
		}
		.submit {
			padding: 5px 10px;
			color: white;
			margin-left: 420px;
			background-color: blue; 
		}
	</style>
</head>
<body>
	<div id="container">
		<!-- Display form validation errors if they exist -->
		<?php if($this->session->userdata('error'))
				{
					echo $this->session->userdata('error');
				} 
		?>
		<form action="/process_form" method='post'>
			<label for='name'>
				<p>Your Name:</p>
				<input type='text' name='name' id='name' class='inputs name'>
			</label>
			<br>
			<label for='location'>
				<p>Dojo Location:</p>
				<select name='location' id='location' class='inputs'>
					<option>Seattle</option>
					<option>Silicon Valley</option>
					<option>New York City</option>
					<option>Los Angeles</option>
					<option>Dallas</option>
					<option>Philippines</option>
			   	</select>
			</label>
			<br>
			<label for='language'>
				<p>Favorite Language:</p>
				<select name='language' id='language' class='inputs'>
					<option>JavaScript</option>
					<option>Java</option>
					<option>C#</option>
					<option>PHP</option>
					<option>Python</option>
					<option>C++</option>
					<option>C</option>
					<option>SQL</option>
					<option>Ruby</option>
					<option>Objective-C</option>
					<option>HTML</option>
			   	</select>
			</label>
			<br>
			<label for='comment'>
				Comment (optional):
				<br>
				<textarea id='comment' name='comment'></textarea>
			</label>
			<br>
			<input type='submit' value='Submit' class='submit'>		
		</form>
	</div> <!-- End Container -->
</body> 
</head>