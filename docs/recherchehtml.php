<div class="float-right my-5 mx-5 border rounded p-5 bg-danger">
  <form action="../function/recherche.php" method="post">
    <label for="">CIN :</label> <br>
    <input id="test" class="py-2 mx-2" type="text" name="recherche"
      <?php if (isset($_GET['cin']) && $_GET['cin'] == 'trouver') : ?> value="<?= $_SESSION['valeur'] ?>"
      <?php endif; ?>>
    <input class="btn btn-primary py-2" type="submit" value="chercher" name='chercher'>
  </form>
</div>