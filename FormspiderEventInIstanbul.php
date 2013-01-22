<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="Formspider, development, licence, product, free development">
<meta name="robots" content="index, follow">
<meta name="Language" content="en"> 

<title>Formspider</title>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
<link href="css/jqueryui.button.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/product.css" rel="stylesheet" type="text/css"/>
<link href="css/download.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/utilities.js"></script>
<script type="text/javascript" src="/js/modernizr.custom.61860.js"></script>

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

<script type="text/javascript" >
	$(document).ready(function() {
		
		function checkForm(nameElement, emailElement) {
		
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			if ( !filter.test(emailElement.value)) {
				alert('Please provide a valid email address.');
				emailElement.focus
				return false;
			}
			
			return true;
		}
		
		var nameField = document.getElementById("name");
		var emailField = document.getElementById("email");
		
		if (getParameter("name"))
			nameField.value = getParameter("name");
		
		if (getParameter("email"))
			emailField.value = getParameter("email");
		
		$( "#register" )
			.button({
				disabled: false 
			})
			.click(function() {
				if(checkForm(nameField, emailField)) {
					logRegistration(nameField.value, emailField.value);
					_gaq.push(['_trackPageview','/register/RegisterFSEventInIstanbul']);
				}
				return false;
			});
		
		function logRegistration(name, email) {
			
			var expires = { expires: 3650 };
			$.cookie("name", name, expires);
			$.cookie("email", email, expires);
			
			$.ajax({
			  type: "GET",
			  url: "product.php",
			  data: "descid=RegisterFSEventInIstanbul&name="+ name +"&mail="+ email,
			  async: true,
			  success: function(data) {
				//alert('success');
				nameField.value = null;
				emailField.value = null;
				document.getElementById("registerDiv").style.display = "none";
				document.getElementById("registerSuccessDiv").style.display = "block";
			  },
			  error: function(jqXHR, textStatus) {
				//alert('error: ' + textStatus);
			  }
			});
		}
		
		if (Modernizr.input.placeholder) {
			document.getElementById("nameLabel").style.display = "none";
			document.getElementById("emailLabel").style.display = "none";
		}
		
		//if ((nameField.value == null || nameField.value == "") && ($.cookie("name")))
			//nameField.value = $.cookie("name");
		
		//if ((emailField.value == null || emailField.value == "")  && ($.cookie("email")))
			//emailField.value = $.cookie("email");
		
		document.getElementById("registerDiv").style.visibility = "visible";
	});
</script> 

</head>

<body>

<div class="container">
  <div class="header">
  	<?php $link_name= "" ?>
  	<?php include ('mainmenu.php'); ?>
  </div>
 
  <div class="content">
  	<img src="images/line.png" alt="line">
  	<br>
  	<br>
  		<!--<div class="lcsteps">-->
  			<h1 class="topPhrase">PL/SQL ile Harika Web Uygulamaları Semineri</h1>
  		<!--</div>-->
  	<br>
  	<!--h2>Do not miss the PL/SQL event of the year in Netherlands. Meet Formspider, the new home of PL/SQL developers.</h2-->
	
	<table CELLPADDING="3" CELLSPACING="3">
		<tr/>
		<tr><td colspan="2" style="text-align:left;width:80%;"><h2 style="padding-left: 0px; margin-bottom: 2px;">Formspider Nedir?</h2></td></tr>
		<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Formspider, sadece PL/SQL kullanarak %100 AJAX, DHTML ve JavaScript ile çalışan Web ve Mobile Web uygulamalar geliştirmenizi sağlayan bir framework'tür.</td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td colspan="2" style="text-align:left;width:80%;"><h2 style="padding-left: 0px; margin-bottom: 2px;">Kimin İçin?</h2></td></tr>
		<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Formspider, Oracle Veritabanı ile iş uygulamaları geliştiren şirketler ve yazılımcılar için mükemmel bir uygulama geliştirme platformudur.</td></tr>
		<tr><td colspan="2"></td></tr>
		<tr><td colspan="2"></td></tr>
		
		<tr><td>
			<!--program-->
			<table CELLPADDING="2" CELLSPACING="2">
				<tr><td><a href="http://www.theformspider.com"><img src="/images/logo_720_200_transparent.png" width="360" height="100" align="center" border="0" style="float:left; border:0;"></a></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;"><b>Etkinlik Bilgileri</b></td></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;"><b>Tarih&nbsp;&nbsp;&nbsp; : </b>31 Ocak 2013 Perşembe</td></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;"><b>Yer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>ARI Teknokent / ARI 2 Binası A Blok Büyük Toplantı Salonu
															<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; İTÜ Ayazağa Yerleşkesi, Koru Yolu 34396 Maslak / İstanbul</td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><th style="font-size:14px;text-align:left;width:80%;">Program Akışı</th></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;">13:30 - 14:10  Formspider Tanıtımı</td></tr>
				<tr><td></td></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;">14:30 - 15:30  Türkiye ve Dünyadan Formspider Başarı Hikayeleri</td></tr>
				<tr><td></td></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;">15:45 - 16:30  Formspider Yol Haritası</td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><th style="font-size:14px;text-align:left;width:80%;">Kayıt ve Koşullar</th></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;">Toplantı 13:30 – 16:30 saatleri arasındadır.</td></tr>
				<tr><td style="font-size:14px;text-align:left;width:80%;">Katılım ücretsizdir.</td></tr>
			</table>
		</td>
		<td valign="Top">
			<!--registration form-->
			<table CELLPADDING="2" CELLSPACING="2">
				<tr>
					<td colspan="2">
						
						<div class="download" style="top: 310px; margin-left:10px;">
							<a target="_blank" href="http://formspideronline.com">
								<div class="onlinos">
								<div class="pclass">Online IDE</div>
								</div>
							</a>
							<a href="download.php">
								<div class="insider">
									<div class="pclass">Download</div>
								</div>
							</a>
						</div>
						
						<div>
							<br/><br/>
							<div id="registerDiv" style="width:300px; margin:auto; border:1px solid #c0c0c0; border-radius: 3px; box-shadow: 0 0 5px 0 #808080; display:block; visibility:hidden;" >
								<br/>
								<h2>Hemen ücretsiz kayıt ol</h2>
								
								<form id="downloadForm" class="cmxform" method="get" action="">
									<p>
										<label for="name" id="nameLabel">İsim</label>
										<input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="İsim"/>
									</p>
									<p>
										<label for="email" id="emailLabel">Email</label>
										<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" style="width:100%" placeholder="Email*"/>
									</p>
									
									<p>
										<button id="register" style="width:100%"><h2 style="padding-left: 0px; margin-bottom: 0px;">Yerini ayır</h2></button>
									</p>
									<input type="submit" value="Submit" class="submit" id="downloadFormSubmit" style="display:none" />
								</form>
							  
							</div>
							<div id="registerSuccessDiv" style="width:300px; margin:auto; border:1px solid #c0c0c0; border-radius: 3px; box-shadow: 0 0 5px 0 #808080; display:none;">
								<br/>
								<p>Kayıt olduğunuz için teşekkür ederiz.</p>
								<p>31 Ocak günü görüşmek üzere.</p>
							</div>
						</div>
					</td>
				</tr>
				
				<tr>
				<td halign="Left">
				    <br/><br/>
                    <a href="/images/PLSQL.ics"><img src="/images/addToOutlook.jpg" alt="Outlook'a ekle" width="166" height="58" align="right" border="0" style="float:left; border:0;"></a>
				</td>
				<td halign="Right">
					<br/><br/>
					<div class="shareLinks" style="font-weight:normal;font-size:12px;" align="center">
						Etkinliği Paylaş
						<br><br>
						<a href="http://twitter.com/home?status=Formspider%20Event%20in%20Istanbul.%20http://theformspider.com/FormspiderEventInIstanbul.php" id="twit" target="_blank">
							<img src="/images/shareLinks/twitter.png">
						</a>
						<a href="http://www.facebook.com/sharer.php?t=Formspider%20Event%20in%20Istanbul&amp;u=http%3A//theformspider.com/FormspiderEventInIstanbul.php" id="facebook" target="_blank">
							<img src="/images/shareLinks/facebook.png">
						</a>
						<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=theformspider.com/FormspiderEventInIstanbul.php&amp;title=Formspider%20Event%20in%20Istanbul" id="linkedin" target="_blank">
							<img src="/images/shareLinks/linkedin.png">
						</a>
					</div>
				</td></tr>
			</table>
		</td></tr>

    
		
	<tr><td colspan="2" style="text-align:left;width:80%;"><h2 style="padding-left: 0px; margin-bottom: 2px;">Neden Katılmalıyım?</h2></td></tr>
	<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Dünyanın en büyük lojistik şirketlerinden Rhenus’tan ING’ye, Amerikan Hava Kuvvetleri’nden Avon Cosmetics’e kadar, lider kurumların neden Formspider’ı tercih ettiğini öğrenin.</td></tr>
	<tr><td colspan="2"></td></tr>
	<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Entegre mobil uygulama mimarisi, gerçek farklı tarayıcı desteği ve 100% AJAX altyapısı gibi en iyi endüstri çözümlerini Formspider ile hemen kullanmaya başlayın.</td></tr>
	<tr><td colspan="2"></td></tr>
	<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Dünyanın en yüksek güvenlik standartlarına sahip kurumların testlerinden geçen Formspider ile güvenli uygulamalar geliştirin.</td></tr>
	<tr><td colspan="2"></td></tr>
	<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Formspider’ı öğrenmesi çok kolay. Şirketinizde birinci sınıf web ve mobil uygulamalar geliştirmeye hemen başlayın.</td></tr>
	<tr><td colspan="2"></td></tr>
	<tr><td colspan="2" style="font-size:14px;text-align:left;width:80%;">Formpsider’ın sizin kurumunuza nasıl faydalı olabileceğini görmek için 31 Ocak günü düzenlenecek seminerimize katılın.</td></tr>
	
	</table>
	<br>	
	<br>
	
  <!-- end .content --></div>
  <?php include ('footer2.php'); ?>
  <!-- end .container --></div>
</body>
</html>