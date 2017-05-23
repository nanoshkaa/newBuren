<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
    <title>FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300,800);
body {
  font-size: 1.5em;
  background-color: white;
}
.content {
  width: 80%;
  padding: 20px;
  margin: 0 auto;
  padding: 0 60px 0 0;
}
.centerplease {
  margin: 0 auto;
  max-width: auto;
  font-size: 40px;
  color: #f3c59f;
}
.question {
  position: relative;
  background: #ff5722;
  margin: 0;
  padding: 10px 10px 10px 50px;
  display: block;
  width:100%;
  cursor: pointer;
  color: white;
}
.answers {
  background: white;
  padding: 0px 15px;
  margin: 5px 0;
  height: 0;
  overflow: hidden;
  z-index: -1;
  position: relative;
  opacity: 0;
  -webkit-transition: .7s ease;
  -moz-transition: .7s ease;
  -o-transition: .7s ease;
  transition: .7s ease;
}
.questions:checked ~ .answers{
  height: auto;
  opacity: 1;
  padding: 15px;
}
.plus {
  position: absolute;
  margin-left: 10px;
  margin-top: 8px;
  z-index: 5;
  font-size: 2em;
  line-height: 100%;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
  -o-transition: .3s ease;
  transition: .3s ease;
  color: white;
}
.questions:checked ~ .plus {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.questions {
  display: none;
}
    </style>
  </head>
  <body>
  <?php $this->load->view('nav_bar'); ?>
    <!--Page Preloading-->
    <div id="preloader"><div id="spinner"></div></div>
<!-- <?php include('header.php'); ?>
 -->
     <div class='centerplease'>
  <center>Frequently Asked Questions</center>
</div>
<br>

<div class="content">
<div>
  <input type="checkbox" id="question1" name="q"  class="questions">
  <div class="plus">+</div>
  <label for="question1" class="question">
    Who is the ___ for?
  </label>
  <div class="answers">
        <p>Anyone who has had any kind of connection with .</p>

  </div>
</div>

<div>
  <input type="checkbox" id="question2" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question2" class="question">How many ?</label>
  <div class="answers">
       <p>You get to select .</p>
  </div>
</div>

<div>
  <input type="checkbox" id="question3" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question3" class="question">
        What are some things that can be ?
  </label>
  <div class="answers">
    choose from go to our "What's in the?" page.
  </div>
</div>
<div>
  <input type="checkbox" id="question4" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question4" class="question">
   Have another question for us?
  </label>
  <div class="answers">
       <p>Send us a message on our <a href="#">Contact Page</a>.</p>
  </div>
</div>
</div>

<!--Libraries and Plugins-->
        <script src="../assets/index/js/landing2.js"></script>
<?php $this->load->view('footer'); ?>
</html>