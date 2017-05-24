<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren chat</title>
</head>
<body>
<?php $this->load->view('nav_bar');
 // var_dump($sent);
 // die();
 ?>
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
                        <div class="contact_sec"></div>
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
            <?php for ($i=0; $i < count($rec); $i++){ ?>
		 		<li class="left clearfix">
                     <span class="chat-img1 pull-left">
                     <p><?php echo $rec[$i]['name']; ?></p>
                     </span>
                     <div class="chat-body1 clearfix">
                        <p><?php echo $rec[$i]['message']; ?></p>
						<div class="chat_time pull-right"><p><?php echo $rec[$i]['created_at']; ?></p></div>
                     </div>
                  </li>
                   <?php } ?>
                   <?php for ($i=0; $i < count($sent); $i++){ ?>
            <li class="left clearfix admin_chat">
                     <span class="chat-img1 pull-right">
                     <p><?php echo "Me" ?></p>
                     </span>
                     <div class="chat-body1 clearfix">
                        <p><?php echo $sent[$i]['message']; ?></p>
                  <div class="chat_time pull-left"><p><?php echo $sent[$i]['created_at']; ?></p></div>
                     </div>
                  </li>
                <?php } ?>  
         </ul>
         </div>
		 </div><!--chat_area-->
          <div class="message_write">
          <form action="/users/insert_message" method="post" >
    	       <textarea name="textarea" class="form-control" placeholder="type a message" required></textarea>

             <input type="hidden" name="sent_to" value="<?= $this->session->userdata('message_user_id') ?>">
			 <input type="submit" value="Stuur">
         </form>
          </div>
		 		</div>
		 	</div>
         </div>
</body>
</html>