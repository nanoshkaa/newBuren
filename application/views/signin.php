<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren</title>
</head>
<body>
	<header>
	<li><a href="/users/index">Main</a></li>
	<h2 class="text-center">Multiculti dineren</h2>
	<p class="text-center">Begin met multiculti dineren door je hieronder aan te melden. Geef aan of je graag te gast wilt zijn of dat je als host een diner wilt organiseren.</p>
	</header>
<div class="col-md-6 form-group" id="content_login">
		<?php 
		date_default_timezone_set('Europe/Amsterdam');
		?>
	 	<h3>Register</h3>
	 	<form action="/users/sign_up" method="post" >
	 	<label for="exampleInputName1">Naam:</label>
	 	<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="* Name" value="<?= set_value('name'); ?>" > <span><?= form_error('name')?></span> <br>
	 	<label for="exampleInputEmail1">Email</label>
	 	<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="* Email" required value="<?= set_value('email'); ?>" > <span><?= form_error('email')?></span> <br>
	 	<label for="exampleInputPassword1">Wachtwoord</label>
	 	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="* Wachtwoord" required value="<?= set_value('password'); ?>" > <span><?= form_error('password')?></span> <br>
	 	<label for="exampleInputPassword1">Herhaal wachtwoord:</label>
	 	<input type="password" name="conf_password" class="form-control" id="exampleInputPassword1" placeholder="* Herhaal wachtwoord:" required value="<?= set_value('conf_password'); ?>" > <span><?= form_error('conf_password')?></span> <br>
	 	<label for="exampleInputName1">Leeftijd:</label>
	 	<input type="text" name="age" class="form-control" id="exampleInputName1" placeholder="Leeftijd"><br>
	 	<label for="exampleInputName1">Addres:</label>
	 	<input type="text" name="street" class="form-control" id="exampleInputName1" placeholder="Straat,huis nummer"><br>
	 	<label for="exampleInputName1">Postcode:</label>
	 	<input type="text" name="postcode" class="form-control" id="exampleInputName1" placeholder="Postcode (bijv.1234 AB)"><br>
	 	<label for="exampleInputName1">Woonplaats:</label>
	 	<input type="text" name="city" class="form-control" id="exampleInputName1" placeholder="Woonplaats"><br>
	 	<label for="exampleInputName1">Telefoonnummer:</label>
	 	<input type="text" name="telephon_number" class="form-control" id="exampleInputName1" placeholder="Telefoonnummer"><br>
	 	<label for="exampleInputGeslacht">Geslacht</label><br>
	 	<label class="radio-inline">
  		<input type="radio" name="gender_user" id="inlineRadio1" value="man" checked>Maan</label>
		<label class="radio-inline">
  		<input type="radio" name="gender_user" id="inlineRadio2" value="woman">Vrouw</label>
		<label class="radio-inline">
  		<input type="radio" name="gender_user" id="inlineRadio3" value="none">Ik zou liever niet zeggen</label><br>
  		<label for="exampleInputNederlander">Bent u?</label><br>
	 	<label class="radio-inline">
  		<input type="radio" name="nederlander" id="inlineRadio1" value="new_nederlander" checked >Nieuwe Nederlander</label>
		<label class="radio-inline">
  		<input type="radio" name="nederlander" id="inlineRadio2" value="old_nederlander">Oude Nederlander</label><br>
    	<label for="exampleInputTaal">Wilt u deelnemen als gast of als host?</label><br>
    	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" name="gast" value="gast">Gast</label>
		<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox2" name="host" value="host" checked >Host</label><br>
  		<label for="exampleInputGasten">Hoeveel gasten kunt u (maximaal) ontvangen?</label><br>
  		<select class="form-control" name="guests">
  		<option>0</option>
  		<option>1</option>
  		<option>2</option>
  		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
  		<option>9</option>
		</select><br>
  		<label for="exampleInputFamily">Wat is de samenstelling van uw gezin?</label><br>
  		<label for="exampleInputFamilySum">Aantaallen van je gezin:</label><br>
	 	<input type="text" name="family_sum" class="form-control" id="exampleInputName1" placeholder="Total number of the family"><br>
<!--   		<label for="exampleInputFamily_age">Leeftijd:</label>
	 	<input type="text" name="family_age" class="form-control" id="exampleInputName1" placeholder="Leeftijd"><br>
	 	<label for="exampleInputGeslacht">Geslacht</label><br>
	 	<label class="radio-inline">
  		<input type="radio" name="gender_family" id="inlineRadio1" value="man" checked >Maan</label>
		<label class="radio-inline">
  		<input type="radio" name="gender_family" id="inlineRadio2" value="woman">Vrouw</label>
		<label class="radio-inline">
  		<input type="radio" name="gender_family" id="inlineRadio3" value="none">Ik zou liever niet zeggen</label><br> -->
		<label for="exampleInputFamily">Wat is de taalbeheersing van uw gezin?</label><br>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox1" name="nederlands" value="nederlands">Nederlands</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox2" name="english" value="english">Engels</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox3" name="arabic" value="arabic">Arabisch</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox4" name="french" value="french">Franc</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox5" name="spanish" value="spanish">Spaans</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox6" name="tijrijna" value="tijrijna">Tijrijna</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox7" name="faresi" value="faresi">Persch</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox8" name="turquish" value="turquish">Turquisch</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox9" name="polsk" value="polsk">Polsk</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox10" name="russian" value="russian">Russian</label>
  		<label class="checkbox-inline" name="languages">
  		<input type="checkbox" id="inlineCheckbox11" name="other" value="other">Other</label><br>
		
  		<label for="exampleInputDescribtion">Vertel wat over uw gezin:</label><br>
  		<textarea class="form-control" rows="3" placeholder="Vertel wat over uw gezin" name="textarea" ></textarea><br>
  		<label for="exampleInputProfile">Profil:</label><br>
    	<label class="radio_inline">
  		<input type="radio" name="profile_type"  value="buplic" checked >Buplic</label>
		<label class="radio_inline">
  		<input type="radio" name="profile_type"  value="private">Private</label><br>
		<label for="exampleInputLocatie" id="exampleInputName1">Heeft locatie?</label><br>
    	<label class="radio-inline" id="exampleInputName1">
  		<input type="radio" name="location" id="inlineRadio2" value="yes" checked >Yes</label>
		<label class="radio_inline" id="exampleInputName1">
  		<input type="radio" name="location" id="inlineRadio2" value="no">Nee</label><br>
		<input type="checkbox" id="inlineCheckbox1" value="option1" checked>Ik ga akkoord met de <a href="#">algemene voorwaarden.</a></label><br>
    	<input type="submit" class="btn btn-secondary btn-md" value="Meld je nu aan!">
	 	</form>
 	</div>
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
		<input  type="submit" name="submit" class="btn btn-secondary btn-md" value="Log in">	
		</form>
	</div>
	<?php if(isset($errors))
	{
		echo $errors;
	}?>
	<?php include 'footer.php' ?>
</body>
</html>