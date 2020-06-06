<?php require_once '../function/function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title><?= $title ?></title>
</head>

<body>
  <header class="d-flex flex-column h-100">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark mb-5 bg-danger">
      <a class="navbar-brand" href="/GestionConge/public/index.php">Gestion Congé</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarCollapse">
        <ul class="navbar-nav ">
          <?= nav_menu('nav-link') ?>
        </ul>
      </div>
    </nav>
  </header>