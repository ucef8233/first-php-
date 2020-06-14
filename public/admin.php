<?php
$title = 'Section admin';
session_start();
if ($_SESSION) :
  include '../docs/header.php';
  include '../function/add.php';
?>
<h1 class="text-center mb-5 display-4">
  Bienvenu sur la section <?= $_SESSION['type_user'] ?> De : <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?>
</h1>
<?php require '../docs/recherchehtml.php'; ?>
<?php require '../docs/R.A.Dhtml.php'; ?>
<!-- add -->
<?php require '../docs/addhtml.php'; ?>
</div>
<?php include '../docs/footer.php';
else :
  include 'login.php';
endif;
?>