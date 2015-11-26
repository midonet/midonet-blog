<?php die(); ?><!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />

<title>MidoNet 5.0.0 release - The MidoNet Blog</title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://blog.midonet.org/xmlrpc.php">

<!-- This site is optimized with the Yoast SEO plugin v3.0.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="The MidoNet project is pleased to announce the release of MidoNet 5.0.0."/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="https://blog.midonet.org/midonet-5-0-0-release/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="MidoNet 5.0.0 release - The MidoNet Blog" />
<meta property="og:description" content="The MidoNet project is pleased to announce the release of MidoNet 5.0.0." />
<meta property="og:url" content="https://blog.midonet.org/midonet-5-0-0-release/" />
<meta property="og:site_name" content="The MidoNet Blog" />
<meta property="article:section" content="MidoNet Update" />
<meta property="article:published_time" content="2015-11-13T11:56:23+00:00" />
<meta property="og:image" content="https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay.jpg" />
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="The MidoNet project is pleased to announce the release of MidoNet 5.0.0."/>
<meta name="twitter:title" content="MidoNet 5.0.0 release - The MidoNet Blog"/>
<meta name="twitter:site" content="@midonet"/>
<meta name="twitter:image" content="https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay.jpg"/>
<meta name="twitter:creator" content="@midonet"/>
<!-- / Yoast SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="The MidoNet Blog &raquo; Feed" href="https://blog.midonet.org/feed/" />
<link rel="alternate" type="application/rss+xml" title="The MidoNet Blog &raquo; Comments Feed" href="https://blog.midonet.org/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="The MidoNet Blog &raquo; MidoNet 5.0.0 release Comments Feed" href="https://blog.midonet.org/midonet-5-0-0-release/feed/" />
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
<meta name='shareaholic:url' content='https://blog.midonet.org/midonet-5-0-0-release/' />
<meta name='shareaholic:keywords' content='release, midonet update, openstack, releases' />
<meta name='shareaholic:article_published_time' content='2015-11-13T11:56:23+00:00' />
<meta name='shareaholic:article_modified_time' content='2015-11-13T11:56:23+00:00' />
<meta name='shareaholic:shareable_page' content='true' />
<meta name='shareaholic:article_author_name' content='JF Joly' />
<meta name='shareaholic:site_id' content='99723b3a9c306fcdb8ef93b8f4b2d3ba' />
<meta name='shareaholic:wp_version' content='7.6.0.4' />
<meta name='shareaholic:image' content='https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay.jpg' />
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
<link rel='stylesheet' id='boxes-css'  href='https://blog.midonet.org/wp-content/plugins/wordpress-seo/css/adminbar-302.min.css?ver=3.0.4' type='text/css' media='all' />
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
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/related-posts/related-posts.js?ver=20150408'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://blog.midonet.org/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://blog.midonet.org/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.3.1" />
<link rel='shortlink' href='https://wp.me/p5ls6g-93' />

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

<body class="single single-post postid-561 single-format-standard logged-in admin-bar no-customize-support group-blog">

<header id="masthead" role="banner" class="site-head site-header" style="background-image: url(https://blog.midonet.org/wp-content/uploads/2014/11/header.jpg);">
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <div>
            <h1 class="menu-toggle">
                <a class="icon-bars" href="#">
                    <span class="hidden">Menu</span>
                </a>
            </h1>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <div class="menu-menu-1-container"><ul id="menu-menu-1" class="menu"><li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-9"><a href="https://blog.midonet.org/">HOME</a></li>
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
        	    <span class="posted-on"><a href="https://blog.midonet.org/midonet-5-0-0-release/" rel="bookmark"><time class="entry-date published" datetime="2015-11-13T11:56:23+00:00">November 13, 2015</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="https://blog.midonet.org/author/jf_joly/">JF Joly</a></span></span> | <a href="https://blog.midonet.org/category/midonet-update/" rel="category tag">MidoNet Update</a>, <a href="https://blog.midonet.org/category/openstack/" rel="category tag">OpenStack</a>, <a href="https://blog.midonet.org/category/releases/" rel="category tag">Releases</a><span class="edit-link">&nbsp;&bull;&nbsp;<a class="post-edit-link" href="https://blog.midonet.org/wp-admin/post.php?post=561&amp;action=edit">Edit&rarr;</a></span>        	</span>
		        <h1 class="post-title"><a href="https://blog.midonet.org/midonet-5-0-0-release/" rel="bookmark">MidoNet 5.0.0 release</a></h1>
        
        	<img data-src='<480:https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay-150x150.jpg, <768:https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay-300x169.jpg, >768:https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay.jpg' />
			<noscript><img width="150" height="150" src="https://blog.midonet.org/wp-content/uploads/2015/11/MidoDay-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="MidoDay" /></noscript>
	    
    </header>
    		<section class="post-content">
		    <div>
<div>
<div>
<div>
<div>
<div>The MidoNet project is pleased to announce the release of <strong>MidoNet 5.0.0</strong>.</div>
<div>
<p>MidoNet brings production-grade distributed overlay networking to OpenStack and containers.</p>
<h2>Overview of the release</h2>
<div>It is the 5th release of the project as Open Source software.</div>
<div>This version is compatible with Openstack Kilo and Liberty.</div>
<p>&nbsp;</p>
<div>This release particularly focuses on usability and additional network services.<br />
The list of new features and improvements is in the <a href="https://github.com/midonet/midonet/wiki/MidoNet-5.0.0-Release-Notes" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/midonet/midonet/wiki/MidoNet-5.0.0-Release-Notes', 'release notes']);" >release notes</a>.</div>
</div>
<div>
<div>This release introduces a change in the release cycle: we will now use <a href="http://semver.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://semver.org/', 'semantic versioning']);" >semantic versioning</a>.</div>
<div>You can see the <a href="https://lists.midonet.org/pipermail/midonet/2015-June/000226.html">details of the discussion</a> related to this change on the mailing list.</div>
</div>
</div>
<p>&nbsp;</p>
<h2>Installing MidoNet 5.0</h2>
<p>The packages are available in the repository (URL in the release notes).</p>
</div>
</div>
<div>See the <a href="http://docs.midonet.org/">MidoNet documentation</a> for details on installing and operating MidoNet.</div>
</div>
</div>
<div>
<div>
<div>Trying MidoNet is as simple as executing this command inside an Ubuntu 14.04 Virtual Machine with at least 4GB of memory (8GB recommended)</div>
<pre>$ curl -sL quickstart.midonet.org | sudo bash</pre>
<div>This command will install the latest MidoNet with OpenStack. Once finished, you will be told how to log into Horizon.</div>
<p>&nbsp;</p>
<h2>Going further</h2>
</div>
<p>If you have any question, please reach out via <a href="http://slack.midonet.org/">Slack</a> or on the <a href="mailto:midonet@lists.midonet.org" target="_blank">MidoNet user list</a>.</p>
</div>
<div>We would like to thank everyone who contributed to this release,</div>
<div><strong>great job!</strong></div>
<p>&nbsp;</p>
<div>To ensure its success and improve further the quality, more help is needed: organizations and individuals using MidoNet are encouraged to contribute to the project.</div>
<div>You can find ways to become an active contributor on the <a href="https://github.com/midonet/midonet/wiki/Contributing-to-MidoNet" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://github.com/midonet/midonet/wiki/Contributing-to-MidoNet', 'MidoNet wiki']);" >MidoNet wiki</a>.</div>
<div></div>
<div class='shareaholic-canvas' data-app-id='12325130' data-app='share_buttons' data-title='MidoNet 5.0.0 release' data-link='https://blog.midonet.org/midonet-5-0-0-release/' data-summary=''></div>
<div id='jp-relatedposts' class='jp-relatedposts' >
	<h3 class="jp-relatedposts-headline"><em>Related</em></h3>
</div>		    			<div class="clear">&nbsp;</div>
		</section>
	
	<footer class="post-footer">

	    <section class="author">
	    	<img alt="" src="https://avatars.githubusercontent.com/u/7732950?v=3" class="avatar avatar-wordpress-social-login avatar-100 photo" height="100" width="100" />	        <h4><a href="https://github.com/jfjoly" title="Visit JF Joly&#8217;s website" rel="author external">JF Joly</a></h4>
	        <p></p>
			<div class="clear">&nbsp;</div>
	    </section>
	</footer>
</article><!-- #post-## -->

				<nav class="pagination navigation post-navigation" role="navigation">
		<div class="nav-links">
			<div class="older-posts"><a href="https://blog.midonet.org/kuryr-midonet-networking-docker-1-9/" rel="prev">Kuryr brings MidoNet networking to Docker 1.9 <span class="meta-nav">&rarr;</span></a></div>				<div class="page-number">&bull;</div>
						</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	
			
<div id="comments" class="comments-area">

	
	
	
				
		<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/midonet-5-0-0-release/#respond" style="display:none;">Cancel reply</a></small></h3>
			<div id="commentform" class="comment-form">
				<iframe src="https://jetpack.wordpress.com/jetpack-comment/?blogid=78994588&#038;postid=561&#038;comment_registration=0&#038;require_name_email=1&#038;stc_enabled=1&#038;stb_enabled=1&#038;show_avatars=1&#038;avatar_default=retro&#038;greeting=Leave+a+Reply&#038;greeting_reply=Leave+a+Reply+to+%25s&#038;color_scheme=light&#038;lang=en-US&#038;jetpack_version=3.8.0&#038;hc_post_as=jetpack&#038;hc_userid=15&#038;hc_username=Sandro+Mathys&#038;hc_userurl=http%3A%2F%2Fwww.mathys.io%2F&#038;hc_useremail=1655e4646e096b4fd9552d71bdcb0c79&#038;_wp_unfiltered_html_comment=8d2a753f0b&#038;sig=a42cfa1a3755442f7857145fae13e21c9c79526c#parent=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" allowtransparency="false" style="width:100%; height: 315px;border:0px;" frameBorder="0" scrolling="no" name="jetpack_remote_comment" id="jetpack_remote_comment"></iframe>
			</div>
		</div>

		
		<input type="hidden" name="comment_parent" id="comment_parent" value="" />

		
</div><!-- #comments -->

		

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

	<div style="display:none">
	<div class="grofile-hash-map-07d1e36b4ba034d47a0ced905e9535e2">
	</div>
	</div>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/akismet/_inc/form.js?ver=3.1.5'></script>
<link rel='stylesheet' id='wpcom-notes-admin-bar-css'  href='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.css?ver=3.8.0-201548' type='text/css' media='all' />
<link rel='stylesheet' id='noticons-css'  href='https://s0.wp.com/i/noticons/noticons.css?ver=3.8.0-201548' type='text/css' media='all' />
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/admin-bar.min.js?ver=4.3.1'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/photon/photon.js?ver=20130122'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201548'></script>
<script type='text/javascript' src='https://secure.gravatar.com/js/gprofiles.js?ver=2015Novaa'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":"1655e4646e096b4fd9552d71bdcb0c79"};
/* ]]> */
</script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/plugins/jetpack/modules/wpgroho.js?ver=4.3.1'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-content/themes/casper/js/main.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/comment-reply.min.js?ver=4.3.1'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/underscore.min.js?ver=1.6.0'></script>
<script type='text/javascript' src='https://blog.midonet.org/wp-includes/js/backbone.min.js?ver=1.1.2'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/js/mustache.js?ver=3.8.0-201548'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/mu-plugins/notes/notes-common-v2.js?ver=3.8.0-201548'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.js?ver=3.8.0-201548'></script>

		<!--[if IE]>
		<script type="text/javascript">
		if ( 0 === window.location.hash.indexOf( '#comment-' ) ) {
			// window.location.reload() doesn't respect the Hash in IE
			window.location.hash = window.location.hash;
		}
		</script>
		<![endif]-->
		<script type="text/javascript">
			var comm_par_el = document.getElementById( 'comment_parent' ),
			    comm_par = (comm_par_el && comm_par_el.value) ? comm_par_el.value : '',
			    frame = document.getElementById( 'jetpack_remote_comment' ),
			    tellFrameNewParent;

			tellFrameNewParent = function() {
				if ( comm_par ) {
					frame.src = "https://jetpack.wordpress.com/jetpack-comment/?blogid=78994588&postid=561&comment_registration=0&require_name_email=1&stc_enabled=1&stb_enabled=1&show_avatars=1&avatar_default=retro&greeting=Leave+a+Reply&greeting_reply=Leave+a+Reply+to+%25s&color_scheme=light&lang=en-US&jetpack_version=3.8.0&hc_post_as=jetpack&hc_userid=15&hc_username=Sandro+Mathys&hc_userurl=http%3A%2F%2Fwww.mathys.io%2F&hc_useremail=1655e4646e096b4fd9552d71bdcb0c79&_wp_unfiltered_html_comment=8d2a753f0b&sig=a42cfa1a3755442f7857145fae13e21c9c79526c#parent=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" + '&replytocom=' + parseInt( comm_par, 10 ).toString();
				} else {
					frame.src = "https://jetpack.wordpress.com/jetpack-comment/?blogid=78994588&postid=561&comment_registration=0&require_name_email=1&stc_enabled=1&stb_enabled=1&show_avatars=1&avatar_default=retro&greeting=Leave+a+Reply&greeting_reply=Leave+a+Reply+to+%25s&color_scheme=light&lang=en-US&jetpack_version=3.8.0&hc_post_as=jetpack&hc_userid=15&hc_username=Sandro+Mathys&hc_userurl=http%3A%2F%2Fwww.mathys.io%2F&hc_useremail=1655e4646e096b4fd9552d71bdcb0c79&_wp_unfiltered_html_comment=8d2a753f0b&sig=a42cfa1a3755442f7857145fae13e21c9c79526c#parent=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F";
				}
			};

	
			if ( 'undefined' !== typeof addComment ) {
				addComment._Jetpack_moveForm = addComment.moveForm;

				addComment.moveForm = function( commId, parentId, respondId, postId ) {
					var returnValue = addComment._Jetpack_moveForm( commId, parentId, respondId, postId ), cancelClick, cancel;

					if ( false === returnValue ) {
						cancel = document.getElementById( 'cancel-comment-reply-link' );
						cancelClick = cancel.onclick;
						cancel.onclick = function() {
							var cancelReturn = cancelClick.call( this );
							if ( false !== cancelReturn ) {
								return cancelReturn;
							}

							if ( !comm_par ) {
								return cancelReturn;
							}

							comm_par = 0;

							tellFrameNewParent();

							return cancelReturn;
						};
					}

					if ( comm_par == parentId ) {
						return returnValue;
					}

					comm_par = parentId;

					tellFrameNewParent();

					return returnValue;
				};
			}

	
			if ( window.postMessage ) {
				if ( document.addEventListener ) {
					window.addEventListener( 'message', function( event ) {
						if ( "https:\/\/jetpack.wordpress.com" !== event.origin ) {
							return;
						}

						jQuery( frame ).height( event.data );
					} );
				} else if ( document.attachEvent ) {
					window.attachEvent( 'message', function( event ) {
						if ( "https:\/\/jetpack.wordpress.com" !== event.origin ) {
							return;
						}

						jQuery( frame ).height( event.data );
					} );
				}
			}
		</script>

		<script type="text/javascript">
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
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/customize.php?url=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F">Customize</a>		</li>
		<li id="wp-admin-bar-updates"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/update-core.php" title="1 Plugin Update"><span class="ab-icon"></span><span class="ab-label">1</span><span class="screen-reader-text">1 Plugin Update</span></a>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/edit-comments.php" title="0 comments awaiting moderation"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/user-new.php">User</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-edit"><a class="ab-item"  href="https://blog.midonet.org/wp-admin/post.php?post=561&#038;action=edit">Edit Post</a>		</li>
		<li id="wp-admin-bar-wpseo-menu" class="menupop"><a class="ab-item"  aria-haspopup="true" href="https://blog.midonet.org/wp-admin/post.php?post=561&#038;action=edit">SEO<div title="Good" class="wpseo-score-icon good 87"></div></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-menu-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-kwresearch" class="menupop"><div class="ab-item ab-empty-item"  aria-haspopup="true">Keyword Research</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-kwresearch-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-adwordsexternal"><a class="ab-item"  href="http://adwords.google.com/keywordplanner" target="_blank">AdWords External</a>		</li>
		<li id="wp-admin-bar-wpseo-googleinsights"><a class="ab-item"  href="http://www.google.com/insights/search/#q=release&#038;cmpt=q" target="_blank">Google Insights</a>		</li>
		<li id="wp-admin-bar-wpseo-wordtracker"><a class="ab-item"  href="http://tools.seobook.com/keyword-tools/seobook/?keyword=release" target="_blank">SEO Book</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-wpseo-analysis" class="menupop"><div class="ab-item ab-empty-item"  aria-haspopup="true">Analyze this page</div><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wpseo-analysis-default" class="ab-submenu">
		<li id="wp-admin-bar-wpseo-inlinks-ose"><a class="ab-item"  href="//moz.com/researchtools/ose/links?site=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Check Inlinks (OSE)</a>		</li>
		<li id="wp-admin-bar-wpseo-kwdensity"><a class="ab-item"  href="//www.zippy.co.uk/keyworddensity/index.php?url=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F&#038;keyword=release" target="_blank">Check Keyword Density</a>		</li>
		<li id="wp-admin-bar-wpseo-cache"><a class="ab-item"  href="//webcache.googleusercontent.com/search?strip=1&#038;q=cache:https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Check Google Cache</a>		</li>
		<li id="wp-admin-bar-wpseo-header"><a class="ab-item"  href="//quixapp.com/headers/?r=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Check Headers</a>		</li>
		<li id="wp-admin-bar-wpseo-richsnippets"><a class="ab-item"  href="//www.google.com/webmasters/tools/richsnippets?q=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Check Rich Snippets</a>		</li>
		<li id="wp-admin-bar-wpseo-facebookdebug"><a class="ab-item"  href="//developers.facebook.com/tools/debug/og/object?q=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Facebook Debugger</a>		</li>
		<li id="wp-admin-bar-wpseo-pinterestvalidator"><a class="ab-item"  href="//developers.pinterest.com/rich_pins/validator/?link=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Pinterest Rich Pins Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-htmlvalidation"><a class="ab-item"  href="//validator.w3.org/check?uri=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">HTML Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-cssvalidation"><a class="ab-item"  href="//jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">CSS Validator</a>		</li>
		<li id="wp-admin-bar-wpseo-pagespeed"><a class="ab-item"  href="//developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Google Page Speed Test</a>		</li>
		<li id="wp-admin-bar-wpseo-modernie"><a class="ab-item"  href="//www.modern.ie/en-us/report#https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Modern IE Site Scan</a>		</li>
		<li id="wp-admin-bar-wpseo-google-mobile-friendly"><a class="ab-item"  href="https://www.google.com/webmasters/tools/mobile-friendly/?url=https%3A%2F%2Fblog.midonet.org%2Fmidonet-5-0-0-release%2F" target="_blank">Mobile-Friendly Test</a>		</li></ul></div>		</li>
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

<!-- Dynamic page generated in 0.189 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2015-11-26 03:12:25 -->
