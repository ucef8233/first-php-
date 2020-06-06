<div class="card">
  <div class="card-header" id="headingOne">
    <h2 class="mb-0">
      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        AJOUTER
      </button>
    </h2>
  </div>
  <div id="collapseOne" class="collapse <?php if (isset($_GET['erreuradd']) || isset($_GET['validation'])) : ?> show <?php endif; ?>
       " aria-labelledby=" headingOne" data-parent="#accordionExample">
    <div class="card-body ">
      <?php if (isset($_GET['erreuradd']) == 'addnull') : ?>
      <div class="alert alert-danger rounded">
        <p>Vous n'avez pas bien remlie le formulaire </p>
        <ul class="list-unstyled">
          <?php foreach ($_SESSION['erreurcreat'] as $erreu) :  ?>
          <li class=" w-50 mx-auto"> <?= $erreu; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php elseif (isset($_GET['validation']) == 'addok') : ?>
      <p class="alert alert-success rounded"> formulaire ok </p>
      <?php endif; ?>
      <form method="POST" action="../function/add.php" class="form-signin">
        <label class="sr-only">New Login</label>
        <input type="text" class="form-control" name="newLogin" placeholder="New Login"
          <?php if (!empty($_SESSION['post']['newLogin'])) : ?> value="<?= $_SESSION['post']['newLogin']; ?>"
          <?php endif; ?>>
        <label class=" sr-only">New Password</label>
        <input type="password" class="form-control my-4" name="newPassword" placeholder=" New Password">
        <label class=" sr-only">newTelNum</label>
        <input type="text" class="form-control my-4" name="newTelNum" placeholder="new TelNum"
          <?php if (!empty($_SESSION['post']['newTelNum'])) : ?> value="<?= $_SESSION['post']['newTelNum']; ?>"
          <?php endif; ?>>
        <label class=" sr-only">new Nom</label>
        <input type="text" class="form-control my-4" name="newNom" placeholder=" new Nom"
          <?php if (!empty($_SESSION['post']['newNom'])) : ?> value="<?= $_SESSION['post']['newNom']; ?>"
          <?php endif; ?>>
        <label class=" sr-only">new Prenom</label>
        <input type="text" class="form-control my-4" name="newPrenom" placeholder=" new Prenom"
          <?php if (!empty($_SESSION['post']['newPrenom'])) : ?> value="<?= $_SESSION['post']['newPrenom']; ?>"
          <?php endif; ?>>
        <label class=" sr-only">new Adress Postal</label>
        <input type="text" class="form-control my-4" name="newAdressPostal" placeholder=" new Adress Postal"
          <?php if (!empty($_SESSION['post']['newAdressPostal'])) : ?>
          value="<?= $_SESSION['post']['newAdressPostal']; ?>" <?php endif; ?>>
        <label class=" sr-only">New adress mail</label>
        <input type="text" class="form-control my-4" name="Newadress" placeholder="New adress mail"
          <?php if (!empty($_SESSION['post']['Newadress'])) : ?> value="<?= $_SESSION['post']['Newadress']; ?>"
          <?php endif; ?>>
        <label class="sr-only">New CIN</label>
        <input type="text" class="form-control" name="NewCIN" placeholder="New CIN"
          <?php if (!empty($_SESSION['post']['NewCIN'])) : ?> value="<?= $_SESSION['post']['NewCIN']; ?>"
          <?php endif; ?>>
        <label for=" role_id class=" sr-only" name="role_id">type user</label>
        <select id="country" name="role_id">
          <option value="admin">admin</option>
          <option value="user">user</option>
          <option value="dirrecteur">dirrecteur</option>
        </select>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="Submit" value="Submit">
      </form>
    </div>
  </div>
</div>