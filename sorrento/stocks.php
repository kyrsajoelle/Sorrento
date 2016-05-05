<?php
/**
/**
 * Template Name: Stocks
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
					<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>

				</article><!-- #post -->
		

		</div><!-- #content -->
	</div><!-- #primary -->
		<?php endwhile; ?>
	<div class="entry-content">
		<h3 style="margin-top:0;">Company Filings: <a style="font-size:18px;" id="company_filings" href="#">View &raquo;</a></h3>
		
            <div class="stock-page-content" style="display:none;">
            


<?php

    $loop = new WP_Query( array( 'category_name' => 'Filings', 'posts_per_page' => -1 ) ); 
    $i=0;
	$rowClass="";
    ?>
        <table>
        	<tr>
        		<th style="padding-left:10px;">
        			Filing Date
        		</th>
        		<th>
        			Description
        		</th>
        		<th>
        			Filing Group
        		</th> 
        		<th>
        			Downloads
        		</th>      		
        	</tr>    
    <?php 
    while ( $loop->have_posts() ) : $loop->the_post(); 
    	$categories = get_the_category(); 
		$cat_name = $categories[0]->cat_name;
		$tCont=get_the_content();
		$piece1 = explode("href=\"", $tCont);
		$piece2 = explode("\"",$piece1[1]);
		$last3chars = substr($piece2[0], -3);	
			
    if ($i % 2) {
		$rowClass="odd_news";
	}
	else  { 
		$rowClass="even_news";
	}

    ?>

        <tr class="<?php echo $rowClass; ?>">

        <?php
			echo "<td style=\"padding-left:10px;width:150px;\">";
			the_time(get_option('date_format'));
			echo "</td>";	
			

			
		?>
        
        <td style="width:200px;">
	<?php
		the_title();
	?>			
	<?
		echo "</td>";
		echo "<td>".$cat_name."</td>";	
		echo "<td style=\"text-align:center;width:20%;\">";
		
		?>
		
		<a target="_blank" href="<?php echo $piece2[0] ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
		<?php
		
		if (($last3chars=="pdf")||($last3chars=="PDF")) {		
			echo "<img src=\"/wp-content/themes/sorrento/images/ico_pdf.gif\" width=26 height=27 border=0>";
		}
		else {
			echo "<img src=\"/wp-content/themes/sorrento/images/ico_xbrl.gif\" width=26 height=27 border=0>";		
		}
		echo "</a></td>";
		
	?>
		</tr>
    <?php 
    	$i++;
    	endwhile;

echo "</table>";

echo "<h3 align=\"right\"><a href=\"#top\">Back to Top &raquo;</a></h3>";



echo "</div>";














?>						
	</div>
<?php get_footer(); ?>