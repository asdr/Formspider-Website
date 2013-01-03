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
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
</head>
<body class="pricing">
		
	<?php include 'assets/header.php'; ?>
	
	<div id="container">
	
	<div id="content" class="clearfix">
	
			<h2>Free Formspider Development License</h2>
			
			<p>The Free Formspider Development License comes with unlimited developer seats and unlimited number of installations for development and testing. You can build as many applications as you like using the framework.</p>
			
			<!--div class="column">
					<h4>Any <span>Edition</span></h4>
					<h3>Free <span>for</span> Testing</h3>
					<p>Unlimited users, development and testing installations <strong>BUT</strong> you’re unable to deploy to production.</p>
					<div class="cta"><a href="download.php" class="button black">Cloud</a><a href="download.php" class="button black">Desktop</a></div>
				</div-->
			<br/><br/>
			<h2>Formspider Production License</h2>
			
			<p>With Formspider, you only pay when your Formspider application is deployed to production.</p>
			
			<p>Formspider offers three categories of pricing depending on the Oracle Database you choose to install Formspider in your production environment.</p>
			
			<div id="columns">
				
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
					
					<p><br/> First year of maintenance is included in the price. After the first year, one year of maintenance costs 30% of license price.</p>
					<div class="cta"><a href="#" data-reveal-id="contact-modal" data-animation="fade" class="button orange full-width">Contact us</a></div>
				</div>
			</div><!-- /columns -->

	</div>
	
	<?php include 'assets/contactmodal.php'; ?>
		
	<?php include 'assets/footer.php'; ?>
