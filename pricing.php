<?php $page = 'pricing'; ?>
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
</head>
<body class="pricing">
		
	<?php include 'assets/header.php'; ?>
	
	<div id="container">
	
	<div id="content" class="clearfix">
	
			<h2>The Price of Licence</h2>
			<p>Depending on the Oracle Database Edition of your Formspider Production Installation:</p>
			
			<div id="columns">
				<div class="column">
					<h4>Any <span>Edition</span></h4>
					<h3>Free <span>for</span> Testing</h3>
					<p>Unlimited users, development and testing installations <strong>BUT</strong> you’re unable to deploy to production.</p>
					<div class="cta"><a href="download.php" class="button black">Cloud</a><a href="download.php" class="button black">Desktop</a></div>
				</div>
				<div id="paid-plans">
					<div class="column one">
						<h4>Standard <span>Edition One</span></h4>
						<h3><span>$</span>995</h3>
					</div>
					<div class="column two">
						<h4>Standard <span>Edition</span></h4>
						<h3><span>$</span>2995</h3>
					</div>
					<div class="column three">
						<h4>Enterprise <span>Edition</span></h4>
						<h3><span>$</span>9995</h3>
					</div>
					
					<p>Unlimited users, developer seats, development and testing installations, you’re able to deploy to production and much more.
					<span>Price above is paid once, every next year you pay only 30% of licence cost for maintenance.</span></p>
					<div class="cta"><a href="#" data-reveal-id="contact-modal" data-animation="fade" class="button black full-width">Contact us</a></div>
				</div>
			</div><!-- /columns -->

	</div>
	
	<?php include 'assets/contactmodal.php'; ?>
		
	<?php include 'assets/footer.php'; ?>
