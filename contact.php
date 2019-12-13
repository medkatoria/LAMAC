<!DOCTYPE html>
<html lang="fr">

<head>
  <title>La Machine à Coudre</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Elna Pfaff  Singer Brother Bernina réparation réparation de machines réparation de machines à coudre réparation de machines à coudre Bulle réparation de machines à coudre Suisse vente et réparation vente et réparation de machines vente et réparation de machines à coudre vente et réparation de machines à coudre Bulle vente et réparation de machines à coudre Suisse fournitures aiguisage ciseaux machine machines coudre couture machine à coudre machines à coudre machine a coudre machines a coudre la machine à coudre la machine a coudre machineàcoudre machineacoudre lamachineàcoudre lamachineacoudre Bulle Gîte Gite Grande-Gîte Grande-Gite" />
  <meta name="description" content="Vente et réparation de machines à coudre (Elna partner)." />
  <meta name="robots" content="noindex,nofollow" />
  <title>La machine à coudre - La machine à coudre</title>
  <link href="/files/id/favicon.png" rel="SHORTCUT ICON" type="image/png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    html {
      font-family: "Lato", sans-serif
    }
  </style>
</head>

<?php

include "settings.php";

$nomErr = $mailErr = $messageErr = $prenomErr = $phoneErr = "";
$nom = $mail = $prenom = $message = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomErr = "Une indication du nom est requise.";
  } else {
    $nom = test_imput($_POST["nom"]);
    if (!preg_match("/^[a-zA-Z  ]*$/", $nom)) {
      $nomErr = "Seuls les lettres et les espaces sont autorisés.";
    }
  }
  if (empty($_POST["prenom"])) {
    $prenomErr = "Une indication du nom est requise.";
  } else {
    $prenom = test_imput($_POST["prenom"]);
    if (!preg_match("/^[a-zA-Z  ]*$/", $prenom)) {
      $prenomErr = "Seuls les lettres et les espaces sont autorisés.";
    }
  }
  if (empty($_POST["mail"])) {
    $mailErr = "Une adresse email est requise.";
  } else {
    $mail = test_input($_POST["mail"]);
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailErr = "Le format de l'adresse email est incorrect.";
    }
  }
  if (empty($_POST["phone"])) {
    $phoneErr = "Le numéro de téléphone est nécessaire.";
  } else {
    $phone = test_imput($_POST["phone"]);
    if (!preg_match("[-a-zA-Z]", $phone)) {
      $phone = "Le numéro de téléphone est erroné.";
    }
  }
  if (empty($_POST["message"])) {
    $messageErr = "Le message est vide.";
  } else {
    $message = test_imput($_POST["message"]);
  }
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
    <div class="w3-display-middle w3-padding-large w3-red w3-card-4 w3-hide-small">
      <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge" style="font-family:arial;white-space:nowrap;"><b>La machine à
          coudre</b></h1>
      <h3 class="w3-hide-large" style="font-family:arial;white-space:nowrap;"><b>La machine à coudre</b></h3>
      <h4>Réparation, vente et conseil</h4>
    </div>

    <!-- nav standard -->
    <div class="w3-bar w3-border w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
      <a href="/index.php" class="w3-light-grey w3-hover-pale-red w3-bar-item w3-button">Accueil</a>
      <a href="/gamme.php" class="w3-light-grey w3-hover-pale-red w3-bar-item w3-button">Gamme elna</a>
      <a href="/contact.php" class="w3-red w3-bar-item w3-button">Contact</a>
    </div>
  </header>

  <!-- nav petit écran -->
  <div class="w3-center w3-hide-large w3-hide-medium">
    <div class="w3-bar w3-border">
      <a href="/index.php" class="w3-light-grey w3-hover-pale-red w3-bar-item w3-button">Accueil</a>
      <a href="/gamme.php" class="w3-light-grey w3-hover-pale-red w3-bar-item w3-button">Gamme elna</a>
      <a href="/contact.php" class="w3-red w3-bar-item w3-button">Contact</a>
    </div>
  </div>


  <!-- structure -->
  <div class="w3-content w3-margin-top-large" style="max-width:1200px;">
    <!-- grille -->
    <div class="w3-row-padding">

      <!-- colonne gauche -->
      <div class="w3-half">
        <div class="w3-container w3-card w3-amber w3-margin-top w3-margin-bottom w3-mobile">
          <h3>Horaires</h3>
        </div>
        <div class="w3-row w3-margin-left">
          <div class="w3-col" style="width:50px">
            <i class="material-icons w3-xlarge">store</i>
          </div>
          <div class="w3-rest">
            Sur place : samedi, de 8 h 00 à 11 h 45</p>
          </div>
          <div class="w3-col" style="width:50px">
            <i class="material-icons w3-xlarge">event</i>
          </div>
          <div class="w3-rest">
            Sur rendez-vous : du lundi au vendredi</p>
          </div>
        </div>
        <div class="w3-container w3-card w3-amber w3-margin-top w3-margin-bottom w3-mobile">
          <h3>Coordonnées</h3>
        </div>
        <div class="w3-row w3-margin-left">
          <div class="w3-col" style="width:50px">
            <i class="material-icons w3-xlarge">contact_phone</i>
          </div>
          <div class="w3-rest">
            <a href="tel:+41774961589" <a>077 496 15 89</a></p>
          </div>
          <div class="w3-col" style="width:50px">
            <i class="material-icons w3-xlarge">contact_mail</i>
          </div>
          <div class="w3-rest">
            <a href="mailto:lamachineacoudre@bluewin.ch" <a>lamachineacoudre(a)bluewin.ch</a></p>
          </div>
          <div class="w3-col" style="width:50px">
            <i class="material-icons w3-xlarge">place</i>
          </div>
          <div class="w3-rest">Chemin de la Grande-gîte 56, CH-1630 Bulle</p>
          </div>
        </div>
        <div class="w3-container w3-section w3-border">
          <iframe title="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1676.927404224049!2d7.053296684513349!3d46.62759939919676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e630a721fefe3%3A0x5b9776b6ea381ddf!2sLa%20machine%20%C3%A0%20coudre!5e0!3m2!1sfr!2sch!4v1576104579888!5m2!1sfr!2sch" width="400" height="300" frameborder="0" style="width:100%;border:0;" allowfullscreen="">
          </iframe>
        </div>
      </div>
      <div class="w3-half">
        <div class="w3-container w3-card w3-amber w3-margin-top w3-margin-bottom w3-mobile">
          <h3>Formulaire de contact</h3>
        </div>
        <form method="post" class="w3-container w3-section" action="/envoi_form.php">
          <label>Nom : <span class="id01"><?php echo $nomErr; ?></label>
          <input class="w3-input" name="nom" type="text">
          <label>Prénom : <span class="id01"><?php echo $prenomErr; ?></label>
          <input class="w3-input" name="prenom" type="text">
          <label>Téléphone : <span class="id01"><?php echo $phoneErr; ?></label>
          <input class="w3-input" name="phone" type="text">
          <label>Courriel : <span class="id01"><?php echo $mailErr; ?></label>
          <input class="w3-input" name="mail" type="text">
          <label>Message : <span class="id01"><?php echo $messageErr; ?></label>
          <textarea class="w3-input" name="message"></textarea>
          <p></p>
          <input class="w3-input w3-orange" type="submit">
        </form>
      </div>
    </div>


    <!-- footer -->
    <footer class="w3-container w3-blue-gray w3-margin-top w3-center" style="max-width:1200px;">
      <p>Réalisé en W3.CSS</p>
    </footer>


</body>

</html>