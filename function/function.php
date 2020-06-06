<?php
if (session_id() == "") session_start();
// if (!function_exists('nav_item')) :  /// verriffier si la function existe 
function nav_item(string $lien, string $titre, string $classHeader = ''): string
{
  $classe = 'nav-item mx-4';

  if (($_SERVER['SCRIPT_NAME'] === $lien)) {
    $classe .= ' active';
  }

  if (!empty($_SESSION['login']) && $titre ==  'Login') :
    $retur =  ' <li class="' . activeProfil() . ' mx-4 ">
               <a class="' . $classHeader . '" href="/GestionConge/public/' . $_SESSION['type_user'] . '.php"> Profile: ' . $_SESSION['nom'] . ' </a>
             </li>
             <li class="nav-item  mx-4">
               <a class="' . $classHeader . ' btn btn-outline-secondary " href="../function/logout.php"> Logout </a>
             </li>';
    return $retur;
  else :
    return  '<li class="' . $classe . '  ">
               <a class="' . $classHeader . '" href="' . $lien . '">' . $titre . '</a>
             </li>';
  endif;
}
function nav_menu(string $classHeader = ''): string

{
  return
    nav_item('/GestionConge/public/index.php', 'Home', $classHeader) .
    nav_item('/GestionConge/public/login.php', 'Login', $classHeader);
}

function activeProfil()
{
  if ($_SERVER['SCRIPT_NAME'] === '/GestionConge/public/' . $_SESSION['type_user'] . '.php') {
    return 'active';
  }
}