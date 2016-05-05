<?php
/**
/**
 * Template Name: Careers
 */

get_header(); ?>


	<?php

		while ( have_posts() ) : the_post(); 	
			require get_template_directory() . '/inc/page_title.php';
	?>
	

	<div id="page" class="hfeed site" style="position:absolute;">
		<div id="main" class="site-main">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>				
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
		<?php endwhile; ?>
		
		<div id="careers_cont">
			<h3>Available Positions:</h3>
<?php

    $loop = new WP_Query( array( 'category_name' => 'Careers', 'posts_per_page' => -1 ) ); 
    $i=0;
	$rowClass="";
    ?>
    <?php 
    while ( $loop->have_posts() ) : $loop->the_post(); 
    
    if ($i % 2) {
		$rowClass="odd_news";
	}
	else  { 
		$rowClass="even_news";
	}

    ?>
        <div class="<?php echo $rowClass; ?>"><a class="career_link" href="#" rel="bookmark">
        	<h5>
        	<?php
				the_title();
			echo "</h5></a>";
		
			echo "<div style=\"display:none;padding:0 25px;\">";
				the_content();
			echo"</div>";
		
	?>
		</div>
    <?php 
    	$i++;
    	endwhile;
    	if ($i==0) {
    		echo "No Job Postings at this time.";
    	}
?>
					
<?php get_footer(); ?>