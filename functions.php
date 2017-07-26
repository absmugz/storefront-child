<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
 
 
 
 
function allure_scripts() {
	
	// enqueue styles
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/assets/plugins/bootstrap/css/bootstrap.min.css');
	//wp_enqueue_style('jquery-ui', get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.css');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/assets/plugins/font-awesome/css/font-awesome.min.css');
	//wp_enqueue_style('select_option1', get_stylesheet_directory_uri().'/assets/plugins/selectbox/select_option1.css');
	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.min.css');
	wp_enqueue_style('fancybox', get_stylesheet_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.css');
	wp_enqueue_style('fancybox-pack', get_stylesheet_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.pack.css');
	wp_enqueue_style('isotope', get_stylesheet_directory_uri().'/assets/plugins/isotope/isotope.min.css');
	wp_enqueue_style('datepicker', get_stylesheet_directory_uri().'/assets/plugins/datepicker/datepicker.min.css');
	wp_enqueue_style('bootstrapthumbnail', get_stylesheet_directory_uri().'/assets/plugins/bootstrapthumbnail/bootstrap-thumbnail.css');
	
		wp_enqueue_style('bootstrap-select', get_stylesheet_directory_uri().'/assets/plugins/bootstrap-select/css/bootstrap-select.min.css');
	
	wp_enqueue_style('style', get_stylesheet_directory_uri().'/assets/css/style.css');
	//wp_enqueue_style('default', get_stylesheet_directory_uri().'/assets/css/default.css');
	
	wp_enqueue_style('default', get_stylesheet_directory_uri().'/assets/css/color-option-allure.css');
	
	wp_enqueue_style('fresco', get_stylesheet_directory_uri().'/assets/plugins/fresco/fresco.css');
	
	
	wp_enqueue_style('formValidation', get_stylesheet_directory_uri().'/assets/plugins/formvalidation/css/formValidation.min.css');
	

	
	// enqueue script
	
	//wp_deregister_script('jquery');

	//wp_enqueue_script('jquery', get_stylesheet_directory_uri() .'/assets/js/jquery.min.js');
	wp_enqueue_script('jquery'); 
	
	
	
	
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true );
	

	
	//wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.js', array('jquery'), '1.0', true );
//	wp_enqueue_script('selectbox', get_stylesheet_directory_uri().'/assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('fancybox', get_stylesheet_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.js', array('jquery'), '1.0', true );
	wp_enqueue_script('fancybox-pack', get_stylesheet_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.pack.js', array('jquery'), '1.0', true );
	wp_enqueue_script('isotope', get_stylesheet_directory_uri().'/assets/plugins/isotope/isotope.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('isotope-triger', get_stylesheet_directory_uri().'/assets/plugins/isotope/isotope-triger.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('bootstrap-datepicker', get_stylesheet_directory_uri().'/assets/plugins/datepicker/bootstrap-datepicker.js', array('jquery'), true );
	wp_enqueue_script('syotimer', get_stylesheet_directory_uri().'/assets/plugins/syotimer/jquery.syotimer.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('smoothscroll', get_stylesheet_directory_uri().'/assets/plugins/smoothscroll/SmoothScroll.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('fresco', get_stylesheet_directory_uri().'/assets/plugins/fresco/fresco.js', array('jquery'), '1.0', true );
	wp_enqueue_script('jqBootstrapValidation', get_stylesheet_directory_uri().'/assets/plugins/jqBootstrapValidation/jqBootstrapValidation.js', array('jquery'), '1.0', true );
	wp_enqueue_script('formValidation', get_stylesheet_directory_uri().'/assets/plugins/formvalidation/js/formValidation.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script('formValidationFramework', get_stylesheet_directory_uri().'/assets/plugins/formvalidation/js/framework/bootstrap.min.js', array('jquery'), '1.0', true );
	
	wp_enqueue_script('bootstrap-select', get_stylesheet_directory_uri().'/assets/plugins/bootstrap-select/js/bootstrap-select.min.js', array('jquery'), '1.0', true );
	
	wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0', true );


  
 
  
  
	
}
add_action('wp_enqueue_scripts', 'allure_scripts');

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');


//Remove the search box and storefront site branding from the header of WooThemes Storefront theme

function remove_sf_actions() {

	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	remove_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
	remove_action( 'storefront_content_top', 'woocommerce_breadcrumb', 10 );
	
	

	

}
add_action( 'init', 'remove_sf_actions' );


	function storefront_primary_navigation() {
		?>
		<nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url');?>/home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
            
            
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="<?php bloginfo('url');?>/home/">Home</a>
              </li>
              <li>
                
                <a href="#about" class="scrolling">About us</a>
              </li>
              <li>
                <a href="#services" class="scrolling">Services</a>
              </li>
              <li>
                <a href="#pricelist" class="scrolling">Pricelist</a>
              </li>
              <li>
                <a href="#team" class="scrolling">Team</a>
              </li>
               <li>
                <a href="#gallery" class="scrolling">Gallery</a>
              </li>
              <li>
                <a href="<?php bloginfo('url');?>/blog/">Blog</a>
              </li>
              <li>
                <a href="<?php bloginfo('url');?>/shop/">Shop</a>
              </li>
            
            
          <!-- Cart button -->
          <div class="cart_btn">
           <a href="<?php bloginfo('url');?>/shop/"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span class="badge">0</span></a>
          </div>

        </div>
      </nav><!-- #site-navigation -->
		<?php
	}
	
	
//Processing my forms

add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );

function custom_action() {
    // A default response holder, which will have data for sending back to our js file
    $response = array(
    	'error' => false,
    );
 
    // Example for creating an response with error information, to know in our js file
    // about the error and behave accordingly, like adding error message to the form with JS

 
    // ... Do some code here, like storing inputs to the database, but don't forget to properly sanitize input data!
 
    // Don't forget to exit at the end of processing
    
   
$name = $_POST['firstName'];
$email_address = $_POST['email'];
$phone = $_POST['phoneNumber'];
$message = $_POST['message'];
   
// Create the email and send the message
$to = 'absmugz09@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

$email_body = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800);
        @import url(http://fonts.googleapis.com/css?family=Oxygen:300,400,700);
    </style>



    <style type="text/css">
	
	#outlook a {
  padding: 0;
}
body.outlook p {
  display: inline !important;
}
body,
.body {
  width: 100%;
  background-color: #f2f4f5;
  margin: 0;
  padding: 0;
}
body {
  width: 100% !important;
  min-width: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  margin: 0;
  padding: 0;
}
.ExternalClass {
  width: 100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
  line-height: 100%;
}
#backgroundTable {
  margin: 0;
  padding: 0;
  width: 100% !important;
  line-height: 100% !important;
}
img {
  outline: none;
  text-decoration: none;
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%;
  float: left;
  clear: both;
  display: block;
}
center {
  width: 100%;
  min-width: 580px;
}
a img {
  border: none;
}
p {
  margin: 0 0 0 10px;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
}
td {
  word-break: normal;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important;
}
table,
tr,
td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}
hr {
  color: #e3e4e5;
  background-color: #e3e4e5;
  height: 1px;
  border: none;
}
/* Responsive Grid */
table.body {
  height: 100%;
  width: 100%;
}
table.container {
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
  background: #ffffff;
}
table.row {
  padding: 0;
  width: 100%;
  position: relative;
}
table.container table.row {
  display: block;
}
td.wrapper {
  padding: 10px 20px 0 0;
  position: relative;
}
table.columns,
table.column {
  margin: 0 auto;
}
table.columns td,
table.column td {
  padding: 0 0 10px;
}
table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}
td.sub-column,
td.sub-columns {
  min-width: 0;
}
table.row td.last,
table.container td.last {
  padding-right: 0;
}
table.one {
  width: 30px;
}
table.two {
  width: 80px;
}
table.three {
  width: 130px;
}
table.four {
  width: 180px;
}
table.five {
  width: 230px;
}
table.six {
  width: 280px;
}
table.seven {
  width: 330px;
}
table.eight {
  width: 380px;
}
table.nine {
  width: 430px;
}
table.ten {
  width: 480px;
}
table.eleven {
  width: 530px;
}
table.twelve {
  width: 580px;
}
table.one center {
  min-width: 30px;
}
table.two center {
  min-width: 80px;
}
table.three center {
  min-width: 130px;
}
table.four center {
  min-width: 180px;
}
table.five center {
  min-width: 230px;
}
table.six center {
  min-width: 280px;
}
table.seven center {
  min-width: 330px;
}
table.eight center {
  min-width: 380px;
}
table.nine center {
  min-width: 430px;
}
table.ten center {
  min-width: 480px;
}
table.eleven center {
  min-width: 530px;
}
table.twelve center {
  min-width: 580px;
}
table.one .panel center {
  min-width: 10px;
}
table.two .panel center {
  min-width: 60px;
}
table.three .panel center {
  min-width: 110px;
}
table.four .panel center {
  min-width: 160px;
}
table.five .panel center {
  min-width: 210px;
}
table.six .panel center {
  min-width: 260px;
}
table.seven .panel center {
  min-width: 310px;
}
table.eight .panel center {
  min-width: 360px;
}
table.nine .panel center {
  min-width: 410px;
}
table.ten .panel center {
  min-width: 460px;
}
table.eleven .panel center {
  min-width: 510px;
}
table.twelve .panel center {
  min-width: 560px;
}
.body .columns td.one,
.body .column td.one {
  width: 8.333333%;
}
.body .columns td.two,
.body .column td.two {
  width: 16.666666%;
}
.body .columns td.three,
.body .column td.three {
  width: 25%;
}
.body .columns td.four,
.body .column td.four {
  width: 33.333333%;
}
.body .columns td.five,
.body .column td.five {
  width: 41.666666%;
}
.body .columns td.six,
.body .column td.six {
  width: 50%;
}
.body .columns td.seven,
.body .column td.seven {
  width: 58.333333%;
}
.body .columns td.eight,
.body .column td.eight {
  width: 66.666666%;
}
.body .columns td.nine,
.body .column td.nine {
  width: 75%;
}
.body .columns td.ten,
.body .column td.ten {
  width: 83.333333%;
}
.body .columns td.eleven,
.body .column td.eleven {
  width: 91.666666%;
}
.body .columns td.twelve,
.body .column td.twelve {
  width: 100%;
}
td.offset-by-one {
  padding-left: 50px;
}
td.offset-by-two {
  padding-left: 100px;
}
td.offset-by-three {
  padding-left: 150px;
}
td.offset-by-four {
  padding-left: 200px;
}
td.offset-by-five {
  padding-left: 250px;
}
td.offset-by-six {
  padding-left: 300px;
}
td.offset-by-seven {
  padding-left: 350px;
}
td.offset-by-eight {
  padding-left: 400px;
}
td.offset-by-nine {
  padding-left: 450px;
}
td.offset-by-ten {
  padding-left: 500px;
}
td.offset-by-eleven {
  padding-left: 550px;
}
td.expander {
  visibility: hidden;
  width: 0;
  padding: 0 !important;
}
table.columns .text-pad,
table.column .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}
table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 10px;
}
table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 10px;
}
.sub-grid table {
  width: 100%;
}
.sub-grid td.sub-columns {
  padding-bottom: 0;
}
/* Block Grid */
.block-grid {
  width: 100%;
  max-width: 580px;
}
.block-grid td {
  display: inline-block;
  padding: 10px;
}
.two-up td {
  width: 270px;
}
.three-up td {
  width: 173px;
}
.four-up td {
  width: 125px;
}
.five-up td {
  width: 96px;
}
.six-up td {
  width: 76px;
}
.seven-up td {
  width: 62px;
}
.eight-up td {
  width: 52px;
}
/* Typography */
body,
table.body,
p,
td {
  color: #656566;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-weight: normal;
  padding: 0;
  margin: 0;
  text-align: left;
  line-height: 20px;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  color: #2d2d2e;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-weight: 300;
  padding: 0;
  margin: 0;
  text-align: left;
  line-height: 1.5;
  word-break: normal;
}
h1 {
  font-size: 40px;
}
h2 {
  font-size: 36px;
}
h3 {
  font-size: 32px;
}
h4 {
  font-size: 28px;
}
h5 {
  font-size: 24px;
}
h6 {
  font-size: 20px;
}
p.lead,
p.lede,
p.leed {
  font-size: 18px;
  line-height: 1.6;
}
p {
  margin-bottom: 10px;
}
small {
  font-size: 10px;
}
a {
  color: #34495e;
  text-decoration: none;
}
a:hover {
  color: #25354a !important;
}
a:active {
  color: #25354a !important;
}
a:visited {
  color: #25354a !important;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
  color: #34495e;
}
h1 a:active,
h2 a:active,
h3 a:active,
h4 a:active,
h5 a:active,
h6 a:active {
  color: #25354a !important;
}
h1 a:visited,
h2 a:visited,
h3 a:visited,
h4 a:visited,
h5 a:visited,
h6 a:visited {
  color: #25354a !important;
}
/* Pre-Formatted Text */
p.pre {
  font-family: Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace;
}
/* Highlighted Text */
p.highlight {
  background-color: #1abc9c;
  color: #ffffff;
  display: inline-block;
}
/* Blockquotes */
p.blockquote {
  padding-left: 50px;
  border-left: 2px solid #cacbcc;
}
/* Quote Citations */
span.cite {
  color: #cacbcc;
  font-weight: bold;
}
/* Data Tables */
table > thead.dataHeading > tr > th {
  border: 1px solid #cacbcc;
  padding: 10px;
  width: 10%;
}
table > tbody.dataTable > tr > td {
  border: 1px solid #cacbcc;
  padding: 10px;
  width: 10%;
}
/* Buttons */
table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: visible;
}
table.button td,
table.tiny-button td,
table.small-button td,
table.medium-button td,
table.large-button td {
  display: block;
  width: auto !important;
  text-align: center;
  background: #3498db;
  border: 1px solid #3388c7;
  color: #ffffff;
  padding: 8px 0;
}
table.tiny-button td {
  padding: 2px 0 4px;
}
table.small-button td {
  padding: 7px 0 7px;
}
table.medium-button td {
  padding: 10px 0 10px;
}
table.large-button td {
  padding: 17px 0 18px;
}
table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  font-weight: bold;
  text-decoration: none;
  font-family: Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
}
table.tiny-button td a {
  font-size: 10px;
  font-weight: normal;
}
table.small-button td a {
  font-size: 12px;
}
table.medium-button td a {
  font-size: 16px;
}
table.large-button td a {
  font-size: 18px;
}
table.button:hover td,
table.button:visited td,
table.button:active td {
  background: #3388c7 !important;
}
table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #ffffff !important;
}
table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
  background: #3388c7 !important;
}
table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important;
}
table.secondary td {
  background: #34495e;
  border-color: #25354a;
  color: #ffffff;
}
table.secondary td a {
  color: #ffffff;
}
table.secondary:hover td {
  background: #25354a !important;
  color: #ffffff;
}
table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #ffffff !important;
}
table.success td {
  background: #1abc9c;
  border-color: #1aa88a;
  color: #ffffff;
}
table.success td a {
  color: #ffffff;
}
table.success:hover td {
  background: #1aa88a !important;
  color: #ffffff;
}
table.success:hover td a,
table.success td a:visited,
table.success:active td a {
  color: #ffffff !important;
}
table.alert td {
  background: #e74c3c;
  border-color: #d34b3b;
  color: #ffffff;
}
table.alert td a {
  color: #ffffff;
}
table.alert:hover td {
  background: #d34b3b !important;
  color: #ffffff;
}
table.alert:hover td a,
table.alert td a:visited,
table.alert:active td a {
  color: #ffffff !important;
}
table.radius td {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
table.round td {
  -webkit-border-radius: 400px;
  -moz-border-radius: 400px;
  border-radius: 400px;
}
/* Panels */
.panel {
  background: #f2f4f5;
  border: 1px solid #e3e4e5;
  padding: 10px !important;
}
/* Alignment & Visibility Classes */
table.center,
td.center {
  text-align: center;
}
td.center > p,
td.center > h1,
td.center > h2,
td.center > h3,
td.center > h4,
td.center > h5,
td.center > h6 {
  text-align: center;
}
p.center,
h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}
span.center {
  display: block;
  width: 100%;
  text-align: center;
}
img.center {
  margin: 0 auto;
  float: none;
}
img.spacer {
  margin-bottom: 10px;
}
.show-for-small,
.hide-for-desktop {
  display: none;
}
.hide-for-small,
.show-for-desktop {
  display: inherit;
}
/*  Media Queries */
@media only screen and (max-width: 600px) {
  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }
  table[class="body"] center {
    min-width: 0 !important;
  }
  table[class="body"] .container {
    width: 90% !important;
  }
  table[class="body"] .row {
    width: 100% !important;
    display: block !important;
  }
  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }
  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0 !important;
    padding-left: 0 !important;
    display: block !important;
  }
  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }
  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }
  table[class="body"] .columns td.one,
  table[class="body"] .column td.one {
    width: 8.333333% !important;
  }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two {
    width: 16.666666% !important;
  }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three {
    width: 25% !important;
  }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four {
    width: 33.333333% !important;
  }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five {
    width: 41.666666% !important;
  }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six {
    width: 50% !important;
  }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven {
    width: 58.333333% !important;
  }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight {
    width: 66.666666% !important;
  }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine {
    width: 75% !important;
  }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten {
    width: 83.333333% !important;
  }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven {
    width: 91.666666% !important;
  }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve {
    width: 100% !important;
  }
  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }
  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }
  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 10px !important;
  }
  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 10px !important;
  }
  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }
  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
  table[class="container"] .block-grid td {
    width: 95% !important;
  }
}
        .block1 {
            background: #80c2ee;
            color: #ffffff;
        }
        .block2 {
            background: #3498db;
            color: #ffffff;
        }
        .block3 {
            background: #2980b9;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <table class="body">
        <tr>
            <td class="center" align="center" valign="top">
            <center>
            <table class="container">
                <tr>
                    <td>

                        <table class="row">
                            <tr>
                                <td class="wrapper last">
                                    <table class="twelve columns">
                                        <tr>
                                            <td class="text-pad">
                                                <h1>Allure Hair & Beauty</h1>
                                                <h6>Hi $name, Thank you for getting in touch with us. We will get in touch shortly.</h6>
                                                <hr>
                                            </td>
                                            <td class="expander"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

         

            </center>
            </td>
        </tr>
    </table>
</body>
</html>';

$headers = "From: noreply@allurestudio.co.za\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;  

    exit(json_encode($response));
}



function prefix_ajax_add_foobar() {
    // Handle request then generate response using WP_Ajax_Response

//$to = array('info@allurestudio.co.za');
	// If you want to send to several emails just add to the array like below
	$to = array( 'info@allurestudio.co.za', 'absmugz09@gmail.com' );
	$subject = 'Email subject title';
	
	// This is the way to transfer the form $_POST values to the email template
	$postdata = http_build_query( $_POST );
	$opts = array( 'http' =>
		array(
			'method' => 'POST',
			'header' => 'Content-type: application/x-www-form-urlencoded',
			'content' => $postdata
		)
	);
	$content = stream_context_create( $opts );
	
	// Load the email template and create the email content
	$message = file_get_contents(get_stylesheet_directory_uri() . '/email-template/contact-form.php', false, $content );
	
	
	
	
	// Set the email header which contains the forms fullname and the email address
	$headers = 'From: ' . trim( $_POST[ 'firstName' ] ) . ' <' . trim( $_POST[ 'email' ] ) . '>' . "\r\n";
	
	// Now loop through the $to email accounts
	// If you don't do this it will send the email as a group send (i.e. each email account will see all the other email accounts)
	foreach ( $to as $email_address ) {
		wp_mail( $email_address, $subject, $message, $headers );
	}
	
	// return the value of 1 to show it has been successful
	// The form needs to return this value to confirm the email has been sent
	echo '1';
	
    // Don't forget to stop execution afterward.
    wp_die();
}







