<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to SocialPure</title>
	<link rel="icon" type="image/png" href="<?php echo $base_url."images/favicon.ico";?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url.'css/style.css';?>" />
</head>
<body>
<div id='logo'><a href='<?php echo $base_url;?>'><h1>SocialPure</h1></a></div>
<?php

	$this->load->helper('form'); 
	
	$attributes = array('id' => 'signup_form');
	
	echo form_open('signup/company', $attributes);
	
	$company_data = array(
	'name' => 'company',
	'id' => 'company'
	);
	
	$first_data = array(
	'name' => 'first_name',
	'id' => 'first_name'
	);
	
	$last_data = array(
	'name' => 'last_name',
	'id' => 'last_name'
	);
	
	$email_data = array(
	'name' => 'email',
	'id' => 'email'
	);
	
	$password_data = array(
	'name' => 'password',
	'id' => 'password',
	'type' => 'password'
	);
	
	echo "Company: </br>".form_input($company_data);
	
	echo "<br>";

	echo "First Name: </br>".form_input($first_data);
	
	echo "<br>";

	echo "Last Name: </br>".form_input($last_data);
	
	echo "<br>";

	echo "Email: </br>".form_input($email_data);
	
	echo "<br>";

	echo "Password: </br>".form_input($password_data);
	
	echo "<br><br>";
	
	echo form_submit('signup','Sign Up');
?>		
</body>
</html>