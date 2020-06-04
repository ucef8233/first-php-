<?php
$count = 0;
if (!empty($_POST)) :
  if (!empty($_POST['Supprimer'])) :
    require_once 'connexion.php';
    $verif = $connexion->query("SELECT id FROM users");
    $verif->execute();
    $infos = $verif->fetchALl();
    foreach ($infos as $info) :
      if ($info['id'] == $_POST['Supprimer']) :
        $count++;
      endif;
    endforeach;
    if (!empty($count)) :
      $user_id = $_POST['Supprimer'];
      $req = $connexion->prepare("DELETE FROM users WHERE id = :user_id");
      $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
      $req->execute();
      header('location:admin.php?error=suppriper');
      exit();
    else :
      header('location:admin.php?error=nondispo');
      exit();
    endif;

  else :
    header('location:admin.php?error=vide');
    exit();
  endif;
endif;
// $count = 0;
// if (!empty($_POST)) :
//   if (!empty($_POST['Supprimer'])) :
//     require_once 'connexion.php';
//     $verif = $connexion->query("SELECT id FROM users");
//     $verif->execute();
//     $infos = $verif->fetchALl();

//     foreach ($infos as $info) :
//       print_r($_POST['Supprimer']);
//       print_r($info['id']);
//     // if ($info['id'] == $_POST['Supprimer']) :

//     // endif;
//     endforeach;
//   endif;
// endif;