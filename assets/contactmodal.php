<div id="contact-modal" class="reveal-modal">
	<h2>Hello!</h2>
	<p>Please fill out the form below and we'll get in touch as soon as possible. Thanks.</p>
	<form action="">
		<fieldset>
			<label>
				First name <input id="first-name" type="text" />	
			</label>
			<label>
				Last name <input id="last-name" type="text" />	
			</label>
		</fieldset>
		<fieldset>
			<label>
				E-mail <input id="email" type="text" />	
			</label>
			<label>
				Telephone <input id="tel" type="text" />	
			</label>
		</fieldset>
			<fieldset>
				<label class="textarea">
					Message
					<textarea  id="body" rows="5"></textarea>
				</label>
		</fieldset>
		<a href="#" class="button blue full-width">Submit</a>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>

<script type="text/javascript">

sendMail = function() {
	var link = "mailto:contact@theformspider.com"
	var subject = encodeURIComponent("From website");
	var body = encodeURIComponent(document.getElementById('body').value);
	window.location.href = "mailto:" + link + "?subject=" + subject + "?body=" + body;
}

</script>