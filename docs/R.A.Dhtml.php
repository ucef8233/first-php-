<?php
require_once '../connexion.php';
$reponse = $connexion->query('SELECT * FROM users');
$reponse->execute();
$infos = $reponse->fetchALl(); ?>
<?php if (isset($_GET['error']) && ($_GET['error'] == 'suppriper')) :  ?>
<p class='bg-success text-center w-50 mx-auto mt-3 p-3 rounded-pill '> profil Supprimer </p>
<?php
endif; ?>
<?php if (isset($_GET['error']) && ($_GET['error'] == 'test')) :  ?>
<p class='bg-success text-center w-50 mx-auto mt-3 p-3 rounded-pill '> cocher </p>
<?php
endif; ?>
<?php if (isset($_GET['error']) && ($_GET['error'] == 'coche')) :  ?>
<p class='bg-danger text-center w-50 mx-auto mt-3 p-3 rounded-pill '> veuiller selectionner l'utulisateur a supprimer
</p>
<?php
endif; ?>
<?php if (isset($_GET['modification']) && ($_GET['modification'] == 'updateok')) :  ?>
<p class='bg-success text-center w-50 mx-auto mt-3 p-3 rounded-pill '> profil modiffier </p>
<?php
endif;
if ((isset($_GET['erreurupdate'])) && $_GET['erreurupdate'] == 'updatenull') : ?>
<div class="alert alert-danger rounded">
  <p>Vous n'avez pas bien remlie le formulaire </p>
  <ul class="list-unstyled">
    <?php foreach ($_SESSION['erreurmodif'] as $erreu) :  ?>
    <li class=" w-50 mx-auto"> <?= $erreu; ?></li>
    <?php endforeach; ?>
  </ul>
</div>
<?php
endif;
?>

<div class="card-body">
  <table class='table table-striped mx-2'>
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th>id</th>
        <th>login</th>
        <th>Mdp</th>
        <th>Email</th>
        <th>type_user</th>
        <th>CIN</th>
        <th>nom</th>
        <th>prenom</th>
        <th>adress</th>
        <th>tel</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <?php foreach ($infos as  $index => $info) :
      $_SESSION['CIN'] = $info['CIN']; ?>
    <tbody <?php if (((isset($_GET['cin'])) && $_GET['cin'] == 'trouver') && ($info['CIN'] == $_SESSION['valeur'])) : ?>
      class="table  table-dark" <?php endif; ?>>
      <form action="../function/R.A.D.php" method="POST" class="form-signin">
        <td> <input type="checkbox" name="scales"></td>
        <td><label class="my-3" for="id"><?= $info['id'] ?></label>
          <input class="d-none" type="text" id="fname" name="id" value="<?= $info['id'] ?>"></td>
        <td> <label class="sr-only">Modif Login</label>
          <input type="text" class="disab form-control my-2" value="<?= $info['login']  ?>" name="modifLogin"
            placeholder="Modif Login"></td>
        <td> <label class=" sr-only">Modif Password</label>
          <input type="password" class="disab form-control my-2" name="modifPassword" placeholder=" modif Password">
        </td>
        <td><label class=" sr-only">Modif adress mail</label>
          <input type="text" class="disab form-control my-2" value="<?= $info['adress']  ?>" name="modifadress"
            placeholder="modif adress mail"></td>
        <!-- <label for=" role_id class=" d-none sr-only" name="role_id">type user</label>-->
        <td>
          <select class="mt-3" id="country" name="role_id" value="<?= $info['type_user']  ?>">
            <option value="admin">admin</option>
            <option value="user">user</option>
            <option value="dirrecteur">dirrecteur</option>
          </select></td>
        <td> <label class="sr-only">Modif CIN</label>
          <input " type=" text" class="disab form-control my-2" value="<?= $info['CIN'] ?>" name="ModifCIN"
            placeholder="New CIN">
        </td>
        <td> <label class=" sr-only">Modif Nom</label>
          <input type="text" class="disab form-control my-2" value="<?= $info['nom']  ?>" name="modifNom"
            placeholder=" modif Nom"></td>
        <td> <label class=" sr-only">Modif Prenom</label>
          <input type="text" class="disab form-control my-2" value="<?= $info['prenom']  ?>" name="modifPrenom"
            placeholder=" modif Prenom"></td>
        <td> <label class=" sr-only">Modif Adress Postal</label>
          <input type="text" class="disab form-control my-2" value="<?= $info['adress_postal']  ?>"
            name="modifAdressPostal" placeholder=" modif Adresdisableds Postal"></td>
        <td> <label class=" sr-only">Modif TelNum</label>
          <input type="text" class="disab form-control my-2" value="<?= $info['tell']  ?>" name="modifTelNum"
            placeholder="modif TelNum"></td>
        <td><input class="disab btn btn-lg btn-primary btn-block my-2" type="submit" name="Modifier" value="Modifier">
        </td>
        <td><input class="btn btn-lg btn-danger btn-block my-2" type="submit" name="Delet" value="Delet"></td>
      </form>

    </tbody>
    <?php endforeach; ?>