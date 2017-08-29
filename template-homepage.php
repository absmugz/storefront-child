<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>


<!-- MAIN SLIDER -->
    <section class="main-slider" data-loop="true" data-autoplay="true" data-interval="7000">
      <div class="inner">

        <!-- Slide One -->
       <div class="slide slideResize slide3" style="background-image: url(http://allurestudio.co.za/revamp/wp-content/themes/storefront-child/assets/img/home/home-slider-1.jpg);">
          <div class="container">
            <div class="common-inner slide-inner3">
            
              <span class="h1 from-bottom">Perfection</span><br>
              <span class="h4 from-bottom">Life isn't perfect, but your hair can be</span><br>
              <a href="#pricelist" class="btn btn-primary first-btn waves-effect waves-light scale-up">More Details</a>
            </div>
          </div>
        </div>

        <!-- Slide Two -->
          <div class="slide slideResize slide3" style="background-image: url(http://allurestudio.co.za/revamp/wp-content/themes/storefront-child/assets/img/home/home-slider-2.jpg);">
          <div class="container">
            <div class="common-inner slide-inner3">
          
              <span class="h1 from-bottom">Tender Loving Care</span><br>
              <span class="h4 from-bottom">Invest in your hair, you wear it everyday</span><br>
              <a href="#" class="btn btn-primary first-btn waves-effect waves-light scale-up" data-toggle="modal" data-target="#appoinmentModal">Make An Appoinment</a>
            </div>
          </div>
        </div>

        <!-- Slide Three -->
        <div class="slide slideResize slide3" style="background-image: url(http://allurestudio.co.za/revamp/wp-content/themes/storefront-child/assets/img/home/home-slider-3.jpg);">
          <div class="container">
            <div class="common-inner slide-inner3">
             
              <span class="h1 from-bottom">Helfie</span><br>
              <span class="h4 from-bottom">Your hair is 90 % of your selfie</span><br>
               <a href="#pricelist" class="btn btn-primary first-btn waves-effect waves-light scale-up">More Details</a>
            </div>
          </div>
        </div>

        <!-- Slide Four -->
          <div class="slide slideResize slide3" style="background-image: url(http://allurestudio.co.za/revamp/wp-content/themes/storefront-child/assets/img/home/home-slider-4.jpg);">
          <div class="container">
            <div class="common-inner slide-inner3">
            
              <span class="h1 from-bottom">Beauty is about enhancing what you have.</span><br>
              <span class="h4 from-bottom">Let yourself shine through!!</span><br>
               <a href="#" class="btn btn-primary first-btn waves-effect waves-light scale-up" data-toggle="modal" data-target="#appoinmentModal">Make An Appoinment</a>
          
            </div>
          </div>
        </div>

      </div>
    </section>



    

    

<!-- ABOUT SECTION -->
    <section id="about" class="container-fluid clearfix aboutSection patternbg">
      <div class="aboutInner">
        <div class="sepcialContainer">
          <div class="row">
            <div class="col-sm-6 col-xs-12 rightPadding">
              <div class="imagebox ">
                <!-- <img src="http://placehold.it/540x400" alt="Image About" class="img-responsive">-->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/540x400.png" alt="Allure hair & beauty salon" class="img-responsive">
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="aboutInfo">
                <h2>Allure hair & beauty salon</h2>
                <h3>Allure is an upmarket hair & beauty salon in Claremont, Cape Town.</h3>
                <p>We believe that EVERY woman is a creation of absolute beauty. Therefore, we provide a service tailored to every woman's unique needs. 
                We invite you to experience an elevated CRAFT of hairdressing from our knowledgeable and passionate stylists.
                SUPERIOR and PROFESSIONAL service, to ensure 100 % customer satisfaction. CURRENT and TRENDY styles to transform your image to where you want it to be. 
                A VIBEY, CLASSY and FRIENDLY environment.We offer a convenient secure location, 
                friendly hostess and stylists, refreshments, aircon, entertainment, free WiFi, restroom and a mystery gift every time you visit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



 <?php //start by fetching the terms for the animal_cat taxonomy
$terms = get_terms( 'service', array(
    //'orderby'    => 'count',
    'order' => 'DESC',
    'hide_empty' => 0
) );


?>

<!-- VARIETY SECTION -->

    <section class="clearfix varietySection" id="pricelist">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Pricelist</span>our affordable prices</h2>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="tabbable tabTop">
               <?php
                echo '<ul class="nav nav-tabs">';
                foreach($terms as $term){
                  
                   // Define the query
                    $args = array(
                        'post_type' => 'style',
                        'style' => $term->slug
                    );
                    $query = new WP_Query( $args );
    
                	 
                	 echo '<li><a href="'."#". $term->slug . '" data-toggle="tab"><span>' . $term->name . '</span></a></li>';
                      
                  }
 
  echo '</ul>';
  
  ?>
              <div class="tab-content">
                
<!-- weaves-wigs -->
                <div class="tab-pane active" id="weaves-wigs">
                  <div class="tabbable tabs-left row">
                    <!-- <ul class="nav nav-tabs col-sm-4 col-xs-12">-->
                      
                      <?php 
                      
                      // args
                      $args = array(
                          'posts_per_page'=>-1, 
                          'numberposts'=>-1,
                          'post_type' => 'style',          // name of post type.
                          
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'service',   // taxonomy name
                                  'field' => 'weaves-wigs',           // term_id, slug or name
                                  'terms' => 39,                  // term id, term slug or term name
                            
                              )
                          )
                      );
                      
                      
                      // query
                      $the_query = new WP_Query( $args );
                      
                      ?>
                      <?php if( $the_query->have_posts() ): ?>
                       <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      		<li><a href="#" data-toggle="tab"><?php the_title(); ?> <span>R<?php the_field('price'); ?></span></a></li>
                      	<?php endwhile; ?>
                      	</ul>
                        <?php else: ?>
                        
                        	
                            <!-- The very first "if" tested to see if there were any Posts to -->
                            <!-- display.  This "else" part tells what do if there weren't any. -->
                           
                           
                            <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	
                      		<li><a href="#" data-toggle="tab">Coming soon.</span></a></li>
                      	
                      	</ul>
                      <?php endif; ?>
                      
                      <?php wp_reset_query();	 
                      // Restore global post data stomped by the_post().
                      ?>
                     
                    <div class="tab-content col-sm-8 col-xs-12">
                      <div class="tab-pane active">
                        <div class="varietyContent">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/pricelist-weaves.jpg" alt="Weaves & Wigs" class="img-responsive">
                         
                          <h3>Weaves & Wigs</h3>
      
                          <a href="#" class="btn btn-primary first-btn" data-toggle="modal" data-target="#appoinmentModal">make An Appoinment</a>
                        </div>
                      </div>
    
                    </div>
                  </div>
                </div>
<!-- weaves-wigs -->


<!-- singles -->
                <div class="tab-pane" id="singles">
                  <div class="tabbable tabs-left row">
                    
                    <!-- <ul class="nav nav-tabs col-sm-4 col-xs-12">-->
                      
                      <?php 
                      
                      // args
                      $args = array(
                          'posts_per_page'=>-1, 
                          'numberposts'=>-1,
                          'post_type' => 'style',          // name of post type.
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'service',   // taxonomy name
                                  'field' => 'singles',           // term_id, slug or name
                                  'terms' => 41,                  // term id, term slug or term name
                            
                              )
                          )
                      );
                      
                      
                      // query
                      $the_query = new WP_Query( $args );
                      
                      ?>
                      <?php if( $the_query->have_posts() ): ?>
                       <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      		<li><a href="#" data-toggle="tab"><?php the_title(); ?> <span>R<?php the_field('price'); ?></span></a></li>
                      	<?php endwhile; ?>
                      	</ul>
                        <?php else: ?>
                        
                        	
                            <!-- The very first "if" tested to see if there were any Posts to -->
                            <!-- display.  This "else" part tells what do if there weren't any. -->
                             <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	
                      		<li><a href="#" data-toggle="tab">Coming soon.</span></a></li>
                      	
                      	</ul>
                      <?php endif; ?>
                      
                      <?php wp_reset_query();	 
                      // Restore global post data stomped by the_post().
                      ?>
                    
                    <div class="tab-content col-sm-8 col-xs-12">
                      <div class="tab-pane active">
                        <div class="varietyContent">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/pricelist-singles.jpg" alt="Singles" class="img-responsive">
                          
                          <h3>Singles</h3>
                    
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>

                     
                    </div>
                  </div>
                </div>
<!-- singles -->
<!-- hair -->
                <div class="tab-pane" id="hair">
                  <div class="tabbable tabs-left row">
                    
                       <?php 
                   
                      // args
                      $args = array(
                          'posts_per_page'=>-1, 
                          'numberposts'=>-1,
                          'post_type' => 'style',          // name of post type.
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'service',   // taxonomy name
                                  'field' => 'hair',           // term_id, slug or name
                                  'terms' => 36,                  // term id, term slug or term name
                            
                              )
                          )
                      );
                      
                      
                      // query
                      $the_query = new WP_Query( $args );
                      
                      ?>
                      <?php if( $the_query->have_posts() ): ?>
                       <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      		<li><a href="#" data-toggle="tab"><?php the_title(); ?> <span>R<?php the_field('price'); ?></span></a></li>
                      	<?php endwhile; ?>
                      	</ul>
                        <?php else: ?>
                        
                        	
                            <!-- The very first "if" tested to see if there were any Posts to -->
                            <!-- display.  This "else" part tells what do if there weren't any. -->
                             <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	
                      		<li><a href="#" data-toggle="tab">Coming soon.</span></a></li>
                      	
                      	</ul>
                      <?php endif; ?>
                      
                      <?php wp_reset_query();	 
                      // Restore global post data stomped by the_post().
                      ?>
                    
                    <div class="tab-content col-sm-8 col-xs-12">
                      <div class="tab-pane active">
                        <div class="varietyContent">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/pricelist-hair.jpg" alt="Hair, Haircuts & Other" class="img-responsive">
                          
                          <h3>Hair, Haircuts & Other</h3>
                        
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
<!-- hair -->
<!-- dreadlocks-faux-locs-marley -->
                <div class="tab-pane" id="dreadlocks">
                  <div class="tabbable tabs-left row">
                    
                    <?php 
                 
                      // args
                      $args = array(
                          'posts_per_page'=>-1, 
                          'numberposts'=>-1,
                          'post_type' => 'style',          // name of post type.
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'service',   // taxonomy name
                                  'field' => 'dreadlocks',           // term_id, slug or name
                                  'terms' => 37,                  // term id, term slug or term name
                            
                              )
                          )
                      );
                      
                      
                      // query
                      $the_query = new WP_Query( $args );
                      
                      ?>
                      <?php if( $the_query->have_posts() ): ?>
                       <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      		<li><a href="#" data-toggle="tab"><?php the_title(); ?> <span>R<?php the_field('price'); ?></span></a></li>
                      	<?php endwhile; ?>
                      	</ul>
                        <?php else: ?>
                        
                        	
                            <!-- The very first "if" tested to see if there were any Posts to -->
                            <!-- display.  This "else" part tells what do if there weren't any. -->
                            <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	
                      		<li><a href="#" data-toggle="tab">Coming soon.</span></a></li>
                      	
                      	</ul>
                        
                      <?php endif; ?>
                      
                      <?php wp_reset_query();	 
                      // Restore global post data stomped by the_post().
                      ?>
                    
                    
                    
                    <div class="tab-content col-sm-8 col-xs-12">
                      <div class="tab-pane active">
                        <div class="varietyContent">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/pricelist-dreadlocks.jpg" alt="Dreadlocks or Faux Locs or Marley Hair" class="img-responsive">
                          <h3>Dreadlocks / Faux Locs / marley</h3>
                          
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
<!-- dreadlocks-faux-locs-marley -->
<!-- cornrows -->
                <div class="tab-pane" id="cornrows">
                  <div class="tabbable tabs-left row">
                    
                   <?php 
                
                      // args
                      $args = array(
                          'posts_per_page'=>-1, 
                          'numberposts'=>-1,
                          'post_type' => 'style',          // name of post type.
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'service',   // taxonomy name
                                  'field' => 'cornrows',           // term_id, slug or name
                                  'terms' => 40,                  // term id, term slug or term name
                            
                              )
                          )
                      );
                      
                      
                      // query
                      $the_query = new WP_Query( $args );
                      
                      ?>
                      <?php if( $the_query->have_posts() ): ?>
                       <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      		<li><a href="#" data-toggle="tab"><?php the_title(); ?> <span>R<?php the_field('price'); ?></span></a></li>
                      	<?php endwhile; ?>
                      	</ul>
                        <?php else: ?>
                        
                        	
                            <!-- The very first "if" tested to see if there were any Posts to -->
                            <!-- display.  This "else" part tells what do if there weren't any. -->
                            <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	
                      		<li><a href="#" data-toggle="tab">Coming soon.</span></a></li>
                      	
                      	</ul>
                      <?php endif; ?>
                      
                      <?php wp_reset_query();	 
                      // Restore global post data stomped by the_post().
                      ?>
                    
                    
                    <div class="tab-content col-sm-8 col-xs-12">
                      <div class="tab-pane active">
                        <div class="varietyContent">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/pricelist-cornrows.jpg" alt="Cornrows" class="img-responsive">
                          <h3>Cornrows</h3>
                       
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
<!-- cornrows -->

<!-- nails -->
        <div class="tab-pane" id="nails">
                  <div class="tabbable tabs-left row">
                    
                    <?php 
                 
                      // args
                      $args = array(
                          'posts_per_page'=>-1, 
                          'numberposts'=>-1,
                          'post_type' => 'style',          // name of post type.
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'service',   // taxonomy name
                                  'field' => 'nails',           // term_id, slug or name
                                  'terms' => 42,                  // term id, term slug or term name
                            
                              )
                          )
                      );
                      
                      
                      // query
                      $the_query = new WP_Query( $args );
                      
                      ?>
                      <?php if( $the_query->have_posts() ): ?>
                       <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      		<li><a href="#" data-toggle="tab"><?php the_title(); ?> <span>R<?php the_field('price'); ?></span></a></li>
                      	<?php endwhile; ?>
                      	</ul>
                        <?php else: ?>
                        
                        	
                            <!-- The very first "if" tested to see if there were any Posts to -->
                            <!-- display.  This "else" part tells what do if there weren't any. -->
                            <ul class="nav nav-tabs col-sm-4 col-xs-12">
                      	
                      		<li><a href="#" data-toggle="tab">Coming soon.</span></a></li>
                      	
                      	</ul>

                      <?php endif; ?>
                      
                      <?php wp_reset_query();	 
                      // Restore global post data stomped by the_post().
                      ?>
                    
                    
                    
                    <div class="tab-content col-sm-8 col-xs-12">
                      <div class="tab-pane active">
                        <div class="varietyContent">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/pricelist-nails.jpg" alt="Nails" class="img-responsive">
                          <h3>Nails</h3>
                       
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>      
<!-- nails -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



 
      


<!-- OFFERS SECTION 
    <section class="clearfix offersSection patternbg">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="offerContent">
              <img src="http://placehold.it/254x254" alt="Image Offer">
              <div class="offerMasking">
                <div class="offerTitle"><h4><a href="#">Skin Care</a></h4></div>
              </div>
              <div class="offerPrice"><h5>$25</h5></div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="offerContent">
              <img src="http://placehold.it/254x254" alt="Image Offer">
              <div class="offerMasking">
                <div class="offerTitle"><h4><a href="#">Body massage</a></h4></div>
              </div>
              <div class="offerPrice"><h5>$45</h5></div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="offerContent">
              <img src="http://placehold.it/254x254" alt="Image Offer">
              <div class="offerMasking">
                <div class="offerTitle"><h4><a href="">Nail Care</a></h4></div>
              </div>
              <div class="offerPrice"><h5>$65</h5></div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="offerContent">
              <img src="http://placehold.it/254x254" alt="Image Offer">
              <div class="offerMasking">
                <div class="offerTitle"><h4><a href="#">beauty Care</a></h4></div>
              </div>
              <div class="offerPrice"><h5>$75</h5></div>
            </div>
          </div>
        </div>
      </div>
    </section>-->


    

<!-- REVIEW SECTION 
    <section class="clearfix reviewSection patternbg">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Testimonials </span>Customer reviews</h2>
        </div>
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="row">
              <div class="col-sm-9 col-sm-offset-3 col-xs-12 reviewInner">
                <div class="reviewImage hidden-xs">
                  <img src="http://placehold.it/160x160" alt="Image review" class="img-responsive">
                </div>
                <div class="reviewInfo">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                    <h3>Linda Smith</h3>
                    <h4>Founder, Angel Beauty Spa</h4>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="row">
              <div class="col-sm-9 col-sm-offset-3 col-xs-12 reviewInner">
                <div class="reviewImage hidden-xs">
                  <img src="http://placehold.it/160x160" alt="Image review" class="img-responsive">
                </div>
                <div class="reviewInfo">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                    <h3>Linda Smith</h3>
                    <h4>Founder, Angel Beauty Spa</h4>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
-->

<!-- HOME GALLERY SECTION -->
    <section class="clearfix homeGalleryTitle" id="gallery">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Explore </span>Our gallery</h2>
        </div>
      </div>
    </section>
    
    <section class="container-fluid clearfix homeGallery">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="filter-container isotopeFilters">
            <ul class="list-inline filter">
              <li class="active"><a href="#" data-filter="*">all item</a></li>
              <li><a href="#" data-filter=".weaves-wigs">Weaves & Wigs</a></li>
              <li><a href="#" data-filter=".singles">Singles</a></li>
              <li><a href="#" data-filter=".cornrows">Cornrows</a></li>
              <li><a href="#" data-filter=".dreadlocks">Dreadlocks / Faux locs / Marley</a></li>
              <li><a href="#" data-filter=".hair">Hair & Hair Cuts</a></li>
              <li><a href="#" data-filter=".nails">Nails</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="row isotopeContainer" id="container">
        <div class="col-sm-3 isotopeSelector weaves-wigs">
          <article class="">
            <figure>
              
             <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery-weaves.jpg" alt="Weaves & Wigs" class="img-responsive">
          
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                
               
                <a data-fresco-group='weaves-wigs' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/weaves/1.jpg">
               
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Weaves & Wigs</h5>
                  </div>
                </a>
                <a data-fresco-group='weaves-wigs' class="fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/weaves/2.jpg"></a>
                <a data-fresco-group='weaves-wigs' class="fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/weaves/3.jpg"></a>
                <a data-fresco-group='weaves-wigs' class="fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/weaves/4.jpg"></a>
                <a data-fresco-group='weaves-wigs' class="fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/weaves/5.jpg"></a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector singles">
          <article class="">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery-singles.jpg" alt="Singles" class="img-responsive">
             
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
               
                  <a data-fresco-group='singles' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/singles/1.jpg">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Singles</h5>
                  </div>
                </a>
                <a data-fresco-group='singles' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/singles/2.jpg"></a>
                <a data-fresco-group='singles' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/singles/3.jpg"></a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector cornrows">
          <article class="">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery-cornrows.jpg" alt="Cornrows" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                 <a data-fresco-group='cornrows' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/cornrows/1.jpg">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Cornrows</h5>
                  </div>
                </a>
                 <a data-fresco-group='cornrows' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/cornrows/2.jpg"></a>
                  <a data-fresco-group='cornrows' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/cornrows/3.jpg"></a>
                   <a data-fresco-group='cornrows' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/cornrows/4.jpg"></a>
                    <a data-fresco-group='cornrows' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/cornrows/5.jpg"></a>
                     <a data-fresco-group='cornrows' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/cornrows/6.jpg"></a>
                      <a data-fresco-group='cornrows' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/cornrows/7.jpg"></a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector dreadlocks">
          <article class="">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery-dreadlocks.jpg" alt="Dreadlocks / Faux locs / Marley" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a data-fresco-group='dreadlocks' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/dreadlocks/1.jpg">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Dreadlocks / Faux locs / Marley</h5>
                  </div>
                </a>
                 <a data-fresco-group='dreadlocks' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/dreadlocks/2.jpg"></a>
                 <a data-fresco-group='dreadlocks' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/dreadlocks/3.jpg"></a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector hair">
          <article class="">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery-hair.jpg" alt="Hair & Hair Cuts" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a data-fresco-group='hair' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/hair/1.jpg">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Hair & Hair Cuts</h5>
                  </div>
                </a>
                 <a data-fresco-group='hair' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/hair/2.jpg"></a>
                  <a data-fresco-group='hair' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/hair/3.jpg"></a>
                   <a data-fresco-group='hair' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/hair/4.jpg"></a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector nails">
          <article class="">
            <figure>
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery-nails.jpg" alt="Hair & Hair Cuts" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a data-fresco-group='nails' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/nails/1.jpg">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Nails</h5>
                  </div>
                </a>
                 
                  <a data-fresco-group='nails' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/nails/2.jpg"></a>
                  <a data-fresco-group='nails' class="fancybox-pop fresco" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/gallery/nails/3.jpg"></a>
              </div>
            </figure>
          </article>
        </div>

       
       

      </div>
    </section>

<!-- CALL TO ACTION SECTION 
    <section class="clearfix callAction">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-sm-offset-1 col-xs-12">
            <div class="callInfo">
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.</p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <a href="pricing.html" class="btn btn-primary first-btn callBtn">view packages</a>
          </div>
        </div>
      </div>
    </section>-->

<!-- EXPERT SECTION -->


<!-- PRICING SECTION -->
    

<!-- CONTACT US SECTION -->
    <section class="clearfix contactSection" id="contact">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Hurry </span>Contact us</h2>
        </div>
        
        
           <div class="row">
         <div class="col-md-12 text-center">
          <div id="contactsuccess"></div></div>
          </div>
                            
                            
        <div class="row">
          <div class="col-md-8 col-sm-7 col-xs-12">
            <div class="contactTitle">
              <h3>Get in touch</h3>
            </div>
      <div class="contactForm">
             
                
                  <form id="contactForm" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                  
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name" name="firstName">
        
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email" name="email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber" placeholder="Your Phone">
                </div>
                <div class="form-group">
    
                  <textarea class="form-control" name="message" rows="7" placeholder="Your Message"></textarea>
                </div>
                
                <!-- Hidden value added for WordPress ajax security and to validate function name -->
				        <input type="hidden" name="action" value="custom_action">
                  
                <div class="form-group">
                  <button type="submit" class="btn btn-primary first-btn">send Message</button>
                  
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-5 col-xs-12">
            <div class="holdingInfo patternbg">
        
              
              <p>We would love to hear from you!!</p>
              <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Stanhope Building | Shop 2 | Cnr Old Stanhope & Main Rds | Claremont</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>081 332 4498 <br>021 674 0403</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@allurestudio.co.za">info@allurestudio.co.za</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- PARTNER LOGO SECTION -->
    <section class="clearfix brandArea patternbg">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel partnersLogoSlider">
              <div class="slide">
                <div class="partnersLogo clearfix">
                  
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/ladine-logo.png" alt="Ladine">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/mizani-logo.png" alt="Mizani - True Textures">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/dark-and-lovely-logo.png" alt="Dark and Lovely">  
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                 
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/tresemme-logo.png" alt="Tresemme">  
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/cantu-logo.png" alt="Cantu">  
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/head-and-shoulders-logo.png" alt="head and shoulders">  
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/maroza-logo.png" alt="Maroza"> 
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/caivil-for-kids-logo.png" alt="Caivil for kids"> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  
   <!-- APPOINMENT MODAL -->
  <div id="appoinmentModal" class="modal fade modalCommon" role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <!-- MODAL CONTENT-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Appointment For Hair</h4>
        </div>
        <div class="modal-body">
          
            <div class="row">
         <div class="col-md-12 text-center">
          <div id="appointmentsuccess"></div></div>
          </div>
          
           
                   
  <form id="appointmentForm" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
            <div class="form-group categoryTitle">
              <h5>Service Date and Time</h5>
            </div>
             <div class="form-group dateSelect form-half form-left">
              
              <div class="input-group date" id="startdate"> 
    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
    <input type="text" class="form-control" value="" name="startdate">
 </div>
              
            </div>
            <div class="form-group timeSelect form-half form-right">
              <select name="guiest_id1" id="guiest_id1">
                <option value=""></option>
                <option value="8">8.00 AM</option>
                <option value="9">9.00 AM</option>
                <option value="10">10.00 AM</option>
                <option value="11">11.00 AM</option>
                <option value="12">12.00 AM</option>
                <option value="1">13.00 PM</option>
                <option value="2">14.00 PM</option>
                <option value="3">15.00 PM</option>
                <option value="4">16.00 PM</option>
                <option value="5">17.00 PM</option>
                <option value="6">18.00 PM</option>
              </select>
            </div>
            <div class="form-group categoryTitle">
              <h5>Personal info</h5>
            </div>
            <div class="form-group form-half form-left">
               <input type="text" class="form-control" name="firstName" placeholder="First name" />
            </div>
            <div class="form-group form-half form-right">
                <input type="text" class="form-control" name="email" placeholder="Your Email"/>
            </div>
            <div class="form-group form-half form-left">
               <select name="style" id="style">
                <option value=""></option>
            
                <option value="Weaves & wigs">Weaves & Wigs</option>
                <option value="Singles">Singles</option>
                <option value="Cornrows">Cornrows</option>
                <option value="Dreadlocks">Dreadlocks</option>
                <option value="Faux Locs">Faux Locs</option>
                <option value="Marley">Marley</option>
                <option value="Hair Cuts">Hair Cuts</option>
                <option value="Natural Hair">Natural Hair</option>
                <option value="Other">Other</option>
                <option value="Nails">Nails</option>
          
              </select>
             
            </div>
            <div class="form-group form-half form-right">
              <select name="stylist" id="stylist">
                <option value=""></option>
            


                <option value="Lilly">Lilly</option>
                <option value="Rachel">Rachel</option>
                <option value="Ntokozo">Lindsay</option>
                <option value="Ntokozo">Ntokozo</option>
                <option value="Jane">Jane</option>
                 <option value="Mamu">Mamu</option>
                 <option value="New customer">New customer, no one specific</option>
                 <option value="No one specific">No one specific</option>
                
          
              </select>
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Your Notes to us for your appointment" name="notes"></textarea>
            </div>
            
             <!-- Hidden value added for WordPress ajax security and to validate function name -->
				        <input type="hidden" name="action" value="custom_action_appointment">
				        
            <div class="form-group">
            <button type="submit" class="btn btn-primary first-btn">Book Now</button>
          </div>
          </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>






<?php
get_footer();
