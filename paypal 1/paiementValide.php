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
        <h1>Traitement<span class="logo">R�servation</span></h1>
        <p class="claim">Validation de votre paiement</p>
    </div>
<div class="separ"><img src="images/images-design/sep.png"></div>

<div class="textevalid">F�licitation votre paiement a bien �t� enregistr� !</div>

<?php
  // v�rifier que payment_status a la valeur Completed
                if ( $payment_status == "Completed") {
                    // v�rifier que txn_id n'a pas �t� pr�c�demment trait�: Cr�ez une fonction qui va interroger votre base de donn�es
                    if (VerifIXNID($txn_id) == 0) {
                        // v�rifier que receiver_email est votre adresse email PayPal principale
                        if ( "votreEmailSeller" == $receiver_email) {
                            // v�rifier que payment_amount et payment_currency sont corrects
                            // traiter le paiement
                         }
			  else {
				// Mauvaise adresse email paypal
			  }
			}
			else {
				// ID de transaction d�j� utilis�
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
