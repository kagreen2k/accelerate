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

    <div class="about-banner">
        <div>
            <span class="company-name"><?php echo get_field("banner_company_name") ?></span>
            <span><?php echo get_field("banner_text"); ?></span>
        </div>
    </div>
                            
    <div id="primary" class="site-content <?php echo 'page-'.$name; ?>">
        <div id="content" role="main">

            <section>
                <div class="site-content services">

                    <div class="service-intro">
                    
                        <div class="service-intro-title">
                            <?php echo get_field("services_section_title"); ?>
                        </div>
                        
                        <div class="service-intro-text">
                            <?php echo get_field("services_section_text"); ?>
                        </div>
                            
                    </div>
                    
                    <section class="service-items">
                    <?php 
                        query_posts("post_type=services");
                        
                        while (have_posts()) {
                            
                            the_post(); ?>
                        
                            <article class="service-item">
                            
                                
                                <figure>
                                    <?php echo wp_get_attachment_image(get_field("service_icon"), "small"); ?>
                                </figure>
                        
                                <div class="service-text">
                                
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    
                                    <!-- TODO: move the class out of HTML and into CMS -->
                                    <p class="service-description"><?php the_content(); ?></p>
                                </div>    
                                
                            </article>
                    <?php
                        }
                        
                        wp_reset_query(); ?>
                    </section>
                </div>
            </section>

        </div><!-- #content -->
    </div><!-- #primary -->

    <div class="about-contact-link">
    	<div>
	        <span>Interested in working with us ?</span>
    	    <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
    	</div>
    </div>
<?php get_footer(); ?>