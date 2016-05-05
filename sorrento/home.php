<?php
/**
 * Template Name: Home
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
?>
	
    
    	<section class="cd-hero">
		<ul class="cd-hero-slider autoplay">
			<li class="selected slider1">
				<div class="cd-full-width">
                    <div class="green-bar">
                    	<h2>OnTarget People </h2>
                        <a href="http://sorrentotherapeutics.com/platforms/">
                            <p>Passion and Innovation Drive Our Scientific Team &raquo;</p>
                        </a>
                    </div>
				</div> <!-- .cd-full-width -->
			</li>
			<li class="slider2">
            	<div class="cd-full-width">
                	<div class="green-bar">
                        <h2>OnTarget Facility</h2>
                        <a href="http://sorrentotherapeutics.com/contact-us/">
                            <p>Our New State-of-the-Art Research and Manufacturing Facility &raquo;</p> 
                        </a>
                    </div>
				</div> <!-- .cd-half-width -->
				
			</li>


			<li class="slider3">
             <a href="#0">
				<div class="cd-full-width">
                	<div class="green-bar">
                        <h2>OnTarget Leadership</h2>
                        <a href="http://sorrentotherapeutics.com/company/our-leadership/">
                            <p>Bold Vision and Strategic Execution &raquo;</p>
                        </a>
                    </div>
				</div> <!-- .cd-full-width -->
			</a>
            </li>
			

			
		</ul> <!-- .cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				
				<ul>
					<li class="selected">
                    	<a href="#0">
                    		<div class="hero-circle"></div>
                        </a>
                    </li>
					<li>
                    	<a href="#0">
                    		<div class="hero-circle"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="#0">
                    		<div class="hero-circle"></div>
                        </a>
                    </li>
				</ul>
			</nav> 
		</div> <!-- .cd-slider-nav -->
	</section> <!-- .cd-hero -->
    
    
	<div id="page" class="hfeed site">
		<div id="main" class="site-main">
			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
				
                	<div id="home-circles-container">
                      <div class="home-circle">
                        <a href="/platforms/biosimilars/">
                            <img src="http://sorrentotherapeutics.com/wp-content/uploads/2015/12/biosimilars.jpg" alt="Small Molecules" />
                            </a>
                            <p><a href="/platforms/biosimilars/">Biosimilars</a></p>
                        
                      </div>
                     <div class="home-circle">
                     	<a href="/platforms/immuno-oncology-antibodies/">
                        	<img src="http://sorrentotherapeutics.com/wp-content/uploads/2015/12/novel-immunooncology.jpg" alt="Small Molecules" />
                        </a>
                            <p><a href="/platforms/immuno-oncology-antibodies/">Immuno-<br />Oncology<br />Antibodies</a></p>
                      </div>
                     <div class="home-circle">
                     	<a href="/platforms/cellular-therapy/">
                        	<img src="http://sorrentotherapeutics.com/wp-content/uploads/2015/12/cellular-therapy.jpg" alt="Small Molecules" />
                        </a>	
                            <p><a href="/platforms/cellular-therapy/">Cellular<br />Therapy</a></p>
                      </div>
                     <div class="home-circle">
                     	<a href="/platforms/cell-internalizing-antibodies/">
                            <img src="http://sorrentotherapeutics.com/wp-content/uploads/2015/12/cell-internalizing-antibodies.jpg" alt="Small Molecules" />
                         </a>    
                            <p><a href="/platforms/cell-internalizing-antibodies/">Cell<br />Internalizing<br />Antibodies</a></p>
                      </div>
                     <div class="home-circle">
                     	<a href="/platforms/mabit-afdc/">
                       		<img src="http://sorrentotherapeutics.com/wp-content/uploads/2015/12/antibody-drug.jpg" alt="Small Molecules" />
                        </a>	
                            <p><a href="/platforms/mabit-afdc/">Antibody<br />Drug<br />Conjugates</a></p>
                      </div>

				</div>

			<?php /* The loop */
					while ( have_posts() ) : the_post();  ?>
	
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content" style=""><h1>
						<?php the_content(); ?></h1>
						
						
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	
					</div><!-- .entry-content -->
				<?php	
					
					endwhile;		
				?>
					</div><!-- ms-container -->
					<div style="clear:both;"></div>
				</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
		
		
			
        
       

<?php get_footer(); ?>