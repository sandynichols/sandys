<?php
/**
* Template Name: Featured 2
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
			
		<div class="featured-nav-cont">
			<div class="featured-next">
				Next Project<br>
				<a href="/interactive-injury-locator/">Injury Locator</a>
			</div>
			<div class="featured-prev">
				Previous Project<br>
				<a href="/momseggs-com/">Moms Eggs</a>
            </div>
		</div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'pagefeatured' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
