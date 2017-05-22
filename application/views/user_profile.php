<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren members</title>
</head>
<body>
	<li><a href="/users/index">Main</a></li>
	<h4>Schrijf jouw gezin ook in! Klik hier om eenvoudig aan te melden.</h4>
	<?php if (isset($user)) {
			for ($i=0; $i < count($user); $i++) { 
				echo $user[$i] ['host']."<br>";
				 ?>
				<?php echo $user[$i]['name']; ?><br>
				<?php echo $user[$i]['describtion']; ?><br>
				<?php echo $user[$i]['total_n']; ?><br>
				<?php echo $user[$i]['location']; ?><br>
				<?php echo $user[$i]['city']; ?><br>
				 <?php if (isset($user[$i]['english'])) echo $user[$i]['english']; ?>
        <?php if (isset($user[$i]['nederlands'])) echo $user[$i]['nederlands'];?>
        <?php if (isset($user[$i]['turquish'])) echo $user[$i]['turquish']; ?>
        <?php if (isset($user[$i]['polsk'])) echo $user[$i]['polsk']; ?>
        <?php if (isset($user[$i]['arabic'])) echo $user[$i]['arabic']; ?>
        <?php if (isset($user[$i]['russian'])) echo $user[$i]['russian']; ?>
        <?php if (isset($user[$i]['tijrijna'])) echo $user[$i]['tijrijna']; ?>
        <?php if (isset($user[$i]['faresi'])) echo $user[$i]['faresi']; ?>        <?php if (isset($user[$i]['spanish'])) echo $user[$i]['spanish']; ?>
        <?php if (isset($user[$i]['french'])) echo $user[$i]['french']; ?>
        <?php if (isset($user[$i]['other'])) echo $user[$i]['other']; ?>
				<img class="profile_pic img-circle img-responsive" src="/.<?php echo $user[$i] ['foto_profile']; ?>">
			<?php }	} ?>
		<?php $this->load->view('footer'); ?>
</body>
</html>