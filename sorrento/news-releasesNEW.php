<?php
/**
/**
 * Template Name: News Releases - NEW
 */

get_header();
	
			require get_template_directory() . '/inc/page_title.php';
	?>
	
		<div id="page" class="hfeed site" style="position:absolute;">
			<div id="main" class="site-main">
				<div id="news_cont">
<?php


$rss = new DOMDocument();
$rss->load('http://sorrentotherapeutics.mediaroom.com/api/newsfeed_releases/list.php');
$feed = array();
	foreach ($rss->getElementsByTagName('release') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('headline')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('id')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('releaseDate')->item(0)->nodeValue,
		);
		array_push($feed, $item);
	}

	$limit = 39;
    $i=0;
	$rowClass="";	
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$date = date('F j, Y', strtotime($feed[$x]['date']));
    	if ($x % 2) {
			$rowClass="odd_news";
		}
		else  { 
			$rowClass="even_news";
		}
						echo "<div class=\"".$rowClass."\"><h5><a title=\"".$title."\" href=\"/news/news-display/?id=".$link."\">";
						echo $title;
						echo "</a></h5>";
						echo "<span class=\"news_time\">".$date."</span>";
						echo "</div>";
	}
    ?>

					
<?php get_footer(); ?>