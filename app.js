var rezerve = document.getElementById("rezervasyon");
var slogan = document.getElementById("slogan_alt");
var uye_giris = document.getElementById("Uye_giris");
var Kayit = document.getElementById("kayit");

function rezervasyon() {
  rezerve.style.left = "55px";
  slogan.style.left = "440px";
}

function Uye_giris() {
  slogan.style.left = "440px";
  uye_giris.style.left = "55px";
  rezerve.style.left = "440px";
  Kayit.style.left = "440px";
}

function kayit() {
  slogan.style.left = "440px";
  uye_giris.style.left = "440px";
  rezerve.style.left = "440px";
  Kayit.style.left = "55px";
}
