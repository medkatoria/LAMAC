<!DOCTYPE html>
<html>
  <head>
    <title>La Machine à Coudre</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Elna Pfaff  Singer Brother Bernina réparation réparation de machines réparation de machines à coudre réparation de machines à coudre Bulle réparation de machines à coudre Suisse vente et réparation vente et réparation de machines vente et réparation de machines à coudre vente et réparation de machines à coudre Bulle vente et réparation de machines à coudre Suisse fournitures aiguisage ciseaux machine machines coudre couture machine à coudre machines à coudre machine a coudre machines a coudre la machine à coudre la machine a coudre machineàcoudre machineacoudre lamachineàcoudre lamachineacoudre Bulle Gîte Gite Grande-Gîte Grande-Gite" />
    <meta name="description" content="Vente et réparation de machines à coudre (Elna partner)." />
    <meta name="robots" content="noindex,nofollow" />
    <link href="/files/id/favicon.png" rel="SHORTCUT ICON" type="image/png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
          * {
            font-family: "Roboto", sans-serif
          }
  </style>
</head>
<?php
$nom1 = htmlspecialchars($POST["nom"]);
$prenom1 = htmlspecialchars($POST["prenom"]);
$mail1 = htmlspecialchars($POST["mail"]);
$phone1 = htmlspecialchars($POST["phone"]);
$message1 = htmlspecialchars($POST["message"]);

$headers = "From: igalaxia@gmail.com";
$mailSujet = "Prise de contact via le site internet";
$mailBody = "Bonjour, \n Une personne a pris contact via le formulaire du site internet. \n Voici les informations envoyées : \n Nom: $nom1 \n Prénom: $prenom1 \n Email: $mail1 \n Téléphone: $phone1 \n\n Ainsi que le message associé: $message1".;
$mailTo = "igalaxia@gmail.com";

mail($mailTo,$mailSujet,$mailBody,$headers);
?>


<body class="w3-light-grey">

	<!-- Entete -->
	<header class="w3-display-container w3-content w3-center w3-section" style="max-width:1200px;">
		<img class="w3-image" src="/files/id/header.jpg" style="max-width:1200px;">
    <div class="w3-display-middle w3-padding-large w3-border w3-small w3-text-red w3-light-grey w3-card-4">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">La Machine à Coudre</h1>
    <h3 class="w3-hide-large" style="white-space:nowrap">La Machine à Coudre</h3>
  <h4>Réparation, vente et conseil</h4>
  </div>

<!-- nav standard -->
<div class="w3-bar w3-border w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
    <a href="/index.html" class="w3-light-grey w3-bar-item w3-button">Accueil</a>
    <a href="/gamme.html" class="w3-light-grey w3-bar-item w3-button">Gamme elna</a>
    <a href="/contact.php" class="w3-red w3-bar-item w3-button">Contact</a>
    </div>
  </header>

<!-- nav petit écran -->
<div class="w3-center w3-hide-large w3-hide-medium">
    <div class="w3-bar w3-border">
    <a href="/index.html" class="w3-light-grey w3-bar-item w3-button">Accueil</a>
    <a href="/gamme.html" class="w3-light-grey w3-bar-item w3-button">Gamme elna</a>
    <a href="/contact.php" class="w3-red w3-bar-item w3-button">Contact</a>
    </div>
</div>

<!-- structure -->
<div class="w3-content w3-margin-top-large" style="max-width:1200px;">
<!-- grille -->
<div class="w3-center w3-padding">
    <div class="w3-container w3-card-4 w3-blue w3-section" style="max-width:800px">
        <h1>Merci pour votre message.</h1>
        <a href="/index.html">Retour à l'accueil</a>
    </div>
</div>
</div>

    <!-- footer -->
<footer class="w3-container w3-content w3-green w3-margin-top w3-center">
<p>Réalisé en W3.CSS</p>
</footer>


</body>
</html>