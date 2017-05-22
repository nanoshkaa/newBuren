<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren members</title>
</head>
<body>
<?php $this->load->view('nav_bar'); ?>

	
	<h4>Schrijf jouw gezin ook in! Klik hier om eenvoudig aan te melden.</h4>
<?php
	if (isset($all_users)) {


			for ($i=0; $i < count($all_users); $i++) { 
				echo $all_users[$i] ['host']."<br>";
				 ?>
				<a href="/Users/show_user_profile/<?= $all_users[$i]['user_id'] ?>"><?php echo $all_users[$i]['name']; ?></a><br>
				<?php echo $all_users[$i]['describtion']; ?></a><br>
				<?php echo $all_users[$i]['n_guests']; ?></a><br>
				<?php echo $all_users[$i]['location']; ?></a><br>
				<img class="profile_pic img-circle img-responsive" src=".<?php echo $all_users[$i] ['foto_profile']; ?>">



			<?php }	}
		if (isset($filters)) {
	
	
			for ($i=0; $i < count($filters); $i++) { 
				echo $filters[$i] ['host']."<br>";
				 ?>
				<a href="/Users/show_user_profile/<?= $filters[$i]['user_id'] ?>"><?php echo $filters[$i]['name']; ?></a><br>
				<?php echo $filters[$i]['describtion']; ?></a><br>
				<?php echo $filters[$i]['total_n']; ?></a><br>
				<?php echo $filters[$i]['location']; ?></a><br>
				<img class="profile_pic img-circle img-responsive" src=".<?php echo $filters[$i] ['foto_profile']; ?>">



			<?php }}?>


			<div class="sss">
				<form action="/users/filters" method="post">
					<label class="checkbox-inline">
  					<input type="checkbox" id="inlineCheckbox1" name="guest" value="guest">Gast</label>
					<label class="checkbox-inline">
  					<input type="checkbox" id="inlineCheckbox2" name="host" value="host" checked >Host</label><br>
  					<label for="exampleInputFamilySum">Aantaallen van je gezin:</label><br>
	 				<input type="text" name="total_n" class="form-control" id="exampleInputName1" placeholder="Total number of the family"><br>
	 				<label for="exampleInputLocatie" id="exampleInputName1">Heeft locatie?</label><br>
    				<label class="radio-inline" id="exampleInputName1">
  					<input type="radio" name="location" id="inlineRadio2" value="yes" checked >Yes</label>
					<label class="radio_inline" id="exampleInputName1">
  					<input type="radio" name="location" id="inlineRadio2" value="no">Nee</label>
  					<br>
  					<input type="submit" class="btn btn-secondary btn-md" value="Filteren!">
				</form>
			</div> 
</body>
</html>