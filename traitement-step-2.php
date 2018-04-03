<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>traitement step 2</title>
<link href="css/aristo-css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/aristo-css/style.css">
<link rel="stylesheet" href="css/aristo-css/Aristo.css">
<script type="text/javascript" src="jquery/jquery-aristo/jquery-1.7.1.min.js"></script> 
<script type="text/javascript" src="jquery/jquery-aristo/jquery.ui.js"></script> 
<script type="text/javascript" src="jquery/jquery-aristo/main.js"></script>
<script type="text/javascript">
			$(function(){

				// Button applique l'éffet aux boutons
				$("#linkButton, #submitButton").button();
								
                // Nested button tests deuxpremiers boutons
				$("#nestedButtonTest_1, #nestedButtonTest_2, #buttonInModal").button().click(function(e) {
					e.preventDefault();
				});
				
			});
		</script>
		
<link rel="stylesheet" href="css/formulaire-css/verifForm/verifForm.css" type="text/css">
<script type="text/javascript" src="css/formulaire-css/verifForm/verifForm.js"></script>
		
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

<?php include("entete.php"); ?>
<?php include("menu.php"); ?>

<div id="conteneur">
<div class="divcontpick">
<div class="title">
        <h1>Votre<span class="logo">Reservation</span></h1>
        <p class="claim">Deuxième étape <span class="yellow">* (champs obligatoires)</span></p>
		<p class="claim"><span class="yellow">Merci de renseigner votre Nom et Prénom en lettres Majuscules</span></p>
    </div>

<div class="separ"><img src="images/images-design/sep.png"></div>

<div class="formuphp">
 <form name="form1" METHOD="post" ACTION="traitement-step-3.php" onSubmit="return verifForm(this, new Array('fname', 'lname', 'tel', 'mail', 'rendezvous', 'adr_hot'));">
    <div class="divelem">Departure from</span></div>
    <div class="divelem2"><input name="from" type="hidden" value="<?php echo $_POST['from']; ?>" />
<?php
$from = isset($_POST['from']) ? $_POST['from'] : '';
 
if ($from) {
?>
            <?php echo $from; ?>
            <?php
}
?>
</div>

     <div class="divelem">Destination to</span></div>
     <div class="divelem2"><input name="to" type="hidden" value="<?php echo $_POST['to']; ?>" />
<?php
$to = isset($_POST['to']) ? $_POST['to'] : '';
 
if ($to) {
?>
             <?php echo $to; ?>
             <?php
}
?>
</div>

   <div class="divelem">Votre Séléction</div>
   <div class="divelem2"><input name="selec" type="hidden" value="<?php echo $_POST['selec']; ?>" /> 
<?php
$selec = isset($_POST['selec']) ? $_POST['selec'] : '';
 
if ($selec) {
?>
         <?php echo $selec; ?>
         <?php
}
?>
</div>

   <div class="divelem">Votre Trajet</div>
   <div class="divelem2"><input name="trip" type="hidden" value="<?php echo $_POST['trip']; ?>" />
<?php
$trip = isset($_POST['trip']) ? $_POST['trip'] : '';
 
if ($trip) {
?>
         <?php echo $trip; ?>
         <?php
}
?>
</div>

   <div class="divelem">Nombres de Passagers</span></div>
   <div class="divelem2"><input name="nb" type="hidden" value="<?php echo $_POST['nb']; ?>" />
<?php
$nb = isset($_POST['nb']) ? $_POST['nb'] : '';
 
if ($nb) {
?>
           <?php echo $nb; ?>
           <?php
}
?>
</div>
    
   <div class="divelem">Prix Total</div>
   <div class="divelem2"><input name="amount" type="hidden" value="<?php echo $_POST['amount']; ?>" />€
     <?php
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';
 
if ($amount) {
?>
    <?php echo $amount; ?>
	<?php
}
?>
</div>

   <div class="divelem">Votre Nom <span class="yellow">*</span></div>
   <div class="divelem2"><input name="last_name" class="picker" type="text" /></div>
   <div class="divelem">Votre Prénom <span class="yellow">*</span></div>
   <div class="divelem2"><input name="first_name" class="picker" type="text"></div>
   <div class="divelem">Company</div>
   <div class="divelem2"><input name="comp" class="picker" type="text"></div>
   <div class="divelem">Pays</div>
   <div class="divelem2"><input name="pays" class="picker" type="text"></div>
   <div class="divelem">Telephone <span class="yellow">*</span></div>
   <div class="divelem2"><input name="tel" class="picker" type="text"></div>
   <div class="divelem">E-mail <span class="yellow">*</span></div>
   <div class="divelem2"><input name="payer_email" class="pickermail" type="text"></div>
   <div class="clear"></div>
   <div class="divrendez"><strong>Information sur votre vol :</strong></div>
   <div class="divelem">Numéro de vol</div>
   <div class="divelem2"><input name="nfl" class="picker" type="text" style="width:100px"></div>
   
   <div class="divelem">Provenance ou Destination</div>
       <div class="divelem2"><select name="oai" id="oai" class="SelectBox" style="width:165px; height:27px;">
       <option value="">SELECT</option>
			<option value="ABERDEEN">ABERDEEN</option>
			<option value="ABIDJAN">ABIDJAN</option>
			<option value="ABU DHABI">ABU DHABI</option>
			<option value="ADDIS ABABA">ADDIS ABABA</option>
            <option value="AGADIR">AGADIR</option>
            <option value="AGEN">AGEN</option>
			<option value="AJACCIO">AJACCIO</option>
			<option value="ALEPPO">ALEPPO</option>
			<option value="ALGIERS">ALGIERS</option>
			<option value="ALICANTE">ALICANTE</option>
            <option value="ALMATY">ALMATY</option>
            <option value="AMMAN">AMMAN</option>
			<option value="AMSTERDAM">AMSTERDAM</option>
			<option value="ANCONA">ANCONA</option>
			<option value="ANNABA">ANNABA</option>
			<option value="ANNECY">ANNECY</option>
            <option value="ANTALYA">ANTALYA</option>
            <option value="ANTANANARIVO">ANTANANARIVO</option>
			<option value="AQABA">AQABA</option>
			<option value="ATHENS">ATHENS</option>
			<option value="ATLANTA">ATLANTA</option>
			<option value="AURILLAC">AURILLAC</option>

			<option value="BACAU">BACAU</option>
            <option value="BAHRAIN">BAHRAIN</option>
			<option value="BAKU HEYDAR ALIY">BAKU HEYDAR ALIY</option>
			<option value="BAMAKO">BAMAKO</option>
			<option value="BANGALORE">BANGALORE</option>
			<option value="BANGKOK INTL">BANGKOK INTL</option>
            <option value="BANGUI">BANGUI</option>
            <option value="BARCELONA">BARCELONA</option>
			<option value="BARI">BARI</option>
			<option value="BASEL-MULHOUSE">BASEL-MULHOUSE</option>
			<option value="BASTIA">BASTIA</option>
			<option value="BATNA">BATNA</option>
            <option value="BEIJING CAPITAL">BEIJING CAPITAL</option>
            <option value="BEIRUT">BEIRUT</option>
			<option value="BEJAIA">BEJAIA</option>
			<option value="BELFAST">BELFAST</option>
			<option value="BELGRADE">BELGRADE</option>
			<option value="BELO HORIZONTE T">BELO HORIZONTE T</option>

			<option value="BERGEN">BERGEN</option>

			<option value="BERLIN SCHOENEFE">BERLIN SCHOENEFE</option>
			<option value="BERLIN TEGEL">BERLIN TEGEL</option>
			<option value="BERNE">BERNE</option>
			<option value="BIARRITZ">BIARRITZ</option>
			<option value="BILBAO">BILBAO</option>

			<option value="BILLUND">BILLUND</option>

			<option value="BIRMINGHAM">BIRMINGHAM</option>
			<option value="BISKRA">BISKRA</option>
			<option value="BOA VISTA">BOA VISTA</option>
			<option value="BODRUM MILAS">BODRUM MILAS</option>
			<option value="BOGOTA">BOGOTA</option>

			<option value="BOLOGNA">BOLOGNA</option>

			<option value="BORDEAUX">BORDEAUX</option>
			<option value="BOSTON">BOSTON</option>
			<option value="BOURGAS">BOURGAS</option>
			<option value="BRATISLAVA">BRATISLAVA</option>
			<option value="BRAZZAVILLE">BRAZZAVILLE</option>

			<option value="BREMEN">BREMEN</option>

			<option value="BREST">BREST</option>
			<option value="BRINDISI">BRINDISI</option>
			<option value="BRISTOL">BRISTOL</option>
			<option value="BRIVE LA GAILLAR">BRIVE LA GAILLAR</option>
			<option value="BRUSSELS">BRUSSELS</option>

			<option value="BUCHAREST BANEAS">BUCHAREST BANEAS</option>

			<option value="BUCHAREST OTOPEN">BUCHAREST OTOPEN</option>
			<option value="BUDAPEST">BUDAPEST</option>
			<option value="BUENOS AIRES MIN">BUENOS AIRES MIN</option>
			<option value="BURGOS">BURGOS</option>
			<option value="CAEN">CAEN</option>

			<option value="CAGLIARI">CAGLIARI</option>

			<option value="CAIRO">CAIRO</option>
			<option value="CALABAR">CALABAR</option>
			<option value="CALGARY">CALGARY</option>
			<option value="CALVI">CALVI</option>
			<option value="CANCUN">CANCUN</option>

			<option value="CARACAS">CARACAS</option>

			<option value="CARDIFF">CARDIFF</option>
			<option value="CASABLANCA M. V">CASABLANCA M. V</option>
			<option value="CASTRES-MAZAMET">CASTRES-MAZAMET</option>
			<option value="CATANIA">CATANIA</option>
			<option value="CAYENNE">CAYENNE</option>

			<option value="CHALONS VATRY">CHALONS VATRY</option>

			<option value="CHARLOTTE">CHARLOTTE</option>
			<option value="CHATEAUROUX">CHATEAUROUX</option>
			<option value="CHERBOURG">CHERBOURG</option>
			<option value="CHICAGO O'HARE I">CHICAGO O'HARE I</option>
			<option value="CINCINNATI">CINCINNATI</option>

			<option value="CLERMONT FERRAND">CLERMONT FERRAND</option>

			<option value="COLOGNE">COLOGNE</option>
			<option value="COLOMBO">COLOMBO</option>
			<option value="CONAKRY">CONAKRY</option>
			<option value="CONSTANTINE">CONSTANTINE</option>
			<option value="COPENHAGEN">COPENHAGEN</option>

			<option value="CORK">CORK</option>

			<option value="COTONOU">COTONOU</option>
			<option value="CREIL">CREIL</option>
			<option value="DAKAR">DAKAR</option>
			<option value="DALLAS-FT WORTH">DALLAS-FT WORTH</option>
			<option value="DAMASCUS">DAMASCUS</option>

			<option value="DAMMAM">DAMMAM</option>

			<option value="DELHI">DELHI</option>
			<option value="DETROIT WORLDGAT">DETROIT WORLDGAT</option>
			<option value="DHAKA">DHAKA</option>
			<option value="DIJON">DIJON</option>
			<option value="DJERBA">DJERBA</option>

			<option value="DJIBOUTI">DJIBOUTI</option>

			<option value="DOHA">DOHA</option>
			<option value="DOLE">DOLE</option>
			<option value="DOUALA">DOUALA</option>
			<option value="DUBAI">DUBAI</option>
			<option value="DUBLIN">DUBLIN</option>

			<option value="DUBROVNIK">DUBROVNIK</option>

			<option value="DUSHANBE">DUSHANBE</option>
			<option value="DUSSELDORF">DUSSELDORF</option>
			<option value="DZAOUDZI">DZAOUDZI</option>
			<option value="EDINBURGH">EDINBURGH</option>
			<option value="ESSAOUIRA">ESSAOUIRA</option>

			<option value="EVERETT">EVERETT</option>

			<option value="EXETER">EXETER</option>
			<option value="FARO">FARO</option>
			<option value="FEZ">FEZ</option>
			<option value="FIGARI">FIGARI</option>
			<option value="FLORENCE">FLORENCE</option>

			<option value="FORLI">FORLI</option>

			<option value="FORT DE FRANCE">FORT DE FRANCE</option>
			<option value="FRANKFURT">FRANKFURT</option>
			<option value="FRIEDRICHSHAFEN">FRIEDRICHSHAFEN</option>
			<option value="FUNCHAL">FUNCHAL</option>
			<option value="GENEVA">GENEVA</option>

			<option value="GENOA">GENOA</option>

			<option value="GLASGOW">GLASGOW</option>
			<option value="GLASGOW PRESTWIC">GLASGOW PRESTWIC</option>
			<option value="GOTHENBURG">GOTHENBURG</option>
			<option value="GUADALAJARA">GUADALAJARA</option>
			<option value="GUANGZHOU">GUANGZHOU</option>

			<option value="HAMBURG">HAMBURG</option>

			<option value="HANOI">HANOI</option>
			<option value="HANOVER">HANOVER</option>
			<option value="HASSI MESSAOUD">HASSI MESSAOUD</option>
			<option value="HAVANA">HAVANA</option>
			<option value="HELSINKI">HELSINKI</option>

			<option value="HERAKLION">HERAKLION</option>

			<option value="HO CHI MINH CITY">HO CHI MINH CITY</option>
			<option value="HONG KONG">HONG KONG</option>
			<option value="HOUSTON INTERCON">HOUSTON INTERCON</option>
			<option value="HURGHADA">HURGHADA</option>
			<option value="IBIZA">IBIZA</option>

			<option value="INDIANAPOLIS">INDIANAPOLIS</option>

			<option value="ISLAMABAD">ISLAMABAD</option>
			<option value="ISTANBUL">ISTANBUL</option>
			<option value="ISTRES">ISTRES</option>
			<option value="IZMIR ADNAN MEND">IZMIR ADNAN MEND</option>
			<option value="JEDDAH">JEDDAH</option>

			<option value="JERSEY">JERSEY</option>

			<option value="JOHANNESBURG">JOHANNESBURG</option>
			<option value="KABUL">KABUL</option>
			<option value="KALININGRAD">KALININGRAD</option>
			<option value="KERKYRA">KERKYRA</option>
			<option value="KIEV BORISPOL">KIEV BORISPOL</option>

			<option value="KINSHASA">KINSHASA</option>

			<option value="KISHINEV">KISHINEV</option>
			<option value="KOS">KOS</option>
			<option value="KRAKOW">KRAKOW</option>
			<option value="KUALA LUMPUR">KUALA LUMPUR</option>
			<option value="KUWAIT">KUWAIT</option>

			<option value="LAGOS">LAGOS</option>

			<option value="LAHORE">LAHORE</option>
			<option value="LAMEZIA-TERME">LAMEZIA-TERME</option>
			<option value="LANNION">LANNION</option>
			<option value="LARNACA">LARNACA</option>
			<option value="LE HAVRE">LE HAVRE</option>

			<option value="LE PUY">LE PUY</option>

			<option value="LEEDS">LEEDS</option>
			<option value="LEIPZIG">LEIPZIG</option>
			<option value="LEON">LEON</option>
			<option value="LIBREVILLE">LIBREVILLE</option>
			<option value="LIEGE">LIEGE</option>

			<option value="LILLE">LILLE</option>

			<option value="LIMOGES">LIMOGES</option>
			<option value="LISBON">LISBON</option>
			<option value="LIVERPOOL">LIVERPOOL</option>
			<option value="LJUBLJANA">LJUBLJANA</option>
			<option value="LOME">LOME</option>

			<option value="LONDON">LONDON</option>

			<option value="LONDON CITY">LONDON CITY</option>
			<option value="LONDON LUTON">LONDON LUTON</option>
			<option value="LONDON-GATWICK">LONDON-GATWICK</option>
			<option value="LONDON-LHR">LONDON-LHR</option>
			<option value="LONDON-STANSTED">LONDON-STANSTED</option>

			<option value="LONGYEARBYEN">LONGYEARBYEN</option>

			<option value="LORIENT">LORIENT</option>
			<option value="LOS ANGELES">LOS ANGELES</option>
			<option value="LOUISVILLE">LOUISVILLE</option>
			<option value="LOURDES-TARBES">LOURDES-TARBES</option>
			<option value="LUANDA">LUANDA</option>

			<option value="LUXEMBOURG">LUXEMBOURG</option>

			<option value="LUXOR">LUXOR</option>
			<option value="LYON">LYON</option>
			<option value="MADRID">MADRID</option>
			<option value="MAHE-SEYCHELLES">MAHE-SEYCHELLES</option>
			<option value="MALABO">MALABO</option>

			<option value="MALAGA">MALAGA</option>

			<option value="MALMO STURUP">MALMO STURUP</option>
			<option value="MALTA">MALTA</option>
			<option value="MANCHESTER">MANCHESTER</option>
			<option value="MARRAKECH">MARRAKECH</option>
			<option value="MARSEILLE">MARSEILLE</option>

			<option value="MAURITIUS">MAURITIUS</option>

			<option value="MEMPHIS">MEMPHIS</option>
			<option value="METZ-NANCY">METZ-NANCY</option>
			<option value="MEXICO CITY">MEXICO CITY</option>
			<option value="MIAMI">MIAMI</option>
			<option value="MIKONOS">MIKONOS</option>

			<option value="MILAN">MILAN</option>

			<option value="MILAN LINATE">MILAN LINATE</option>
			<option value="MILAN MALPENSA">MILAN MALPENSA</option>
			<option value="MINNEAPOLIS">MINNEAPOLIS</option>
			<option value="MINSK">MINSK</option>
			<option value="MONASTIR">MONASTIR</option>

			<option value="MONTEVIDEO">MONTEVIDEO</option>

			<option value="MONTPELLIER">MONTPELLIER</option>
			<option value="MONTREAL">MONTREAL</option>
			<option value="MONTREAL TRUDEAU">MONTREAL TRUDEAU</option>
			<option value="MOSCOW SHEREMETY">MOSCOW SHEREMETY</option>
			<option value="MUENSTER">MUENSTER</option>

			<option value="MULHOUSE-BASEL">MULHOUSE-BASEL</option>

			<option value="MUMBAI (BOMBAY)">MUMBAI (BOMBAY)</option>
			<option value="MUNICH">MUNICH</option>
			<option value="NAGOYA">NAGOYA</option>
			<option value="NAIROBI">NAIROBI</option>
			<option value="NANTES">NANTES</option>

			<option value="NAPLES">NAPLES</option>

			<option value="NDJAMENA">NDJAMENA</option>
			<option value="NEW YORK">NEW YORK</option>
			<option value="NEW YORK JFK">NEW YORK JFK</option>
			<option value="NEW YORK NEWARK">NEW YORK NEWARK</option>
			<option value="NEWCASTLE">NEWCASTLE</option>

			<option value="NIAMEY">NIAMEY</option>

			<option value="NICE">NICE</option>
			<option value="NOSSI-BE">NOSSI-BE</option>
			<option value="NOTTINGHAM EAST">NOTTINGHAM EAST</option>
			<option value="NOUAKCHOTT">NOUAKCHOTT</option>
			<option value="NOUMEA">NOUMEA</option>

			<option value="NUREMBERG">NUREMBERG</option>

			<option value="NYKOPING">NYKOPING</option>
			<option value="OLBIA">OLBIA</option>
			<option value="OMAHA">OMAHA</option>
			<option value="ORAN">ORAN</option>
			<option value="OSAKA KANSAI INT">OSAKA KANSAI INT</option>

			<option value="OSLO">OSLO</option>

			<option value="OUAGADOUGOU">OUAGADOUGOU</option>
			<option value="OUARZAZATE">OUARZAZATE</option>
			<option value="OUJDA">OUJDA</option>
			<option value="OVDA">OVDA</option>
			<option value="OVIEDO">OVIEDO</option>

			<option value="PALERMO">PALERMO</option>

			<option value="PALMA MALLORCA">PALMA MALLORCA</option>
			<option value="PAPEETE-TAHITI">PAPEETE-TAHITI</option>
			<option value="PARIS">PARIS</option>
			<option value="PARIS CDG">PARIS CDG</option>
			<option value="PARIS LE BOURGET">PARIS LE BOURGET</option>

			<option value="PARIS ORLY">PARIS ORLY</option>

			<option value="PATRAS">PATRAS</option>
			<option value="PAU">PAU</option>
			<option value="PENANG">PENANG</option>
			<option value="PERIGUEUX">PERIGUEUX</option>
			<option value="PERPIGNAN">PERPIGNAN</option>

			<option value="PESCARA">PESCARA</option>

			<option value="PHILADELPHIA">PHILADELPHIA</option>
			<option value="PHUKET">PHUKET</option>
			<option value="PISA">PISA</option>
			<option value="PITTSBURGH">PITTSBURGH</option>
			<option value="PODGORICA">PODGORICA</option>

			<option value="POINTE A PITRE">POINTE A PITRE</option>

			<option value="POINTE NOIRE">POINTE NOIRE</option>
			<option value="PONTA DELGADA">PONTA DELGADA</option>
			<option value="PORT HARCOURT">PORT HARCOURT</option>
			<option value="PORTO">PORTO</option>
			<option value="PRAGUE">PRAGUE</option>

			<option value="PRAIA">PRAIA</option>

			<option value="PUERTO DEL ROSAR">PUERTO DEL ROSAR</option>
			<option value="PUERTO PLATA">PUERTO PLATA</option>
			<option value="PULA">PULA</option>
			<option value="PUNTA CANA">PUNTA CANA</option>
			<option value="QUEBEC">QUEBEC</option>

			<option value="QUIMPER">QUIMPER</option>

			<option value="RABAT">RABAT</option>
			<option value="RECIFE">RECIFE</option>
			<option value="RENNES">RENNES</option>
			<option value="REYKJAVIK KEFLAV">REYKJAVIK KEFLAV</option>
			<option value="RHODES">RHODES</option>

			<option value="RIGA">RIGA</option>

			<option value="RIMINI">RIMINI</option>
			<option value="RIO JANEIRO INTL">RIO JANEIRO INTL</option>
			<option value="RIYADH">RIYADH</option>
			<option value="RODEZ">RODEZ</option>
			<option value="ROME">ROME</option>

			<option value="ROME CIAMPINO">ROME CIAMPINO</option>

			<option value="ROME FIUMICINO">ROME FIUMICINO</option>
			<option value="ROSTOCK-LAAGE">ROSTOCK-LAAGE</option>
			<option value="ROVANIEMI">ROVANIEMI</option>
			<option value="SAARBRUECKEN">SAARBRUECKEN</option>
			<option value="SABIHA GOKCEN">SABIHA GOKCEN</option>

			<option value="SALAMANCA">SALAMANCA</option>

			<option value="SALT LAKE CITY">SALT LAKE CITY</option>
			<option value="SALVADOR">SALVADOR</option>
			<option value="SAMANA">SAMANA</option>
			<option value="SAN FRANCISCO">SAN FRANCISCO</option>
			<option value="SAN SALVADOR">SAN SALVADOR</option>

			<option value="SANA'A">SANA'A</option>

			<option value="SANTIAGO">SANTIAGO</option>
			<option value="SANTIAGO DE COMP">SANTIAGO DE COMP</option>
			<option value="SANTIAGO DE CUBA">SANTIAGO DE CUBA</option>
			<option value="SANTORIN-THIRA">SANTORIN-THIRA</option>
			<option value="SAO PAULO GUARUL">SAO PAULO GUARUL</option>

			<option value="SARAJEVO">SARAJEVO</option>

			<option value="SEATTLE">SEATTLE</option>
			<option value="SEOUL INCHEON">SEOUL INCHEON</option>
			<option value="SETIF">SETIF</option>
			<option value="SEVILLA">SEVILLA</option>
			<option value="SFAX">SFAX</option>

			<option value="SHANGHAI PU DONG">SHANGHAI PU DONG</option>

			<option value="SHANNON">SHANNON</option>
			<option value="SHARM EL SHEIKH">SHARM EL SHEIKH</option>
			<option value="SINGAPORE">SINGAPORE</option>
			<option value="SOFIA">SOFIA</option>
			<option value="SOLENZARA">SOLENZARA</option>

			<option value="SOUTHAMPTON">SOUTHAMPTON</option>

			<option value="SPLIT">SPLIT</option>
			<option value="ST DENIS-REUNION">ST DENIS-REUNION</option>
			<option value="ST MAARTEN">ST MAARTEN</option>
			<option value="ST PETERSBOURG">ST PETERSBOURG</option>
			<option value="STAVANGER">STAVANGER</option>

			<option value="STO DOMINGO">STO DOMINGO</option>

			<option value="STOCKHOLM ARLAND">STOCKHOLM ARLAND</option>
			<option value="STRASBOURG">STRASBOURG</option>
			<option value="STUTTGART">STUTTGART</option>
			<option value="TABA">TABA</option>
			<option value="TABARKA">TABARKA</option>

			<option value="TAIPEI">TAIPEI</option>

			<option value="TALLINN">TALLINN</option>
			<option value="TAMANRASSET">TAMANRASSET</option>
			<option value="TANGIER">TANGIER</option>
			<option value="TASHKENT">TASHKENT</option>
			<option value="TBILISI">TBILISI</option>

			<option value="TEHRAN">TEHRAN</option>

			<option value="TEL AVIV">TEL AVIV</option>
			<option value="TENERIFE SUR REI">TENERIFE SUR REI</option>
			<option value="TERCEIRA ISLAND">TERCEIRA ISLAND</option>
			<option value="TETUAN">TETUAN</option>
			<option value="THESSALONIKI">THESSALONIKI</option>

			<option value="TIANJIN">TIANJIN</option>

			<option value="TIMISOARA">TIMISOARA</option>
			<option value="TIVAT">TIVAT</option>
			<option value="TLEMCEN">TLEMCEN</option>
			<option value="TOKYO">TOKYO</option>
			<option value="TOKYO NARITA">TOKYO NARITA</option>

			<option value="TORONTO PEARSON">TORONTO PEARSON</option>

			<option value="TOULON">TOULON</option>
			<option value="TOULOUSE">TOULOUSE</option>
			<option value="TOURS">TOURS</option>
			<option value="TOZEUR">TOZEUR</option>
			<option value="TRIESTE">TRIESTE</option>

			<option value="TRIPOLI">TRIPOLI</option>

			<option value="TUNIS">TUNIS</option>
			<option value="TURIN">TURIN</option>
			<option value="VALENCIA">VALENCIA</option>
			<option value="VALLADOLID">VALLADOLID</option>
			<option value="VANCOUVER">VANCOUVER</option>

			<option value="VARNA">VARNA</option>
            <option value="VENICE">VENICE</option>
			<option value="VERONA">VERONA</option>
			<option value="VIENNA">VIENNA</option>
			<option value="VIGO">VIGO</option>
			<option value="VOLOS">VOLOS</option>

			<option value="WARSAW">WARSAW</option>
            <option value="WASHINGTON DULLE">WASHINGTON DULLE</option>
			
			<option value="YAOUNDE NSIMALEN">YAOUNDE NSIMALEN</option>
			<option value="YEREVAN">YEREVAN</option>
			
			<option value="ZAGREB">ZAGREB</option>
			<option value="ZARAGOZA">ZARAGOZA</option>
            <option value="ZURICH">ZURICH</option>

	   </select></div>

   <div class="divelem"><label for="">Date et Heure du Vol</label></div>
   <div class="divelempick"><input type="text" id="heurevol" class="datepicker" name="heurevol"></div>
   <div class="calend"></div>
   <div class="clear"></div>
   <div class="divrendez"><strong>Date et heure de prise en charge :</strong></div>
   <div class="prise">*** (Aeroports) rendez-vous 4 heures avant le vol pour les départs vers votre aéroports.</div>
   <div class="prise">*** (Aeroports) rendez-vous 1 heure avant votre atterrissage.</div>
   <div class="space"></div>
   <div class="divelem"><label for="">Date et Heure du rendez-vous <span class="yellow">*</span></label></div>
   <div class="divelempick"><input type="text" id="rendezvous" class="datepicker" name="rendezvous"></div>
   <div class="calend"></div>
   <div class="clear"></div>
   <div class="divrendez"><strong>Adresse :</strong></div>
   <div class="prise">*** Adresse de prise en charge si vous allez vers l'aéroport ou un autre lieu :</div>
   <div class="prise">*** Adresse de destination si retour de l'aéroport :</div>
   <div class="space"></div>
   <div class="divelem">Hotel name</div>
   <div class="divelem2"><input name="hotel" class="picker" type="text"></div>
   <div class="divelem">Phone number</div>
   <div class="divelem2"><input name="tel_hot" class="picker" type="text"></div>
   <div class="divelem">Address <span class="yellow">*</span></div>
   <p><textarea name="adr_hot" rows=4 cols=30></textarea></p>
   <div class="clear"></div>
   <div class="space2"></div>
   <div id="js_errors"></div>
   <div class="divpreced">
   <a id="linkButton" href="javascript:history.go(-1)">Retour</a>
   </div>
   <div class="divsubmit">
   <input type="submit" id="submitButton" value="Envoyer" />
   </div>
   
 </form>
 </div>
 </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
