<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    $the_message = $_GET['message'];
    if (isset($the_message) && !empty($the_message) && strlen($the_message) > 0) {
        $the_message = trim($the_message);
    }

    if (isset($the_message) && !empty($the_message) && strlen($the_message) > 0) {
        
        $subject = 'Formspider installed to a new machine!!!';
        $body = $the_message;
        $to = "autocase3587@theformspider.com";
        $headers = 'From: noreply@theformspider.com' . "\r\n" .
                   'Reply-To: noreply@theformspider.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();        
        
        mail($to, $subject, $body, $headers);
         
        $uip = "noip";
        if ( isset($_SERVER["REMOTE_ADDR"]) )    { 
            $uip = '' . $_SERVER["REMOTE_ADDR"] . ''; 
        } else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )    { 
            $uip = '' . $_SERVER["HTTP_X_FORWARDED_FOR"] . ''; 
        } else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )    { 
            $uip = '' . $_SERVER["HTTP_CLIENT_IP"] . ''; 
        }  

        $url = "http://formspideronline.com/fs-logging/logger.jsp?";
        $url = $url . "type=new";
        $url = $url . "&log=" . str_replace(" ", '', $body ); 
        $url = $url . "&comment=" . str_replace(" ", "*", $subject);
        $url = $url . "&ip=" . $uip; 
        $url = $url . "&duration=" . date('Y-m-d/h-i-s'); 
        
        $response = @file_get_contents($url);        
    }
?>
<html>
    <head>
        <style>
body {
    font-family: Trebuchet MS;
    text-align:center;
}

div#container{
    width: 960px;
    margin: 0 auto;
    display:block;
}

div#title{
    height: auto;
    width: auto;
    padding-top:5px;
    padding-bottom:10px;
    top: 0px;
    font-size: 40px;
    width:960px;
}

div#content{
    width:960px;
    font-size: 18px;
    /*border: 2px outset gray;*/
    display:block;
}

div#content p{
    margin:10px;
}

.thanks {
    margin: 50px 0 35px 0;
    font-size: 40px;
    color:black;
    opacity: 0.8;
    font-family:Georgia;
    font-style:italic;
    text-shadow: #009 1px 1px 1px;
}

.big_logo {
    margin-top: 20px;
    margin-bottom: 20px;
    width: 50%;
}      
      
        </style>

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/product.css" rel="stylesheet" type="text/css">
        <script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script> 
        <script src="js/popup.js" type="text/javascript"></script> 
        <script src="js/utilities.js" type="text/javascript"></script>      
        
        
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
<?php
    if (isset($_POST['emailaddress']) && !empty($_POST['emailaddress']) && strlen($_POST['emailaddress']) > 0) {
        $uip = "noip";
        if ( isset($_SERVER["REMOTE_ADDR"]) )    { 
            $uip = '' . $_SERVER["REMOTE_ADDR"] . ''; 
        } else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )    { 
            $uip = '' . $_SERVER["HTTP_X_FORWARDED_FOR"] . ''; 
        } else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )    { 
            $uip = '' . $_SERVER["HTTP_CLIENT_IP"] . ''; 
        }  

        $url = "http://formspideronline.com/fs-logging/logger.jsp?";
        $url = $url . "type=isign";
        $url = $url . "&name=" . str_replace(" ", '', $_POST['name']); 
        $url = $url . "&mail=" . str_replace(" ", '', $_POST['emailaddress']); 
        $url = $url . "&reinstall=" . str_replace(" ", "-", $_POST['company']); 
        $url = $url . "&comment=" . str_replace(" ", "*", $_POST['comments']);
        $url = $url . "&ip=" . $uip; 
        $url = $url . "&duration=" . date('Y-m-d/h-i-s'); 
        //echo($url);
        $response = @file_get_contents($url);       
    
    /*echo("<div id=\"thanks\">Thank you!!!</div>");*/
    }
?> 
        <div id="container">
            <div id="content">
                <div class="thanks">Thank you for installing Formspider.</div>
                <div><a href="http://theformspider.com"><img class="big_logo" src="images/logo_720_200.png" /></a></div>
                <span style="font-weight:Bold;font-style:italic;">Please fill out this <span id="button" style="background:#9eff69;" onClick="_gaq.push(['_trackPageview','/ofc/popupopened']);">form</span> so that we can know you better.</span>
            </div>
            <div id="popupContact">
                <a id="popupContactClose">x</a>
                <h1>Thank you very much!</h1>
                <p style="text-align:justify;">You successfully installed Formspider. Please fill out this form so that we can know you better.</p>
                <form name="ThankYouForm" action="/thankyou.php" method="post" onSubmit="_gaq.push(['_trackPageview','/thankyou/signuppressed']);return checkMail();">
                    <p id="contactArea" style="text-align:left;">
                        <br><br>
                        &nbsp;Name:<br></span><input size="45" type="text" name="name" />
                        <br><br>
                        &nbsp;E-mail:<br></span><input size="45" type="text" id="emailaddress" name="emailaddress" />
                        <br><br>
                        &nbsp;Company:<br></span><input size="45" type="text" id="phone" name="company" />
                        <br><br>
                        &nbsp;Comments:<br></span> <textArea cols="35" rows="3"  type="text" name="comments"></textArea>
                        <br><br>
                        <input style="float:right;margin-right:55px;" type="submit" value="  Sign Up  " />
                    </p>
                </form>
            </div>
            <div id="backgroundPopup"></div>
            </div>
        </div>
    </body>
</html>