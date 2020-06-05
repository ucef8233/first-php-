<?php
//////////////////////////////////////////////////////::: push to dtb 

// if (isset($_GET['erreuradd']) == 'addok') :
  
//   require_once 'connexion.php';
//   $query = $connexion->prepare("INSERT INTO users SET login = ?, Password = ?, adress = ?, type_user = ? , nom = ?, prenom = ?, adress_postal = ? , CIN = ?, tell = ?");
//   $passwordhash = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
//   $_SESSION['verifpass'] = $passwordhash;
//   $query->execute([$_POST['newLogin'], $passwordhash, $_POST['Newadress'], $_POST['role_id'], $_POST['newNom'], $_POST['newPrenom'], $_POST['newAdressPostal'], $_POST['NewCIN'], $_POST['newTelNum']]);
//   header('location:admin.php?validation=addok');
// // <!-- <p class="bg-success text-center p-4"> Compte bien Créé</p> -->
// else :
//   header('location:admin.php?validation=null');
// endif;