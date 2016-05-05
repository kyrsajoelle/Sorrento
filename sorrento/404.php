<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php


						
						$parent = array_reverse(get_post_ancestors($post->ID));
						$first_parent = get_page($parent[0]);
						$parentName=$first_parent->post_name;
						
						$tpage=get_the_ID();
						//echo $tpage;
						
						
			$headerImage="bg_header_default.jpg";		
			if ($parentName=="about") {
				$headerImage="bg_header_about.jpg";
			}
			if ($tpage==911) {
				$headerImage="bg_header_cynviloq.jpg";
			}
			if ($tpage==19) {
				$headerImage="bg_header_gmab.jpg";
			}
			if ($parentName=="about") {
				$headerImage="bg_header_about.jpg";
			}											
			if ($tpage==121) {
				$headerImage="bg_header_contact.jpg";
			}		


		
		echo "<div style=\"background-color:rgba(123,167,241,.5);position:fixed;top:160px;max-width:100%;z-index:1;\" class=\"site\">";
		
		
			echo "<div class=\"main-navigation\" style=\"background-color:rgba(40,152,144,1);position:relative;color:#fff;text-align:center;min-height:378px;max-width:none;background-image:url(/dev/wp-content/themes/sorrento_v3/images/".$headerImage.");background-position:center top;background-repeat:no-repeat;\" >";
				echo "<h1 class=\"entry-title\" style=\"padding-top:275px;text-transform:uppercase;\">";

				echo "No Page - 404 Error";
				echo "</h1>";
			echo "</div>";
		echo "</div>";


	?>
	</div>
<div style="margin:0 auto;max-width:1200px;">	
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">


			<div class="page-wrapper">
				<div class="page-content" style="padding-top:538px;">
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>