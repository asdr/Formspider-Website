<div id="footer">

	<div class="line"></div>

	<div class="clearfix">
		<ul>
			<li><a href="default.php">Home</a></li>
			<li><a href="aboutus.php">About us</a></li>
			<!-- li><a href="product.php">Product</a></li>
			<li><a href="demos.php">Demos</a></li -->
		</ul>
		<ul>
			<!-- li><a href="references.php">References</a></li>
			<li><a href="pricing.php">Pricing</a></li -->
			<li><a href="http://blog.gitora.com">Blog</a></li>
			<li><a href="support.php">Support</a></li>
		</ul>
		<ul>
			<li><a href="http://blog.gitora.com/tag/documentation">Learning Center</a></li>
			<li><a href="http://gitora.theformspider.com/">Questions &amp; Answers</a></li>
		</ul>
			
		<!-- <ul>
			<li><a href="#">Formspider vs. Oracle Apex</a></li>
			<li><a href="#">An Open Letter to PL/SQL Developers</a></li>
			<li><a href="#">Free PL/SQL Training</a></li>
		</ul> -->

		
		<ul class="right clearfix">
			<!-- li class="facebook"><a href="http://www.facebook.com/pages/Formspider/146550118729391">Facebook</a></li -->
			<!-- li class="linkedin"><a href="http://www.linkedin.com/groups/Formspider-3710847">Linkedin</a></li -->
			<li class="twitter"><a href="http://www.twitter.com/gitoraforplsql">Twitter</a></li>
			<li class="email last"><a href="mailto:gitora@theformspider.com">E-mail</a></li>
			<!--li class="email last"><a data-reveal-id="contact-modal" data-animation="fade">E-mail</a></li-->
		</ul>
	</div>
	
	<div class="line"></div>
	
	<div class="clearfix copyright">
		<div class="left">&copy; Copyright Gerger 2015</div>
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

</body>
</html>