<?php
require_once '../connexion.php';
$reponse = $connexion->query('SELECT * FROM users');
$reponse->execute();
$infos = $reponse->fetchALl(); ?>
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