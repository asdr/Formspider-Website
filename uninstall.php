<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formspider</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/product.css" rel="stylesheet" type="text/css" />
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
<script type="text/javascript">
	function set_visibility(){
		if(document.forms[0].reasons[8].selected == true)
		{
			document.getElementById('otherreason').style.display = 'block';
		} else 
		{
			document.getElementById('otherreason').style.display = 'none';
		}
	}
</script>
<script type="text/javascript">
	function checkForm(){
		var reasonSelected = false;		
		for(i=0;i<9;i++)		
		{
			if(document.forms[0].reasons[i].selected == true) {
				reasonSelected = true;	
			}
		}
		var durationSelected=false;
		for(i=1;i<6;i++)		
		{
				if(document.getElementById("duration"+i).checked)
					durationSelected = true;
		}
		
		var reinstallSelected=false;
		for(i=1;i<4;i++)		
		{
				if(document.getElementById("reinstall"+i).checked)
					reinstallSelected = true;
		}
		
		if(reasonSelected == true){
			document.getElementById('req1').style.display = 'none';
		} else {
			document.getElementById('req1').style.display = 'inline';
		}
		
		if(durationSelected == true){
			document.getElementById('req2').style.display = 'none';
		} else {
			document.getElementById('req2').style.display = 'inline';
		}
		
		if(reinstallSelected == true){
			document.getElementById('req3').style.display = 'none';
		} else {
			document.getElementById('req3').style.display = 'inline';
		}		
				
		return reasonSelected && durationSelected && reinstallSelected;	
	}
</script>

<div class="container">
  <div class="header">
  	<?php $link_name= "Uninstall" ?>
  	<?php include ('mainmenu.php'); ?>
  </div>
 
  <div class="content">  	
  	<img src="images/line.png"/>
  	<br/>
	<div class="steps">
		<h1 class="topPhrase">Formspider Feedback</h1>
	</div>
  	<br/>
  	
  	<div class="steps">
		<p>Thank you for trying Formspider. We are interested in learning why you uninstalled and what we can do better. <br/>Your feedback is optional, but it is appreciated.</p>
	</div>
	<img style="float:right;padding-top:0px;" src="/images/uninstall.jpg" alt="Uninstalled" >
	<form action="uninstallthanks.php" method='post' onsubmit="return checkForm()" name="myform">

  	<div class="steps">
		<p  style="font-weight:Bold;"> Why are you uninstalling Formspider? (Select all that applies) * <span id="req1" style="color:Red;display:none;">Required</span></p> 
		<p>
		<select name="reasons[]" multiple="multiple" id="reasons" onchange="set_visibility()">
			<option value="I’m upgrading to a new version and wanted a clean install">I’m upgrading to a new version and wanted a clean install</option>
			<option value="I tried it, but had performance problems (e.g., too slow, crashing)">I tried it, but had performance problems (e.g., too slow, crashing)</option>
			<option value="I’m not sure what Formspider is">I’m not sure what Formspider is</option>
			<option value="It was too difficult to use">It was too difficult to use</option>
			<option value="I need to free up space on my computer">I need to free up space on my computer</option>
			<option value="I tried it, but it wasn’t what I expected">I tried it, but it wasn’t what I expected</option>
			<option value="I had compatibility problems">I had compatibility problems</option>
			<option value="I’m concerned about security">I’m concerned about security</option>
			<option value="Other">Other (please describe)</option>
		</select>		
		</p>
	</div>
	<div class="steps" id="otherreason"  style="display:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Other: <input type="text" name="otherReason" size="52"/> </div>
	<div class="steps">
		<p  style="font-weight:Bold;"> How long had you been using Formspider before you decided to uninstall? * <span id="req2" style="color:Red;display:none;">Required</span></p>
		<p>
			<label class="option"><input type="radio" id="duration1" name="duration" value="I haven't used it yet"> I haven't used it yet</label><br/>
			<label class="option"><input type="radio" id="duration2" name="duration" value="0-3 months"> 0-3 months</label><br/>
			<label class="option"><input type="radio" id="duration3" name="duration" value="4-6 months"> 4-6 months</label><br/>
			<label class="option"><input type="radio" id="duration4" name="duration" value="7 months to 1 year"> 7 months to 1 year</label><br/>
			<label class="option"><input type="radio" id="duration5" name="duration" value="More than 1 year"> More than 1 year</label><br/>
		</p>
	</div>
	
	<div class="steps">
		<p  style="font-weight:Bold;"> Do you plan on trying Formspider again? * <span id="req3" style="color:Red;display:none;">Required</span></p>
		<p>
			<label class="option"><input type="radio" id="reinstall1" name="reinstall" value="Yes"> Yes</label><br/>
			<label class="option"><input type="radio" id="reinstall2" name="reinstall" value="No"> No</label><br/>
			<label class="option"><input type="radio" id="reinstall3" name="reinstall" value="Maybe"> Maybe</label><br/>
		</p>
	</div>
	
	<div class="steps">
		<p  style="font-weight:Bold;"> We apologize that you are not satisfied with Formspider. What can we do better?</p>
		<p>
			<textarea cols="64" rows="5" name="needs" id="needs"></textarea>
		</p>
		<p style="font-weight:Bold;">Please enter your e-mail address so that we can contact you about your feedback.</p>
		<p style="font-weight:Bold;">E-mail: <input type="text" name="email" size="35" /></p>
	</div>
	<div class="steps">
		<p>		
			<input type="submit" name="op" id="submit" value=" Send Feedback " class="form-submit">
		</p>	
	</div>
	
	</form>	
	
   <br/>

  	<p>&nbsp;</p>
   <!-- end .content --></div>
  <?php include ('footer.php'); ?>
  <!-- end .container --></div>
</body>
</html>