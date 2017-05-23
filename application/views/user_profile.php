<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren members</title>
</head>
<body>
	<?php $this->load->view('nav_bar'); ?>
	<h3>Hallo <?= ($this->session->userdata('name'));
           ?></h3>
	<h4>Nieuwe Buren Lid :</h4>
	<div class="container col-md-8"col-md-8"">
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
	</div>
	<div class="container col-md-4 chat">
		<h1>Plan een diner met dit gezin!</h1>
		<a href="/users/start_chat"><button class="btn btn-warning">Dinner plannen</button></a>
		<p>je krijgt elkaars contact gegevens om zo zelf een diner in te plannen.</p>
	</div>
		<?php $this->load->view('footer'); ?>
</body>
</html>