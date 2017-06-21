<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Blog
 *
 * @package storefront
 */

get_header(); ?>



<!-- PAGE TITLE SECTION -->
    <section class="clearfix pageTitleArea" style="background-image: url(http://placehold.it/1920x250);">
        <div class="container">
	        <div class="pageTitle">
	            <h1>blog page</h1>
	        </div>
        </div>
    </section>

<!-- BLOG SINGLE SECTION -->
    <section class="container-fluid clearfix blog padding">
      <div class="container">
        <div class="row">

          <div class="col-sm-8 col-xs-12">





<?php

$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 10
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>
    <?php  while ( $the_query->have_posts() ) :  $the_query->the_post(); ?>
      <div class="blogPost">
	   <img src="http://placehold.it/770x400" alt="Image Blog" class="img-responsive">
	     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
	
	  <p><?php the_excerpt(); ?></p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 21 Likes</a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 5 Comments</a></li>
              </ul>
		
	</div>
    <?php endwhile; ?>
<?php endif; ?>



<!--
            <div class="blogPost">
              <img src="http://placehold.it/770x400" alt="Image Blog" class="img-responsive">
              <h2><a href="blog-single-right-sidebar.html">The standard Lorem Ipsum passage</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 21 Likes</a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 5 Comments</a></li>
              </ul>
            </div>
            <div class="blogPost">
              <img src="http://placehold.it/770x400" alt="Image Blog" class="img-responsive">
              <h2><a href="blog-single-right-sidebar.html">The standard Lorem Ipsum passage</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 21 Likes</a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 5 Comments</a></li>
              </ul>
            </div>
            <div class="blogPost">
              <img src="http://placehold.it/770x400" alt="Image Blog" class="img-responsive">
              <h2><a href="blog-single-right-sidebar.html">The standard Lorem Ipsum passage</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 21 Likes</a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 5 Comments</a></li>
              </ul>
            </div>
            <div class="blogPost">
              <img src="http://placehold.it/770x400" alt="Image Blog" class="img-responsive">
              <h2><a href="blog-single-right-sidebar.html">The standard Lorem Ipsum passage</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 21 Likes</a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 5 Comments</a></li>
              </ul>
            </div>
            <div class="blogPost">
              <img src="http://placehold.it/770x400" alt="Image Blog" class="img-responsive">
              <h2><a href="blog-single-right-sidebar.html">The standard Lorem Ipsum passage</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 21 Likes</a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 5 Comments</a></li>
              </ul>
            </div> 
            -->

            <div class="paginationCommon paginationOne">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    </a>
                  </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>


          </div>

          <div class="col-sm-4 col-xs-12">
            <div class="blogSidebar">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                <a href="#" class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></a>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Categories</div>
                <div class="panel-body">
                  <ul class="list-unstyle categoryList">
                    <li><a href="product-right-sidebar.html">Beauty</a></li>
                    <li><a href="product-right-sidebar.html">Hair Cut</a></li>
                    <li><a href="product-right-sidebar.html">Facial</a></li>
                    <li><a href="product-right-sidebar.html">Massage</a></li>
                    <li><a href="product-right-sidebar.html">Make up</a></li>
                    <li><a href="product-right-sidebar.html">Waxing</a></li>
                  </ul>
                </div>
              </div>
              <div class="panel panel-default recentBlogPosts">
                <div class="panel-heading">Resent Posts</div>
                <div class="panel-body">
                  <div class="media">
                    <a class="media-left" href="blog-single-right-sidebar.html">
                      <img class="media-object" src="http://placehold.it/80x80" alt="Image">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="blog-single-right-sidebar.html">Cras vulputate nisi sus</a></h4>
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="media">
                    <a class="media-left" href="blog-single-right-sidebar.html">
                      <img class="media-object" src="http://placehold.it/80x80" alt="Image">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="blog-single-right-sidebar.html">massa iaculis porta dui</a></h4>
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="media">
                    <a class="media-left" href="blog-single-right-sidebar.html">
                      <img class="media-object" src="http://placehold.it/80x80" alt="Image">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="blog-single-right-sidebar.html">venenatis augue vel.</a></h4>
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>



  









<?php
get_footer();
