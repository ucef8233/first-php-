<div class="card">
  <div class="card-header" id="headingTwo">
    <h2 class="mb-0 d-flex">
      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        supprimer
      </button>
      <form method="POST" action="../function/delet.php" class="d-flex w-50">
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
  </div>
</div>