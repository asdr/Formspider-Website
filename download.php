<?php $page = 'download'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formspider</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="master.css" />
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
	<link href="css/jqueryui.button.css" rel="stylesheet" type="text/css"/>
	<link href="css/download.css" rel="stylesheet" type="text/css"/>
	<!--script src="http://code.jquery.com/jquery-latest.js"></script-->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/utilities.js"></script>
<script type="text/javascript" src="js/modernizr.custom.61860.js"></script>
	
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
		var downloadURLVar;
		
		if (getParameter("name"))
			nameField.value = getParameter("name");
		
		if (getParameter("email"))
			emailField.value = getParameter("email");
		
		var $dialog = $('<div></div>')
			.html('<br><h3>Oracle Database Requirements</h3><p>Formspider supports Oracle Database Release 10.2.0.1 or higher (Standard Edition One, Standard Edition and Enterprise Edition) and also Oracle Database 10g Express Edition.</p><h3>Browser Requirements</h3><p>Formspider supports following browsers:</p><ul style="margin-left:35px;margin-bottom:10px;"><li>Microsoft Internet Explorer 6.0 or higher</li><li>Mozilla Firefox 3.0 or higher</li><li>Google Chrome</li></ul><p><em>P.S. Apple Safari and Opera browsers will be supported in following releases.</em></p><h3>Java Requirements</h3><p>Applications built with Formspider may run as Java Desktop applications as well. If you choose to do so, the client machine is required to have Java 1.6.0_10 (version 6 update 10) or higher installed.<p><em>P.S. Currently, we only support Oracle Java on Linux machines (GNU Java will be supported in following releases.)</em></p> </p><h3>HTTP Server Requirements</h3><p>Formspider requires a Servlet Container, like Apache Tomcat, in order to operate. You can install Formspider to an existing Apache Tomcat (version 5 or higher) or let Formspider install its own Tomcat (version 6.0.29).</p><p><em>P.S. Other HTTP servers like OC4J, Oracle WebLogic, Oracle GlassFish etc. will be supported in following releases.</em></p><h3>Disk Space Requirements</h3><p>Formspider Installer file is 36 MB. Its free disk space requirements are as follows:</p><ul style="margin-left:35px;margin-bottom:10px;"><li>13 MB free space to install Java Renderer files and other shortcuts to run applications.</li><li>21 MB free space to install new Apache Tomcat. Apache Tomcat installation is optional. You may use an existing Tomcat installation.</li><li>120 MB free space in USERS tablespace. </li></ul>')
			.dialog({
				autoOpen: false,
				title: 'Formspider 1.2 Installation Requirements',
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
					$( "#downloadUpgrade" ).button( "option", "disabled", false );
					$( "#downloadUpgrade2" ).button( "option", "disabled", false );
				}else{
					$( "#termsCheckbox" ).button("option","icons",{primary:'ui-icon-close'});
					$( "#downloadWindows" ).button( "option", "disabled", true );
					$( "#downloadLinux" ).button( "option", "disabled", true );
					$( "#downloadUpgrade" ).button( "option", "disabled", true );
					$( "#downloadUpgrade2" ).button( "option", "disabled", true );
				}
			});
		
		$( "#downloadWindows" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("/download/Formspider_1.2.1.exe");
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
					downloadURL("/download/Formspider_1.2.1.jar");
					logDownload(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/download/FormspiderForLinux']);
				}
				return false;
			});
			
		$( "#downloadUpgrade" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("/download/Formspider 1.1.x to 1.2.1 update patch.zip");
					logUpgrade(nameField.value, emailField.value, '1.1.x_to_1.2.1');
					_gaq.push(['_trackPageview','/download/FormspiderUpgrade']);
				}
				return false;
			});
		
		$( "#downloadUpgrade2" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("/download/Formspider 1.2.0 to 1.2.1 update patch.zip");
					logUpgrade(nameField.value, emailField.value, '1.2.0_to_1.2.1');
					_gaq.push(['_trackPageview','/download/FormspiderUpgrade']);
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
			  data: "descid=Download&name="+ name +"&mail="+ email+"&version=1.2.1",
			  async: true,
			  success: function(data) {
				//alert('success');
			  },
			  error: function(jqXHR, textStatus) {
				//alert('error: ' + textStatus);
			  }
			});
		}
		
		function logUpgrade(name, email, version) {
			
			var expires = { expires: 3650 };
			$.cookie("name", name, expires);
			$.cookie("email", email, expires);
			
			$.ajax({
			  type: "GET",
			  url: "product.php",
			  data: "descid=Upgrade&name="+ name +"&mail="+ email+"&version="+version,
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
	
	<?php include 'assets/header.php'; ?>
	
	<div id="container">
	
	<div id="content">
	
		<h2>Download Formspider</h2>
		<!--<p>Thank you for downloading Formspider Release 1.1.1. Please enter your name and email and accept the <a href="#">license agreement</a> to download the software.</p>
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
			-->
			
		<div class="steps2">
			<div style="display:none;">
			<div id="license">
				<div class="licenseNew">
					<p style="text-align:center; font-weight:bold;">GERGER FORMSPIDER TRIAL LICENSE</p>

					<p>"We," "us," and "our" refers to Gerger, for and on behalf of itself and its subsidiaries and affiliates under common control. "You" and "your" refers to the individual or entity that wishes to use the programs from Gerger. "Programs" refers to the Gerger software product you wish to download and use and program documentation. "License" refers to your right to use the Programs under the terms of this agreement. This agreement is governed by the substantive and procedural laws of the Republic of Turkey. You and Gerger agree to submit to the exclusive jurisdiction of, and venue in, the courts of the Republic of Turkey in any dispute arising out of or relating to this agreement.
					</p>
					<p>We are willing to license the programs to you only upon the condition that you accept all of the terms contained in this agreement. Read the terms carefully and select the "Accept License Agreement" button to confirm your acceptance. If you are not willing to be bound by these terms, select the "Decline License Agreement" button.
					</p>
					<p class="section">License Rights</p>
					
					<p>We grant you a nonexclusive, nontransferable limited license to use the Programs only for the purpose of developing, testing, prototyping and demonstrating your application, and not for any other purpose. If you use the application you develop under this license for any internal data processing or for any commercial or production purposes, or you want to use the programs for any purpose other than as permitted under this agreement, you must obtain a production release version of the program by contacting us to obtain the appropriate license. You acknowledge that we may not produce a production release version of the program and any development efforts undertaken by you are at your own risk. We may audit your use of the programs.
					</p>
					<p class="section">Ownership and Restrictions</p> 
					
					<p>We retain all ownership and intellectual property rights in the programs. The Programs may be installed on one computer only. You may make one copy of the Program for backup purposes.
					</p>
					<p class="section">You may not:</p> 
					
					<ul style="padding-left:30px; padding-right:15px;">
					<li>use the Programs for your own internal data processing or for any commercial or production purposes, or use the programs for any purpose except the development of your application;
					</li>
					<li>use the application you develop with the Programs for any internal data processing or commercial or production purposes without securing an appropriate license from us;
					</li>
					<li>continue to develop your application after you have used it for any internal data processing, commercial or production purpose without securing an appropriate license from us;
					</li>
					<li>remove or modify any Program markings or any notice of our proprietary rights;
					</li>
					<li>make the Programs available in any manner to any third party;
					</li>
					<li>use the Programs to provide third party training;
					</li>
					<li>assign this agreement or any rights granted hereunder or give or transfer the Programs or an interest in them to another individual or entity;
					</li>
					<li>cause or permit reverse engineering disassembly or decompilation of the programs or use or copy the source code if it is available without decompilation;
					</li>
					<li>disclose results of any program benchmark tests without our prior consent.
					</li>
					</ul>
					<br/>
					<p class="section">No Technical Support</p>
					
					<p>Our technical support organization is not obligated in any way to provide technical support, phone support, or updates to you for the programs licensed under this agreement.  
					</p>
					<p class="section">End of Agreement</p>
					
					<p>You may terminate this agreement by destroying all copies of the programs and by informing us of the date of destruction of the Programs. We have the right to terminate your right to use the Programs if you fail to comply with any of the terms of this agreement, in which case you shall destroy all copies of the programs.
					</p>
					
					<p class="section">Relationship Between the Parties</p>
					
					<p>The relationship between you and us is that of licensee/licensor. Neither party will represent that it has any authority to assume or create any obligation, express or implied, on behalf of the other party, nor to represent the other party as agent, employee, franchisee, or in any other capacity.
					</p>
					<p class="section">Open Source</p>
					
					<p>"Open Source" software - software available without charge for use, modification and distribution - is often licensed under terms that require the user to make the user's modifications to the Open Source software or any software that the user 'combines' with the Open Source software freely available in source code form. If you use Open Source software in conjunction with the programs, you must ensure that your use does not: (i) create, or purport to create, obligations of us with respect to the Gerger Programs; or (ii) grant, or purport to grant, to any third party any rights to or immunities under our intellectual property or proprietary rights in the Gerger Programs. For example, you may not develop a software program using a Gerger Program and an Open Source program where such use results in a program file(s) that contains code from both the Gerger program and the Open Source program (including without limitation libraries) if the Open Source program is licensed under a license that requires any "modifications" be made freely available. You also may not combine the Gerger Program with programs licensed under the GNU General Public License ("GPL") in any manner that could cause, or could be interpreted or asserted to cause, the Gerger Program or any modifications thereto to become subject to the terms of the GPL.
					</p>
					<p class="section">Entire Agreement</p>
					
					<p>You agree that this agreement is the complete agreement for the Programs and licenses, and this agreement supersedes all prior or contemporaneous agreements or representations. If any term of this agreement is found to be invalid or unenforceable, the remaining provisions will remain effective.
					</p>
					
					<p class="section">Prohibited Uses</p>
					
					<p>You may not, without Our prior written consent, redistribute the Software or Modifications and must not allow any third party to use the Software or Modifications, or any portions thereof, for software development purposes. You are explicitly not allowed to redistribute the Software or Modifications as part of any product that can be described as a development toolkit or library or is intended for use by software developers and not end-users. You are not allowed to redistribute any part of the Software documentation. You may not: (a) use any part of the Software or Modifications or Your knowledge of the Software (or any information that You learn as a result of Your use of the Software) to create a product with the same or substantially the same functionality as the Software; (b) transfer, rent, lease, or sublicense the Software or Modifications, or any portions thereof; (c) change or remove the copyright notice from any of the files included in the Software or Modifications; or (d) Sell or offer to sell the software as a subscription based tool on the internet. UNDER NO CIRCUMSTANCES MAY YOU USE THE SOFTWARE (INCLUDING WITHOUT LIMITATION THE SOURCE CODE THEREOF) AS THE BASIS FOR OR IN CONNECTION WITH A PRODUCT THAT CONTAINS THE SAME, OR SUBSTANTIALLY THE SAME, FUNCTIONALITY AS THE SOFTWARE.
					</p>
					
					<p class="section">Dispute Resolution
					</p>
					<p>Any dispute between the parties hereto arising out of this agreement, the formation of this agreement or any alleged breach of the agreement shall be resolved soley in Turkish Courts. By entering into this agreement, you irrevocably consent to the jurisdiction and venue of the Courts located in Republic of Turkey.
					</p>
					<p class="section">Disclaimer of Warranty and Exclusive Remedies
					</p>
					<p>THE PROGRAMS ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND. WE FURTHER DISCLAIM ALL WARRANTIES, EXPRESS AND IMPLIED, INCLUDING WITHOUT LIMITATION, ANY IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR NON-INFRINGEMENT.
					</p>
					<p>IN NO EVENT SHALL WE BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE OR CONSEQUENTIAL DAMAGES, OR DAMAGES FOR LOSS OF PROFITS, REVENUE, DATA OR DATA USE, INCURRED BY YOU OR ANY THIRD PARTY, WHETHER IN AN ACTION IN CONTRACT OR TORT, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. OUR ENTIRE LIABILITY FOR DAMAGES HEREUNDER SHALL IN NO EVENT EXCEED THE AMOUNTS ACTUALLY RECEIVED BY LICENSOR PURSUANT TO THE TERMS OF THIS AGREEMENT
					</p>
					<p class="section">Compliance with the Export Import Laws of the Republic of Turkey</p>
					<p>If you intend to export or use this software outside the Republic of Turkey, you must ensure that you are in compliance with all export and import laws of the Republic of Turkey. Gerger makes no representations that you may exort or use the Program outside of the Republic of Turkey. You agree to indemnify, defend and hold harmless Gerger, its officers, directors, employees, agents and contractors as a result of any claim, complaint, cause of action, investigation or other matter caused by your failure to comply with all applicable export/import laws of the Republic of Turkey.
					</p>
				</div>
			</div>
			</div>
			
			<div>
				<div id="downloadDiv" >
					
					<p>Thank you for downloading <a href="changeLog.php" target="_blank">Formspider Release 1.2.1 </a>. Please enter your name and email and accept the license agreement to download the software.</p>
					
					<form id="downloadForm" class="cmxform" method="get" action="">
						<p>
							<label for="name" id="nameLabel">Name</label>
							<input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="Name"/>

							<label for="email" id="emailLabel">Email (Required)</label>
							<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="Email (Required)"/>
						</p>
						
						<p>
							<input type="checkbox" id="termsCheckbox" /><label for="termsCheckbox" id="termsCheckboxLabel">Yes</label>
							<span>I accept </span><span class="linkSpan" id="termsSpan">the terms and conditions</span><span>.</span>
						</p>
						
						<p>
							<button id="downloadWindows" style="width:100%">Download Formspider for Windows</button>
						</p>
						<p>
							<button id="downloadLinux" style="width:100%">Download Formspider for Linux & MacOSX</button>
						</p>
						<p>
							<button id="downloadUpgrade" style="width:100%">Download Formspider 1.1.x to 1.2.1 Update Script</button>
						</p>
						<p>
							<button id="downloadUpgrade2" style="width:100%">Download Formspider 1.2.0 to 1.2.1 Update Patch</button>
						</p>
						<input type="submit" value="Submit" class="submit" id="downloadFormSubmit" style="display:none" />
					</form>
				  
				</div>
			</div>
			
			<br>
			
			<p style="text-align:center;"><a href="/changeLog.php" target="_blank">View Change Log</a></p>
			<p style="text-align:center;"><a href="/gettingstarted.php" target="_blank">Installation Guide</a></p>
			<p style="text-align:center;"><span class="linkSpan" id="opener" style="cursor:pointer;">System Requirements</span> </p>
			<p style="text-align:center;"><a href="/download/Formspider_security_patch_20120906.zip" target="_blank">Download Security Patch 20120906 For Version 1.1 and 1.1.1</a></p>
			<p style="text-align:center;"><a href="/download/Formspider 1.1 to 1.1.1 update patch.zip" target="_blank">Download Formspider 1.1 to 1.1.1 Update Patch</a></p>
			<p style="text-align:center;"><a href="/download/Formspider 1.0 to 1.1.1 update patch.zip" target="_blank">Download Formspider 1.0 to 1.1.1 Update Patch</a></p>
			
		</div>
				
	</div><!-- /content -->
	
	<?php include 'assets/footer.php'; ?>
