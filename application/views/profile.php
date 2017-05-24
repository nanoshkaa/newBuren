<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren members</title>
</head>
<body>
<?php $this->load->view('nav_bar'); ?>
	<div class="nav nav-stacked nav-pills container col-xs-6 col-md-4 side_bar">
		<h3>Hallo <?= ($this->session->userdata('name')); ?></h3><br>
		<ul class="nav nav-stacked nav-pills">
			<form action="/users/filters" method="post">
				<li role="presentation"><label for="exampleInputTaal">Zoek als gast of als host?</label></li>
				<li role="presentation"><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" name="guest" value="gast">Gast</label></li>
				<li role="presentation"><label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" name="host" value="host" checked >Host</label></li>
					<li role="presentation"><label for="exampleInputFamilySum">Aantaal van gezin:</label></li>
 				<input type="text" name="total_n" class="form-control" id="exampleInputName1" placeholder="Total number of the family"></li>
 				<li role="presentation"><label for="exampleInputLocatie" id="exampleInputName1">Heeft locatie?</label></li>
				<li role="presentation"><label class="radio-inline" id="exampleInputName1">
					<input type="radio" name="location" id="inlineRadio2" value="yes" checked >Yes</label></li>
				<li role="presentation"><label class="radio_inline" id="exampleInputName1">
					<input type="radio" name="location" id="inlineRadio2" value="no">Nee</label>
					</li>
					<input type="submit" class="btn btn-warning btn-md" value="Filteren!">
			</form>
		</ul>
	</div>	 
	<div class="container col-xs-12 col-sm-6 col-md-8 show_profiles">  
		<?php
		  if (isset($all_users)) {
			for ($i=0; $i < count($all_users); $i++)
			 { if ($all_users[$i] ['foto_profile']) {
				
		?>
			<img class="profile_pic img-circle img-responsive d-inline-block" src=".<?php echo $all_users[$i]['foto_profile']; }?>">
			<a class="d-inline-block" href="/Users/show_user_profile/<?= $all_users[$i]['user_id'] ?>"><h4><?php echo $all_users[$i]['name']; ?></h4></a>
			<p><?php echo $all_users[$i]['describtion']; ?></p>
			<h4><?php if ($all_users[$i] ['host']) {
			 echo $all_users[$i] ['host'];} ?></h4>
			 <h4><?php if ($all_users[$i] ['guest']) {
			 echo $all_users[$i] ['guest'];} ?></h4>
			<h4>Aantaal van gezin: </h4><p><?php echo $all_users[$i]['total_n']; ?></p>
			<h4>Aantaal van gasten: </h4><p><?php echo $all_users[$i]['n_guests']; ?></p>
			<h4>Heeft locatie: </h4><p><?php echo $all_users[$i]['location']; ?></p>
			
		<?php }}
	      if (isset($filters)) {
 			for ($i=0; $i < count($filters); $i++) { 
		?>
			<img class="profile_pic img-circle img-responsive d-inline-block" src=".<?php echo $filters[$i] ['foto_profile']; ?>">
		    <a class="d-inline-block" href="/Users/show_user_profile/<?= $filters[$i]['user_id'] ?>"><?php echo $filters[$i]['name']; ?></a><br>
			<p><?php echo $filters[$i]['describtion']; ?></p>
			<p><?php if ($filters[$i] ['host']) {
			 echo $filters[$i] ['host'];} ?></p>
			 <p><?php if ($filters[$i] ['guest']) {
			 echo $filters[$i] ['guest'];} ?></p>
			<p>Aantaal van gezin: <?php echo $filters[$i]['total_n']; ?></p>
			<p>Aantaal van gasten: <?php echo $filters[$i]['n_guests']; ?></p>
			<p>Heeft locatie: <?php echo $filters[$i]['location']; ?></p>
		<?php }}?>
	</div>	
		<div>
        <?php $this->load->view('footer'); ?>
	</div>	
</body>
</html>