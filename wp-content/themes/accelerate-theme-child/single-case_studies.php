<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		

<?php while (have_posts() ) { ?>
<?php the_post(); ?>
			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2 class="title"><?php echo the_title(); ?></h2>
					<h5 class="services"><?php echo get_field("services"); ?></h5>
					<h6 class="client">Client: <?php echo get_field("client"); ?></h6>
					<p><?php the_content(); ?></p>
					<p><a href="<?php echo get_field("site_link")?>">Visit Live Site</a></p>
				</aside>
				
				<div class="case-study-images">
					<?php 
					$FULL_SIZE = "full";
					$image1 = get_field("image_1");
					$image2 = get_field("image_2");
					$image3 = get_field("image_3");
						
					if($image1) { 
						echo wp_get_attachment_image( $image1, $FULL_SIZE );
					} 
					
					if($image2) { 
						echo wp_get_attachment_image( $image2, $FULL_SIZE );
					}
					
					if($image3) { 
						echo wp_get_attachment_image( $image3, $FULL_SIZE );
					} ?>
				</div>
			</article>			
<?php } ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>