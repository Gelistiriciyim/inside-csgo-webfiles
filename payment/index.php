<?php

include'../core/config.php';
$username= $_SESSION["username"];
$genel_bilgi= $vt->prepare("select * from kullanıcı_bilgi where username=?");
$genel_bilgi->execute(array($username));
$gbilgi = $genel_bilgi->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödeme Formu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
</head>
<body>

  <?php


    if(isset($_POST['status']) && $_POST['status'] == 1){

     echo 'ödeme başarılı';
     echo $_POST['otherCode'];

      exit;
     

    }



   if(isset($_POST['submit'])){

$tarayici = $_SERVER['HTTP_USER_AGENT'];

$ip = "176.232.180.168";

$kod = uniqid();


 $isim = $gbilgi["ad"]. " ". $gbilgi["soyad"];
 $kart = $_POST['kart'];
 $ay   = $_POST['ay'];
 $yil  = $_POST['yil'];
 $cvc  = $_POST['cvc'];


$data = [];
 
 $data['apiSecret']="";  // payizor api key bilgisi
$data['hash']= hash("sha256","|@gmail.com|");

$data['installment'] = "0"; // taksit sayısı 0 seçilirse taksit yok demektir..
$data['clientIp'] = $ip; // kullanıcı ip adresi
$data['userAgent'] = $tarayici; // kullanıcının tarayıcı bilgisi
$data['otherCode'] = $kod; //benzersiz spariş kodu
$data['redirectUrl'] = "http://localhost/payment/sonuc.php"; // 3d ödeme başarılıysa yönelecek adres 

$data['cardHolderFullName'] = $isim; // kart üzerindeki full isim
$data['cardNumber'] = $kart; // kart numarası
$data['expMonth'] = $ay; // Son kullanma tarihi ay 
$data['expYear'] = $yil; // son kullanma tarihi yıl
$data['cvcNumber'] = $cvc; // kartın arkasındaki cvc numarası
$data['amount'] = $gbilgi["eklenecek_bakiye"]; // fiyat bilgisi küsürat belirtmek isterseniz 10.5 şeklinde yazın
$data['assetMessage'] = "Satılan ürüne ait açıklama"; // ürün açıklaması

// payizor bilgiler internet üzerinden curl ile çekme kodları
$ch = curl_init("https://v2api.payizor.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec ($ch);
curl_close ($ch);

// kodları json çıktısından php dizisine çevirme işlemi
$sonuc = json_decode($result,true);

 print_r($sonuc);

// kart bilgisi doğru ise telefona gelen kod ekranına yönledirme..
  if($sonuc['status'] == 1){
      
    header('location:'.$sonuc['paymentUrl']);

  }else {

     echo 'hata';

  }

}else {

?>
       <!--- ödeme Formu bilgileri --->
      
          <div class="container pb-5 pt-5">

                <div class="row mb-4" >
                <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4">Ödeme Formu</h1>
                </div>
                </div> <!-- End -->
                <div class="row">
                <div class="col-lg-6 mx-auto">
                <div class="card ">
                <div class="card-header">
                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> kredi kartı</a> </li>
                </ul>
                <div class="tab-content">
                <div id="credit-card" class="tab-pane fade show active pt-3">
                <center> <p>Ödeyeceğiniz tutar <strong> <?php echo $gbilgi["eklenecek_bakiye"]; ?> TL </strong></p></center>
                <form  action="" method="post">
             
                <div class="form-group"> <label for="cardNumber">
                
                <h6>kart numarası</h6>
                </label>
                <div class="input-group"> <input type="text" name="kart" placeholder="kart numarası" class="form-control" pattern="[0-9]*" inputmode="numeric" maxlength="16" required>
                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-8">
                <div class="form-group"> <label><span class="hidden-xs">
                <h6>Son Kullanma Tarihi</h6>
                </span></label>
                <div class="input-group"> <input type="number" placeholder="ay" name="ay"  class="form-control" required> <input type="number" placeholder="yil" name="yil" class="form-control" required> </div>
                </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group mb-4"> <label data-toggle="tooltip" title="kartın arkasındaki cvc numarası">
                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                </label> <input type="text" name="cvc" placeholder="cvc numarası" required class="form-control"> </div>
                </div>
                </div>
                <button type="submit" name="submit" class="subscribe btn btn-primary btn-block shadow-sm"> Ödemeyi yap</button>
                </form>
                </div> 
               </div>
                </div>
                </div>
                </div>
    
</body>
</html>
<?php }?>