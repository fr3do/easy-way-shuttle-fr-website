<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<title>easy-way-shuttle | Voiture avec chauffeur limousines et navettes entre Paris et les aéroports</title>
<meta name="description" content="Des prix fixes et connu d'avance au départ et à destination de Paris, Roissy Charles de Gaulle, Orly et Beauvais" />
<meta name="keywords" content="shuttle Paris, shuttle CDG, shuttle Orly, navette Paris CDG, navette Orly, navette Roissy Charles de Gaulle, navette aéroport, transfert aéroport, Taxi Paris, voiture avec chauffeur, limousine, Paris, France " />
		
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="wow slide/engine1/style.css" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="wow slide/engine1/jquery.js"></script>
	<script type="text/javascript" src="wow slide/engine1/wowslider.js"></script>
	<!-- End WOWSlider.com HEAD section -->
		<link href="css/tarifs-css/tarifs.css" rel="stylesheet" type="text/css" />
		<link type="text/css" href="css/aristo-css/Aristo.css" rel="stylesheet" />	

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


		<script type="text/javascript" src="jquery/jquery-aristo/jquery-ui.min.js"></script>
		<script type="text/javascript">
			$(function(){
				// Accordion
				$(".accordion").accordion({ header: "h3" });
	
				// Tabs
				$('#tabs').tabs();

				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() { 
							$(this).dialog("close"); 
						}, 
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					},
					modal: true
				});
				
				// Dialog Link
				$('#dialog_link').button().click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker().children().show();
				
				// Horizontal Slider
				$('#horizSlider').slider({
					range: true,
					values: [17, 67]
				}).width(500);
				
				// Vertical Slider				
				$("#eq > span").each(function() {
					var value = parseInt($(this).text());
					$(this).empty().slider({
						value: value,
						range: "min",
						animate: true,
						orientation: "vertical"
					});
				});
				
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
				// Button
				$("#divButton, #linkButton, #submitButton, #inputButton").button();
								
				// Icon Buttons
				$("#leftIconButton").button({
					icons: {
						primary: 'ui-icon-wrench'
					}
				});
				
				$("#bothIconButton").button({
					icons: {
						primary: 'ui-icon-wrench',
						secondary: 'ui-icon-triangle-1-s'
					}
				});					
				
				// Button Set
				$("#radio1").buttonset();
				
				
				// Progressbar
				$("#progressbar").progressbar({
					value: 37
				}).width(500);
				$("#animateProgress").click(function(event) {
					var randNum = Math.random() * 90;
					$("#progressbar div").animate( { width: randNum+"%" } );
					event.preventDefault();
				});
				
				// Combinations
				$('#tabs2').tabs();
				$("#accordion2").accordion({ header: "h4" });
				$("#buttonInModal").button({
					icons: {primary: 'ui-icon-wrench'}
				});
				
				// Nested button tests
				$("#nestedButtonTest_1, #nestedButtonTest_2, #buttonInModal").button().click(function(e) {
					e.preventDefault();
				});
				
			});
		</script>

		<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% Cambria, Georgia, serif; margin: 50px; background:url(images/images-design/bg-fond.jpg); }
			.columnbox { width: 950px; }
			a { color: #03508b; text-decoration:none; } 
			a:hover { color: #0480e0; }
		</style>
		
<div class="contgrille">
<div class="blanc"></div>
<div class="conteneurgrille">
<h1><span class="blue">Tarifs au Départ de :</span></h1>
<div class="columnbox">
<div class="accordion">
<h3><a href="#">Aéroport de Roissy Charles de Gaulle (CDG)</a></h3>
<div class="contcolones">
<div class="colhaut">
<div class="contdest">
   <div class="dest"><strong>Prise en charge à l'Aéroport Roissy CDG</strong></div>
   </div>
   <div class="nb"><strong>1 à 4 pers.</strong></div>
   <div class="nb"><strong>5 pers.</strong></div>
   <div class="nb"><strong>6 pers.</strong></div>
   <div class="nb"><strong>7 pers.</strong></div>
   <div class="nb"><strong>8 pers.</strong></div>
   <div class="nb"><strong>Réserver</strong></div>
</div>

<div class="colones1">
   <div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Roissy CDG à Hôtels ou Gares de Paris</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>
<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Roissy CDG à Aéroport d’Orly</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-disneyland.php">Roissy CDG à Disneyland</a></div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">120 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">120 €</div>
   </div>
   <div class="contpriresa">
   <div class="reserv"><a href="reservation-disneyland.php">GO</a></div>
   </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-parcasterix.php">Roissy CDG au Parc Astérix</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-parcasterix.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Roissy CDG l'aéroport du Bourget</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-versailles.php">Roissy CDG à Versailles</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">160 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">160 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-versailles.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-fontainebleau.php">Roissy CDG à Fontainebleau</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-fontainebleau.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Roissy CDG à Aéroport de Beauvais</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>
</div>



<h3><a href="#">Paris City, Hôtels ou Gares de Paris</a></h3>
<div class="contcolones">
<div class="colhaut">
<div class="contdest">
   <div class="dest"><strong>Prise en charge à PARIS</strong></div>
   </div>
   <div class="nb"><strong>1 à 4 pers.</strong></div>
   <div class="nb"><strong>5 pers.</strong></div>
   <div class="nb"><strong>6 pers.</strong></div>
   <div class="nb"><strong>7 pers.</strong></div>
   <div class="nb"><strong>8 pers.</strong></div>
   <div class="nb"><strong>Réserver</strong></div>
</div>

<div class="colones1">
   <div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Paris à Hôtels ou Gares de Paris</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>
<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Paris à Aéroport d’Orly</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-disneyland.php">Paris à Disneyland</a></div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">120 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">120 €</div>
   </div>
   <div class="contpriresa">
   <div class="reserv"><a href="reservation-disneyland.php">GO</a></div>
   </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-parcasterix.php">Paris au Parc Astérix</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-parcasterix.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Paris à l'aéroport du Bourget</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-versailles.php">Paris à Versailles</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">160 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">160 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-versailles.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-fontainebleau.php">Paris à Fontainebleau</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-fontainebleau.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Paris à Aéroport de Beauvais</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>
</div>



<h3><a href="#">Aéroport d'Orly (ORY)</a></h3>
<div class="contcolones">
<div class="colhaut">
<div class="contdest">
   <div class="dest"><strong>Prise en charge à l'aéroport d'Orly</strong></div>
   </div>
   <div class="nb"><strong>1 à 4 pers.</strong></div>
   <div class="nb"><strong>5 pers.</strong></div>
   <div class="nb"><strong>6 pers.</strong></div>
   <div class="nb"><strong>7 pers.</strong></div>
   <div class="nb"><strong>8 pers.</strong></div>
   <div class="nb"><strong>Réserver</strong></div>
</div>

<div class="colones1">
   <div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Orly à Hôtels ou Gares de Paris</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>
<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Orly à l'aéroport du Bourget</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-disneyland.php">Orly à Disneyland</a></div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">70 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">120 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">120 €</div>
   </div>
   <div class="contpriresa">
   <div class="reserv"><a href="reservation-disneyland.php">GO</a></div>
   </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-parcasterix.php">Orly au Parc Astérix</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-parcasterix.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-la-defense.php">Orly à La Défense</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">70 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">120 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-la-defense.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-versailles.php">Orly à Versailles</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">90 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">160 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">160 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-versailles.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-fontainebleau.php">Orly à Fontainebleau</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">

      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-fontainebleau.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-roissy-cdg.php">Orly à Aéroport de Beauvais</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-roissy-cdg.php">GO</a></div>
    </div>
</div>
</div>
					<h3><a href="#">Paris et Aéroports de Paris vers autres destinations</a></h3>
<div class="contcolones">

<div class="colhaut">
<div class="contdest">
   <div class="dest"><strong>Départ de Paris et Aéroports de Paris</strong></div>
   </div>
   <div class="nb"><strong>1 à 4 pers.</strong></div>
   <div class="nb"><strong>5 pers.</strong></div>
   <div class="nb"><strong>6 pers.</strong></div>
   <div class="nb"><strong>7 pers.</strong></div>
   <div class="nb"><strong>8 pers.</strong></div>
   <div class="nb"><strong>Réserver</strong></div>
</div>

<div class="colones1">
   <div class="contrip">
   <div class="trip"><a href="reservation-rambouillet.php">Paris à Rambouillet</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-rambouillet.php">GO</a></div>
    </div>
</div>
<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-etampes.php">Paris à Etampes</a></div>
   </div>
   <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">180 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
   <div class="contpriresa">
      <div class="price">340 €</div>
    </div>
   <div class="contpriresa">
      <div class="reserv"><a href="reservation-etampes.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-amiens.php">Paris à Amiens</a></div>
   </div>
   <div class="contpriresa">
   <div class="price">250 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">250 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">250 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">480 €</div>
   </div>
   <div class="contpriresa">
   <div class="price">480 €</div>
   </div>
   <div class="contpriresa">
   <div class="reserv"><a href="reservation-amiens.php">GO</a></div>
   </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-lille.php">Paris à Lille</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">300 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">300 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">300 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">550 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">550 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-lille.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-bruxelles.php">Paris à Bruxelles</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">350 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">350 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">350 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">600 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">600 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-bruxelles.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-orleans.php">Paris à Orléans</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">250 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">250 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">250 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">460 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">460 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-orleans.php">GO</a></div>
    </div>
</div>

<div class="colones1">
<div class="contrip">
   <div class="trip"><a href="reservation-courchevel.php">Paris à Courchevel</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">600 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">600 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">600 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">1100 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">1100 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-courchevel.php">GO</a></div>
    </div>
</div>

<div class="colones2">
<div class="contrip">
   <div class="trip"><a href="reservation-geneve.php">Paris à Genève</a></div>
   </div>
      <div class="contpriresa">
      <div class="price">650 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">650 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">650 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">1100 €</div>
    </div>
      <div class="contpriresa">
      <div class="price">1100 €</div>
    </div>
      <div class="contpriresa">
      <div class="reserv"><a href="reservation-geneve.php">GO</a></div>
    </div>
</div>
</div>					
</div>
</div>
</div>

<div class="blanc"></div>
<div class="acceuil"><a id="linkButton" href="index.php">Retour acceuil</a></div>
</div>

<?php include("footer-reservations.php"); ?>

</body>

</html>