<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren</title>
</head>
<body>
	<?php $this->load->view('nav_bar'); ?>
	<div class="chat">
		<h2 class="text-center">Multiculti dineren</h2>
		<p class="text-center">Begin met multiculti dineren door je hieronder aan te melden. Geef aan of je graag te gast wilt zijn of dat je als host een diner wilt organiseren.</p>
	</div>
	<div>
		<div id="content_login" class="container">
		<?php 
		date_default_timezone_set('Europe/Amsterdam');
		?>
		<h3>Log In</h3>
		<form action="/users/sign_in" method="POST">
		<label for="exampleInputEmail1">Email:</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required><br>
		<label for="exampleInputPassword1">Wachtwoord</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required><br>
		<input type="submit" name="submit" class="btn btn-warning btn-lg" value="Log in">	
		</form>
	</div>
	<div>
	<?php 
	if(isset($errors))
	{
		echo $errors;
	}?></div>
	<div>
        <?php $this->load->view('footer'); ?>
	</div>
</body>
</html>