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
                    <div class="table-cell valign-top"><div class="ws_article_baslik"><i class="fa fa-fw fa-user"></i> Hesap Ekstreniz </div></div>
                </div>
            </div>
            <div class="mt15">
               
            <div class="row">

                    <table class="ws_table">
                        <thead>
                            <tr>
                                <th>İd</th>
                                <th>Tarih</th>
                                <th>İşlem</th>
                                <th>Giriş</th>
                                <th>Çıkış</th>
                                <th>Bakiye</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                  
                  $eks_bilgi= $vt->prepare("select * from ekstre where username=?");
                  $eks_bilgi->execute(array($username));
                  $eks = $eks_bilgi->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($eks as $ekscek) {?>
                <tr>
                  <td colspan="1" class="tac"><?php echo $ekscek["id"] ?></td>
                  <td colspan="1" class="tac"><?php echo $ekscek["tarih"] ?></td>
                  <td colspan="1" class="tac"><?php echo $ekscek["islem"] ?></td>
				  <td colspan="1" class="tac"><?php echo $ekscek["giris"] ?></td>
                  <td colspan="1" class="tac"><?php echo $ekscek["cıkıs"] ?></td>        
                  <td colspan="1" class="tac"><?php echo $ekscek["bakiye"] ?></td>         
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
       
    </div>
</article>



</section>
               

            </main>

<?php 
include'../pages/footer.php';
?>