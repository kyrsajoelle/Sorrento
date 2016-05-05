<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width; initial-scale = 1.0;">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    
	<?php wp_head(); ?>
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script>
function parallaxScroll(){

	var scrolled = jQuery(window).scrollTop();
	var tpos=190;
	var tMinht=125;
			//jQuery('#jsdata').html("val1:"+scrolled+"_ntp="+tpos);
			
if (jQuery(document).width()>768) {				
	if ((scrolled>=0)&&(scrolled<tpos)) {
		
		ntp=tpos-scrolled;
		

		if (ntp>120) {
		jQuery('.site .main-navigation').css('min-height',ntp+'px');
		jQuery('.title-cont').css('top', '60px');
		}
	}
	else {
		jQuery('.site .main-navigation').css('min-height',tMinht+'px');
		jQuery('.title-cont').css('top', '48px');
	}
	}

}

</script>	
	
</head>

<body <?php body_class(); ?>>
		<div class="header-container">
            
            <header id="masthead" class="site-header cf" role="banner" style="">
            <div id="top_nav_holder" style="">
			
			<?php
				if(is_nav_menu("Secondary")) {
					wp_nav_menu(array('menu' => "Secondary")); 
				}
			 ?>
			</div>
                <div id="logo_cont" style="">
                    <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><div id="sorrento"></div></a>
                </div>
                <div id="navbar" class="navbar" style="">
                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
                        <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                        <?php //get_search_form(); ?>
                         <!--<div id="jsdata">data</div>-->
                    </nav><!-- #site-navigation -->
                </div><!-- #navbar -->
            </header><!-- #masthead -->
            
		</div>
