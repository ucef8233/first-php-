<?php
session_start();
if (!empty($_POST['datedebut']) && !empty($_POST['datefin'])) :
  require_once '../connexion.php';
  $debut = date_create($_POST['datedebut']);
  $fin = date_create($_POST['datefin']);
  $interval = date_diff($debut, $fin);
  $nJour = $interval->format('%d');
  $query = $connexion->prepare("INSERT INTO demande_conge SET date_debut = ?, date_fin = ?, id_user = ? ,confirmation = ?");
  $query->execute([$_POST['datedebut'], $_POST['datefin'], $_SESSION['id'], 'en attente']);
  header('location:../public/user.php?conge=envoyer');
else :
  header('location:../public/user.php?conge=nonenvoyer');
endif;