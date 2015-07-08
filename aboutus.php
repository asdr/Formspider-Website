<?php $page = 'about-us'; ?>
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
	<!--script src="http://code.jquery.com/jquery-latest.js"></script-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/about.js" type="text/javascript" charset="utf-8"></script>
</head>

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

<body class="about-us">
	
	<?php include 'assets/header.php'; ?>
	
	<div id="container">
	
    <div id="fsmap">
        <a href="https://www.google.com/maps/@41.105941,29.016175,421m/data=!3m1!1e3" target="_blank"><img src="http://maps.googleapis.com/maps/api/staticmap?center=41.105941,29.016175&zoom=13&markers=color:orange%7Clabel:Formspider%7C41.105941,29.016175&size=250x250" /></a>
    </div>

	<div id="content" class="clearfix">

    <h2>About Us</h2>
		<p style="margin-right: 255px;">Formspider is lovingly made in Istanbul, Turkey by Gerger. Gerger is founded in 2005 and specializes in application design and development with the Oracle Database. Our office is in ITU ARI Technopark.</p>

        <p style="margin-right: 255px;">We believe: </p>
        <ul class="clear">
          <li style="margin-left: 60px;">Yesterday’s frameworks built for a wired, single OS, single device world can’t <br />solve the problems of the wireless, multi platform, multi device world of today.</li>
          <li style="margin-left: 60px;">A framework is a product in and of itself that is worth to design.</li>
          <li style="margin-left: 60px;">Complexity should not be in the tools we use but in the things we build using <br />them.</li>
        </ul>
        <p>We’d love to hear from you. Send us an <a href="mailto:contact@theformspider.com" target="_blank">email</a>, follow us on <a href="http://www.twitter.com/formspider" target="_blank">Twitter</a>, join the Formspider <a href="http://www.linkedin.com/groups/Formspider-3710847" target="_blank">LinkedIn Group</a> or like our page on <a href="http://www.facebook.com/pages/Formspider/146550118729391" target="_blank">Facebook</a>. </p>

        <p style="margin-top:15px;"> Yalim K. Gerger <br> Founder </p>
        <div style="margin-top: -40px; margin-left: 135px;"><a href="https://www.linkedin.com/in/yalimgerger" target="_blank"><img src="images/connectwithmeonlinkedin1.gif"/></a></div>
        

	</div><!-- /content -->
	<?php include 'assets/footer.php'; ?>