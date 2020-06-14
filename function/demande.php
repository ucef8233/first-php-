<?php
if (!empty($_POST['valider']) && !empty($_POST['scales'])) :
  require_once '../connexion.php';
  $id = $_POST['id_conger'];
  $query = $connexion->prepare("UPDATE demande_conge SET confirmation = ? WHERE id_conger=  $id ");
  $query->execute([$_POST['valider']]);
  header('location:../public/dirrecteur.php?conger=valider');
elseif (!empty($_POST['refuser']) && !empty($_POST['scales'])) :
  require_once '../connexion.php';
  $id = $_POST['id_conger'];
  $query = $connexion->prepare("UPDATE demande_conge SET confirmation = ? WHERE id_conger=  $id ");
  $query->execute([$_POST['refuser']]);
  header('location:../public/dirrecteur.php?conger=refuser');
else :
  header('location:../public/dirrecteur.php?conger=acocher');
endif;