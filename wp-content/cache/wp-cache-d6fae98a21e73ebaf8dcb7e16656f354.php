<?php die(); ?><!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />

<title>The MidoNet Blog - Open Source Network Virtualization</title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://blog.midonet.org/xmlrpc.php">

<!-- This site is optimized with the Yoast SEO plugin v3.0.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Open Source Network Virtualization"/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="https://blog.midonet.org" />
<link rel="next" href="https://blog.midonet.org/page/2/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="The MidoNet Blog - Open Source Network Virtualization" />
<meta property="og:description" content="Open Source Network Virtualization" />
<meta property="og:url" content="https://blog.midonet.org" />
<meta property="og:site_name" content="The MidoNet Blog" />
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Open Source Network Virtualization"/>
<meta name="twitter:title" content="The MidoNet Blog - Open Source Network Virtualization"/>
<meta name="twitter:site" content="@midonet"/>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/blog.midonet.org\/","name":"The MidoNet Blog","potentialAction":{"@type":"SearchAction","target":"https:\/\/blog.midonet.org\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="The MidoNet Blog &raquo; Feed" href="https://blog.midonet.org/feed/" />
<link rel="alternate" type="application/rss+xml" title="The MidoNet Blog &raquo; Comments Feed" href="https://blog.midonet.org/comments/feed/" />
<!-- This site is powered by Shareaholic - https://shareaholic.com -->
<script type='text/javascript' data-cfasync='false'>
  //<![CDATA[
    _SHR_SETTINGS = {"endpoints":{"local_recs_url":"https:\/\/blog.midonet.org\/wp-admin\/admin-ajax.php?action=shareaholic_permalink_related","share_counts_url":"https:\/\/blog.midonet.org\/wp-admin\/admin-ajax.php?action=shareaholic_share_counts_api"}};
  //]]>
</script>
<script type='text/javascript'
        src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js'
        data-shr-siteid='99723b3a9c306fcdb8ef93b8f4b2d3ba'
        data-cfasync='false'
        async='async' >
</script>

<!-- Shareaholic Content Tags -->
<meta name='shareaholic:site_name' content='The MidoNet Blog' />
<meta name='shareaholic:language' content='en-US' />
<meta name='shareaholic:site_id' content='99723b3a9c306fcdb8ef93b8f4b2d3ba' />
<meta name='shareaholic:wp_version' content='7.6.0.4' />

<!-- Shareaholic Content Tags End -->
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"https:\/\/blog.midonet.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.1"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='https://blog.midonet.org/wp-includes/css/dashicons.min.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='https://blog.midonet.org/wp-includes/css/admin-bar.min.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='wsl-widget-css'  href='https://blog.midonet.org/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='https://blog.midonet.org/wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=2.17.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='https://blog.midonet.org/wp-includes/js/mediaelement/wp-mediaelement.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='casper-google-fonts-css'  href='//fonts.googleapis.com/css?family=Noto+Serif%3A400%2C700%2C400italic%7COpen+Sans%3A700%2C400&#038;ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='casper-style-css'  href='https://blog.midonet.org/wp-content/themes/casper/style.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://blog.midonet.org/wp-content/plugins/jetpack/css/jetpack.css?ver=3.8.0' type='text/css' media='all' />
<!-- This site uses the Google Analytics by Yoast plugin v5.4.6 - Universal disabled - https://yoast.com/wordpress/plugins/google-analytics/ -->
<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-56283377-3']);
	_gaq.push(['_gat._forceSSL']);
	_gaq.push(['_trackPageview']);

	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();

</script>
<!-- / Google Analytics by Yoast -->
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/_inc/spin.js?ver=1.3'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/_inc/jquery.spin.js?ver=1.3'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://blog.midonet.org/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://blog.midonet.org/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.3.1" />
<link rel='shortlink' href='https://wp.me/5ls6g' />

<link rel='dns-prefetch' href='//jetpack.wordpress.com'>
<link rel='dns-prefetch' href='//s0.wp.com'>
<link rel='dns-prefetch' href='//s1.wp.com'>
<link rel='dns-prefetch' href='//s2.wp.com'>
<link rel='dns-prefetch' href='//public-api.wordpress.com'>
<link rel='dns-prefetch' href='//0.gravatar.com'>
<link rel='dns-prefetch' href='//1.gravatar.com'>
<link rel='dns-prefetch' href='//2.gravatar.com'>
<link rel='dns-prefetch' href='//i0.wp.com'>
<link rel='dns-prefetch' href='//i1.wp.com'>
<link rel='dns-prefetch' href='//i2.wp.com'>
<style type='text/css'>img#wpstats{display:none}</style>
   	<style type="text/css">
					.blog-title a, .blog-description, .social-icons a { color: #ffffff; }
		
								    .site-head { background-color: 303538; }
		                
					section a { color: 4a4a4a; }
		
					a:hover, body .blog-title a:hover, body .social-icons a:hover { color: 21bfe7; }
							.main-navigation a { color: ffffff; }
		                	.main-navigation a { color: 50585D; }
                        	.home .main-navigation a { color: ffffff; }
                                    </style>
    <style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
<link rel="icon" href="https://blog.midonet.org/wp-content/uploads/2014/11/cropped-512pxMidoMark-5466cc4e_site_icon1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://blog.midonet.org/wp-content/uploads/2014/11/cropped-512pxMidoMark-5466cc4e_site_icon1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://blog.midonet.org/wp-content/uploads/2014/11/cropped-512pxMidoMark-5466cc4e_site_icon1-180x180.png">
<meta name="msapplication-TileImage" content="https://blog.midonet.org/wp-content/uploads/2014/11/cropped-512pxMidoMark-5466cc4e_site_icon1-270x270.png">

<style type='text/css'>
#wpadminbar .quicklinks li#wp-admin-bar-stats {
	height: 28px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a {
	height: 28px;
	padding: 0;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a div {
	height: 28px;
	width: 95px;
	overflow: hidden;
	margin: 0 10px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a:hover div {
	width: auto;
	margin: 0 8px 0 10px;
}
#wpadminbar .quicklinks li#wp-admin-bar-stats a img {
	height: 24px;
	padding: 2px 0;
	max-width: none;
	border: none;
}
</style>
<script type="text/javascript">
/* <![CDATA[ */
	var wpNotesIsJetpackClient = true;
	var wpNotesIsJetpackClientV2 = true;
	var wpNotesLinkAccountsURL = 'https://blog.midonet.org/wp-admin/admin.php?page=jetpack';
/* ]]> */
</script>
</head>

<body class="home blog logged-in admin-bar no-customize-support group-blog infinite-scroll neverending">

<header id="masthead" role="banner" class="site-head site-header" style="background-image: url(https://blog.midonet.org/wp-content/uploads/2014/11/header.jpg);">
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <div>
            <h1 class="menu-toggle">
                <a class="icon-bars" href="#">
                    <span class="hidden">Menu</span>
                </a>
            </h1>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <div class="menu-menu-1-container"><ul id="menu-menu-1" class="menu"><li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a href="https://blog.midonet.org/">HOME</a></li>
<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="https://github.com/midonet/midonet/wiki" onclick="_gaq.push(['_trackEvent', 'outbound-widget', 'https://github.com/midonet/midonet/wiki', 'WIKI']);" >WIKI</a></li>
</ul></div>        </div>
    </nav><!-- #site-navigation -->

    <div class="vertical-row">
        <div class="vertical">
            <div class="site-head-content inner">
                                    <a class="blog-logo" href='https://blog.midonet.org/' rel='home'><img src='https://blog.midonet.org/wp-content/uploads/2014/11/midonetmark.png' alt='The MidoNet Blog'></a>
                
                <div class="social-icons">
                                            <a class="icon-youtube" target="_blank" href="https://www.youtube.com/channel/UCPzQ9uc-nGqzqvgOZ3GNOXg">
                            <span class="hidden">Youtube</span>
                        </a>
                                                                                                                                                <a class="icon-twitter" target="_blank" href="https://twitter.com/midonet">
                            <span class="hidden">Twitter</span>
                        </a>
                                                                <a class="icon-home" target="_blank" href="https://www.midonet.org">
                            <span class="hidden">Home</span>
                        </a>
                                                                                                        <a class="icon-github-alt" target="_blank" href="https://github.com/midonet/">
                            <span class="hidden">GitHub</span>
                        </a>
                                                                                                                                                                                                                                                                </div>
                <h1 class="blog-title"><a class="blog-logo" href='https://blog.midonet.org/' rel='home'>The MidoNet Blog</a></h1>
                <h2 class="blog-description">Open Source Network Virtualization</h2>
            </div>
        </div>
    </div>
</header><!-- #masthead -->

<main id="content" class="content" role="main">


		
						
				
<article id="post-561" class="post-561 post type-post status-publish format-standard has-post-thumbnail hentry category-midonet-update category-openstack category-releases">
		    <header class="post-header">
        			<span class="post-meta">
				<span class="posted-on"><a href="https://blog.midonet.org/midonet-5-0-0-release/" rel="bookmark"><time class="entry-date published" datetime="2015-11-13T11:56:23+00:00">November 13, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/jf_joly/">JF Joly</a></span></span> on <a href="https://blog.midonet.org/category/midonet-update/" rel="category tag">MidoNet Update</a>, <a href="https://blog.midonet.org/category/openstack/" rel="category tag">OpenStack</a>, <a href="https://blog.midonet.org/category/releases/" rel="category tag">Releases</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=561&amp;action=edit">Edit&rarr;</a></span>			</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/midonet-5-0-0-release/" rel="bookmark">MidoNet 5.0.0 release</a></h1>
        
        	<div class="post-image">
        		<img data-src='<480:https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay-150x150.jpg, <768:https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay-300x169.jpg, >768:https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay.jpg' />
			</div>
			<noscript><img width="150" height="150" src="https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="MidoDay" /></noscript>
	     
    </header>
	<section class="post-content">

		<p>The MidoNet project is pleased to announce the release of MidoNet 5.0.0. MidoNet brings production-grade distributed overlay networking to OpenStack and containers. Overview of the release It is the 5th release of the project as Open Source software. This version is compatible with Openstack Kilo and Liberty. &nbsp; This release particularly focuses on usability and additional network <a class="read-more" href="https://blog.midonet.org/midonet-5-0-0-release/">&hellip;&nbsp;<span class="meta-nav">&rarr;</span></a></p>
	    		<div class="clear">&nbsp;</div>
	</section>
</article><!-- #post-## -->
			
				
<article id="post-529" class="post-529 post type-post status-publish format-standard hentry category-community category-dev category-docker category-openstack">
		    <header class="post-header">
        			<span class="post-meta">
				<span class="posted-on"><a href="https://blog.midonet.org/kuryr-midonet-networking-docker-1-9/" rel="bookmark"><time class="entry-date published" datetime="2015-11-03T17:00:41+00:00">November 3, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/antoni_segura_puimedon/">Antoni Segura Puimedon</a></span></span> on <a href="https://blog.midonet.org/category/community/" rel="category tag">Community</a>, <a href="https://blog.midonet.org/category/dev/" rel="category tag">Development</a>, <a href="https://blog.midonet.org/category/docker/" rel="category tag">Docker</a>, <a href="https://blog.midonet.org/category/openstack/" rel="category tag">OpenStack</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=529&amp;action=edit">Edit&rarr;</a></span>			</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/kuryr-midonet-networking-docker-1-9/" rel="bookmark">Kuryr brings MidoNet networking to Docker 1.9</a></h1>
         
    </header>
	<section class="post-content">

		<p>Last week at the OpenStack Summit in Tokyo, Kuryr, the project in which we have been working hard the past few months was unveiled as the community solution to bring all the benefits from Neutron to the container networking world. OpenStack Kuryr is part of Neutron&#8217;s stadium and has seen contribution from quite a few <a class="read-more" href="https://blog.midonet.org/kuryr-midonet-networking-docker-1-9/">&hellip;&nbsp;<span class="meta-nav">&rarr;</span></a></p>
	    		<div class="clear">&nbsp;</div>
	</section>
</article><!-- #post-## -->
			
				
<article id="post-517" class="post-517 post type-post status-publish format-standard hentry category-community category-event">
		    <header class="post-header">
        			<span class="post-meta">
				<span class="posted-on"><a href="https://blog.midonet.org/midonet-mini-summit-is-now-midoday-tokyo-2015/" rel="bookmark"><time class="entry-date published" datetime="2015-10-01T18:19:42+00:00">October 1, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/sandro_mathys/">Sandro Mathys</a></span></span> on <a href="https://blog.midonet.org/category/community/" rel="category tag">Community</a>, <a href="https://blog.midonet.org/category/event/" rel="category tag">Event</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=517&amp;action=edit">Edit&rarr;</a></span>			</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/midonet-mini-summit-is-now-midoday-tokyo-2015/" rel="bookmark">MidoNet Mini-Summit is now MidoDay Tokyo 2015</a></h1>
         
    </header>
	<section class="post-content">

		<p>Heads-up: the MidoNet Mini-Summit has a new name: MidoDay Tokyo 2015! Shorter and more to the point, isn&#8217;t it? After all, we offer a full day MidoNet experience! The Eventbrite registration page as well as the wiki page with the full details of the event are still the same, check them out now!</p>
	    		<div class="clear">&nbsp;</div>
	</section>
</article><!-- #post-## -->
			
				
<article id="post-505" class="post-505 post type-post status-publish format-standard hentry category-community category-event category-openstack">
		    <header class="post-header">
        			<span class="post-meta">
				<span class="posted-on"><a href="https://blog.midonet.org/announcing-the-agenda-of-the-midonet-mini-summit-tokyo/" rel="bookmark"><time class="entry-date published" datetime="2015-09-29T05:24:42+00:00">September 29, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/sandro_mathys/">Sandro Mathys</a></span></span> on <a href="https://blog.midonet.org/category/community/" rel="category tag">Community</a>, <a href="https://blog.midonet.org/category/event/" rel="category tag">Event</a>, <a href="https://blog.midonet.org/category/openstack/" rel="category tag">OpenStack</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=505&amp;action=edit">Edit&rarr;</a></span>			</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/announcing-the-agenda-of-the-midonet-mini-summit-tokyo/" rel="bookmark">Announcing the Agenda of the MidoNet Mini-Summit Tokyo</a></h1>
         
    </header>
	<section class="post-content">

		<p>[Update: MidoNet Mini-Summit has since been renamed MidoDay Tokyo 2015] You might have heard about the first-ever MidoNet Mini-Summit in Tokyo on October 26, 2015 &#8211; the day before OpenStack Summit Tokyo. But back when we announced it, we were still working on the agenda, and asking for input about what people would like to <a class="read-more" href="https://blog.midonet.org/announcing-the-agenda-of-the-midonet-mini-summit-tokyo/">&hellip;&nbsp;<span class="meta-nav">&rarr;</span></a></p>
	    		<div class="clear">&nbsp;</div>
	</section>
</article><!-- #post-## -->
			
				
<article id="post-497" class="post-497 post type-post status-publish format-standard hentry category-dev category-midonet-update category-operators tag-cluster tag-midonet tag-nsdb tag-zookeeper">
		    <header class="post-header">
        			<span class="post-meta">
				<span class="posted-on"><a href="https://blog.midonet.org/introducing-midonet-cluster-services/" rel="bookmark"><time class="entry-date published" datetime="2015-09-09T17:15:10+00:00">September 9, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/galo_navarro/">Galo Navarro</a></span></span> on <a href="https://blog.midonet.org/category/dev/" rel="category tag">Development</a>, <a href="https://blog.midonet.org/category/midonet-update/" rel="category tag">MidoNet Update</a>, <a href="https://blog.midonet.org/category/operators/" rel="category tag">Operators</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=497&amp;action=edit">Edit&rarr;</a></span>			</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/introducing-midonet-cluster-services/" rel="bookmark">Introducing MidoNet Cluster services</a></h1>
         
    </header>
	<section class="post-content">

		<p>In this post, we&#8217;ll introduce the new management services included with the next version of MidoNet (5.0.0) that will be released in late September 2015. Those acquainted with the MidoNet architecture will already be familiar with the MidoNet Agent.  This daemon runs on hypervisors and gateways managing a set of datapath ports that reside physically <a class="read-more" href="https://blog.midonet.org/introducing-midonet-cluster-services/">&hellip;&nbsp;<span class="meta-nav">&rarr;</span></a></p>
	    		<div class="clear">&nbsp;</div>
	</section>
</article><!-- #post-## -->
			
				
<article id="post-482" class="post-482 post type-post status-publish format-standard hentry category-community category-event category-openstack tag-mini-summit tag-tokyo tag-training">
		    <header class="post-header">
        			<span class="post-meta">
				<span class="posted-on"><a href="https://blog.midonet.org/announcing-midonet-mini-summit-tokyo-october-26/" rel="bookmark"><time class="entry-date published" datetime="2015-09-01T04:42:18+00:00">September 1, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/sandro_mathys/">Sandro Mathys</a></span></span> on <a href="https://blog.midonet.org/category/community/" rel="category tag">Community</a>, <a href="https://blog.midonet.org/category/event/" rel="category tag">Event</a>, <a href="https://blog.midonet.org/category/openstack/" rel="category tag">OpenStack</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=482&amp;action=edit">Edit&rarr;</a></span>			</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/announcing-midonet-mini-summit-tokyo-october-26/" rel="bookmark">Announcing MidoNet Mini-Summit Tokyo (October 26)</a></h1>
         
    </header>
	<section class="post-content">

		<p>[Update: MidoNet Mini-Summit has since been renamed MidoDay Tokyo 2015] We&#8217;re happy to announce the first-ever MidoNet Mini-Summit! If you&#8217;re going to the OpenStack Summit Tokyo, this is an ideal chance for you to meet fellow operators and our developers. Of course, you&#8217;ll also learn about the current state of MidoNet, get an outlook of what <a class="read-more" href="https://blog.midonet.org/announcing-midonet-mini-summit-tokyo-october-26/">&hellip;&nbsp;<span class="meta-nav">&rarr;</span></a></p>
	    		<div class="clear">&nbsp;</div>
	</section>
</article><!-- #post-## -->
			
				
<article id="post-474" class="post-474 post type-post status-publish format-standard hentry category-uncategorized">
		    <header class="post-header">
        			<span class="post-meta">
				<span class="posted-on"><a href="https://blog.midonet.org/midonet-2015-06-2-release/" rel="bookmark"><time class="entry-date published" datetime="2015-08-10T14:45:36+00:00">August 10, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/jjmendozapons/">jjmendozapons</a></span></span> on <a href="https://blog.midonet.org/category/uncategorized/" rel="category tag">Uncategorized</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=474&amp;action=edit">Edit&rarr;</a></span>			</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/midonet-2015-06-2-release/" rel="bookmark">MidoNet 2015.06.2 release</a></h1>
         
    </header>
	<section class="post-content">

		<p>The MidoNet project is pleased to announce the release of MidoNet 2015.06.2 Details of fixed issues are available here. The packages are available in the repositories (see URL in the release notes). See the MidoNet documentation for details on installing and operating MidoNet. If you have any question, please reach out via Slack or on <a class="read-more" href="https://blog.midonet.org/midonet-2015-06-2-release/">&hellip;&nbsp;<span class="meta-nav">&rarr;</span></a></p>
	    		<div class="clear">&nbsp;</div>
	</section>
</article><!-- #post-## -->
			
				<nav class="pagination navigation paging-navigation" role="navigation">
		<div class="nav-links">
						<div class="older-posts"><a href="https://blog.midonet.org/page/2/" >Older Posts <span class="meta-nav">&rarr;</span></a></div>
							<div class="page-number">Page 1 of 5</div>
			
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	

		

	<div id="secondary" class="widget-area" role="complementary">
		<aside id="categories-2" class="widget widget_categories"><h1 class="widget-title">Categories</h1><label class="screen-reader-text" for="cat">Categories</label><select name='cat' id='cat' class='postform' >
	<option value='-1'>Select Category</option>
	<option class="level-0" value="4">Community&nbsp;&nbsp;(14)</option>
	<option class="level-0" value="3">Development&nbsp;&nbsp;(4)</option>
	<option class="level-0" value="30">Docker&nbsp;&nbsp;(2)</option>
	<option class="level-0" value="7">Event&nbsp;&nbsp;(7)</option>
	<option class="level-0" value="15">Internals&nbsp;&nbsp;(1)</option>
	<option class="level-0" value="8">MidoNet Update&nbsp;&nbsp;(4)</option>
	<option class="level-0" value="5">Newsletter&nbsp;&nbsp;(1)</option>
	<option class="level-0" value="27">OpenStack&nbsp;&nbsp;(4)</option>
	<option class="level-0" value="12">Operators&nbsp;&nbsp;(4)</option>
	<option class="level-0" value="16">Overview&nbsp;&nbsp;(4)</option>
	<option class="level-0" value="22">Rants&nbsp;&nbsp;(1)</option>
	<option class="level-0" value="18">Releases&nbsp;&nbsp;(5)</option>
	<option class="level-0" value="1">Uncategorized&nbsp;&nbsp;(4)</option>
	<option class="level-0" value="25">Zookeeper&nbsp;&nbsp;(1)</option>
</select>

<script type='text/javascript'>
/* <![CDATA[ */
(function() {
	var dropdown = document.getElementById( "cat" );
	function onCatChange() {
		if ( dropdown.options[ dropdown.selectedIndex ].value > 0 ) {
			location.href = "https://blog.midonet.org/?cat=" + dropdown.options[ dropdown.selectedIndex ].value;
		}
	}
	dropdown.onchange = onCatChange;
})();
/* ]]> */
</script>

</aside><aside id="search-2" class="widget widget_search"><h1 class="widget-title">Find Articles</h1><form role="search" method="get" class="search-form" action="https://blog.midonet.org/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></aside><aside id="archives-4" class="widget widget_archive"><h1 class="widget-title">Archives</h1>		<ul>
	<li><a href='https://blog.midonet.org/2015/11/'>November 2015</a>&nbsp;(2)</li>
	<li><a href='https://blog.midonet.org/2015/10/'>October 2015</a>&nbsp;(1)</li>
	<li><a href='https://blog.midonet.org/2015/09/'>September 2015</a>&nbsp;(3)</li>
	<li><a href='https://blog.midonet.org/2015/08/'>August 2015</a>&nbsp;(2)</li>
	<li><a href='https://blog.midonet.org/2015/07/'>July 2015</a>&nbsp;(1)</li>
	<li><a href='https://blog.midonet.org/2015/06/'>June 2015</a>&nbsp;(2)</li>
	<li><a href='https://blog.midonet.org/2015/05/'>May 2015</a>&nbsp;(1)</li>
	<li><a href='https://blog.midonet.org/2015/04/'>April 2015</a>&nbsp;(2)</li>
	<li><a href='https://blog.midonet.org/2015/03/'>March 2015</a>&nbsp;(2)</li>
	<li><a href='https://blog.midonet.org/2015/02/'>February 2015</a>&nbsp;(2)</li>
	<li><a href='https://blog.midonet.org/2015/01/'>January 2015</a>&nbsp;(3)</li>
	<li><a href='https://blog.midonet.org/2014/12/'>December 2014</a>&nbsp;(8)</li>
	<li><a href='https://blog.midonet.org/2014/11/'>November 2014</a>&nbsp;(2)</li>
		</ul>
</aside>		<div class="clear">&nbsp;</div>
	</div><!-- #secondary -->
	<footer id="colophon" class="site-footer" role="contentinfo">
	    <a class="subscribe icon-feed" href="https://blog.midonet.org/feed/"><span class="tooltip">Subscribe!</span></a>
		<div class="site-info inner">
		    <section class="copyright">
		    	Supported by <a href="http://midokura.com">Midokura</a>
<br />© 2011 - 2015		    </section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</main><!-- /#content -->

		<script type="text/javascript">
		//<![CDATA[
		var infiniteScroll = {"settings":{"id":"main","ajaxurl":"https:\/\/blog.midonet.org\/?infinity=scrolling","type":"scroll","wrapper":true,"wrapper_class":"infinite-wrap","footer":"page","click_handle":"1","text":"Older posts","totop":"Scroll back to top","currentday":"10.08.15","order":"DESC","scripts":[],"styles":[],"google_analytics":false,"offset":0,"history":{"host":"blog.midonet.org","path":"\/page\/%d\/","use_trailing_slashes":true,"parameters":""},"query_args":{"error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","static":"","pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"comments_popup":"","meta_key":"","meta_value":"","preview":"","s":"","sentence":"","fields":"","menu_order":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"posts_per_page":7,"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":true,"update_post_term_cache":true,"update_post_meta_cache":true,"post_type":"","nopaging":false,"comments_per_page":"50","no_found_rows":false,"order":"DESC"},"last_post_date":"2015-08-10 14:45:36"}};
		//]]>
		</script>
			<div style="display:none">
	</div>
		<div id="infinite-footer">
			<div class="container">
				<div class="blog-info">
					<a id="infinity-blog-title" href="https://blog.midonet.org/" rel="home">
						The MidoNet Blog					</a>
				</div>
				<div class="blog-credits">
					<a href="http://wordpress.org/" rel="generator">Proudly powered by WordPress</a> Theme: Casper.				</div>
			</div>
		</div><!-- #infinite-footer -->
		<link rel='stylesheet' id='wpcom-notes-admin-bar-css'  href='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.css?ver=3.8.0-201548' type='text/css' media='all' />
<link rel='stylesheet' id='noticons-css'  href='https://s0.wp.com/i/noticons/noticons.css?ver=3.8.0-201548' type='text/css' media='all' />
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/admin-bar.min.js?ver=4.3.1'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/infinite-scroll/infinity.js?ver=20141016'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/shortcodes/js/jquery.cycle.js?ver=2.9999.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetpackSlideshowSettings = {"spinner":"https:\/\/blog.midonet.org\/wp-content\/plugins\/jetpack\/modules\/shortcodes\/img\/slideshow-loader.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/shortcodes/js/slideshow-shortcode.js?ver=20121214.1'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/photon/photon.js?ver=20130122'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201548'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.17.0'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/mediaelement/wp-mediaelement.js?ver=4.3.1'></script>
<script type='text/javascript' src='https://secure.gravatar.com/js/gprofiles.js?ver=2015Novaa'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":"1655e4646e096b4fd9552d71bdcb0c79"};
/* ]]> */
</script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/wpgroho.js?ver=4.3.1'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/themes/casper/js/main.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/underscore.min.js?ver=1.6.0'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/backbone.min.js?ver=1.1.2'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/js/mustache.js?ver=3.8.0-201548'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/mu-plugins/notes/notes-common-v2.js?ver=3.8.0-201548'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.js?ver=3.8.0-201548'></script>
<script type="text/javascript">
			jQuery.extend( infiniteScroll.settings.scripts, ["jquery-core","jquery-migrate","jquery","spin","jquery.spin","admin-bar","the-neverending-homepage","jquery-cycle","jetpack-slideshow","jetpack-photon","devicepx","mediaelement","wp-mediaelement","grofiles-cards","wpgroho","casper-index","underscore","backbone","mustache","wpcom-notes-common","wpcom-notes-admin-bar"] );
			jQuery.extend( infiniteScroll.settings.styles, ["open-sans","dashicons","admin-bar","the-neverending-homepage","jetpack-slideshow","wsl-widget","mediaelement","wp-mediaelement","casper-google-fonts","casper-style","jetpack_css","wpcom-notes-admin-bar","noticons"] );
		</script>	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq nojs">
							<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/about.php">About WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item"  href="https://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item"  href="https://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item"  href="https://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item"  href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/">The MidoNet Blog</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/">Dashboard</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/themes.php">Themes</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/widgets.php">Widgets</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/nav-menus.php">Menus</a>		</li>
		<li id="wp-admin-bar-background" class="hide-if-customize"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/themes.php?page=custom-background">Background</a>		</li>
		<li id="wp-admin-bar-header" class="hide-if-customize"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/themes.php?page=custom-header">Header</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/customize.php?url=https%3A%2F%2Fblog.midonet.org%2F">Customize</a>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/edit-comments.php" title="0 comments awaiting moderation"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/user-new.php">User</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-menu" class="menupop"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_dashboard">SEO</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-menu-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-kwresearch" class="menupop"><div class="ab-item ab-empty-item"  aria-haspopup="true">Keyword Research</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-kwresearch-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-adwordsexternal"><a class="ab-item"  href="http://adwords.google.com/keywordplanner" target="_blank">AdWords External</a>		</li>
		<li id="wp-admin-bar-wpseo-googleinsights"><a class="ab-item"  href="http://www.google.com/insights/search/#q=&#038;cmpt=q" target="_blank">Google Insights</a>		</li>
		<li id="wp-admin-bar-wpseo-wordtracker"><a class="ab-item"  href="http://tools.seobook.com/keyword-tools/seobook/?keyword=" target="_blank">SEO Book</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-analysis" class="menupop"><div class="ab-item ab-empty-item"  aria-haspopup="true">Analyze this page</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-analysis-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-inlinks-ose"><a class="ab-item"  href="//moz.com/researchtools/ose/links?site=https%3A%2F%2Fblog.midonet.org" target="_blank">Check Inlinks (OSE)</a>		</li>
		<li id="wp-admin-bar-wpseo-kwdensity"><a class="ab-item"  href="//www.zippy.co.uk/keyworddensity/index.php?url=https%3A%2F%2Fblog.midonet.org&#038;keyword=" target="_blank">Check Keyword Density</a>		</li>
		<li id="wp-admin-bar-wpseo-cache"><a class="ab-item"  href="//webcache.googleusercontent.com/search?strip=1&#038;q=cache:https%3A%2F%2Fblog.midonet.org" target="_blank">Check Google Cache</a>		</li>
		<li id="wp-admin-bar-wpseo-header"><a class="ab-item"  href="//quixapp.com/headers/?r=https%3A%2F%2Fblog.midonet.org" target="_blank">Check Headers</a>		</li>
		<li id="wp-admin-bar-wpseo-richsnippets"><a class="ab-item"  href="//www.google.com/webmasters/tools/richsnippets?q=https%3A%2F%2Fblog.midonet.org" target="_blank">Check Rich Snippets</a>		</li>
		<li id="wp-admin-bar-wpseo-facebookdebug"><a class="ab-item"  href="//developers.facebook.com/tools/debug/og/object?q=https%3A%2F%2Fblog.midonet.org" target="_blank">Facebook Debugger</a>		</li>
		<li id="wp-admin-bar-wpseo-pinterestvalidator"><a class="ab-item"  href="//developers.pinterest.com/rich_pins/validator/?link=https%3A%2F%2Fblog.midonet.org" target="_blank">Pinterest Rich Pins Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-htmlvalidation"><a class="ab-item"  href="//validator.w3.org/check?uri=https%3A%2F%2Fblog.midonet.org" target="_blank">HTML Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-cssvalidation"><a class="ab-item"  href="//jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fblog.midonet.org" target="_blank">CSS Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-pagespeed"><a class="ab-item"  href="//developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fblog.midonet.org" target="_blank">Google Page Speed Test</a>		</li>
		<li id="wp-admin-bar-wpseo-modernie"><a class="ab-item"  href="//www.modern.ie/en-us/report#https%3A%2F%2Fblog.midonet.org" target="_blank">Modern IE Site Scan</a>		</li>
		<li id="wp-admin-bar-wpseo-google-mobile-friendly"><a class="ab-item"  href="https://www.google.com/webmasters/tools/mobile-friendly/?url=https%3A%2F%2Fblog.midonet.org" target="_blank">Mobile-Friendly Test</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-settings" class="menupop"><div class="ab-item ab-empty-item"  aria-haspopup="true">SEO Settings</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-settings-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-general"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_dashboard">General</a>		</li>
		<li id="wp-admin-bar-wpseo-titles"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_titles">Titles &amp; Metas</a>		</li>
		<li id="wp-admin-bar-wpseo-social"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_social">Social</a>		</li>
		<li id="wp-admin-bar-wpseo-xml"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_xml">XML Sitemaps</a>		</li>
		<li id="wp-admin-bar-wpseo-wpseo-advanced"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_advanced">Advanced</a>		</li>
		<li id="wp-admin-bar-wpseo-tools"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_tools">Tools</a>		</li>
		<li id="wp-admin-bar-wpseo-search-console"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_search_console">Search Console</a>		</li>
		<li id="wp-admin-bar-wpseo-licenses"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=wpseo_licenses"><span style="color:#f18500">Extensions</span></a>		</li></ul></div>		</li></ul></div>		</li>
		<li id="wp-admin-bar-stats"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=stats"><div><script type='text/javascript'>var src;if(typeof(window.devicePixelRatio)=='undefined'||window.devicePixelRatio<2){src='https://blog.midonet.org/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale';}else{src='https://blog.midonet.org/wp-admin/admin.php?page=stats&amp;noheader&amp;proxy&amp;chart=admin-bar-hours-scale-2x';}document.write('<img src=\''+src+'\' alt=\'Stats\' title=\'Views over 48 hours. Click for more Site Stats.\' />');</script></div></a>		</li>
		<li id="wp-admin-bar-wp_shareaholic_adminbar_menu" class="menupop"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/admin.php?page=shareaholic-settings">Shareaholic</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp_shareaholic_adminbar_menu-default" class="ab-submenu">
		<li id="wp-admin-bar-wp_shareaholic_adminbar_submenu-settings"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/admin.php?page=shareaholic-settings">App Manager</a>		</li>
		<li id="wp-admin-bar-wp_shareaholic_adminbar_submenu-general"><a class="ab-item"  href="https://shareaholic.com/publisher_tools/99723b3a9c306fcdb8ef93b8f4b2d3ba/verify?verification_key=9f78ef42c34f06a6ac7bd1823f41f68f&#038;redirect_to=https://shareaholic.com/publisher_tools/99723b3a9c306fcdb8ef93b8f4b2d3ba/websites/edit?verification_key=9f78ef42c34f06a6ac7bd1823f41f68f" target="_blank">Website Settings</a>		</li>
		<li id="wp-admin-bar-wp_shareaholic_adminbar_submenu-help"><a class="ab-item"  href="http://support.shareaholic.com/" target="_blank">FAQ & Support</a>		</li></ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://blog.midonet.org/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search"/></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/profile.php">Howdy, Sandro Mathys<img alt="" src="https://avatars.githubusercontent.com/u/3242343?v=3" class="avatar avatar-wordpress-social-login avatar-26 photo" height="26" width="26" /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="https://blog.midonet.org/wp-admin/profile.php"><img alt="" src="https://avatars.githubusercontent.com/u/3242343?v=3" class="avatar avatar-wordpress-social-login avatar-64 photo" height="64" width="64" /><span class='display-name'>Sandro Mathys</span><span class='username'>Sandro_Mathys</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item"  href="https://blog.midonet.org/wp-login.php?action=logout&#038;_wpnonce=2ebb739288">Log Out</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-notes" class="menupop"><div class="ab-item ab-empty-item" ><span id="wpnt-notes-unread-count" class="wpnt-loading wpn-read">
					<span class="noticon noticon-notification"></span>
					</span></div><div id="wpnt-notes-panel2" style="display:none" lang="en" dir="ltr"><div class="wpnt-notes-panel-header"><span class="wpnt-notes-header">Notifications</span><span class="wpnt-notes-panel-link"></span></div></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="https://blog.midonet.org/wp-login.php?action=logout&#038;_wpnonce=2ebb739288">Log Out</a>
					</div>

		</body>
</html>

<!-- Dynamic page generated in 0.200 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2015-11-26 03:28:51 -->
