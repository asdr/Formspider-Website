<?php $page = 'download'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gitora</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="../images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="master.css?v=1" />
	<link rel="stylesheet" type="text/css" href="gitora.css?v=1" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="master-ie8.css" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
	<link href="../css/jqueryui.button.css" rel="stylesheet" type="text/css"/>
	<!-- link href="../css/download.css?v=1" rel="stylesheet" type="text/css"/ -->
	<!--script src="http://code.jquery.com/jquery-latest.js"></script-->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/utilities.js"></script>
<script type="text/javascript" src="../js/modernizr.custom.61860.js"></script>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1251493-14', 'auto');
  ga('send', 'pageview');
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
		var downloadURLVar;
		
		if (getParameter("name"))
			nameField.value = getParameter("name");
		
		if (getParameter("email"))
			emailField.value = getParameter("email");
		
		var $dialog = $('<div id="systemRequirementsDialog"></div>')
			.html('<br><h3>Oracle Database Requirements</h3><p>Formspider supports Oracle Database Release 10.2.0.1 or higher (Standard Edition One, Standard Edition and Enterprise Edition) and Oracle Database XE 10g as well as 11g.</p><br><h3>Browser Requirements</h3><p>Formspider supports following browsers:</p><ul style="margin-left:35px;margin-bottom:10px;"><li>Microsoft Internet Explorer 7.0 or higher</li><li>Mozilla Firefox 3.6 or higher</li><li>Google Chrome</li><li>Safari</li></ul><h3>Java Requirements</h3><p>The application server must have Java 1.5 or higher installed.<p><em>P.S. Currently, we only support Oracle Java on Linux machines (GNU Java will be supported in following releases.)</em></p> </p><h3>HTTP Server Requirements</h3><p>Formspider requires a Servlet Container, like Apache Tomcat, in order to operate. You can install Formspider to an existing Apache Tomcat (version 5 or higher) or let Formspider install its own Tomcat (version 6.0.29).</p><p>Formspider also supports OC4J, Oracle WebLogic 10g and above and Oracle GlassFish 3 and above.</p><br><h3>Disk Space Requirements</h3><p>Formspider Installer file is ~180 MB. Its free disk space requirements are as follows:</p><ul style="margin-left:35px;margin-bottom:10px;"><li>52 MB free space to install new Apache Tomcat. (You may use an existing Tomcat installation)</li><li>128 MB free space in specified tablespace. </li><li>250 MB free space for Version Control Components. </li></ul>')
			.dialog({
				autoOpen: false,
				title: 'Formspider 1.8.1 Installation Requirements',
				width:600
			});
 
		$('#opener').click(function() {
			$dialog.dialog('open');
			// prevent the default action, e.g., following a link
			return false;
		});
		
		var $licenseDialog = $("#license")
			.dialog({
				title: "GERGER FORMSPIDER TRIAL LICENSE",
				autoOpen: false,
				//modal: true,
				height:600,
				width:600
			});
		
		$('#termsSpan').click(function() {
			$licenseDialog.dialog('open');
			// prevent the default action, e.g., following a link
			return false;
		});
		
		$( "#termsCheckbox" )
			.button({ 
				text: false,
				icons: {
					primary: 'ui-icon-close'
				}
			})
			.click(function() {
				if (this.checked){
					$( "#termsCheckbox" ).button("option","icons",{primary:'ui-icon-check'});
					$( "#downloadWindows" ).button( "option", "disabled", false );
					$( "#downloadLinux" ).button( "option", "disabled", false );
					$( "#downloadWindowsMobile" ).button( "option", "disabled", false );
					$( "#downloadLinuxMobile" ).button( "option", "disabled", false );
					/*$( "#downloadUpgrade" ).button( "option", "disabled", false );
					$( "#downloadUpgrade2" ).button( "option", "disabled", false );*/
				}else{
					$( "#termsCheckbox" ).button("option","icons",{primary:'ui-icon-close'});
					$( "#downloadWindows" ).button( "option", "disabled", true );
					$( "#downloadLinux" ).button( "option", "disabled", true );
					$( "#downloadWindowsMobile" ).button( "option", "disabled", true );
					$( "#downloadLinuxMobile" ).button( "option", "disabled", true );
					/*$( "#downloadUpgrade" ).button( "option", "disabled", true );
					$( "#downloadUpgrade2" ).button( "option", "disabled", true );*/
				}
			});
		
		$( "#downloadWindows" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("http://cdn.theformspider.com/cdn/Gitora_1.0.0.zip");
					logDownload(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/download/FormspiderForWindows']);
				}
				return false;
			});
			
		$( "#downloadLinux" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("http://cdn.theformspider.com/cdn/Gitora_1.0.0.jar");
					logDownload(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/download/FormspiderForLinux']);
				}
				return false;
			});
		
		
		function logDownload(name, email) {
			
			var expires = { expires: 3650 };
			$.cookie("name", name, expires);
			$.cookie("email", email, expires);
			
			$.ajax({
			  type: "GET",
			  url: "product.php",
			  data: "descid=GitoraDownload&name="+ name +"&mail="+ email+"&version=1.0.0",
			  async: true,
			  success: function(data) {
				//alert('success');
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
		
		if ((nameField.value == null || nameField.value == "") && ($.cookie("name")))
			nameField.value = $.cookie("name");
		
		if ((emailField.value == null || emailField.value == "")  && ($.cookie("email")))
			emailField.value = $.cookie("email");
		
		document.getElementById("downloadDiv").style.visibility = "visible";
		document.getElementById("termsCheckbox").style.left = "-99999px"; //chrome'da solda checkbox çýkýyor, saklamak için
		
	});
</script> 

	
</head>
<body class="download">
	
	<?php include 'header.php'; ?>
	
	<div id="container">
	
	<div id="content">
	
		<h2>Download Gitora</h2>
			
		<div class="steps2">
			
			<div>
				<div id="downloadDiv" >

					<form id="downloadForm" class="cmxform" method="get" action="">
						
						<center>
						<div style="width: 100%; height:450px;">
						
							<div class="download-block" style="border:none; box-shadow:none;">
								<p style="font-size:16px;" >Please enter your name, email and accept the license agreement to download the software.</p>
								<p>
									<label for="name" id="nameLabel">Name</label>
									<input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="Name"/>

									<label for="email" id="emailLabel">Email (Required)</label>
									<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="Email (Required)"/>
								</p>
								
								<p style="height:60px; ">
									<input type="checkbox" id="termsCheckbox" /><label for="termsCheckbox" id="termsCheckboxLabel">Yes</label>
									<span>I accept </span><span class="linkSpan"><a href="license.php">the terms and conditions</a></span><span>.</span>
								</p>
							</div>
						
						    <div class="download-block">
								<p>
									<button id="downloadWindows" style="width:100%">Download for Windows</button>
								</p>
								<p>
									<button id="downloadLinux" style="width:100%">Download for Linux & MacOSX</button>
								</p>
							</div>
						
						</div>
					</center>
						
						<input type="submit" value="Submit" class="submit" id="downloadFormSubmit" style="display:none" />
					</form>
				  
				</div>
			</div>
			
			<br>
			
						<table style="width: 960px;">
                          <tbody>
<tr>
<td><p style="text-align:center;"><span class="linkSpan" id="opener" style="cursor:pointer;">System Requirements</span> </p></td>
</tr>
</tbody>
</table>
			
			
		</div>
				
	</div><!-- /content -->
	
	<?php include 'footer.php'; ?>
