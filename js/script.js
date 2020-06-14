var test = document.getElementById("test").value;
var testing = document.getElementsByClassName("tets2");
console.log(test);

if (test != "") {
  testing.removeAttribute("disabled");
}
