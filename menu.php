<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Shuttle Paris, navette aeroport Charles De Gaulle, navettes Orly" />
<meta http-equiv="Content-Language" content="fr" />
<title>easy-way-shuttle | menu | navettes France navette CDG Orly Beauvais</title>
<link href="style-pages.css" rel="stylesheet" type="text/css" />
<link href="css/menu-css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery/jquery-menu/jquery.js"></script>
<script type="text/javascript" src="jquery/jquery-menu/jquery.easing.1.3.js"></script>
<script type="text/javascript">
jQuery.noConflict();
(function($) { 
  $(function() {
		 
		   $('#navigation li a').append('<span class="hover"></span>')
		   
		   $('#navigation li a').hover(function() {
	        
		// Stuff that happens when you hover on + the stop()
		$('.hover', this).stop().animate({
			'opacity': 1
			}, 700,'easeOutSine')
	
	},function() {
	
		// Stuff that happens when you unhover + the stop()
		$('.hover', this).stop().animate({
			'opacity': 0
			}, 700, 'easeOutQuad')
	
	})
		   });
		   })(jQuery);
</script>
</head>

<body>

<div class="trais"></div>

<div id="nav">
<ul id="navigation">
	<li><a class="reser" href="index.php"></a></li>
	<li><a class="point" href="tarifs-reservations.php"></a></li>
	<li><a class="presta" href="nos-prestations.php"></a></li>
	<li><a class="vehi" href="nos-vehicules.php"></a></li>
	<li><a class="infos" href="point-de-rencontre.php"></a></li>
    <li><a class="liens" href="liens-utiles.php"></a></li>
    <li><a class="contact" href="contact.php"></a></li>
</ul>
</div>

<div class="trais2"></div>

</body>

</html>
