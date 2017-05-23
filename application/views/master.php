<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
<!--Bootstrap 3.3.2-->
<link href="../assets/index/css/bootstrap.min.css" rel="stylesheet" media="screen">
<!--Icon Fonts-->
<link href="../assets/index/css/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="../assets/index/css/icon-moon.css" rel="stylesheet" media="screen">
<!--Animations-->
<link href="../assets/index/css/animate.css" rel="stylesheet" media="screen">
<link href="../assets/css/style.css" rel="stylesheet" media="screen">
<!--Theme Styles-->
<link <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style.css" rel="stylesheet" media="screen">
<!--Color Schemes-->
<link class="color-scheme" href="../assets/index/css/colors/color-default.css" rel="stylesheet" media="screen">
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
<!--Modernizr-->
<script src="../assets/index/js/libs/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>    
<script>$('document').ready(function() {
  var msg = $('#message');
  msg.autosize();
});
</script>
    <style>
    @import url(http://fonts.googleapis.com/css?family=Oswald:400,700,300);
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
  background: #f3c59f;
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
.centered {
  margin: 0 auto;
  text-align: center;
}
#nav_options{
  font-family: sans-serif;
}
.uppercase {
  text-transform: uppercase;
}
.bottom-line {
  border-bottom: 2px solid #c3c3c3;
}
::-webkit-resizer {
  display: none;
}
body {
  background-color: white !important;
  color: #555555;
  font-family: 'Oswald', sans-serif;
  font-weight: 300;

}
body * {
  outline: none !important;
}
#contact_form_bg{
  padding: 40px;
  background-color: white;
  
}
header h1 {
  text-transform: uppercase;
  margin: 0 auto;
  text-align: center;
  border-bottom: 2px solid #c3c3c3;
  background-color: #f1f1f1;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.05);
  color: #555555;
  font-weight: 300;
  width: 300px;
  padding: 10px 0px 10px 0px;
  letter-spacing: 4px;
}
section {
  margin: 0 auto;
  text-align: center;
}
.arrow-up {
  margin: 0 auto;
  text-align: center;
  position: relative;
  top: 1px;
  width: 0;
  height: 0;
  margin-top: 10px;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid rgba(255, 152, 0, 0.35);
}
form#contact {
  margin: 0 auto;
  text-align: center;
  border-bottom: 2px solid #f1f1f1;
  width: 300px;
  padding: 20px;
  background-color: #f1f1f1;
  margin-bottom: 20px;
}
.form-control {
  box-shadow: none;
  border-radius: 0;
  background-color: white;
  outline: none;
  border: none;
  box-shadow: none !important;
}
textarea#message {
  min-height: 100px;
  resize: vertical;
  overflow: hidden;
  border-bottom: 0px;
}
button#send {
  text-transform: uppercase;
  border-bottom: 2px solid rgba(255, 152, 0, 0.35);
  margin-top: 20px;
  letter-spacing: 4px;
}
.profile_pic{
  max-width: 7%;
  height: auto;
}
.d-inline-block{
  display: inline-block;
}
.side_bar{
  width: 350px;
  background-color: white;
  height: 100%;
  padding-left: 10px;
  border-right: white;
  padding-bottom: 30px;
  position: fixed;
  display: inline-block;
}
.show_profiles{
  margin-left: 350px;
  background: white;
  padding: 0px 20px 100px 20px;
  height: auto;
}
.nav-stacked{
  margin: 0px auto;
}
/* testimonial page style */
.accordian{
  width: 950px;
  height: 550px;
  overflow:hidden; 
  margin: 50px auto 20px;
}
.accordian li{
  position: relative;
  display:block;
  width:20px;
  height: 500px;
  float: left;
  border-left: 1px solid #888;
  -webkit-box-shadow: 0 0 25px 10px rgba(0,0,0,0.5);
  -moz-box-shadow: 0 0 25px 10px rgba(0,0,0,0.5);
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}
.accordian ul:hover li{
  width: 20px;
}
.accordian ul li:hover{
  width:700px;
}
.accordian ul li:hover{
  width:700px;
}
.image_title{
  background: rgba(0,0,0,0.5);
  position:absolute;
  left:0;
  bottom:0;
  width:200px;
  height: 50px;
}
.image_title a{
  display: block;
  color: #fff;
  text-decoration: none;
  padding:20px;
  font-size:16px;
}
.chat{
  text-align: center;
}
.profile_user_pic{
  width: 40%;
}

    </style>
