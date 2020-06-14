<?php
session_start();
if (!empty($_POST)) :
  $_SESSION['valeur'] = $_POST['recherche'];
  header('location:../public/admin.php?cin=trouver');
endif;