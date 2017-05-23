<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('master'); ?>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <title>Nieuwe Buren</title>
  <meta name="viewport" content="width=device-width"> 
</head>

	<body>
	  <div id="nav-trigger" class="nav-trigger open">
	    <span class="line"></span>
	    <span class="line"></span>
	    <span class="line"></span>
	  </div>
	<nav id="nav" class="out">
	  <ul>
	    <li><a href="/users/show_testimonial"><span class="nav-label">Testimonials</span></a></li>
	    <li><a href="/users/show_profile"> <span class="nav-label">Slider Met Profielen</span></a></li>
	    <li><a href="/users/events"><span class="nav-label">Events</span></a></li>
	    <li><span class="nav-label">Sponsors</span></li>
	    <li><a href="/users/mensen"><span class="nav-label">Mensen Achter NB</span></li>
	    <li><a href="/users/faq"> <span class="nav-label">FAQ</span></a></li>
	    <li><a href="/users/contact"> <span class="nav-label">Contact</span></a></li>
	  </ul>
	</nav>
	<section id="header" class="header">
		<img id="main_pic" src="../assets/image/main_pic/15DINNERJP1-master675.jpg">
		<h1 id="heading">Multiculti dineren</h1>
	</section>
	<section class="content">
        <img src="../assets/image/main_pic/Capture.png" alt="NieuweBurenLogo" width="175">
        <p>Begin met multiculti dineren door hieronder aan te geven of je graag te gast wilt zijn of dat je als host een diner wilt organiseren.</p>
        <a href="/users/show_profile"> <button type="button" class="btn btn-primary btn-lg">Bekijk gezinnen die al mee doen</button></a>
	</section>
	<div class="row_footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Volg ons op Facebook</h2>
        <a target="_blank" href="https://www.facebook.com/ProjectNieuweBuren/" class="social-icon">
        <i class="fa fa-facebook"></i></a>
        <!-- <?php $this->load->view('footer'); ?> -->
	</div>
	<script src="/assets/javascript/index.js"></script>
	</body>
</html>
