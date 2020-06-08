<?php
session_start();
if ($_SESSION) :
  require '../docs/header.php';
  $title = 'Section User';

?>
<h1 class="text-center mb-5 display-4">
  Bienvenu sur la section <?= $_SESSION['type_user'] ?> De : <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?>
</h1>

<div class="accordion w-75 mx-auto" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          demande de papier
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body mx-auto w-50">
        <form action="../function/atestation.php" method="POST" class='  my-3 d-flex justify-content-between'>
          <label for="example">IMPRIMER attestation de travaille</label>
          <input type="submit" name="bultinDePay" value="Imprimer" class="btn btn-success">
        </form>
        <form action="../function/bp.php" method="POST" class='d-flex justify-content-between'>
          <label for="example">IMPRIMER BULTIN DE PAYS</label>
          <input type="submit" name="bultinDePay" value="Imprimer" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          demande de congé
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

      </div>
    </div>
  </div>
</div>


<?php include '../docs/footer.php';
else :
  include 'login.php';
endif;
?>