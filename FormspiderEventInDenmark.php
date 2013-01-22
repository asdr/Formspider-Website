<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="Formspider, development, licence, product, free development">
<meta name="robots" content="index, follow">
<meta name="Language" content="en"> 

<title>Formspider</title>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
<link href="css/jqueryui.button.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/product.css" rel="stylesheet" type="text/css"/>
<link href="css/download.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/utilities.js"></script>
<script type="text/javascript" src="/js/modernizr.custom.61860.js"></script>

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

<script type="text/javascript" >
	$(document).ready(function() {
		
		function checkForm(nameElement, emailElement) {
		
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			if ( !filter.test(emailElement.value)) {
				alert('Please provide a valid email address.');
				emailElement.focus
				return false;
			}
			
			return true;
		}
		
		var nameField = document.getElementById("name");
		var emailField = document.getElementById("email");
		
		if (getParameter("name"))
			nameField.value = getParameter("name");
		
		if (getParameter("email"))
			emailField.value = getParameter("email");
		
		$( "#register" )
			.button({
				disabled: false 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					logRegistration(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/register/RegisterFSEventInDenmark']);
				}
				return false;
			});
		
		function logRegistration(name, email) {
			
			var expires = { expires: 3650 };
			$.cookie("name", name, expires);
			$.cookie("email", email, expires);
			
			$.ajax({
			  type: "GET",
			  url: "product.php",
			  data: "descid=RegisterFSEventInDenmark&name="+ name +"&mail="+ email,
			  async: true,
			  success: function(data) {
				//alert('success');
				nameField.value = null;
				emailField.value = null;
				document.getElementById("registerDiv").style.display = "none";
				document.getElementById("registerSuccessDiv").style.display = "block";
			  },
			  error: function(jqXHR, textStatus) {
				//alert('error: ' + textStatus);
			  }
			});
		}
		
		if (Modernizr.input.placeholder) {
			document.getElementById("nameLabel").style.display = "none";
			document.getElementById("emailLabel").style.display = "none";
		}
		
		//if ((nameField.value == null || nameField.value == "") && ($.cookie("name")))
			//nameField.value = $.cookie("name");
		
		//if ((emailField.value == null || emailField.value == "")  && ($.cookie("email")))
			//emailField.value = $.cookie("email");
		
		document.getElementById("registerDiv").style.visibility = "visible";
	});
</script> 

</head>

<body>

<div class="container">
  <div class="header">
  	<?php $link_name= "" ?>
  	<?php include ('mainmenu.php'); ?>
  </div>
 
  <div class="content">
  	<img src="images/line.png" alt="line">
  	<br>
  	<br>
  		<!--<div class="lcsteps">-->
  			<h1 class="topPhrase">DOUG Special SIG : Formspider</h1>
  		<!--</div>-->
  	<br>
  	<!--h2>Do not miss the PL/SQL event of the year in Netherlands. Meet Formspider, the new home of PL/SQL developers.</h2-->
	
	<table CELLPADDING="3" CELLSPACING="3">
		<tr/>
		<tr><td colspan="2" style="text-align:left;width:80%;"><h2 style="padding-left: 0px; margin-bottom: 2px;">Meet Formspider, the new home of PL/SQL developers.</h2></td></tr>
		<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Formspider is a new development tool that enables you to build first class Web 2.0 applications with only PL/SQL. Formspider apps run using 100% AJAX, DHTML and JavaScript without the need to know any of them.</td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td colspan="2" style="text-align:left;width:80%;"><h2 style="padding-left: 0px; margin-bottom: 2px;">Do not miss the PL/SQL event of the year in Denmark.</h2></td></tr>
		<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Join us in our first free event in Denmark. Learn more about Formspider and how it can help you in developing world class applications.</td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td colspan="2"></td></tr>
		
		<tr><td>
			<!--program-->
			<table CELLPADDING="2" CELLSPACING="2">
                <tr><td><a href="http://www.theformspider.com"><img src="/images/logo_720_200_transparent.png" width="360" height="100" align="center" border="0" style="float:left; border:0;"></a></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;"><b>Event Details</b></td></tr>
				<tr><td style="text-align:left;width:80%;"><b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b>21 January 2013</td></tr>
				<tr><td style="text-align:left;width:80%;"><b>Location : </b><a href="http://www.thansen.dk/" target="_blank">thansen.dk</a>
															<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Banestr&#248;get 17, 2. th., 2630 T&#229;strup, Denmark
															<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Meeting in thansen.dk class room 100 meters from H&#248;je T&#229;strup train station</td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><th style="font-size:14px;text-align:left;width:80%;">Program (All times local)</th></tr>
				<tr><th style="text-align:left;width:80%;">13:30 - 14:30  Introducing Formspider, the Web 2.0 framework for PL/SQL developers</th></tr>
				<tr><td>Yalim Gerger, Founder&CEO of Formspider talks about the vision and the benefits of the Formspider Framework.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">14:40 - 15:10  Formspider Features & Applications</th></tr>
				<tr><td>Demonstration of several production applications built with Formspider and a closer look to the features used in these applications.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">15:15 - 16:15  Case Study: Modernizing a Forms-based ERP with Formspider</th></tr>
				<tr><td>Michiel Arentsen, Manager of Application Development of Rhenus Netherlands, shares his experiences with Formspider.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">16:20 - 17:00  Hand on with Formspider</th></tr>
				<tr><td>Let&#39;s build an application. Experience first hand why building an application with Formspider is so much better than anything else.</td></tr>
			</table>
		</td>
		<td valign="Top">
			<!--registration form-->
			<table CELLPADDING="2" CELLSPACING="2">
				<tr>
					<td>
						
						<div class="download" style="top: 310px; margin-left:10px;">
							<a target="_blank" href="http://formspideronline.com">
								<div class="onlinos">
								<div class="pclass">Online IDE</div>
								</div>
							</a>
							<a href="download.php">
								<div class="insider">
									<div class="pclass">Download</div>
								</div>
							</a>
						</div>
						
						<div>
							<br/><br/>
							<div id="registerDiv" style="width:300px; margin:auto; border:1px solid #c0c0c0; border-radius: 3px; box-shadow: 0 0 5px 0 #808080; display:block; visibility:hidden;" >
								<br/>
								<h2>REGISTER NOW - FREE!</h2>
								
								<form id="downloadForm" class="cmxform" method="get" action="">
									<p>
										<label for="name" id="nameLabel">Name</label>
										<input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="Name"/>
									</p>
									<p>
										<label for="email" id="emailLabel">Email (Required)</label>
										<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="Email (Required)"/>
									</p>
									
									<p>
										<button id="register" style="width:100%"><h2 style="padding-left: 0px; margin-bottom: 0px;">Book your seat</h2></button>
									</p>
									<input type="submit" value="Submit" class="submit" id="downloadFormSubmit" style="display:none" />
								</form>
							  
							</div>
							<div id="registerSuccessDiv" style="width:300px; margin:auto; border:1px solid #c0c0c0; border-radius: 3px; box-shadow: 0 0 5px 0 #808080; display:none;">
								<br/>
								<p>Thank you for your registration.</p>
								<p>See you on January 21st.</p>
							</div>
						</div>
					</td>
				</tr>
				
				<tr><td>
					<br/><br/>
					<div class="shareLinks" style="font-weight:normal;font-size:12px;" align="center">
						In collaboration with,<br>
						<a href="http://doug.dk/" target="_blank"><img src="images/doug_logo.jpg"></a>
						<br><br><br>
						<a href="/images/FormspiderEventInDenmark.ics"><img src="/images/addToOutlook_en.jpg" alt="Add to Outlook" width="166" height="58" align="center" border="0" style="float:center; border:0;"></a>
						<br><br><br>
						Share This Event
						<br><br>
						<a href="http://twitter.com/home?status=Formspider%20Event%20in%20Denmark.%20http://theformspider.com/FormspiderEventInDenmark.php" id="twit" title="Share on twitter" target="_blank">
							<img src="/images/shareLinks/twitter.png" alt="Share on Twitter">
						</a>
						<a href="http://www.facebook.com/sharer.php?t=Formspider%20Event%20in%20Denmark&amp;u=http%3A//theformspider.com/FormspiderEventInDenmark.php" id="facebook" title="Share on Facebook" target="_blank">
							<img src="/images/shareLinks/facebook.png" alt="Share on facebook">
						</a>
						<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=theformspider.com/FormspiderEventInDenmark.php&amp;title=Formspider%20Event%20in%20Denmark" id="linkedin" title="Share on LinkedIn" target="_blank">
							<img src="/images/shareLinks/linkedin.png" alt="Share on Buzz">
						</a>
					</div>
				</td></tr>
			</table>
		</td></tr>
	</table>
	<br>	
	<br>
	
  <!-- end .content --></div>
  <?php include ('footer2.php'); ?>
  <!-- end .container --></div>
</body>
</html>