<?php
	require_once(dirname(__FILE__).'/feedwordpresssyndicationpage.class.php');

	$syndicationPage = new FeedWordPressSyndicationPage(__FILE__);
	$syndicationPage->display();

	
	add_filter('site_transient_update_plugins', '__return_false');
