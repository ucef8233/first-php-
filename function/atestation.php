<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$mail = $_SESSION['adress'];
$fonctionality = $_SESSION['type_user'];
$CIN = $_SESSION['CIN'];
$name =  $_SESSION['nom'];
$lName = $_SESSION['prenom'];
$postal_adress = $_SESSION['adress_postal'];
$telNum = $_SESSION['tell'];

$mpdf = new \Mpdf\Mpdf();
$datatravail =  '
  <link rel="stylesheet" href="../css/style.css">
<body class="text-center">
  <header>
    <h1 class="display-4 my-5">ATTESTATION DE TRAVAILLE</h1>
  </header>
  <main class=" line-height">
    <span class="float-left">Je Sousigne :</span> <br>
    Mr <b>Salim Youssef</b> A TITRE DE gerant de la societé <b>NomDeSocieté </b>S.A.R.L size a 20 rue bla bla bla
    atteste par la present que MR : <b>' . $name . $lName . '</b> titilaire de la cart CIN : <b>' . $CIN . '</b> resident a :
    <b>' . $postal_adress . '</b> travaile
    cher
    NomDeSocieté au tant que : <b>' . $fonctionality . '</b> depuit le : <b>variable date de recrutement a rajouterdans la base de donner </b>
    Cette attestation est delivrée a la demande de l\'interessé pour servire et valoir ce que de droit
  </main>
  <footer class="float-right my-5">
    fait le : <b>' . date("Y/m/d") . '</b> a Casablanca
  </footer>
</body>
</html>';

$databp =  '
  <link rel="stylesheet" href="../css/style.css">
<body class="text-center">
  <header>
    <h1 class="display-4 my-5">BULTIN DE PAY</h1>
  </header>
  <main class=" line-height">
    <span class="float-left">Je Sousigne :</span> <br>
    Mr <b>Salim Youssef</b> A TITRE DE gerant de la societé <b>NomDeSocieté </b>S.A.R.L size a 20 rue bla bla bla
    atteste par la present que MR : <b>' . $name . $lName . '</b> titilaire de la cart CIN : <b>' . $CIN . '</b> resident a :
    <b>' . $postal_adress . '</b> travaile
    cher
    NomDeSocieté au tant que : <b>' . $fonctionality . '</b> depuit le : <b>variable date de recrutement a rajouterdans la base de donner </b>
    Cette attestation est delivrée a la demande de l\'interessé pour servire et valoir ce que de droit
  </main>
  <footer class="float-right my-5">
    fait le : <b>' . date("Y/m/d") . '</b> a Casablanca
  </footer>
</body>
</html>';

if (!empty($_POST['attestation'])) :
  $mpdf->WriteHTML($datatravail);
  $mpdf->Output('atestation.pdf', 'D');
elseif (!empty($_POST['bultinpay'])) :
  $mpdf->WriteHTML($databp);
  $mpdf->Output('bultinpay.pdf', 'D');
endif;