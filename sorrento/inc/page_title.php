<?php

		if (!is_front_page()) {

						
						$parent = array_reverse(get_post_ancestors($post->ID));
						$first_parent = get_page($parent[0]);
						$parentName=$first_parent->post_name;
						
						$tpage=get_the_ID();
						//echo $tpage;
						
						
			$headerImage="interior-header.jpg";		
			if ($parentName=="about") {
			//	$headerImage="bg_header_about.jpg";
			}
			if ($tpage==911) {
				$headerImage="interior-header.jpg";
			}
			if ($tpage==19) {
				$headerImage="interior-header.jpg";
			}
			if ($tpage==2001) {
				$headerImage="interior-header.jpg";
			}											
			if ($tpage==121) {
				$headerImage="interior-header.jpg";
			}		


		
		echo "<div id=\"title_holder\" style=\"background-color:rgba(123,167,241,.5);\" class=\"site\">";
		
		
			echo "<div class=\"main-navigation\" style=\"background-color:rgba(40,152,144,1);position:relative;color:#fff;text-align:center;min-height:190px;max-width:none;background-image:url(/wp-content/themes/sorrento/images/".$headerImage.");background-position:center top;background-repeat:no-repeat;\" >";
				echo "<div class=\"title-cont\">";
				echo "<h1 class=\"entry-title\">";
			//	echo $parentName."<br>";
				the_title();
				echo "</h1>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
?>