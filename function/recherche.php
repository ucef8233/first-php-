<?php
session_start();
$count = 0;
require_once '../connexion.php';
if (!empty($_POST)) :
  $_SESSION['valeur'] = $_POST['recherche'];
  $reponse = $connexion->query('SELECT CIN FROM users');
  $reponse->execute();
  $infos = $reponse->fetchALl();
  foreach ($infos as $info) :
    if ($info['CIN'] == $_SESSION['valeur']) :
      $count++;
    endif;
  endforeach;
  if ($count > 0) :
    header('location:../public/admin.php?cin=trouver');
  else :
    header('location:../public/admin.php?cin=nontrouver');
  endif;
endif;