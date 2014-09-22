<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Formspider</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/product.css" rel="stylesheet" type="text/css">
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
</head>

<body>
<?php include ('logger/sendUninstallReason.php'); ?>
<div class="container">
  <div class="header">
  	<?php $link_name= "Uninstall Thanks" ?>
  	<?php include ('mainmenu.php'); ?>
  </div>
 
  <div class="content">  	
  	<img src="images/line.png"/>
  	<br/>
	<div class="steps">
		<h1 class="topPhrase">Thank you!</h1>
	</div>
  	<br/>
  	<div class="steps">
		<p style="text-align:center;">Thank you for your feedback. Don't be a stranger and stay in touch.</p>
	</div>
	
	<div style="margin:0 auto;display: block;width: 270px;">
  		<span style="width:260px; margin-left:10px; float:right;">
            <img style="vertical-align:middle;" alt="Follow" src="images/follow.png">
            <a title="Send us an e-mail" href="mailto:contact@theformspider.com"><img style="vertical-align:middle;" src="images/email.png" alt="e-mail"></a>
            <a target="_blank" title="Become a fan of Formspider" href="http://www.facebook.com/pages/Formspider/146550118729391"><img style="vertical-align:middle;" src="images/FacebookS.png" alt="Facebook"></a>
            <a target="_blank" title="Follow @formspider on Twitter" href="http://twitter.com/formspider"><img style="vertical-align:middle;" src="images/TwitterS.png" alt="Twitter"></a>
            <a target="_blank" title="Join the Formspider Network" href="http://www.linkedin.com/groups?gid=3710847"><img style="vertical-align:middle;" src="images/LinkedinS.png" alt="LinkedIn"></a>
            <a title="Receive Formspider Blog Updates" href="/blog/?feed=rss2"><img style="vertical-align:middle;" src="images/rss2.png" alt="RSS"></a>
      </span>
  	</div>	
	
	<?php 
		if (isset($_POST['reasons']) && isset($_POST['duration']) && isset($_POST['reinstall'])) { //needs // otherReason
			$reasons = $_POST['reasons'];
			$duration = $_POST['duration'];
			$reinstall = $_POST['reinstall'];
			if (isset($_POST['needs'])) {
				$needs = $_POST['needs'];
			}
			if (isset($_POST['otherReason'])) {
				$otherReason = $_POST['otherReason'];
			}
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
			}
			sendReasonMail($reasons, $duration, $reinstall, $needs, $otherReason, $email); 
		}
		
	?>

  	<p>&nbsp;</p>
   <!-- end .content --></div>
  <div class="footer">
  	<img src="images/line.png" alt="line">
    <br>
    <br>
    <p>Designed and developed by <a target="_blank" href="http://www.gerger.co">Gerger</a> at Istanbul Technical University <a target="_blank" href="http://www.ariteknokent.com.tr/">ARI Technopark</a>.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
