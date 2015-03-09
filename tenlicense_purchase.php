<?php $page = 'pricing'; ?>
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

<script type="text/javascript">
    function BuyWebLicenseClicked()
    {
       _gaq.push(['_trackPageview','/buy/webLicense']);
    }
</script>
    
</head>
<body class="pricing">
        
    <?php include 'assets/header.php'; ?>
    
    <div id="container">
    
    <div id="content" class="clearfix">
    
            <h2>Simple and Transparent Pricing</h2>
            <h3>No hidden fees, no royalties.</h3>
            
            <!--div class="column">
                    <h4>Any <span>Edition</span></h4>
                    <h3>Free <span>for</span> Testing</h3>
                    <p>Unlimited users, development and testing installations <strong>BUT</strong> you’re unable to deploy to production.</p>
                    <div class="cta"><a href="download.php" class="button black">Cloud</a><a href="download.php" class="button black">Desktop</a></div>
                </div-->
            <!--<br/><br/>
            <h2>Formspider Production License</h2>
            
            <p>With Formspider, you only pay when your Formspider application is deployed to production.</p>
            
            <p>Formspider offers three categories of pricing depending on the Oracle Database you choose to install Formspider in your production environment.</p>-->
            
            <div id="columns">
                
                <div id="paid-plans">
                    <div class="column one">
                        <h4>Ten<span>Developer Licenses with 10% discount</span></h4>
                        <h3><span class="superscript">just $</span>5390</h3>
                    </div>
                    <div class="column paypal">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="HNFKPZJYN3VQA">
                            <input type="image" src="https://www.paypalobjects.com/en_US/TR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <!--<div class="column two">
                        <h4>STANDARD <span>EDITION</span></h4>
                        <h3><span>$</span>9900</h3>
                    </div>
                    <div class="column three">
                        <h4>ENTERPRISE <span>EDITION</span></h4>
                        <div id="enterprise-button-wrap"><a href="mailto:contact@theformspider.com" data-reveal-id="contact-modal" data-animation="fade" class="button green enterprise full-width">Contact us</a></div>
                    </div>-->
                    
                    <!--<p><br/>First year of maintenance is included. After the first year, maintenance subscription costs $199 annually.</p>-->
                    <!--div class="cta"><a href="#" data-reveal-id="contact-modal" data-animation="fade" class="button orange full-width">Contact us</a></div-->
                </div>
            </div><!-- /columns -->
            <br>
            <br>
            
    </div>
    
    <?php include 'assets/contactmodal.php'; ?>
        
    <?php include 'assets/footer.php'; ?>
