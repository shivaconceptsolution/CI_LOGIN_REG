<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo site_url(); ?>/login/index" method="post">
<input type="text" name="txtemail" placeholder="Enter email" />
<?php
echo form_error('txtemail');
?>
<br>
<input type="password" name="txtpass" placeholder="Enter password" />
<?php
echo form_error('txtpass');
?>
<br>

<input type="submit" name="btnsubmit" value="Login" />

</form>	
<a href="<?php echo site_url(); ?>/login">Login here</a>
<center><?php //echo validation_errors(); ?></center>
</body> 
</html>