<?php
/**
* Template Name: Contact
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                //if ( comments_open() || get_comments_number() ) :
                    //comments_template();
                //endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->
<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
<h2>Email Sandy</h2>
<?php echo do_shortcode( '[contact-form-7 id="11970" title="Contact form 1"]' ); ?>

<?php
//get_sidebar();
get_footer();
