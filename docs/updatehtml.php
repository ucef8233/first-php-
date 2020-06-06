<div class="card text-center">
  <div class="card-header" id="headingThree">
    <h2 class="mb-0 d-flex">
      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        modiffier
      </button>
      <form method="POST" action="../function/update.php" class="d-flex w-50">
        <label class=" sr-only ">Update</label>
        <input type="text" class="form-control my-4 mx-3" name="updatephp" placeholder="Update">
        <input class="btn btn-danger  w-50 h-50 mt-4" type="submit" value="Update">
      </form>
    </h2>
  </div>
  <div id="collapseThree"
    class="collapse  <?php if (isset($_GET['errors']) || isset($_GET['erreurupdate']) || isset($_GET['modification'])) : ?> show <?php endif; ?>"
    aria-labelledby="headingThree" data-parent="#accordionExample">
    <?php
    if (isset($_GET['errors'])) :
      if ($_GET['errors'] == 'vide') : ?>
    <p class='bg-danger w-50 mx-auto mt-3 p-3 rounded-pill '> veiller remplire ID de la personne a Moddifier </p>
    <?php
      elseif ($_GET['errors'] == 'Nontrouver') : ?>
    <p class='bg-danger w-50 mx-auto mt-3 p-3 rounded-pill'>ID non dispo </p>
    <?php
      elseif ($_GET['errors'] == 'trouver') : ?>
    <p class='bg-success w-50 mx-auto mt-3 p-3 rounded-pill'>veiller modifier les information </p>
    <?php
      endif;
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
    if ((isset($_GET['modification'])) && $_GET['modification']  == 'updateok') : ?>
    <p class='bg-success w-50 mx-auto mt-3 p-3 rounded-pill'>modiffied </p>
    <?php
    endif;
    if ((isset($_GET['errors']) && $_GET['errors'] == 'trouver') || isset($_GET['erreurupdate']) || isset($_GET['modification'])) :
    ?>
    <div class="card-body">
      <form action="../function/updated.php" method="POST" class="form-signin">
        <label class="sr-only">Modif Login</label>
        <input type="text" class="form-control" value="<?= $_SESSION['recup']['login'] ?>" name="modifLogin"
          placeholder="Modif Login">
        <label class=" sr-only">Modif Password</label>
        <input type="password" class="form-control my-4" name="modifPassword" placeholder=" modif Password">
        <label class=" sr-only">Modif TelNum</label>
        <input type="text" class="form-control my-4" value="<?= $_SESSION['recup']['tell'] ?>" name="modifTelNum"
          placeholder="modif TelNum">
        <label class=" sr-only">Modif Nom</label>
        <input type="text" class="form-control my-4" value="<?= $_SESSION['recup']['nom'] ?>" name="modifNom"
          placeholder=" modif Nom">
        <label class=" sr-only">Modif Prenom</label>
        <input type="text" class="form-control my-4" value="<?= $_SESSION['recup']['prenom'] ?>" name="modifPrenom"
          placeholder=" modif Prenom">
        <label class=" sr-only">Modif Adress Postal</label>
        <input type="text" class="form-control my-4" value="<?= $_SESSION['recup']['adress_postal'] ?>"
          name="modifAdressPostal" placeholder=" modif Adress Postal">
        <label class=" sr-only">Modif adress mail</label>
        <input type="text" class="form-control my-4" value="<?= $_SESSION['recup']['adress'] ?>" name="modifadress"
          placeholder="modif adress mail">
        <label class="sr-only">Modif CIN</label>
        <input type="text" class="form-control" value="<?= $_SESSION['recup']['CIN'] ?>" name="ModifCIN"
          placeholder="New CIN">
        <label for=" role_id class=" sr-only" name="role_id">type user</label>
        <select id="country" name="role_id">
          <option value="admin">admin</option>
          <option value="user">user</option>
          <option value="dirrecteur">dirrecteur</option>
        </select>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="Modifier" value="Modifier">
      </form>
    </div>
    <?php
    endif; ?>
  </div>
</div>