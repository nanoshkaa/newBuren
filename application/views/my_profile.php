<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('master'); ?>
	
	<title>Nieuve Buren</title>
</head>
<body>
  <header>
  <?php $this->load->view('nav_bar'); ?>
  <h3>Hallo <?= ($this->session->userdata('name'));
           ?></h3>
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
              
      <div class="form-group">
      <?php 
      if (isset($user)) {
      for ($i=0; $i < count($user); $i++) { 
        echo $user[$i]['host']."<br>";?>
        <?php echo $user[$i]['name']; ?><br>
        <?php echo $user[$i]['describtion']; ?><br>
        <?php echo $user[$i]['total_n']; ?><br>
        <?php echo $user[$i]['location']; ?><br>
        <?php echo $user[$i]['city']; ?><br>
        <?php if (isset($user[$i]['english'])) echo $user[$i]['english']; ?><br>
        <?php if (isset($user[$i]['nederlands'])) echo $user[$i]['nederlands'];?>
        <?php if (isset($user[$i]['turquish'])) echo $user[$i]['turquish']; ?>
        <?php if (isset($user[$i]['polsk'])) echo $user[$i]['polsk']; ?>
        <?php if (isset($user[$i]['arabic'])) echo $user[$i]['arabic']; ?>
        <?php if (isset($user[$i]['russian'])) echo $user[$i]['russian']; ?>
        <?php if (isset($user[$i]['tijrijna'])) echo $user[$i]['tijrijna']; ?>
        <?php if (isset($user[$i]['faresi'])) echo $user[$i]['faresi']; ?>        <?php if (isset($user[$i]['spanish'])) echo $user[$i]['spanish']; ?>
        <?php if (isset($user[$i]['french'])) echo $user[$i]['french']; ?>
        <?php if (isset($user[$i]['other'])) echo $user[$i]['other']; ?>
        <?php if (isset($user[$i]['foto_profile'])) { ?>
        <img class="profile_pic img-circle img-responsive" src="/.<?php echo $user[$i] ['foto_profile']; ?>">
      <?php }}} ?>
      </div>
      <div></div>
      <?php if (empty($user[0]['foto_profile'])) { ?>
    <label for="exampleInputFile">Voeg foto toe</label>
    <form action="/users/add_profile_img" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
                <input type="file" name="image">
              </div>
              <button type="submit" class="btn btn-default">Voeg foto toe</button>
      </div>
      </form>
      <?php };?>
			
    	<!-- <p class="help-block">Voeg een foto voor je of je gezin toe</p><br> -->
      <?php $this->load->view('footer'); ?>
</body>
</html>