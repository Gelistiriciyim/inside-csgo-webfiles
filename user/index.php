<?php 
include'../core/config.php';
include'../pages/header.php';
?>

<script> function endstar_giris(){toastr.options={closeButton:!1,debug:!1,newestOnTop:!1,progressBar:!0,positionClass:"toast-bottom-right",preventDuplicates:!1,onclick:null,showDuration:"300",hideDuration:"1000",timeOut:"5000",extendedTimeOut:"1000",showEasing:"swing",hideEasing:"linear",showMethod:"fadeIn",hideMethod:"fadeOut"};var t=$("#girisforum").serialize();$.ajax({type:"POST",data:t,url:"../core/kernel.php",success:function(t){"no"==$.trim(t)?(toastr.error("Lütfen geçerli kullanıcı adı veya şifre girin"),grecaptcha.reset()):"dogrulama"==$.trim(t)?(toastr.info("Lütfen robot doğrulamasını yapınız. (Sorun çıkarsa sayfayı yenileyin)","Doğrulama"),grecaptcha.reset()):"basarili"==$.trim(t)&&(toastr.success("Giriş Başarılı Yönlendiriliyorsunuz"),setTimeout(function(){window.location="/user/profil.php"},1500),grecaptcha.reset())}})}function endstar_kayit(){toastr.options={closeButton:!1,debug:!1,newestOnTop:!1,progressBar:!0,positionClass:"toast-bottom-right",preventDuplicates:!1,onclick:null,showDuration:"300",hideDuration:"1000",timeOut:"5000",extendedTimeOut:"1000",showEasing:"swing",hideEasing:"linear",showMethod:"fadeIn",hideMethod:"fadeOut"};var t=$("#kayitform").serialize();$.ajax({type:"POST",data:t,url:"../core/kernel.php",success:function(t){"bos"==$.trim(t)?toastr.info("Lütfen boş alan bırakmayınız"):"email"==$.trim(t)?toastr.info("Lütfen geçerli mail adresi giriniz"):"var"==$.trim(t)?toastr.error("E-Mail ve Kullanıcı Adı ile zaten kayıt olunmuş"):"ok"==$.trim(t)?(toastr.success("Kayıt başarılı yönlendiriliyorsunuz..."),setTimeout(function(){window.location="/user/profil.php"},2e3)):"olmadi"==$.trim(t)?toastr.error("Sistemsel hata oluştu yetkililere bildiriniz!"):"sifre"==$.trim(t)?toastr.info("Lütfen şifrelerini aynı olduğundan emin olun"):"dogrulama"==$.trim(t)&&toastr.error("Lütfen doğrulamayı yapın")}})} </script>

<main id="main">    

                
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
                

                <section class="page-section bg-dark light-content">
                    <div class="container">

                        <div class="align-center mb-70 mb-xxs-50 wow fadeInUpShort">
                            <ul class="nav nav-tabs tpl-minimal-tabs animate" id="myTab-account" role="tablist">
                                
                                <li class="nav-item">
                                    <a href="#account-login" class="nav-link active" id="account-login-tab" data-bs-toggle="tab"  role="tab" aria-controls="account-login" aria-selected="true">Giriş</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#account-registration" class="nav-link" id="account-registration-tab" data-bs-toggle="tab" role="tab" aria-controls="account-registration" aria-selected="false">Kayıt</a>
                                </li>
                                
                            </ul>
                        </div>
						
                        <div class="tab-content tpl-minimal-tabs-cont section-text wow fadeInUpShort" id="myTabContent-1">
                            
                            <div class="tab-pane fade show active" id="account-login" role="tabpanel" aria-labelledby="account-login-tab">
                                                       
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        
                                        <form class="form contact-form" id="girisforum" action="" method="POST"  onsubmit="return false;">
                                            <div class="clearfix">
                                                
                                                <div class="form-group">
                                                    <label for="username">Kullanıcı Adı</label>
                                                    <input type="text" name="username" id="username" class="input-lg round form-control" placeholder="Kullanıcı Adınız" pattern=".{3,100}" required aria-required="true">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="password">Şifre</label>
                                                    <input type="hidden" name="login_form">
                                                    <input type="password" name="password" id="password" class="input-lg round form-control" placeholder="Şifreniz" pattern=".{5,100}" required aria-required="true">
                                                </div>
                                                    
                                            </div>
                                            
                                            <div class="clearfix">
                                                
                                                <div class="cf-left-col">
                                                                                  
                                                    <div class="form-tip pt-20">
                                                        <a href="">Şifrenizi mi unuttunuz?</a>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="cf-right-col">
                                                    
                                                    <div class="text-end pt-10">
                                                        <button class="submit_btn btn btn-mod btn-w btn-large btn-round" id="login-btn" onclick="endstar_giris()">Giris</button>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </form>
                                        
                                    </div>
                                </div> 
                                
                            </div>
                            
                            <div class="tab-pane fade" id="account-registration" role="tabpanel" aria-labelledby="account-registration-tab">
                                           
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        
                                        <form class="form contact-form" id="kayitform" action="" method="POST"  onsubmit="return false;">
                                            <div class="clearfix">
                                                
                                                <div class="form-group">
                                                    <label for="reg-email">Email</label>
                                                    <input type="text" name="email" id="reg-email" class="input-lg round form-control" placeholder="E-Mail adresiniz" pattern=".{3,100}" required aria-required="true">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="reg-username">Kullanıcı Adı</label>
                                                    <input type="text" name="username" id="reg-username" class="input-lg round form-control" placeholder="Kullanıcı Adınız" pattern=".{3,100}" required aria-required="true">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="reg-password">Şifre</label>
                                                    <input type="password" name="password" id="reg-password" class="input-lg round form-control" placeholder="Şifrenizi yazın" pattern=".{5,100}" required aria-required="true">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="reg-confirm-password">Tekrar Şifreniz</label>
                                                    <input type="password" name="password2" id="reg-confirm-password" class="input-lg round form-control" placeholder="Şifrenizi tekrar yazın" pattern=".{5,100}" required aria-required="true">
                                                </div>
                                                <input type="hidden" name="register">
                                                    
                                            </div>
                                            
                                            <div class="pt-10">
                                                <button class="submit_btn btn btn-mod btn-large btn-round btn-full" id="reg-btn" onclick="endstar_kayit()">Kayıt Ol</button>
                                            </div>
                                            
                                        </form>
                                        
                                    </div>
                                </div>
                            
                            </div>
                            
                        </div>
                                
                    </div>
                </section>

            </main>

<?php 
include'../pages/footer.php';
?>