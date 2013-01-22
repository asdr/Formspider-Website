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
					_gaq.push(['_trackPageview','/register/RegisterFSEventInNetherlands']);
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
			  data: "descid=RegisterFSEventInNetherlands&name="+ name +"&mail="+ email,
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
		
		document.getElementById("registerDiv").style.visibility = "hidden";
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
  			<h1 class="topPhrase">Formspider Day in Netherlands</h1>
  		<!--</div>-->
  	<br>
  	<!--h2>Do not miss the PL/SQL event of the year in Netherlands. Meet Formspider, the new home of PL/SQL developers.</h2-->
	
	<table CELLPADDING="3" CELLSPACING="3">
		<tr><td colspan="2" style="font-size:17px;text-align:left;width:80%;"><a href="http://theformspider.com/blog/2012/09/18/recap-of-formspider-day-in-netherlands/" target="_blank"><font color="blue">Click here for the summary of the amazing day in Netherlands</font></a>. You can also download the slides for the presentations.</td></tr>
		<tr/>
		<tr/>
		<tr><td colspan="2" style="text-align:left;width:80%;"><h2 style="padding-left: 0px; margin-bottom: 2px;">Meet Formspider, the new home of PL/SQL developers.</h2></td></tr>
		<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Formspider is a new development tool that enables you to build first class Web 2.0 applications with only PL/SQL. Formspider apps run using 100% AJAX, DHTML and JavaScript without the need to know any of them.</td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td colspan="2" style="text-align:left;width:80%;"><h2 style="padding-left: 0px; margin-bottom: 2px;">Do not miss the PL/SQL event of the year in Netherlands.</h2></td></tr>
		<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Join us in our first free full day event in Netherlands. Learn more about Formspider and how it can help you in developing world class applications.</td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td colspan="2"></td></tr>
		
		<tr><td>
			<!--program-->
			<table CELLPADDING="2" CELLSPACING="2">
				<tr><td style="font-size:14px;text-align:left;width:80%;"><b>Event Details</b></td></tr>
				<tr><td style="text-align:left;width:80%;"><b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b>13 September 2012</td></tr>
				<tr><td style="text-align:left;width:80%;"><b>Location : </b>Ciber Offices at Archimedesbaan 16 3439 ME Nieuwegein</td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><th style="font-size:14px;text-align:left;width:80%;">Program (All times in CET)</th></tr>
				<tr><th style="text-align:left;width:80%;">09:00 - 09:50  Formspider Introduction</th></tr>
				<tr><td>Yalim Gerger, Founder&CEO of Gerger talks about the vision and the benefits of the Formspider Framework.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">09:50 - 10:00  Break</th></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">10:00 - 10:50  Formspider Features & Applications</th></tr>
				<tr><td>Yalim Gerger demonstrates several production applications built with Formspider and takes a closer look to the features used in these applications.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">10:50 - 11:00  Break</th></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">11:00 - 12:00  The Formspider IDE</th></tr>
				<tr><td>Orhan Turkoglu, VP of Client Services builds a Formspider application. See with your own eyes why building an application with Formspider is so Forms-like and so easy to learn.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">12:00 - 13:00  Lunch</th></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">13:00 - 13:50  Modernizing a Forms-based Logistics ERP System with Formspider</th></tr>
				<tr><td>Michiel Arentsen, Manager of Application Development of Rhenus Netherlands, shares his experiences with Formspider.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">13:50 - 14:00  Break</th></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">14:00 - 14:50  Installing, updating and maintaining Formspider</th></tr>
				<tr><td>Ronald Rood (OCM/ACE) from Ciber looks under the hood of Formspider with a DBA&#39;s eyes.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">14:50 - 15:00  Break</th></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">15:00 - 15:30  A Sneak Peak into the Future</th></tr>
				<tr><td>Yalim Gerger shares some of the new features of Formspider currently under development.</td></tr>
				<tr><td></td></tr>
				<tr><th style="text-align:left;width:80%;">15:30 - 16:30  Q&A session with the presenters</th></tr>
			</table>
		</td>
		<td valign="Top">
			<!--registration form-->
			<table CELLPADDING="2" CELLSPACING="2">
				<tr>
					<td>
						<div>
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
								<p>See you on September 13th.</p>
							</div>
						</div>
					</td>
				</tr>
				
				<tr><td>
				<br/><br/>
				<div class="shareLinks" style="font-weight:normal;font-size:12px;" align="center">
					In colloboration with,<br>
					<a href="http://www.ciber.com/nl/" target="_blank"><img src="images/ciber_logo.jpg"></a>
					<br><br><br>
					Share This Event
					<br><br>
					<a href="http://twitter.com/home?status=Formspider%20Event%20in%20Netherlands.%20http://theformspider.com/FormspiderEventInNetherlands.php" id="twit" title="Share on twitter" target="_blank">
						<img src="/images/shareLinks/twitter.png" alt="Share on Twitter">
					</a>
					<a href="http://www.facebook.com/sharer.php?t=Formspider%20Event%20in%20Netherlands&amp;u=http%3A//theformspider.com/FormspiderEventInNetherlands.php" id="facebook" title="Share on Facebook" target="_blank">
						<img src="/images/shareLinks/facebook.png" alt="Share on facebook">
					</a>
					<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=theformspider.com/FormspiderEventInNetherlands.php&amp;title=Formspider%20Event%20in%20Netherlands" id="linkedin" title="Share on LinkedIn" target="_blank">
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