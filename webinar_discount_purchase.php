<?php $page = 'pricing'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formspider</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="master.css" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="master-ie8.css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1251493-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
    function BuyWebLicenseClicked()
    {
       _gaq.push(['_trackPageview','/buy/webLicense']);
    }
</script>
	
</head>
<body class="pricing">
		
	<?php include 'assets/header.php'; ?>
	
	<div id="container">
	
	<div id="content" class="clearfix">
	
			<h2>Simple and Transparent Pricing</h2>
			<h3>No hidden fees, no royalties.</h3>
			<p>Formspider license is a traditional "per developer seat" license. Each developer who works with Formspider is considered a separate seat. The license includes deployment of unlimited number of applications to unlimited number of sites, users and devices.</p>
			
			<!--div class="column">
					<h4>Any <span>Edition</span></h4>
					<h3>Free <span>for</span> Testing</h3>
					<p>Unlimited users, development and testing installations <strong>BUT</strong> you’re unable to deploy to production.</p>
					<div class="cta"><a href="download.php" class="button black">Cloud</a><a href="download.php" class="button black">Desktop</a></div>
				</div-->
			<!--<br/><br/>
			<h2>Formspider Production License</h2>
			
			<p>With Formspider, you only pay when your Formspider application is deployed to production.</p>
			
			<p>Formspider offers three categories of pricing depending on the Oracle Database you choose to install Formspider in your production environment.</p>-->
			
			<div id="columns">
				
				<div id="paid-plans">
					<div class="column one">
						<h4>SINGLE<span>Developer License</span></h4>
						<h3><span class="superscript">just $</span>399</h3>
					</div>
					<div class="column paypal">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="QTWVQPX6TH72G">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
					</div>
					<!--<div class="column two">
						<h4>STANDARD <span>EDITION</span></h4>
						<h3><span>$</span>9900</h3>
					</div>
					<div class="column three">
						<h4>ENTERPRISE <span>EDITION</span></h4>
						<div id="enterprise-button-wrap"><a href="mailto:contact@theformspider.com" data-reveal-id="contact-modal" data-animation="fade" class="button green enterprise full-width">Contact us</a></div>
					</div>-->
					
					<!--<p><br/>First year of maintenance is included. After the first year, maintenance subscription costs $199 annually.</p>-->
					<!--div class="cta"><a href="#" data-reveal-id="contact-modal" data-animation="fade" class="button orange full-width">Contact us</a></div-->
				</div>
			</div><!-- /columns -->
			<br>
			<br>
			<div>
				<h3>FAQ</h2>
				<br>
				<h5>What about upgrades?</h3>
				<p>First year of maintenance is included. After the first year, maintenance subscription costs $199 annually.</p>
				<br>
				<h5>Is Formspider Runtime free?</h3>
				<p>Yes. Formspider Runtime is free. We only ask for a fee if you develop applications with Formspider. Using Formspider Runtime does not require a payment.</p>
				<br>
				<h5>Do you offer discounts for volume purchases?</h3>
				<p>Yes. Please contact sales at <a href="mailto:contact@theformspider.com">contact@theformspider.com.</a></p>
				<br>
				<h5>Do you offer professional support services with SLA?</h3>
				<p>Yes. Please contact sales at <a href="mailto:contact@theformspider.com">contact@theformspider.com.</a></p>
				<br>
				<h5>Do you share source code with your customers?</h3>
				<p>Yes. Please contact sales at <a href="mailto:contact@theformspider.com">contact@theformspider.com.</a></p>
				<br>
				<h5>Can I reassign a license to a different user?</h3>
				<p>The license is per named user (not a floating license), so it is not transferable to another developer when you are not using it.  If a developer for whom the license was purchased is no longer employed by your organization, you may reassign the license.</p>
			</div>
	</div>
	
	<?php include 'assets/contactmodal.php'; ?>
		
	<?php include 'assets/footer.php'; ?>
