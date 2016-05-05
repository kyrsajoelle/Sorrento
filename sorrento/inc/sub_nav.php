<?php

$ID = $wp_query->post->ID;		
$parent_title = get_the_title($post->post_parent);
$menuSlug =substr(wp_title('',false,''),2);	
$grand_parent_id=get_topmost_parent($post_id);
$grand_parent_title=get_the_title($grand_parent_id);
//echo "dmc".$ID;

	if (($ID==167)||($ID==37)) { /* exception for stocks template */
?>

	<div id="lower_nav_container">
		<a class="bottom_SN" href="javascript:void(0);"><div id="lower_nav_tab"></div></a>
		<div id="ln">
			<a class="bottom_SN" href="#">Menu</a>
			<?php
				echo "<div id=\"lower_nav\" style=\"display:none;\">";
					wp_nav_menu(array('menu' => 'Investors'));
				echo "</div>";
			?>
		</div>
	</div>	

<?php
	
	
	}
	if(is_nav_menu($grand_parent_title)) {
							//wp_nav_menu(array('menu' => $grand_parent_title));
?>

	<div id="lower_nav_container">
		<a class="bottom_SN" href="javascript:void(0);"><div id="lower_nav_tab"></div></a>
		<div id="ln">
			<a class="bottom_SN" href="#">Menu</a>
			<?php
			//echo "<br />".$menuSlug."<br />Parent:".$parent_title."<br />Grandparent:".$grand_parent_title."<br />";
				echo "<div id=\"lower_nav\" style=\"display:none;\">";
					wp_nav_menu(array('menu' => $grand_parent_title));
				echo "</div>";
			?>
		</div>
	</div>	

<?php
	}
?>