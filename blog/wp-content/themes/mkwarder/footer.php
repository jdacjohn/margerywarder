<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>
			<?php include('content-bottom.php'); ?>
      <!-- Website Footer Info -->
<!--      <div class="main zerogrid"> -->
        <div id="ws-footer">
          <p class="fp" align="center">
            <a href="http://www.acfw.com" target="_blank" title="">ACFW</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://bvillewordweavers.blogspot.com" target="_blank" title="">Wordweaver</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.breakingthepressmovie.com" target="_blank" title="">Breaking The Press</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.facingthegiants.com" target="_blank" title="">Facing The Giants</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.writetopublish.com" target="_blank" title="">Write-To-Publish</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.authorsden.com" target="_blank" title="">AuthorsDen</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.writers.net" target="_blank" title="">WritersNet</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.sherwoodbaptist.net" target="_blank" title="">Sherwood Baptist</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.flywheelthemovie.com" target="_blank" title="">Flywheel</a> 
            <a href="http://www.fireproofthemovie.com" target="_blank" title="">Fireproof</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.courageousthemovie.com" target="_blank" title="">Courageous</a><br />
            <a href="http://www.astevensent.com" target="_blank" title="">Andrew Stevens Entertainment</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.fireproofmymarriage.com" target="_blank" title="">Fireproof My Marriage</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.hamptonlandmarks.com" target="_blank" title="">Hampton Landmarks</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.loc.gov/folklife/roots/ac-home.html#states" target="_blank" title="">American Folklore Center</a> <img src="<?php print($siteRoot); ?>/favicon.png" />
            <a href="http://www.publiclibraries.com/state_library.htm" target="_blank" title="">State Libraries</a>
           </p>
          <p class="fp" align="center">
            &bull; Margery Kisby Warder &copy; 2014 &bull; <a href="http://www.margerywarder.com">MargeryWarder.com</a> website by <a href='http://www.jdacsolutions.com'>JDAC Solutions Website Services</a>
           &bull;
            Responsive Design by <a href="http://www.zerotheme.com" target="_blank">Zerotheme.com</a> &bull;
          </p>
        </div>
<!--      </div> -->
      
      <!-- Wordpress Footer Info -->
			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>