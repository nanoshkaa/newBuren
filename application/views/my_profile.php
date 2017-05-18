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

		<div id="errors">

            <?php if ($this->session->flashdata('errors')) {
                    $errors = $this->session->flashdata('errors');
                        for($i=0; $i < count($errors); $i++) {
                            echo  $errors[$i]. "<br>";
                        }
                  }
                  if ($this->session->flashdata('validation_errors')) {
                      echo $this->session->flashdata('validation_errors');
                  } ?>
              </div>
		<label for="exampleInputFile">Voeg foto toe</label>
		<form action="/users/add_profile_img" method="post" enctype="multipart/form-data">
		<div class="form-group">
                <input type="file" name="image">
              </div>
              <button type="submit" class="btn btn-default">Voeg foto toe</button>
			</form>
			<?= ($this->session->userdata('user_id'));
					 ?>
    	<!-- <p class="help-block">Voeg een foto voor je of je gezin toe</p><br> -->
</body>
</html>