<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>

<body>

<?php
include("fonction_api.php");
$requete = construit_url_paypal();
$requete = $requete."&METHOD=SetExpressCheckout".
			"&CANCELURL=".urlencode("http://127.0.0.1/easywayshuttle/cancel.php").
			"&RETURNURL=".urlencode("http://127.0.0.1/easywayshuttle/return.php").
			"&AMT=".$_POST['mont'].
			"&CURRENCYCODE=EUR".
			"&DESC=".urlencode("reservastion easy way shuttle").
			"&LOCALECODE=FR".
			"&HDRIMG=".urlencode("http://www.siteduzero.com/Templates/images/designs/2/logo_sdz_fr.png");

$ch = curl_init($requete);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$resultat_paypal = curl_exec($ch);

if (!$resultat_paypal)
	{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}
else
{
	$liste_param_paypal = recup_param_paypal($resultat_paypal); // Lance notre fonction qui dispatche le résultat obtenu en un array

	// Si la requête a été traitée avec succès
	if ($liste_param_paypal['ACK'] == 'Success')
	{
		// Redirige le visiteur sur le site de PayPal
		header("Location: https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=".$liste_param_paypal['TOKEN']);
                exit();
	}
	else // En cas d'échec, affiche la première erreur trouvée.
	{echo "<p>Erreur de communication avec le serveur PayPal.<br />".$liste_param_paypal['L_SHORTMESSAGE0']."<br />".$liste_param_paypal['L_LONGMESSAGE0']."</p>";}		
}
curl_close($ch);
?>



</body>
</html>
