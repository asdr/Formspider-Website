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
	
	<div id="content" class="clearfix">
		
		<h2>The Team</h2>
		<p>We believe:</p>
		<p style="margin-left:30px;">Yesterday’s frameworks built for a wired, single OS, single device world 
		can’t solve the problems of the wireless, multi platform, multi device world of today.</p>
		<p style="margin-left:30px;">A framework is a product in and of itself that is worth to design.</p>
		<p style="margin-left:30px;">Complexity should not be in the tools we use but in the things we build using them.</p>
		<p style="margin-top:15px;"> Yalim K. Gerger <br> Founder </p>
		
		<ul id="list-of-people">
			<li>
				<a class="person"><img src="images/about/yalim.png" width="70" height="70" alt="Yalim Gerger">
				<h3>Yalim Gerger</h3>
				<h4>Founder/CEO</h4></a>
				<div>That would be me. Being surrounded by great teammates makes my job incredibly fun. 
				If you’d like to follow my adventures, please follow me on Twitter <a target="_blank" href="http://www.twitter.com/yalimgerger">@yalimgerger</a></div>
			</li>
			<li id="sametbasaran" class="last-in-row">
				<a class="person"><img src="images/about/samet.png" width="70" height="70" alt="Samet Başaran">
				<h3>Samet Başaran</h3>
				<h4>Software Engineer, DB</h4></a>
				<div>No matter how difficult, critical or urgent the problem is, when I hear Samet say “OK, I’ll take care of it”, I stop worrying about it.</div>
			</li>
			<li id="oskansavli">
				<a class="person"><img src="images/about/oskan.png" width="70" height="70" alt="Öskan Şavlı">
				<h3>Öskan Şavlı</h3>
				<h4>Front-end Engineer</h4></a>
				<div>Öskan is candid. You’d better listen to him. He is fearless. You’d better fear him. He is brutally right. You’d better accept it. Because there is nothing he can’t do once he sets his mind to it.</div>
			</li>
			<li id="ibrahimsandalli">
				<a class="person"><img src="images/about/ibrahim.png" width="70" height="70" alt="İbrahim Sandallı">
				<h3>İbrahim Sandallı</h3>
				<h4>Software Engineer in Test</h4></a>
				<div>İbrahim enters comments to our bug tracking system that would pass as essays in scientific journals. He started working with us right out of school. After working with him for two years, I thanked him for teaching me so much.</div>
			</li>
			<li id="serdargokcen" class="last-in-row">
				<a class="person"><img src="images/about/asdr.png" width="70" height="70" alt="Serdar Gökçen">
				<h3>Serdar Gökçen</h3>
				<h4>Software Engineer in Test</h4></a>
				<div>This is a guy who installs Unix to his iPod. He works with four monitors, three computers, two keyboards and countless hubs and switches around them. He believes anybody not using Unix is a heretic and should be burnt at stake. I don’t know what we would have done without him.</div>
			</li>
			<li id="suataaldan">
				<a class="person"><img src="images/about/suataldan.jpg" width="70" height="70" alt="Suat A. Aldan">
				<h3>Suat A. Aldan</h3>
				<h4>Front-end Engineer</h4></a>
				<div>Suat is one of the newest and youngest members of our team. In the short time he’s been with us, he has impressed everyone in the company. With this guy, sky is the limit.</div>
			</li>
			<li id="orhanarikan">
				<a class="person"><img src="images/about/orhanarikan.jpg" width="70" height="70" alt="Orhan Arıkan">
				<h3>Orhan Arıkan</h3>
				<h4>Software Engineer in Test</h4></a>
				<div>Orhan was such an amazing summer intern that we had to hire him even though he is still at school. We keep throwing him harder challenges and thinking that he’ll ask for help at some point. We’re still waiting...</div>
			</li>
			<li id="asligerger" class="last-in-row">
				<a class="person"><img src="images/about/asli.png" width="70" height="70" alt="Aslı Gerger">
				<h3>Aslı Gerger</h3>
				<h4>Administrator</h4></a>
				<div>She is caring and compassionate. Even though she spends not more than an hour in the office every month, her presence can be felt in every little detail in it. She manages everything other than the software so that we can focus on the software.</div>
			</li>
		</ul>

	</div><!-- /content -->
		
	<?php include 'assets/footer.php'; ?>