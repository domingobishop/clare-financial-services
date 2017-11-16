<?php get_header(); ?>

		<div id="content" class="bc-content" role="main">
        
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
                    <article class="bc-home">
                    	
                        



<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed = fetch_rss('http://feeds.bbci.co.uk/news/rss.xml'); // specify feed url
$items = array_slice($feed->items, 0, 3); // specify first and last item
?>

<?php if (!empty($items)) : ?>
<?php foreach ($items as $item) : ?>

<h4><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h4>
<p><?php echo $item['description']; ?></p>

<?php endforeach; ?>
<?php endif; ?>

<?php
include_once(ABSPATH.WPINC.'/rss.php'); // path to include script
$feed2 = fetch_rss('http://feeds.bbci.co.uk/news/business/rss.xml'); // specify feed url
$items2 = array_slice($feed2->items, 0, 3); // specify first and last item
?>

<?php if (!empty($items2)) : ?>
<?php foreach ($items2 as $item2) : ?>

<h4><a href="<?php echo $item2['link']; ?>"><?php echo $item2['title']; ?></a></h4>
<p><?php echo $item2['description']; ?></p>

<?php endforeach; ?>
<?php endif; ?>
                                
                                
                    </article>
				</div>
			</div>
		</div>
        
		</div><!-- #content -->

<?php get_footer(); ?>