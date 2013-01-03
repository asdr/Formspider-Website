<?php $page = 'index'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formspider</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="master.css" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="//use.typekit.net/tkf5jau.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script src="js/site.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/reveal/jquery.reveal.js" type="text/javascript" charset="utf-8"></script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
</head>
<body class="index">

	<?php include 'assets/header.php'; ?>
	
	<div id="bg_clouds"></div>
	
	<div id="container">
	
	<div id="content">
		
		<div id="top" class="clearfix">
			<div id="intro">
				<h2>Amazing Web Applications <span>with</span> PL/SQL</h2>
				<p>Formspider is a Web 2.0 framework that lets you build world class Web applications with only PL/SQL. Formspider apps run using 100% AJAX, DHTML and JavaScript without the need to know any of them.</p>
				<div id="cta">Try now &rarr; &nbsp;&nbsp;
					<a href="download.php" class="button orange mid-height" id="cloud"><span></span> Cloud</a>
					<a href="download.php" class="button orange mid-height" id="desktop"><span></span> Desktop</a>
				</div>
			</div>
			<div id="screenshot"></div>
		</div>
		
		<div id="benefits" class="clearfix">
		<ul class="clearfix">
			<li>
				<img src="images/index/benefit1.jpg" width="114" height="99" alt="Higher Productivity" />
				<h4>Higher Productivity</h4>
				<p>Leverage your PL/SQL skills to build modern Web applications. Formspider’s only programming language is PL/SQL. There is no need to know or learn any other language. Carry all your experience to Web development instantly.</p>
			</li>
			<li>
				<img src="images/index/benefit2.jpg" width="118" height="99" alt="Higher Quality">
				<h4>Higher Quality</h4>
				<p>Design your applications with data driven, beautiful UI components. Run them smoothly in every browser by default. Reuse best practices for performance such tuned Javascript, automatic lazy loading and optimized roundtrips between application layers. Upgrade to the framework that passed audits at organizations with very high securıty requirements.</p>
			</li>
			<li>
				<img src="images/index/benefit3.jpg" width="118" height="99" alt="Benefit3">
				<h4>Lower Cost</h4>
				<p>Pay only when you are in production with Formspider’s affordable and open pricing policy. Focus on solving business problems rather than technical ones. Build long lasting applications that do not bet on hypes but on good architecture.</p>
			</li>
		</ul>
		</div><!-- /benefits -->
		
		<!-- <div id="people">
		<h3><span>What are people saying?</span></h3>
		
		</div> -->
		
		<!-- <div id="calltoaction">
			<a href="download.php" class="button orange">Try now</a>
		</div> -->
		
	</div><!-- /content -->
	
	<?php include 'assets/footer.php'; ?>
