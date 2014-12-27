<?php $page = 'product'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gitora</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="master.css" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="master-ie8.css" />
	<![endif]-->
	<script src="js/utilities.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var descid = getParameter('descid');
		if (descid == 'FormspiderVSOracleApex') {
			window.location.href = "compare-formspider-with-apex.php";
		}
	</script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1251493-14', 'auto');
  ga('send', 'pageview');
</script> 


<?php 
	if (isset($_GET['descid'])) {
		$no = $_GET['descid'];
		
		if($no == "FormspiderVSOracleApex")
			$showVS = "Descriptions";
		//else if($no == "OracleFormsConversion")
			//$showVS = "OFC";
		else if($no == "Download")
			$showVS = "Download";
		else if($no == "MobileDownload")
			$showVS = "MobileDownload";
		else if($no == "Upgrade")
			$showVS = "Upgrade";
		else 
			$showVS = $no;
		
	} else {
		$no = 0;
		$showVS = "FSvsOA";
		
	}
	
	$j = ($no == "0") || ($no == "1") ||($no == "2") ||($no == "3") ||($no == "4") ||($no == "5") ||($no == "6") ||($no == "7") || ($no == "8") ||($no == "9")?$no:"0";
?>

</head>
<body class="product">
<?php 
if($showVS == "Download" || $showVS == "GitoraDownload" || $showVS == "MobileDownload" || $showVS == "Upgrade" || $showVS == 'RegisterFSEventInDenmark' || $showVS == 'RegisterFSEventInIstanbul') { 
	$uip = "noip";
	if ( isset($_SERVER["REMOTE_ADDR"]) )    { 
		$uip = '' . $_SERVER["REMOTE_ADDR"] . ''; 
	} else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )    { 
		$uip = '' . $_SERVER["HTTP_X_FORWARDED_FOR"] . ''; 
	} else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )    { 
		$uip = '' . $_SERVER["HTTP_CLIENT_IP"] . ''; 
	}  

	$url = "http://formspideronline.com/fs-logging/logger.jsp?";
	$url = $url . "type=" . $showVS;
	$url = $url . "&name=" . str_replace(" ", '', $_GET['name']); 
	$url = $url . "&mail=" . str_replace(" ", '', $_GET['mail']); 
	$url = $url . "&ip=" . $uip; 
	$url = $url . "&duration=" . date('Y-m-d/h-i-s');
	$url = $url . "&version=" . $_GET['version'];
	echo $url;
		
	$response = @file_get_contents($url);
    echo '</body></html>';
	exit;
}
?>
</body>
</html>