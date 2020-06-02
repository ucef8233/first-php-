<?php
if (!empty($_POST)) :
  /// require cnx 
  require_once 'connexion.php';
  $erreur = [];
  ///////////////////////////////////////////////////////////////////////// login 
  if (empty($_POST['newLogin']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['newLogin'])) : // si existe + caractére a utiliser
    $erreur['username'] = "pseuldo non valide";
  else :
    $query = $connexion->prepare("SELECT id FROM users WHERE login = ?");  // si id deja existant 
    $query->execute([$_POST['newLogin']]);
    $userfetch = $query->fetch();
    if ($userfetch) :
      $erreur['username'] = "pseudo deja existant";
    endif;
  endif;
  ///////////////////////////////////////////////////////////////////////// CIN 
  if (empty($_POST['NewCIN']) || !preg_match('/^[A-Z0-9]+$/', $_POST['NewCIN'])) : // si existe + caractére a utiliser
    $erreur['NewCIN'] = "CIN non valide";
  else :
    $query = $connexion->prepare("SELECT id FROM users WHERE CIN = ?");  // si id deja existant 
    $query->execute([$_POST['NewCIN']]);
    $CINfetch = $query->fetch();
    if ($CINfetch) :
      $erreur['NewCIN'] = "CIN deja existant";
    endif;
  endif;
  ///////////////////////////////////////////////////////////////////////// PASSWORD
  if (empty($_POST['newPassword'])) :
    $erreur['Password'] = "mdp non valide";
  endif;
  ///////////////////////////////////////////////////////////////////////// NUMTEL 
  if (empty($_POST['newTelNum']) || !preg_match('/^[0-9]+$/', $_POST['newTelNum'])) :
    $erreur['TelNum'] = "Num tel  non valide";
  endif;
  ///////////////////////////////////////////////////////////////////////// NOM
  if (empty($_POST['newNom']) || !preg_match('/^[a-zA-Z_]+$/', $_POST['newNom'])) :
    $erreur['Nom'] = "Nom non valide";
  endif;
  ///////////////////////////////////////////////////////////////////////// PRéNOM
  if (empty($_POST['newPrenom']) || !preg_match('/^[a-zA-Z]+$/', $_POST['newPrenom'])) :
    $erreur['Prenom'] = "prenom non valide";
  endif;
  ///////////////////////////////////////////////////////////////////////// aDRESS
  if (empty($_POST['newAdressPostal'])) :
    $erreur['AdressPostal'] = "adress non valide";
  endif;
  ///////////////////////////////////////////////////////////////////////// MAIL
  if (empty($_POST['Newadress']) || !filter_var($_POST['Newadress'], FILTER_VALIDATE_EMAIL)) :
    $erreur['adressmail'] = "adressmail non valide";
  else :
    $query = $connexion->prepare("SELECT id FROM users WHERE adress = ?");  // si id deja existant 
    $query->execute([$_POST['Newadress']]);
    $mailfetch = $query->fetch();
    if ($mailfetch) :
      $erreur['adressmail'] = "adressmail deja existant";
    endif;
  endif;
  ///////////////////////////////////////////////////////////////////////// post 
  if (empty($_POST['role_id'])) :
    $erreur['id_roles'] = "id non valide";
  endif;
  //////////////////////////////////////////////////////::: push to dtb 
  if (empty($erreur)) :
    $query = $connexion->prepare("INSERT INTO users SET login = ?, Password = ?, adress = ?, type_user = ? , nom = ?, prenom = ?, adress_postal = ? , CIN = ?, tell = ?");
    $passwordhash = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
    $_SESSION['verifpass'] = $passwordhash;
    $query->execute([$_POST['newLogin'], $passwordhash, $_POST['Newadress'], $_POST['role_id'], $_POST['newNom'], $_POST['newPrenom'], $_POST['newAdressPostal'], $_POST['NewCIN'], $_POST['newTelNum']]);
?>
<p class="bg-success text-center p-4"> Compte bien Créé</p>
<?php
  endif;
endif;
?>