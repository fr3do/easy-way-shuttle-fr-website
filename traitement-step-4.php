<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Confirmation et paiement</title>
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
        <p class="claim3">Confirmation et paiement de votre réservastion</p>
    </div>
	
<div class="logopaypal">
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr>
<tr><td align="center"><a href="#" onclick="javascript:window.open('https://www.paypal.com/fr/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=500');"><img  src="https://www.paypal.com/fr_FR/FR/Marketing/i/logo/PayPal_logo_150x65.gif" border="0" alt="Logo PayPal standard"></a></td></tr></table><!-- PayPal Logo -->
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
echo 'Your selection : '.$selec.'</br>'; 
echo 'Your trip : '.$trip.'</br>'; 
echo 'Number of passengers : '.$nb.'</br>';
?>
</div>

<div class="divalid2">
<?php
echo 'Last Name : '.$last_name.'</br>';
echo 'First Name : '.$first_name.'</br>';  
echo 'Company : '.$comp.'</br>';
echo 'Pays : '.$pays.'</br>'; 
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

<?php
echo 'Total en EUR : '.$amount.'</br>';
?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<input type="hidden" name="amount" value="<?php echo $amount;?>" />
<input name="currency_code" type="hidden" value="EUR" />
<input name="shipping" type="hidden" value="0.00" />
<input name="tax" type="hidden" value="0.00" />
<input name="return" type="hidden" value="Success" />
<input name="cancel_return" type="hidden" value="Cancel" />
<input name="return" type="hidden" value="http://www.easy-way-shuttle.fr/notification-de-paiement-valide.php" />
<input name="cancel_return" type="hidden" value="http:www.easy-way-shuttle.fr/notification-de-paiement-annule.php" />
<input name="notify_url" type="hidden" value="http:www.easy-way-shuttle.fr/ipn-validation-de-paiement.php" />
<input name="cmd" type="hidden" value="_ext-enter" />
<input name="redirect_cmd" type="hidden" value="_xclick" />
<input type="hidden" name="first_name" value="<?php echo $first_name;?>" />
<input type="hidden" name="last_name" value="<?php echo $last_name;?>" />
<input name="business" type="hidden" value="easywayshuttle@hotmail.fr" />
<input name="item_name" type="hidden" value="Reservation sur easy way shuttle : <br><br>de : <?php echo $from;?><br><br>a : <?php echo $to;?>" />
<input name="no_note" type="hidden" value="1" />
<input name="lc" type="hidden" value="FR" />
<input name="bn" type="hidden" value="PP-BuyNowBF" />
<input name="custom" type="hidden" value="ID_ACHETEUR" />

<div class="subpay">
  <input name="submit" type="submit" id="submitButton" value="Payer maintenant" />
</div>
</form>
<div class="subpayafter"><a id="linkButton" href="paiement-au-chauffeur.php">Payer au chauffeur</a></div>
<div class="divpaypal">
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="#" onclick="javascript:window.open('https://www.paypal.com/fr/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=350');"><img  src="https://www.paypalobjects.com/en_US/FR/i/bnr/bnr_horizontal_solution_PP_327wx80h.gif" border="0" alt="Logos de solution PayPal"></a></td></tr></table><!-- PayPal Logo -->
</div>

</div>
</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
