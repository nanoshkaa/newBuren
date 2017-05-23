<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren members</title>
</head>
<body>
<?php $this->load->view('nav_bar'); ?>
	<div class="nav nav-stacked nav-pills d-inline-block side_bar">
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
					<input type="submit" class="btn btn-secondary btn-md" value="Filteren!">
			</form>
		</ul>
	</div>	 
	<div class="d-inline-block show_profiles">  
		<?php
		  if (isset($all_users)) {
			for ($i=0; $i < count($all_users); $i++)
			 { if ($all_users[$i] ['foto_profile']) {
				
		?>
			<img class="profile_pic img-circle img-responsive d-inline-block" src=".<?php echo $all_users[$i]['foto_profile']; }?>">
			<a class="d-inline-block" href="/Users/show_user_profile/<?= $all_users[$i]['user_id'] ?>"><?php echo $all_users[$i]['name']; ?></a><br>
			<p><?php echo $all_users[$i]['describtion']; ?></p>
			<p><?php if ($all_users[$i] ['host']) {
			 echo $all_users[$i] ['host'];} ?></p>
			 <p><?php if ($all_users[$i] ['guest']) {
			 echo $all_users[$i] ['guest'];} ?></p>
			<p>Aantaal van gezin: <?php echo $all_users[$i]['total_n']; ?></p>
			<p>Aantaal van gasten: <?php echo $all_users[$i]['n_guests']; ?></p>
			<p>Heeft locatie: <?php echo $all_users[$i]['location']; ?></p>
			
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
		<?php $this->load->view('footer'); ?>	
</body>
</html>