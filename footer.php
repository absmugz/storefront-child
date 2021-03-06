<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
</div><!-- .col-full -->
</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

<footer style="background-image: url(img/home/footer-bg.jpg);">
      <!-- BACK TO TOP BUTTON -->
      <a href="#pageTop" class="backToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
      <!-- FOOTER INFO -->
      <div class="clearfix footerInfo">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerText">
                <a href="index.html" class="footerLogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/logo-footer.png" alt="Footer Logo"></a>
                <!--<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.Lorem ipsum dolor sit amet.</p>
                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
              </div>
            </div>
            <div class="col-sm-3 col-xs-12 paddingLeft">
              <div class="footerInfoTitle">
                <h4>Useful Links</h4>
              </div>
              <div class="useLink">
                <ul class="list-unstyled">
                  <li><a href="https://www.mizani.com/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Mizani</a></li>
                  <li><a href="https://www.darkandlovely.com.gh/dark-and-lovely"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Dark and Lovely</a></li>
                  <li><a href="http://www.tresemme.co.za/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Tresemme</a></li>
                  <li><a href="https://www.headandshoulders.co.za/en-za"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Head & Shoulders</a></li>
                  <li><a href="http://marico.com/south-africa/brands/just-for-kids"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Just for kids</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <!--<div class="footerInfoTitle">
                <h4>Gallery</h4>
              </div>-->
              
              <!--<div class="footerGallery row">
                <div class="col-xs-4">
                  <a href="gallery-v2.html" style="background-image: url(http://placehold.it/75x75);"></a>
                </div>
                <div class="col-xs-4">
                  <a href="gallery-v2.html" style="background-image: url(http://placehold.it/75x75);"></a>
                </div>
                <div class="col-xs-4">
                  <a href="gallery-v2.html" style="background-image: url(http://placehold.it/75x75);"></a>
                </div>
                <div class="col-xs-4">
                  <a href="gallery-v2.html" style="background-image: url(http://placehold.it/75x75);"></a>
                </div>
                <div class="col-xs-4">
                  <a href="gallery-v2.html" style="background-image: url(http://placehold.it/75x75);"></a>
                </div>
                <div class="col-xs-4">
                  <a href="gallery-v2.html" style="background-image: url(http://placehold.it/75x75);"></a>
                </div>
              </div>-->
              
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerInfoTitle">
                <h4>Newsletters</h4>
              </div>
              <div class="footerText">
                <p>Sign up for our mailing list to get latest updates and offers.</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon21">
                  <button type="submit" class="input-group-addon" id="basic-addon21">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- COPY RIGHT -->
      <div class="clearfix copyRight">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
              <ul class="list-inline socialLink">
                <!-- <li><a href="https://twitter.com/allureclaremont"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                <li><a href="https://twitter.com/allureclaremont"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/Allure-Hair-Beauty-680521828794184/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="https://www.instagram.com/allureclaremont/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                 <!--<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>-->
                
              </ul>
            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>&copy; 2017 Copyright <a target="_blank" href="http://www.allurestudio.co.co.za">Allure Hair & Beauty</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
