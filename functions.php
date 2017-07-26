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
$to = 'info@allurestudio.co.za,absmugz09@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
//$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

$email_body = file_get_contents(get_stylesheet_directory_uri() . '/email-template/contact-form.php');


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







