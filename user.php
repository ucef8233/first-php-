<?php
$title = 'Section User';
include 'header.php';

?>
<h1 class="text-center mb-5 display-4">
  Bienvenu sur la section <?= $_SESSION['type_user'] ?> De : <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?>
</h1>

<?php include 'footer.php'; ?>