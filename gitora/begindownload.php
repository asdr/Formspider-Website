<?php $page = 'download'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gitora is being downloaded ...</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="master.css?v=1" />
  <link rel="stylesheet" type="text/css" href="gitora.css?v=1" />
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
          data: "descid=GitoraDownload&name="+ name +"&mail="+ email+"&version=1.0",
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
        downloadURL("http://cdn.theformspider.com/cdn/Gitora_1.0.0.zip");
        logDownload(name, email);
        _gaq.push(['_trackPageview','/download/GitoraForWindows']);     
    }

    function downloadLinux(name, email) {
        downloadURL("http://cdn.theformspider.com/cdn/Gitora_1.0.0.jar");
        logDownload(name, email);
        _gaq.push(['_trackPageview','/download/GitoraForLinux']);       
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
    }

    $(document).ready(downloadNow);
</script> 

    
</head>
<body class="download">
    
    <?php include 'header.php'; ?>
    
    <div id="container">
    
        <div id="content">
        
            <h3>Downloading Gitora 1.0...</h3>
            <p>Thank you for downloading Gitora Release 1.0. Your download will start now.</p>
            <p class="small">Problems with download? Please use this <a href="javascript: downloadNow();">direct link</a>.</p>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div><!-- /content -->
    
    <?php include 'footer.php'; ?>
