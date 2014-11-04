<?php $page = 'product'; ?>
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
	<script src="js/utilities.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var descid = getParameter('descid');
		if (descid == 'FormspiderVSOracleApex') {
			window.location.href = "compare-formspider-with-apex.php";
		}
	</script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	
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