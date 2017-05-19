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
 


	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class=" navbar-collapse" >
	      <ul class="sign">
	        <li><a href="/users/show_sign_in">Sign In</a></li>
	        <li><a href="/users/show_sign_up">Sign Up</a></li>
	        <li><a href="/users/sign_out">Sign Out</a></li>
	        <li><a href="/users/show_profile">Profile</a></li>
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

  
      <link rel="stylesheet" href="style.css">

  
</head>

<body>
<div class="first_row">
  <div id="nav-trigger" class="nav-trigger open">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
  </div>
   <div class=" navbar-collapse" >
          <ul class="sign">
            <li><a href="">Sign In</a></li>
            <li><a href="">Sign Up</a></li>
          </ul>
    </div><!-- /.navbar-collapse -->

</div>
<nav id="nav" class="out">
  <ul>
    <li><span class="nav-label">Testimonials</span></span></li>
    <li><span class="nav-label">Slider Met Profielen</span></li>
    <li><span class="nav-label">Events</span></li>
    <li><span class="nav-label">Sponsors</span></li>
    <li><span class="nav-label">Mensen Achter NB</span></li>
  </ul>
</nav>
<section id="header" class="header">
<img  src="15DINNERJP1-master675.jpg">

  <h1 id="heading">Multiculti dineren</h1>
</section>
  <section class="content">
        <img src="Capture.png" alt="Capture" width="175">
        <p>Begin met multiculti dineren door hieronder aan te geven of je graag te gast wilt zijn of dat je als host een diner wilt organiseren.</p>
        <button type="button" class="btn btn-primary btn-lg">Bekijk gezinnen die al mee doen</button>
  </section>
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row_footer">
          <footer class ="col-lg-12">
           <div class="footer-social-icon">
             <h2>Volg ons op Facebook</h2>
              <ul class="social-icons">
                <li><a target="_blank" href="https://nl-nl.facebook.com/nieuweburenrtl/" class="social-icon">
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
 
  <script src="index.js"></script>

</body>
</html>
