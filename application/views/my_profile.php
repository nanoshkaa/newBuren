<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('master'); ?>
	
	<title>Nieuve Buren</title>
</head>
<body>
  <?php $this->load->view('nav_bar'); ?>
  <div>
    <p>Hallo <?= ($this->session->userdata('name')); ?></p>
	</div>
	
  <div class="form-group">
      <?php 
      for ($i=0; $i < count($user); $i++) { ?>
       <?php if (isset($user[$i]['foto_profile'])) { ?> <img class="profile_pic img-circle img-responsive" src="/.<?php echo $user[$i] ['foto_profile']; ?>"><?php } ?>
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
        <?php if (isset($user[$i]['faresi'])) echo $user[$i]['faresi']; ?>        
        <?php if (isset($user[$i]['spanish'])) echo $user[$i]['spanish']; ?>
        <?php if (isset($user[$i]['french'])) echo $user[$i]['french']; ?>
        <?php if (isset($user[$i]['other'])) echo $user[$i]['other']; ?><br>
        <?php echo $user[$i]['host']; ?><br>
        
      <?php } ?>
      <div id="errors">
        <?php if ($errors) {
                //$errors = $this->session->flashdata('errors');
                    for($i=0; $i < count($errors); $i++) {
                        echo  $errors[$i]. "<br>";
                    }
              }
            if ($this->session->flashdata('validation_errors')) {
                  echo $this->session->flashdata('validation_errors');
              } ?>
  </div>     
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#chang").click(function(){
        $("#fotoForm").toggle();
    });
});
</script>
  <a href="#" id="chang"><label for="exampleInputFile">change my foto</label></a>
    <form id="fotoForm" style="display: none;" action="/users/add_profile_img" method="post" enctype="multipart/form-data">
    <div class="form-group"><input type="file" name="image">
    <button type="submit" class="btn btn-default">Voeg foto toe</button>
  </div>
    </form>
     
      <?php $this->load->view('footer'); ?>
</body>
</html>