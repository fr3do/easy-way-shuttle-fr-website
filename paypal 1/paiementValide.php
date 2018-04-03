<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
<link href="style-pages.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include("entete.php"); ?>
<?php include("menu.php"); ?>
<div id="conteneur">
<div class="contvalid">
<div class="title">
        <h1>Traitement<span class="logo">Réservation</span></h1>
        <p class="claim">Validation de votre paiement</p>
    </div>
<div class="separ"><img src="images/images-design/sep.png"></div>

<div class="textevalid">Félicitation votre paiement a bien été enregistré !</div>

<?php
  // vérifier que payment_status a la valeur Completed
                if ( $payment_status == "Completed") {
                    // vérifier que txn_id n'a pas été précédemment traité: Créez une fonction qui va interroger votre base de données
                    if (VerifIXNID($txn_id) == 0) {
                        // vérifier que receiver_email est votre adresse email PayPal principale
                        if ( "votreEmailSeller" == $receiver_email) {
                            // vérifier que payment_amount et payment_currency sont corrects
                            // traiter le paiement
                         }
			  else {
				// Mauvaise adresse email paypal
			  }
			}
			else {
				// ID de transaction déjà utilisé
					}
			}
		  else {
		        	// Statut de paiement: Echec
		  }
?>	
</div>
</div>

</body>
</html>
