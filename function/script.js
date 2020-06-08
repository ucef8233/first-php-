var chek = document.querySelectorAll("input.chek");
var disabl = document.querySelectorAll(".disab0");

$("input.chek").click(function () {
  if ($("input.chek").is(":checked") == true) {
    $(".disab").removeAttr("disabled");
  } else {
    $(".disab").attr("disabled", "disabled");
  }
});

for (let i = 0; i < chek.length; i++) {}
