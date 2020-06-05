<?php



function calc()
{
  if (2 < 4) {
    return 2;
  }
}
function test()
{
  $test  = calc();
  return $test;
}

echo test();











?>




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








?>

<?php
if (isset($_GET['error'])) :
  if ($_GET['error'] == 'vide') : ?>
<p class='bg-danger w-50 mx-auto mt-3 p-3 '> veiller remplire ID de la personne a supprimer </p>
<?php
  elseif ($_GET['error'] == 'suppriper') : ?>
<p class='bg-success w-50 mx-auto mt-3 p-3 '>User deleted</p>
<?php
  elseif ($_GET['error'] == 'nondispo') : ?>
<p class='bg-danger w-50 mx-auto mt-3 p-3'>ID non dispo </p>
<?php
  endif;
endif ?>












<?php

if (empty($erreur)) :
  if (!empty($_POST['Submit'])) :
    require_once 'connexion.php';
    $query = $connexion->prepare("INSERT INTO users SET login = ?, Password = ?, adress = ?, type_user = ? , nom = ?, prenom = ?, adress_postal = ? , CIN = ?, tell = ?");
    $passwordhash = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
    $_SESSION['verifpass'] = $passwordhash;
    $query->execute([$_POST['newLogin'], $passwordhash, $_POST['Newadress'], $_POST['role_id'], $_POST['newNom'], $_POST['newPrenom'], $_POST['newAdressPostal'], $_POST['NewCIN'], $_POST['newTelNum']]);
    header('location:admin.php?validation=addok');
  endif;
else :
  $_SESSION['erreurcreat'] = $erreur;
  header('location:admin.php?erreuradd=addnull');
endif;



   