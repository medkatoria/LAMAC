<!DOCTYPE html>
<html lang="fr">

<head>
  <title>La Machine à Coudre</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords"
    content="Elna Pfaff  Singer Brother Bernina réparation réparation de machines réparation de machines à coudre réparation de machines à coudre Bulle réparation de machines à coudre Suisse vente et réparation vente et réparation de machines vente et réparation de machines à coudre vente et réparation de machines à coudre Bulle vente et réparation de machines à coudre Suisse fournitures aiguisage ciseaux machine machines coudre couture machine à coudre machines à coudre machine a coudre machines a coudre la machine à coudre la machine a coudre machineàcoudre machineacoudre lamachineàcoudre lamachineacoudre Bulle Gîte Gite Grande-Gîte Grande-Gite" />
  <meta name="description" content="Vente et réparation de machines à coudre (Elna partner)." />
  <meta name="robots" content="noindex,nofollow" />
  <link href="/files/id/favicon.png" rel="SHORTCUT ICON" type="image/png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138219591-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-138219591-1');
  </script>
  <style>
  html {
    font-family: "lato", sans-serif
  }
  </style>
</head>

<?php

$navi = $_SERVER["HTTP_USER_AGENT"];
$nom = valid_donnees($_POST["nom"]);
$prenom = valid_donnees($_POST["prenom"]);
$mail = valid_donnees($_POST["mail"]);
$phone = valid_donnees($_POST["phone"]);
$message = valid_donnees($_POST["message"]);

function valid_donnees($donnees){
  $donnees = trim($donnees);
  $donnees = stripslashes($donnees);
  $donnees = htmlspecialchars($donnees);
  return $donnees;
}

if (
  (($_POST['sec1'] != 'sec')
 
 || ($_POST['sec2'] != 'sec'))
 
 || ($_POST['sec3'] != '') 
 
 ){
 
$mailSujet = "Prise de contact via le site internet";
$mailBody = "Bonjour, \n Une personne a pris contact par l'intermédiaire du formulaire du site internet. \n Voici le message : 
  \n Nom: $nom \n Prénom: $prenom\n Email: $mail \n Téléphone: $phone \n\n Voici le message associé: $message. \n [Navigateur : $navi]";
$emailTo = "lamachineacoudre@bluewin.ch, $mail, igalaxia@gmail.com";
$headers = "From: lamachineacoudre@bluewin.ch";

mail($emailTo, $mailSujet, $mailBody, $headers);

}
?>

<body class="w3-light-grey">

  <!-- Entete -->
  <header class="w3-display-container w3-content w3-center w3-section" style="max-width:1200px;">
    <img class="w3-image" src="/files/id/header.jpg" alt="header" style="width:100%">
    <!-- petit écran -->
    <div class="w3-container w3-padding w3-red w3-card-4 w3-hide-medium w3-hide-large">
      <h3 class="w3-hide-large w3-hide-medium" style="font-family:arial;white-space:nowrap;"><b>La machine à coudre</b>
      </h3>
      <h6>Réparation, vente et conseil</h6>
    </div>
    <!-- grand et moyen écran -->
    <div class="w3-display-bottommiddle w3-padding-large w3-red w3-card-4 w3-hide-small" style="bottom:50px">
      <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge" style="font-family:arial;white-space:nowrap;"><b>La machine à
          coudre</b></h1>
      <h3 class="w3-hide-large" style="font-family:arial;white-space:nowrap;"><b>La machine à coudre</b></h3>
      <h4>Réparation, vente et conseil</h4>
    </div>

    <!-- nav standard -->
    <div class="w3-bar w3-border w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
      <a href="/index.php" class="w3-light-grey w3-hover-pale-red w3-bar-item w3-button">Accueil</a>
      <a href="/gamme.php" class="w3-light-grey w3-hover-pale-red w3-bar-item w3-button">Gamme elna</a>
      <a href="/contact.php" class="w3-light-grey w3-hover-pale-red w3-bar-item w3-button">Contact</a>
    </div>
  </header>

  <!-- nav petit écran -->
  <div class="w3-center w3-hide-large w3-hide-medium">
    <div class="w3-bar w3-border">
      <a href="/index.php" class="w3-light-gray w3-hover-pale-red w3-bar-item w3-button">Accueil</a>
      <a href="/promo.php" class="w3-light-gray w3-hover-pale-red w3-bar-item w3-button">Promo</a>
      <a href="/gamme.php" class="w3-light-gray w3-hover-pale-red w3-bar-item w3-button">Gamme</a>
      <a href="/contact.php" class="w3-light-gray w3-hover-pale-red w3-bar-item w3-button">Contact</a>
    </div>
  </div>


  <!-- structure -->
  <div class="w3-content w3-margin-top-large" style="max-width:1200px;">
    <!-- grille -->
    <div class="w3-row-padding">
      <div class="w3-container w3-center w3-card w3-amber w3-section">
        <h1>Merci pour votre message. Nous y répondrons dès que possible.</h1>
        <a href="/index.php">Retour à l'accueil</a>
      </div>
    </div>


    <!-- footer -->
    <footer class="w3-container w3-blue-gray w3-margin-top w3-center" style="max-width:1200px;">
      <p>Réalisé en W3.CSS</p>
      <p>
        <a href="https://jigsaw.w3.org/css-validator/check/referer">
          <img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
        </a>
      </p>
    </footer>

</div>
</body>

</html>