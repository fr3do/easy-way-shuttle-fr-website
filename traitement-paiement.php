<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>

<body>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type='hidden' value="Montant_Achat" name="amount" />
<input name="currency_code" type="hidden" value="EUR" />
<input name="shipping" type="hidden" value="0.00" />
<input name="tax" type="hidden" value="0.00" />
<input name="return" type="hidden" value="http://www.easy-way-shuttle.fr/notification-de-paiement-valide.php" />
<input name="cancel_return" type="hidden" value="http:www.easy-way-shuttle.fr/notification-de-paiement-annule.php" />
<input name="notify_url" type="hidden" value="http:www.easy-way-shuttle.fr/ipn-validation-de-paiement.php" />
<input name="cmd" type="hidden" value="_xclick" />
<input name="business" type="hidden" value="easywayshuttle@hotmail.fr" />
<input name="item_name" type="hidden" value="reservation easy way shuttle" />
<input name="no_note" type="hidden" value="1" />
<input name="lc" type="hidden" value="FR" />
<input name="bn" type="hidden" value="PP-BuyNowBF" />
<input name="custom" type="hidden" value="ID_ACHETEUR" />
<input name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />

</form>
</body>
</html>
