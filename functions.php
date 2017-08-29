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

// Mandrill emails
require_once 'mandrill-api-php/src/Mandrill.php'; //Not required with Composer
$mandrill = new Mandrill('GoiHkVVqZH06bKqZ6Enpmg');


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
		<nav id="menuBar" class="navbar navbar-default lightHeader navbar-fixed-top" role="navigation">
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
                
                <a href="<?php bloginfo('url');?>/#about" class="scrolling">About us</a>
              </li>
              <!--<li>
                <a href="#services" class="scrolling">Services</a>
              </li>-->
              <li>
                <a href="<?php bloginfo('url');?>/#pricelist" class="scrolling">Pricelist</a>
              </li>
              <!--<li>
                <a href="#team" class="scrolling">Team</a>
              </li>-->
               <li>
                <a href="<?php bloginfo('url');?>/#gallery" class="scrolling">Gallery</a>
              </li>
              
               <li>
                <a href="<?php bloginfo('url');?>/#contact" class="scrolling">Contact Us</a>
              </li>
              
             
            
            
         
         
        </div>
      </nav><!-- #site-navigation -->
		<?php
	}
	
	
//Processing my forms

add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );
function custom_action() {
    if ( 
        ! isset( $_POST['name_of_nonce_field'] ) 
        || ! wp_verify_nonce( $_POST['name_of_nonce_field'], 'custom_action_nonce') 
    ) {
 
        exit('The form is not valid');
 
    }
 
    // ... Processing further
    
    //user posted variables
    
   
    
  $name = $_POST['firstName'];
  $email = $_POST['email'];
  $form_message = $_POST['message'];


$to = $email;
$subject = 'Contact confirmation';
$from = 'info@allurestudio.co.za';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'CC: '.$from."\r\n". 
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<img src="https://www.allurestudio.co.za/revamp/wp-content/themes/storefront-child/assets/img/logo.png" alt="Allure Hair & Beauty" />';
$message .= '<h1>Thank you for your contacting us.</h1><br>';
$message .= '<h6>We will get hold of you shortly, Here are your details below :</h6><br>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td>" . $form_message . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);
    
    
    
}

//Appointment form

add_action( 'wp_ajax_custom_action_appointment', 'custom_action_appointment' );
add_action( 'wp_ajax_nopriv_custom_action_appointment', 'custom_action_appointment' );
function custom_action_appointment() {
    if ( 
        ! isset( $_POST['name_of_nonce_field'] ) 
        || ! wp_verify_nonce( $_POST['name_of_nonce_field'], 'custom_action_appointment_nonce') 
    ) {
 
        exit('The form is not valid');
 
    }
 
    // ... Processing further
    
    //user posted variables
    
   


  $date = $_POST['startdate'];
  $time = $_POST['guiest_id1'];
  $style = $_POST['style'];
  $stylist = $_POST['stylist'];
  
  $name = $_POST['firstName'];
  $email = $_POST['email'];
  $notes = $_POST['notes'];


$to = $email;
$subject = 'Booking confirmation';
$from = 'info@allurestudio.co.za';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'CC: '.$from."\r\n". 
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<img src="https://www.allurestudio.co.za/revamp/wp-content/themes/storefront-child/assets/img/logo.png" alt="Allure Hair & Beauty" />';
$message .= '<h1>Thank you for your booking.</h1><br>';
$message .= '<h6>Here are your details below :</h6><br>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Date of Appointment:</strong> </td><td>" .  $date . "</td></tr>";
$message .= "<tr><td><strong>Time:</strong> </td><td>" . $time . "</td></tr>";
$message .= "<tr><td><strong>Style:</strong> </td><td>" . $style . "</td></tr>";
$message .= "<tr><td><strong>Stylist:</strong> </td><td>" . $stylist . "</td></tr>";
$message .= "<tr><td><strong>Notes:</strong> </td><td>" . $notes . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);
    
    
}





