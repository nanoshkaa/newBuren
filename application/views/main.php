<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuwe Buren</title>
	</head>
<body>
<div class="container">
	<nav class="navbar navbar-default navbar-fixed-top white">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header logo">
	      <img src="Capture.png" alt="Capture" width="100">
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class=" navbar-collapse" >
	      <ul class="sign">
	        <li><a href="/users/show_sign_in">Sign In</a></li>
	        <li><a href="/users/show_sign_up">Sign Up</a></li>
	        <li><a href="/users/sign_out">Sign Out</a></li>
	        <li><a href="/users/show_my_profile">My Profile</a></li>
	        <li><a href="/users/faq">FAQ</a></li>
	        <li><a href="/users/contact">Contact</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="slide-show">
		  <div class="slide">
		  	<h3>Multiculti dineren</h3>
		  	
		  	<p>Begin met multiculti dineren door hieronder aan te geven of je graag te gast wilt zijn of dat je als host een diner wilt organiseren.</p>
		  	<input  class="button" type="submit" name="submit" value="Bekijk gezinnen die al mee doen">
		  </div>
		  <img class="mySlides" src="7bc76f8a395f87934016c40165a33cbd.jpg">
		  <img class="mySlides" src="1081636_max.jpg">
		  <img class="mySlides" src="10377168_688709651247957_5963914565766711639_n-e1429949830434.jpg">
		  <img class="mySlides" src="17554368_1886026861655030_9148612240574711480_n.jpg">
		  <img class="mySlides" src="15DINNERJP1-master675.jpg">
		  <img class="mySlides" src="17343014_1879064452351271_6483205219528369929_n.jpg">
		  <img class="mySlides" src="Welcome_Dinners.jpg">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row_buttons">
			<div class="btn1">
			<button type="button" class="btn btn-secondary btn-md">Testimonials</button>
			</div><br>
			<div class="btn2">
			<button type="button" class="btn btn-secondary btn-md ">Slider Met Profielen</button>
			</div><br>
			<div class="btn3">
			<button type="button" class="btn btn-secondary btn-md ">Events</button>
			</div><br>
			<div class="btn4">
			<button type="button" class="btn btn-secondary btn-md ">Sponsors</button>
			</div><br>
			<div class="btn5">
			<button type="button" class="btn btn-secondary btn-md ">Mensen Achter NB</button>
			</div><br>	
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row_footer">
			<footer class ="col-lg-12">
				<div class="footer-social-icon">
					<h2>Follow Us</h2>
					<?= $this->session->userdata('user_id');
					 ?>
					<ul class="social-icons">
						<li><a target="_blank" href="https://www.facebook.com/MoOoDy.a.hassan" class="social-icon">
						<i class="fa fa-facebook"></i></a>
						</li>
					</ul>
				</div>
			</footer>
			<div class="row_desinger">
				<h4>Designed by:</h4>
				<a href="https://www.linkedin.com/in/mohammad-abo-hassan-780462113/">Mohammad</a><br>
				<a href="https://www.linkedin.com/in/naima-daruich-b64128b/">Naima</a><br>
				<a href="https://www.linkedin.com/in/hameed-alhowidi-a24b58117/">Hmeed</a><br>
			</div>
		</div>
	</div>
</div>
<!-- <script type="text/javascript">
	var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script> -->
</body>
</html>
