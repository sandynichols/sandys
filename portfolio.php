<?php
/**
* Template Name: Portfolio
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
		<h1 class="entry-title">Web Portfolio</h1>
			<div class="row">
				<div class="col-lg-4 featured">
					<h2>Moms Eggs</h2>
					<a href="/momseggs-com/"><img src="https://www.sandynichols.net/blog/wp-content/themes/sandys/images/featured-moms.jpg" alt="Moms Eggs Portfolio Website"/></a>
					<p>Mom needs a website, visibility, and branding on a budget to start selling her backyard eggs.<br/></p>
					<p><a href="/momseggs-com/" title="Moms Eggs Portfolio" class="wp-block-button__link">Visit Project</a></p>
				</div>
				<div class="col-lg-4 featured">
					<h2>Healthcare App</h2>
					<a href="/healthcare-app-overview/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured-healthcare-app.jpg" alt="website project for healthcare app"></a>
					<p>How does an app promote immediate engagement when data requires a login?</p>
					<p><a href="/healthcare-app-overview/" title="Healthcare App Prototype" class="wp-block-button__link">Visit Project</a></p>
				</div>
				<div class="col-lg-4 featured">
					<h2>Injury Locator</h2>
					<a href="https://www.sandynichols.net/interactive-injury-locator/" title="Website Project: Interactive Injury Locator"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured-interactive-injury.jpg" alt="website project Interactive Injury"></a>
					<p>On mobile, how do we present the x-ray without scrolling to another part of the mobile screen?</p>
					<p><a href="/interactive-injury-locator/" title="Interactive Injury Locator" class="wp-block-button__link">Visit Project</a></p>
				</div>	
		</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
