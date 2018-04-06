<?php

class HomeController extends Controller
{
	public function index()
	{
		$feed="http://cbs4indy.com/feed/";
		$rss=new RssDisplay($feed);
		
		
		$feed_data=$rss->getFeedItems(8);
		
		$channel=getChannelInfo();
		
		$this->set('rss_title',$channel->title);
		
	}
}
?>