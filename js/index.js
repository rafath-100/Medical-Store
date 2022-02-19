var x = document.getElementById("our-1");
var y = document.getElementById("our-2");
var z = document.getElementById("our-3");
var xx = document.getElementById("box-1");
var yy = document.getElementById("box-2");
var zz = document.getElementById("box-3");

function pehla() {
  console.log(1);
  document.getElementById("our-1").style.left = "0px";
  document.getElementById("our-2").style.left = "50vw";
  document.getElementById("our-3").style.left = "100vw";
  document.getElementById("box-1").classList.add("active");
  document.getElementById("box-2").classList.remove("active");
  document.getElementById("box-3").classList.remove("active");
}
function dusra() {
  console.log(2);
  document.getElementById("our-2").style.left = "0";
  document.getElementById("our-1").style.left = "-50vw";
  document.getElementById("our-3").style.left = "50vw";
  document.getElementById("box-2").classList.add("active");
  document.getElementById("box-1").classList.remove("active");
  document.getElementById("box-3").classList.remove("active");
}
function teesra() {
  console.log(3);
  document.getElementById("our-3").style.left = "0";
  document.getElementById("our-2").style.left = "-50vw";
  document.getElementById("our-1").style.left = "-100vw";
  document.getElementById("box-3").classList.add("active");
  document.getElementById("box-2").classList.remove("active");
  document.getElementById("box-1").classList.remove("active");
}
