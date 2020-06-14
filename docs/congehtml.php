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
        <div class="d-flex my-5">
          <div class="mx-5">
            <label for="">Date debut </label> </br>
            <input id="mySelect" type="date" name="datedebut" value="" onchange="myFunction()">

          </div>
          <div>
            <label for="">Date Fin </label> </br>
            <input type="date" name="datefin" value="">
          </div>
        </div>
        <input class="float-right btn btn-lg btn-primary my-5" type="submit" value="demander un conger" name="conge">
      </form>
    </div>
  </div>
</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  console.log(x);
  var q = new Date();
  var m = q.getMonth();
  var d = q.getDay();
  var y = q.getFullYear();

  var date = new Date(y, m, d);

  mydate = new Date(x);
  console.log(date);
  console.log(mydate)

  // if (date > mydate) {
  //   alert("greater");
  // } else {
  //   alert("smaller")
  // }

}
</script>