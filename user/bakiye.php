<?php 
include'../core/config.php';
include'../pages/header.php';

?>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>

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
                                                <script>
function bakiye() {

        var e = $("#bakiye_form").serialize();
        $.ajax({
            type: "POST",
            data: e,
            url: "../core/kernel.php",
            success: function (e) {
                if ($.trim(e) == "sa"){
                    
            console.log('iframe Güncelleniyor..');
            document.getElementById('iframe').contentWindow.location.reload();
                   
                }
            },
        });
    }

</script>
                </article>
            </div>
            <div class="col-lg-9 col-md-12">
                <article class="vertical-item format-thumb clearfix first second">
    <div class="post-content col-lg-12 col-md-12 col-sm-12 col-xs-12 equal-height" style="">
        <div class="post-wrapper">
            <div class="table">
                <div class="table-row">
                    <div class="table-cell valign-top"><div class="ws_article_baslik"><i class="fa fa-fw fa-user"></i> BAKİYE YÜKLE</div></div>
                </div>
            </div>
            <div class="mt15">


               
                <div class="row ws_form" id="gb_form">
                <div class="ws_col col-md-12">
                <form id="bakiye_form" action="" method="POST"  onsubmit="return false;">
                            
                        <input type="number" name="yk_bakiye" class="form-control" min="1" max="99999" style="text-align: center;">
                        <input type="hidden" name="bakiye_yukle" value="1">
                    </div>
                <button class="btn ws_btn" onclick="bakiye()" data-toggle="modal" data-target="#exampleModalCenter">Bakiye Yükle</button>

                </form>


                

                </div>

            </div>
        </div>
       
    </div>
</article>



            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body">

     
      <iframe id="iframe" height="650px" frameborder="0" scrolling="auto" marginheight="0" marginwidth="0" src="/payment/index.php" style="width: 100%"></iframe>
               
      </div>
      
    </div>
  </div>
</div>     



            </main>


            


<?php 
include'../pages/footer.php';
?>