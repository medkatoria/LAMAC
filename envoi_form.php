<?php
$nomErr = $mailErr = $messageErr = $prenomErr = $phoneErr = "";
$nom = $mail = $prenom = $message = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomErr = "Une indication du nom est requise.";
  }  else {
    $nom = test_imput($_POST["nom"]);
    if (!preg_match("/^[a-zA-Z  ]*$/",$nom)) {
      $nomErr = "Seuls les lettres et les espaces sont autorisés.";
    }
  }
  if (empty($_POST["prenom"])) {
    $prenomErr = "Une indication du nom est requise.";
  }  else {
    $prenom = test_imput($_POST["prenom"]);
    if (!preg_match("/^[a-zA-Z  ]*$/",$prenom)) {
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
      if (!preg_match("[-a-zA-Z]",$phone)) {
        $phone = "Le numéro de téléphone est erroné.";
      }
    }
    if (empty($_POST["message"])) {
      $messageErr = "Le message est vide.";
    } else {
        $message = test_imput($_POST["message"]);
      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$mailSujet = "Prise de contact via le site internet";
$mailBody = "Bonjour, \n Une personne a pris contact via le formulaire du site internet. \n Voici les informations envoyées : \n Nom: $nom \n Prénom: $prenom \n Email: $mail \n Téléphone: $phone \n\n Ainsi que le message associé: $message";
$mailTo = "igalaxia@gmail.com";

mail($to,$mailSujet,$mailBody)
?>