<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>


<!-- Google Website Optimizer Tracking Script -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['gwo._setAccount', 'UA-1251493-9']);
  _gaq.push(['gwo._trackPageview', '/4191598815/goal']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End of Google Website Optimizer Tracking Script -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="Formspider, Downloads">
<meta name="robots" content="index, follow">
<meta name="Language" content="en"> 

<title>Formspider</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/product.css" rel="stylesheet" type="text/css">

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

</head>
<body>

<div class="container">
  <div class="header">
  	<?php $link_name= "Getting Started Guide" ?>
  	<?php include ('mainmenu.php'); ?>
  </div>
 
  <div class="content">  	
  	<img src="/images/line.png" alt="line">
  	<br>
  	<br>
  		<h1 class="topPhrase">Getting started with Formspider</h1>
  	<br>

  <h2>1. Installation Overview</h2>

  <p>Formspider installation process consists of three steps:</p>

  <ol start="1">
    <li >Prepare for installation:This overview describes issues to consider before you begin installing
    Formspider.</li>
  </ol>

  <p>You may also want to refer to Formspider Q/A
  site, <a  href="http://osqa.theformspider.com">http://osqa.theformspider.com</a>. This site may include issues that you may encounter while installing or using
  Formspider.</p>

  <p></p>

  <ol start="2">
    <li>Install software: Step by step guide of Formspider Installer is
    included with screenshots.</li>
  </ol>

  <ol start="3">
    <li>Test run: You will find
    simple test run inside Formspider IDE.</li>
  </ol>

  <p class="c0"></p>

  <h2>2. Prepare for installation</h2>

  <p>Before downloading installer, you must make sure Java
  run-time is installed, and properly configured. required java specifications
  is:/p>

  <ol class="c7" start="1">
    <li>Vendor: Sun/Oracle</li>

    <li>Version: minimum 1.6.0_10</li>

    <li>JAVA_HOME environment variable should be
    configured properly.</li>
  </ol>

  <p>You can check JAVA_HOME variable by running this shell code snippet from Linux terminal: echo $JAVA_HOME</p>

  <p>If java installation directory is printed, it means it
  is configured properly; otherwise, it is not.</p>

  <p>Now let&rsquo;s visit <a href=
  "http://www.theformspider.com/download.php">http://www.theformspider.com/download.php</a> to
  download latest Formspider build.</p>

  <p>When you visit the link above, the following screen will
  show up:</p>

  <p><img height="413" style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" src="guideimages/image01.jpg" width="592" /></p>

  <p>Please read the license agreement carefully and check
  the system requirements. Clicking &ldquo;Accept&rdquo; button will enable the
  Formspider installer download links.</p>

  <p class="c3"><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="487" src="guideimages/image08.jpg" width="618" /></p>

  <p >Now, click the appropriate download link according to
  your operating system to start the download process.</p>

  <h2>2. Install software</h2>


  <p>To start the installation process, double-click
  downloaded installation executable file(e.g. FormspiderBeta4.exe). At first, you will
  see the following window:</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="470" src="guideimages/image09.jpg" width="623" /></p>


  <p>Please click &ldquo;Next&rdquo; to continue. Later on,
  you will see the following component selection screen:</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="469" src="guideimages/image10.jpg" width="621" /></p>

  <p>Installation Components:</p>

  <ol start="1">
    <li>Formspider Database Components</li>
  </ol>

  <p>Formspider Database Components are
  the heart of Formspider, where all logic operations takes place. At least one is required
  to build a complete Formspider system.</p>
  
  <ol start="2">
    <li>Formspider Middle-tier Components</li>
  </ol>

  <p>Middle-tier components are
  required to establish connection between Database Components and Formspider Clients(e.g. Web
  Client, Java Client). If you have Apache Tomcat installation, you can
  use it as container to Formspider Middle-tier, otherwise installer
  will install anew one.</p>

  <ol start="3">
    <li>Formspider IDE Database Components</li>
  </ol>

  <p>Formspider IDE is required, if Formspider will be used
  for development. In production environment, you may not need IDE
  components, however, if you are planning to develop or maintain an existing
  application, installing IDE components will be a good
  idea.</p>

  <ol  start="4">
    <li>Formspider IDE Client</li>
  </ol>

  <p>IDE
  Client is required to run applications as client side Java applications.</p>

  <p>You should select components of which you need
  Formspider Installer to install and configure for you. If you are installing Formspider
  for the very first time, it is recommended to leave all components checked, and click
  &ldquo;Next&rdquo; to continue.</p>
  
  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="461" src="guideimages/image11.jpg" width="610" /></p>


  <p>Specify database connection parameters: host, port, SID, username and password. After filling the parameters in,
  press &ldquo;Test Connection&rdquo; button to ensure they are correct.</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="470" src="guideimages/image03.jpg" width="621" /></p>

  <p>After specifying database connection parameters, you
  will enter a schema and tablespece name for Formspider Database Components. The schema
  will be created during installation. The default tablespace is the &ldquo;USERS&rdquo;
  tablespace.</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="463" src="guideimages/image06.jpg" width="612" /></p>

  <p>Press &ldquo;Next&rdquo; to continue to the installation
  settings of Formspider Middle-tier Components. You can install either a new Tomcat
  application server or you can use an existing one. First time installers should select
  &ldquo;Install new Tomcat server&rdquo;.</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="469" src="guideimages/image07.jpg" width="620" /></p>

  <p>Press &ldquo;Next&rdquo; to continue. In the following
  screen, you will enter the Tomcat installation parameters.</p>
  <p><img height="470" style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" src="guideimages/image00.jpg" width="620" /></p>

  <p>Once you see this screen, enter the port number that
  Tomcat application server will work from; administrator username and password, which
  are required for further configuration; and the installation directory. After filling
  in the fields, you can move on by pressing &ldquo;Next&rdquo;.</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="463" src="guideimages/image05.jpg" width="614" /></p>
  
  <p>Then, you should enter a context root name for the
  middle-tier. This will define a URL that specifies your middle-tier. By this URL, you
  will be able to connect Formspider applications.</p>

  <p>After that, if Formspider IDE is selected to be
  installed, the following screen will show up. Specify an admin username and password,
  then press &ldquo;Next&rdquo; to continue. These username and passsword will be asked
  by Formspider IDE at logon.</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="468" src="guideimages/image12.jpg" width="618" /></p>

  <p>You can now see the installation summary screen. Check
  your settings that you have made, and press &ldquo;Start&rdquo; to begin
  installation.</p>

  <p ><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="467" src="guideimages/image13.jpg" width="618" /></p>


  <p>During the installation, if you&rsquo;ve selected to
  install Formspider IDE Client, you will be prompted by another installer that will
  install Formspider Client to your computer. Just press the &ldquo;Next&rdquo; buttons
  to proceed as usual.</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="499" src="guideimages/image04.jpg" width="660" /></p>

  <p>After the Formspider Client install, the installation
  should be finished successfully, and the following screen should appear:</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="500" src="guideimages/image02.jpg" width="660" /></p>

  <p>You can now create desktop shortcuts and start Forspider
  IDE by pressing the &ldquo;Finish&rdquo; button.</p>


  <h2>3. Test run</h2>

  <p>You can now open the Formspider IDE by clicking the
  desktop shortcut created by the Formspider installer. Alternatively, you can start it
  by using your web browser. The URL is going to be the application server URL + context
  root name. In our example it is: <a class="c9" href=
  "http://127.0.0.1:8080/formspider/">http://127.0.0.1:8080/formspider/</a>.</p>

  <p>The following web page will appear after you visit the
  URL.</p>

  <p><img style="margin:15px;padding:1px;border:1px solid #021a40;background-color:#ccc;" height="231" src="guideimages/image14.jpg" width="614" /></p>

  <p>Clicking the &ldquo;IDE&rdquo; link, provided in this
  page, will lead you to the Formspider IDE.</p>

  <p>For further information on Formspider IDE and Formspider
  application development, please visit <a href=
  "http://theformspider.com/learningcenter/">Formspider Learning
  Center</a>. You can find code samples, example applications and
  tutorials with screenshots and videos. &nbsp;If you have any questions, you can check
  other developers questions from the Formspider Q&amp;A site, <a  href=
  "http://osqa.theformspider.com/">http://osqa.theformspider.com</a>. If you are not able to find appropriate answers to your questions, please do not
  hesitate to contact us via <a class="c9" href=
  "mailto:contact@theformspider.com">email</a>,<a class="c9" href=
  "http://theformspider.com/blog/">blog</a>, or the <a  href=
  "http://osqa.theformspider.com/">Formspider
  Q&amp;A site</a>.</p>

  <p>Gerger Team,</p>

  <p><a class="c9" href=
  "">http://www.theformspider.com</a></p>

  <p>contact@theformspider.com</p>

    <!-- end .content --></div>
  <?php include ('footer.php'); ?>
  <!-- end .container --></div>
</body>
</html>
