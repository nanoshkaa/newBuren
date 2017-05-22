<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren</title>
</head>
<body>
	<?php $this->load->view('nav_bar'); ?>
	<div>
		<div id="content_login" class="col-md-6">
		<?php 
		date_default_timezone_set('Europe/Amsterdam');
		?>
		<h3>Log In</h3>
		<form action="/users/sign_in" method="POST">
		<label for="exampleInputEmail1">Email:</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required><br>
		<label for="exampleInputPassword1">Wachtwoord</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required><br>
		<input type="submit" name="submit" class="btn btn-secondary btn-md value="Log in">	
		</form>
	</div>
	<?php 
	if(isset($errors))
	{
		echo $errors;
	}?>
	<?php $this->load->view('footer'); ?>
</body>
</html>