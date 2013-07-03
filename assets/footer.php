<div id="footer">

	<div class="line"></div>

	<div class="clearfix">
		<ul>
			<li><a href="default.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="demos.php">Demos</a></li>
		</ul>
		<ul>
			<li><a href="references.php">References</a></li>
			<li><a href="pricing.php">Pricing</a></li>
			<li><a href="http://theformspider.com/blog">Blog</a></li>
		</ul>
		<ul>
			<li><a href="http://theformspider.com/learningcenter">Learning Center</a></li>
			<li><a href="http://osqa.theformspider.com/">Questions &amp; Answers</a></li>
			<li><a href="aboutus.php">About us</a></li>
		</ul>
			
		<!-- <ul>
			<li><a href="#">Formspider vs. Oracle Apex</a></li>
			<li><a href="#">An Open Letter to PL/SQL Developers</a></li>
			<li><a href="#">Free PL/SQL Training</a></li>
		</ul> -->

		<ul class="right clearfix">
			<li>Connect with us:</li>
			<li class="facebook"><a href="http://www.facebook.com/pages/Formspider/146550118729391">Facebook</a></li>
			<li class="linkedin"><a href="http://www.linkedin.com/groups/Formspider-3710847">Linkedin</a></li>
			<li class="twitter"><a href="http://www.twitter.com/formspider">Twitter</a></li>
			<li class="email last"><a href="mailto:contact@theformspider.com">E-mail</a></li>
			<!--li class="email last"><a data-reveal-id="contact-modal" data-animation="fade">E-mail</a></li-->
		</ul>
	</div>
	
	<?php
		if ($page == 'references' || $page == 'about-us') {
			echo 
			'<div class="line"></div>
			
			<div class="oracle-partner">
				<img id="oracle-partner-img" src="images/O_SilverPartner_clr.gif"/>
			</div>';
		}
	?>
	
	<div class="line"></div>
	
	<div class="clearfix copyright">
		<div class="left">&copy; Copyright Gerger 2013</div>
		<div class="right">Designed and developed by <a href="http://www.gerger.co" target="_blank">Gerger</a> at Istanbul Technical University <a href="http://www.ariteknokent.com.tr" target="_blank">ARI Technopark</a>.</div>
	</div>
</div>
</div><!-- /container -->

<?php 
if ($page == "blog") {
} elseif ($page == "learningcenter") {
} else {	
	//include 'contactmodal.php';
}
?>

<script type='text/javascript'>
	var _trackingCode = 'ccl0sgek';
	(function() {
	var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
	wa.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'us1-static.8digits.com/automation.js?' + Math.random();
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
	})();
</script>

</body>
</html>