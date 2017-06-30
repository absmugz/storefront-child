<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package storefront
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>


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
            
            
<section id="comments" class="comments-area" aria-label="Post Comments">

	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'storefront' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through. ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation" aria-label="Comment Navigation Above">
			<span class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'storefront' ); ?></span>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'storefront' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'storefront' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      	=> 'ol',
					'short_ping' 	=> true,
					'callback'		=> 'storefront_comment',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through. ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation" aria-label="Comment Navigation Below">
			<span class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'storefront' ); ?></span>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'storefront' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'storefront' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation.

	endif;

	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'storefront' ); ?></p>
	<?php endif;

	$args = apply_filters( 'storefront_comment_form_args', array(
		'title_reply_before' => '<span id="reply-title" class="gamma comment-reply-title">',
		'title_reply_after'  => '</span>',
	) );

	comment_form( $args ); ?>

</section><!-- #comments -->
