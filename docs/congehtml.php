<div class="card">
  <div class="card-header" id="headingTwo">
    <h2 class="mb-0">
      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        demande de congé
      </button>
    </h2>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">
      <form action="../function/conge.php" method="POST">
        <input type="date" name="datedebut" value="date debut ">
        <input type="date" name="datefin" value="date fin ">
        <input type="submit" value="demander un conger" name="conge">
      </form>
    </div>
  </div>
</div>
</div>