<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>

<body>

<?php
  function construit_url_paypal()
  {
	$api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?'; // Site de l'API PayPal. On ajoute d�j� le ? afin de concat�ner directement les param�tres.
	$version = 87.0; // Version de l'API
	
	$user = 'yaya_1331845761_biz_api1.numericable.fr'; // Utilisateur API
	$pass = '1331845792'; // Mot de passe API
	$signature = 'AXN5KsyCigA5o0nxEjUrs79F7hPnAPi3DrZLoWLqSmQfqB.0DdgRx6zL'; // Signature de l'API

	$api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature; // Ajoute tous les param�tres

	return 	$api_paypal; // Renvoie la cha�ne contenant tous nos param�tres.
  }
  
  function recup_param_paypal($resultat_paypal)
  {
	$liste_parametres = explode("&",$resultat_paypal); // Cr�e un tableau de param�tres
	foreach($liste_parametres as $param_paypal) // Pour chaque param�tre
	{
		list($nom, $valeur) = explode("=", $param_paypal); // S�pare le nom et la valeur
		$liste_param_paypal[$nom]=urldecode($valeur); // Cr�e l'array final
	}
	return $liste_param_paypal; // Retourne l'array
  }
  
  
?>


</body>
</html>
