<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="reservez d'une manière simple et pas cher pour vos déplacements vers Eurodisney" />
<meta http-equiv="Content-Language" content="fr" />
<title>easy-way-shuttle | Navette privé à prix Low Cost de Paris vers Eurodisney</title>
<link type="text/css" href="css/aristo-css/Aristo.css" rel="stylesheet" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.8.13/jquery-ui.min.js"></script>
<script type="text/javascript">
jQuery.noConflict();
	(function($) {

	$(function(){

	$("#linkButton, #submitButton").button();

	});
	
})(jQuery);

</script>

			<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="wow slide/engine1/style.css" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="wow slide/engine1/jquery.js"></script>
	<script type="text/javascript" src="wow slide/engine1/wowslider.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
<link href="css/tarifs-css/tarifs.css" rel="stylesheet" type="text/css" />
<link href="css/reservations-css/reservations.css" rel="stylesheet" type="text/css" />
<link href="css/formulaire-css/formuresa.css" rel="stylesheet" type="text/css" />
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
		//document.getElementById("aff").innerHTML=' 340 €';
		document.form1.amount.value='340';
	}
	
		if((aa=='9') || (aa=='10') || (aa=='11'))
	{
		//document.getElementById("aff").innerHTML=' 340 €';
		document.form1.amount.value='340';
	}
	
	if((aa=='12') || (aa=='13') || (aa=='14'))
	{
		//document.getElementById("aff").innerHTML=' 340 €';
		document.form1.amount.value='340';
	}

	if((aa=='15') || (aa=='16'))
	{
		//document.getElementById("aff").innerHTML=' 460 €';
		document.form1.amount.value='460';
	}
	
	if((aa=='17') || (aa=='18') || (aa=='19') || (aa=='20') || (aa=='21') || (aa=='22') || (aa=='23') || (aa=='24'))
	{
		//document.getElementById("aff").innerHTML=' 640 €';
		document.form1.amount.value='640';
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
<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images">
<span><img src="wow slide/data1/images/shuttle.jpg" alt="Shuttle" title="Shuttle" id="wows0"/></span>
<span><img src="wow slide/data1/images/navettes.jpg" alt="Navettes" title="Navettes" id="wows1"/></span>
<span><img src="wow slide/data1/images/limousine.jpg" alt="Limousine" title="Limousine" id="wows2"/></span>
<span><img src="wow slide/data1/images/4x4.jpg" alt="4X4" title="4X4" id="wows3"/></span>
<span><img src="wow slide/data1/images/q7.jpg" alt="Q7" title="Q7" id="wows4"/></span>
</div>
<div class="ws_bullets"><div>
<a href="#wows0" title="Shuttle"><img src="wow slide/data1/tooltips/shuttle.jpg" alt="Shuttle"/>1</a>
<a href="#wows1" title="Navettes"><img src="wow slide/data1/tooltips/navettes.jpg" alt="Navettes"/>2</a>
<a href="#wows2" title="Limousine"><img src="wow slide/data1/tooltips/limousine.jpg" alt="Limousine"/>3</a>
<a href="#wows3" title="4X4"><img src="wow slide/data1/tooltips/4x4.jpg" alt="4X4"/>4</a>
<a href="#wows4" title="Q7"><img src="wow slide/data1/tooltips/q7.jpg" alt="Q7"/>5</a>
</div></div>
<a style="display:none" href="http://wowslider.com">Photo Gallery For HTML by WOWSlider.com v2.0</a>
	</div>
	<script type="text/javascript" src="wow slide/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

<form name="form1" METHOD="post" ACTION="traitement-step-2-bis.php">
<A NAME="aa"> </A>
<div id="conteneur" class="conteneurformu">
<div class="divcontform">
<div class="divfrom">
<h4><span class="blue">Départ de :</span></h4>
<input name="from" type="radio" id="radio16" value="Charles De Gaulle airport(CDG)" onClick="calc_simu();">
<span class="grey">Charles De Gaulle airport(CDG)</span><br>
<input type="radio" name="from" id="radio17" value="Orly airport (ORY)" onClick="calc_simu();">

<span class="grey">Orly airport (ORY)</span><br>
<input type="radio" name="from" id="radio18" value="Rambouillet" onClick="calc_simu();">
<span class="grey">Beauvais (BVA)</span><br>
<input type="radio" name="from" id="radio19" value="Versailles" onClick="calc_simu();">
<span class="grey">Parc Disneyland</span><br>
<input type="radio" name="from" id="radio20" value="Hôtels ou Gares de Paris" onClick="calc_simu();">
<span class="grey">Paris City, Hôtels ou Gares de Paris</span><br>
____________________________
</div>

<div class="divto">
<h4><span class="blue">Destination :</span></h4>
<input name="to" type="radio" id="radio21" value="Charles De Gaulle airport(CDG)" onClick="calc_simu();">
<span class="grey">Charles De Gaulle airport(CDG)</span><br>
<input type="radio" name="to" id="radio22" value="Orly airport (ORY)" onClick="calc_simu();">
<span class="grey">Orly airport (ORY)</span><br>

<input type="radio" name="to" id="radio23" value="Rambouillet" onClick="calc_simu();">
<span class="grey">Beauvais (BVA)</span><br>
<input type="radio" name="to" id="radio24" value="Versailles" onClick="calc_simu();">
<span class="grey">Parc Disneyland</span><br>
<input type="radio" name="to" id="radio25" value="Hôtels ou Gares de Paris" onClick="calc_simu();">
<span class="grey">Paris City, Hôtels ou Gares de Paris</span><br>
____________________________</div>
	 
<div class="clear"></div>

<div class="divchoi">
<span class="blue"><strong>S&eacute;l&eacute;ctionez :</strong></span><br>
<input name="selec" type="radio" id="radio9" value="Minibus Luxe" onClick="calc_simu();">
<span class="grey">Minibus Luxe</span><br>
<input type="radio" name="selec" id="radio12" value="Limousine" onClick="calc_simu();">
<span class="grey">Limousine</span><br>
____________________________<br>
<span class="blue"><strong>Nombre de passagers :</strong></span><br>
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
                <span class="grey">passager(s)</span><br>
                <br>

</div>

<div class="divpassag">
<span class="blue"><strong>Trajet :</strong></span><br>
<input name="trip" type="radio" id="radio13" value="One Way" onClick="calc_simu();">
<span class="grey">Aller Simple</span><br>
<input type="radio" name="trip" id="radio14" value="Round Trip" onClick="calc_simu();">
<span class="grey">Aller Retour</span><br>
____________________________<br>
<span class="grey"><strong>TOTAL :</strong></span><br>
<div id="aff" style="border:0; float:left; margin-left:55px; margin-top:-25px; float:left; color:#000; font: 600 20px Arial; background:none; width:70px; height:auto;">
<INPUT type="text" readonly NAME="amount" id="amount" style="background:none; border:0; width:50px; text-align:right;color:#000; font: 600 20px Arial;" value="0">€</div>
</div>

<div class="clear"></div>

<div class="contbouton">
	<div class="preced"><a id="linkButton" href="tarifs-reservations.php">Retour</a></div>
	<div class="sub"><input type="submit" id="submitButton" value="Envoyer" /></div>
</div>

</div>
</div>
</form>

<?php include("footer-reservations.php"); ?>

</body>
</html>