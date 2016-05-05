<?php
/**
/**
 * Template Name: News Releases
 */

get_header();
	
			require get_template_directory() . '/inc/page_title.php';
	?>
		<div style="margin:0 auto;max-width:1200px;">	

	<div id="page" class="hfeed site" style="position:absolute;">
		<div id="main" class="site-main" style="">

		<div id="news_cont">
<?php

    $loop = new WP_Query( array( 'category_name' => 'Press Release', 'posts_per_page' => -1 ) ); 
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
        <div class="<?php echo $rowClass; ?>"><h5><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
	<?php
		the_title();
	?>			
	<?
		echo "</a></h5><span class=\"news_time\">";
			the_time(get_option('date_format'));
		echo "</span>";
	?>
		</div>
    <?php 
    	$i++;
    	endwhile;
?></div>
					
<?php get_footer(); ?>