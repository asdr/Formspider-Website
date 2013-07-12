<?php $page = 'download'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formspider</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="master.css?v=1" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="master-ie8.css" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
	<link href="css/jqueryui.button.css" rel="stylesheet" type="text/css"/>
	<link href="css/download.css?v=1" rel="stylesheet" type="text/css"/>
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
		
		var $dialog = $('<div id="systemRequirementsDialog"></div>')
			.html('<br><h3>Oracle Database Requirements</h3><p>Formspider supports Oracle Database Release 10.2.0.1 or higher (Standard Edition One, Standard Edition and Enterprise Edition) and Oracle Database XE 10g as well as 11g.</p><br><h3>Browser Requirements</h3><p>Formspider supports following browsers:</p><ul style="margin-left:35px;margin-bottom:10px;"><li>Microsoft Internet Explorer 7.0 or higher</li><li>Mozilla Firefox 3.6 or higher</li><li>Google Chrome</li><li>Safari</li></ul><h3>Java Requirements</h3><p>The application server must have Java 1.5 or higher installed.<p><em>P.S. Currently, we only support Oracle Java on Linux machines (GNU Java will be supported in following releases.)</em></p> </p><h3>HTTP Server Requirements</h3><p>Formspider requires a Servlet Container, like Apache Tomcat, in order to operate. You can install Formspider to an existing Apache Tomcat (version 5 or higher) or let Formspider install its own Tomcat (version 6.0.29).</p><p>Formspider also supports OC4J, Oracle WebLogic 10g and above and Oracle GlassFish 3 and above.</p><br><h3>Disk Space Requirements</h3><p>Formspider Installer file is ~44MB. Its free disk space requirements are as follows:</p><ul style="margin-left:35px;margin-bottom:10px;"><li>52 MB free space to install new Apache Tomcat. Apache Tomcat installation is optional. You may use an existing Tomcat installation.</li><li>128 MB free space in specified tablespace. </li></ul>')
			.dialog({
				autoOpen: false,
				title: 'Formspider 1.4.0 Installation Requirements',
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
					downloadURL("http://cdn.theformspider.com/cdn/Formspider_1.4.0.zip");
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
					downloadURL("http://cdn.theformspider.com/cdn/Formspider_1.4.0.jar");
					logDownload(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/download/FormspiderForLinux']);
				}
				return false;
			});
			
		$( "#downloadWindowsMobile" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("http://cdn.theformspider.com/cdn/FSMobile_Beta1.zip");
					logMobileDownload(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/download/FormspiderMobileForWindows']);
				}
				return false;
			});
			
		$( "#downloadLinuxMobile" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("http://cdn.theformspider.com/cdn/FSMobile_Beta1.jar");
					logMobileDownload(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/download/FormspiderMobileForLinux']);
				}
				return false;
			});
			
		$( "#downloadUpgrade" )
			.button({
				disabled: true 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					downloadURL("/download/Formspider 1.2.x to 1.3.0 update patch.zip");
					logUpgrade(nameField.value, emailField.value, '1.2.x_to_1.3.0');
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
			  data: "descid=Download&name="+ name +"&mail="+ email+"&version=1.4.0",
			  async: true,
			  success: function(data) {
				//alert('success');
			  },
			  error: function(jqXHR, textStatus) {
				//alert('error: ' + textStatus);
			  }
			});
		}
		
		function logMobileDownload(name, email) {
			
			var expires = { expires: 3650 };
			$.cookie("name", name, expires);
			$.cookie("email", email, expires);
			
			$.ajax({
			  type: "GET",
			  url: "product.php",
			  data: "descid=MobileDownload&name="+ name +"&mail="+ email+"&version=beta1",
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

					<p>This document is a legal agreement (the "Agreement") between Gerger Yazilim ve Danismanlik Hizmetleri Ltd. Sti. and you or the organization on whose behalf you are entering into this agreement.
					</p>
					<p>"We," "us,", "our" and "Gerger" refers to Gerger Yazilim ve Danismanlik Hizmetleri Ltd. Sti., for and on behalf of itself and its subsidiaries and affiliates under common control.  "You" and "your" refers to the individual or entity that wishes to use the programs from Gerger.  "Software", "Program" or "Programs" refers to the Gerger's software product trademarked as Formspider, registered as GARP (Generic Application Rules Repository) at ITU ARI Teknokent, you wish to use.  "License" refers to your right to use the programs under the terms of this agreement.  This agreement is governed by the substantive and procedural laws of the Republic of Turkey. You and Gerger agree to submit to the exclusive jurisdiction of, and venue in, the courts of the Republic of Turkey in any dispute arising out of or relating to this agreement.
					</p>
					<p>Rights granted herein apply only to Software for which you've paid the applicable license fee.
					</p>
					<p>By downloading, installing, copying or otherwise using the Software, you accept the following terms and conditions. If you do not agree with any of the terms or the conditions, do not proceed with the downloading, copying, installation or any other use of the Software or any portion thereof as you have no rights to do so. The Software is protected by the copyright laws of The Republic of Turkey and international copyright laws, as well as other intellectual property laws and treaties. The Software is licensed, not sold. This license agreement describes your rights and restrictions with respect to the Software and its components.
					</p>
					<p class="section">1. DEFINITIONS</p>
					
					<p>"Application" means any software, application, or elements that Your Designated Users develop using the Software or Modifications in accordance with this Agreement; provided that any such Application (i) must have substantially different functionality than the Software, and (ii) must not allow any third party to use the Software or Modifications, or any portion thereof, for software development or application development purposes.
					</p>
					<p>"Designated User" shall mean a single distinct person for whom You have purchased a license to use the Software, whether such person is an employee acting within the scope of their employment with You or Your consultant or contractor acting within the scope of the services they provide for You. A Designated User can be replaced with a new Designated User only after being a Designated User for a minimum of six (6) months. 
					</p>
					<p>
					"End User" means an end user of Your Application who acquires a license to such solely for their own internal use and not for distribution, resale, user interface design, or software development purposes.
					</p>
					<p>"Modification" means: a) any addition to or deletion from the contents of a file included in the original Software or previous Modifications created by You, and/or b) any new file that leverages any part of the original Software or previous Modifications.
					</p>
					<p>"Sample Code" means sample source code included with the Software and designated as "sample code," "samples," "sample application code," and/or "snippets," and/or found in directories labeled "samples" or "examples".
					</p>
					<p class="section">2. LICENSE GRANT</p>
					
					<p>Subject to the payment of the fee required, and subject to your compliance with all of the terms and conditions of this Agreement, We grant to You a revocable, non-exclusive, non-transferable and non-sublicensable license (i) for Designated User(s) to use the Software to create Modifications and Applications; (ii) for You to distribute the Software and/or Modifications to End Users solely as integrated into the Applications; and (iii) for End Users to use the Software as integrated into Your Applications in accordance with the terms of this Agreement.
					</p>
					<p>The Designated User(s) may create one (1) developer account in one installation of the Software to create Applications and Modifications using the Software.
					</p>
					<p>In addition to the other terms contained herein, in the event You have downloaded or received beta or pre-release versions of the Software (the "Beta Software") from Us, We grant to You a revocable, non-exclusive, non-transferable and non-sublicensable license to install and use the Beta Software strictly for Your internal evaluation and review purposes and not for production purposes (the "Beta License"). You are explicitly not permitted to distribute the Software to any user outside the Organization on whose behalf you have undertaken this license. Your rights to use the Beta Software will immediately terminate upon the earlier of (i) the expiration of the evaluation period established by Us, or (ii) such time that You purchase a license to a non-evaluation version of the Software. We reserve the right to terminate Your Beta License at any time in Our absolute and sole discretion.
					</p>
					<p>You acknowledge that Trial and/or beta Software might place watermarks on output, contain limited functionality, function for a limited period of time, or limit the functionality or time of functioning of any output. Access to and/or use of any files or output created with such software is entirely at your own risk. We are licensing the Software on an "as is" basis at your risk and we disclaim any warranty or liability to you of any kind.
					</p>
					<p>You may modify the "Sample Code" solely for the purposes of designing, developing and testing Your own Applications. However, You are permitted to use, copy and redistribute Your modified Sample Code only if all of the following conditions are met: (a) You include Our copyright notice (if any) with Your Application, including every location in which any other copyright notice appears in such Application; and (b) You do not otherwise use Our name, logos or other of Our trademarks to market Your Application, unless otherwise agreed by Us in writing.
					</p>
					<p>You may not cause or permit reverse engineering disassembly or decompilation of the programs or use or copy the source code if it is available without decompilation;
					</p>
					<p>You may not disclose results of any program benchmark tests without our prior consent.
					</p>
					
					<p class="section">3. OWNERSHIP</p>
					
					<p>This is a license agreement and not an agreement for sale. We reserve ownership of all intellectual property rights inherent in or relating to the Software, which include, but are not limited to, all copyright, patent rights, all rights in relation to registered and unregistered trademarks (including service marks), confidential information (including trade secrets and know-how) and all rights other than those expressly granted by this Agreement.
					</p>
					<p>While You retain all rights to any original work authored by You as part of the Modifications, We continue to own all copyright and other intellectual property rights in the Software.You must not remove, obscure or interfere with any copyright, acknowledgment, attribution, trademark, warning or disclaimer statement affixed to, incorporated in or otherwise applied in connection with the Software.
					</p>
					<p>You will not owe Us any royalties for Your distribution of the Software in accordance with this Agreement.
					</p>
					
					<p class="section">4. PROHIBITED USES</p>
					
					<p>You may not redistribute the Software or Modifications other than by including the Software or a portion thereof within Your Application. You may not redistribute the Software or Modifications as part of any Application that can be described as a development toolkit or library, an application builder, a website builder or any Application that is intended for use by software, application, or website developers or designers. You may not redistribute any part of the Software documentation. You may not change or remove the copyright notice from any of the files included in the Software or Modifications.
					</p>
					<p>Under no circumstances may you use the Software for an application that is intended for software or application development purposes.
					</p>
					<p>You are required to ensure that the Software is not reused by or with any applications other than those with which You distribute it as permitted herein. For example, if You install the Software on a customer's server, that customer is not permitted to use the Software independently of Your Application, and must be informed as such.
					</p>
					
					<p class="section">5. TERMINATION</p>
					
					<p>This Agreement and Your right to use the Software and Modifications will terminate immediately if You fail to comply with any of the terms and conditions of this Agreement. Upon termination, You agree to immediately cease using and destroy the Software or Modifications, including all accompanying documents. The provisions of sections 4, 5, 6, 7, 8, 9, and 11 will survive any termination of this Agreement.
					</p>
					
					<p class="section">6. DISCLAIMER OF WARRANTIES</p>
					
					<p>To the maximum extent permitted by applicable law, we and our resellers disclaim all warranties and conditions, either express or implied, including, but not limited to, implied warranties of merchantability, fitness for particular purpose, and title and non-infringement, with regard to the software. We do not guarantee that the operation of the Software or the code it produces will be uninterrupted or error-free, and you acknowledge that it is not technically practicable for us to do so.
					</p>
					
					<p class="section">7. LIMITATION OF LIABILITIES</p>
					
					<p>To the maximum extent permitted by applicable law, in no event shall we or our resellers be liable under any legal or equitable theory for any special, incidental, indirect or consequential damages whatsoever (including, without limitation, damages for loss of business profits, business interruption, loss of business information or any other pecuniary law) arising out of the use or inability to use the Software or the code it produces or any other subject matter relating to this Agreement, even if we or our resellers have been advised of the possibility of such damages. In any case, our entire liability with respect to any subject matter relating to this Agreement shall be limited to the amount actually paid by you for the Software.
					</p>
					
					<p class="section">8. VERIFICATION</p>
					
					<p>We or a certified auditor acting on Our behalf, may, upon Our reasonable request and at Our expense, audit You with respect to the use of the Software. Such audit may be conducted by mail, electronic means or through an in-person visit to Your place of business. Any such in-person audit shall be conducted during regular business hours at Your facilities and shall not unreasonably interfere with Your business activities. We shall not remove, copy, or redistribute any electronic material during the course of an audit. If an audit reveals that You are using the Software in a way that is in material violation of the terms of this Agreement, then You shall pay Our reasonable costs of conducting the audit. In the case of a material violation, You agree to pay Us any amounts owing that are attributable to the unauthorized use. In the alternative, We reserve the right, at Our discretion, to terminate the licenses for the Software, in addition to any other remedies available under law. This Section shall survive expiration or termination of this Agreement for a period of two (2) years.
					</p>
					
					<p class="section">9. PAYMENT AND TAXES</p>
					
					<p>If credit has been extended to You by Us, all payments under this Agreement are due within thirty (30) days of the date. If We have not extended credit to You, You shall be required to make payment concurrent with the delivery of the Software by Us. Any value added tax, use tax, sales tax or similar tax ("Transaction Taxes") shall be your sole responsibility. Each party shall pay all taxes (including, but not limited to, taxes based upon its income) or levies imposed on it under applicable laws, regulations and tax treaties as a result of this Agreement and any payments made hereunder (including those required to be withheld or deducted from payments); provided that You shall be responsible for all Transactions Taxes and shall pay or reimburse Us for the same upon invoice. Each party shall furnish evidence of such paid taxes as is sufficient to enable the other party to obtain any credits available to it, including original withholding tax certificates. Notwithstanding the foregoing, Software ordered through Our resellers is subject to the fees and payment terms set forth on the applicable reseller invoice.
					</p>
					
					<p class="section">10. SUPPORT AND UPDATES</p>
					
					<p>You are not entitled to any support for the Software under this Agreement. All support must be purchased separately and will be subject to the terms and conditions contained in the Gerger support agreement. You are entitled to receive minor version updates to the Software (i.e. versions identified as follows (X.Y, X.Y+1). You are entitled to receive major version updates (i.e. X.Y, X+1.Y). You are not entitled to receive bug fix updates to the Software (X.Y.Z, X.Y.Z+1), unless purchased independently of this license.
					</p>
					
					<p class="section">11. MISCELLANEOUS</p>
					
					<p>The license granted herein applies only to the version of the Software available when purchased in connection with the terms of this Agreement, and to any updates and/or upgrades to which you may be entitled. Any previous or subsequent license granted to You for use of the Software shall be governed by the terms and conditions of the agreement entered in connection with purchase or download of that version of the Software. You agree that you will comply with all applicable laws and regulations with respect to the Software, including without limitation all export and re-export control laws and regulations.
					</p>
					<p>While redistributing the Software or Modifications thereof as part of Your Application, You may choose to offer acceptance of support, warranty, indemnity, or other liability obligations and/or rights consistent with this Agreement. However, in accepting such obligations, You may act only on Your own behalf and on Your sole responsibility, not on our behalf. You shall indemnify Us and our resellers, or at Our option, defend Us and our resellers against any claim, suit or proceeding brought against Us or our resellers (i) arising by reason of Your accepting any such support, warranty, indemnity or additional liability; or (ii) arising out of the use, reproduction or distribution of Your Application, except to the extent such claim is solely based on the inclusion of the Software therein. Further, You agree only to distribute the Software pursuant to an enforceable written agreement for Our benefit that includes all the limitations and restrictions of this Agreement and is as protective of Us and Software as is this Agreement. For clarity, for Software for which you have paid a fee, You must purchase Designated User licenses for each contractor or consultant who uses the Software to create an Application on your behalf (including system integrators), whether or not such contractor or consultant has its own license to the Software.
					</p>
					<p>You agree to be identified as a customer of ours and You agree that We may refer to You by name, trade name and trademark, if applicable, and may briefly describe Your business in our marketing materials and web site.
					</p>
					<p>You may not assign or transfer this Agreement without Our prior written consent. This Agreement may be assigned by Us in whole or part and will inure to the benefit of Our successors and assigns. Notwithstanding the foregoing, in any instance in which You transfer ownership of an Application on a work for hire basis, You may assign licenses for the total Designated Users that have used the Software to develop said Application under this Agreement to another party (Assignee) provided (i) you provide written notice to Us prior to the effective date of such assignment; and (ii) there is a written agreement, wherein the Assignee accepts the terms of this Agreement. Upon any such transfer, the Assignee may appoint new Designated Users.
					</p>
					<p>You acknowledge that this Agreement is complete and is the exclusive representation of our agreement. No oral or written information given by Us, Our resellers, or otherwise on Our behalf shall create a warranty or collateral contract, or in any way increase the scope of this Agreement in any way, and You may not rely on any such oral or written information. No term or condition contained in any purchase order shall have any force or effect.
					</p>
					<p>There are no implied licenses or other implied rights granted under this Agreement, and all rights, save for those expressly granted hereunder, shall remain with Us and our licensors. In addition, no licenses or immunities are granted to the combination of the Software and/or Modifications, as applicable, with any other software or hardware not delivered by Us or Our resellers to You under this Agreement. Your rights under this Agreement apply only to Software, Modifications, and/or Applications for which all Designated Users are duly licensed hereunder.If any provision in this Agreement shall be determined to be invalid, such provision shall be deemed omitted; the remainder of this Agreement shall continue in full force and effect. If any remedy provided is determined to have failed for its essential purpose, all limitations of liability and exclusions of damages set forth in this Agreement shall remain in effect.
					</p>
					<p>This Agreement may be modified only by a written instrument signed by an authorized representative of each party. The failure of either party to enforce any provision of this Agreement may not be deemed a waiver of that or any other provision of this Agreement.
					</p>
					<p>This Agreement is governed by the law of the Republic of Turkey (notwithstanding conflicts of laws provisions), and all parties irrevocably submit to the jurisdiction of the courts of the Istanbul Province and further agree to commence any litigation which may arise hereunder in the courts located in the judicial district of Istanbul, Turkey.
					</p>
				</div>
			</div>
			</div>
			
			<div>
				<div id="downloadDiv" >
					
					
					
					<form id="downloadForm" class="cmxform" method="get" action="">
						
						
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
									<span>I accept </span><span class="linkSpan" id="termsSpan">the terms and conditions</span><span>.</span>
								</p>
							</div>
						
							<div class="download-block">
								<p class="download-title"> Formspider Desktop 1.4.0</p>
								<p style="text-align:center;">30 Day Trial</p>
								<div class="download-desktop-image" style=" ">&nbsp;</div>
								<p>
									<button id="downloadWindows" style="width:100%">Download for Windows</button>
								</p>
								<p>
									<button id="downloadLinux" style="width:100%">Download for Linux & MacOSX</button>
								</p>
							</div>
							
							<div class="download-block">
								<p class="download-title"> Formspider Mobile Beta 1 </p>
								<p>&nbsp;</p>
								<div class="download-mobile-image">&nbsp;</div>
								<p>
									<button id="downloadWindowsMobile" style="width:100%">Download for Windows</button>
								</p>
								<p>
									<button id="downloadLinuxMobile" style="width:100%">Download for Linux & MacOSX</button>
								</p>
							</div>
						
						</div>
						
						<!--p>
							<button id="downloadUpgrade" style="width:100%">Download Formspider 1.2.x to 1.3.0 Update Script</button>
						</p-->
						<input type="submit" value="Submit" class="submit" id="downloadFormSubmit" style="display:none" />
					</form>
				  
				</div>
			</div>
			
			<br>
			
			<p style="text-align:center;"><a href="/changeLog.php" target="_blank">View Change Log</a></p>
			<p style="text-align:center;"><a href="/gettingstarted.php" target="_blank">Installation Guide</a></p>
			<p style="text-align:center;"><span class="linkSpan" id="opener" style="cursor:pointer;">System Requirements</span> </p>
			
			
		</div>
				
	</div><!-- /content -->
	
	<?php include 'assets/footer.php'; ?>
