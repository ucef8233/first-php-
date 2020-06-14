<?php
require_once '../connexion.php';
$reponse = $connexion->query('SELECT * FROM demande_conge');
$reponse->execute();
$infos = $reponse->fetchALl(); ?>
<div class="card">
  <div class="card-header" id="headingTwo">
    <h2 class="mb-0">
      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        demande de congé
      </button>
    </h2>
  </div>
  <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">
      <form action="../function/conge.php" method="POST">
        <div class="d-flex my-5">
          <div class="mx-5">
            <label for="">Date debut </label> </br>
            <input id="mySelect" type="date" name="datedebut" value="">
          </div>
          <div>
            <label for="">Date Fin </label> </br>
            <input type="date" name="datefin" value="">
          </div>
        </div>
        <input class="float-right btn btn-lg btn-primary my-5" type="submit" value="demander un conger" name="conge">
      </form>
    </div>
  </div>
  <h1 class='text-center'>historique congé</h1>
  <hr>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">date debut</th>
          <th scope="col">date fin </th>
          <th scope="col">status</th>
        </tr>
      </thead>
      <?php
      foreach ($infos as $info) :
        if ($info['id_user'] == $_SESSION['id']) :
      ?>
      <tbody>
        <tr>
          <td><?= $info['date_debut'] ?></td>
          <td><?= $info['date_fin'] ?></td>
          <td><?= $info['confirmation'] ?></td>
        </tr>
      </tbody>
      <?php
        endif;
      endforeach;
      ?>
    </table>
  </div>
</div>
</div>