<div class="accordion w-75 mx-auto" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          demande de papier
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body mx-auto w-50">
        <form action="../function/atestation.php" method="POST" class='  my-3 d-flex justify-content-between'>
          <label for="example">IMPRIMER attestation de travaille</label>
          <input type="submit" name="attestation" value="Imprimer" class="btn btn-success">
        </form>
        <form action="../function/bultinpay.php" method="POST" class='d-flex justify-content-between'>
          <label for="example">IMPRIMER BULTIN DE PAYS</label>
          <input type="submit" name="bultinpay" value="Imprimer" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>