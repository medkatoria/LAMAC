<?php

$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$mail = httmlspecialchars($_POST["phone"]);
$message = htmlspecialchars($_POST["message"]);

$mailSujet = "Prise de contact via le site internet";
$mailBody = "Bonjour, \n Une personne a pris contact via le formulaire du site internet. \n Voici les informations envoyées : \n Nom: $nom \n Prénom: $prenom\n Email: $mail \n Téléphone: $phone \n\n Ainsi que le message associé: $message".;
$mailTo = "igalaxia@gmail.com";

mail($mailTo,$mailSujet,$mailBody,$headers);
header("location: /index.html")
exit

?>
