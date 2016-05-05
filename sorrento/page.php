<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
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