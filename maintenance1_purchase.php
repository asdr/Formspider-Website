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
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
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
			<div id="columns">
				
				<div id="paid-plans">
					<div class="column one">
						<h4>1 year <span>Maintenance Subscription</span></h4>
						<h3><span class="superscript">just $</span>199</h3>
					</div>
					<div class="column paypal">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6KDQHNME6TRUA">
<input type="image" src="https://www.paypalobjects.com/en_US/TR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
					</div>
				</div>
			</div><!-- /columns -->
			<br>
			<br>
			
	</div>
	
	<?php include 'assets/contactmodal.php'; ?>
		
	<?php include 'assets/footer.php'; ?>
