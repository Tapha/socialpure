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
<div id='logout'><a href='<?php echo $base_url.'logout';?>'><h4>Logout</h4></a></div>
<div id='success'>Your In!</div>
<p>
	<div>
	 <a href=""><b>new</b></a> | 
	 <a href=""><b>threads</b></a> |  
	 <a href=""><b>comments</b></a> |  	
	 <a href=""><b>propose</b></a> | 	
	 <a href=""></a> | 
	 <a href="<?php echo $base_url.'space/submit';?>"><b>submit</b></a> 
	</div>
	<div style="clear:both"></div>	
</p>
</div>
</body>
</html>