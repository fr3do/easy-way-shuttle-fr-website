<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="contact@easy-way-shuttle.fr & +33.6.19.19.19.88 simple méthode pour une navette aeroport Paris CDG, Orly" />
<meta http-equiv="Content-Language" content="fr" />
<title>easy-way-shuttle | Contactez-nous pour une navette privé sur Paris</title>
<link type="text/css" href="css/aristo-css/Aristo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/social-css/style.css" type="text/css" media="screen">
<script src="jquery/jquery-social/jquery.min.js" type="text/javascript"></script>
<script src="jquery/jquery-social/jquery.jsocial.js" type="text/javascript"></script>		
		
<!-- Start google analytics section -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30184079-1']);
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

<?php include("flags.php"); ?>	
<?php include("entete.php"); ?>
<?php include("menu.php"); ?>

<div class="contcont">	
   <div class="conteneur-ui">	
   <div class="divcont-ui">
<?php

// La variable $verif, va nous permettre d'analyser si la sémantique de l'email est bonne
$verif="!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!";

// On protége nos variables
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$pays=$_POST["pays"];
$email=$_POST["email"];
$from=htmlspecialchars("From: ".$email);
$message=stripslashes(htmlspecialchars($_POST["message"]));

$msg  = "Coordonnées de l'expéditeur :\n";
$msg .= "\n";	
$msg .= "Nom : $nom\n";
$msg .= "Prénom : $prenom\n";
$msg .= "Pays : $pays\n";
$msg .= "\n";
$msg .= "Message de l'expéditeur :\n";
$msg .= "\n";
$msg .= "$message\n";


// On met ici notre email
$destinataire="contact@easy-way-shuttle.fr";

/* On place le sujet du message qui ici sera toujour le même
puisque dans la partie Html on la mis en caché avec comme valeur
"Vous avez un nouveau message"  */
$objet=$_POST['objet'];

// C'est bon on est OK, vérifion si l'email est valide, grâce à notre chtite REGEX
if(!preg_match($verif,$email))
{
        echo "Voter email n'est pas valide";
}

// On verifie si il y a un message
elseif (trim($message)=="")
{
   echo "Votre message est vide !";
}

// Si tout est OK on envoie l'email
else
{
        mail($destinataire,$objet,$msg,$from);
        echo "Votre message à bien été envoyé !";
}

?>
</div>
</div>
<div class="divcontcol">
   <div class="colvignpet">
   <div class="contsocial">
   <div class="socialin">
   <div class="social"></div>
   </div>
   </div>
</div>

   <div class="colvign1">
   <div class="comp"><a href="http://www.alitalia.com"><img src="images/images-bannieres/alitalia.jpg"></a></div>
   <div class="comp"><a href="http://www.easyjet.com"><img src="images/images-bannieres/easy-jet.jpg"></a></div>
   <div class="clear"></div>
   <div class="comp"><a href="http://www.iberia.com"><img src="images/images-bannieres/iberia.jpg"></a></div>
   <div class="comp"><a href="http://www.airfrance.com"><img src="images/images-bannieres/air-france.jpg"></a></div>
   <div class="clear"></div>
   <div class="comp"><a href="http://www.elal.co.il/ELAL/English/States/General/"><img src="images/images-bannieres/el-al.jpg"></a></div>
   <div class="comp"><a href="http://www.malaysiaairlines.com"><img src="images/images-bannieres/malaysia-airline.jpg"></a></div>
   <div class="clear"></div>
   </div>

   <div class="colvign2">
   <div class="comp2"><a href="http://www.airchina.com/"><img src="images/images-bannieres/air-china.jpg"></a></div>
   <div class="comp2"><a href="http://www.emirates.com/"><img src="images/images-bannieres/emirates.jpg"></a></div>

   </div>
   <div class="bgcase"></div>

</div>
</div>

<script type="text/javascript">
$('.social').jsocial({
twitter		:  'ryanolson',
facebook	:  'facebook.com',
linked		:  'linkedin.com',
youtube		:  'youtube.com',
feed		:  'thatryan',
center		: true,	
inline		: true
});
</script>

<?php include("footer.php"); ?>

</body>
</html>
