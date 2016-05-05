<?php
/**
/**
 * Template Name: Corporate Governance
 */

get_header(); ?>
	<?php
		while ( have_posts() ) : the_post(); 	
			require get_template_directory() . '/inc/page_title.php';
	?>
    	<?php endwhile; ?>

	

	<div id="page" class="hfeed site" style="position:absolute;">
		<div id="main" class="site-main">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
                	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">					

			<?php			
			query_posts( array ( 'category_name' => 'Corporate Governance', 'posts_per_page' => -1,'orderby'=>'date','order'=>'ASC' ) );
				$i=0;	
					while (have_posts()) : the_post();
					
						if ($i % 2) {
							$rowClass="odd";
						}
						else  {
							$rowClass="even";
						}	
						echo "<a href=\"".get_permalink()."\">";			
						echo "<div class=\"gov_div ".$rowClass."\">";

				
							echo "<div class=\"gov_title\">";
								the_title();
							echo "</div>";
							//echo "<div class=\"gov_date\">";
							//echo get_the_date();
							//echo "</div>";
						echo "</div>";
						echo "</a>";
						$i++;
						endwhile;
?>						
	

				
					
		
			</div><!-- .entry-content -->

		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>