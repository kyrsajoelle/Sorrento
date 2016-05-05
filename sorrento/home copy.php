<?php
/**
 * Template Name: Home OLD
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();

			query_posts( array ( 'category_name' => 'Home Slides', 'posts_per_page' => -1,'order'=>'asc'));
					$i=0;
					while (have_posts()) : the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
						//$bio_name=get_the_title();
						$slide_link=get_post_meta($post->ID, 'link', true);
						$slide_textFloat=get_post_meta($post->ID, 'floated', true);
						$slide_textBG=get_post_meta($post->ID, 'txt_background', true);
						$slide_content=get_the_content();
						$slideArray[$i]=array('fImg' => $feat_image,'sLink'=>$slide_link,'sContent'=>$slide_content,'sFloat'=>$slide_textFloat,'sBG'=>$slide_textBG);	
						$i++;
					endwhile;
			wp_reset_query();
		while ( have_posts() ) : the_post(); 	
	?>
	<div id="page" class="hfeed site">
		<div id="main" class="site-main">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
	
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content" style=""><h1>
						<?php the_content(); ?></h1>
						
						
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	
					</div><!-- .entry-content -->

					<div id="ms-container">					
						<div id="meteor-slideshow" class="meteor-slides navprevnext">
							<div class="meteor-clip">
								<img style="visibility: hidden;max-height:461px;" class="meteor-shim" src="http://sorrentotherapeutics.com/dev/wp-content/uploads/2014/03/cynviloq-home.jpg" alt="" />
<?php
			
			$i=1;
		foreach ($slideArray as $key) {
		
			if ($key["sFloat"]!="") {
				$imgpos="right";
				$txtpos="left";
			}
			else {
				$imgpos="left";
				$txtpos="right";			
			}
			if ($key["sBG"]!="") {
				$text_bg=$key["sBG"];
			}
			else {
				$text_bg="#c5512f";				
			}
		
		
								echo "\n<div class=\"mslide mslide-".$i."\">\n";
									echo "<a href=\"".$key["sLink"]."\">";
										echo "<img style=\"float:".$imgpos.";\" src=\"".$key["fImg"]."\" alt=\"".$key["bName"]."\" />\n";
											echo "<div style=\"float:".$txtpos.";width:35.95%;height:461px;position:relative;background-color:".$text_bg.";\"><p class=\"sContent\">".$key["sContent"]."</p></div>";
									echo "</a>";
								echo "</div>\n";
								echo "\n<div style=\"clear:both;\"></div>\n";
			$i++;
		}	
?>					
							</div><!-- .meteor-clip -->
						</div><!-- .meteor-slides -->
					
					
						<div id="meteor-nav_container">
							<ul class="meteor-nav">
								<li id="meteor-next" class="next"><a href="#next">Next</a></li>
							</ul><!-- .meteor-nav -->
						</div>
					</div><!-- ms-container -->
					<div style="clear:both;"></div>
				</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
		<?php endwhile; ?>
		
				<div id="home_callouts_container">
			<div id="callout-1" class="home_callouts">
				<a href="/dev/programs/cynviloq/" style="color: #CA3C08;">
					<div class="callout_txt" style="padding-top:18%;">Cynviloq<sup>&trade;</sup></div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/circle-cynviloq.png" alt="Cynviloq"><br />
					Next Generation<br />
					Paclitaxel
				</a>
			</div>
			<div id="callout-2" class="home_callouts">
				<a href="/dev/programs/resiniferatoxin-rtx/" style="color:#005978;">
					<div class="callout_txt" style="padding-top:18%;">RTX</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/circle-rtx.png" alt="RTX"><br />
					Non-opiate<br />
					pain therapeutic
				</a>
			</div>
			<div id="callout-3" class="home_callouts" style="background-image: url(wp-content/themes/sorrento_v3/images/bg_side-2_left.png);background-position: right top;background-repeat: no-repeat;min-height:400px;">
				<a href="/dev/sti-technology/g-mab-library/" style="color:#D1B400;">
					<div class="callout_txt" style="padding-top:17%;">G-MAB<sup>&reg;</sup><br />+ADC</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/circle-gmab.png" alt="GMAB"><br />
					Proprietary human<br />
					Ab library and<br />
					ADC technologies
				</a>
			</div>			
			<div style="clear:both;"></div>			
		</div>

<?php get_footer(); ?>