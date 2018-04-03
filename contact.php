<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<title>Contactez-nous pour une navette privée sur Paris</title>
<meta name="description" content="contact@easy-way-shuttle.fr & +33.6.19.19.19.88 réservation simple pour une navette aéroport Paris CDG, Orly" />

<link type="text/css" href="css/aristo-css/Aristo.css" rel="stylesheet" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.8.13/jquery-ui.min.js"></script>
<script type="text/javascript">	
jQuery.noConflict();
	(function($) {
	
	$(function(){			
	// Autocomplete
	var countryList = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize","Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"];
				
				$("#countries").autocomplete({
					source: countryList
				});
				
				// Button applique l'éffet aux boutons
				$("#submitButton").button();
				
		});
		
	})(jQuery);
</script>
		
		<style type="text/css">
			/*demo page css*/
			body{ font: 100% Cambria, Georgia, serif; }
			ul#icons { margin: 0; padding: 0;}
			ul#icons li { margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left; list-style: none; }
			ul#icons span.ui-icon { float: left; margin: 0 4px; }
			.columnbox { width: 500px; }
			#eq span { height: 120px; float: left; margin: 15px; }
			#countries { width: 300px; }
		</style>
		
        <link rel="stylesheet" href="css/social-css/style.css" type="text/css" media="screen">
        <script src="jquery/jquery-social/jquery.min.js" type="text/javascript"></script>
        <script src="jquery/jquery-social/jquery.jsocial.js" type="text/javascript"></script>		
		
<!-- Start google analytics section -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30184079-1']);
  _gaq.push(['_setDomainName', 'easy-way-shuttle.fr']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End google analytics section -->

</head>
<body>

<?php include("flags.php"); ?>	
<?php include("entete.php"); ?>
<?php include("menu.php"); ?>

<div class="contcont">	
   <div class="conteneur-ui">	
   <div class="divcont-ui">
   <div class="ui-form">

	<p><strong>Contact Us:</strong></p><br>
	<p>Send an e-mail to : easy way shuttle</p>
	<br>
    <Form method=POST action=traitement-contact.php>
	
	<p><input type="hidden" name="objet" value="Vous avez un nouveau message de contact" /></p>	
	
	<p><strong>Nom :</strong><br>
		<input type="text" name="nom"/></p>
	
		<p><strong>Prenom :</strong><br>
		<input type="text" name="prenom"/></p>
	
	<p><strong>e-mail :</strong><br>
		<input type="email" name="email"/></p>
	
			<!-- Autocomplete -->	
    <p><label for="countries"><strong>Pays :</strong></label><br>
			<input id="countries" name="pays"></p>
	
	
	<p><strong>Message :</strong><br>
		<textarea cols="40" rows="10" name="message"></textarea></p>
        <input type="submit" id="submitButton" value="Envoyer" />
		</Form>
   </div>
   </div>
</div>

<div class="divcontcol">
   <div class="colvignpet">
   <div class="contsocial">
   <div class="socialin">
   <div class="social"></div>
   </div>
   </div>
</div>

   <div class="colvign1">
   <div class="comp"><a href="http://www.alitalia.com"><img src="images/images-bannieres/alitalia.jpg"></a></div>
   <div class="comp"><a href="http://www.easyjet.com"><img src="images/images-bannieres/easy-jet.jpg"></a></div>
   <div class="clear"></div>
   <div class="comp"><a href="http://www.iberia.com"><img src="images/images-bannieres/iberia.jpg"></a></div>
   <div class="comp"><a href="http://www.airfrance.com"><img src="images/images-bannieres/air-france.jpg"></a></div>
   <div class="clear"></div>
   <div class="comp"><a href="http://www.elal.co.il/ELAL/English/States/General/"><img src="images/images-bannieres/el-al.jpg"></a></div>
   <div class="comp"><a href="http://www.malaysiaairlines.com"><img src="images/images-bannieres/malaysia-airline.jpg"></a></div>
   <div class="clear"></div>
   </div>

   <div class="colvign2">
   <div class="comp2"><a href="http://www.airchina.com/"><img src="images/images-bannieres/air-china.jpg"></a></div>
   <div class="comp2"><a href="http://www.emirates.com/"><img src="images/images-bannieres/emirates.jpg"></a></div>

   </div>
   <div class="bgcase"></div>

</div>
   
</div>

<script type="text/javascript">
$('.social').jsocial({
twitter		:  'ryanolson',
facebook	:  'facebook.com/pages/Easy-way-shuttle/348131118566977',
linked		:  'linkedin.com/pub/easy-way-shuttle-paris/4b/22b/6a7',
youtube		:  'youtube.com',
feed		:  'thatryan',
center		: true,	
inline		: true
});
</script>

<?php include("footer.php"); ?>
	
</body>
</html>


