<?php
      session_start();


$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "rent_a_car";

$baglan = mysqli_connect("$host","$kullanici","","$veritabani");
mysqli_set_charset($baglan, "utf8");

if(isset($_POST["kaydet"])){

  $ad = $_POST['ad'];
  $sifre = $_POST['sifre'];
  $mail = $_POST['mail'];
  $dateA = $_POST['date1'];
  $dateB = $_POST['date2'];
  $dateA = date("Y-m-d",strtotime($dateA));
  $dateB = date("Y-m-d",strtotime($dateB));
  
  $sqlekle = "INSERT INTO uye_kayit(ad,sifre,mail,date1,date2) VALUES('$ad','$sifre','$mail','$dateA','$dateB')";
  $sonuc = mysqli_query($baglan, $sqlekle);

  if ($sonuc) {
    echo "<script> alert('Kayıt Başarılı!');window.location.href = 'index.php'; </script>";
     } else {
         echo "Üye ekleme hatası " . mysqli_error($baglan);
     }

  echo($sonuc);
}



  if(isset($_POST["giris"])){

    $Ad = $_POST['Ad'];
    $Sifre = $_POST['Sifre'];
    
    $secim = "SELECT * FROM uye_kayit WHERE ad = '$Ad' AND sifre = '$Sifre'";
    $result = mysqli_query($baglan, $secim);

    if (mysqli_num_rows($result) == 1) {

      
       while($row = $result -> fetch_assoc()){
        $_SESSION['Ad'] = $row['ad'];
        // echo $_SESSION['Ad'];
        echo "<script> alert('Hoşgeldiniz ${Ad}');window.location.href = 'index.php';</script>";
        
        if(isset($_POST["rezerv"])){
          $date1 = $_POST['date1'] ;
          $date2 = $_POST['date2'];
          $trh = "INSERT INTO uye_kayit (date1,date2) VALUES ('$date1','$date2')";
          
           if (mysqli_query($baglan, $trh)) {
             echo "<script> alert('Kayıt Başarılı!');window.location.href = 'index.php'; </script>";
              } else {
                  echo "tarih ekleme hatası " . mysqli_error($baglan);
              }

        }
      }

      // $user = $result -> fetch_assoc();
      // $_SESSION['Ad'] = $user['Ad'];
      //  echo $_SESSION['Ad'];


    } else {
      echo "<script> alert('Hatalı Giriş!');window.location.href = 'index.php'; </script>";
    }

  }


  mysqli_close($baglan);




?>