<div class="first_row">
	  
	   <div class=" navbar-collapse nav-menu" >
	          <ul class="nav nav-tabs nav-justified">
	        	<li><a href="/users/index">Main</a></li>
		        <li><a href="/users/show_my_profile">My Profile</a></li>
		        <li><a href="/users/faq">Events</a></li>
		        <li><a href="/users/faq">FAQ</a></li>
		        <li><a href="/users/contact">Contact</a></li>
		        <?php if (empty($this->session->userdata('logged_in'))) { ?>
		        <li><a href="/users/show_sign_in">Sign In</a></li>
		        <li><a href="/users/show_sign_up">Sign Up</a></li>
		        		        <?php }	else{ ?>
		        <li><a href="/users/sign_out">Sign Out</a></li>
   <?php } ?>
	          </ul>
	    </div> 
	</div>