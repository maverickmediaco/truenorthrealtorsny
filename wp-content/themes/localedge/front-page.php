<?php get_header(); ?>
<div class="container-fluid">
	
		<div class="row-fluid">
    		<div class="col-md-12">
            <div class="slideshow_bg">
				<?php nivo_slider(30); ?>
               <div class="ribbon"><div class="ribbon-stitches-top"></div><strong class="ribbon-content"><h1>Top Quality Realtor Service</h1></strong><div class="ribbon-stitches-bottom"></div></div>
        	</div>
             
    	</div>
	</div>            
</div> 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header class="article-header">

							
						</header>

						<section class="entry-content clearfix">
							<?php the_content(); ?>
							<?php wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'localedge' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) ); ?>
						</section>

						<footer class="article-footer">

							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

						</footer>

						
					</article>

				<?php endwhile; ?>

			<?php else : ?>

			<?php get_template_part('includes/template','error'); // WordPress template error message ?>

			<?php endif; ?>

<?php get_footer();