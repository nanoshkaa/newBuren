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
	<div class="container col-xs-12 col-sm-6 col-md-8">
	<?php 
      for ($i=0; $i < count($user); $i++) { ?>
       <?php if (isset($user[$i]['foto_profile'])) { ?> <img class="profile_user_pic img-responsive" src="/.<?php echo $user[$i] ['foto_profile']; ?>"><?php } ?>
        <h4><?php echo $user[$i]['name']; ?></h4>
        <?php echo $user[$i]['describtion']; ?>
        <h4>Aantaal van gezin: </h4><p><?php echo $user[$i]['total_n']; ?></p>
        <h4>Heeft locatie: </h4><p><?php echo $user[$i]['location']; ?></p>
        <h4>Staat: </h4><p><?php echo $user[$i]['city']; ?></p>
        <h4><?php if ($user[$i] ['host']) {
			 echo $user[$i] ['host'];} ?></h4>
			 <h4><?php if ($user[$i] ['guest']) {
			 echo $user[$i] ['guest'];} ?></h4>
        <h4>Talen: </h4>
        <?php if (isset($user[$i]['english'])) echo $user[$i]['english'].","; ?>
        <?php if (isset($user[$i]['nederlands'])) echo $user[$i]['nederlands'].",";?>
        <?php if (isset($user[$i]['turquish'])) echo $user[$i]['turquish'].","; ?>
        <?php if (isset($user[$i]['polsk'])) echo $user[$i]['polsk'].","; ?>
        <?php if (isset($user[$i]['arabic'])) echo $user[$i]['arabic'].","; ?>
        <?php if (isset($user[$i]['russian'])) echo $user[$i]['russian'].","; ?>
        <?php if (isset($user[$i]['tijrijna'])) echo $user[$i]['tijrijna'].","; ?>
        <?php if (isset($user[$i]['faresi'])) echo $user[$i]['faresi'].","; ?>        
        <?php if (isset($user[$i]['spanish'])) echo $user[$i]['spanish'].","; ?>
        <?php if (isset($user[$i]['french'])) echo $user[$i]['french'].","; ?>
        <?php if (isset($user[$i]['other'])) echo $user[$i]['other']."."; ?> 
      <?php } ?>
	</div>
	<div class="container col-xs-6 col-md-4">
		<h1>Plan een diner met dit gezin!</h1>
		<a href="/users/start_chat/<?=$user[0]['user_id']?>"><button class="btn btn-warning">Dinner plannen</button></a>
		<p>je krijgt elkaars contact gegevens om zo zelf een diner in te plannen.</p>
	</div>
		<?php $this->load->view('footer'); ?>
</body>
</html>