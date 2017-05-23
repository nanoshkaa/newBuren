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
        <form id="contact" class="form-horizontal" role="form" method="post" action="/users/send_contact">
        <div class="form-group">  
          <div class="col-sm-12">
            <input id="name" name="name" type="text" placeholder="NAAM" class="form-control">
          </div>
        </div>
        <div class="form-group">  
          <div class="col-sm-12">
            <input id="email" name="email" type="email" placeholder="EMAIL" class="form-control">
          </div>
        </div>
        <div class="form-group">  
          <div class="col-sm-12">
            <textarea class="form-control" id="message" name="message" placeholder="MENSAJE"></textarea>
          </div>
        </div>
          <button type="submit" id="send" name="send" class="btn btn-block">Stuur</button>
        </form>
      </div>
    </section>  
      <?php $this->load->view('footer'); ?> 
  </body>
</html>
