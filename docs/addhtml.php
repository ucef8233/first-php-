<tbody>
  <form method="POST" action="../function/add.php" class="form-signin">
    <td></td>
    <td>
      <p class="my-3">ID</p>
    </td>
    <td><label class=" sr-only">New Login</label>
      <input type="text" class="form-control my-2" name="newLogin" placeholder="New Login"
        <?php if (isset($_GET['erreuradd']) && ($_GET['erreuradd'] == 'addnull') && !empty($_SESSION['post']['newLogin'])) : ?>
        value="<?= $_SESSION['post']['newLogin']; ?>" <?php endif; ?>></td>
    <td> <label class=" sr-only">New Password</label>
      <input type="password" class="form-control my-2" name="newPassword" placeholder=" New Password"></td>
    <td>
      <label class=" sr-only">New adress mail</label>
      <input type="text" class="form-control my-2" name="Newadress" placeholder="New adress mail"
        <?php if (isset($_GET['erreuradd']) && ($_GET['erreuradd'] == 'addnull') && !empty($_SESSION['post']['Newadress'])) : ?>
        value="<?= $_SESSION['post']['Newadress']; ?>" <?php endif; ?>></td>
    <td>
      <select id="country" name="role_id">
        <option value="admin">admin</option>
        <option value="user">user</option>
        <option value="dirrecteur">dirrecteur</option>
      </select></td>
    <td>
      <label class=" sr-only">New CIN</label>
      <input type="text" class="form-control my-2" name="NewCIN" placeholder="New CIN"
        <?php if (isset($_GET['erreuradd']) && ($_GET['erreuradd'] == 'addnull') && !empty($_SESSION['post']['NewCIN'])) : ?>
        value="<?= $_SESSION['post']['NewCIN']; ?>" <?php endif; ?>></td>
    <td> <label class=" sr-only">new Nom</label>
      <input type="text" class="form-control my-2" name="newNom" placeholder=" new Nom"
        <?php if (isset($_GET['erreuradd']) && ($_GET['erreuradd'] == 'addnull') && !empty($_SESSION['post']['newNom'])) : ?>
        value="<?= $_SESSION['post']['newNom']; ?>" <?php endif; ?>></td>
    <td><label class=" sr-only">new Prenom</label>
      <input type="text" class="form-control my-2" name="newPrenom" placeholder=" new Prenom"
        <?php if (isset($_GET['erreuradd']) && ($_GET['erreuradd'] == 'addnull') && !empty($_SESSION['post']['newPrenom'])) : ?>
        value="<?= $_SESSION['post']['newPrenom']; ?>" <?php endif; ?>></td>
    <td> <label class=" sr-only">new Adress Postal</label>
      <input type="text" class="form-control my-2" name="newAdressPostal" placeholder=" new Adress Postal"
        <?php if (isset($_GET['erreuradd']) && ($_GET['erreuradd'] == 'addnull') && !empty($_SESSION['post']['newAdressPostal'])) : ?>
        value="<?= $_SESSION['post']['newAdressPostal']; ?>" <?php endif; ?>></td>


    <td> <label class=" sr-only">newTelNum</label>
      <input type="text" class="form-control my-2" name="newTelNum" placeholder="new TelNum"
        <?php if (isset($_GET['erreuradd']) && ($_GET['erreuradd'] == 'addnull') && !empty($_SESSION['post']['newTelNum'])) : ?>
        value="<?= $_SESSION['post']['newTelNum']; ?>" <?php endif; ?>></td>
    <td colspan="2"><input class="btn btn-lg btn-primary btn-block my-2" type="submit" name="Submit" value="Ajouter">
    </td>
  </form>
</tbody>
</table>
<?php if (isset($_GET['erreuradd']) == 'addnull') : ?>
<div class="alert alert-danger rounded w-50 mx-auto">
  <p>Vous n'avez pas bien remlie le formulaire </p>
  <ul class="list-unstyled w-50 mx-auto ">
    <?php foreach ($_SESSION['erreurcreat'] as $erreu) :  ?>
    <li> <?= $erreu; ?></li>
    <?php endforeach; ?>
  </ul>
</div>
<?php elseif (isset($_GET['validation']) == 'addok') : ?>
<p class="alert alert-success rounded"> formulaire ok </p>
<?php endif; ?>