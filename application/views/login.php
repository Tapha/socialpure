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
			
			$url = base_url();
	 
			echo form_open($url.'verification/login');
			$email = array(
				'name' => 'email',
				'class' => 'inputboxes',
				'id' => 'email'
			);

			$password = array(
				'name' => 'password',
				'class' => 'inputboxes',
				'id' => 'password'

			);
			echo "<label for='email'>Enter your Email Address:</label>";
			echo form_input($email);
			echo "<br><label for='first_name'>Enter your Password:</label>";
			echo form_password($password);
			echo '<br><br>';
			echo "<button type='submit' value='Sign In'>Sign In</button>";
			echo form_close();
		?>
</body>
</html>