<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="texture">
                <div class="disc">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 sandy-header">

                            <h1>
                               Sandy Nichols<br/>Web Design
                            </h1>
                            <p>
                                <?php
                                if(get_theme_mod( 'header_banner_tagline_setting' )){
                                    echo get_theme_mod( 'header_banner_tagline_setting' );
                            }else{
                                    echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                                }
                                ?>
                            </p>
                            </div>
                            <div class="col-sm-6">
                            <div id="sandy">
                                <div id="me">
                                <span id="me-left"><img src="http://www.sandynichols.net/images/me-left.png" alt="Sandy Nichols Web Designer"></span>

                                <span id="me-center"><img src="http://www.sandynichols.net/images/me-center.png" alt="Sandy Nichols Web Designer"></span>

                                <span id="me-right"><img src="http://www.sandynichols.net/images/me-right.png" alt="Sandy Nichols Web Designer"></span>
                                </div><!--off me-->

                                <div id="moreaboutme">
                                <a href="http://sandynichols.net/web-portfolio/" onMouseOver="javascript:lefttofront()" onMouseOut="javascript:centertofront()"title="Sandy Nichols Web Designer Portfolio">Web Portfolio</a>
                                </div><!--off moreaboutme-->

                                <div id="contactme">
                                <a href="https://www.sandynichols.net/blog/wp-content/uploads/2019/03/sandy-nichols-2019.pdf" target="_blank" onMouseOver="javascript:righttofront()" onMouseOut="javascript:centertofront()" title="Contact Sandy Nichols">Resume'</a>
                                </div><!--off contactme-->
                                <div class="clearfix"></div>
                            </div><!--off sandy wrapper-->

                                    <script type="text/javascript"> 
                                    function lefttofront()
                                            {
                                            var myObject2=document.getElementById('me-left');
                                                myObject2.style.display="block";   					
                                            var myObject1=document.getElementById('me-right');	
                                                myObject1.style.display="none";   
                                            var myObject3=document.getElementById('me-center');	
                                                myObject3.style.display="none";	  		
                                                };
                                        function centertofront()
                                            {
                                            var myObject2=document.getElementById('me-left');
                                                myObject2.style.display="none";   					
                                            var myObject1=document.getElementById('me-right');	
                                                myObject1.style.display="none";   
                                            var myObject3=document.getElementById('me-center');	
                                                myObject3.style.display="block";	  		
                                                };		
                                        function righttofront()
                                            {
                                            var myObject2=document.getElementById('me-left');
                                                myObject2.style.display="none";   					
                                            var myObject1=document.getElementById('me-right');	
                                                myObject1.style.display="block";   
                                            var myObject3=document.getElementById('me-center');	
                                                myObject3.style.display="none";	  		
                                                };								
                                        </script>							

                            </div><!-- off 6-->
                        </div><!--off row-->
                    </div><!--disc-->
                    <!--  <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>  -->

                    
<h2>Website Currently under construction, 3/31/19</h2>
<p>Please check back next week for an improved look!!!</p>


                </div><!-- container-->
            </div><!-- texture -->
        </div><!-- page-sub-header-->
    <?php endif; ?>


    <div class="sandy-callouts-home container">
    <h2>Sandy's Blog</h2><br/>
     </div>

    
    
    
    
    <div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>
               