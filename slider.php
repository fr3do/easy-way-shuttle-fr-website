<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Slider</title>
<link href="style-pages.css" rel="stylesheet" type="text/css" />
<link href="css/slide-cycle-css/slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery/jquery-slide/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-slide/jquery.cycle.all.2.74.js"></script>
<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function($) {
  
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});

$(document).ready(function() {
    $('.slideshowpet').cycle({
		fx:   'turnDown', 
    shuffle: { 
        top:  -230, 
        left:  230 
    }, // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
});
</script>
</head>

<body>

<div id="conteneurslide" class="conteneurslide">
   <div class="divslide">
      <div id="slide" class="slideshow">
      <img src="images/images-slide/van1.jpg"/>
      <img src="images/images-slide/van2.jpg"/>
      <img src="images/images-slide/van3.jpg"/>
      <img src="images/images-slide/van4.jpg"/>
	  <img src="images/images-slide/van5.jpg"/>
	  <img src="images/images-slide/van6.jpg"/>
	  </div>
   </div>
	
<div id="slidepet" class="divcontvis">
   <div class="divcontact"></div>
   <div class="divis">
      <div id="slide" class="slideshowpet">
	  <img src="images/images-slid-peti/first-class-shuttle.jpg"/>
      <img src="images/images-slid-peti/paris-notre-dame.jpg"/>
      <img src="images/images-slid-peti/Diners-Croisiere.jpg"/>
      <img src="images/images-slid-peti/chateaux-de-la-loire.jpg"/>
      <img src="images/images-slid-peti/Chateau-de-Chaumont-sur-Loire.jpg"/>
      <img src="images/images-slid-peti/diner-au-chateau.jpg"/>
      <img src="images/images-slid-peti/le-mont-st-michel.jpg"/>
      <img src="images/images-slid-peti/charles-de-gaulle-etoile.jpg"/>
      <img src="images/images-slid-peti/porte-de-versailles.jpg"/>
	  <img src="images/images-slid-peti/chateau-de-versailles.jpg"/>
	  <img src="images/images-slid-peti/Excurtions-en-France.jpg"/>
      <img src="images/images-slid-peti/galeries-marchandes-paris.jpg"/>
	  <img src="images/images-slid-peti/la-tour-eiffel.jpg"/>
      <img src="images/images-slid-peti/arche-de-la-defence.jpg"/>
      <img src="images/images-slid-peti/galeries-lafayettes.jpg"/>
	  <img src="images/images-slid-peti/place-vendome.jpg"/>
      <img src="images/images-slid-peti/place-de-opera-de-paris.jpg"/>
	  <img src="images/images-slid-peti/place-de-la-concorde.jpg"/>
	  <img src="images/images-slid-peti/muse-du-louvre.jpg"/>
	  <img src="images/images-slid-peti/notre-dame-de-paris.jpg"/>
	  <img src="images/images-slid-peti/quai-des-tuileries.jpg"/>
	  <img src="images/images-slid-peti/saint-eustache.jpg"/>
	  </div>
    </div>
  </div>
</div>


</body>
</html>
