<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); 

$categories=get_the_category();
$tCat4="";
foreach($categories as $category) {	
	if ($category->cat_name=="Press Release") {
		$tCat=$category->cat_name;
	}
	if ($category->cat_name=="Corporate Governance") {
		$tCat=$category->cat_name;
	}																	
}	
	if (($tCat!="Press Release")&&($tCat!="Corporate Governance")) {
			require get_template_directory() . '/inc/page_title.php';
	}
	else {
		if ($tCat=="Press Release") {
			echo "<div id=\"title_holder\" style=\"background-color:rgba(123,167,241,.5);\" class=\"site\">";
		
		
			echo "<div class=\"main-navigation\" style=\"background-color:rgba(40,152,144,1);position:relative;color:#fff;text-align:center;min-height:190px;max-width:none;background-image:url(/wp-content/themes/sorrento/images/interior-header.jpg);background-position:center top;background-repeat:no-repeat;\" >";
				echo "<div class=\"title-cont\">";
					echo "<h1 class=\"entry-title\" style=\"text-transform:uppercase;\">";
				
						echo "NEWS RELEASES";
					echo "</h1>";
				echo "</div>";
			echo "</div>";
		}
		if ($tCat=="Corporate Governance") {
			echo "<div id=\"title_holder\" style=\"background-color:rgba(123,167,241,.5);\" class=\"site\">";
		
		
			echo "<div class=\"main-navigation\" style=\"background-color:rgba(40,152,144,1);position:relative;color:#fff;text-align:center;min-height:190px;max-width:none;background-image:url(/wp-content/themes/sorrento/images/interior-header.jpg);background-position:center top;background-repeat:no-repeat;\" >";
				echo "<div class=\"title-cont\">";
					echo "<h1 class=\"entry-title\" style=\"text-transform:uppercase;\">";
				
						echo "Corporate Governance";
					echo "</h1>";
				echo "</div>";
			echo "</div>";
		}		
	}
	?>

	</div>

	<div id="primary" class="content-area" style="">
		<div id="content" class="site-content" role="main" >
			<?php


			if ($tCat=="Press Release") {
				echo "\n<h2 style=\"font-size: 24px;color: #1f988b;width:90%;max-width:1100px;margin: 0 auto;\">";
				the_title();
				echo "</h2>\n";
				echo "<div style=\"width:90%;max-width:1100px;margin: 0 auto 1em auto;text-align:right;\"><a href=\"/news/news-releases/\">&laquo; Back to News</a></div>";
			}
			if ($tCat=="Corporate Governance") {
				echo "\n<h2 style=\"font-size: 24px;color: #1f988b;width:90%;max-width:1100px;margin: 0 auto;\">";
				the_title();
				echo "</h2>\n";
				echo "<div style=\"width:90%;max-width:1100px;margin: 0 auto 1em auto;text-align:right;\"><a href=\"/investors/corporate-governance/\">&laquo; Back to Corporate Governance</a></div>";
			}			
			?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>