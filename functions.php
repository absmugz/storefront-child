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

require_once('mandrill-api-php/src/Mandrill.php');



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
add_action( 'wp_ajax_custom_action', 'prefix_ajax_custom_action' );

function prefix_ajax_custom_action() {
    // Handle request then generate response using WP_Ajax_Response
  $name = $_POST['firstName'];
  $email = $_POST['email'];
  $form_message = $_POST['message'];

//$mandrill = new Mandrill('GoiHkVVqZH06bKqZ6Enpmg');


$mandrill = new Mandrill('GoiHkVVqZH06bKqZ6Enpmg');

$message = array(
    'subject' => 'Allure Hair & Beauty contact request',
    'from_email' => 'info@allurestudio.co.za',
    'to' => array(array('email' => $email, 'name' => $name)),
        'headers' => array('Reply-To' => 'info@allurestudio.co.za'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => 'info@allurestudio.co.za',
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => 'mailchimp',
    
    
    
    'merge_vars' => array(array(
        'rcpt' => $email,
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => $name),
            array(
                'name' => 'MESSAGE',
                'content' => $form_message)
    )
    )));

$template_name = 'contact-form';



$response = $mandrill->messages->sendTemplate($template_name, $template_content, $message);
//print_r($response);
    
}


//Appointment form


add_action( 'wp_ajax_custom_action_appointment', 'custom_action_appointment' );


function custom_action_appointment() {

    // Handle request then generate response using WP_Ajax_Response
    


$name = $_POST['firstName'];
  $email = $_POST['email'];
$date = $_POST['startdate'];
  $time = $_POST['guiest_id1'];
  $style = $_POST['style'];
  $stylist = $_POST['stylist'];
  

  $notes = $_POST['notes'];

//$mandrill = new Mandrill('GoiHkVVqZH06bKqZ6Enpmg');


$mandrill = new Mandrill('GoiHkVVqZH06bKqZ6Enpmg');

$message = array(
    'subject' => 'Allure Hair & Beauty appointment',
    'from_email' => 'info@allurestudio.co.za',
    'to' => array(array('email' => $email, 'name' => $name)),
        'headers' => array('Reply-To' => 'info@allurestudio.co.za'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => 'info@allurestudio.co.za',
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => 'mailchimp',
    
    
    
    'merge_vars' => array(array(
        'rcpt' => $email,
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => $name),
            array(
                'name' => 'DATE',
                'content' => $date),
                array(
                'name' => 'TIME',
                'content' => $time),
                array(
                'name' => 'STYLE',
                'content' => $style),
                array(
                'name' => 'STYLIST',
                'content' => $stylist),
                array(
                'name' => 'NOTES',
                'content' => $notes)
    )
    )));

$template_name = 'appointment-confirmation';

$response = $mandrill->messages->sendTemplate($template_name, $template_content, $message);

	wp_die(); // this is required to terminate immediately and return a proper response
}




