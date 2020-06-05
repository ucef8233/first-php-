<?php
$title = 'Section admin';
session_start();
if ($_SESSION) :
  include 'header.php';
  include 'verification.php';
?>
<h1 class="text-center mb-5 display-4">
  Bienvenu sur la section <?= $_SESSION['type_user'] ?> De : <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?>
</h1>

<div class="accordion text-center" id="accordionExample">
  <?php require 'addhtml.php'; ?>
  <?php require 'delethtml.php'; ?>
  <?php require 'updatehtml.php'; ?>
</div>

<?php include 'footer.php';

else :
  include 'login.php';
endif;

?>