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
	wp_enqueue_style('jquery-ui', get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.css');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/assets/plugins/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('select_option1', get_stylesheet_directory_uri().'/assets/plugins/selectbox/select_option1.css');
	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.min.css');
	wp_enqueue_style('fancybox', get_stylesheet_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.pack.css');
	wp_enqueue_style('isotope', get_stylesheet_directory_uri().'/assets/plugins/isotope/isotope.min.css');
	wp_enqueue_style('datepicker', get_stylesheet_directory_uri().'/assets/plugins/datepicker/datepicker.min.css');
	wp_enqueue_style('bootstrapthumbnail', get_stylesheet_directory_uri().'/assets/plugins/bootstrapthumbnail/bootstrap-thumbnail.css');
	
	wp_enqueue_style('style', get_stylesheet_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('default', get_stylesheet_directory_uri().'/assets/css/default.css');
	

	
	// enqueue script
	wp_enqueue_script('jquery', get_stylesheet_directory_uri() .'/assets/js/jquery.min.js');
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.min.js');
	

	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.js');
	wp_enqueue_script('selectbox', get_stylesheet_directory_uri().'/assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js');
	wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.min.js');
	wp_enqueue_script('fancybox', get_stylesheet_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.pack.js');
	wp_enqueue_script('isotope', get_stylesheet_directory_uri().'/assets/plugins/isotope/isotope.min.js');
	wp_enqueue_script('isotope-triger', get_stylesheet_directory_uri().'/assets/plugins/isotope/isotope-triger.min.js');
	wp_enqueue_script('bootstrap-datepicker', get_stylesheet_directory_uri().'/assets/plugins/datepicker/bootstrap-datepicker.min.js');
	wp_enqueue_script('syotimer', get_stylesheet_directory_uri().'/assets/plugins/syotimer/jquery.syotimer.min.js');
	wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js');


  
 
  
  
	
}
add_action('wp_enqueue_scripts', 'allure_scripts');

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');


//Remove the search box and storefront site branding from the header of WooThemes Storefront theme

function remove_sf_actions() {

	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	remove_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
	

	

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
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="index.html">Home</a>
              </li>
              <li class=" dropdown singleDrop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="service.html">Services</a></li>
                  <li><a href="single-service.html">Single Services</a></li>
                </ul>
              </li>
              <li class=" dropdown megaDropMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Store</a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li><a href="product-right-sidebar.html">Product Right Sidebar</a></li>
                      <li><a href="product-left-sidebar.html">Product Left Sidebar</a></li>
                      <li><a href="product-3col.html">Product 3 Col</a></li>
                      <li><a href="product-4col.html">Product 4 Col</a></li>
                      <li><a href="single-product.html">Single product</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li><a href="user-dashboard.html">User Dashboard</a></li>
                      <li><a href="user-profile.html">User Profile</a></li>
                      <li><a href="address.html">Address</a></li>
                      <li><a href="all-order.html">All Order</a></li>
                      <li><a href="wishlist.html">Wishlist</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li><a href="success.html">Confirmation</a></li>
                      <li><a href="pricing.html">Price table</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12 mega-img">
                    <a href="#"><img src="http://placehold.it/326x218" alt="logo"></a>
                  </li>
                </ul>
              </li>
              <li class=" dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team</a>
                    <ul class="dropdown-menu">
                      <li><a href="member.html">Our Team</a></li>
                      <li><a href="single-member-profile.html">Single Team</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                    <ul class="dropdown-menu">
                      <li><a href="gallery-v1.html">Gallery 3 Col</a></li>
                      <li><a href="gallery-v2.html">Gallery 4 Col</a></li>
                    </ul>
                  </li>
                  <li><a href="login-signup.html">Login SignUp</a></li>
                  <li><a href="404.html">404 Not Found</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
              </li>
              <li class=" dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                      <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                      <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog</a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                      <li><a href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                      <li><a href="blog-single-fullwidth.html">Fullwidth</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class=" dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Components</a>
                <ul class="dropdown-menu">
                  <li><a href="tabs-pagination.html">Tab & Pagination</a></li>
                  <li><a href="accrodion.html">Accrodions</a></li>
                  <li><a href="buttons-alerts.html">Buttons & Alerts</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <!-- Cart button -->
          <div class="cart_btn">
            <a href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span class="badge">0</span></a>
          </div>

        </div>
      </nav><!-- #site-navigation -->
		<?php
	}
	
	
	



