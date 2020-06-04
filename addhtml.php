<div class="card">
  <div class="card-header" id="headingOne">
    <h2 class="mb-0">
      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        AJOUTER
      </button>
    </h2>
  </div>

  <div id="collapseOne" class="collapse <?php if (!empty($erreur)) : ?> show
    <?php endif; ?>   " aria-labelledby=" headingOne" data-parent="#accordionExample">
    <div class="card-body ">
      <?php if (!empty($erreur)) : ?>
      <div class="alert alert-danger rounded">
        <p>Vous n'avez pas bien remlie le formulaire </p>
        <ul class="list-unstyled">
          <?php foreach ($erreur as $erreu) :  ?>
          <li class="alert alert-danger w-50> <?= $erreu; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
      <form action=" admin.php" method="POST" class="form-signin">
            <label class="sr-only">New Login</label>
            <input type="text" class="form-control" name="newLogin" placeholder="New Login"
              <?php if ((!empty($_POST['Newadress'])) && !$userfetch) : ?> value="<?= $_POST['newLogin']; ?>"
              <?php endif; ?>>
            <label class=" sr-only">New Password</label>
            <input type="password" class="form-control my-4" name="newPassword" placeholder=" New Password">
            <label class=" sr-only">newTelNum</label>
            <input type="text" class="form-control my-4" name="newTelNum" placeholder="new TelNum"
              <?php if (!empty($_POST['newTelNum'])) : ?> value="<?= $_POST['newTelNum']; ?>" <?php endif; ?>>
            <label class=" sr-only">new Nom</label>
            <input type="text" class="form-control my-4" name="newNom" placeholder=" new Nom"
              <?php if (!empty($_POST['newNom'])) : ?> value="<?= $_POST['newNom']; ?>" <?php endif; ?>>
            <label class=" sr-only">new Prenom</label>
            <input type="text" class="form-control my-4" name="newPrenom" placeholder=" new Prenom"
              <?php if (!empty($_POST['newPrenom'])) : ?> value="<?= $_POST['newPrenom']; ?>" <?php endif; ?>>
            <label class=" sr-only">new Adress Postal</label>
            <input type="text" class="form-control my-4" name="newAdressPostal" placeholder=" new Adress Postal"
              <?php if (!empty($_POST['newAdressPostal'])) : ?> value="<?= $_POST['newAdressPostal']; ?>"
              <?php endif; ?>>
            <label class=" sr-only">New adress mail</label>
            <input type="text" class="form-control my-4" name="Newadress" placeholder="New adress mail"
              <?php if ((!empty($_POST['Newadress'])) && !$mailfetch) : ?> value="<?= $_POST['Newadress']; ?>"
              <?php endif; ?>>
            <label class="sr-only">New CIN</label>
            <input type="text" class="form-control" name="NewCIN" placeholder="New CIN"
              <?php if ((!empty($_POST['NewCIN'])) && !$CINfetch) : ?> value="<?= $_POST['NewCIN']; ?>" <?php endif; ?>>
            <label for=" role_id class=" sr-only" name="role_id">type user</label>
            <select id="country" name="role_id">
              <option value="admin">admin</option>
              <option value="user">user</option>
              <option value="dirrecteur">dirrecteur</option>
            </select>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
            </form>
      </div>
    </div>
  </div>