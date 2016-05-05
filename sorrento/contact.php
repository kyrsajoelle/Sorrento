<?php
/**
/**
 * Template Name: Contact
 */

get_header(); ?>


	<?php

		while ( have_posts() ) : the_post(); 	
			require get_template_directory() . '/inc/page_title.php';
	?>
    <div style="margin:0 auto;">
		<div id="page" class="hfeed site">
			<div id="main" class="site-main">
				<div id="primary" class="content-area">
					<div id="content" class="site-content" role="main">
                    <iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.7540794151228!2d-117.208185048817!3d32.87822548603084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc0731a73961b5%3A0xb2ac28b0922520ea!2s9380+Judicial+Dr%2C+San+Diego%2C+CA+92121!5e0!3m2!1sen!2sus!4v1451496776221" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						
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
					<?php
					
					if ( is_user_logged_in() ) {
					?>
					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
					
					<?php
					}
					?>
				</article><!-- #post -->
		

		</div><!-- #content -->
	</div><!-- #primary -->
		<?php endwhile; ?>

<?php get_footer(); ?>