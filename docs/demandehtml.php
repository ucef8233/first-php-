<?php
require_once '../connexion.php';
$reponse = $connexion->query('SELECT * FROM users INNER JOIN demande_conge ON users.id = demande_conge.id_user');
$reponse->execute();
$infos = $reponse->fetchALl(); ?>

<h2 class="display-3 text-center mb-5"> DEMANDE DE CONGE</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">id congé</th>
      <th scope="col">id user</th>
      <th scope="col">nom </th>
      <th scope="col">prenom</th>
      <th scope="col">date debut</th>
      <th scope="col">date fin </th>
      <th cope="col">type de congé</th>
      <th cope="col">nombre de jours</th>
      <th scope="col">status</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <?php
  foreach ($infos as $info) :
    if ($info['confirmation'] == 'en attente') :
  ?>
  <tbody>
    <tr>
      <form action="../function/demande.php" method="post">
        <td> <input type="checkbox" name="scales"></td>
        <td><label for=""> <?= $info['id_conger'] ?></label><input class="d-none" type="text" name="id_conger"
            value="<?= $info['id_conger'] ?>" id=""></td>
        <td><?= $info['id'] ?></td>
        <td><?= $info['nom'] ?></td>
        <td><?= $info['prenom'] ?></td>
        <td><?= $info['date_debut'] ?></td>
        <td><?= $info['date_fin'] ?></td>
        <td><?= $info['type_conger'] ?></td>
        <td><?= $info['nombre_jours'] ?> Jours</td>
        <td><?= $info['confirmation'] ?></td>
        <td> <input class="btn btn-success" type="submit" name="valider" value="valider"></td>
        <td><input class="btn btn-danger" type="submit" name="refuser" value="refuser"></td>
      </form>
    </tr>
  </tbody>
  <?php
    endif;
  endforeach;
  ?>
</table>
<h2 class="display-3 text-center mb-5">HISTORIQUE DES CONGER</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id congé</th>
        <th scope="col">id user</th>
        <th scope="col">nom </th>
        <th scope="col">prenom</th>
        <th scope="col">date debut</th>
        <th scope="col">date fin </th>
        <th cope="col">type de congé</th>
        <th cope="col">nombre de jours</th>
        <th scope="col">status</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <?php
    foreach ($infos as $info) :
    ?>
    <tbody>
      <tr>
        <td><label for=""> <?= $info['id_conger'] ?></label><input class="d-none" type="text" name="id_conger"
            value="<?= $info['id_conger'] ?>" id=""></td>
        <td><?= $info['id'] ?></td>
        <td><?= $info['nom'] ?></td>
        <td><?= $info['prenom'] ?></td>
        <td><?= $info['date_debut'] ?></td>
        <td><?= $info['date_fin'] ?></td>
        <td><?= $info['type_conger'] ?></td>
        <td><?= $info['nombre_jours'] ?> Jours</td>
        <td><?= $info['confirmation'] ?></td>
      </tr>
    </tbody>
    <?php
    endforeach;
    ?>
  </table>