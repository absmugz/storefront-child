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
        
        <div class="slide slideResize slide1" style="background-image: url(http://allurestudio.co.za/revamp/img/home/home-slider-1.jpg);">
          <div class="container">
            <div class="slide-inner1 common-inner">
              <span class="h1 from-bottom">luxury spa resort</span><br>
              <span class="h4 from-bottom">The real place of Mindfullness & Healthy body</span><br>
              <a href="#" class="btn btn-primary first-btn waves-effect waves-light scale-up">More Details</a>
            </div>
          </div>
        </div>

        <!-- Slide Two -->
        <div class="slide slideResize slide2" style="background-image: url(http://allurestudio.co.za/revamp/img/home/home-slider-2.jpg);">
          <div class="container">
            <div class="slide-inner2 common-inner">
              <span class="h1 from-bottom">luxury spa resort</span><br>
              <span class="h4 from-bottom">The real place of Mindfullness & Healthy body</span><br>
              <a href="#" class="btn btn-primary first-btn waves-effect waves-light scale-up">More Details</a>
            </div>
          </div>
        </div>

        <!-- Slide Three -->
        <div class="slide slideResize slide3" style="background-image: url(http://allurestudio.co.za/revamp/img/home/home-slider-3.jpg);">
          <div class="container">
            <div class="common-inner slide-inner3">
              <img src="img/favicon.png" alt="Logo Icon" class="img-responsive">
              <span class="h1 from-bottom">luxury spa resort</span><br>
              <span class="h4 from-bottom">The real place of Mindfullness & Healthy body</span><br>
              <a target="_blank" href="#" class="btn btn-primary first-btn waves-effect waves-light scale-up">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Slide Four -->
        <div class="slide slideResize slide4" style="background-image: url(http://allurestudio.co.za/revamp/img/home/home-slider-4.jpg);">
          <div class="container">
            <div class="common-inner slide-inner4">
              <span class="h1 from-bottom">luxury spa resort</span><br>
              <span class="h4 from-bottom">The real place of Mindfullness & Healthy body</span><br>
              <a href="#" class="btn btn-primary first-btn waves-effect waves-light scale-up">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </section>

    

    

<!-- ABOUT SECTION -->
    <section class="container-fluid clearfix aboutSection patternbg" id="about" >
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
    'orderby'    => 'count',
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
    
                	 echo '<li><a href="'."#". $term->name . '" data-toggle="tab"><span>' . $term->name . '</span></a></li>';
                      
                  }
 
  echo '</ul>';
  
  ?>
              <div class="tab-content">
                
                <!-- Tabbed content starts here -->
                
                  <!-- loop to create tabbed panels -->
                  
                                  <?php
               
                foreach($terms as $term){
                  
                   // Define the query
                    $args = array(
                        'post_type' => 'style',
                        'taxonomy' => $term->slug
                    );
                    $query = new WP_Query( $args );
    
                	 echo '<div class="tab-pane" id="' . $term->name . '">';
                	
                	
                  echo '<div class="tabbable tabs-left row"><ul class="nav nav-tabs col-sm-4 col-xs-12">';
                  
                  


                 
                     while ( $query->have_posts() ) : $query->the_post(); ?>
 
      
        
        <li>
            <a href="#" data-toggle="tab"><?php the_title(); ?><span>$25</span></a>
        </li>
         
        <?php endwhile;
                    
                    echo '</ul><div class="tab-content col-sm-8 col-xs-12">
                      <div class="tab-pane active" id="braidstwist">
                        <div class="varietyContent">
                          <img src="img/home/variety.jpg" alt="Image Variety" class="img-responsive">
                          <h3>Braids & Twist</h3>
                          <h4>$25.00 Per Head</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                          <a href="#" class="btn btn-primary first-btn" data-toggle="modal" data-target="#appoinmentModal">make An Appoinment</a>
                        </div>
                      </div>
                      <div class="tab-pane" id="haircolor">
                        <div class="varietyContent">
                          <img src="img/home/variety-2.jpg" alt="Image Variety" class="img-responsive">
                          <h3>Hair Color</h3>
                          <h4>$40.00 Per Head</h4>
                          <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      <div class="tab-pane" id="hairextension">
                        <div class="varietyContent">
                          <img src="img/home/variety-3.jpg" alt="Image Variety" class="img-responsive">
                          <h3>Hair Extension</h3>
                          <h4>$19.00 Per Head</h4>
                          <p>Amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      <div class="tab-pane" id="correctivecolor">
                        <div class="varietyContent">
                          <img src="img/home/variety-4.jpg" alt="Image Variety" class="img-responsive">
                          <h3>Corrective Color</h3>
                          <h4>$13.00 Per Head</h4>
                          <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      <div class="tab-pane" id="haircut">
                        <div class="varietyContent">
                          <img src="img/home/variety-5.jpg" alt="Image Variety" class="img-responsive">
                          <h3>Hair Cut</h3>
                          <h4>$48.00 Per Head</h4>
                          <p>Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      <div class="tab-pane" id="partialfoil">
                        <div class="varietyContent">
                          <img src="img/home/variety-6.jpg" alt="Image Variety" class="img-responsive">
                          <h3>Partial Foil</h3>
                          <h4>$10.00 Per Head</h4>
                          <p>Sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                      <div class="tab-pane" id="extensionpertrack">
                        <div class="varietyContent">
                          <img src="http://placehold.it/750x400" alt="Image Variety" class="img-responsive">
                          <h3>Extension Per Track</h3>
                          <h4>$40.00 Per Head</h4>
                          <p>Voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          <a href="#" class="btn btn-primary first-btn">make An Appoinment</a>
                        </div>
                      </div>
                    </div>
                  </div>';
                 
                
   
                  echo '</div>'; 
}
?>
  
<!-- loop close tabbed panels -->
  </div>  
<!-- loop close tabbed panels -->
                 
               
               
                
                 <!-- Tabbed content ends here -->
               
             
             
               <!-- Neccessary shizzles -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Neccessary shizzles -->
    </section>



 
      


<!-- OFFERS SECTION -->
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
    </section>

<!-- PRODUCT SECTION -->
    <section class="clearfix productSection">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Natural </span>Our Products</h2>
        </div>
        <div class="row">
          <div class="col-xs-12">
          <div id="productSlider" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#productSlider" data-slide-to="0" class="active"></li>
                <li data-target="#productSlider" data-slide-to="1"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="productImage">
                        <img src="http://placehold.it/570x400" alt="Image Product" class="img-responsive">
                        <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                      <div class="productInfo">
                        <h3>Traditional Massage</h3>
                        <h4>$25.00 Per Head</h4>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria tur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. </p>
                        <a href="#" class="btn btn-primary first-btn">read more</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="productImage">
                        <img src="http://placehold.it/570x400" alt="Image Product" class="img-responsive">
                        <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                      <div class="productInfo">
                        <h3>Body Massage</h3>
                        <h4>$55.00 Per Head</h4>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                        </ul>
                        <p>Magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria tur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        <a href="#" class="btn btn-primary first-btn">read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#productSlider" role="button" data-slide="prev">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#productSlider" role="button" data-slide="next">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- REVIEW SECTION -->
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


<!-- HOME GALLERY SECTION -->
    <section class="clearfix homeGalleryTitle">
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
              <li><a href="#" data-filter=".hair">hair</a></li>
              <li><a href="#" data-filter=".makeup">Make Up</a></li>
              <li><a href="#" data-filter=".facial">Facial</a></li>
              <li><a href="#" data-filter=".massage">Massage</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row isotopeContainer" id="container">
        <div class="col-sm-3 isotopeSelector hair">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector makeup">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector massage">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector hair">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector makeup">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector facial">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector facial">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

        <div class="col-sm-3 isotopeSelector massage">
          <article class="">
            <figure>
              <img src="http://placehold.it/500x375" alt="Image Gallery" class="img-responsive">
              <div class="overlay-background">
                <div class="inner"></div>
              </div>
              <div class="overlay">
                <a class="fancybox-pop" rel="portfolio-1" href="http://placehold.it/960x740">
                  <div class="overlayInfo">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i> <br>Skin Care</h5>
                  </div>
                </a>
              </div>
            </figure>
          </article>
        </div>

      </div>
    </section>

<!-- CALL TO ACTION SECTION -->
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
    </section>

<!-- EXPERT SECTION -->
    <section class="clearfix expertSection">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Meet </span>our experts</h2>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div id="thubmnailTeamSlider" class="carousel slide thumbnailCarousel">

              <ol class="carousel-indicators">
                <li data-target="#thubmnailTeamSlider" data-slide-to="0" class="active"></li>
                <li data-target="#thubmnailTeamSlider" data-slide-to="1"></li>
                <li data-target="#thubmnailTeamSlider" data-slide-to="2"></li>
                <li data-target="#thubmnailTeamSlider" data-slide-to="3"></li>
                <li data-target="#thubmnailTeamSlider" data-slide-to="4"></li>
                <li data-target="#thubmnailTeamSlider" data-slide-to="5"></li>
                <li data-target="#thubmnailTeamSlider" data-slide-to="6"></li>
                <li data-target="#thubmnailTeamSlider" data-slide-to="7"></li>
              </ol>

              <!-- Carousel items -->
              <div class="carousel-inner">

                <div class="item active">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="item-inner">
                    <div class="expertBox">
                      <div class="expertImage">
                        <img src="http://placehold.it/270x270" alt="Image expert">
                        <div class="expertMask">
                          <div class="socialArea">
                            <ul class="list-inline">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="expertCaption ">
                        <h2>Linda Smith</h2>
                        <p>Founder, Angel Beauty Spa</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <a class="left carousel-control" href="#thubmnailTeamSlider" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#thubmnailTeamSlider" data-slide="next">›</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- PRICING SECTION -->
    <section class="clearfix pricingSection patternbg">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Amazing </span>Services Pricing</h2>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="priceTableWrapper">
              <div class="priceImage" style="background-image: url(http://placehold.it/330x220);">
                <div class="maskImage">
                  <h3>Spa Light</h3>
                </div>
                <div class="priceTag">
                  <h4>$59</h4>
                </div>
              </div>
              <div class="priceInfo">
                <ul class="list-unstyled">
                  <li>Body Hand and Foot Massage</li>
                  <li>Nail Cutting And Styling</li>
                  <li>Spa Therapy</li>
                  <li>Hair Coloring</li>
                </ul>
                <a href="#" class="btn btn-primary first-btn">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="priceTableWrapper">
              <div class="priceImage" style="background-image: url(http://placehold.it/330x220);">
                <div class="maskImage">
                  <h3>oil massage</h3>
                </div>
                <div class="priceTag">
                  <h4>$79</h4>
                </div>
              </div>
              <div class="priceInfo">
                <ul class="list-unstyled">
                  <li>Body Hand and Foot Massage</li>
                  <li>Nail Cutting And Styling</li>
                  <li>Spa Therapy</li>
                  <li>Hair Coloring</li>
                </ul>
                <a href="#" class="btn btn-primary first-btn">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="priceTableWrapper">
              <div class="priceImage" style="background-image: url(http://placehold.it/330x220);">
                <div class="maskImage">
                  <h3>Spa & Beauty</h3>
                </div>
                <div class="priceTag">
                  <h4>$85</h4>
                </div>
              </div>
              <div class="priceInfo">
                <ul class="list-unstyled">
                  <li>Body Hand and Foot Massage</li>
                  <li>Nail Cutting And Styling</li>
                  <li>Spa Therapy</li>
                  <li>Hair Coloring</li>
                </ul>
                <a href="#" class="btn btn-primary first-btn">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="priceTableWrapper">
              <div class="priceImage" style="background-image: url(http://placehold.it/330x220);">
                <div class="maskImage">
                  <h3>Relax Day</h3>
                </div>
                <div class="priceTag">
                  <h4>$99</h4>
                </div>
              </div>
              <div class="priceInfo">
                <ul class="list-unstyled">
                  <li>Body Hand and Foot Massage</li>
                  <li>Nail Cutting And Styling</li>
                  <li>Spa Therapy</li>
                  <li>Hair Coloring</li>
                </ul>
                <a href="#" class="btn btn-primary first-btn">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- CONTACT US SECTION -->
    <section class="clearfix contactSection">
      <div class="container">
        <div class="secotionTitle">
          <h2><span>Hurry </span>Contact us</h2>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-7 col-xs-12">
            <div class="contactTitle">
              <h3>Get in touch</h3>
            </div>
            <div class="contactForm">
               <?php echo $response; ?>
               <form action="<?php the_permalink(); ?>" method="post">
              <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your Name" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                </div>
                <div class="form-group">
                  <input type="email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" class="form-control" id="exampleInputEmail1" placeholder="Your Email">
               
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Phone">
                </div>
                <div class="form-group">
                 
                  <textarea class="form-control" placeholder="Your Message" type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                </div>
                 <input type="hidden" name="submitted" value="1">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary first-btn">send Message</button>
                </div>
              </form>
              

            </div>
          </div>
          <div class="col-md-4 col-sm-5 col-xs-12">
            <div class="holdingInfo patternbg">
              <p>Lorem ipsum dolor sit amet, consectetur adipiselit, sed do eiusmod.</p>
              <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> 16/14 Babor Road, Mohammad pur Dhaka, Bangladeshincididunt </li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> +55 654 545 122 <br>+55 654 545 123</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info @example.com">info @example.com</a> <br><a href="mailto:info2 @example.com">info2@example.com</a></li>
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
                  <img src="http://placehold.it/175x100" alt="Image Partner">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="http://placehold.it/175x100" alt="Image Partner">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="http://placehold.it/175x100" alt="Image Partner">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="http://placehold.it/175x100" alt="Image Partner">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="http://placehold.it/175x100" alt="Image Partner">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="http://placehold.it/175x100" alt="Image Partner">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="http://placehold.it/175x100" alt="Image Partner">
                </div>
              </div>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <img src="http://placehold.it/175x100" alt="Image Partner">
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
          <h4 class="modal-title">Appointment For Hair Color</h4>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group categoryTitle">
              <h5>Service Date and Time</h5>
            </div>
            <div class="dateSelect form-half form-left">
              <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                <div class="input-group-addon">
                  <span class="fa fa-calendar"></span>
                </div>
              </div>
            </div>
            <div class="timeSelect form-half form-right">
              <select name="guiest_id1" id="guiest_id1" class="select-drop">
                <option value="0">10.00 AM</option>
                <option value="1">9.00 AM</option>
                <option value="2">8.00 AM</option>
                <option value="3">11.00 AM</option>
              </select>
            </div>
            <div class="form-group categoryTitle">
              <h5>Personal info</h5>
            </div>
            <div class="form-group form-half form-left">
              <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Full name">
            </div>
            <div class="form-group form-half form-right">
              <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Your email">
            </div>
            <div class="form-group form-half form-left">
              <input type="text" class="form-control" id="exampleInputEmail4" placeholder="Phone number">
            </div>
            <div class="form-group form-half form-right">
              <input type="text" class="form-control" id="exampleInputEmail5" placeholder="Your address">
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Your Message"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <button type="submit" class="btn btn-primary first-btn">Submit Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>






<?php
get_footer();
