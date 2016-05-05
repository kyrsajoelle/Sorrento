<?php
/**
 * Template Name: News Display
 *
 */

get_header(); 

$rss = new DOMDocument();
$rss->load('http://sorrentotherapeutics.mediaroom.com/api/newsfeed_releases/get.php?id='.$_GET["id"]);
$feed = array();
	foreach ($rss->getElementsByTagName('release') as $node) {
		$tTitle=$node->getElementsByTagName('headline')->item(0)->nodeValue;
		$tTitle = str_replace(' & ', ' &amp; ', $tTitle);
		$sTitle= $node->getElementsByTagName('subheadline')->item(0)->nodeValue;
		$tBody=$node->getElementsByTagName('body')->item(0)->nodeValue;
		
		$item = array ( 
			'title' => $node->getElementsByTagName('headline')->item(0)->nodeValue,
			'subtitle' => $node->getElementsByTagName('subheadline')->item(0)->nodeValue,
			'body' => $node->getElementsByTagName('body')->item(0)->nodeValue
		);
		array_push($feed, $item);
	}

	$limit = 1;
    $i=0;
	$rowClass="";	
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
	//	$link = $feed[$x]['link'];
	//	$description = $feed[$x]['desc'];
	//	$date = date('F j, Y', strtotime($feed[$x]['date']));
			
		
				//		echo "<div class=\"".$rowClass."\"><h5><a title=\"".$title."\" href=\"http://sorrentotherapeutics.com/dev/news/news-display/?id=".$link."\">";
				//		echo $title;
				//		echo "</a></h5>";
					//	echo "<span class=\"news_time\">".$date."</span>";
					//	echo "</div>";
	}



			echo "<div id=\"title_holder\" style=\"background-color:rgba(123,167,241,.5);\" class=\"site\">";
		
		
			echo "<div class=\"main-navigation\" style=\"background-color:rgba(40,152,144,1);position:relative;color:#fff;text-align:center;min-height:190px;max-width:none;background-image:url(/wp-content/themes/sorrento/images/interior-header.jpg);background-position:center top;background-repeat:no-repeat;\" >";
				echo "<div class=\"title-cont\">";
					echo "<h1 class=\"entry-title\" style=\"text-transform:uppercase;\">";
				
						echo "NEWS RELEASES";
					echo "</h1>";
				echo "</div>";
			echo "</div>";
	
	?>

	</div>
	
	<div id="page" class="hfeed site" style="position:absolute;">

	<!--<div id="primary" class="content-area" style="">  -->
		<div id="content" class="site-content" role="main" >
			<?php
				echo "\n<h2 style=\"font-size: 24px;color: #1f988b;width:90%;max-width:1100px;margin: 0 auto;\">";
				echo $tTitle;
				echo "</h2>\n";
				
				$url = wp_get_referer();
				echo "<div style=\"width:90%;max-width:1100px;margin: 0 auto 1em auto;text-align:right;\"><a href=\"". $url . "\">&laquo; Back to News</a></div>";
						
			
			?>
		<article>
		<div class="entry-content">
			<?php
			echo "<h3>".$sTitle."</h3>";
			
			echo $tBody;
			?>
		</div>
		</article>

		
<?php get_footer(); ?>