<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><?php //END #main ?>

	<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
		<div id="left-sidebar" class="sidebar col-sm-3 col-md-pull-9 clearfix" role="complementary">
			<?php dynamic_sidebar( 'left-sidebar' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		<div id="right-sidebar" class="sidebar col-sm-3 clearfix" role="complementary">
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>
	<?php endif; ?>

		</div><?php //END #inner-content ?>

	</div><?php //END #content ?>

	<footer id="colophon" class="footer" role="contentinfo">

		<div id="inner-footer" class="wrap clearfix">
<div class="container-fluid">
        	<div class="row-fluid">
				<div class="col-md-4">
			<nav role="navigation">
				<?php localedge_footer_nav(); ?>
			</nav>

			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
			</div>
            <div class="col-md-4"><p>2851 Clover St | Pittsford, NY 14534 | 585-371-8734 | 
<a href="mailto:johnjjwaugh@gmail.com">johnjjwaugh@gmail.com</a> </p></div>
            <div class="col-md-4">
            <a href="https://www.facebook.com/johnjjwaughtruenorthrealtorsny"><img src="/wp-content/themes/localedge/images/social/facebook3.png"></a>
            <a href="https://foursquare.com/v/true-north-realtors-ny/5398ef15498e718f898b5248"><img src="/wp-content/themes/localedge/images/social/foursquare.png"></a>
            <a href="https://twitter.com/TrueNorthRltors"><img src="/wp-content/themes/localedge/images/social/twitter2.png"></a>
            <a href="https://www.linkedin.com/in/johnjwaugh"><img src="/wp-content/themes/localedge/images/social/linkedin.png"></a>
            <a href="https://plus.google.com/112331218778671603552/about"><img src="/wp-content/themes/localedge/images/social/google-plus3.png"></a>
            
            
            </div>
            </div>
            </div>
		</div>

	</footer>

	<p id="back-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>

</div><?php //END #container ?>

<?php wp_footer(); ?>

</body>
</html>