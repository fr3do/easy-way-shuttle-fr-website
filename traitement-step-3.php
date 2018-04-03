<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Vérification et validation</title>
<link href="style-pages.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/aristo-css/Aristo.css" rel="stylesheet" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.8.13/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(function(){

	$("#linkButton, #submitButton").button();

	});
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

<?php include("entete.php"); ?>
<?php include("menu.php"); ?>

<div id="conteneur">

<div class="contvalidinfos">
	<div class="titlevalid">
        <h1><span class="blue">Traitement</span><span class="logo2">Réservation</span></h1>
        <p class="claim3">Vérification et validation de votre réservastion</p>
    </div>
	
<div class="clear"></div>	
<div class="separ"><img src="images/images-design/sep.png"></div>

<div class="textevalidinfos">

<?php 

//on récupère nos valeurs 
$from = $_POST['from']; 
$to = $_POST['to']; 
$selec = $_POST['selec']; 
$trip = $_POST['trip']; 
$nb = $_POST['nb']; 
$amount = $_POST['amount'];
$last_name = $_POST['last_name']; 
$first_name = $_POST['first_name']; 
$comp = $_POST['comp'];
$pays = $_POST['pays'];
$tel = $_POST['tel']; 
$payer_email = $_POST['payer_email'];
//informations sur le vol
$nfl = $_POST['nfl'];
$oai = $_POST['oai'];  
$heurevol = $_POST['heurevol'];
//Date et heure de prise en charge
$rendezvous = $_POST['rendezvous'];
//Adresse
$hotel = $_POST['hotel'];
$tel_hot = $_POST['tel_hot'];
$adr_hot = $_POST['adr_hot'];  
?>


<div class="divalid1">
<?php
//on les affiches 
echo 'Departure from : '.$from.'</br>'; 
echo 'Destination to : '.$to.'</br>'; 
echo 'Your choice : '.$selec.'</br>'; 
echo 'Your trip : '.$trip.'</br>'; 
echo 'Number passengers : '.$nb.'</br>';
?>
</div>

<div class="divalid2">
<?php
echo 'Last Name : '.$last_name.'</br>';
echo 'First Name : '.$first_name.'</br>';  
echo 'Compagny : '.$comp.'</br>';
echo 'Contry : '.$pays.'</br>';
echo 'Telephone : '.$tel.'</br>'; 
echo 'E-mail : '.$payer_email.'</br>';
?>
</div>

<div class="divalid3">
<?php
echo 'Flight No : '.$nfl.'</br>'; 
echo 'Origin Airport : '.$oai.'</br>'; 
echo 'Date et Heure de votre vol : '.$heurevol.'</br>';
?>
</div>

<div class="divalid4">
<?php
echo 'Date et Heure de prise en charge : '.$rendezvous.'</br>';
echo 'Hotel name : '.$hotel.'</br>';
echo 'Phone number : '.$tel_hot.'</br>';
echo 'Address : '.$adr_hot.'</br>';
?>
</div>

<div class="divalid5">
<?php
echo 'Total en EUR : '.$amount.'</br>';
?>
</div>


<?php
//connexion a la base de données commandes
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=db410054490.db.1and1.com;dbname=db410054490', 'dbo410054490', 'neoneo94', $pdo_options);
//envoie des données dans la table clients		  
    $req = $bdd->prepare('INSERT INTO clients(nom, prenom, pays, adresse, provenance, destination, vol, trip, personnes, email, phone) VALUES(:nom, :prenom, :pays, :adresse, :provenance, :destination, :vol, :trip, :personnes, :email, :phone)');
    $req->execute(array(
	   'nom' => $first_name,
	   'prenom' => $last_name,
	   'pays' => $pays,
	   'adresse' => $adr_hot,
	   'provenance' => $from,
	   'destination' => $to,
	   'vol' =>$nfl,
	   'trip' => $trip,
	   'personnes' => $nb,
	   'email' => $payer_email,
	   'phone' =>$tel
	));


//fonction envois d'emails corps du message
$msg_body  = "Merci pour votre réservation sur easy way shuttle !\n";
$msg_body .= "\n";	
$msg_body .= "Un chauffeur vous attendra à l'adresse que vous nous avez indiqué.\n";
$msg_body .= "Voici le détail de votre commande :\n";
$msg_body .= "\n";
$msg_body .= "Votre Transport :\n";		  
$msg_body .= "From:  $from,\n";
$msg_body .= "To:  $to\n";
$msg_body .= "Nombre de personnes:  $nb\n";
$msg_body .= "Trip:  $trip\n";
$msg_body .= "Selection:  $selec\n";
$msg_body .= "Montant total:  $amount\n";
$msg_body .= "\n";
$msg_body .= "Vos Coordonnées :\n";
$msg_body .= "Nom:  $first_name,\n";
$msg_body .= "Prénom:  $last_name\n";
$msg_body .= "Téléphone:  $tel\n";
$msg_body .= "E-Mail:  $payer_email\n";
$msg_body .= "Sociéte:  $comp\n";
$msg_body .= "Pays:  $pays\n";
$msg_body .= "\n";

//informations sur le vol
$msg_body .= "Informations sur le vol :\n";
$msg_body .= "Détails du vol:  $nfl,\n";
$msg_body .= "Aéroport d'origine:  $oai\n";
$msg_body .= "Date et heure du vol :  le : $heurevol\n";
$msg_body .= "\n";

//Date et heure de prise en charge
$msg_body .= "Date et heure de prise en charge :  le : $rendezvous\n";
$msg_body .= "\n";

//Adresse
$msg_body .= "Adresse :\n";
$msg_body .= "Hotel name:  $hotel\n";
$msg_body .= "Téléphone de l'hotel:  $tel_hot\n";
$msg_body .= "Address:  $adr_hot\n";
$msg_body .= "\n";
$msg_body .= "Vous recevrez prochainement une facture au format PDF\n";
$msg_body .= "easy way shuttle vous remercie de votre confiance et vous shouhaite un très bon voyage !\n";



//fonction envois d'emails code d'envoie

ini_set('sendmail_from', 'contact@easy-way-shuttle.fr'); 
if (mail($payer_email, 'Confirmation de Reservation sur easy way Shuttle', $msg_body)){

    echo "<font color='#03508b'>";
    echo 'Veuillez vérifier vos informations puis valider afin procéder au paiement';
	echo "</font>";
}
else {
    echo 'Votre réservation n\'as pas été prise en compte veuillez vérifier vos informations sur la page précédente en cliquant sur le bouton';
}

?>

<?php
//fonction envois d'emails code d'envoie
     // Le message
     $msg_body = wordwrap($msg_body, 70);
     // Envoi du mail
     mail('contact@easy-way-shuttle.fr', 'Confirmation de Reservation sur easy way Shuttle', $msg_body);
?>

<form name="form1" METHOD="post" ACTION="traitement-step-4.php">

<input name="from" type="hidden" value="<?php echo $_POST['from']; ?>" />
<input name="to" type="hidden" value="<?php echo $_POST['to']; ?>" />
<input name="selec" type="hidden" value="<?php echo $_POST['selec']; ?>" />
<input name="trip" type="hidden" value="<?php echo $_POST['trip']; ?>" />
<input name="nb" type="hidden" value="<?php echo $_POST['nb']; ?>" />

<input name="amount" type="hidden" value="<?php echo $_POST['amount']; ?>" />
<input name="last_name" type="hidden" value="<?php echo $_POST['last_name']; ?>" />
<input name="first_name" type="hidden" value="<?php echo $_POST['first_name']; ?>" />
<input name="comp" type="hidden" value="<?php echo $_POST['comp']; ?>" />
<input name="pays" type="hidden" value="<?php echo $_POST['pays']; ?>" />
<input name="tel" type="hidden" value="<?php echo $_POST['tel']; ?>" />
<input name="payer_email" type="hidden" value="<?php echo $_POST['payer_email']; ?>" />

<input name="nfl" type="hidden" value="<?php echo $_POST['nfl']; ?>" />
<input name="oai" type="hidden" value="<?php echo $_POST['oai']; ?>" />
<input name="heurevol" type="hidden" value="<?php echo $_POST['heurevol']; ?>" />
<input name="rendezvous" type="hidden" value="<?php echo $_POST['rendezvous']; ?>" />
<input name="hotel" type="hidden" value="<?php echo $_POST['hotel']; ?>" />
<input name="tel_hot" type="hidden" value="<?php echo $_POST['tel_hot']; ?>" />
<input name="adr_hot" type="hidden" value="<?php echo $_POST['adr_hot']; ?>" />

<div class="contbouton2">
	<div class="preced2"><a id="linkButton" href="tarifs-reservations.php">Retour</a></div>
	<div class="sub2"><input type="submit" id="submitButton" value="Valider" /></div>
</div>

</form>

</div>
</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>


</body>
</html>
