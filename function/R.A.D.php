<?php
$count = 0;
if (!empty($_POST)) :
  if (!empty($_POST['Modifier']) && !empty($_POST['scales'])) :
    /// require cnx
    session_start();
    require_once '../connexion.php';
    $Modiferreur = [];
    ///////////////////////////////////////////////////////////////////////// login
    if (empty($_POST['modifLogin']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['modifLogin'])) : // si existe + caractére a utiliser
      $Modiferreur['username'] = "pseuldo non valide";
    else :
      $query = $connexion->prepare("SELECT * FROM users WHERE login = ?"); // si id deja existant
      $query->execute([$_POST['modifLogin']]);
      $userfetch = $query->fetch();
      if ($userfetch['id'] && $userfetch['login'] != $_POST['modifLogin']) :
        $Modiferreur['username'] = "pseudo deja existant";
      endif;
    endif;
    ///////////////////////////////////////////////////////////////////////// CIN
    if (empty($_POST['ModifCIN']) || !preg_match('/^[A-Z0-9]+$/', $_POST['ModifCIN'])) : // si existe + caractére a utiliser
      $Modiferreur['mewCIN'] = "CIN non valide";
    else :
      $query = $connexion->prepare("SELECT * FROM users WHERE CIN = ?"); // si id deja existant
      $query->execute([$_POST['ModifCIN']]);
      $CINfetch = $query->fetch();
      if ($CINfetch['id'] && $CINfetch['CIN'] != $_POST['ModifCIN']) :
        $Modiferreur['NewCIN'] = "CIN deja existant";
      endif;
    endif;
    ///////////////////////////////////////////////////////////////////////// PASSWORD
    if (empty($_POST['modifPassword'])) :
      $Modiferreur['Password'] = "mdp non valide";
    endif;
    ///////////////////////////////////////////////////////////////////////// NUMTEL
    if (empty($_POST['modifTelNum']) || !preg_match('/^[0-9]+$/', $_POST['modifTelNum'])) :
      $Modiferreur['TelNum'] = "Num tel non valide";
    endif;
    ///////////////////////////////////////////////////////////////////////// NOM
    if (empty($_POST['modifNom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['modifNom'])) :
      $Modiferreur['Nom'] = "Nom non valide";
    endif;
    ///////////////////////////////////////////////////////////////////////// PRéNOM
    if (empty($_POST['modifPrenom']) || !preg_match('/^[a-zA-Z]+$/', $_POST['modifPrenom'])) :
      $Modiferreur['Prenom'] = "prenom non valide";
    endif;
    ///////////////////////////////////////////////////////////////////////// aDRESS
    if (empty($_POST['modifAdressPostal'])) :
      $Modiferreur['AdressPostal'] = "adress non valide";
    endif;
    ///////////////////////////////////////////////////////////////////////// MAIL
    if (empty($_POST['modifadress']) || !filter_var($_POST['modifadress'], FILTER_VALIDATE_EMAIL)) :
      $Modiferreur['adressmail'] = "adressmail non valide";
    else :
      $query = $connexion->prepare("SELECT * FROM users WHERE adress = ?"); // si id deja existant
      $query->execute([$_POST['modifadress']]);
      $mailfetch = $query->fetch();
      if ($mailfetch['id'] && $mailfetch['adress'] != $_POST['modifadress']) :
        $Modiferreur['adressmail'] = "adressmail deja existant";
      endif;
    endif;
    ///////////////////////////////////////////////////////////////////////// post
    if (empty($_POST['role_id'])) :
      $erreur['id_roles'] = "id non valide";
    endif;
    $_SESSION['erreurmodif'] = $Modiferreur;
    if (empty($Modiferreur)) :
      require_once '../connexion.php';
      if (!empty($_POST['modifLogin'])) :
        $updated = $_POST['id'];
        $query = $connexion->prepare("UPDATE users SET login = ?, Password = ?, adress = ?, type_user = ? , nom = ?, prenom = ?, adress_postal = ? , CIN = ?, tell = ? WHERE id=$updated ");
        $passwordhash = password_hash($_POST['modifPassword'], PASSWORD_BCRYPT);
        $query->execute([$_POST['modifLogin'], $passwordhash, $_POST['modifadress'], $_POST['role_id'], $_POST['modifNom'], $_POST['modifPrenom'], $_POST['modifAdressPostal'], $_POST['ModifCIN'], $_POST['modifTelNum']]);
        header('location:../public/admin.php?modification=updateok');
      endif;
    else :
      header('location:../public/admin.php?erreurupdate=updatenull');
    endif;
  elseif (!empty($_POST['Delet']) && !empty($_POST['scales'])) :
    require_once '../connexion.php';
    $verif = $connexion->query("SELECT id FROM users");
    $verif->execute();
    $infos = $verif->fetchALl();
    foreach ($infos as $info) :
      if ($info['id'] == $_POST['id']) :
        $count++;
      endif;
    endforeach;
    if (!empty($count)) :
      $user_id = $_POST['id'];
      $req = $connexion->prepare("DELETE FROM users WHERE id = :user_id");
      $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
      $req->execute();
      header('location:../public/admin.php?error=suppriper');
      exit();
    // else :
    //   header('location:../public/admin1.php?error=nondispo');
    //   exit();
    endif;
  else :
    header('location:../public/admin.php?error=test');
    exit();
  endif;

endif;