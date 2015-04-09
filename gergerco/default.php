<?php
  function startsWith($haystack, $needle) {
      // search backwards starting from haystack length characters from the end
      return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
  }

  if (isset($_SERVER[HTTP_HOST]) && startsWith($_SERVER[HTTP_HOST], "www.gerger.co")) {
    $page = 'index'; 
  }
  else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://www.gerger.co");
    exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Gerger</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="Keywords" content="Formspider, PL/SQL, web applications with pl/sql, web 2.0 framework, Ajax, javascript, charts">
  <meta name="Title" content="Formspider - Build Amazing Web Applications with PL/SQL"> 
  <meta name="Description" content="Formspider is a Web 2.0 framework that lets you build applications with only PL/SQL. Formspider applicaitons run using 100% AJAX, DHTML and JavaScript without the need to know any of them."> 
  <meta name="robots" content="index, follow">
  <meta name="Language" content="en"> 
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="master.css?v=1" />
  <link rel="stylesheet" type="text/css" href="gergerco.css?v=1" />
  <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="master-ie8.css" />
  <![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
  
  
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1251493-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>
<body class="index">

  <?php include 'header.php'; ?>
  
  <div id="bg_clouds"></div>
  
  <div id="container">
  
  <div id="content">
    
    <div id="top" class="clearfix">
      <div id="intro">
        <p>Gerger is a software and consulting company in Istanbul, Turkey. We build <a href="http://theformspider.com" target="_blank">Formspider</a>, the application development framework for PL/SQL developers, and <a href="http://www.gitora.com" target="_blank">Gitora</a> the version control tool for the Oracle Database. 

          <p> With customers in 25 countries, we help our clients execute better, faster and more flexible. We have <a href="references.php">excellent references</a> in a wide variety of verticals such as insurance, banking and logistics.</p>
        
      </div>
      <div id="screenshot"></div>
    </div>
    
  </div><!-- /content -->
  
  <?php include 'footer.php'; ?>
