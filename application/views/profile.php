<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren members</title>
</head>
<body>
	<li><a href="/users/index">Main</a></li>
	<h4>Schrijf jouw gezin ook in! Klik hier om eenvoudig aan te melden.</h4>
<?php
	// var_dump($all_users);
	// die();
			for ($i=0; $i < count($all_users); $i++) { 
				echo $all_users[$i] ['host']."<br>";
				 ?>
				<a href="/Users/show_user_profile/<?= $all_users[$i]['users_id'] ?>"><?php echo $all_users[$i] ['name']; ?></a><br>

			<?php }?>  
</body>
</html>