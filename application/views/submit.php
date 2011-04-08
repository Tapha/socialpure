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
	
	$attributes = array('id' => 'submit_form');
	
	echo form_open('space/submitted_idea', $attributes);
	
	$title_data = array(
	'name' => 'title',
	'id' => 'title'
	);
	
	$url_data = array(
	'name' => 'url',
	'id' => 'url'
	);
	
	$text_data = array(
	'name' => 'text',
	'id' => 'text',
	'rows' => '10',
	'cols' => '100'
	);
	
	echo "Title: </br>".form_input($title_data);
	
	echo "<br>";

	echo "Url: </br>".form_input($url_data);
	
	echo "<br>Or,<br>";

	echo "Text: </br>".form_textarea($text_data);
	
	echo "<br><br>";
	
	echo form_submit('submitted','Submit');
?>
</body>
</html>