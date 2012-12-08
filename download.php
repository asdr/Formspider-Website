<?php $page = 'download'; ?>
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
<body class="download">
	
	<?php include 'assets/header.php'; ?>
	
	<div id="container">
	
	<div id="content">
	
			<h2>Download desktop version</h2>
			<p>Thank you for downloading Formspider Release 1.1.1. Please enter your name and email and accept the <a href="#">license agreement</a> to download the software.</p>
				<form>
					<div class="clearfix">
						<label>
							Name <input type="text" />	
						</label>
						<label>
							E-mail (required) <input type="text" />	
						</label>
						<label class="checkbox"><input type="checkbox" name="terms" value="agree">I agree to the <a href="#">Terms and Conditions</a></label>
						
					</div>
					
					<a href="#" class="button orange">For Windows</a>
					<a href="#" class="button blue">For Linux & MacOSX</a>
				</form>
				
	</div><!-- /content -->
	
	<?php include 'assets/footer.php'; ?>
