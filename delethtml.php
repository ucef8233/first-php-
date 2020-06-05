<?php
require_once 'connexion.php';
$reponse = $connexion->query('SELECT * FROM users');
$reponse->execute();
$infos = $reponse->fetchALl();

?>
<div class="card">
  <div class="card-header" id="headingTwo">
    <h2 class="mb-0 d-flex">
      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        supprimer
      </button>
      <form method="POST" action="delet.php" class="d-flex w-50">
        <label class=" sr-only ">Supprimer</label>
        <input type="text" class="form-control my-4 mx-3" name="Supprimer" placeholder="ID">
        <input class="btn btn-danger  w-50 h-50 mt-4" type="submit" value="Delet">
      </form>
    </h2>
  </div>
  <div id="collapseTwo" class="collapse   <?php if (isset($_GET['error'])) : ?> show" <?php endif; ?>
    aria-labelledby="headingTwo" data-parent="#accordionExample">

    <?php
    if (isset($_GET['error'])) :
      if ($_GET['error'] == 'vide') : ?>
    <p class='bg-danger w-50 mx-auto mt-3 p-3 rounded-pill '> veiller remplire ID de la personne a supprimer </p>
    <?php
      elseif ($_GET['error'] == 'suppriper') : ?>
    <p class='bg-success w-50 mx-auto mt-3 p-3 rounded-pill'>User deleted</p>
    <?php
      elseif ($_GET['error'] == 'nondispo') : ?>
    <p class='bg-danger w-50 mx-auto mt-3 p-3 rounded-pill'>ID non dispo </p>
    <?php
      endif;
    endif ?>
    <div class="card-body">
      <table class='table table-striped mx-2'>
        <thead class="thead-dark">
          <tr>
            <th>id</th>
            <th>login</th>
            <th>adress</th>
            <th>type_user</th>
            <th>CIN</th>
            <th>nom</th>
            <th>prenom</th>
            <th>adress</th>
            <th>tel</th>
          </tr>
        </thead>
        <?php foreach ($infos as $info) : ?>
        <tbody>
          <td><?= $info['id'] ?></td>
          <td><?= $info['login']  ?></td>
          <td><?= $info['adress']  ?></td>
          <td><?= $info['type_user']  ?></td>
          <td><?= $info['CIN']  ?></td>
          <td><?= $info['nom']  ?></td>
          <td><?= $info['prenom']  ?></td>
          <td><?= $info['adress_postal']  ?></td>
          <td><?= $info['tell']  ?></td>
        </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>