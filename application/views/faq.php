<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
    <title>FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  </head>
  <body>
  <?php $this->load->view('nav_bar'); ?>  
  <div class="content">
  <center class='centerplease'>FAQ</center><br>
    <div>
      <input type="checkbox" id="question1" name="q"  class="questions">
    <div class="plus">+</div>
      <label for="question1" class="question">Hoe werkt Nieuwe Buren?</label>
    <div class="answers">
          <p>The answer is here.</p>
    </div>
    </div>
  <div>
    <input type="checkbox" id="question2" name="q" class="questions">
    <div class="plus">+</div>
      <label for="question2" class="question">Wat is de visie van Nieuwe Buren?</label>
    <div class="answers">
         <p>The answer is here.</p>
    </div>
  </div>
<div>
  <input type="checkbox" id="question3" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question3" class="question">Hoe kan ik me inschrijven ?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question4" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question4" class="question">Kan ik host en/of gast zijn ?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question5" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question5" class="question">Kan ik meerdere keren mee doen?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question6" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question6" class="question">Waar moet ik opletten als ik een etentje organiseer?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question7" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question7" class="question">Moet ik vloeiend Engels en/of Nederlands kunnen spreken?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question8" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question8" class="question">Wie zit er achter Nieuwe Buren?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question9" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question9" class="question">Zijn mijn gegevens veilig?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question10" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question10" class="question">Hoe is Nieuwe Buren gefinancierd?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question11" name="q" class="questions">
  <div class="plus">+</div>
    <label for="question11" class="question">Wat een leuk initiatief. Kan ik helpen?</label>
  <div class="answers">The answer is here.
  </div>
</div>
<div>
  <input type="checkbox" id="question12" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question12" class="question">
   Heeft u meer vragen?
  </label>
  <div class="answers">
       <p>Stuur onz u vragen op onz <a href="/users/contact">Contact page</a></p>
  </div>
</div>
</div>
<div>
        <?php $this->load->view('footer'); ?>
  </div>
</html>