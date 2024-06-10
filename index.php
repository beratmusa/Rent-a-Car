<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="rent_a_car.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/animations.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
  </head>
  <body>
    <main>
      <div class="video-background">
        <video src="items/video_2.mp4" autoplay loop muted></video>
      </div>
      <header>
        <div class="logo">
          <a href=""><h1>Kutlu Rent a Car</h1></a>
        </div>
        <div class="nav">
          <ul>
            <li><a href="#İletişim">İletişim</a></li>
            <!-- <li><a href="#Araçlar">Araçlar</a></li> -->
            <li><a href="#Ofis">Ofis</a></li>
            <li><a href="#Üye" onclick="Uye_giris()">Üye Girişi</a></li>
          </ul>
        </div>
      </header>
      <div id="slogan">
        <div id="slogan_alt">
          <p>Güvenle</p>
          <p id="alt">Kirala</p>
          <a href="#" id="rezerv" onclick="rezervasyon()">
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
          </a>
        </div>
        <div class="Rezervasyon" id="rezervasyon">
          <form action="baglanti.php" method="post" class="form-box">
            <label for="alş-trh" class="input-writing">Alış Tarihi</label>
            <input type="date" name="date1" class="date" />
            <label for="vrş-trh" class="input-writing">Veriş Tarihi</label>
            <input type="date" name="date2" class="date" />
            <button type="submit" name="rezerv" value="rezerv">Rezerve Et</button>
          </form>
        </div>
        <div class="uye_giris" id="Uye_giris">
          <form action="baglanti.php" method="post" class="form-box">
            <input
              class="giris"
              type="text"
              name="Ad"
              placeholder="Kullanıcı Adı Giriniz"
              required
            />
            <input
              class="giris"
              type="password"
              name="Sifre"
              placeholder="Şifre Giriniz"
              required
            />
            <a href="#">Şifremi Unuttum</a>
            <button type="submit" name="giris" value="giris">Giriş</button>
            <button type="submit" onclick="kayit()">Üye Ol</button>
          </form>
        </div>
        <div class="uye_giris" id="kayit">
          <form action="baglanti.php" method="post" class="form-box">
            <input
              type="text"
              class="giris"
              name="ad"
              placeholder="Kullanıcı Adı Giriniz"
              required
            />
            <input
              type="password"
              class="giris"
              name="sifre"
              placeholder="Şifre Giriniz"
              required
            />
            <input
              type="email"
              class="giris"
              name="mail"
              placeholder="Mail Giriniz"
              required
            />
            <span
              ><a href="#"
                ><input type="checkbox" name="onay" id="onay" required />Kullanıcı
                Sözleşmesini</a
              >
              Onaylıyorum</span
            >
            <button type="submit" name="kaydet" value="kaydet">Üye Ol</button>
          </form>
        </div>
      </div>
    </main>
    <div class="row">
      <div class="col-1 card" id="Ofis">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.071901255691!2d32.8251516!3d39.9844985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34dfefb40a955%3A0x58d4b2e6e702d66e!2sKUTLU%20RENT%20A%20CAR!5e0!3m2!1str!2str!4v1671431290807!5m2!1str!2str"
          width="400"
          height="500"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div class="col-2 card" id="İletişim">
        <p>İletişim</p>
        <ul>
          <li>+90 0543 476 0625</li>
          <li>
            <a
              target="_blank"
              href="https://mail.google.com/mail/u/0/#inbox?compose=new"
              >berat32669@gmail.com</a
            >
          </li>
        </ul>
      </div>
    </div>
    <footer></footer>
    <script src="app.js"></script>
  </body>
</html>

