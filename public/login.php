<?php
$title = 'Login';
include '../docs/header.php';
require_once '../connexion.php';
?>
<main class="text-center">
  <form action="login.php" method="POST" class="form-signin">
    <h1 class="h3 mb-5 font-weight-normal">Please sign in</h1>
    <?php
    if (!empty($_POST)) :
      if (!empty($_POST['login']) && !empty($_POST['password'])) :
        $query = $connexion->prepare("SELECT * FROM users WHERE login='" . $_POST['login'] . "' ");
        $query->execute();
        $fetch = $query->fetch();
        $_SESSION = $fetch;
        if ($fetch) :
          if (password_verify($_POST['password'], $fetch['password'])) :
            if ($fetch['type_user'] == 'admin') :
              header('Location: admin.php');
              exit();
            elseif ($fetch['type_user'] == 'dirrecteur') :
              header('Location: dirrecteur.php');
              exit();
            else :
              header('Location: user.php');
              exit();
            endif;
          endif;
        else :
    ?>
    <!-- a modiffier methode Get -->
    <p class="bg-danger text-center p-2"> Id ou mdp incorrect</p>
    <?php
        endif;
      else :
        ?>
    <p class="bg-danger text-center p-2"> veiller sesir un id et mdp </p>
    <?php
      endif;
    endif;
    ?>
    <label for="login" class="sr-only">Login</label>
    <input type="text" class="form-control" name="login" placeholder="Login">
    <label for="inputPassword" class=" sr-only">Password</label>
    <input type="password" class="form-control my-4" name="password" placeholder="Password">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
  <?php include '../docs/footer.php'; ?>