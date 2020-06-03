<?php
session_start();
if ($_SESSION) :
  require 'header.php';
  $title = 'Section User';

?>
<h1 class="text-center mb-5 display-4">
  Bienvenu sur la section <?= $_SESSION['type_user'] ?> De : <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?>
</h1>

<?php include 'footer.php';
else :
  include 'login.php';
endif;
?>