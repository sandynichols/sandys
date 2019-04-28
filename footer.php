<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>



<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
    </div><!-- #content -->
    

 <section class="testimonial-section">   
     <h1 class="text-center">Web Design Testimonials</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2>Dr. Becky Laird</h2>
                <p>“Just want to also say thank you so much for your talent, thoroughness, attention to detail, organization and your patient time…. I would love to refer work to you if you are taking on more work…” - Dr. Becky Laird</p>
                </div>
                <div class="col-sm-3">
                    <h2>Karen Sims Deady</h2>
                <p>“Thank you so much! Love my Website!!!” – Karen Sims Deady</p>
                <img src="https://www.sandynichols.net/blog/wp-content/uploads/2015/06/karen-testimonial-e1443360284476.jpg" alt="post it note with thanks written on it">
                </div>
                <div class="col-sm-3">
                    <h2>Gwen Goldfarb</h2>
                <p>“Sandy Nichols was a pleasure to work with during the re-design and creation of three websites for me. She understood the specs and scope of the project clearly and provided creative ideas to enhance the end product. I am very pleased with the results of her hard work.” - Gwen Goldfarb</p>
                </div>
                <div class="col-sm-3">
                    <h2>Patrick Clark</h2>
                <p>“We felt that Sandy took real ownership in creating our website, her research of our company and our industry helped challenge us to improve our message and better define our target audience. Working with Sandy is the closest thing to having in-house web design!”</p>
                </div>
            </div>
        </div>
</section>


    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info row">
                <div class="col-sm-6">
                     <p class="sandycopyright">&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?></p>    
                </div>
                <div class="col-sm-6 social">
                <a href="https://www.facebook.com/sandynichols" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-fb.png" alt="Facebook Sandy Nichols"></a>
                    <a href="https://www.linkedin.com/in/sandradnichols/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-linkedin.png" alt="LinkedIn Sandy Nichols"></a>
                    <a href="https://twitter.com/sandra_nichols" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-twitter.png" alt="Twitter Sandy Nichols"></a>
                    <a href="https://www.flickr.com/photos/sandynichols/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-flickr.png" alt="Flickr Sandy Nichols"></a>
                    <a href="https://www.pinterest.com/sandradnichols/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-pinterest.png" alt="Pinterest Sandy Nichols"></a>
                </div>

            </div><!-- close .site-info -->



		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->
<script>
  
    jQuery(document).ready(function($){
    $("#masthead").after('<div class="bumper"></div>');
    $(window).scroll(function () {
    if ($(document).scrollTop() > 1 ) {
        $('#masthead').addClass('shrink');
        $('.bumper').addClass('fixjump');
    } else {
        $('#masthead').removeClass('shrink');
        $('.bumper').removeClass('fixjump');
    }
    });
});
</script>

<!-- Highlight parent page link when on child page -->
<?php 
if (is_page("momseggs-com")) {   //  displaying a child page ?>
    <script type="text/javascript">
        jQuery("li.menu-item-11914").addClass('active');  
    </script>
<?php } ?>
<?php
if (is_page("healthcare-app-overview")) {   //  displaying a child page ?>
    <script type="text/javascript">
        jQuery("li.menu-item-11914").addClass('active');  
    </script>
<?php } ?>

<?php
if (is_page("interactive-injury-locator")) {   //  displaying a child page ?>
    <script type="text/javascript">
        jQuery("li.menu-item-11914").addClass('active');  
    </script>
<?php } ?>

<?php
if (is_front_page()) {   //  displaying a child page ?>
    <script type="text/javascript">
        jQuery("li.menu-item-6830").addClass('active');  
    </script>
<?php } ?>

<?php
if (is_single() || is_archive()) {   //  displaying a child page ?>
    <script type="text/javascript">
        jQuery("li.menu-item-11856").addClass('active');  
    </script>
<?php } ?>


<?php wp_footer(); ?>
</body>
</html>