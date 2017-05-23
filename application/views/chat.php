<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren chat</title>
</head>
<body>
<?php $this->load->view('nav_bar'); ?>
<script src="https://use.fontawesome.com/45e03a14ce.js"></script>
    	 <div class="container col-xs-6 col-md-4">
            <div id="custom-search-input">
               <div class="input-group col-md-12">
                  <input type="text" class="search-query form-control" placeholder="Conversation" />
                  <button class="btn btn-danger" type="button">
                  <span class=" glyphicon glyphicon-search"></span>
                  </button>
               </div>
            </div>
            <div class="member_list">
               <ul class="list-unstyled">
                  <li class="left clearfix">
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <!--chat_sidebar-->
         <div class="col-xs-12 col-sm-6 col-md-8">
		 	<div class="row">
		 		<div class="new_message_head">
		 		<div class="pull-left">
		 			<button>Messages</button>
		 		</div>
		 		<div class="pull-right">
				</div>
		 	</div>
		 	<!--new_message_head-->
		 
		 <div class="chat_area ">
		 	<ul class="list-unstyled">
		 		<li class="left clearfix">
                     <span class="chat-img1 pull-left">
                     <img src="#" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
						<div class="chat_time pull-right">09:40PM</div>
                     </div>
                  </li>
		 	</ul>
		 </div><!--chat_area-->
          <div class="message_write">
    	 <textarea class="form-control" placeholder="type a message"></textarea>
		 <div class="clearfix"></div>
		 <div class="chat_bottom">
			 <a href="#" class="pull-right btn btn-success">
			 Send</a></div>
		 		</div>
		 	</div>
         </div> <!--message_section-->
</body>
</html>