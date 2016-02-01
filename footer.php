<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package total-wellness
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
      <div class="footer-sub">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <?php if ( is_active_sidebar( 'footer_sub_1' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                  <?php dynamic_sidebar( 'footer_sub_1' ); ?>
                </div><!-- #primary-sidebar -->
              <?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php if ( is_active_sidebar( 'footer_sub_2' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                  <?php dynamic_sidebar( 'footer_sub_2' ); ?>
                </div><!-- #primary-sidebar -->
              <?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php if ( is_active_sidebar( 'footer_sub_3' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                  <?php dynamic_sidebar( 'footer_sub_3' ); ?>
                </div><!-- #primary-sidebar -->
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="google-map">
        <div class="row">
        <!-- Prevent scroll wheel event over map -->
        <!-- <div class="map-overlay" onClick="style.pointerEvents='none'"></div> -->
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9654.601615518353!2d-117.99351059385268!3d33.78020188598645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd28eb02b3a723%3A0xb954f7a655496903!2s12362+Beach+Blvd+%237%2C+Stanton%2C+CA+90680!5e0!3m2!1sen!2sus!4v1453682923967" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div>
      </div>
      <div class="footer-end">
        <div>&#169; 2016 Total Wellness Chiropractic Orange County</div>
      </div>
	</footer><!-- #colophon -->
	</div> <!-- /div -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
