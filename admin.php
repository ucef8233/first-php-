<?php
$title = 'Section admin';
include 'header.php';
?>
<h1 class="text-center mb-5 display-4">
  Bienvenu sur la section <?= $_SESSION['type_user'] ?> De : <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?>
</h1>

<div class="accordion text-center" id="accordionExample">
  <?php require 'addhtml.php'; ?>

  <?php require 'delethtml.php'; ?>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
          data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          modiffier
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
        officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
        haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>