function checkMail() {
	var email = document.getElementById('emailaddress');
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if (!filter.test(email.value)) {
		alert('Please provide a valid email address');
		email.focus
		return false;
	}
}

function closeThanks() {
	var tbutton = document.getElementById('thanks');
	if(tbutton != null)	
		tbutton.style.display="none";	
}

function waitAndCloseThanks() {
	setTimeout("closeThanks()", 7000);
}

function getParameter(name)
{
	if (window.requestParameters){
		var params = window.requestParameters.split("&");
		for (var i=0;i<params.length;i++){
			var parts = params[i].split("=");
			if (parts[0] == name){
				return parts[1];
			}
		}
		return "";
	}else{
		name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");  
		var regexS = "[\\?&]"+name+"=([^&#]*)";
		var regex = new RegExp( regexS );
		var results = regex.exec( window.location.href );
		if( results == null )
			return "";
		else
		return results[1];
	}
}

var downloadURL = function(url)
{
    var iframe;
    iframe = document.getElementById("hiddenDownloader");
    if (iframe === null)
    {
        iframe = document.createElement('iframe');  
        iframe.id = "hiddenDownloader";
        iframe.style.visibility = 'hidden';
        document.body.appendChild(iframe);
    }
    iframe.src = url;   
}