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

<?php endif; ?>
</div><!-- #page -->
<script>
    



    jQuery(document).ready(function($){
				$("#masthead").after('<div class="bumper"></div>');
				$(window).scroll(function () {
				if ($(document).scrollTop() > 1 ) {
						$('#masthead').addClass('shrink');
				} else {
						$('#masthead').removeClass('shrink');
				}
				});
		});


</script>
<?php wp_footer(); ?>
</body>
</html>