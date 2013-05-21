<?php
/**
 * @package vicarious for lateralus
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="verify-v1" content="by1MB81PjkQUdjinZJQn73aCwjaV5erxwsvtTP7pTNE=" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<?php vicarious_meta_keywords(); ?>
	
	<link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOBJREFUeNrkUbsKwkAQ3Fs0EbVTP05JpSD4iEUKBb9AO/ErDJJgI5bi72gv8e44Hc9Hk1Owdthib4eZG3ZFzfOISFgYY9Az89WCXBAQgJPGgC8XixidpYSBzwyLvOA+lUqtk2TQ75+yDDUMw1UcX5RyCgqYwvuw38+Xy9PxKJhni8VkNHrkdARDpEaphKbTamkpUe1mE08MQeWL30qYPTJorekL4FQhQgYI4N0NAjRRr1f58AnVfb9KtNtsxjY3MI2ibZpCACoveK3VLv65Vrsfz17GfYefD0e/4C8FNwEGAIXxbCAjm60LAAAAAElFTkSuQmCC" rel="icon" type="image/x-icon" />
	<link rel="apple-touch-icon" href="/wp-content/themes/lateralus/images/apple-touch-icon.png"/>
	
	<title>
		<?php bloginfo('name'); ?> &mdash; <?php is_home() ? bloginfo('description') : wp_title(''); ?>
	</title>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37218996-1']);
  _gaq.push(['_setDomainName', 'rockinguitarlessons.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|Bitter:400,700|Karla:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/feed/" />
	<link rel="pingback" href="/xmlrpc.php" />
	
	<?php wp_head(); ?>

	<!--[if lte IE 8]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<!--[if lt IE 7]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
	<![endif]-->
	
</head>
<body id="page" <?php body_class(); ?>>
<div class="container">
	
	<header id="page-header" class="row">
		
		<nav id="site-nav" class="nine columns" role="navigation">
			<?php if ( !dynamic_sidebar("Navigation") ) : ?>
				<?php wp_nav_menu( array('theme_location' => 'vicarious_primary_navigation', 'container' => false ) ); ?>	
			<?php endif; ?> 
		</nav>
	
			
		
	</header>
