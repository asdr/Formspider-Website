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
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 

<!-- Google Code for Download Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 982617647;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "H8RHCLbitFcQr5zG1AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/982617647/?label=H8RHCLbitFcQr5zG1AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script type="text/javascript" >

	function checkForm(nameElement, emailElement) {
		
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		if ( !filter.test(emailElement.value)) {
			alert('Please provide a valid email address.');
			emailElement.focus
			return false;
		}
	}

	function logDownload(name, email) {
		var expires = { expires: 3650 };
		$.cookie("name", name, expires);
		$.cookie("email", email, expires);
		
		$.ajax({
		  type: "GET",
		  url: "product.php",
		  data: "descid=Download&name="+ name +"&mail="+ email+"&version=1.8.1",
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
		  data: "descid=MobileDownload&name="+ name +"&mail="+ email+"&version=beta2",
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

	function downloadWindows(name, email) {
		downloadURL("http://cdn.theformspider.com/cdn/Formspider_1.8.1.zip");
		logDownload(name, email);
		_gaq.push(['_trackPageview','/download/FormspiderForWindows']);		
	}

	function downloadLinux(name, email) {
		downloadURL("http://cdn.theformspider.com/cdn/Formspider_1.8.1.jar");
		logDownload(name, email);
		_gaq.push(['_trackPageview','/download/FormspiderForLinux']);		
	}

	function downloadWindowsMobile(name, email) {
		downloadURL("http://cdn.theformspider.com/cdn/FSMobile_Beta2.zip");
		logMobileDownload(name, email);
		_gaq.push(['_trackPageview','/download/FormspiderMobileForWindows']);		
	}

	function downloadLinuxMobile(name, email) {
		downloadURL("http://cdn.theformspider.com/cdn/FSMobile_Beta2.jar");
		logMobileDownload(name, email);
		_gaq.push(['_trackPageview','/download/FormspiderMobileForLinux']);		
	}
	
	function downloadUpgrade(name, email) {
		downloadURL("/download/Formspider 1.2.x to 1.3.0 update patch.zip");
		logUpgrade(name, email, '1.2.x_to_1.3.0');
		_gaq.push(['_trackPageview','/download/FormspiderUpgrade']);
	}
	
	function downloadNow() {
		var name = "<?php echo $_POST['name']; ?>";
		var email = "<?php echo $_POST['email']; ?>";
		var choice = "<?php echo $_POST['choice']; ?>";
		
		if (!!choice === false || choice.length === 0) {
            choice = 'other';
		}
		if (choice === 'win') {
			downloadWindows(name, email);
		}
		else if (choice === 'other') {
			downloadLinux(name, email);
		}
		else if (choice === 'winMobile') {
			downloadWindowsMobile(name, email);
		}
		else if (choice === 'otherMobile') {
			downloadLinuxMobile(name, email);
		}
		else if (choice === 'upg') {
			downloadUpgrade(name, email);
		}
	}

	$(document).ready(downloadNow);
</script> 

	
</head>
<body class="download">
	
	<?php include 'assets/header.php'; ?>
	
	<div id="container">
	
		<div id="content">
		
			<h3>Downloading Formspider 1.8.1...</h3>
			<p>Thank you for downloading Formspider Release 1.8.1. Your download will start now.</p>
			<p class="small">Problems with download? Please use this <a href="javascript: downloadNow();">direct link</a>.</p>
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
		</div><!-- /content -->
	
	<?php include 'assets/footer.php'; ?>
