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
              <?php the_title( '<h2>', '</h2>' ); ?>
              
              
              
              <p><?php the_content(); ?></p>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
              <p><img src="http://placehold.it/400x300" alt="Image Blog">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, </p>
              <p>ExceCupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 21 Likes</a></li>
                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 5 Comments</a></li>
              </ul>
            </div>
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
