<?php

include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $rss_title;?></h1>
	</div>
	
	<div>
	<img src="<?php echo BASE_URL;?>/views/home/lightening.jpg" alt="Lightening" width="200" height="200"/>
	</div>
	<?php
		foreach($feed_data as $item) {?>
		<h3><?php echo $item->title?></h3>
		<p><?php echo $item->description?></p>
		<p><?php echo $item->pubDate?></p>
		<a href="<?php echo $item->guid?>">Read More</a>
		<?php }?>
		
		
		
</div>


<?php include('views/elements/footer.php');?>
