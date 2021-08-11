<?php 
include'../core/config.php';
include'../pages/header.php';

?>
<link rel="stylesheet" href="/css/profil.css">
<main id="main">    
            
                <!-- Home Section -->
                <section class="page-section bg-dark-alfa-50 bg-scroll" data-background="/images/full-width-images/section-bg-19.jpg" id="home">
                    <div class="container relative">
                    
                        <div class="row">
                            
                            <div class="col-md-8">
                                <div class="wow fadeInUpShort" data-wow-delay=".1s">
                                    <h1 class="hs-line-7 mb-20 mb-xs-10">Hesabım</h1>
                                </div>
                                <div class="wow fadeInUpShort" data-wow-delay=".2s">
                                    <p class="hs-line-6 opacity-075 mb-20 mb-xs-0">
                                       Hesabınıza giriş yapın veya yeni bir hesap oluşturun.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-30 wow fadeInUpShort" data-wow-delay=".1s">
                                <div class="mod-breadcrumbs text-end">
                                    <a href="#">AnaSayfa</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<a href="#">Kullanıcı</a>&nbsp;<span class="mod-breadcrumbs-slash"></span>
                                </div>                                
                            </div>
                            
                        </div>
                    
                    </div>
                </section>
                
                <section class="blog-content ptb50 each-element">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <article class="vertical-item format-thumb clearfix ws_sidebar first" style="border: 2px solid #fffff;">
              
    <?php include'pages/header.php'; ?>

                </article>
            </div>
            <div class="col-lg-9 col-md-12">
                <article class="vertical-item format-thumb clearfix first second">
    <div class="post-content col-lg-12 col-md-12 col-sm-12 col-xs-12 equal-height" style="">
        <div class="post-wrapper">
            <div class="table">
                <div class="table-row">
                    <div class="table-cell valign-top"><div class="ws_article_baslik"><i class="fa fa-fw fa-user"></i> GENEL BILGILER</div></div>
                </div>
            </div>
            <div class="mt15">

            <script>

function gb_guncelle() {
    toastr.options = {
        closeButton: !1,
        debug: !1,
        newestOnTop: !1,
        progressBar: !0,
        positionClass: "toast-bottom-right",
        preventDuplicates: !1,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
    };
    var e = $("#genel_guncelle").serialize();
    $.ajax({
        type: "POST",
        data: e,
        url: "../core/kernel.php",
        success: function (e) {
            "bos" == $.trim(e)
                    ? toastr.info("Lütfen boş alan bırakmayınız")

                    : "var" == $.trim(e)
                    ? toastr.error("Bilgileriniz zaten veri tabanına kayıtlı")
                    : "ok" == $.trim(e)
                    ? toastr.success("Bilgileriniz başarılı şekilde kayıt edildi")
                    : "hata" == $.trim(e) && toastr.error("Sistemsel hata oluştu");
        },
    });
}

            </script>
                <form id="genel_guncelle" action="" method="POST"  onsubmit="return false;">
                <div class="row ws_form" id="gb_form">

                    <div class="ws_col col-md-6">
                        <div class="ws_label">İsim</div>
                        <input id="gb_ad" type="text" name="ad" value="<?php echo $gbilgi["ad"] ?>" class="form-control" required="">
                    </div>
                    <div class="ws_col col-md-6">
                        <div class="ws_label">Soyisim</div>
                        <input id="gb_soyad" type="text" name="soyad" value="<?php echo $gbilgi["soyad"] ?>" class="form-control" required="">
                    </div>
                    <div class="ws_col col-md-12">
                        <div class="ws_label">Adres (Ödeme yapabilmeniz için gereklidir.)</div>
                        <input id="gb_adres" type="text" name="adres" value="<?php echo $gbilgi["adres"] ?>" class="form-control">
                    </div>
                    <div class="ws_col col-md-6">
                        <div class="ws_label">Telefon Numarası (05xxxxxxxxx)</div>
                        <input id="gb_telefon" type="text" name="telefon" value="<?php echo $gbilgi["telefon"] ?>" class="form-control">
                    </div>

                    <div class="ws_col col-md-6">
                        <div class="ws_label">E-Posta</div>
                        <input id="gb_eposta" type="email" name="email" value="<?php echo $bilgi["email"] ?>" class="form-control">
                        <input type="hidden" name="gb_guncelle">
                    </div>
                    <div class="ws_col col-md-12">
                        <b style="color: rgb(255, 255, 255)">* Bilgilerinizi lütfen doğru giriniz aksi halde ödemeleriniz onaylanmaz.</b><br>
                    </div>

                </div>

            </div>
        </div>
        <div class="post-bottom table">
            <div class="table-cell valign-middle text-right">

            
                <a href="#gb" class="btn ws_btn" onclick="gb_guncelle();"><i class="fa fa-fw fa-thumbs-up"></i> BİLGİLERİ GÜNCELLE</a>
            </div>
            </form>
        </div>
    </div>
</article>


<article class="vertical-item format-thumb clearfix third">
    <div class="post-content col-lg-12 col-md-12 col-sm-12 col-xs-12 equal-height" style="">
        <div class="post-wrapper">
            <div class="table">
                <div class="table-row">
                    <div class="table-cell valign-top"><div class="ws_article_baslik"><i class="fa fa-fw fa-lock"></i> ŞİFREMİ YENİLE</div></div>
                </div>
            </div>
            <div class="mt15">
                <div class="row ws_form" id="sifre_yenile_form">

                    <div class="ws_col col-md-12">
                        <div class="ws_label">Eski Şifre</div>
                        <input id="sy_esifre" type="password" value="" class="form-control" required="">
                    </div>
                    <div class="ws_col col-md-6">
                        <div class="ws_label">Yeni Şifre</div>
                        <input id="sy_ysifre" type="password" value="" class="form-control" required="">
                    </div>
                    <div class="ws_col col-md-6">
                        <div class="ws_label">Yeni Şifre Tekrar</div>
                        <input id="sy_ysifret" type="password" value="" class="form-control" required="">
                    </div>

                </div>

            </div>
        </div>
        <div class="post-bottom table">
            <div class="table-cell valign-middle text-right">
                <a href="#" class="btn ws_btn" onclick="sifremi_yenile();"><i class="fa fa-fw fa-lock"></i> ŞİFREMİ GÜNCELLE</a>
            </div>
        </div>
    </div>
</article>
            </div>
        </div>
    </div>
</section>
               

            </main>

<?php 
include'../pages/footer.php';
?>