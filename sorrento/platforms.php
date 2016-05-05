<?php
/**
/**
 * Template Name: Platforms
 */

get_header(); ?>

	
	</div>

	
		<?php if ( have_posts() ) :
				require get_template_directory() . '/inc/page_title.php'; ?>
    <div id="page" class="hfeed site">
    <div id="subnav-cont">
    	<ul id="platforms-subnav">
    		<li>
            		<a href="/platforms/biosimilars/">
                    	<img src="/wp-content/themes/sorrento/images/subnav-biosimilars.jpg" alt="Biosimilars" title="Biosimilars">
                    	<h2>Biosimilars</h2>
                    </a>
            </li>
    		<li>
            	<a href="/platforms/immuno-oncology-antibodies/">
                    	<img src="/wp-content/themes/sorrento/images/subnav-novel-imunno-oncology-antibodies.jpg" alt=" Immuno-Oncology Antibodies" title="Immuno-Oncology Antibodies">
                    	<h2>Immuno- Oncology Antibodies</h2>
                </a>
        	</li>
    		<li>
            	<a href="/platforms/cellular-therapy/">
                    	<img src="/wp-content/themes/sorrento/images/subnav-cellular-therapy.jpg" alt="Cellular Therapy" title="Cellular Therapy">
                    	<h2>Cellular Therapy</h2>
                </a>
            </li>
    		<li>
            	<a href="/platforms/cell-internalizing-antibodies/">
                    	<img src="/wp-content/themes/sorrento/images/subnav-cell-internalizing-antibodies.jpg" alt="Cell Internalizing Antibodies" title="Cell Internalizing Antibodies">
                  		<h2>Cell Internalizing Antibodies</h2>
                </a>
            </li>
    		<li>
            	<a href="/platforms/mabit-afdc/">
                        <img src="/wp-content/themes/sorrento/images/subnav-antibody-drug-conjugates.jpg" alt="Antibody Drug Conjugates" title="Antibody Drug Conjugates">
                    	<h2>Antibody Drug Conjugates</h2>
                </a>
            </li>
    	</ul>
    </div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>