<?php

// Vérifier les identifiants de l'utilisateur et rediriger vers la page d'accueil si les identifiants sont corrects

$username = $_POST['username'];
$password = $_POST['password'];

// Vérifier les identifiants de l'utilisateur ici
// ...

// Si les identifiants sont corrects, rediriger vers la page d'accueil
if ($username == 'utilisateur@gmail.com' && $password == '123456') {
  header('Location: home.html');
  exit;
} else {
  // Si les identifiants sont incorrects, rediriger vers la page de connexion avec un message d'erreur
  header('Location: index.html?erreur=1');
  exit;
}

?>

