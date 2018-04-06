<?php

include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from<?php echo $rss_title;?></h1>
	</div>
	<?php
		foreach($feed_data as $item) {?>
		<h3><?php $item->title?></h3>
		<p><?php $item->description?></p>
		<p><?php $item->pubDate?></p>
		<a href="<?php $item->url?>">Read More</a>
		<?php }?>
		
</div>


<?php include('views/elements/footer.php');?>
