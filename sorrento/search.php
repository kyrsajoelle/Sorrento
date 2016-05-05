<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); 
			
						$parent = array_reverse(get_post_ancestors($post->ID));
						$first_parent = get_page($parent[0]);
						$parentName=$first_parent->post_name;
						
						$tpage=get_the_ID();
						//echo $tpage;
						
						
					


		
		echo "<div id=\"title_holder\" style=\"background-color:rgba(123,167,241,.5);\" class=\"site\">";
			echo "<div class=\"main-navigation\" style=\"background-color:rgba(40,152,144,1);position:relative;color:#fff;text-align:center;min-height:190px;max-width:none;background-image:url(/wp-content/themes/sorrento/images/interior-header.jpg);background-position:center top;background-repeat:no-repeat;\" >";
				echo "<div class=\"title-cont\">";
					echo "<h1 class=\"entry-title\" style=\"text-transform:uppercase;\">";
					printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() );
					echo "</h1>";
				echo "</div>";
			echo "</div>";
		echo "</div>";


	?>
	</div>
    <div id="page" class="hfeed site" >
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
		<?php if ( have_posts() ) : ?>



			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">



		<h2 class="entry-titlex">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>


		<div class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->



			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	</div><!-- #page -->

<?php get_footer(); ?>