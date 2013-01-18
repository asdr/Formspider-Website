<div id="footer">
	<div class="clearfix">
		<ul>
			<li><a href="index.php">Home</a></li>
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
			<li><a href="about.php">About us</a></li>
		</ul>
			
		<!-- <ul>
			<li><a href="#">Formspider vs. Oracle Apex</a></li>
			<li><a href="#">An Open Letter to PL/SQL Developers</a></li>
			<li><a href="#">Free PL/SQL Training</a></li>
		</ul> -->

		<ul class="right clearfix">
			<li>Connect with us</li>
			<li class="linkedin"><a href="http://www.linkedin.com">Linkedin</a></li>
			<li class="twitter"><a href="http://www.twitter.com/formspider">Twitter</a></li>
			<li class="email last"><a data-reveal-id="contact-modal" data-animation="fade">E-mail</a></li>
		</ul>
	</div>
	<div class="clearfix copyright">
		<div class="left">&copy; Copyright Gerger 2012</div>
		<div class="right">Designed and developed by Gerger at Istanbul Technical University ARI Technopark.</div>
	</div>
</div>
</div><!-- /container -->

<?php 
if ($page == "blog") {
} elseif ($page == "learningcenter") {
} else {	
	include 'contactmodal.php';
}
?>

</body>
</html>