<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
    <title>FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  </head>
  <body>
  <?php $this->load->view('nav_bar'); ?>  
     <div class='centerplease'>
  <center>Frequently Asked Questions</center>
</div>
<br>

  <div class="content">
    <div>
      <input type="checkbox" id="question1" name="q"  class="questions">
    <div class="plus">+</div>
      <label for="question1" class="question">Hoe werkt Nieuwe Buren?</label>
    <div class="answers">
          <p>Anyone who has had any kind of connection with .</p>
    </div>
    </div>
  <div>
    <input type="checkbox" id="question2" name="q" class="questions">
    <div class="plus">+</div>
      <label for="question2" class="question">Wat is de visie van Nieuwe Buren?</label>
    <div class="answers">
         <p>You  .</p>
    </div>
  </div>
<div>
  <input type="checkbox" id="question3" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question3" class="question">Hoe kan ik me inschrijven ?</label>
  <div class="answers">choose from go to our "What's in the?" page.
  </div>
</div>
<div>
  <input type="checkbox" id="question4" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question4" class="question">
   Have another question for us?
  </label>
  <div class="answers">
       <p>Send us a message on our <a href="/users/contact">Contact page</a></p>
  </div>
</div>
</div>
<?php $this->load->view('footer'); ?>
</html>