<?php
include 'config.php';
include 'function.php';
if (isset($_POST["register"])) {

    $email     = strip_tags(trim($_POST["email"]));
    $username =strip_tags(trim($_POST["username"]));
    $password     =strip_tags(trim($_POST["password"]));
    $password2    =strip_tags(trim($_POST["password2"]));
    $kod    = md5(rand(0,9999999999));
    $bugun = date('d-m-Y H:i:s');


        if (empty($email) || empty($username) || empty($password) || empty($password2) ){
            echo "bos";
        }else{
            $kullanicivarmi = $vt->prepare("select * from users where username=? || email=?");
            $kullanicivarmi-> execute(array($username,$email));
            $varmi          = $kullanicivarmi->rowCount();
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "email";

            }else{

                if ($varmi>0) {
                    echo "var";
                }else{
                    if ($password==$password2) {
                        $password     = sifrele($_POST["password"]);
                        $kullaniciekle= $vt->prepare("INSERT into users set email=?, username=?, password=?, kayit=?");
                        $kullaniciekle->execute(array($email,$username,$password,$bugun));
                        if ($kullaniciekle) {
                            $kullaniciekle= $vt->prepare("INSERT into obenelik set username=?");
                            $kullaniciekle->execute(array($username));
                            if ($kullaniciekle){
                                
                                $_SESSION["username"]=$username;
                                $_SESSION["password"]=$password;
                                echo "ok";
                            }
                        

                        }else{
                           echo "olmadi";
                        }
                    }else{
                        echo "sifre";

                    }
                }
            }
        }
    
}



if (isset($_POST["login_form"])) {
    $username  =strip_tags(trim($_POST["username"]));
    $password   =$_POST["password"];

    $kbilgi= $vt->prepare("select * from users where username=?");
    $kbilgi->execute(array($username));
    $bilgi = $kbilgi->fetch();
    $dt_password = $bilgi["password"];
    
        if (password_verify($password, $dt_password)) {

            $_SESSION["username"]=$username;
            $_SESSION["password"]=$password;
            echo "basarili";

        }else{
            echo "no";
        }
}


if(isset($_POST["out"])){
unset($_SESSION["username"]);
unset($_SESSION["password"]);
echo "basarili";
}



if(isset($_POST["gb_guncelle"])){
$username = $_SESSION["username"];
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$adres = $_POST["adres"];
$telefon = $_POST["telefon"];

    if (empty($ad) || empty($soyad) || empty($adres) || empty($telefon)){
        echo "bos";
    }else{
        
        if($username != $username){
            echo "giris";
        }else{
            if($username == NULL){
                echo "giris";
            }else{
                
                $kullanicivarmi = $vt->prepare("select * from kullanıcı_bilgi where username=?");
                $kullanicivarmi-> execute(array($username));
                $varmi          = $kullanicivarmi->rowCount();
                if($varmi>0){
                    echo "var";
                }else{
                $gb_guncelle= $vt->prepare("INSERT into kullanıcı_bilgi set username=?, ad=?, soyad=?, adres=?, telefon=?");
                $gb_guncelle->execute(array($username,$ad,$soyad,$adres,$telefon));
                if ($gb_guncelle) {

                    echo "ok";

                }else
                {
                    echo "hata";
                }
            }
            }
        }

    }

}

if(isset($_POST["bakiye_yukle"])){
    $username = $_SESSION["username"];
    $bakiye = $_POST["yk_bakiye"].".00";

    if (!empty($bakiye)){
        if($bakiye < 1){
            $bakiye = "1.00";
        }
        
        $bakiye_gb = $vt->prepare("UPDATE kullanıcı_bilgi set eklenecek_bakiye=? where username=?");
        $bakiye_gb->execute(array($bakiye,$username));
        if($bakiye_gb){
            echo "sa";
        }else{
            echo "olmadi";
        }
    
    }else{
        echo "bos";
    }
}

?>
