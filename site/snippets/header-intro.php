<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html itemscope itemtype="http://schema.org/">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo html($site->title()) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="content-language" content="en" />
<meta http-equiv="imagetoolbar" content="no" />

<!-- Please support http://humanstxt.org/ -->
<link type="text/plain" rel="author" href="<?php echo url('humans.txt') ?>" />

<!-- Feed -->
<link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

<link rel="canonical" href="<?php echo html($page->url()) ?>" />

<meta name="title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="author" content="<?php echo html($site->author()) ?>" />
<meta name="publisher" content="<?php echo html($site->author()) ?>" />
<meta name="copyright" content="<?php echo html($site->author()) ?>" />
<meta name="description" content="<?php echo html($page->description()) ?>" />
<meta name="robots" content="index,follow" />
<meta name="DC.Title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="DC.Creator" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Rights" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Publisher" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Description" content="<?php echo html($page->description()) ?>"/ >
<meta name="DC.Language" content="en" />

<meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo html($site->url()) ?>" />
<meta property="og:description" content="<?php echo html($page->description()) ?>" />

<meta itemprop="name" content="<?php echo html($site->title()) ?>">
<meta itemprop="description" content="<?php echo html($page->description()) ?>">

<!-- Styles -->
<link rel="stylesheet" href="<?php echo url('assets/css/reset.css') ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo url('assets/css/svb.css') ?>" type="text/css" media="all" />

<!-- Favicons -->
<link rel="shortcut icon" href="<?php echo url('assets/images/icons/favicon.ico') ?>" />

</head>
<body>
<div id="body-wrapper">
<div id="header-wrapper">
	<header>
	    <a class="logo" title="<?php echo html($site->title()) ?>" href="<?php echo url()?>">SVB</a>
	    <!-- <?php echo str::email($site->mail(), $text='Contact', $title="Contact Katia", $class='contact'); ?> -->
	    <!-- <a class="name" title="<?php echo html($site->title()) ?>" href="<?php echo url() ?>">studio von birken</a> -->
	</header>
</div>

<div id="nav-wrapper">
	<nav>
		<p class="call-action">[please choose]</p>
		<ul class="nav-group-1">
			<li><a href="<?php echo url() ?>home">Enter</a></li>
			<li><a class="showSingle" target="3">Contact</a></li>
			
		</ul>
		
	</nav>
</div>
<!--
<form action="search">
  <input type="text" placeholder="Search…" name="q" />
  <input type="text" placeholder="Field" name="field"/>
  <input type="submit" value="Search" />
</form>
 -->