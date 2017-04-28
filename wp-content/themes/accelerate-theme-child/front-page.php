<?php
/**
 * The template for displaying the homepage
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
get_header ();
?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View
				Our Work</a>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div>
	<!-- .container -->
</section>
<!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>

		<div class="featured-work-items">
		<?php
		query_posts ( "posts_per_page=3&post_type=case_studies" );
		
		while ( have_posts () ) {
			
			the_post ();
			?>
			
			<div class="featured-work-item">
				<figure>
					<?php echo wp_get_attachment_image(get_field("image_1"), "medium"); ?>
				</figure>

				<h3>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
			</div>
				
		<?php
		}
		
		wp_reset_query ();
		?>
		</div>
	</div>
</section>

<section class="recent-posts">
	<div class="site-content" id="recent-post-and-tweet">
		<div class="blog-post">
			<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?> 
					<a class="read-more-link" href="<?php the_permalink(); ?>">Read
				More <span>&rsaquo;</span>
			</a>
				 <?php endwhile; ?> 
				<?php wp_reset_query(); ?>
		</div>

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<a class="follow-link"
				href="https://twitter.com/intent/follow?screen_name=kengreentech">Follow
				Us <span>&rsaquo;</span>
			</a>
		</div>
	</div>
<?php endif; ?>









</section>

<?php get_footer(); ?>
