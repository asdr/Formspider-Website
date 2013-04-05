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
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
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
		else if($no == "Upgrade")
			$showVS = "Upgrade";
		else if($no == "RegisterFSEventInBulgaria")
			$showVS = "RegisterFSEventInBulgaria";
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
if($showVS == "Download" || $showVS == "Upgrade" || $showVS == 'RegisterFSEventInDenmark' || $showVS == 'RegisterFSEventInIstanbul') { 
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
		
	$response = @file_get_contents($url);
    echo '</body></html>';
	exit;
}
?>
	
	<?php include 'assets/header.php'; ?>
	
	<div id="bg_clouds"></div>
	
	<div id="container">
		
		<div id="content">
			
			<div id="top">
				<h2>The New Home of PL/SQL Developers</h2>
				<!--p>After 2000+ downloads and 1800+ Cloud sign-ups, the message is clear. Formspider is the choice of PL/SQL developers worldwide to build the applications of tomorrow.</p-->
				<p>Formspider enables you to build world class applications on a great architecture with just PL/SQL. It is incredibly easy to learn for Forms and Apex developers.</p>
			</div>
			
			<div id="plsql" class="row image-code">
				<div class="text">
					<h3>100% PL/SQL</h3>
					<h4>Code in the language you love.</h4>
					<p>
					In Formspider, 
					<a href="http://theformspider.com/blog/2011/09/19/benefits-of-formspider-single-programming-language/">
					PL/SQL is the only scripting language</a>. 
					You don’t need to know any other programming language such as Java or JavaScript. 
					Turn every Web developer green with applications you build just with PL/SQL.
					</p>
				</div>
				<div class="image">
					<img src="images/product/plsql.jpg" width="537" height="324" alt="Pl SQL">
				</div>
			</div><!-- /row -->
			
			<div id="design" class="row image-design">
				<div class="image">
					<img src="images/product/great-design.png" width="450" height="300" alt="Great Design">
				</div>
				<div class="text">
					<h3>Rich By Design</h3>
					<h4>Build applications, not web pages</h4>
					<p>Build single page, fully AJAX applications without managing your own AJAX calls. 
					Develop at a high level of abstraction than HTML with Formspider’s component based architecture. 
					Delight your users with applications that provide a superb experience. 
					</p>
				</div>
			</div><!-- /row -->
			
			<div id="security" class="row image-security">
				<div class="text">
					<h3>Proven Security</h3>
					<h4>Build applications with peace of mind.</h4>
					<p>Reuse best security practices in your applications. 
					<a href="http://theformspider.com/blog/2013/02/27/abour-security-of-formspider-applications/">Formspider implements solutions for 9 out of Top 10 OWASP security threats at the framework level.</a>
					Applications built with Formspider technology passed audits in organizations with highest security standards such as U.S. Air Force, ING and New York State in record time.</p>
				</div>
				<div class="image">
					<img src="images/product/security.jpg" width="483" height="347" alt="Security">
				</div>
			</div><!-- /row -->
			
			<div id="crossbrowser" class="row image-crossbrowser">
				<div class="image">
					<img src="images/product/crossbrowser.jpg" width="277" height="268" alt="Cross-browser support">
				</div>
				<div class="text">
					<h3>True Cross Browser Compatibility</h3>
					<h4>All Formspider applications work in all browsers.</h4>
					<p>Break free from browser lock-in. Easily upgrade to the latest browser versions across your organization. 
					<a href="http://theformspider.com/blog/2011/03/22/true-cross-browser-web-applications/"> 
					Applications built with Formspider run perfectly in all major browsers. </a>
					The Formspider Javascript Library is optimized to work fast and smoothly in IE7+, FireFox 3.6+, Safari 4.0+ and Chrome.</p>
				</div>
			</div><!-- /row -->
			
			<div id="components" class="row image-components">
				<div class="text">
					<h3>Powerful UI Components and API’s</h3>
					<h4>Drop dead gorgeous and incredibly functional.</h4>
					<p>Delight your users with declarative UI components such as tabs, 
					<a href="http://formspideronline.com/formspider/main.html?name=DemoMain#DemoMap">maps</a>, 
					accordions, <a href="http://formspideronline.com/formspider/main.html?name=DemoMain#DemoDialog">dialogs</a>, 
					<a href="http://formspideronline.com/formspider/main.html?name=DemoCalendar">calendars</a> and 
					<a href="http://formspideronline.com/formspider/main.html?name=DemoMain#DemoTree">trees</a>. 
					Empower them with powerful data grid features such as flexible columns, built-in sorting, search and reporting. 
					<a href="http://formspideronline.com/formspider/main.html?name=DemoMain#DemoExcel"> Produce Excel sheets </a> 
					from data grids with a single Formspider API call. 
					<a href="http://formspideronline.com/formspider/main.html?name=DemoMain#Charts"> Declaratively create data driven, visually stunning charts. </a>
					All Formspider charts are drawn with Javascript and work on mobile devices.</p>
				</div>
				<div class="image">
					<img src="images/product/api.jpg" width="437" height="271" alt="API">
				</div>
			</div><!-- /row -->
			
			<div id="performance" class="row image-performance">
				<div class="image">
					<img src="images/product/performance.jpg" width="490" height="274" alt="Performance">
				</div>
				<div class="text">
					<h3>Best Performance</h3>
					<h4>Great performance, without great effort.</h4>
					<p>Reduce the time you spend on performance tuning. 
					Formspider only sends the screens in your application the user actually sees and caches them client side. 
					This way, even the largest applications run smoothly. 
					<a href="http://theformspider.com/blog/2012/09/14/keys-to-a-fast-web-app-from-steve-souders/"> 
					Formspider JavaScript library </a> is tuned to run smooth and fast in every browser.</p>
				</div>
				
			</div><!-- /row -->
			
			<div id="intuitive" class="row image-intuitive">
				<div class="text">
					<h3>Intuitive</h3>
					<h4>Focus on your application, not on your development tool.</h4>
					<p>Formspider’s event driven architecture is easy to learn, fun to master. 
					Formspider eliminates the drudgery of the Web and embraces all its beauty. 
					Once you start using it, you will never want to build with anything else.</p>
				</div>
				<div class="image">
					<img src="images/product/Easy-to-use.png" width="173" height="173" alt="Intuitive">
				</div>
			</div><!-- /row -->
			
			<div id="cloud" class="row image-cloud">
				<div class="image">
					<img src="images/product/cloud.jpg" width="366" height="207" alt="Cloud">
				</div>
				<div class="text image-cloud">
					<h3>Cloud Ready</h3>
					<h4>Run applications from high above.</h4>
					<p>Formspider is designed from ground up for the cloud. 
					Formspider applications scale up with your Oracle Database when you have high demand. 
					They run in Oracle RAC implementations with zero effort. 
					<a href="http://www.formspideronline.com"> Formspider IDE is entirely web based. </a>
					Start developing your application on one device and finish on another. 
					You don’t have to transfer any files or install gigantic development tools.</p>
				</div>
			</div><!-- /row -->
			
			<div id="technologyindependence" class="row image-technologyindependence">
				<div class="text">
					<h3>Client Technology Independence</h3>
					<h4>Don’t bet on hypes. Bet on good architecture.</h4>
					<p>Build long lasting, client side technology independent applications. 
					<a href="http://theformspider.com/blog/2012/05/07/the-vision-for-the-formspider-framework/"> Formspider is built for the multi device, multi platform world. </a>
					<a href="http://theformspider.com/blog/2012/10/10/client-technology-independent-applications/"> 
					Formspider applications contain zero lines of HTML, JavaScript or any other client side tech. </a>
					The entire application definition is stored in relational database tables and can be rendered in any client technology.</p>
				</div>
				<div class="image">
					<img src="images/product/clienttechnologyindependence.jpg" width="350" height="233" alt="Client Technology Independence">
				</div>
			</div><!-- /row -->
			
			<div id="integrated" class="row image-integrated">
				<div class="image">
					<img src="images/product/Integrated2.jpg" width="254" height="180" alt="Integrated">
				</div>
				<div class="text">
					<h3>Integrated</h3>
					<h4>E-Business Suite, Oracle Reports, Jasper Reports and others...Formspider plays well with everyone.</h4>
					<p><a href="http://theformspider.com/learningcenter/e-business-suite-formspider-integration/"> Extend your E-Business Suite applications with Formspider. </a>
					Present your reports in Web 2.0 applications. Formspider works with any reporting solution and comes with built-in support for Oracle Reports and Jasper Reports.</p>
				</div>
			</div><!-- /row -->
			
			<div id="databinding" class="row image-databinding">
				<div class="text">
					<h3>Seamless Data Binding</h3>
					<h4>With data aware components and world class transaction layer, building enterprise applications has never been easier.</h4>
					<p><a href="http://formspideronline.com/formspider/main.html?name=DemoMain#DemoBindingForm">
					Declaratively bind your UI components and database objects.</a>
					<a href="http://formspideronline.com/formspider/main.html?name=DemoMain#DemoSnapshotMechanism"> Take a snapshot of your application data </a> 
					and rollback to the desired application state at any time. 
					Issue commits whenever you think is right in your application flow. 
					Formspider seamlessly does all the plumbing between your application’s UI and the database. </p>
				</div>
				<div class="image">
					<img src="images/product/databinding.jpg" width="439" height="172" alt="Data Binding">
				</div>
			</div><!-- /row -->
			
			<div id="masterdetail" class="row image-masterdetail">
				<div class="image">
					<img src="images/product/masterdetail.jpg" width="369" height="277" alt="Masterdetail">
				</div>
				<div class="text">
					<h3>Sophisticated Master Detail</h3>
					<h4>This worked 10 years ago. Why wouldn’t it work now?</h4>
					<p><a href="http://formspideronline.com/formspider/main.html?name=DemoMain#DemoThreeLevelMasterDetailGrids"> 
					Easily build multi level master detail screens. </a> Show everything in the same screen or in tabs. 
					Even changing the current master row refreshes the details instantly. Formspider is built to create complex screens, fast.</p>
				</div>
			</div><!-- /row -->
			
			<div id="developmentexperience" class="row image-developmentexperience">
				<div class="text">
					<h3>Best Development Experience</h3>
					<h4>An IDE by Developers for Developers.</h4>
					<p><a href="http://www.formspideronline.com"> Build your application from anywhere with the web based Formspider IDE. </a>
					Design your screens quickly using the smart XML Editor with intellisense and preview features. 
					<a href="http://theformspider.com/blog/2011/09/21/benefits-of-formspider-productive-development-environment/"> 
					Refactor your applications with ease </a> thanks to the dependency tree shown under each application object. 
					Resolve issues instantly with built-in debugging and edit history. </p>
				</div>
				<div class="image">
					<img src="images/product/happy.jpg" width="439" height="161" alt="Happy">
				</div>
			</div><!-- /row -->

			<div id="cta">
				<a class="button silver" href="compare-formspider-with-apex.php">Compare Formspider to Apex</a> 
				<div>&mdash; or &mdash;</div>
				
				<div><h2> Try now </h2></div>
					<a href="http://formspideronline.com" id="cloud" class="button blue"><span></span> Cloud </a> <a href="download.php" id="desktop" class="button green"><span></span> Download </a></a>
			</div>

		</div><!-- /content -->

	<?php include 'assets/footer.php'; ?>

</div><!-- /container -->
</body>
</html>