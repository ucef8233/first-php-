<?php
session_start();
$count = 0;
if (!empty($_POST)) :
  if (!empty($_POST['updatephp'])) :
    $_SESSION['idupdate'] = $_POST['updatephp'];
    require_once '../connexion.php';
    $verif = $connexion->query("SELECT id FROM users");
    $verif->execute();
    $infos = $verif->fetchALl();
    foreach ($infos as $info) :
      if ($info['id'] == $_POST['updatephp']) :
        $count++;
      endif;
    endforeach;
    if (!empty($count)) :
      $user_id = $_POST['updatephp'];
      $req = $connexion->prepare("SELECT * FROM users WHERE id = :user_id LIMIT 1");
      $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
      $req->execute();
      $recup = $req->fetch();
      $_SESSION['recup'] = $recup;
      header('location:../public/admin.php?errors=trouver');
    else :
      header('location:../public/admin.php?errors=Nontrouver');
    endif;
  else :
    header('location:../public/admin.php?errors=vide');
  endif;
endif;