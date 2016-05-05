<?php
/**
 * Template Name: Pipeline
 */

get_header(); ?>

<script>
jQuery(document).ready(function($) {
  // for each result row..
  jQuery(".extras_result").each(function() {
    // get the width of the bar from the span html
    var length = $(this).find("span").html();
    // Animate the width of the 'p' with a callback function
    jQuery(this).find("p").animate({'width':length}, 2000, function() {
      // once the bar animation has finished, fade in the results
      jQuery(this).find("span").fadeIn(800);
    });
  });
});
</script>
<style>
.extras_table {
  width:100%;
}
.extras_table td, .extras_table th {
  border:none;
}

.extras_table td {
	background-color:#efefef;
	padding:0;
	border-bottom:5px solid #fff;
}
.extras_table .extras_spacer {
	background-color: transparent;
	padding:0;
	height:12px;
}
.extras_table .extras_x-desc {
/* border-top:1px solid #000; */
	background-color: transparent;
}
/* -------------------changed to fit on one line
.extras_table .extras_y-desc {
 	font-size:18px;
	padding-right:5px;
	text-align:right;
	width:10%;
	vertical-align: middle;
}*/
.extras_table .extras_y-desc {
 	font-size:16px;
	padding-right:5px;
	text-align:right;
	width:15%;
	vertical-align: middle;
	font-weight:normal;
}
/* Sets the max width of the result bar */
.extras_result {
  width:100%;
}
/* Sets the max width of the result bar */
.extras_result p {
  -webkit-border-radius: 0 8px 8px 0; 
  -moz-border-radius: 0 8px 8px 0; 
  border-radius: 0 8px 8px 0; 
}
.extras_table .tth {
	width: 15%;
	border-right: 1px solid #fff;
	text-align: center;
	vertical-align: middle;
	background-color: #555555;
	color:#fff;
	padding:3px 0;
	border-bottom:5px solid #fff;
}
/* This will serve as the bar, make it look nice with a background image or colour gradient */
.extras_result p.extras_p {
  width:0; float:left;
  background:#28998b;
  background: -moz-linear-gradient(left, #28998b, #e5eef1);
  background: -webkit-gradient(linear, left top, right top, from(#28998b), to(#e5eef1));
  filter: progid:DXImageTransform.Microsoft.Gradient(
    StartColorStr='#28998b', EndColorStr='#e5eef1', GradientType=0);
  text-align:left;
  margin:0;
}
.extras_result p.extras_p_red {
	background-color: #9b3f28;
	width:0;
	float:left;
	background: -moz-linear-gradient(left, #c25134, #9b3f28);
	background: -webkit-gradient(linear, left top, right top, from(#c25134), to(#9b3f28));
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#c25134', EndColorStr='#9b3f28', GradientType=0);
	text-align:left;
	margin:0;
	min-height:30px;
}
.extras_result p.extras_p_blue {
	background-color: #064663;
	width:0;
	float:left;
	background: -moz-linear-gradient(left, #6196cc, #064663);
	background: -webkit-gradient(linear, left top, right top, from(#6196cc), to(#064663));
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#6196cc', EndColorStr='#064663', GradientType=0);
	text-align:left;
	margin:0;
	min-height:30px;
}
.extras_result p.extras_p_yellow {
	background-color: #cfb63d;
	width:0;
	float:left;
	background: -moz-linear-gradient(left, #ebd888, #cfb63d);
	background: -webkit-gradient(linear, left top, right top, from(#ebd888), to(#cfb63d));
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#ebd888', EndColorStr='#cfb63d', GradientType=0);
	text-align:left;
	margin:0;
	min-height:30px;
}
.extras_result p.extras_p_brown {
	background-color: #b18d4c;
	width:0;
	float:left;
	background: -moz-linear-gradient(left, #d8bb88, #b18d4c);
	background: -webkit-gradient(linear, left top, right top, from(#d8bb88), to(#b18d4c));
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#d8bb88', EndColorStr='#b18d4c', GradientType=0);
	text-align:left;
	margin:0;
	min-height:30px;
}
.extras_result p.extras_p_gray {
	background-color: #b9c4cc;
	width:0;
	float:left;
	background: -moz-linear-gradient(left, #b9c4cc, #6d7378);
	background: -webkit-gradient(linear, left top, right top, from(#b9c4cc), to(#6d7378));
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#b9c4cc', EndColorStr='#6d7378', GradientType=0);
	text-align:left;
	margin:0;
	min-height:30px;
}
.extras_table .extras_result p.extras_p_green {
	background-color: #4fa995;
	width:0;
	float:left;
	background: -moz-linear-gradient(left, #4fa995, #288a74);
	background: -webkit-gradient(linear, left top, right top, from(#4fa995), to(#288a74));
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#4fa995', EndColorStr='#288a74', GradientType=0);
	text-align:left;
	margin:0;
	min-height:30px;
}
/* Position the result data and set default display to none (for the fade in) */
.extras_result span {
  position:relative;
  padding-left:5px;
  left:40px;
  display:none;
}
/* A class to centre text */
.extras_x-desc p.extras_centreIt {
  text-align:center;
}
.light, .light a {
	color:#fff;
}
.dark, .dark a {
	color:#625512;
}
.light a:hover{
	color:#555555;
}
.dark a:hover {
	color:#fff;
}
.extras_result .blue_Txt {
	color:#08456a;
	display:inline;
	padding:0;
}


table.extras_table2, table.extras_table2 table{
	margin-bottom:0;
	color:#317b6e;
}

table.extras_table2 p { 
	display:none;
}

table.extras_table2 p.extras_p_green { 
	display:block;
}

.extras_table2 .extras_result p.extras_p_green {
	height:18px;
	min-height:18px;
}

.extras_table2 td {
	border-top:0px;
}
.extras_table2 tr,.extras_table2 td table {
	border-bottom:1px solid #a7a9ac;
}

.extras_table2 tr:last-child, .extras_table2 td table:last-child {
	border-bottom:0px;
}


.extras_table2 .extras_result p.extras_p_green {
	background-color: #317b6e;
	width:0;
	float:left;
	text-align:left;
	margin:0;
	min-height:18px;
	border-radius: 0px 0px 0px 0px;
	border: 1px solid #535948;
}

.extras_table2 .extras_result p.extras_p_green.light {
	background-color:#f3f4f5;
}

.extras_table2 .extras_result p.extras_p_green.mid2 {
	background-color:#a8bcb6;
}

.extras_table2 .extras_result p.extras_p_green.mid1 {
	background-color:#82a39a;
}

.extras_table2 strong.title {
	font-size:1.3em;
	
}

.extras_table2 strong.title.small {
	font-size:.9em;
	
}

.extras_table2 .asterisk {
	color:#59595c;
	font-size:1.2em;
}

.extras_table2 th {
	padding-bottom:.7em;
}

@media (max-width: 643px) { /* iphone */
	.extras_table .extras_y-desc {
		font-size: 12px;
	}
	.extras_table {
		font-size: 10.5px;
	}
}

</style>

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