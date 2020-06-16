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

      <?php if (isset($_GET['conge']) && $_GET['conge'] == 'nonenvoyer') : ?>
      <div class="alert alert-danger rounded w-75 mx-auto">
        <p>Vous n'avez pas bien remlie le formulaire </p>
        <?php endif; ?>

        <?php if (isset($_GET['conge']) && $_GET['conge'] == 'envoyer') : ?>
        <p class="alert alert-success rounded w-75 mx-auto"> Demande de congé bien envoyée </p>
        <?php endif; ?>

        <form action=" ../function/conge.php" method="POST">
          <div class="d-flex my-5  w-75 mx-auto">
            <div class="mx-5">
              <label for="">Date debut * </label> </br>
              <input id="mySelect" type="date" name="datedebut" value="">
            </div>
            <div>
              <label for="">Date Fin * </label> </br>
              <input type="date" name="datefin" value="">
            </div>
            <div class="mx-5">
              <label for="">Type de congé * </label> </br>
              <select name="type_conge">
                <option value="Congé annuel">Congé annuel</option>
                <option value="Congéexceptionneloupermissionsd’absence">Congé exceptionnel ou permissions d’absence
                </option>
                <option value="Congédemaladie"> Congé de maladie</option>
                <option value="Maternité">Maternité</option>
              </select>
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