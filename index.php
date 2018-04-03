<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<title>Navette aéroport de Roissy CDG, Le Bourget, Orly et Beauvais aéroports et gares</title>
<meta name="description" content="Reservez de manière simple et pratique pour vous déplacer sur Paris, navettes et limousines entre Paris et les aéroports CDG et Orly" />
<meta name="keywords" content="shuttle Paris, shuttle CDG, shuttle Orly, navette Paris CDG, navette Orly, navette Aéroport Paris Charles de Gaulle, navette aéroport, transfert aéroport, Taxi Paris, voiture avec chauffeur, limousine, Paris, France " />
<link href="style-pages.css" rel="stylesheet" type="text/css" />
<link href="css/formulaire-css/formulaire.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
 function aff_prix(aa) {
	  if(aa=='0')
	{
		//document.getElementById("aff").innerHTML=' 0 €';
		document.form1.amount.value='0';
	}
	 if((aa=='1') || (aa=='2') || (aa=='3'))
	{
		//document.getElementById("aff").innerHTML=' 70 €';
		document.form1.amount.value='70';
	}
	
	if((aa=='4') || (aa=='5') || (aa=='6'))
	{
		//document.getElementById("aff").innerHTML=' 70 €';
		document.form1.amount.value='70';
	}
	
		if((aa=='7') || (aa=='8'))
	{
		//document.getElementById("aff").innerHTML=' 120 €';
		document.form1.amount.value='120';
	}
	
		if((aa=='9') || (aa=='10') || (aa=='11') || (aa=='12'))
	{
		//document.getElementById("aff").innerHTML=' 120 €';
		document.form1.amount.value='120';
	}
	
	if((aa=='13') || (aa=='14'))
	{
		//document.getElementById("aff").innerHTML=' 160 €';
		document.form1.amount.value='160';
	}

	if((aa=='15') || (aa=='16') || (aa=='17') || (aa=='18'))
	{
		//document.getElementById("aff").innerHTML=' 180 €';
		document.form1.amount.value='180';
	}
	
	if((aa=='19') || (aa=='20') || (aa=='21') || (aa=='22') || (aa=='23') || (aa=='24'))
	{
		//document.getElementById("aff").innerHTML=' 240 €';
		document.form1.amount.value='240';
	}
	 
 }
 function aff_prix_b(aa) {
	   if(aa=='0')
	{
		//document.getElementById("aff").innerHTML=' 0 €';
		document.form1.amount.value='0';
	}
	 if((aa=='1') || (aa=='2') || (aa=='3'))
	{
		//document.getElementById("aff").innerHTML=' 180 €';
		document.form1.amount.value='180';
	}
	
	if((aa=='4') || (aa=='5') || (aa=='6'))
	{
		//document.getElementById("aff").innerHTML=' 180 €';
		document.form1.amount.value='180';
	}
	
		if((aa=='7') || (aa=='8'))
	{
		//document.getElementById("aff").innerHTML=' 240 €';
		document.form1.amount.value='240';
	}
	
		if((aa=='9') || (aa=='10') || (aa=='11'))
	{
		//document.getElementById("aff").innerHTML=' 340 €';
		document.form1.amount.value='340';
	}
	
	if((aa=='12') || (aa=='13') || (aa=='14'))
	{
		//document.getElementById("aff").innerHTML=' 360 €';
		document.form1.amount.value='360';
	}

	if((aa=='15') || (aa=='16'))
	{
		//document.getElementById("aff").innerHTML=' 280 €';
		document.form1.amount.value='380';
	}
	
	if((aa=='17') || (aa=='18') || (aa=='19') || (aa=='20') || (aa=='21') || (aa=='22') || (aa=='23') || (aa=='24'))
	{
		//document.getElementById("aff").innerHTML=' 380 €';
		document.form1.amount.value='380';
	}
	 
 }
function calc_simu()
{
	if(document.form1.from.value=='0')
	{
		document.form1.amount.value='0';
	}
	if((document.form1.elements[0].checked) && (document.form1.elements[5].checked))
	{
		document.form1.amount.value='0';
		return false;
	}
	if((document.form1.elements[1].checked) && (document.form1.elements[6].checked))
	{
		document.form1.amount.value='0';
		return false;
	}
	if((document.form1.elements[2].checked) && (document.form1.elements[7].checked))
	{
		document.form1.amount.value='0';
		return false;
	}
	if((document.form1.elements[3].checked) && (document.form1.elements[8].checked))
	{
		document.form1.amount.value='0';
		return false;
	}
	if((document.form1.elements[4].checked) && (document.form1.elements[9].checked))
	{
		document.form1.amount.value='0';
		return false;
	}
	
																		
if((document.form1.elements[0].checked) || (document.form1.elements[1].checked) || (document.form1.elements[3].checked) || (document.form1.elements[4].checked)) {
	if(document.form1.elements[7].checked)
	aff_prix_b(document.form1.nb.value);
	else
	aff_prix(document.form1.nb.value);
	
}

if((document.form1.elements[2].checked)) {
	aff_prix_b(document.form1.nb.value);	
}
	if(document.form1.elements[11].checked)
								{
		document.form1.amount.value=parseInt(document.form1.amount.value)+50;
		
	}
	if(document.form1.elements[14].checked)
								{
		document.form1.amount.value=parseInt(document.form1.amount.value)*2;
		
	}
}
</script>

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
<?php include("slider.php"); ?>

<div id="separ3" class="trais3"></div>


<div id="contbienv" class="conteneurbienv">
   <div class="divreser">
      <div class="textresa">
        <h2>Bienvenue sur easy way shuttle Paris, service navettes aéroports</h2>
        <br>
      <p>Compagnie low cost de transport de personnes basée en <strong>France</strong>, nous offrons un service de location de <strong>voiture privée avec chauffeur.</strong></p><br>
	  <p>- <strong>Navettes aéroports</strong> au départ et à destination de <strong>Roissy</strong>, <strong>Orly</strong>, <strong>Le Bourget</strong> et <strong>Beauvais</strong>.</p>
      <p>- <strong>Transports gares</strong> depuis et vers <strong>gare de lyon</strong>, <strong>gare du nord</strong> et autres gares.</p>
      <p>- <strong>Service taxi</strong> au départ et à destination de <strong>eurodisney</strong>, <strong>hôtels Paris</strong> et <strong>disneylandparis</strong>.</p><br>
	  <p>Pour vos déplacements privés ou professionnels réservez un <strong>minibus avec chauffeur</strong> idéal pour le transport de plusieurs personnes ou une <strong>limousine avec chauffeur</strong> pour un transport de 1 à 3 personnes.</p><br>
	  <p><strong>easy way shuttle</strong> accueille les voyageurs à tous lieux de rendez-vous, à votre domicile ou votre hôtel et dans tous les terminaux des aérogares de <strong>Roissy</strong>, <strong>Orly</strong> et de <strong>l'aeroport de Beauvais</strong> depuis et vers Paris. <strong>easy way</strong> dessert toutes les gares de Paris.</p>
	  <br>
      <h4>Vous partez pour ou arrivez de Roissy Charles de Gaulle, Orly, aéroport de Beauvais ?</h4><br> 
      <h4>Gagnez du temps, organisez votre transport vers votre lieu de destination !</h4></div>
      <div class="divresa"></div>
      <div class="divdepa"></div>
   </div>
<div class="divcontoon">
   <div class="divlog1"></div>
   <div class="divdisne"></div>
   <div class="divlog2"></div>
   <div class="divaster"></div>
</div>
</div>

<form name="form1" METHOD="post" ACTION="traitement-step-2.php">
<A NAME="aa"> </A>
<div id="conteneur" class="conteneurformu">
<div class="divfrom">
<h6>Séléctionnez :</h6><br>
<input name="from" type="radio" id="radio16" value="Charles De Gaulle airport(CDG)" onClick="calc_simu();">
Charles De Gaulle airport (CDG)<br>
<input type="radio" name="from" id="radio17" value="Orly airport (ORY)" onClick="calc_simu();">

Orly airport (ORY)<br>
<input type="radio" name="from" id="radio18" value="Beauvais Airport (BVA)" onClick="calc_simu();">
Beauvais airport (BVA)<br>
<input type="radio" name="from" id="radio19" value="DisneyLand (marne la vallee)" onClick="calc_simu();">
DisneyLand (Marne la vallee)<br>
<input type="radio" name="from" id="radio20" value="Paris City" onClick="calc_simu();">
Paris City, Hôtels Paris ou gares<br>
____________________________
</div>

<div class="divto">
<h6>Séléctionnez :</h6><br>
<input name="to" type="radio" id="radio21" value="Charles De Gaulle airport(CDG)" onClick="calc_simu();">
Charles De Gaulle airport (CDG)<br>
<input type="radio" name="to" id="radio22" value="Orly airport (ORY)" onClick="calc_simu();">
Orly airport (ORY)<br>

<input type="radio" name="to" id="radio23" value="Beauvais Airport (BVA)" onClick="calc_simu();">
Beauvais airport (BVA)<br>
<input type="radio" name="to" id="radio24" value="DisneyLand (marne la vallee)" onClick="calc_simu();">
DisneyLand (Marne la vall&eacute;e)<br>
<input type="radio" name="to" id="radio25" value="Paris City,Hôtels ou Gares de Paris" onClick="calc_simu();">
Paris City, Hôtels Paris ou gares<br>
____________________________</div>
	 
<div class="divco1"></div>
<div class="clear"></div>

<div class="divchoi">
<strong>Véhicule :</strong><br>
<input name="selec" type="radio" id="radio9" value="Minibus Luxe" onClick="calc_simu();">
Minibus Luxe<br>
<input type="radio" name="selec" id="radio12" value="Limousine" onClick="calc_simu();">
Limousine<br>
____________________________<br>
<strong>Nombre de passagers :</strong><br>
<select name="nb" id="nb" onChange="calc_simu();">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>

                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>

                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>

                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>

                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                </select>
              passager(s)<br>
              <br>

</div>

<div class="divpassag">
<strong>Trajet :</strong><br>
<input name="trip" type="radio" id="radio13" value="Allée simple" onClick="calc_simu();">
Aller Simple<br>
<input type="radio" name="trip" id="radio14" value="Round Trip" onClick="calc_simu();">
Aller Retour<br>
____________________________<br>
<strong>TOTAL :</strong><br>
<div id="aff" style="border:0; float:left; margin-left:55px; margin-top:-25px; float:left; color:#fbfbfd; font: 600 20px Arial; background:none; width:70px; height:auto;">
<INPUT type="text" readonly NAME="amount" id="amount" style="background:none; border:0; width:50px; text-align:right;color:#fbfbfd; font: 600 20px Arial;" value="0">€</div>
<div class="clear"></div>
<div class="submit"><a href="#" onClick="javascript:document.form1.submit();"><img src="images/images-design/AddToCartBlack.png" width="176" height="54"></a></div>
</div>
<div class="divco2">
<div class="contsocial">
<div class="socialin">
<div class="social"></div>
</div>
</div>
</div>
</div>
</form>

<script type="text/javascript">
$('.social').jsocial({
twitter		:  'twitter.com',
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

