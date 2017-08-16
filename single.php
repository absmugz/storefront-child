<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage storefront
 */
get_header(); ?>




<!-- PAGE TITLE SECTION -->
    <section class="clearfix pageTitleArea" style="background-image: url(http://placehold.it/1920x250);">
        <div class="container">
	        <div class="pageTitle">
	            <h1>Single Post</h1>
	        </div>
        </div>
    </section>

<!-- BLOG SINGLE SECTION -->
    <section class="container-fluid clearfix blogSingle">
      <div class="container">
        <div class="row">

          <div class="col-sm-8 col-xs-12">

            <div class="blogPost singlePost">
              <img src="http://placehold.it/770x400" alt="Image Blog" class="img-responsive">
              
              <?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
?>
              
              
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php the_excerpt() ?>
<?php endwhile; else: ?>
    <p>Nothing to see here.</p>
<?php endif; ?>
             
      
             
                <p><img src="<?php the_field('image_one'); ?>" alt="" /><?php the_field('text_for_image_one'); ?></p>
              <p><img src="<?php the_field('image_two'); ?>" alt="" /><?php the_field('image_two_text'); ?></p>
              <p><img src="<?php the_field('image_three'); ?>" alt="" /><?php the_field('image_three_text'); ?></p>
              
              <p>suck my balls</p>
            </div>

            
            <!--comments section
            <div class="blogCommnets">
              <h3>3 Comments</h3>
              <div class="media">
                <a class="media-left" href="#">
                  <img class="media-object" src="http://placehold.it/70x70" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Integer blandit</h4>
                  <h5><span><i class="fa fa-calendar" aria-hidden="true"></i>22 September, 2016</span></h5>
                  <p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                  <button type="button" class="btn btn-link">Reply</button>
                </div>
              </div>
              <div class="media mediaMargin">
                <a class="media-left" href="#">
                  <img class="media-object" src="http://placehold.it/70x70" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Integer blandit</h4>
                  <h5><span><i class="fa fa-calendar" aria-hidden="true"></i>22 September, 2016</span></h5>
                  <p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                  <button type="button" class="btn btn-link">Reply</button>
                </div>
              </div>
              <div class="media">
                <a class="media-left" href="#">
                  <img class="media-object" src="http://placehold.it/70x70" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Integer blandit</h4>
                  <h5><span><i class="fa fa-calendar" aria-hidden="true"></i>22 September, 2016</span></h5>
                  <p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                  <button type="button" class="btn btn-link">Reply</button>
                </div>
              </div>
            </div>
            <div class="commentsForm">
              <form action="" method="POST" role="form">
                <h3>leave a comment</h3>
                  <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Type Your Comment"></textarea>
                  </div>
                  <div class="form-group form-half form-left">
                    <input type="text" class="form-control" id="" placeholder="Name">
                  </div>
                  <div class="form-group form-half form-right">
                    <input type="email" class="form-control" id="" placeholder="Email">
                  </div>
                <button type="submit" class="btn btn-primary">submit now</button>
              </form>
            </div>
 --> 

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
                      <img class="media-object" src="http://placehold.it/70x70" alt="Image">
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
                      <img class="media-object" src="http://placehold.it/70x70" alt="Image">
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
                      <img class="media-object" src="http://placehold.it/70x70" alt="Image">
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
