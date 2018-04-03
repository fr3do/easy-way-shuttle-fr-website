<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>

<body>

<?php
session_start();
include("fonction_api.php"); // On importe la page cr��e pr�c�demment
$requete = construit_url_paypal(); // Construit les options de base

// On ajoute le reste des options
// La fonction urlencode permet d'encoder au format URL les espaces, slash, deux points, etc.)
$requete = $requete."&METHOD=DoExpressCheckoutPayment".
			"&TOKEN=".htmlentities($_GET['token'], ENT_QUOTES). // Ajoute le jeton qui nous a �t� renvoy�
			"&AMT=10.0".
			"&CURRENCYCODE=EUR".
			"&PayerID=".htmlentities($_GET['PayerID'], ENT_QUOTES). // Ajoute l'identifiant du paiement qui nous a �galement �t� renvoy�
			"&PAYMENTACTION=sale";

// Initialise notre session cURL. On lui donne la requ�te � ex�cuter.
$ch = curl_init($requete);

// Modifie l'option CURLOPT_SSL_VERIFYPEER afin d'ignorer la v�rification du certificat SSL. Si cette option est � 1, une erreur affichera que la v�rification du certificat SSL a �chou�, et rien ne sera retourn�. 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Retourne directement le transfert sous forme de cha�ne de la valeur retourn�e par curl_exec() au lieu de l'afficher directement. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// On lance l'ex�cution de la requ�te URL et on r�cup�re le r�sultat dans une variable
$resultat_paypal = curl_exec($ch);

if (!$resultat_paypal) // S'il y a une erreur, on affiche "Erreur", suivi du d�tail de l'erreur.
	{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}
// S'il s'est ex�cut� correctement, on effectue les traitements...
else
{
	$liste_param_paypal = recup_param_paypal($resultat_paypal); // Lance notre fonction qui dispatche le r�sultat obtenu en un array
	
	// On affiche tous les param�tres afin d'avoir un aper�u global des valeurs exploitables (pour vos traitements). Une fois que votre page sera comme vous le voulez, supprimez ces 3 lignes. Les visiteurs n'auront aucune raison de voir ces valeurs s'afficher.
	echo "<pre>";
	print_r($liste_param_paypal);
	echo "</pre>";
	
	// Si la requ�te a �t� trait�e avec succ�s
	if ($liste_param_paypal['ACK'] == 'Success')
	{
		echo "<h3>Transaction r�ussie</h3>"; // On affiche la page avec les remerciements, et tout le tralala...
		// Mise � jour de la base de donn�es & traitements divers...
		mysql_query("UPDATE commandes SET etat='OK' WHERE id_commande='".$liste_param_paypal['TRANSACTIONID']."'");
	}
	else // En cas d'�chec, affiche la premi�re erreur trouv�e.
	{echo "<p>Erreur de communication avec le serveur PayPal.<br />".$liste_param_paypal['L_SHORTMESSAGE0']."<br />".$liste_param_paypal['L_LONGMESSAGE0']."</p>";}
}
// On ferme notre session cURL.
curl_close($ch);
?>

</body>
</html>
