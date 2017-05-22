<html>
  <head>
    <title>Contact</title>
    <?php $this->load->view('master'); ?>
  </head>
  <body>
  <?php $this->load->view('nav_bar'); ?>
    <div id="preloader"><div id="spinner"></div></div>
    <div id="contact_form_bg">
  <header>
      <h1>Hallo</h1>
  </header>
  <section>
  <div class="arrow-up"></div>
  <form id="contact" class="form-horizontal" role="form" method="post" action="../sacramento/add_contact">
    <div class="form-group">  
      <div class="col-sm-12">
        <input id="name" name="name" type="text" placeholder="NAME" class="form-control">
      </div>
    </div>
    <div class="form-group">  
      <div class="col-sm-12">
        <input id="email" name="email" type="email" placeholder="EMAIL" class="form-control">
      </div>
    </div>
    <div class="form-group">  
      <div class="col-sm-12">
        <textarea class="form-control" id="message" name="message" placeholder="MESSAGE"></textarea>
      </div>
    </div>
    <button type="submit" id="send" name="send" class="btn btn-block">send</button>
  </form>
  <?php if(null !== $this->session->flashdata('contact_confirmation'))
            {
      ?>
      <div class="card-panel">
      <span class="bg-success"><?php echo $this->session->flashdata('contact_confirmation') ?></span>
    </div>
      <?php } ?>
      <?php if(null !== $this->session->flashdata('errors'))
            {
      ?>
      <div class="bg-danger">
      <?php echo $this->session->flashdata('errors') ?>
    </div>
      <?php } ?>
</section>
  </div>
  <!--Libraries and Plugins-->
         <script src="../assets/index/js/libs/jquery-1.11.2.min.js"></script>
        <script src="../assets/index/js/libs/jquery.easing.1.3.js"></script>
        <script src="../assets/index/js/plugins/bootstrap.min.js"></script>
        <script src="../assets/index/js/plugins/jquery.touchSwipe.min.js"></script>
        <script src="../assets/index/js/plugins/jquery.placeholder.js"></script>
    <script src="../assets/index/js/plugins/icheck.min.js"></script>
    <script src="../assets/index/js/plugins/jquery.validate.min.js"></script>
        <script src="../assets/index/js/plugins/gallery.js"></script>
    <script src="../assets/index/js/plugins/jquery.fitvids.js"></script>
        <script src="../assets/index/js/plugins/jquery.bxslider.min.js"></script>
        <script src="../assets/index/js/plugins/waypoints.min.js"></script>
    <script src="../assets/index/js/plugins/smoothscroll.js"></script>
        <script src="../assets/index/js/landing2.js"></script>
      <?php $this->load->view('footer'); ?> 
    </body>
</html>
